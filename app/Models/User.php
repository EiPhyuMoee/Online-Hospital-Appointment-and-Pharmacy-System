<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
// class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor_id',
        'user_type',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $user;

   public static function saveUser($request)
{
    // Check if email already exists
    if (User::where('email', $request->email)->exists()) {
        return ['status' => 'error', 'message' => 'Email already exists!'];
    }

    $user = new User();
    $user->usertype = $request->usertype;
    $user->doctor_id = $request->doctor_id;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->password = bcrypt($request->password);
    $user->save();

    return ['status' => 'success', 'message' => 'User created successfully!'];
}

public static function updateUser($request, $id)
{
    $user = User::findOrFail($id);

    if ($user->email != $request->email && User::where('email', $request->email)->exists()) {
        return ['status' => 'error', 'message' => 'Email already exists!'];
    }

    $user->usertype = $request->usertype;
    $user->doctor_id = $request->doctor_id;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;

    if (!empty($request->password)) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return ['status' => 'success', 'message' => 'User updated successfully!'];
}


}