<?php namespace HubIT\Repositories\UserRepositories;

use HubIT\Models\User;

/**
 * Static users. Please add your first name (the only required), last name, an url with an avatar of yours, and a website.
 */
class UserStaticRepository implements UserRepository
{

    public function all()
    {
        $rawUsers = [
            [
                'fName'   => 'Rizart',
                'lName'   => 'Dokollari',
                'avatar'  => 'https://avatars3.githubusercontent.com/u/4212119?v=3&s=460',
                'website' => 'https://github.com/rdok'
            ],
            [
                //  Input your data here similar to above
                'fName'   => '',
                'lName'   => '',
                'avatar'  => '',
                'website' => ''
            ],
        ];


        $users = [];

        foreach ($rawUsers as $rawUser) {
            $users[] = new User($rawUser);
        }

        return $users;
    }
}