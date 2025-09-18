<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
    // decribes a relationship btn two database model or table
    public function dojo(){

        return $this->belongsTo(Dojo::class); // this is like saying a Ninja model is directly relate to Dojo model in that each ninja record now belongs to a dojo record and that means in our code we can access dojo data from a ninja instance becausee under the hood eloquent knows about that relationship now and it can grab whatever related data it needs from the database forest
    }
}