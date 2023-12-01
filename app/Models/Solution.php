<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use OwenIt\Auditing\Contracts\Auditable;

class Solution extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'complaint_solutions';

    protected $fillable = ['complaint_id', 'solution', 'photo_one', 'photo_two', 'photo_three', 'video_one', 'video_two'];

    public function addSolution($request)
    {
        

        $solution = new Solution();
        $solution->complaint_id = $request->id;
        $solution->solution = $request->description;

        if ($request->hasFile('photo1')) {
            $extension = $request->file('photo1')->extension();
            $filename = time() . '.' . $request->file('photo1')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo1')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $solution->photo_one = $pathOne;
        }

        if ($request->hasFile('photo2')) {
            $extension = $request->file('photo2')->extension();
            $filename = time() . '.' . $request->file('photo2')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo2')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $solution->photo_two = $pathOne;
        }

        if ($request->hasFile('photo3')) {
            $extension = $request->file('photo3')->extension();
            $filename = time() . '.' . $request->file('photo3')->getClientOriginalName() . $extension;
            $path3 = 'complaints/photos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('photo3')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/photos/";
            $pathOne = $linkpath . $filename;
            $solution->photo_three = $pathOne;
        }

        if ($request->hasFile('video1')) {
            $extension = $request->file('video1')->extension();
            $filename = time() . '.' . $request->file('video1')->getClientOriginalName() . $extension;
            $path3 = 'complaints/videos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('video1')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/videos/";
            $pathOne = $linkpath . $filename;
            $solution->video_one = $pathOne;
        }

        if ($request->hasFile('video2')) {
            $extension = $request->file('video2')->extension();
            $filename = time() . '.' . $request->file('video2')->getClientOriginalName() . $extension;
            $path3 = 'complaints/videos/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('video2')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/complaints/videos/";
            $pathOne = $linkpath . $filename;
            $solution->video_two = $pathOne;
        }

        $solution->save();
        $updateSolveClass = new Complaint();
        $updateSolve = $updateSolveClass->solveornot($request->id);
    }

    public function getSolutionDetails($id)
    {
        return $getSolution = Solution::where('complaint_id',$id)->first();
    }

    public function deleteSolution($id)
    {
        $delSolution = Solution::where('complaint_id',$id)->delete();
    }
}
