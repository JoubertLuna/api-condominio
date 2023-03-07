<?php

namespace App\Repositories\Contracts;

interface CompanyRepositoryInterface
{
  public function getAllCompanies();
  public function getCompany($id);
}
