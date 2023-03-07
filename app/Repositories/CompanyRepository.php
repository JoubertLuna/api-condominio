<?php

namespace App\Repositories;

use App\Models\API\Condominio\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{

  protected $entity;

  public function __construct(Company $company)
  {
    $this->entity = $company;
  }

  /**
   * Index
   */
  public function getAllCompanies()
  {
    return $this->entity->all();
  }

  /**
   * Show
   */
  public function getCompany($id)
  {
    return $this->entity->findOrFail($id);
  }
}
