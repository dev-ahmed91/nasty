<?php

namespace Modules\Product\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
            $users = Product::query()
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');

                    return $query->whereRaw("(products.name like '%{$word}%')");
                })
                ->orderBy(request()->get('sort', 'products.id'), request()->get('direction', 'ASC'))
                ->paginate(10);

        return response()->json($users);
    }
}
