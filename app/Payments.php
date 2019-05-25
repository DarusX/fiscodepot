<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'user_id', 'paypal_created_at', 'paypal_payment_id', 'status', 'paypal_payer_id', 'paypal_token'
    ];
}
