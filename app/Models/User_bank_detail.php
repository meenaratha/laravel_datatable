<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_bank_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
                'bank_name',
                'account_holder',
                'account_number',
                'swift_code',
                'bank_branch',
                'bank_address',
                'ifsc_code',
                'address1',
                'address2',
                'city',
                'state',
                'postal_code',
                'country',

                'terms',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
