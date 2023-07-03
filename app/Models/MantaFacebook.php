<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MantaFacebook extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'created_by',
        'updated_by',
        'deleted_by',
        'company_id',
        'host',
        'locale',
        'pid',
        'sort',
        'slug',
        'seo_title',
        'seo_description',
        'tags',
        'title',
        'excerpt',
        'content',
        'company',
        'sex',
        'firstname',
        'lastname',
        'email',
        'phone',
        'date',
        'birthdate',
        'year',
    ];

    /**
     * @return object
     * @throws InvalidArgumentException
     */
    public function uploads(): object
    {
        return $this->hasMany(MantaUpload::class, 'pid', 'id')->where('model', MantaEvent::class)->orderBy('sort', 'ASC')->orderBy('title', 'ASC');
    }

    /**
     * @return object
     * @throws InvalidArgumentException
     */
    public function images(): object
    {
        return $this->hasMany(MantaUpload::class, 'pid', 'id')->whereIn('extension', ['jpg', 'jpeg', 'png'])->where('model', MantaEvent::class)->orderBy('sort', 'ASC')->orderBy('title', 'ASC');
    }

    /**
     * @param null|string $getLocale
     * @return array
     * @throws BindingResolutionException
     */
    public function translation(?string $getLocale = null): array
    {
        $return = ['get', 'org'];
        if ($getLocale == null) $getLocale = app()->getLocale();

        if ($this->pid) {
            $return['org'] = MantaEvent::find($this->pid);
        } else {
            $return['org'] = $this;
        }
        $return['get'] = $return['org'];
        if ($getLocale != config('manta-users.locale')) {
            $item = MantaEvent::where(['pid' => $return['org']->id, 'locale' => $getLocale])->first();
            if ($item) {
                $return['get'] = $item;
            }
        }
        return $return;
    }
}
