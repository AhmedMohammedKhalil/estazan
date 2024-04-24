<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('admins.announcements.index',compact('announcements'));
    }


    /**
     * Display a listing of the resource.
     */
    public function allAnnouncements()
    {
        $announcements = auth('teacher')->user()->announcements;
        return view('teachers.announcements.index',compact('announcements'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.announcements.create');

    }



    /**
     * Display the specified resource.
     */
    public function adminShowAnnouncement(Request $request)
    {
        $announcement = Announcement::whereId($request->id)->first();
        return view('admins.announcements.show',compact('announcement'));
    }


    /**
     * Display the specified resource.
     */
    public function teacherShowAnnouncement(Request $request)
    {
        $announcement = Announcement::whereId($request->id)->first();
        return view('teachers.announcements.show',compact('announcement'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('admins.announcements.edit',['announcement_id' => $request->id]);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $announcement = Announcement::whereId($request->id)->first();
        $announcement->delete();
        return redirect()->route('admin.announcements.index');
    }
}
