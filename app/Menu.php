<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable	=	['name', 'parent', 'icon', 'href'];

    public static function parents(){
    	return \App\Menu::where('parent', null)->get();
    }

    public function children(){

    	return $this->hasMany(\App\Menu::class, 'parent');
    }

    public function getParent(){
    	return $this->belongsTo(\App\Menu::class, 'parent');
    }

}
