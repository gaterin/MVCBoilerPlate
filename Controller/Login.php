<?php
/**
 *
 */
class Login
{
  private $model;

  function __construct()
  {
    $this->model = new LoginModel();
  }

  public function login()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $this->model->checkUser($username,$password);

    header('Location: ../Home/showHome');
  }

  public function logout()
  {
    session_destroy();
    header('Location: ../Home/showHome');
  }
}


 ?>
