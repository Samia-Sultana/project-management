<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Project $Project)
    {
        return $user->is_admin;

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->is_admin;

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Project $Project)
    {
        return $user->is_admin;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Project $Project)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Project $Project)
    {
        return $user->is_admin;

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Project $Project)
    {
        return $user->is_admin;

    }
}
