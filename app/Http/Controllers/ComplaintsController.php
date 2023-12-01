<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Solution;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getComplaintListClass = new Complaint();
        $getComplaintList = $getComplaintListClass->getComplaints();
        return view('Pos.complaintLists', [
            'Complaint' => $getComplaintList,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pos.addComplaints');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addComplaintClass = new Complaint();
        $addComplaint = $addComplaintClass->addComplaint($request);
        return redirect('/complaint/create')->withSuccess('Added Succefully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $getSolutionClass = new Solution();
        $getSolution = $getSolutionClass->getSolutionDetails($id);
        return view('Pos.solutionDetails', [
            'Solution' => $getSolution,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getComplaintListClass = new Complaint();
        $getComplaintList = $getComplaintListClass->getComplaintDetils($id);
        return view('Pos.editComplaint', [
            'ComplaintDetails' => $getComplaintList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delComplaintClass = new Complaint();
        $delSolutionClass = new Solution();
        $delComplaint = $delComplaintClass->delComplaint($id);
        $delSolution = $delSolutionClass->deleteSolution($id);
        return redirect('/complaint');
    }
}
