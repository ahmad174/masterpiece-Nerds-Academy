<?php

namespace App\Policies;

use App\User;
use App\Majors;
use Illuminate\Auth\Access\HandlesAuthorization;

class MajorsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the majors.
     *
     * @param  \App\User  $user
     * @param  \App\Majors  $majors
     * @return mixed
     */
    public function view(User $user, Majors $majors)
    {
        //
    }

    /**
     * Determine whether the user can create majors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can update the majors.
     *
     * @param  \App\User  $user
     * @param  \App\Majors  $majors
     * @return mixed
     */
    public function update(User $user, Majors $majors)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the majors.
     *
     * @param  \App\User  $user
     * @param  \App\Majors  $majors
     * @return mixed
     */
    public function delete(User $user, Majors $majors)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);

    }

    /**
     * Determine whether the user can restore the majors.
     *
     * @param  \App\User  $user
     * @param  \App\Majors  $majors
     * @return mixed
     */
    public function restore(User $user, Majors $majors)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the majors.
     *
     * @param  \App\User  $user
     * @param  \App\Majors  $majors
     * @return mixed
     */
    public function forceDelete(User $user, Majors $majors)
    {
        //
    }
}
