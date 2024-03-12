<?php

namespace App\Rules;

use App\Models\Payment;
use Illuminate\Contracts\Validation\Rule;

class UniqueEnrollmentId implements Rule
{
    public function passes($attribute, $value)
    {
        // Assuming you have a model named Student and an attribute enrollment_id
        return !Payment::where('enroll_no', $value)->exists();

    }

    public function message()
    {
        return 'The enrollment ID is already associated with an enrolled student.';
    }
}
