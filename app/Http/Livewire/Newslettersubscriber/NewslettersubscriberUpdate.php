<?php

namespace App\Http\Livewire\Newslettersubscriber;

use App\Models\MantaNewsletterSubscriber;
use Illuminate\Http\Request;
use Livewire\Component;

class NewslettersubscriberUpdate extends Component
{
    public MantaNewsletterSubscriber $item;

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

    public function mount(Request $request, $input)
    {
        $item = MantaNewsletterSubscriber::find($input);
        if ($item == null) {
            return redirect()->to(route('manta.contact.list'));
        }
        $this->item = $item;
        $this->company_id = $item->company_id;
        $this->host = $item->host;
        $this->locale = $item->locale;
        $this->firstname = $item->firstname;
        $this->lastname = $item->lastname;
        $this->email = $item->email;
    }

    public function render()
    {
        return view('livewire.newslettersubscriber.newslettersubscriber-update')->layout('layouts.manta-bootstrap');
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
        MantaNewsletterSubscriber::where('id', $this->item->id)->update($item);

        toastr()->addInfo('Item opgeslagen');

        return redirect()->to(route('manta.newsletter.subscriber.list'));
    }
}
