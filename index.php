<?php 

    // Creating a class
    class User {

        // Using a private access modifier 
        private $name;
        private $email;
        public $role = 'member';

        //Creating a constructor to dynamically populate user data
        public function __construct($name, $email)
        {
            $this -> name = $name;
            $this -> email = $email;
        }

        //Creating a getter for user Name
        public function getName(){
            return $this -> name;
        }

        //Creating a getter for user Email
        public function getEmail(){
            return $this -> email;
        }

        // Creating a setter to update a user Name
        public function setName($name){
            $this -> name = $name;
        }

        // Creating a setter to update a user Email
        public function setEmail($email){
            $this -> email = $email;
        }
    }
    //Instatiating an object
    $userOne = new User('Ayokunle', 'kunlexzy4@gmail.com');

    //Getting Results 
    echo $userOne -> getName() . '<br>';
    echo $userOne -> getEmail();
?>