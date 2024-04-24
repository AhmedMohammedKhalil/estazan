<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $replyedcomplaints = auth('teacher')->user()->repliedcomplaints;
        $newcomplaints = auth('teacher')->user()->newcomplaints;
        return view('teachers.complaints.index',compact('replyedcomplaints','newcomplaints'));
    }

    /**
     * Display a listing of the resource.
     */
    public function allComplaints()
    {
        $replyedcomplaints = Complaint::whereNotNull('reply')->get();
        $newcomplaints = Complaint::whereNull('reply')->get();
        return view('admins.complaints.index',compact('replyedcomplaints','newcomplaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.complaints.create');

    }


    /**
     * Display the specified resource.
     */
    public function teacherShowComplaint(Request $request)
    {
        $complaint = Complaint::whereId($request->id)->first();
        return view('teachers.complaints.show',compact('complaint'));
    }

    /**
     * Display the specified resource.
     */
    public function adminShowComplaint(Request $request)
    {
        $complaint = Complaint::whereId($request->id)->first();
        return view('admins.complaints.show',compact('complaint'));
    }

    /**
     * Display the specified resource.
     */
    public function addReply(Request $request)
    {
        return view('admins.complaints.addreply',['complaint_id' => $request->id]);

    }

    public function editReply(Request $request)
    {
        return view('admins.complaints.editreply',['complaint_id' => $request->id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('teachers.complaints.edit',['complaint_id' => $request->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $complaint = Complaint::whereId($request->id)->first();
        $complaint->delete();
        return redirect()->route('teacher.complaints.index');
    }
}
