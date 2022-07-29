<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{   
    protected $guarded = [];
    protected $table = 'blogs';
    protected $fillable =  ['author',
                            'title',
                            'body',
                            'img',];
    
    protected $hidden   =  ['status', 
                            'created_by', 
                            'updated_by', 
                            'canceled_by', 
                            'canceled_at', 
                            'created_at', 
                            'updated_at'];
}