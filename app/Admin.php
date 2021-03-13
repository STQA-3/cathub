<?php

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \Parental\HasChildren;

// The "parent"
class User extends Model
{

    protected $fillable = ['type'];

    protected $childTypes = [
        'admin' => App\Admin::class,
        'guest' => App\Guest::class,
    ];
}

?>
