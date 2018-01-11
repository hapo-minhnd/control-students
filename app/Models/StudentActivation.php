<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentActivation extends Model
{
    protected $table = 'student';

    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    public function createActivation($student)
    {

        $activation = $this->getActivation($student);

        if (!$activation) {
            return $this->createToken($student);
        }
        return $this->regenerateToken($student);

    }

    private function regenerateToken($student)
    {

        $token = $this->getToken();
        UserActivation::where('user_id', $student->id)->update([
            'token' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    private function createToken($student)
    {
        $token = $this->getToken();
        UserActivation::insert([
            'student_id' => $student->id,
            'token' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    public function getActivation($student)
    {
        return UserActivation::where('student_id', $student->id)->first();
    }


    public function getActivationByToken($token)
    {
        return UserActivation::where('token', $token)->first();
    }

    public function deleteActivation($token)
    {
        UserActivation::where('token', $token)->delete();
    }
}
