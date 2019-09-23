<?php
class Validation {
    private $_passed = false,
            $_errors = array(),
            $_conn = null;
    public function __construct() {
        $this->_conn = DB::getInstance();
    }
    
    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            $name_item = '';
            foreach ($rules as $rule => $rule_value) {
                if($rule === 'name') {
                    $name_item = htmlentities($rule_value);
                }
                
                $value = trim($source[$item]);
                
                if($rule === 'required' && empty($value)){
                    $this->addError("Le champ \"{$name_item}\" est obligatoire.");
                } else if(!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value){
                                $this->addError("{$name_item} doit comporter au moins {$rule_value} caracteres.");
                            }
                            break;
                        case 'max':
                            if(strlen($value) > $rule_value){
                                $this->addError("{$name_item} doit comporter au maximum {$rule_value} caracteres.");
                            }
                            break;
                        case 'email_filter':
                            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                $this->addError("{$name_item} n'est pas valide.");
                            }
                            break;
                        case 'letters':
                            if(!ctype_alpha($value)) {
                                $this->addError("{$name_item} ne doit contenir que des lettres.");
                            }
                            break;
                        case 'numtel':
                        if(!preg_match('/^0\d{9}$/', $value)) {
                            $this->addError("{$name_item} ne correspond pas au format 0XXXXXXXXX.");
                        }
                        break;
                    }
                }
            }
            
        }
        if(empty($this->_errors)){
            $this->_passed = true;
        }
        return $this;
    }
    
    private function addError($error) {
        $this->_errors[] = $error;
    }
    
    public function errors() {
        return $this->_errors;
    }
    public function passed() {
        return $this->_passed;
    }
}