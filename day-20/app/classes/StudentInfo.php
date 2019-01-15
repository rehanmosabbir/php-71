<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 1/15/2019
 * Time: 11:25 PM
 */

namespace App\classes;


class StudentInfo{
    public function addStudentInfo($data){
        $link = mysqli_connect('localhost','root','','bitm-71');
        $sql = "INSERT INTO students(name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";
        if(mysqli_query($link,$sql)){
            $message = "Student Info saved successfully";
            return $message;
        }else{
            die('Query problem: '.mysqli_error($link));
        }
    }
    public function getStudentInfo(){
        $link = mysqli_connect('localhost','root','','bitm-71');
        $sql = "SELECT * FROM students";
        if(mysqli_query($link,$sql)){
            $queryResult = mysqli_query($link,$sql);
            return $queryResult;

        }else{
            die("Query problem: ".mysqli_error($link));
        }
    }
}