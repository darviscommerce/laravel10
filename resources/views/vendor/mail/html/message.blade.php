<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>

        <x-mail::header :url="config('app.url')">
            <img src="https://compricoatingservice.eu/theme/ccs/images/logo_acs-p-500.png" height="100"
                alt="Laravel Logo">
        </x-mail::header>
    </x-slot:header>

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        <x-slot:subcopy>
            <x-mail::subcopy>
                {{ $subcopy }}
            </x-mail::subcopy>
        </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
