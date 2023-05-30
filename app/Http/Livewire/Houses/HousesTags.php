<?php

namespace App\Http\Livewire\Houses;

use App\Models\MantaHouse;
use Illuminate\Http\Request;
use Livewire\Component;

class HousesTags extends Component
{
    public MantaHouse $item;
    public MantaHouse $original;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public array $tags = [];

    public ?string $title = null;

    public string $view = 'tags';

    public function mount(Request $request, $input)
    {
        $item = MantaHouse::find($input);
        if($item){
            $this->original = $item;
        }
        if ($request->input('locale') && $request->input('locale') != 'nl') {
            $item = MantaHouse::where('locale', $request->input('locale'))->where('pid', $input)->first();
            if ($item == null) {
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
        $this->tags = (array)$item->tags;
    }

    public function render()
    {
        return view('livewire.houses.houses-tags')->layout('layouts.manta-bootstrap');
    }

    public function translate()
    {
        if(count((array)$this->tags) == 0)
        {
            $this->item->googleTranslateTags($this->locale);
        }
        $this->item = MantaHouse::find($this->item->id);
        $this->tags = $this->item->tags;
    }

    public function addRow()
    {
        if (!empty($this->title)) {
            $this->tags[] = $this->title;
            $this->title = null;
        } else {
            toastr()->addError('Het veld is leeg');
        }
    }

    public function unset($key)
    {
        unset($this->tags[$key]);
    }

    public function store($input)
    {
        $this->validate(
            [
                'tags' => 'required|array',
            ],
            [
                'title.required' => 'Titel is verplicht',
            ]
        );

        MantaHouse::where('id', $this->item->id)->update([
            'updated_by' => auth()->user()->name,
            'tags' => (array)$this->tags,
        ]);

        toastr()->addInfo('Item opgeslagen');
    }
}
