<?php

namespace App\Http\Livewire\Blog;

use App\Models\MantaBlog;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Http\Request;

class BlogCreate extends Component
{
    public ?MantaBlog $item = null;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $company_id = '1';
    public ?string $host = null;
    public ?string $pid = null;
    public ?string $locale = null;
    public ?string $title = null;
    public ?string $subtitle = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public ?string $tags = null;
    public ?string $excerpt = null;
    public ?string $content = null;
    public ?string $show_from = null;
    public ?string $show_till = null;

    public function mount(Request $request)
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        if ($request->input('pid') && $request->input('locale')) {
            $this->item = MantaBlog::find($request->input('pid'));
            if ($this->item) {
                $this->pid = $request->input('pid');
                $this->locale = $request->input('locale');
                $this->title = $this->item->title;
            }
        }
        //
        if (env('APP_ENV') != 'production') {
            $this->title = fake('nl_NL')->sentence(6);
            $this->subtitle = fake('nl_NL')->sentence(6);
            $this->slug = fake('nl_NL')->sentence(6);
            $this->seo_title = fake('nl_NL')->sentence(6);
            $this->seo_description = fake('nl_NL')->sentence(16);
            $this->tags = implode(',', fake('nl_NL')->words(6));
            $this->excerpt = fake('nl_NL')->paragraph('3');
            $this->content = fake('nl_NL')->paragraph('3');
            $this->show_from = (string)Carbon::parse(fake('nl_NL')->dateTimeBetween('-1 years', '+1 month'))->format('Y-m-d H:i');
            $this->show_till = (string)Carbon::parse(fake('nl_NL')->dateTimeBetween('-1 month', '+1 years'))->format('Y-m-d H:i');
        }
    }

    public function render()
    {
        return view('livewire.blog.blog-create')->layout('layouts.manta-bootstrap');
    }

    public function updatedTitle()
    {
        $this->slug = Str::of($this->title)->slug('-');
        $this->seo_title = $this->title;
    }

    public function updatedSlug()
    {
        $this->slug = Str::of($this->slug)->slug('-');
    }

    public function store($input)
    {
        $this->validate(
            [
                'title' => 'required|min:1',
            ],
            [
                'title.required' => 'Titel is verplicht',
            ]
        );

        $items = [
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $this->locale,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'show_from' => $this->show_from,
            'show_till' => $this->show_till,
        ];
        MantaBlog::create($items);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.blog.list'));
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
            'slug' => (string)Str::of($this->item->slug)->slug('-'),
            'seo_title' => $this->item->seo_title,
            'seo_description' => $this->item->seo_description,
            'tags' => $this->item->tags,
            'excerpt' => $this->item->excerpt,
            'content' => $this->item->content,
            'show_from' => $this->item->show_from,
            'show_till' => $this->item->show_till,
        ];

        $item = [];
        foreach ($translateArr as $key => $value) {
            if (
                $key == 'created_by' ||
                $key == 'company_id' ||
                $key == 'host' ||
                $key == 'pid' ||
                $key == 'locale' ||
                $key == 'show_from' ||
                $key == 'show_till' ||
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

        MantaBlog::create($item);


        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.blog.update', ['locale' => $locale, 'input' => $this->item->id]));
    }
}
