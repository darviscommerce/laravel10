<x-mail::message>
    {{ __('manta_vacancy.name') }} {{ $item->firstname }},

    <p>{{ __('manta_vacancy.mail_received') }}</p>

    <x-mail::table>
        | | |
        | ------------- | ------------- |
        | {{ __('manta_vacancy.name') }} | {{ $item->firstname }} {{ $item->lastname }} |
        | {{ __('manta_vacancy.email') }} | {{ $item->email }} |
        | {{ __('manta_vacancy.comments') }} | {{ $item->comments }} |
    </x-mail::table>

    {{ __('manta_vacancy.regards') }},<br>
    {{ __('manta_vacancy.sender_name') }}
</x-mail::message>
