<?php

namespace App\Http\Livewire\Vacancy;

use App\Models\MantaVacancy;
use Manta\LaravelCms\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class VacancyList extends Component
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
        $obj = MantaVacancy::where('locale', config('manta-cms.locale'))->orderBy($this->sortBy, $this->sortDirection);
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
        return view('livewire.vacancy.vacancy-list', ['items' => $items])->layout('layouts.manta-bootstrap');
    }

    public function loadTrash()
    {
        $this->trashed = count(MantaVacancy::onlyTrashed()->get());
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
        MantaVacancy::find($this->deleteId)->delete();
        $this->deleteId = null;
        $this->trashed = count(MantaVacancy::onlyTrashed()->get());
    }

    public function restore($id)
    {
        MantaVacancy::withTrashed()->where('id', $id)->restore();
        $this->trashed = count(MantaVacancy::onlyTrashed()->get());
        $this->show = 'active';
    }
}
