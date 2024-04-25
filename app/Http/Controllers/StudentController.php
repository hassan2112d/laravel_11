<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showstudent(){

        //$student = DB::select('select * from students where id = ?',[1]);

        //$students =DB::insert("INSERT INTO `students` (`name`, `age`, `email`, `password`, `city_id`) VALUES (?,?,?,?,?)",['Hassan', '19', 'h@gmail.com', '12233', '4']);

        //$students =DB::update("UPDATE `students` SET `name` = 'Rosamond Mora', `age` = '29', `email` = 'gussie.rogahn@gmail.org' WHERE `students`.`id` = ?",[5]);

        //$students = DB::delete("DELETE FROM `students` WHERE `students`.`id` = ?",[8]);

        //$students = DB::unprepared("DELETE FROM `students` WHERE `students`.`id` =6 ");

        //Raw method come in the end of the methods which we have heard and difference between normal and raw
        //method is that raw method does not need single inverted comma again again it can be come singlely and example is under.
        $students = DB::table('students')->selectRaw('name,age,email')->get();

        return $students;
    }
}