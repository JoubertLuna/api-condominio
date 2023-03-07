<?php

namespace App\Repositories;

use App\Models\API\Condominio\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

  protected $entity;

  public function __construct(User $user)
  {
    $this->entity = $user;
  }

  /**
   * Index
   */
  public function getAllUsers()
  {
    return $this->entity->all();
  }

  /**
   * Show
   */
  public function getUser($id)
  {
    return $this->entity->findOrFail($id);
  }
}
