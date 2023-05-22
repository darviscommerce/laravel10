<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class HousesCreate extends Component
{
    public ?MantaHouse $item = null;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $company_id = '1';
    public ?string $host = null;
    public ?string $pid = null;
    public ?string $locale = null;
    public ?string $title = null;
    public ?string $slug = null;
    public ?string $seo_title = null;

    public function mount(Request $request)
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        if($request->input('pid') && $request->input('locale')){
            $this->item = MantaHouse::find($request->input('pid'));
            if($this->item){
                $this->pid = $request->input('pid');
                $this->locale = $request->input('locale');
                $this->title = $this->item->title;
            }
        }
    }

    public function render()
    {
        return view('livewire.houses.houses-create')->layout('layouts.manta-bootstrap');
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
        
        $item = MantaHouse::create([
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $this->locale,
            'title' => $this->title,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
        ]);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.houses.update', ['input' => $item->id]));
    }
}
