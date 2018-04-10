<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Str as Str;
use App\Models\Service;

class Project extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'status',
        'schedule',
        'maximum',
        'service_id',
        'slug',
        'user_id'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }


    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
