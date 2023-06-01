<?php

namespace App\Http\Livewire\Ccs\Widgets;

use App\Mail\MailVacancy;
use App\Models\MantaVacancy;
use App\Models\MantaVacancyReaction;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CcsVacancyForm extends Component
{
    public MantaVacancy $item;
    public MantaVacancyReaction $reaction;

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public ?string $manta_vacancy_id = null;
    public ?string $company = null;
    public ?string $title = null;
    public ?string $sex = null;
    public ?string $firstname = null;
    public ?string $insertion = null;
    public ?string $lastname = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $address = null;
    public ?string $house_nr = null;
    public ?string $zipcode = null;
    public ?string $city = null;
    public ?string $country = null;
    public ?string $birthdate = null;
    public ?string $subject = null;
    public ?string $comments = null;

    public int $send = 0;

    public function mount()
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        //
        if (env('APP_ENV') != 'production') {
            $this->company = fake('nl_NL')->company();
            $this->title = fake('nl_NL')->randomElement(['Dhr.', 'Mevr.']);
            $this->sex = fake('nl_NL')->randomElement(['man', 'vrouw', 'het']);
            $this->firstname = fake('nl_NL')->firstName();
            $this->insertion = fake('nl_NL')->randomElement(['de', 'van de', 'van der']);;
            $this->lastname = fake('nl_NL')->lastName();
            $this->email = fake('nl_NL')->unique()->safeEmail();
            $this->phone = fake('nl_NL')->phoneNumber();
            $this->address = fake('nl_NL')->streetAddress();
            $this->house_nr = fake('nl_NL')->randomDigit();
            $this->zipcode = fake('nl_NL')->postcode();
            $this->city = fake('nl_NL')->city();
            $this->country = strtolower(fake('nl_NL')->countryCode());
            $this->birthdate = fake('nl_NL')->date('Y-m-d', '-15 years');
            $this->subject = fake('nl_NL')->sentence('5');
            $this->comments = fake('nl_NL')->paragraph('3');
        }
    }

    public function render()
    {
        return view('livewire.ccs.widgets.ccs-vacancy-form');
    }

    public function store($input)
    {
        $this->validate(
            [
                'title' => 'required|min:1',
            ],
            [
                'title.required' => 'Titel is verplicht',
            ]
        );

        $this->send = 1;

        $item = [
            'created_by' => auth()->user() ? auth()->user()->name : 'website',
            'company_id' => (int)$this->company_id,
            'host' => request()->getHost(),
            'pid' => $this->pid,
            'locale' => $this->locale,
            'manta_vacancy_id' => $this->item->id,
            'company' => $this->company,
            'title' => $this->title,
            'sex' => $this->sex,
            'firstname' => $this->firstname,
            'insertion' => $this->insertion,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'house_nr' => $this->house_nr,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'country' => $this->country,
            'birthdate' => $this->birthdate,
            'subject' => $this->subject,
            'comments' => $this->comments,
        ];

        $this->reaction = MantaVacancyReaction::create($item);
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new MailVacancy($this->reaction));
        Mail::to($this->email)->send(new MailVacancy($this->reaction));

        toastr()->addInfo(__('manta_vacancy.form_ok'));
    }
}
