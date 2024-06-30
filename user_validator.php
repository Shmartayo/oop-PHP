<?php 

    /*create a user validator class to handle validation
      constructor which takes in POST data from form
      check required 'fields to check' are present in the data
      create methods to validate individual fields
      -- a method to validate a username
      --a method to validate an email 
      return an error array once all checks are done
    */
    class UserValidator{

        private $data;
        private $errors = array();
        private static $fields = array('username','email'); 

        public function __construct($post_data)
        {
            $this->data  = $post_data;
        }

        // Create form validator method
        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }

            $this->validateUsername();
            $this->validateEmail();
            return $this->errors;
        }

        //Create username validator method
        private function validateUsername(){
            //trim out white spaces
            $val = trim($this->data['username']);

            //check if the usermame key is empty
            if(empty($val)){
                $this->addError('username', 'username cannot be empty');
            }else {
                // if $val is mot empty check using reg expression if the $val matches the pattern
                if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                    $this ->addError('username', 'username must be 6-12 chars & alphanumeric');
                }
            }
        }

        //Create email validator method
        private function validateEmail(){
            //trim whitespaces
            $val = trim($this->data['email']);

            //check if email field is empty
            if(empty($val)){
                $this->addError('email','email cannot be empty');
            } else {
                if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                    $this->addError('email', 'email must be a valid email');
                }
            }
        }

        //Create addError method
        private function addError($key, $val){
            $this->errors[$key] = $val;
        }
    }
?>