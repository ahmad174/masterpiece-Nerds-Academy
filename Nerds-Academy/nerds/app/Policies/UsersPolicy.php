<?php

namespace App\Policies;

use App\User;
use App\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the users.
     *
     * @param  \App\User  $user
     * @param  \App\Users  $users
     * @return mixed
     */
    public function view(User $user, Users $users)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }


    
    
    public function create(User $user)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }

    
    
    public function update(User $user, Users $users)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }


    

    public function delete(User $user, Users $users)
    {
        return in_array($user->email, [
            'ahmad@gmail.com',
        ]);
    }

  
    
}
