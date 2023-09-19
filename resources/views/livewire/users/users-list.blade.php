@section('seo_title', 'Gebruikers')
<div class="container" wire:init="loadTrash">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gebruikers</li>
        </ol>
    </nav>
    <div class="mt-3 row">
        <div class="col-4">
            <a href="{{ route('manta.users.create') }}" class="btn btn-sm btn-success"><i
                    class="fa-solid fa-circle-plus"></i> Toevoegen</a>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
            <strong>Zoeken:</strong><br>
            <input wire:model.debounce.300ms="search" type="text" placeholder="Zoeken..."
                class="form-control form-control-sm">
        </div>
    </div>
    <ul class="nav nav-tabs mt-4">
        <li class="nav-item">
            <a class="nav-link {{ $show == 'active' ? 'active' : null }}" aria-current="page"
                wire:click="show('active')">Active</a>
        </li>
        <li class="nav-item {{ $trashed < 1 ? 'd-none' : null }}">
            <a class="nav-link {{ $show == 'active' ? 'trashed' : null }}" href="javascript:;"
                wire:click="show('trashed')"><i class="fa-solid fa-trash-can"></i> <span
                    class="badge rounded-pill text-bg-secondary">{{ $trashed }}</span></a>
        </li>
    </ul>
    <table class="table table-sm table-hover table-striped">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Email</th>
                <th width="250">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }} {{ $item->lastname }} {{ $item->nameInsertion }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @if ($item->trashed())
                            <button wire:click="restore('{{ $item->id }}')" class="btn btn-sm btn-warning"><i
                                    class="fa-solid fa-rotate-left"></i></button>
                        @elseif ($deleteId == null || $deleteId != $item->id)
                            <a href="{{ route('manta.users.update', ['input' => $item->id]) }}"
                                class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button wire:click="delete('{{ $item->id }}')" class="btn btn-sm btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        @elseif($deleteId == $item->id)
                            Verwijder?
                            <button class="btn btn-sm btn-success" wire:click="deleteConfirm"><i
                                    class="fa-solid fa-check"></i></button>
                            <button class="btn btn-sm btn-danger" wire:click="deleteCancel"><i
                                    class="fa-solid fa-xmark"></i></button>
                        @endif
                    </td>
                </tr>
            @endforeach
            @if (count($items) == 0)
                <tr>
                    <td colspan="3"> Er zijn geen resultaten</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="container">
        <div style="display:table; margin:0 auto;">
            {{ $items->links() }}
        </div>
    </div>
</div>
