<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Realisation;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
	public function index()
    {
		$projects = Realisation::all();
        return view('admin.adminpage', compact('projects'));
    }

	public function store(Request $request)
	{
		$prj = new Realisation();
		$prj->title = $request['title'];
		$prj->type = $request['type'];
		$prj->category = $request['category'];
		$prj->save();

        foreach ($request->file('files') as $file) {
			$filename = rand() . '.' . $file->getClientOriginalExtension();
        	$file->move(public_path('images'), $filename);

            $file = new File();
           	$file->project_id =  $prj->id;
            $file->filename = $filename;
            $file->save();
        }
	return response()->json(['status' => 200]);
	}

	public function delete($id)
	{
		$project = Realisation::findOrFail($id);
		$project->delete();
		return response()->json(['message' => 150]);
	}
}