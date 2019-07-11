<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'position', 'employment_date', 'salary', 'parent_id',
    ];
    
    public function childs() {
        return $this->hasMany('App\User','parent_id','id');
    }

}
