<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Commons\AppContract;

class App extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        AppContract::NAME, AppContract::PACKAGE
    ];
}
