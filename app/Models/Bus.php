<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Commons\BusContract;

class Bus extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        BusContract::COMPANY_ID, BusContract::NAME
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, BusContract::COMPANY_ID);
    }
}
