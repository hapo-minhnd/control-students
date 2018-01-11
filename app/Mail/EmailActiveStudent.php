<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Student;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailActiveStudent extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.student_active');//->with('student', $this->Student);
    }
}
