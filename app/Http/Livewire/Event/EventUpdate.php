<?php

namespace App\Http\Livewire\Event;

use App\Models\MantaEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;

class EventUpdate extends Component
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
    public ?string $city = null;
    public ?string $country = null;
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

    public function mount(Request $request, $input)
    {
        $item = MantaEvent::find($input);
        if ($request->input('locale')) {
            $item = MantaEvent::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if ($item == null) {
                return redirect()->to(route('manta.event.create', ['locale' => $request->input('locale'), 'pid' => $input]));
            }
        }
        if ($item == null) {
            return redirect()->to(route('manta.event.list'));
        }
        $this->item = $item;
        $this->created_by = $item->created_by;
        $this->updated_by = $item->updated_by;
        $this->deleted_by = $item->deleted_by;
        $this->company_id = $item->company_id;
        $this->host = $item->host;
        $this->locale = $item->locale;
        $this->pid = $item->pid;
        $this->sort = $item->sort;
        $this->slug = $item->slug;
        $this->seo_title = $item->seo_title;
        $this->seo_description = $item->seo_description;
        $this->tags = $item->tags;
        $this->title = $item->title;
        $this->subtitle = $item->subtitle;
        $this->address = $item->address;
        $this->zipcode = $item->zipcode;
        $this->city = $item->city;
        $this->country = $item->country;
        $this->email = $item->email;
        $this->phone = $item->phone;
        $this->from = Carbon::parse($item->from)->format('Y-m-d H:i');
        $this->till = Carbon::parse($item->till)->format('Y-m-d H:i');
        $this->fromPublish = Carbon::parse($item->fromPublish)->format('Y-m-d H:i');
        $this->tillPublish = Carbon::parse($item->tillPublish)->format('Y-m-d H:i');
        $this->excerpt = $item->excerpt;
        $this->content = $item->content;
        $this->content = $item->content;
        $this->longitude = $item->longitude;
    }

    public function render()
    {
        return view('livewire.event.event-update')->layout('layouts.manta-bootstrap');
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

        MantaEvent::where('id', $this->item->id)->update([
            'created_by' => auth()->user()->title,
            'company_id' => (int)$this->company_id,
            'host' => $this->created_by,
            'locale' => $this->created_by,
            'pid' => $this->pid,
            'sort' => $this->sort,
            'slug' => $this->slug,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
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
    }
}
