<?php

namespace App\Http\Livewire\Photoalbum;

use App\Models\MantaPhotoalbum;
use Livewire\Component;
use Livewire\WithPagination;
use Manta\LaravelCms\Traits\WithSorting;

class PhotoalbumList extends Component
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
        $this->sortBy = 'created_at';
        $this->sortDirection = 'DESC';
    }

    public function render()
    {
        $obj = MantaPhotoalbum::orderBy($this->sortBy, $this->sortDirection);
        if ($this->show == 'trashed') {
            $obj->onlyTrashed();
        }
        if ($this->search) {
            $keyword = $this->search;
            $obj->where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('subtitle', 'like', '%' . $keyword . '%')
                    ->orWhere('excerpt', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%')
                    ->orWhere('tags', 'like', '%' . $keyword . '%');
            });
            // ->where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%');
        }
        $items = $obj->paginate(20);
        return view('livewire.photoalbum.photoalbum-list', ['items' => $items])->layout('layouts.manta-bootstrap');
    }

    public function loadTrash()
    {
        $this->trashed = count(MantaPhotoalbum::onlyTrashed()->get());
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
        MantaPhotoalbum::find($this->deleteId)->delete();
        $this->deleteId = null;
        $this->trashed = count(MantaPhotoalbum::onlyTrashed()->get());
    }

    public function restore($id)
    {
        MantaPhotoalbum::withTrashed()->where('id', $id)->restore();
        $this->trashed = count(MantaPhotoalbum::onlyTrashed()->get());
        $this->show = 'active';
    }
}
