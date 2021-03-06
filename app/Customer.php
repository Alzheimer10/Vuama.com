<?php

namespace App;

use App\Notifications\CustomerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Models\Project;
use App\Models\Bank_account;

class Customer extends Authenticatable
{
    use Notifiable, Sluggable;
    use SluggableScopeHelpers;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'description',
        'avatar',
        'status',
        'slug',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPassword($token));
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name','lastname']
            ]
        ];
    }

    public function fullname()
    {
        return $this->name.' '. $this->lastname;
    }
    
    public function bank_accounts()
    {
        return $this->hasMany(bank_account::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
