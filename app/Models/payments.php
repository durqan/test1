<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    public function client()
    {
        return $this->hasOne(customers::class, 'id', 'client_id');
    }

    public function service ()
    {
        return $this-> hasOne(services::class, 'id', 'acnt_id');
    }
    public function pay ()
    {
        return $this->hasOne(types_of_payments::class, 'id', 'pay_id');
    }
}
