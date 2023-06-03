<?php

namespace App\Http\Livewire\Vacancy;

use App\Models\MantaVacancy;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class VacancyUpdate extends Component
{
    public MantaVacancy $item;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $company_id = '1';
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $title = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public ?string $tags = null;
    public ?string $excerpt = null;
    public ?string $content = null;
    public ?string $characteristics = null;
    public ?string $to_offer = null;
    public ?string $show_from = null;
    public ?string $show_till = null;

    public function mount(Request $request, $input)
    {
        $item = MantaVacancy::find($input);
        if ($request->input('locale')) {
            $item = MantaVacancy::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if ($item == null) {
                return redirect()->to(route('manta.vacancies.create', ['locale' => $request->input('locale'), 'pid' => $input]));
            }
        }
        if ($item == null) {
            return redirect()->to(route('manta.vacancies.list'));
        }
        $this->item = $item;
        $this->created_by = $item->created_by;
        $this->updated_by = $item->updated_by;
        $this->company_id = $item->company_id;
        $this->host = $item->host;
        $this->locale = $item->locale;
        $this->title = $item->title;
        $this->slug = $item->slug;
        $this->seo_title = $item->seo_title;
        $this->seo_description = $item->seo_description;
        $this->tags = $item->tags;
        $this->excerpt = $item->excerpt;
        $this->content = $item->content;
        $this->characteristics = $item->characteristics;
        $this->to_offer = $item->to_offer;
        $this->show_from = $item->show_from;
        $this->show_till = $item->show_till;
    }

    public function render()
    {
        return view('livewire.vacancy.vacancy-update')->layout('layouts.manta-bootstrap');
    }

    public function store($input)
    {
        $this->validate(
            [
                'title' => 'required|min:1',
                'slug' => 'required|min:1',
            ],
            [
                'title.required' => 'Titel is verplicht',
                'slug.required' => 'Slug is verplicht',
            ]
        );

        $items = [
            'updated_by' => auth()->user()->name,
            'locale' => $this->locale,
            'title' => $this->title,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'characteristics' => $this->characteristics,
            'to_offer' => $this->to_offer,
        ];
        MantaVacancy::where('id', $this->item->id)->update($items);

        $items = [
            'show_from' => $this->show_from,
            'show_till' => $this->show_till,
        ];
        MantaVacancy::where('id', $this->item->id)->orWhere('pid', $this->item->id)->update($items);

        toastr()->addInfo('Item opgeslagen');
    }
}
