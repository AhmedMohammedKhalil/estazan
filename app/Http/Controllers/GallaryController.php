<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallaries=Gallary::all();
        return view('admins.galleries.index',compact('gallaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.galleries.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $gallary = Gallary::find($request->gallary_id);
        return view('admins.galleries.edit',['gallary' => $gallary]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r)
    {
        Gallary::destroy($r->id);
        return redirect()->route('admin.gallaries.index');
    }
}
