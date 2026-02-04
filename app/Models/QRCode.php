<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $table = 'qr_codes';
    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
