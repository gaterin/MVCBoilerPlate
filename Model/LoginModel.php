<?php /**
 *
 */
class LoginModel
{

  private $dataMaster;

  function __construct()
  {
      $this->dataMaster = new DataMaster();
  }

  public function checkUser($username,$password)
  {
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $loggedIn = $this->dataMaster->execAndFetch($sql);
    
    if (!empty($loggedIn)) {
      $_SESSION['loggedInAs'] = $username;
    }

  }


}
 ?>
