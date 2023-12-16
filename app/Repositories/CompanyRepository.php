<?php

namespace App\Repositories;

use App\Models\Company;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function  __construct(public Company $companyModel){}

    public function create( array $parameters) : Company
    {
        return $this->companyModel->create([
            'name' => $parameters['name'],
            'symbol' => $parameters['symbol'],
            'logo' => $parameters['logo'],
            'description' => $parameters['description'],
            'address' => $parameters['description'],
            'owner_id' => Auth::id()
        ]);   
    }

    public function get(string $symbol) :  Company
    {
        return  $this->companyModel->where('symbol' , $symbol)->with('owner')->firstOrFail();
    }

    public function gatAll() : array
    {
        return $this->companyModel->paginate(10)->items();
    }
  
}
