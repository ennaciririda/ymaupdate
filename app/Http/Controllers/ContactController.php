<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }

	public function insert(Request $request)
	{
		$message = new Message();
		$message->name = $request['name'];
		$message->email = $request['email'];
		$message->subject = $request['subject'];
		$message->message = $request['message'];
		$message->save();

		return response()->json(['status' => 200]);
	}
}
