<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return $projects;
    }
    
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
        ]);

        // Get the file from the request
        $imageFile = $request->file('image');

        // Generate a unique name for the file
        $imageName = uniqid('project_') . '.' . $imageFile->getClientOriginalExtension();

        // Specify the directory where you want to store the file
        $directory = 'project_images';

        // Move the file to the desired directory with the generated name
        $imagePath = $imageFile->move($directory, $imageName);
        // Create a new project with the validated data and image path
        Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        // Redirect to the project index page
        return redirect()->route('dashboard');
    }

   
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
        ]);

        // Fetch the project by ID from the database
        $project = Project::findOrFail($id);

        // Update the project with the validated data
        $project->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = Str::uuid()->toString() . '.' . $imageFile->getClientOriginalExtension();
            $directory = 'project_images';
            $imageFile->move($directory, $imageName);
            $project->update(['image' => $directory . '/' . $imageName]);
        }

        // Redirect to the project index page
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the project by ID from the database and delete it
        $project = Project::findOrFail($id);
        $project->delete();

        // Redirect to the project index page
        return redirect()->route('dashboard');
    }
}
