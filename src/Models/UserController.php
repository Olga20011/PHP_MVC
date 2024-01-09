<?php 
namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;

class UserController extends Controller{
    public function index(){
        $users = [
            new User('John Doe' , 'john@example.com'),
            new User('John Doe' , 'john@example.com'),
        ];
        $this->render('user/index' , ['users' =>$users]);
    }
}

?>