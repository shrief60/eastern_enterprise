<?php

namespace App\Services\Company;

use App\Models\Company;
use Illuminate\Support\Collection;

interface CompanyServiceInterface
{
    public function create( array $parameters) : Company;

    public function get(string $symbol) :  Company;

    public function gatAll() : array;
  
}
