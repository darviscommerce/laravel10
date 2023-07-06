<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MantaNewsletterSubscriber extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table = 'members';

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
        'sort',
        'firstname',
        'lastname',
        'email',
    ];
}
