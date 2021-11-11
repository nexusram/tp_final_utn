<?php

namespace Controllers;

use DAO\ApplicationsDAO;
use DAO\CareerDAO;
use DAO\JobOfertDAO;
use DAO\JobPositionDAO;
use DAO\StudentDAO as StudentDAO;
use Models\Applications;
use Models\Student as Student;

class StudentController
{
    private $studentDAO;

    public function __construct()
    {
        $this->studentDAO = new StudentDAO();
        $this->jobOferDAO = new JobOfertDAO();
        $this->applicationDAO = new ApplicationsDAO();
    }

    public function ShowAddView()
    {
        require_once(VIEWS_PATH . "student-add.php");
    }

    public function ShowListView()
    {
        $postulaciones = $this->studentDAO->GetAll();


         require_once(VIEWS_PATH."student-list.php");
    }
    /*
    public function crearBase()
    {
        $studentList = new StudentDAO();

        $studentList->create();
    }
*/
    public function crearCareer()
    {
        $careertList = new CareerDAO();

        $careertList->createCarrer();
    }
    public function crearJob()
    {
        $jobList = new JobPositionDAO();

        $jobList->createJob();
    }


    public function AddNew($email, $password)
    {
        $studentList = $this->studentDAO->GetAll();

        $aux = 0;
        foreach ($studentList as $dato) {
            if ($dato->getEmail() == $email) {
              ?>
                <script type="text/javascript">alert("ya existe en el sistema!"); </script>
                <?php
                $this->Register();
              
                $aux = $dato->getEmail();
            }
        }
        if ($aux != $email) {
            $students = $this->studentDAO->checkApi();
            $flag = -1;
            foreach ($students as $student) {

                if (($student['email'] == $email)) {


                    $newStudent = new Student();

                    $newStudent->setStudentId($student["studentId"]);
                    $newStudent->setCareerId($student["careerId"]);
                    $newStudent->setFirstName($student["firstName"]);
                    $newStudent->setLastName($student["lastName"]);
                    $newStudent->setDni($student["dni"]);
                    $newStudent->setFileNumber($student["fileNumber"]);
                    $newStudent->setGender($student["gender"]);
                    $newStudent->setBirthDate($student["birthDate"]);
                    $newStudent->setEmail($student["email"]);
                    $newStudent->setPhoneNumber($student["phoneNumber"]);
                    $newStudent->setActivo($student["active"]);
                    $newStudent->setPassword($password);
                    $this->studentDAO->Add($newStudent);
                    $flag = 1;
                }
            }
            if ($flag == -1) {
                echo "<script> if(confirm('no se encuentra registrado en el sistema , comuniquese con la facultad!'));";
                echo "window.location = '../index.php'; </script>";
            }
            else{
                echo "<script> if(confirm('registro exitoso!'));";
            echo "window.location = '../index.php';</script>";
            }
        }
      /*  if (isset($_SESSION["email"])) {

            $this->Register();
        } else {
        
            echo "<script> if(confirm('registro exitoso!'));";
            echo "window.location = '../index.php';</script>";
        }*/
      
    }

    public function Profile()
    {
        $studentLista = $this->studentDAO->GetAll();
        require_once(VIEWS_PATH . "student-profile.php");
    }

    public function Register()
    {
        require_once(VIEWS_PATH . "addStudent.php");
    }



}
