<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'sectors_id',
    'names',
    'mother_phone',
    'father_phone',
    'guardian_phone',
    'cause',
    'level_of_drugs',
    'districts_id',
    'sectors_id',
    'villages_id',
    'cells_id',
    'entry_time',
    'release_time',];

    public function district()
    {
        return $this->hasOne(District::class);
    }
}



