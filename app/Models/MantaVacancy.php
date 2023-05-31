<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class MantaVacancy extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'manta_vacancies';

    // Disable Laravel's mass assignment protection
    // protected $guarded = [];

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
        'title',
        'slug',
        'seo_title',
        'seo_description',
        'tags',
        'excerpt',
        'content',
        'characteristics',
        'to_offer',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];

    public function translation(?string $getLocale = null): array
    {
        $return = ['get', 'org'];
        if ($getLocale == null) $getLocale = app()->getLocale();

        if ($this->pid) {
            $return['org'] = MantaVacancy::find($this->pid);
        } else {
            $return['org'] = $this;
        }
        $return['get'] = $return['org'];
        if ($getLocale != config('manta-users.locale')) {
            $item = MantaVacancy::where(['pid' => $return['org']->id, 'locale' => $getLocale])->first();
            if ($item) {
                $return['get'] = $item;
            }
        }
        return $return;
    }
}
