<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyMaster extends Model
{
    protected $primaryKey = 'PropertyId';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'Property_Master';

    public function billData()
    {
        return $this->hasMany(BillData::class, 'PropertyId');
    }
}
