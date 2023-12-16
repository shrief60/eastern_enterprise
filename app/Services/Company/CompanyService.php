<?php

namespace App\Services\Company;

use App\Models\Company;
use App\Repositories\CompanyRepositoryInterface;
use Illuminate\Support\Collection;

class CompanyService implements CompanyServiceInterface
{
    public function  __construct(public CompanyRepositoryInterface $companyRepo){}

    public function create( array $parameters) : Company
    {
        return $this->companyRepo->create($parameters);   
    }

    public function get(string $symbol) :  Company
    {
        return  $this->companyRepo->get($symbol);
    }

    public function gatAll() : array
    {
        return $this->companyRepo->gatAll();
    }
  
}
