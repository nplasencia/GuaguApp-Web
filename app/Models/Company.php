<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Commons\CompanyContract;

class Company extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        CompanyContract::NAME, CompanyContract::SHORT_NAME
    ];

    public function buses()
    {
        $this->hasMany(Bus::class);
    }
}
