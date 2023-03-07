<?php

namespace App\Services;

use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyService
{

  private $repository;

  public function __construct(CompanyRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  public function getAllCompanies()
  {
    return $this->repository->getAllCompanies();
  }

  public function getCompany($id)
  {
    return $this->repository->getCompany($id);
  }
}
