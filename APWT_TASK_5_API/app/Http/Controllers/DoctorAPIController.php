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
}
