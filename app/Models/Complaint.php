<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use OwenIt\Auditing\Contracts\Auditable;

class Complaint extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'complaint';

    protected $fillable = ['customer_name', 'phone', 'address', 'cheif_complaint', 'photo_one', 'photo_two', 'photo_three', 'video_one', 'video_two', 'solve_status'];

    public function addComplaint($request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $complaint = new Complaint();
        $complaint->customer_name = $request->name;
        $complaint->phone = $request->phone;
        $complaint->address = $request->address;
        $complaint->cheif_complaint = $request->description;

        if ($request->hasFile('photo1')) {
            $extension = $request->file('photo1')->extension();
            $filename = time() . '.' . $request->file('photo1')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo1')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $complaint->photo_one = $pathOne;
        }

        if ($request->hasFile('photo2')) {
            $extension = $request->file('photo2')->extension();
            $filename = time() . '.' . $request->file('photo2')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo2')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $complaint->photo_two = $pathOne;
        }

        if ($request->hasFile('photo3')) {
            $extension = $request->file('photo3')->extension();
            $filename = time() . '.' . $request->file('photo3')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo3')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $complaint->photo_three = $pathOne;
        }

        if ($request->hasFile('video1')) {
            $extension = $request->file('video1')->extension();
            $filename = time() . '.' . $request->file('video1')->getClientOriginalName() . $extension;
            $path3 = 'complaints/videos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('video1')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/videos/";
            $pathOne = $linkpath . $filename;
            $complaint->video_one = $pathOne;
        }

        if ($request->hasFile('video2')) {
            $extension = $request->file('video2')->extension();
            $filename = time() . '.' . $request->file('video2')->getClientOriginalName() . $extension;
            $path3 = 'complaints/videos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('video2')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/videos/";
            $pathOne = $linkpath . $filename;
            $complaint->video_two = $pathOne;
        }

        $complaint->save();
    }

    public function getComplaints()
    {
        return $complaintData = Complaint::orderBy('id', 'desc')->paginate(18);
    }

    public function getComplaintDetils($id)
    {
        return $complaintData = Complaint::where('id', $id)->first();
    }

    public function solveornot($id)
    {
        $solveornot = Complaint::find($id);
        if ($solveornot) {
            $solveornot->update([
                $solveornot->solve_status = 1,
            ]);
        }
    }

    public function delComplaint($id)
    {
        $delComplaint = Complaint::where('id',$id)->delete();
    }
}
