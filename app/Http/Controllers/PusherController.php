<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PusherController extends Controller
{
    public function pusher_page()
    {
        return view('pusher');
    }
}
