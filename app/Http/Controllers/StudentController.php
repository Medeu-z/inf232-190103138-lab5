<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_student_name(){
     static $students = array(0 =>"Zhaniya",1 => "Aruzhan",2 => "Rimma");
     return $students;
    }
     public function get_student_db(){
     static $db = array(0 =>"23.11.2001",1 => "31.04.2001",2 => "04.07.20001");
     return $db;
    }
     public function get_student_age(){
     static $ages = array(0 =>"19",1 => "20",2 => "21");
     return $ages;
    }
     public function show($id){
      $students = $this->get_student_name();
     
     return view("user",["name" => $students[$id]]);
    }
    
}
