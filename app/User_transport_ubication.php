<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_transport_ubication extends Model
{
    //
    public function pay_module(){
      return $this->belongsTo(App\Pay_module);
    }
}
