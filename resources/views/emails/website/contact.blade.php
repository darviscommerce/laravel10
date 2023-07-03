<x-mail::message>
{{ __('manta_contact.name') }} {{ $item->firstname }},

    {{ __('manta_contact.mail_received') }}

<x-mail::table>
        | | |
        | ------------- | ------------- |
        | {{ __('manta_contact.name') }} | {{ $item->firstname }} {{ $item->lastname }} |
        | {{ __('manta_contact.email') }} | {{ $item->email }} |
        | {{ __('manta_contact.comments') }} | {{ $item->comments }} |
</x-mail::table>

    {{ __('manta_contact.regards') }},
    {{ __('manta_contact.sender_name') }}
</x-mail::message>
