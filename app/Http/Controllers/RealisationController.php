<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Realisation;
use Illuminate\Support\Facades\Storage;
class RealisationController extends Controller
{
	public function index()
    {
		$projects = Realisation::all();
		$files = File::all();
		return view('client.realisation', compact('projects') , compact('files'));
    }

}