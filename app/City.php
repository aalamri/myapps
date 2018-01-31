<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The fillable attributes.
     *
     * @var string
     */
    public $fillable = ['name', 'country_id'];

}
