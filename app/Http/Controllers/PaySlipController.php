<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PaySlipController extends Controller
{
public function show()
    {
        return view('backend.project.payslip');
    }
}
