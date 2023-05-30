<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Google\Cloud\Translate\V2\TranslateClient;

class MantaHouse extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'manta_houses';

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
        'slogan',
        'slug',
        'seo_title',
        'seo_description',
        'tags',
        'excerpt',
        'content',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tags' => 'array'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
    ];

    public function translation(?string $getLocale = null): array
    {
        $return = ['get','org'];
        if($getLocale == null) $getLocale = app()->getLocale();

        if($this->pid)
        {
            $return['org'] = MantaHouse::find($this->pid);
        } else {
            $return['org'] = $this;
        }
        $return['get'] = $return['org'];
        if($getLocale != config('manta-users.locale'))
        {
            $item = MantaHouse::where(['pid' => $return['org']->id, 'locale' => $getLocale])->first();
            if($item){
                $return['get'] = $item;
            }

        }
        return $return;
    }

    public function googleTranslateTags($locale)
    {

        $translate = new TranslateClient([
            'key' => env('GOOGLE_API')
        ]);
       
        $tags = [];
        foreach($this->translation('nl')['org']->tags as $key => $value)
        {
            $result = $translate->translate($value, [
                'source' => 'nl',
                'target' => $locale
            ]);
            $tags[] = $result['text']; 
        }
        $item = MantaHouse::find($this->id);
        $item->tags = $tags;
        $item->save();
    }
}
