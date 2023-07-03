<?php

namespace App\Http\Livewire\Facebook;

use App\Models\MantaFacebook;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class FacebookCreate extends Component
{

    public ?string $created_by = null;
    public ?string $updated_by = null;
    public ?string $deleted_by = null;
    public ?string $company_id = null;
    public ?string $host = null;
    public ?string $locale = null;
    public ?string $pid = null;
    public ?string $sort = null;
    public ?string $slug = null;
    public ?string $seo_title = null;
    public ?string $seo_description = null;
    public ?string $tags = null;
    public ?string $title = null;
    public ?string $excerpt = null;
    public ?string $content = null;
    public ?string $company = null;
    public ?string $sex = null;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $date = null;
    public ?string $birthdate = null;
    public ?string $year = null;

    public function mount()
    {
        $this->host = request()->getHost();
        $this->locale = config('manta-cms.locale');

        //
        if (env('APP_ENV') != 'production') {
            $datetime = fake('nl_NL')->dateTimeBetween('-5 years', '-1 years');
            $this->seo_title = fake('nl_NL')->sentence(6);
            $this->seo_description = fake('nl_NL')->sentence(20);
            $this->birthdate = Carbon::parse(fake('nl_NL')->dateTimeBetween('-70 years', '-10 years'))->format('Y-m-d');
            $this->date = Carbon::parse($datetime)->format('Y-m-d');
            $this->slug = Str::of(fake('nl_NL')->sentence(6))->slug('-');
            $this->year = Carbon::parse($datetime)->format('Y');
            $this->title = fake('nl_NL')->sentence(6);
            $this->firstname = fake('nl_NL')->firstName();
            $this->lastname = fake('nl_NL')->lastName();
            $this->email = fake('nl_NL')->unique()->safeEmail();
            $this->phone = fake('nl_NL')->phoneNumber();
            $this->excerpt = fake('nl_NL')->paragraph(1);
            $this->content = fake('nl_NL')->paragraph(2);
        }
    }

    public function render()
    {
        return view('livewire.facebook.facebook-create')->layout('layouts.manta-bootstrap');
    }

    public function store()
    {
        $this->validate(
            [
                'firstname' => 'required|min:1',
            ],
            [
                'firstname.required' => 'Voornaam is verplicht',
            ]
        );

        $item = MantaFacebook::create([
            'created_by' => auth()->user()->name,
            'company_id' => (int)$this->company_id,
            'host' => $this->host,
            'locale' => $this->locale,
            'pid' => $this->pid,
            'sort' => $this->sort,
            'slug' => Str::of($this->slug)->slug('-'),
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'tags' => $this->tags,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'company' => $this->company,
            'sex' => $this->sex,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'birthdate' => $this->birthdate,
            'year' => $this->year,
        ]);

        toastr()->addInfo('Item opgeslagen: ' . $item->firstname);

        return redirect()->to(route('manta.facebook.list'));
    }
}
