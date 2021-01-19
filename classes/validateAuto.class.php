<?php 

    class ValidateAuto{
        private $data;
        private $errors = [];
        private static $fields = ['autokenteken', 'automerk', 'autotype', 'autokmstand', 'klantid'];
        public function __construct($post_data){
            $this->data = $post_data;
        }

        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }
            $this->validateAutokenteken();
            $this->validateAutomerk();
            $this->validateAutotype();
            $this->validateAutokmstand();
            $this->validateKlantid();
            return $this->errors;

        }

        private function validateAutokenteken(){
            $val = trim($this->data['autokenteken']);
            if(empty($val)){
                $this->addError('autokenteken', 'autokenteken mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('autokenteken', 'autokenteken moet tussen 2-12 chars & alphanumeric');
                }
            }
        }

        private function validateAutomerk(){
            $val = trim($this->data['automerk']);

            if(empty($val)){
                $this->addError('automerk', 'automerk mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,40}$/', $val)){
                    $this->addError('automerk', 'automerk moet tussen 2-40 chars & alphanumeric');
                }
            }
        }

        private function validateAutotype(){
            $val = trim($this->data['autotype']);

            if(empty($val)){
                $this->addError('autotype', 'autotype mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,25}$/', $val)){
                    $this->addError('autotype', 'autotype moet tussen 2-25 chars & alphanumeric');
                }
            }
        }

        private function validateAutokmstand(){
            $val = trim($this->data['autokmstand']);

            if(empty($val)){
                $this->addError('autokmstand', 'autokmstand mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{4,30}$/', $val)){
                    $this->addError('autokmstand', 'autokmstand moet tussen 4-30 chars & alphanumeric');
                }
            }
        }

        private function validateKlantid(){
            $val = trim($this->data['klantid']);

            if(empty($val)){
                $this->addError('klantid', 'klantid mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{4,30}$/', $val)){
                    $this->addError('klantid', 'klantid moet tussen 4-30 chars & alphanumeric');
                }
            }
        }

        private function addError($key, $val){
            $this->errors[$key] = $val;
        }
    }
?>