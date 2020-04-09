<?php
require_once 'model/user.php';
class UserController{
    public function __construct(){
        $this->model = new User();
    }
    public function indexUser(){
        require_once 'view/user.php';
    }
    public function showById(){
        $user=new User();
        if(isset($_REQUEST['id'])){
            $user=$this->model->getById($_REQUEST['id']);
        }
        require_once 'view/user_form.php';
    }

    public function save(){
        $user = new User();
        $user->id=$_REQUEST['id'];
        $user->name=$_REQUEST['name'];
        $user->lastName=$_REQUEST['lastName'];
        $user->sex=$_REQUEST['sex'];
        $user->address=$_REQUEST['address'];
        $user->phone=$_REQUEST['phone'];
        $user->age=$_REQUEST['age'];
        $user->id>0?$user->update():$user->create();
        header('Location: indexUser.php');
    }

    public function quit(){
        $this->model->delete($_REQUEST['id']);
        header('Location: indexUser.php');
      }
}
?>