<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class Student
 * @package App\Http\Models
 */
class Student extends Authenticatable
{
    protected $table = 'student';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_student', 'password', 'name', 'year_of_birth', 'address', 'code_class', 'email',
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
    public function verified()
    {
        $this->active = 1;
        $this->email_token = 1;
        $this->save();
    }
}
