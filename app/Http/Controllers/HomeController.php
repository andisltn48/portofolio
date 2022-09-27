<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home.index');
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
            return redirect()->back()->with('ERR','You must upload background hero');
        }

        $checkData = Home::all();
        if (count($checkData) > 0) {
            $checkData[0]->update([
                'name' => $request->name,
            ]);

            if ($request->image) {
                unlink(public_path($checkData[0]->image));
                try {
                    
                } catch (\Throwable $th) {
                    //throw $th;
                }
            
                $image = $request->image;
                $heroImage = time() . '_' . $image->getClientOriginalName();
                $fileName = '/storage/hero-background/' . $heroImage;
                $image->move(public_path('storage/hero-background'), $heroImage);

                $checkData[0]->update([
                    'image' => $fileName 
                ]);
            }
        } else {
            $image = $request->image;
            $heroImage = time() . '_' . $image->getClientOriginalName();
            $fileName = '/storage/hero-background/' . $heroImage;
            $image->move(public_path('storage/hero-background'), $heroImage);

            Home::create([
                'name' => $request->name,
                'image' => $fileName 
            ]);
        }
        return redirect()->back()->with('OK','Save home data successfully');
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
