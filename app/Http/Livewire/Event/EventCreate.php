<?php

namespace App\Http\Livewire\Event;

use App\Models\MantaEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;
use Google\Cloud\Translate\V2\TranslateClient;

class EventCreate extends Component
{
    public ?MantaEvent $item = null;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public ?string $sort = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public ?string $tags = null;
    public ?string $title = null;
    public ?string $subtitle = null;
    public ?string $address = null;
    public ?string $zipcode = null;
    public ?string $city = 'Julianadorp';
    public ?string $country = 'NL';
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $from = null;
    public ?string $till = null;
    public ?string $fromPublish = null;
    public ?string $tillPublish = null;
    public ?string $excerpt = null;
    public ?string $content = null;
    public ?string $latitude = null;
    public ?string $longitude = null;

    public ?string $show = 'general';

    public function mount(Request $request)
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        if ($request->input('pid') && $request->input('locale')) {
            $this->item = MantaEvent::find($request->input('pid'));
            if ($this->item) {
                $this->pid = $request->input('pid');
                $this->locale = $request->input('locale');
                $this->title = $this->item->title;
                $this->excerpt = $this->item->excerpt;
                $this->content = $this->item->content;
            }
        }
        //
        if (env('APP_ENV') != 'production') {
            $datetime = fake('nl_NL')->dateTimeBetween('now', '1 years');
            $this->seo_title = fake('nl_NL')->sentence(6);
            $this->seo_description = fake('nl_NL')->sentence(20);
            $this->slug = Str::of(fake('nl_NL')->sentence(6))->slug('-');
            $this->title = fake('nl_NL')->sentence(6);
            $this->subtitle = fake('nl_NL')->sentence(6);
            $this->address = fake('nl_NL')->streetAddress();
            $this->zipcode = fake('nl_NL')->postcode();
            // $this->city = fake('nl_NL')->city();
            // $this->country = fake('nl_NL')->countryCode();
            $this->email = fake('nl_NL')->unique()->safeEmail();
            $this->phone = fake('nl_NL')->phoneNumber();
            $this->from = Carbon::parse($datetime)->format('Y-m-d H:i');
            $this->till = Carbon::parse($datetime)->format('Y-m-d H:i');
            $this->fromPublish = Carbon::parse($datetime)->format('Y-m-d H:i');
            $this->tillPublish = Carbon::parse($datetime)->format('Y-m-d H:i');
            $this->excerpt = fake('nl_NL')->paragraph(1);
            $this->content = fake('nl_NL')->paragraph(2);
        }
    }

    public function render()
    {
        return view('livewire.event.event-create')->layout('layouts.manta-bootstrap');
    }

    public function store()
    {
        $this->validate(
            [
                'title' => 'required|min:1',
            ],
            [
                'title.required' => 'Titel is verplicht',
            ]
        );

        $event = MantaEvent::create([
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'locale' => $this->locale,
            'pid' => $this->pid,
            'sort' => $this->sort,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'title' => $this->title,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'country' => $this->country,
            'email' => $this->email,
            'phone' => $this->phone,
            'from' => Carbon::parse($this->from)->format('Y-m-d H:i'),
            'till' => Carbon::parse($this->till)->format('Y-m-d H:i'),
            'fromPublish' => Carbon::parse($this->fromPublish)->format('Y-m-d H:i'),
            'tillPublish' => Carbon::parse($this->tillPublish)->format('Y-m-d H:i'),
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        toastr()->addInfo('Evenement opgeslagen');

        return redirect()->to(route('manta.event.list'));
    }

    public function googleTranslateTags($locale)
    {

        $translate = new TranslateClient([
            'key' => env('GOOGLE_API')
        ]);


        $translateArr = [
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $locale,
            'title' => $this->item->title,
            'subtitle' => $this->item->subtitle,
            'slug' => Str::of($this->item->slug)->slug('-'),
            'seo_title' => $this->item->seo_title,
            'seo_description' => $this->item->seo_description,
            'tags' => $this->item->tags,
            'excerpt' => $this->item->excerpt,
            'content' => $this->item->content,
        ];

        $item = [];
        foreach ($translateArr as $key => $value) {
            if (
                $key == 'created_by' ||
                $key == 'company_id' ||
                $key == 'host' ||
                $key == 'pid' ||
                $key == 'locale' ||
                $key == 'fixed' ||
                $key == 'fullpage' ||
                $value == null
            ) {
                $item[$key] = $value;
            } else {
                // $item[$key] = $value;
                $result = $translate->translate((string)$value, [
                    'source' => 'nl',
                    'target' => config('manta-cms.locales')[$locale]['google_code']
                ]);
                $item[$key] = $result['text'];
            }
        }
        if (isset($item['slug'])) {
            $item['slug'] = (string)Str::of($item['slug'])->slug('-');
        }

        MantaEvent::create($item);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.event.update', ['locale' => $locale, 'input' => $this->item->id]));
    }
}
