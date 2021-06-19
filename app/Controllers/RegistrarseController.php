<?php

namespace App\Controllers;

use App\Models\UserModel;



class RegistrarseController extends BaseController{

    public function index (){
        echo view('layouts/header');
        echo view('register_view');
        echo view('layouts/footer');


    }

    public function registrarse(){
		$request = \Config\Services::request();
        $userModel = new UserModel();

        $name = $request->getPost("name");
        $apellido = $request->getPost("apellido");
		$username = $request->getPost("username");
		$email = $request->getPost("email");
		$password = $request->getPost("password");
		$estado= $request->getPost("estado");

        
		$result = $userModel->addUser($name,$apellido,$username,$email,$password,$estado);
		if($result){
			return redirect()->to("/homepage");	
            echo "usuario registrado";
		}else{
			return redirect()->to("/inciar");
		}	

        

        

    }

}
