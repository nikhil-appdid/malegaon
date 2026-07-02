<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentData extends Model
{
    protected $primaryKey = 'PaymentId';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'PaymentData';
    protected $guarded = [];
    public $timestamps = false;
    public function property()
    {
        return $this->belongsTo(PropertyMaster::class, 'PropertyId');
    }
}
