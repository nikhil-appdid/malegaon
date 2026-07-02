<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillData extends Model
{
    protected $primaryKey = 'BillId';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'BillData';

    public function property()
    {
        return $this->belongsTo(PropertyMaster::class, 'PropertyId');
    }
}
