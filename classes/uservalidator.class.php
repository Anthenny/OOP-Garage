<?php

    class RegistratieValidator {

        // Private properties die leeg zijn omdat we ze moeten invullen met de informatie die de gebruiker ons geeft.
        private $data;
        private $errors = [];
        private static $fields = ['name', 'email', 'pwd', 'pwdRepeat'];

        // Constructor omdat deze als eerst wordt geladen.
        public function __construct($post_data){
            $this->data = $post_data;
        }

        // Check of de velden zijn ingelogd met alle methods erin op het eind returnen we ook de errors dit kan een lege array zijn maar ook een gevulde.
        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }

            $this->validateName();
            $this->validateEmail();
            $this->validatePwd();
            $this->validatePwdRepeat();
            return $this->errors;
        }

        //Trim de data, als het leeg is of de symbolen zijn niet juist wordt die teruggestuurd zodat we zelf bepalen wat er in de database komt.
        private function validateName(){
            $val = trim($this->data['name']);

            if(empty($val)){
                $this->addError('name', 'Gebruikersnaam moet ingevuld zijn.');
            } else{
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('name', 'Gebruikersnaam moet tussen 2-12 characters zijn.');
                }
            }
        }

        // PHP functie moet een geldige email zijn en er moet iets zijn ingevuld.
        private function validateEmail(){
            $val = trim($this->data['email']);

            if(empty($val)){
                $this->addError('email', 'Email moet ingevuld zijn.');
            }else {
                if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                    $this->addError('email', 'Het moet een echt email adres zijn.');
                }
            }
        }

        // Moet ingevuld zijn en moet de juiste karakters bevatten.
        private function validatePwd(){
            $val = trim($this->data['pwd']);

            if(empty($val)){
                $this->addError('pwd', 'Wachtwoord moet ingevuld zijn.');
            }else {
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('pwd', 'Wachtwoord moet tussen de 3-60 characters zijn.');
                }
            }          
        }

        // Mag natuurlijk niet leeg zijn en het moet matchen.
        private function validatePwdRepeat(){
            $val = trim($this->data['pwdRepeat']);
            $val2 = trim($this->data['pwdRepeat']);

            if(empty($val)){
                $this->addError('pwdRepeat', 'Herhaal wachtwoord mag niet leeg zijn');
            }else{
                if(!$val === $val2){
                    $this->addError('pwdRepeat', 'Wachtwoord moet matchen');
                }
            }
        }

        // Gave method de key is de naam en de error code is de value hij returned dit in de vorm van een array die wij weer aan de gebruiker kunnen laten zien.
        private function addError($key, $val){
            $this->errors[$key] = $val;
        }
    }

    class LoginValidator{
        private $data;
        private $errors = [];
        private static $fields = ['name', 'pwd'];

        public function __construct($post_data){
            $this->data = $post_data;
        }

        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field,$this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }
            $this->validateName();
            $this->validatePwd();
            return $this->errors;
        }

        private function validateName(){
            $val = trim($this->data['name']);

            if(empty($val)){
                $this->addError('name', 'Naam mag niet leeg zijn.');
            } else {
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('name', 'Gebruikersnaam moet tussen 2-12 characters zijn.');
                }
            }
        }

        private function validatePwd(){
            $val = trim($this->data['pwd']);

            if(empty($val)){
                $this->addError('pwd', 'Wachtwoord mag niet leeg zijn');
            } else{
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('pwd', 'Wachtwoord moet tussen de 3-60 characters zijn.');
                }
            }

        }

        private function addError($key, $val){
            $this->errors[$key] = $val;

        }
    }