<?php
    class User{
        public $username='sohan';
        protected $email="sohanshrestha40@gmail.com";
        private $password="abcsefg";
        public function getemail(){
            return $this->email;
        }
        public function setemail($email){
            return $this->email=$email;
        }
        public function login(){
            echo $this->username . " has logged in.<br>";
        }
    
        public function logout(){
            echo $this->username . " has logged out.<br>";
        }
    }
  
    $sohan = new User;
    $sohan->login();
    // $sohan->username='random';
    $sohan->logout();
    echo $sohan->getemail() . '<br>';
    echo $sohan->setemail('abc@gmail.com') . '<br>';

    class Admin extends User{
        public $role = 'Super Admin';

        public function getuseremail(){
            return $this->email;
        }
    }
    $admin1 = new Admin;
    echo $admin1->setemail('admin123@gmail.com') . '<br>';
    echo $admin1->username='admin <br>';
    echo $admin1->getuseremail();
?>