<?php

namespace App\Policies;

use App\User;
use App\Users;
use App\Courses;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Courses  $courses
     * @return mixed
     */
    public function view(User $user, Courses $courses)
    {
        // return ( $user->role === "admin" || $user->id === $courses->user_id);

    }
// $comment->user->username
    /**
     * Determine whether the user can create courses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Courses  $courses
     * @return mixed
     */
    public function update(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Courses  $courses
     * @return mixed
     */
    public function delete(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can restore the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Courses  $courses
     * @return mixed
     */
    public function restore(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Courses  $courses
     * @return mixed
     */
    public function forceDelete(User $user, Courses $courses)
    {
        //
    }
}
