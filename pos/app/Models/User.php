<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use HasApiTokens, HasFactory, Notifiable;

    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $table = 'users';

    public function userList()
    {
        return User::orderBy('id', 'desc')
            ->where('del_flg', 0)
            ->paginate(5);
    }

    public function userDetail($id)
    {
        return User::where('id', $id)->first();
    }

    public function userUpdate($request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update([
                'name' => $request->username,
                'role' => $request->role,
            ]);
        }
    }

    public function userDel($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
        }
    }
}
