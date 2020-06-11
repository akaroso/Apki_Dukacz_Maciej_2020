<?php

use Carbon\Carbon;


function presentPrice($price)
{
    return '$'.number_format($price / 100, 2);
}



function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}



function getNumbers()
{
    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = (Cart::subtotal());
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    $newTax = config('cart.tax') / 100;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}



