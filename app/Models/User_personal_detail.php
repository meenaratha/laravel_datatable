<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_personal_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
                'first_name',
                'last_name',
                'date_of_birth',
                'gender',
                'email',
                'nric_number',
                'passport_number',
                'short_name',
                'race',
                'address1',
                'address2',
                'city',
                'state',
                'country',
                'postal_code',
                'country_code',
                'mobile_number',
                'employment_status',
                'religion',

                //employee
                'joining_date',
                'designation',
                'department',
                'staff_position',
                'salary_grade',
                'staff_category',
                'staff_qualification',
                'stream_type',
                'staff_category',

                'authentication',

                'image',
                'facebook',
                'twitter',
                'linkedIn',

                 //medical
                 'height',
                 'weight',
                 'allergy',


    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
