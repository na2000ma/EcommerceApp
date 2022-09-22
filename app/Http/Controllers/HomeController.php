<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    //

    public function redirect(): Factory|View|Application
    {
        /**
         * @var User $user;
         */
        $user = auth()->user();
        $userType = $user->userType;
        if ($userType == 0) {
            return view('dashboard');
        } else {
            return view('admin.home');
        }

    }

    public function index(): Factory|View|Application
    {
        return view('home.user_page');

    }



    public function contact(): Factory|View|Application
    {
        return view('home.contact');
    }



}
