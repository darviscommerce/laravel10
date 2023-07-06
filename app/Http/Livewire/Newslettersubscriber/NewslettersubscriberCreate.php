<?php

namespace App\Http\Livewire\Newslettersubscriber;

use App\Models\MantaNewsletterSubscriber;
use Illuminate\Http\Request;
use Livewire\Component;

class NewslettersubscriberCreate extends Component
{
    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public ?string $sort = null;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $email = null;

    public function mount(Request $request)
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');
        //
        if (env('APP_ENV') != 'production') {
            $this->firstname = fake('nl_NL')->firstName();
            $this->lastname = fake('nl_NL')->lastName();
            $this->email = fake('nl_NL')->unique()->safeEmail();
        }
    }

    public function render()
    {
        return view('livewire.newslettersubscriber.newslettersubscriber-create')->layout('layouts.manta-bootstrap');
    }

    public function store($input)
    {
        $this->validate(
            [
                'lastname' => 'required',
                'email' => 'required|email|min:1',
                // 'comments' => 'required',
                // 'privacy' => 'required',
            ],
            [
                'lastname.required' => 'Naam is verplicht',
                'email.required' => 'Email is verplicht',
                'email.email' => 'Email is niet correct',
                // 'comments.required' => 'Opmerkingen zijn verplicht',
                // 'privacy.required' => 'U moet akkoord gaan met de privacy verklaring',
            ]
        );
        $item = [
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'pid' => $this->pid,
            'locale' => $this->locale,

            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
        ];
        MantaNewsletterSubscriber::create($item);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.newsletter.subscriber.list'));
    }
}
