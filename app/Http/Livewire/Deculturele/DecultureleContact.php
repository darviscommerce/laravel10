<?php

namespace App\Http\Livewire\Deculturele;

use App\Mail\MailContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Manta\LaravelContact\Models\MantaContact;

class DecultureleContact extends Component
{

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $pid = null;
    public ?string $locale = 'nl';
    public ?string $company = null;
    public ?string $title = null;
    public ?string $sex = null;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $address = null;
    public ?string $zipcode = null;
    public ?string $city = null;
    public ?string $country = null;
    public ?string $birthdate = null;
    public ?string $newsletters = '1';
    public ?string $subject = null;
    public ?string $comments = null;
    public ?string $internal_contact = null;

    public bool $stored = false;

    public function render()
    {
        return view('livewire.deculturele.deculturele-contact')->layout('layouts.deculturele', ['title' => 'Contact met de culturele vereniging Julianadorp']);
    }

    public function store()
    {
        $this->validate(
            [
                'firstname' => 'required',
                'email' => 'required|email|min:1',
                'comments' => 'required',
                // 'privacy' => 'required',
            ],
            [
                'firstname.required' => 'Naam is verplicht',
                'email.required' => 'Email is verplicht',
                'email.email' => 'Email is niet correct',
                'comments.required' => 'Opmerkingen zijn verplicht',
                // 'privacy.required' => 'U moet akkoord gaan met de privacy verklaring',
            ]
        );

        $item = MantaContact::create([
            'created_by' => auth()->user() ? auth()->user()->name : 'website',
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $this->locale,

            'company' => $this->company,
            'title' => $this->title,
            'sex' => $this->sex,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'country' => $this->country,
            'birthdate' => $this->birthdate,
            'newsletters' => $this->newsletters,
            'subject' => $this->subject,
            'comments' => $this->comments,
            'internal_contact' => $this->internal_contact,
            'ip' => request()->ip(),
        ]);

        Mail::to($this->email)->send(new MailContact($item));
        Mail::to('arvid@darvis.nl')->send(new MailContact($item));
        Mail::to('info@deculturele.nl')->send(new MailContact($item));

        $this->stored = true;
    }
}
