<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class AlurController extends Controller
{
    public function viewAlur(){
    	$notification = Notification::whereId(1)->first();
		return view('main.alur', ['notification' => $notification]);
    }
}
