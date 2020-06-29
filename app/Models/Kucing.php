<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kucing extends Model
{
    use SoftDeletes;

    protected $table = 'kucing';

    protected $fillable = [
        'jenis_kucing','jenis_kelamin','deskripsi','is_adopted','is_approved'
    ]; 

    protected $attributes = [
        'is_adopted' => 0,
        'is_approved' => 0,
    ];
    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(KucingGallery::class, 'kucing_id');
    }
}
