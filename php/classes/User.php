<?php
    class User {
        private $_conn = null,
                $_data;

        public function __construct() {
            $this->_conn = DB::getInstance();
        }

        public function ajouter($table, $fields = array()) {
            $keys = array_keys($fields);
            $values = '';
            $x = 1;
            foreach($fields as $field) {
                $values .= '?';
                if($x < count($fields)) {
                    $values .= ', ';
                }
                $x++;
            }
            $sql = "INSERT INTO `{$table}` (`" . implode('`,`', $keys) . "`) VALUES ({$values})";
            $stmt = $this->_conn->conn->prepare($sql);
            $stmt->execute(array_values($fields));
        }


    }