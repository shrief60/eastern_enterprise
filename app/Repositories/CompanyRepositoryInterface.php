<?php

namespace App\Repositories;

use App\Models\Company;
use Illuminate\Support\Collection;

interface CompanyRepositoryInterface
{
    public function create( array $parameters) : Company;
    public function get(string $symbol) :  Company;
    public function gatAll(): array;
  
}
