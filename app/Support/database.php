<?php

    namespace  Ura\Dhura\Support;

    use mysqli;

    /**
     * Class Database
     * @package Ura\Dhura\Support
     */

    abstract class Database {
      private $host = 'localhost';
      private $user = 'root';
      private $pass = '';
      private $db = 'basic';
      private $connection;

      private function connection(){
         return $this -> connection = new mysqli($this -> host, $this-> user, $this->pass, $this-> db );
      }

      protected function create($sql){
           $status = $this->connection() ->query($sql);

           if($status){
               return true;
           }else{
               return false;
           }
      }

      public function all($tbl, $order='DESC'){
         return $this->connection() ->query("SELECT * FROM $tbl ORDER BY id $order");

      }

      public function find($tbl, $id){
           return $this->connection()->query("SELECT * FROM $tbl WHERE id='$id'");
      }

      public function update(){

      }

      public function delete($tbl, $id){
          $status =  $this->connection()->query("DELETE FROM $tbl WHERE id='$id'");
          if($status){
              return true;
          }else{
              return false;
          }
      }



    }