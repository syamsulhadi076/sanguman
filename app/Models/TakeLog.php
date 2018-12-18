<?php

namespace App\Models;

use App\Models\Portion;
use Illuminate\Database\Eloquent\Model;

class TakeLog extends Model
{
    protected $fillable = ['taked_at', 'portion'];

    protected $dates = ['taked_at'];

    /**
     * Belongs Portion
     */
    public function portion()
    {
        return $this->belongsTo(Portion::class);
    }
}
