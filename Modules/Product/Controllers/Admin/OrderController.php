<?php

namespace Modules\Product\Controllers\Admin;

use App\Constants\Statuses;
use App\Http\Controllers\Controller;
use App\Http\Services\UploaderService;
use Modules\Branch\Models\Branch;
use Modules\Category\Models\Category;
use Modules\Product\Constants\OrderType;
use Modules\Product\Models\Order;
use Modules\Product\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class OrderController extends Controller
{
    /**
     * @var UploaderService
     */
    private $uploaderService;

    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }

    private $viewsPath = 'Product.Resources.views.';

    public function index()
    {
        return view($this->viewsPath.'orders');
    }

    public function create()
    {
        $branches = Branch::pluck('name', 'id');
        return view($this->viewsPath.'ordersCreate', compact('branches'));
    }

    public function store(Request $request)
    {
        if (!$request->has('products')) {
            return redirect()->back();
        }


        $order = new Order();
        $order->full_name = $request->get('full_name');
        $order->phone = $request->get('phone');
        $order->address = $request->get('address');
        $order->status = 1;
        $order->total = 0;
        $order->delivery_fees = 30;
        $order->type = OrderType::OFFLINE;
        $order->save();

        foreach ($request->get('products') as $id => $quantity) {
            $product = Product::find($id);
            $order->products()->attach($id,[
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
            ]);

            $order->total += $product->price * $quantity;
        }

        $order->save();

        return redirect(route('admin.orders.index'))->with(['success' => 'Order Placed successfully']);
    }
}

