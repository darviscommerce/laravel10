<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.houses.list') }}">Huizen</a></li>
            <li class="breadcrumb-item active" aria-current="page"><em>{!! $item->translation()['get']->title !!}</em> aanpassen</li>
        </ol>
    </nav>

    @include('livewire.houses.includes.nav')

    <div class="mb-3 row">
        <div class="col-sm-3">
            <ul class="list-group">
                @foreach ($tags as $key => $tag)      
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $tag }}
                  <span class="badge bg-danger rounded-pill" wire:click="unset('{{ $key }}')"><i class="fa-solid fa-trash-can"></i></span>
                </li>
                @endforeach    
                <li class="list-group-item d-flex justify-content-between align-items-center">
                 <input type="text" wire:model="title" class="form-control form-control-sm">
                  &nbsp;<span class="badge bg-success rounded-pill" wire:click="addRow"><i class="fa-solid fa-plus"></i></span>
                </li>
              </ul>
        
        </div>
        <div class="col-9">
        </div>
    </div>



        <div class="mb-3 row">
            <div class="col-sm-12">
                {{-- @include('includes.form_error') --}}
                <input class="btn btn-sm btn-primary" type="button" wire:click="store('[]')" value="Opslaan" wire:target="store" wire:loading.class="btn-secondary"
                    wire:loading.attr="disabled" />
            </div>
        </div>

</div>
