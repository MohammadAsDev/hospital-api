<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\Departement;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartementPolicy
{
    use HandlesAuthorization;

    private function isAdminOrStaff(User $user) {
        $role = $user->getRoleID();
        return $role == Role::ADMIN || $role == Role::STAFF;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Departement $departement)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can create clinics inside the departement.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function createClinic(User $user)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Departement $departement)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Departement $departement)
    {
        return $this->isAdminOrStaff($user);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Departement $departement)
    {
        // 
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Departement $departement)
    {
        //
    }
}
