<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingEntry extends Model
{
    protected $table = 'shopping_entry';
    protected $fillable = [ 'description', 'shopping_id' ];
}
