<?php

namespace App\Http\Livewire\Member;

use App\Models\MantaMember;
use Livewire\Component;
use Livewire\WithPagination;
use Manta\LaravelCms\Traits\WithSorting;

class MemberList extends Component
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
        $obj = MantaMember::orderBy($this->sortBy, $this->sortDirection);
        if ($this->show == 'trashed') {
            $obj->onlyTrashed();
        }
        if ($this->search) {
            $keyword = $this->search;
            $obj->where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('excerpt', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%')
                    ->orWhere('address', 'like', '%' . $keyword . '%');
            });
            // ->where('title', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%');
        }
        $items = $obj->paginate(20);
        return view('livewire.member.member-list', ['items' => $items])->layout('layouts.manta-bootstrap');
    }

    public function loadTrash()
    {
        $this->trashed = count(MantaMember::onlyTrashed()->get());
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
        MantaMember::find($this->deleteId)->delete();
        $this->deleteId = null;
        $this->trashed = count(MantaMember::onlyTrashed()->get());
    }

    public function restore($id)
    {
        MantaMember::withTrashed()->where('id', $id)->restore();
        $this->trashed = count(MantaMember::onlyTrashed()->get());
        $this->show = 'active';
    }
}
