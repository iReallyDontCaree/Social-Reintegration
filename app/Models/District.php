<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['district_name', 'district_code'];




    public function graduate()
    {
        return $this->belongsTo(Graduate::class);
    }
}
