<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projects'] = Project::paginate(15);
        return view('dashboard.project.index',$data);
    }

    public function getDetail(Request $request)
    {
        $data['projects'] = Project::find($request->id);
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->image) {
            return redirect()->back()->with('ERR','You mush upload image');
        }

        $image = $request->image;
        $projectImage = time() . '_' . $image->getClientOriginalName();
        $fileName = '/storage/project-image/' . $projectImage;
        $image->move(public_path('storage/project-image'), $projectImage);

        $newProject = Project::create([
            'title' => $request->title,
            'category_job' => $request->category_job,
            'job_type' => $request->job_type,
            'image' => $fileName,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('OK','Save new project successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateProject = Project::find($id)->update([
            'title' => $request->title,
            'category_job' => $request->category_job,
            'job_type' => $request->job_type,
            'description' => $request->description,
        ]);

        if ($request->image) {
            $image = $request->image;
            $projectImage = time() . '_' . $image->getClientOriginalName();
            $fileName = '/storage/project-image/' . $projectImage;
            $image->move(public_path('storage/project-image'), $projectImage);

            Project::find($id)->update([
                'image' => $fileName,
            ]);
        }

        return redirect()->back()->with('OK','Update project successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect()->back()->with('OK','Delete project successfully');
    }
}
