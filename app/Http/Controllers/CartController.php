<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('front.templates.royal.cart.cart');
    }

    public function addToCart(Product $product)
    {
        if( Cart::has($product) ) {
            if(Cart::count($product) < $product->inventory)
                Cart::update($product , 1);
        }else {
            Cart::put(
                [
                    'quantity' => 1,
                ],
                $product
            );
        }
        alert()->success('محصول با موفقیت به سبد خرید اضافه شد');
        return back();
    }

    public function quantityChange(Request $request)
    {
        $data = $request->validate([
            'quantity' => 'required',
            'id' => 'required',
//           'cart' => 'required'
        ]);

        if( Cart::has($data['id']) ) {
            Cart::update($data['id'] , [
                'quantity' => $data['quantity']
            ]);

            return response(['status' => 'success']);
        }

        return response(['status' => 'error'] , 404);
    }

    public function deleteFromCart($id)
    {
        Cart::delete($id);
        alert()->success('محصول مورد نظر با موفقیت حذف شد');
        return back();
    }
}
