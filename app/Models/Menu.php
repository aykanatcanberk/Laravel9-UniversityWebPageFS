<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //kategori yerine projede menü kullandım***
    use HasFactory;
    #one To One
    public function contents()
    {

        return $this->hasOne(Content::class);
    }
}
