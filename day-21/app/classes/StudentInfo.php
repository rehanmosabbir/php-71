<?php

namespace App\classes;

class StudentInfo{

    public function dbConnection(){
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bitm-71';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }

    public function addStudentInfo($data){
        $sql = "INSERT INTO students(name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";
        if(mysqli_query(StudentInfo::dbConnection(),$sql)){
            $message = "Student Info saved successfully";
            return $message;
//            header('Location: view-student.php');

        }else{
            die('Query problem: '.mysqli_error(StudentInfo::dbConnection()));
        }
    }
    public function getStudentInfo(){
        $sql = "SELECT * FROM students";
        if(mysqli_query(StudentInfo::dbConnection(),$sql)){
            $queryResult = mysqli_query(StudentInfo::dbConnection(),$sql);
            return $queryResult;

        }else{
            die("Query problem: ".mysqli_error(StudentInfo::dbConnection()));
        }
    }
    public function getStudentInfoById($id){
        $sql = "SELECT * FROM students WHERE id='$id'";
        if(mysqli_query(StudentInfo::dbConnection(),$sql)){
            $queryResult = mysqli_query(StudentInfo::dbConnection(),$sql);
            return $queryResult;

        }else{
            die("Query problem: ".mysqli_error(StudentInfo::dbConnection()));
        }
    }
    public function updateStudentInfo($data){
        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile = '$data[mobile]' WHERE id='$data[id]'";
        if(mysqli_query(StudentInfo::dbConnection(),$sql)){
            header('Location: view-student.php');
        }else{
            die('Query problem: '.mysqli_error(StudentInfo::dbConnection()));
        }
    }

    public function deleteStudentInfo($id){
        $sql = "DELETE FROM students WHERE id='$id'";
        if(mysqli_query(StudentInfo::dbConnection(),$sql)){
            $message = "Student Info deleted successfully";
            return $message;
        }else{
            die('Query problem: '.mysqli_error(StudentInfo::dbConnection()));
        }
    }
}