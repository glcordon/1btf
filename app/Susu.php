<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Susu extends Model
{
    
    protected $guarded = [];

    
    public function users()
    {
        return $this->belongsToMany('App\User', 'susu_user_table', 'user_id', 'susu_id');
    }
    
}
