<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    public function addUser($nombre,$apellido, $username, $email, $password, $estado){
        $sql = " INSERT INTO users (nombre, apellido, username, email, password, estado) VALUES ('{$nombre}','{$apellido}','{$username}','{$email}''{$password}','{$estado}')";
        $this ->db->query($sql);

    }
  
    public function getUsers(){

        $sql = "SELECT * FROM users";
        $users = $this-> db -> query($sql) -> getResult();
        return $users;
    }

    public function getUser($id){

        $sql = "SELECT * FROM users WHERE id={$id}";
        $user = $this -> db -> query($sql)-> getResult();
        return $user[0];
    }

    public function loginUser($email, $password){
        $sql = "SELECT * FROM users WHERE email= '{$email}' AND $password = '{$password}' ";
        $user = $this -> db -> query ($sql)->getResult();
        return $user;

    }
}