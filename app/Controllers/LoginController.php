<?php

namespace App\Controllers;
use App\Models\UserModel;

class LoginController extends BaseController
{
	public function index(){
        echo view('layouts/header');
		echo view('login_view');
        echo view('layouts/footer');
	}

	public function signin(){

		$request = \Config\Services::request();
		$userModel = new UserModel();
		$session = \Config\Services::session();
		$email = $request-> getPost('username');
		$password = $request->getPost('password');
		$user = $userModel->loginUser(username, $password);
		if(count($user)> 0){

			$newdata = [
				'username' => 'johndoe',
				'email' => 'johndoe@somesite.com',
				'logged_in' => TRUE
			];

			$session->set($newdata);
			return redirect() ->to('/user?id=2');
		} else{

			echo "datos incorrectos";
		}
		
	}

	public function addUser(){

		$request = \Config\Services::request();
		$userModel = new UserModel();
		$nombre = $request-> getPost('nombre');
		$apellido = $request-> getPost('apellido');
		$username = $request-> getPost('username');
		$email = $request-> getPost('email');
		$password = $request->getPost('password');
		$estado = $request-> getPost('estado');
		$userModel -> addUser($nombre, $apellido, $username, $email, $password, $estado);
		
	}

	
	public function getUsers(){

		$userModel = new UserModel();
		$users = $userModel-> getUsers();
		$data = array("users" => $users);
		print_r($data);
		echo view('layouts/header');
		echo view('list_users', $data);
        echo view('layouts/footer');
	}

	public function getUser(){

		$session = \Config\Services::session();
		if($session->get('username') ==""){
			echo "no tiene permiso";
		}else{

		$request = \Config\Services::request();
		$userModel = new UserModel();
		$id = $request ->getGet('id');
		$user = $userModel ->getUser($id);
		echo view('layouts/header');
		echo view('user_view',array("user" => $user));
        echo view('layouts/footer');
	
	}
}



}
