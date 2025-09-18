<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $filled =['name','location','description'];
    /** @use HasFactory<\Database\Factories\DojoFactory> */

    use HasFactory;
    //
    public function ninjas(){
        return $this->hashMany(Ninja::class);
    }
}