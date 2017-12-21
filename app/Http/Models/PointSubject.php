<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class Student
 * @package App\Http\Models
 */
class PointSubject extends Authenticatable
{
    protected $table = 'subject_point';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_student', 'name', 'code_subject', 'point', 'semester'
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
     * @param $password
     */
    public function setPassword($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
