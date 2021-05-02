<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    protected $fillable = [
        'name','menuitemcategoryid','menuitemcategoryname','menuitemid','menuitemname','desc','status','image','price'
    ];
}
