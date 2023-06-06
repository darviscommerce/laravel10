<?php

namespace App\Http\Livewire\Blog;

use App\Models\MantaBlog;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class BlogUpdate extends Component
{
    public MantaBlog $item;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $company_id = '1';
    public ?string $host = null;
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

    public function mount(Request $request, $input)
    {
        $item = MantaBlog::find($input);
        if ($request->input('locale')) {
            $item = MantaBlog::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if ($item == null) {
                return redirect()->to(route('manta.blog.create', ['locale' => $request->input('locale'), 'pid' => $input]));
            }
        }
        if ($item == null) {
            return redirect()->to(route('manta.blog.list'));
        }
        $this->item = $item;
        $this->created_by = $item->created_by;
        $this->updated_by = $item->updated_by;
        $this->company_id = $item->company_id;
        $this->host = $item->host;
        $this->locale = $item->locale;
        $this->title = $item->title;
        $this->subtitle = $item->subtitle;
        $this->slug = $item->slug;
        $this->seo_title = $item->seo_title;
        $this->seo_description = $item->seo_description;
        $this->tags = $item->tags;
        $this->excerpt = $item->excerpt;
        $this->content = $item->content;
        $this->show_from = $item->show_from;
        $this->show_till = $item->show_till;
    }

    public function render()
    {
        return view('livewire.blog.blog-update')->layout('layouts.manta-bootstrap');
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
            'subtitle' => $this->subtitle,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
        ];
        MantaBlog::where('id', $this->item->id)->update($items);
        $items = [
            'show_from' => $this->show_from,
            'show_till' => $this->show_till,
        ];
        MantaBlog::where('id', $this->item->id)->orWhere('pid', $this->item->id)->update($items);

        toastr()->addInfo('Item opgeslagen');
    }
}