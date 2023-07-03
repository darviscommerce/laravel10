<?php

namespace App\Http\Livewire\Deculturele;

use App\Mail\MailMemberCreate;
use App\Models\MantaMember;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DecultureleBecomemember extends Component
{
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $address = null;
    public ?string $zipcode = null;
    public ?string $city = null;
    public ?string $country = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $iban = null;
    public ?string $confirm = null;

    public bool $stored = false;

    public function render()
    {
        return view('livewire.deculturele.deculturele-becomemember')->layout('layouts.deculturele', ['title' => 'Lid worden van de culturele vereniging Julianadorp']);
    }

    public function store()
    {
        $this->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'address' => 'required',
                'zipcode' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                'iban' => 'required',
                'confirm' => 'required',
            ],
            [
                'firstname.required' => 'Voornaam is verplicht',
                'lastname.required' => 'Achternaam is verplicht',
                'address.required' => 'Adres is verplicht',
                'zipcode.required' => 'Postcode is verplicht',
                'city.required' => 'Woonplaats is verplicht',
                'email.required' => 'E-mail is verplicht',
                'iban.required' => 'IBAN is verplicht',
                'confirm.required' => 'Ga akkoord met de algemene voorwaarden',
                'email.email' => 'E-mail is ongeldig',
            ]
        );

        $item = MantaMember::create([
            'created_by' => 'site',
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'country' => $this->country,
            'email' => $this->email,
            'phone' => $this->phone,
            'iban' => $this->iban,
            'ip' => request()->ip()
        ]);

        Mail::to($this->email)->bcc(env('MAIL_TO_ADDRESS'))->send(new MailMemberCreate($item));

        $this->stored = true;
    }
}
