<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KucingGallery extends Model
{
    use SoftDeletes;

    protected $table = 'kucing_galleries';

    protected $fillable = [
        'kucing_id', 'photo'
    ]; 
    protected $hidden = [

    ];

    public function kucing(){
        return $this->belongsTo(Kucing::class, 'kucing_id', 'id');
    }

    public function getPhotoAttribute($value){
        return url('storage/', $value);
    }
}
