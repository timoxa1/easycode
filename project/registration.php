<?php

class Registration extends User {
    public $confirm_password;
    private $err = [];

    public function__construct($login,$confirm,$password,$email,$date){
        $this->login = $login;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->email = email;
        $this->date = $date;


  }
}