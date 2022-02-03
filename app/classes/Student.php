<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post=null)
    {
        if(isset($post['search'])){
            $this->text=$post['search'];
        }
    }

    public function getAllStudent()
 {
     return[
         0=>[
           'name'=>'Hasib',
           'mobile'=>'123456',
           'email'=>'hasib@gmail.com',
           'address'=>'dhaka',
         ],
         1=>[
             'name'=>'zaid',
             'mobile'=>'223356',
             'email'=>'zais@gmail.com',
             'address'=>'barishal',
         ],
         2=>[
             'name'=>'fahim',
             'mobile'=>'213257',
             'email'=>'fahim@gmail.com',
             'address'=>'mymensing',
         ],
         3=>[
             'name'=>'Razib',
             'mobile'=>'243557',
             'email'=>'raz@gmail.com',
             'address'=>'pirojpur',
         ],
         4=>[
             'name'=>'Miraj',
             'mobile'=>'928376',
             'email'=>'mir@gmail.com',
             'address'=>'vola',
         ],
     ];
 }

 public function getStudentBySearchText(){
     $this->students = $this->getAllStudent();
     foreach($this->students as $student){
        if($this->text == $student['name'])
        {
            $this->result=$student;
            break;
        }
     }
        return $this->result;
    }
}