<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MediCart extends Model
{
    use HasFactory;
    private static $cart, $image, $imageNewName, $directory, $imgUrl;

    protected $guarded = []; // Allow mass assignment

    public static function saveMed($request, $id, $userId, $test)
{
    $cart = new MediCart();
    $cart->u_name = $userId->name;
    $cart->email = $userId->email;
    $cart->phone = $userId->phone;
    $cart->user_id = $userId->id;

    $cart->m_name = $test->name;
    $cart->m_id = $test->id;
    $qty = intval($request->qty);
    $unitPrice = floatval($request->price_per_unit);

    $cart->quantity = $qty;
    $cart->price = $unitPrice;
    $cart->total_price = $qty * $unitPrice;
    $cart->description = $test->description;
    $cart->date = $test->date;

    $cart->payment_status = 'Unpaid';
    $cart->delivery_status = 'InProgress';

    $cart->save();
}


public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
