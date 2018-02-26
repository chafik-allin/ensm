<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
	protected $fillable	=	[
								'slug', 'name', 'image', 'duration', 'credits', 'language', 'required_diploma', 'level_validated',
								'presentation', 'admission', 'program', 'after', 'contact'
							];


	public function setSlugAttribute($value)
    {
        $object = $this->where('slug','like',$value.'%')->get();
        if($object->count()>0)
            $this->attributes['slug'] =  $value."-".$object->count();
        else
            $this->attributes['slug'] = $value;
    }

}
