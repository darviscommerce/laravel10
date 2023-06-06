<x-mail::message>
    {{ __('manta_vacancy.name') }} {{ $item->firstname }},

    {{ __('manta_vacancy.mail_received') }}

<x-mail::table>
        | | |
        | ------------- | ------------- |
        | {{ __('manta_vacancy.name') }} | {{ $item->firstname }} {{ $item->lastname }} |
        | {{ __('manta_vacancy.email') }} | {{ $item->email }} |
        | {{ __('manta_vacancy.comments') }} | {{ $item->comments }} |
</x-mail::table>

    {{ __('manta_vacancy.regards') }},
    {{ __('manta_vacancy.sender_name') }}
</x-mail::message>
