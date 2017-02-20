<?php

namespace App\Repositories;

use App\User;
use App\Comments;

class CommentsRespository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser()
    {
        return Comments::all();
    }
}
