<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    #one To One
    public function contents()
    {

        return $this->hasOne(Content::class);
    }
    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
    }
    public function children(){
        return $this->hasOne(Menu::class,'parent_id');
    }
}
