<?php
    class Person{
        private $name;
        private  $email; 
        private static $agelimit = 40;
        
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __class__.' created<br>';
        }
        
        public function __destruct() {
            echo __class__.' destroyed<br>';
        }
        
        public function getName() {
            return $this->name.'<br>';
        }
        public function getEmail() {
            return $this->email.'<br>';
        }
        
        public static function getAgeLimit(){
            return self::$agelimit;
        }
       
    }
    
    echo Person::getAgeLimit();
    
    //$persona1 = new Person('Aashir', 'haq@gmail.com');
    
    //echo $persona1->getName();
    //echo $persona1->getEmail();
    
    class Customer extends Person{
        private $balance;
        
        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }
        
        public function getBalance(){
            return $this->balance.'<br>';
        }
    }
    
    //$customer1 = new Customer('aashir', 'a@gmail.com', 300);
    
    //echo $customer1->getBalance();