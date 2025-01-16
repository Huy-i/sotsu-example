<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
    ];

<<<<<<< HEAD
    public function questions()
    {
        return $this->hasMany(Question::class);
=======
    public function questions(){
    return $this->hasMany(Question::class);
>>>>>>> e0f0a30c5462c4cae4c0388412c0664063973e35
    }
}
