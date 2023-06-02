<?php

namespace App\Http\Livewire\Blog;

use App\Models\MantaBlog;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;
    use WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $queryString = ['search'];

    public string $show = 'active';
    public ?int $trashed = null;
    public ?string $deleteId = null;

    public function mount()
    {
        $this->sortBy = 'show_till';
        $this->sortDirection = 'DESC';
    }

    public function render()
    {
        $obj = MantaBlog::where('locale', config('manta-cms.locale'))->orderBy($this->sortBy, $this->sortDirection);
        if ($this->show == 'trashed') {
            $obj->onlyTrashed();
        }
        if ($this->search) {
            $keyword = $this->search;
            $obj->where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%');
            });
            // ->where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%');
        }
        $items = $obj->paginate(20);
        return view('livewire.blog.blog-list', ['items' => $items])->layout('layouts.manta-bootstrap');
    }

    public function loadTrash()
    {
        $this->trashed = count(MantaBlog::onlyTrashed()->get());
    }

    public function show($show)
    {
        $this->show = $show;
    }

    public function delete($id)
    {
        $this->deleteId = $id;
    }

    public function deleteCancel()
    {
        $this->deleteId = null;
    }

    public function deleteConfirm()
    {
        MantaBlog::find($this->deleteId)->delete();
        $this->deleteId = null;
        $this->trashed = count(MantaBlog::onlyTrashed()->get());
    }

    public function restore($id)
    {
        MantaBlog::withTrashed()->where('id', $id)->restore();
        $this->trashed = count(MantaBlog::onlyTrashed()->get());
        $this->show = 'active';
    }
}
