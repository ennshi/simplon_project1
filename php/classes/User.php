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

        public function supprimer($table, $field, $value) {
            $stmt = $this->_conn->conn->prepare("DELETE FROM `{$table}` WHERE `{$field}`=?");
            $stmt->execute(array($value));
        }

        public function modifier($table, $id, $fields = array()){
            $fields_sql = '';
            $x = 1;
            foreach($fields as $field=>$value){
                $part = "`{$field}` = ?";
                $fields_sql .= $part;
                if($x < count($fields)) {
                    $fields_sql .= ', ';
                }
                $x++;
            }
            $sql = "UPDATE `{$table}` SET {$fields_sql} WHERE `id` = {$id}";
            $stmt = $this->_conn->conn->prepare($sql);
            $stmt->execute(array_values($fields));
        }


    }