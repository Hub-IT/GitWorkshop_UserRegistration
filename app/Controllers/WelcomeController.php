<?php namespace HubIT\Controllers;

use HubIT\Repositories\UserRepositories\UserStaticRepository;

/**
 * @author Rizart Dokollari
 * @since 6/14/2015
 */
class WelcomeController extends Controller
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();

        $this->userRepository = new UserStaticRepository();
    }

    /**
     * Show all users
     */
    public function index()
    {
        return $this->views->render('welcome', ['users' => $this->userRepository->all()]);
    }
}