<?php

namespace App\Http\Livewire\Member;

use App\Mail\MailMemberCreate;
use App\Models\MantaMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MemberRead extends Component
{
    public MantaMember $item;

    public ?string $email = null;

    public int $resend = 0;
    public int $send = 0;

    public function mount(Request $request, $input)
    {
        $item = MantaMember::find($input);
        if ($item == null) {
            return redirect()->to(route('manta.contact.list'));
        }
        $this->item = $item;
        $this->email = $item->email;
    }

    public function render()
    {
        return view('livewire.member.member-read')->layout('layouts.manta-bootstrap');
    }

    public function resend()
    {
        $this->resend = 1;
        $this->send = 0;
    }

    public function send()
    {

        $this->validate(
            [
                'email' => 'required|email|min:1',
            ],
            [
                'email.required' => 'Email is verplicht',
                'email.email' => 'Email is niet correct',
            ]
        );

        Mail::to($this->email)->send(new MailMemberCreate($this->item));

        $this->send = 1;
    }
}
