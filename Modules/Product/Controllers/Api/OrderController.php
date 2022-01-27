<?php

namespace Modules\Product\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Category\Models\Category;
use Modules\Product\Models\Order;
use Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
            $users = Order::query()
                ->select('orders.*')
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');


                    return $query->whereRaw("(orders.full_name like '%{$word}%') OR (orders.phone like '%{$word}%') OR (orders.id like '%{$word}%')");
                })
                ->orderBy(request()->get('sort', 'orders.id'), request()->get('direction', 'ASC'))
                ->paginate(10);

        return response()->json($users);
    }
}
