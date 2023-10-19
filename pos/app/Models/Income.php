<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use OwenIt\Auditing\Contracts\Auditable;

class Income extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'incomes';

    protected $fillable = ['expense_categories_id', 'description', 'date', 'amount', 'photo', 'del_flg'];


    public function storeExpensedata($request)
    {
        $storeIncome = new Income();
        $storeIncome->expense_categories_id  = $request->category_id;
        $storeIncome->description = $request->categoryDescription;
        $storeIncome->date = $request->date;
        $storeIncome->amount = $request->amount;
        if ($request->hasFile('expphoto')) {
            $extension = $request->file('expphoto')->extension();
            $filename = time() . '.' . $extension;
            $path3 = 'Income/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('expphoto')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/Income/";
            $dbstore = $linkpath . $filename;
            $storeIncome->photo = $dbstore;
        }
        $storeIncome->save();
    }

    public function getIncomeDetail($id)
    {
        return Income::where('id', $id)->first();
    }

    public function getIncomeList()
    {
        return Income::join('expense_categories', 'expense_categories_id', 'expense_categories.id')
            ->select('e_c_name', 'incomes.*')
            ->paginate(5);
    }

    
    public function updateIncome($request, $id)
    {
        $updateModel = Income::find($id);
        if ($updateModel) {
            $updateData = [
                'expense_categories_id' => $request->category_id,
                'description' => $request->categoryDescription,
                'date' => $request->date,
                'amount' => $request->amount,
            ];

            if ($request->hasFile('expphoto')) {
                $extension = $request->file('expphoto')->extension();
                $filename = time() . '.' . $extension;
                $path3 = 'Income/' . $filename;
                $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('expphoto')->getRealPath()), 'public');
                $linkpath = "https://sks.sgp1.digitaloceanspaces.com/Income/";
                $dbstore = $linkpath . $filename;
                $updateData['photo'] = $dbstore;
            }

            $updateModel->update($updateData);
        }
    }

    public function getIncome($id)
    {
        return Income::join('expense_categories', 'expense_categories_id', 'expense_categories.id')
            ->select('e_c_name', 'incomes.*')
            ->where('incomes.id',$id)
            ->first();
    }
}
