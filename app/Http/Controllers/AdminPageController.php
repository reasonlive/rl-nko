<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;



class AdminPageController extends Controller
{
	/**
	 * show form for authentication
	 * 
	 * @return View authenticated form
	 */
	public function login(Request $req)
	{
		if($req->session()->has('auth'))
			return redirect('/admin');
		return View::make('forms.auth');
	}

	/**
	 * Authenticate user as admin
	 * 
	 * @param Request user credentials
	 * @return View 
	 */
	public function auth(Request $req)
	{
		$input = $req->only(['email', 'password']);
		
		$user = User::get()->where('email', 'mail@mail.ru');

		if($user && count($user) < 2)
		{
			$id = array_values($user->modelKeys());

			$admin = User::find($id[0]);
			$attrs = $admin->getAttributes();

			if($admin->getAuthPassword() == $input['password'])
			{
				$req->session()->put(['auth' => $admin->getRememberToken()]);
				return redirect('/admin');
			}

		}
		
		return View::make('forms.auth', ['err' => true]);
	}

	/**
	 * administration page
	 * 
	 * @param Request $req
	 */
    public function view(Request $req)
    {
    	if($req->session()->has('auth'))
    		return View::make('pages.admin', ['showOrders' => false, 'orders' => null]);
    	else
    		return View::make('forms.auth');
    }

    public function logout(Request $req)
    {
    	$req->session()->flush();
    	return redirect('/');
    }
}
