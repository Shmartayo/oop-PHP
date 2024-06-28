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
            if(strpos($email, '@') > -1){
                $this -> email = $email;
            }
        }

        public function addFriend(){
            echo $this -> name . ' added new friend';
        }
    }

    class Admin extends User {
        public $level;

        public function __construct($name, $email, $level)
        {
            $this -> level = $level;
            parent ::__construct($name,$email);
        }

        public function isAdmin(){
            if ($this-> level){
               echo  "An admin";
            } else{
                echo 'not admin';
            }
        }


    }

    //Instatiating an object
    $userOne = new User('Ayokunle', 'kunlexzy4@gmail.com');
    $userTwo = new Admin('Shmartayo', 'kunlexzy5@gmail.com',5);

    //Getting Results 
    echo $userTwo -> getName() . '<br>';
    echo $userTwo -> getEmail() . '<br>';
    echo $userTwo -> level . '<br>';
    echo $userTwo-> isAdmin();
    
?>