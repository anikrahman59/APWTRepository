<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorAPIController extends Controller
{
    public function list()
    {
        $doctors=Doctor::all();
        return $doctors;
    } 

    public function doctor(Request $req)
    {
         $dd = new Doctor();

         $dd->doctor_name  = $req->doctor_name;
         $dd->doctor_email = $req->doctor_email;
         $dd->doctor_password = $req->doctor_password;
         $dd->doctor_gender = $req->doctor_gender;
         $dd->doctor_bg = $req->doctor_bg;
         $dd->doctor_phone = $req->doctor_phone;
         $dd->doctor_specialized = $req->doctor_specialized;       
         $dd->save();
 
         return $req;
     }
}
