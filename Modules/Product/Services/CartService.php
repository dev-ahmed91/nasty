<?php

namespace Modules\Product\Services;


use Illuminate\Http\UploadedFile;
use Modules\Product\Models\Product;
use Modules\Setting\Models\Setting;

class CartService
{
    public function get()
    {
        if (!is_array(session('cart'))) {
            return ['products' => [], 'total' => 0];
        }

        return session('cart');
    }

    public function has($key)
    {
        return $this->get($key) ? true : false;
    }

    public function destroy()
    {
        session()->remove('cart');
    }

    public function refreshTotal($cart)
    {
        $cart['total'] = 0;



        foreach ($cart['products'] as $product) {
            $cart['total'] += $product['price'] * $product['quantity'];
        }
        return $cart;
    }

    public function add($product)
    {
        $cart = $this->get();

        $product = Product::find($product);

        $quantity = isset($cart['products'][$product->id]) ?   $cart['products'][$product->id]['quantity'] + 1 : 1;

        $cart['products'][$product->id] = [
            'price' => $product->price,
            'name' => $product->name,
            'image' => $product->image,
            'quantity' => $quantity
        ];



        $cart = $this->refreshTotal($cart);
        session()->put('cart', $cart);

        return $cart;
    }

    public function edit($product, $quantity)
    {
        $cart = $this->get();

        $product = Product::find($product);


        $cart['products'][$product->id]['quantity'] = $quantity;

        $cart = $this->refreshTotal($cart);
        session()->put('cart', $cart);

        return $cart;
    }

    public function remove($product)
    {
        $cart = $this->get();

        if (isset($cart['products'][$product]) && $cart['products'][$product]['quantity'] > 1) {
            $cart['products'][$product]['quantity'] = $cart['products'][$product]['quantity'] - 1 ;
        } elseif (isset($cart['products'][$product]) && $cart['products'][$product]['quantity'] == 1) {
            unset($cart['products'][$product]);
        }

        $cart = $this->refreshTotal($cart);
        session()->put('cart', $cart);

        return $cart;
    }
}
