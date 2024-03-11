<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invitation extends BaseController
{
    public function index()
    {
      return view('invitation');
    }
}
