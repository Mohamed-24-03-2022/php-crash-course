<?php

class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }


  function display_name(){
    echo $this->name;
  }

}


Class Employee extends User {
  private $title;

  public function __construct($name, $email, $password, $title) {
  parent::__construct($name, $email, $password);
  $this->title = $title;
}

 function get_title(){
  return $this->title;
}
}

// $user1 = new User('MOH', 'email', 'password');
// $user1->display_name();

$employee1 = new Employee('moh', 'mail', 'password', 'manager');
echo $employee1->get_title();


// var_dump($user1);


?>