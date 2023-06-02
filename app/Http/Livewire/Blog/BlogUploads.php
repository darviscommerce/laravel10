<?php

namespace App\Http\Livewire\Blog;

use App\Models\MantaBlog;
use Illuminate\Http\Request;
use Livewire\Component;

class BlogUploads extends Component
{
    public MantaBlog $item;

    public ?string $locale = null;
    public ?string $plugin = null;

    public string $view = 'list';

    protected $listeners = ['uploadsCreated' => 'uploadsCreated'];

    public function uploadsCreated()
    {
        $this->view = 'list';
    }

    public function mount(Request $request, $input)
    {
        $item = MantaBlog::find($input);
        // if ($request->input('locale') && $request->input('locale') != 'nl') {
        //     $item = MantaBlog::where('locale', $request->input('locale'))->where('pid', $input)->first();
        //     if ($item == null) {
        //         return redirect()->to(route('manta.blog.create', ['locale' => $request->input('locale'), 'pid' => $input]));
        //     }
        // }
        if ($item == null) {
            return redirect()->to(route('manta.blog.list'));
        }
        $this->item = $item;
        $this->locale = $item->locale;
        $this->plugin = 'uploads';
    }

    public function render()
    {
        return view('livewire.blog.blog-uploads')->layout('layouts.manta-bootstrap');
    }

    public function view($view)
    {
        $this->view = $view;
    }

    public function store($input)
    {
    }
}
