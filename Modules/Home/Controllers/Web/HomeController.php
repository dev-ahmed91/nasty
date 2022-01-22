<?php

namespace Modules\Home\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Modules\Category\Constants\CategoryStatus;
use Modules\Category\Models\Category;
use Modules\Product\Models\Order;
use Modules\Product\Models\Product;

class HomeController extends Controller
{
    private $viewsPath = 'Home.Resources.views.';

    public function index()
    {
        $categories = Category::whereNull('parent_id')->where('status', CategoryStatus::ACTIVE)->get();
        $trendingProducts = Product::limit(5)->inRandomOrder()->get();
        return view($this->viewsPath.'index', compact('categories', 'trendingProducts'));
    }

    public function categories(Category $category = null)
    {
        $categories = [];
        $products = [];
        if (!$category || !$category->children->isEmpty()) {
            $categories = Category::when($category, function (Builder $query) use ($category){
                return $query->where('parent_id', $category->id);
            })->when(!$category, function (Builder $query) {

                return $query->whereNull('parent_id');
            })
            ->where('status', CategoryStatus::ACTIVE)
            ->get();
        }

        if ($category) {
            $products = Product::where('category_id', $category->id)
                ->get();
        }

        return view($this->viewsPath.'categories', compact('categories', 'products'));
    }

    public function cart(Request $request)
    {
        return response()->json(cart()->add($request->get('product')));
    }

    public function removeCart(Request $request)
    {
        return response()->json(cart()->remove($request->get('product')));
    }

    public function getCart()
    {
        $cart = cart()->get();

        return view($this->viewsPath.'cart', compact('cart'));
    }

    public function checkout()
    {
        $cart = cart()->get();

        return view($this->viewsPath.'checkout', compact('cart'));
    }

    public function postCheckout(Request $request)
    {
        $cart = cart()->get();
        $order = new Order();
        $order->full_name = $request->get('full_name');
        $order->phone = $request->get('phone');
        $order->address = $request->get('address');
        $order->status = 1;
        $order->total = $cart['total'];
        $order->delivery_fees = 30;
        $order->save();

        foreach ($cart['products'] as $id => $product) {
            $order->products()->attach($id,[
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
            ]);
        }


        cart()->destroy();

        return redirect()->back();
    }
}

