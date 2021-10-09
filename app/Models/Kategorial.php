<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pkb()
    {
        return $this->hasMany(PKB::class);
    }
}
