<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $table = 'qr_codes';
    protected $fillable = [
        'is_registered',
    ];

    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
