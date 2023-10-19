<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use OwenIt\Auditing\Contracts\Auditable;
use PHPUnit\Framework\Attributes\RunClassInSeparateProcess;

class ExpenseModel extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'expenses';

    protected $fillable = ['expense_categories_id', 'description', 'date', 'amount', 'photo', 'del_flg'];

    public function storeExpensedata($request)
    {
        $storeExpense = new ExpenseModel();
        $storeExpense->expense_categories_id  = $request->category_id;
        $storeExpense->description = $request->categoryDescription;
        $storeExpense->date = $request->date;
        $storeExpense->amount = $request->amount;
        if ($request->hasFile('expphoto')) {
            $extension = $request->file('expphoto')->extension();
            $filename = time() . '.' . $extension;
            $path3 = 'public/' . $filename;
            $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('expphoto')->getRealPath()), 'public');
            $linkpath = "https://sks.sgp1.digitaloceanspaces.com/public/";
            $dbstore = $linkpath . $filename;
            $storeExpense->photo = $dbstore;
        }
        $storeExpense->save();
    }

    public function getExpenseDetail($id)
    {
        return ExpenseModel::where('id', $id)->first();
    }

    public function getExpenseList()
    {
        return ExpenseModel::join('expense_categories', 'expense_categories_id', 'expense_categories.id')
            ->select('e_c_name', 'expenses.*')
            ->paginate(5);
    }

    public function updateExpense($request, $id)
    {
        $updateExpense = ExpenseModel::find($id);
        if ($updateExpense) {
            $updateData = [
                'expense_categories_id' => $request->category_id,
                'description' => $request->categoryDescription,
                'date' => $request->date,
                'amount' => $request->amount,
            ];

            if ($request->hasFile('expphoto')) {
                $extension = $request->file('expphoto')->extension();
                $filename = time() . '.' . $extension;
                $path3 = 'public/' . $filename;
                $file = Storage::disk('spaces')->put($path3, file_get_contents($request->file('expphoto')->getRealPath()), 'public');
                $linkpath = "https://sks.sgp1.digitaloceanspaces.com/public/";
                $dbstore = $linkpath . $filename;
                $updateData['photo'] = $dbstore;
            }

            $updateExpense->update($updateData);
        }
    }

    public function getExpense($id)
    {
        return ExpenseModel::join('expense_categories', 'expense_categories_id', 'expense_categories.id')
            ->select('e_c_name', 'expenses.*')
            ->where('expenses.id',$id)
            ->first();
    }
}
