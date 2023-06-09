<?php

namespace App\Http\Livewire\Newslettersubscriber;

use App\Models\MantaNewsletterSubscriber;
use Livewire\Component;
use Livewire\WithPagination;
use Manta\LaravelCms\Traits\WithSorting;

class NewslettersubscriberList extends Component
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
        $obj = MantaNewsletterSubscriber::orderBy($this->sortBy, $this->sortDirection);
        if ($this->show == 'trashed') {
            $obj->onlyTrashed();
        }
        if ($this->search) {
            $keyword = $this->search;
            $obj->where(function ($query) use ($keyword) {
                $query->where('firstname', 'like', '%' . $keyword . '%')
                    ->orWhere('lastname', 'like', '%' . $keyword . '%')
                    ->orWhere('phone', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%')
                    ->orWhere('comments', 'like', '%' . $keyword . '%');
            });
            // ->where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%');
        }
        $items = $obj->paginate(20);
        return view('livewire.newslettersubscriber.newslettersubscriber-list', ['items' => $items])->layout('layouts.manta-bootstrap');
    }

    public function loadTrash()
    {
        $this->trashed = count(MantaNewsletterSubscriber::onlyTrashed()->get());
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
        MantaNewsletterSubscriber::find($this->deleteId)->delete();
        $this->deleteId = null;
        $this->trashed = count(MantaNewsletterSubscriber::onlyTrashed()->get());
    }

    public function restore($id)
    {
        MantaNewsletterSubscriber::withTrashed()->where('id', $id)->restore();
        $this->trashed = count(MantaNewsletterSubscriber::onlyTrashed()->get());
        $this->show = 'active';
    }
}
