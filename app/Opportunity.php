<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'Oppo_type', 'Pdt_Required', 'Posted_by', 'Importing_Country', 'Qty_req','MinQty_req', 'PdtCertification', 'TradeAgree',
    ];

    public function TIPO(){
        return $this->belongsTo('App\User');
    }

    public function response(){
        return $this->hasMany('App\Response');
    }
}
