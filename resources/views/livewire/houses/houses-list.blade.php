<div class="container" wire:init="loadTrash">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manta.event.list') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Huizen</li>
        </ol>
    </nav>
    <div class="mt-3 row">
        <div class="col-4">
            <a href="{{ route('manta.houses.create') }}" class="btn btn-sm btn-success"><i
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
                <th>Titel</th>
                <th>Slug</th>
                <th>SEO Titel</th>
                <th width="250">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>
                        @if ($item->fullpage)
                            <a href="{{ url($item->slug) }}" target="_blank">{{ $item->slug }}</a>
                        @endif
                    </td>
                    <td>
                        {{ $item->fullpage ? $item->seo_title : null }}
                    </td>
                    <td>
                        @if ($item->trashed())
                            <button wire:click="restore('{{ $item->id }}')" class="btn btn-sm btn-warning"><i
                                    class="fa-solid fa-rotate-left"></i></button>
                        @elseif ($deleteId == null || $deleteId != $item->id)
                            <a href="{{ route('manta.houses.update', ['input' => $item->id]) }}"
                                class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                            @foreach (config('manta-cms.locales') as $key => $value)
                                @if ($key != config('manta-cms.locale'))
                                    @php
                                        $lang = App\Models\MantaHouse::where(['locale' => $key, 'pid' => $item->id])->first();
                                    @endphp
                                    <a class="btn btn-sm {{ $lang ? 'btn-warning' : 'btn-success' }}"
                                        href="{{ route('manta.houses.update', ['locale' => $key, 'input' => $item->id]) }}"><span
                                            class="{{ $value['css'] }}"></span></a>
                                @endif
                            @endforeach

                            @if ($item->fixed)
                                <a href="javascript:;" class="btn btn-sm btn-danger pe-none" tabindex="-1"
                                    aria-disabled="true"><i class="fa-solid fa-lock"></i></a>
                            @else
                                <button wire:click="delete('{{ $item->id }}')" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash-can"></i></button>
                            @endif
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
                    <td colspan="4"> Er zijn geen resultaten</td>
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
