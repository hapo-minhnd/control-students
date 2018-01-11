<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{
    protected $table = 'teacher';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_teacher', 'password', 'name_teacher', 'subject', 'gender', 'telephone_number', 'email', "active"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function verified()
    {
        $this->active = 1;
        $this->email_token = null;
        $this->save();
    }
}
