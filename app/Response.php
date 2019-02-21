<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    //
    public function opportunity(){
        return $this->belongsTo('App\Opportunity');
    }
}
