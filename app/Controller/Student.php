<?php

    namespace Ura\Dhura\Controller;

    use Ura\Dhura\Support\database;
    /**
     * Class Student
     * @package Ura\Dhura\Controller
     */

    class Student extends database {

        public function Student($name, $email, $cell, $uname){

           $data = $this->create("INSERT INTO students(name,email,cell,uname) VALUES ('$name','$email','$cell','$uname')");

           if($data){
               return '<p class="alert alert-success">Student created successfully! <button class="close" data-dismiss="alert">$times;</button></p>';
           }else{
               return false;
           }
        }

        public function AllData(){
           $data = $this -> all('students');
           return $data;
        }

        /**
         * student delete
         * @param $id
         */
        public function DeleteStudent($id){
           $data =  $this->delete('students', $id);

            if($data){
                return '<p class="alert alert-success">Student deleted successfully! <button class="close" data-dismiss="alert">$times;</button></p>';
            }
        }

        /**
         * @param $id
         */

        public function singleStudent($id){
           $data = $this->find('students', $id);
           return $data;
        }

    }