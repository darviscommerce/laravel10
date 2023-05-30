<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class HousesUpdate extends Component
{
    public MantaHouse $item;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public ?string $title = null;
    public ?string $slogan = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public array $tags = [];
    public ?string $excerpt = null;
    public ?string $content = null;

    public string $view = 'update';

    public function mount(Request $request, $input)
    {
        $item = MantaHouse::find($input);
        if($request->input('locale')){
            $item = MantaHouse::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if($item == null){
                return redirect()->to(route('manta.houses.create', ['locale' => $request->input('locale'), 'pid' => $input]));
            }
        }
        if ($item == null) {
            return redirect()->to(route('manta.houses.list'));
        }
        $this->item = $item;     
        $this->created_by = $item->created_by;
        $this->updated_by = $item->updated_by;
        $this->deleted_by = $item->deleted_by;
        $this->company_id = $item->company_id;
        $this->host = $item->host;
        $this->locale = $item->locale;
        $this->pid = $item->pid;
        $this->title = $item->title;
        $this->slogan = $item->slogan;
        $this->slug = $item->slug;
        $this->seo_title = $item->seo_title;
        $this->seo_description = $item->seo_description;   
        $this->excerpt = $item->excerpt;
        $this->content = $item->content;

    }

    public function render()
    {
        return view('livewire.houses.houses-update')->layout('layouts.manta-bootstrap');
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

        MantaHouse::where('id', $this->item->id)->update([
            'updated_by' => auth()->user()->name,
            'locale' => $this->locale,
            'title' => $this->title,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'slogan' => $this->slogan
        ]);

        toastr()->addInfo('Item opgeslagen');
    }
}
