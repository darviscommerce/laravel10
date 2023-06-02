<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('manta.blog.list') }}">Nieuws</a></li>
            <li class="breadcrumb-item active" aria-current="page"><em>{!! $item->translation()['get']->title !!}</em> uploads</li>
        </ol>
    </nav>

    @include('livewire.blog.includes.blog-nav')

    <ul class="mb-4 nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ $view == 'list' ? 'active' : null }}" wire:click="view('list')"
                href="javascript:;">Uploads</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $view == 'create' ? 'active' : null }}" wire:click="view('create')"
                href="javascript:;">Toevoegen</a>
        </li>
    </ul>
    @if ($view == 'list')
        @livewire('uploads.uploads-uploads', ['pid' => $item->id, 'model' => App\Models\MantaBlog::class], key('uploads' . time()))
    @else
        @livewire('uploads.uploads-upload', ['pid' => $item->id, 'model' => App\Models\MantaBlog::class], key('upload' . time()))
    @endif
</div>
