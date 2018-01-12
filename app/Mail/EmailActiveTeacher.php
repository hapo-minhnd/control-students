<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Teacher;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailActiveTeacher extends Mailable
{
    use Queueable, SerializesModels;

    public $teacher;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.teacher_active');//->with('student', $this->Student);
    }
}
