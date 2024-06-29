<?php 

    // Creating a class
    class User {

        // Using a private access modifier 
        private $name;
        protected $email;
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
            return $this -> name . ' added new friend';
        }

        public function isAdmin(){
            if ($this-> role == 'admin'){
               echo  "An admin";
            } else{
                echo 'not admin';
            }
        }

        public function message(){
            return $this -> email . ' sent a new message';
        }
    }

    class Admin extends User {
        public $level;
        public $role = 'admin';


        public function __construct($name, $email, $level)
        {
            $this -> level = $level;
            parent ::__construct($name,$email);
        }

        
        public function message(){
            return $this -> email .' , an admin, sent a new message';
        }
    }

    //Instatiating an object
    $userOne = new User('Ayokunle', 'kunlexzy4@gmail.com');
    $userTwo = new Admin('Shmartayo', 'kunlexzy5@gmail.com',5);

    //Getting Results 
    echo $userTwo -> getName() . '<br>';
    echo $userTwo -> getEmail() . '<br>';
    echo $userTwo -> level . '<br>';
    echo $userTwo-> isAdmin() . '<br>';
    echo $userTwo-> message() . '<br>';
    echo $userTwo-> role  . '<br><br>';


    echo $userOne -> getName() . '<br>';
    echo $userOne -> getEmail() . '<br>';
    echo $userOne-> isAdmin() . '<br>';
    echo $userOne-> message() . '<br>';
    echo $userOne-> role;
    
?>