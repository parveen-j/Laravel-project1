<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // $fillable columns of Projects table
    protected $fillable= ['name',
    'description',
    'company_id',
    'user_id',
    'days'
    ];

    
    public function user(){
        return $this->belongsToMany('App\User');
    }


    public function company(){
        return $this->belongsTo('App\Company');
    }

}
