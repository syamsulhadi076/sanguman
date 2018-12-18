<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $fillable = ['name', 'picked_at'];

    protected $dates = ['picked_at'];

    /**
     * Belongs To Order
     *
     * @return void
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
