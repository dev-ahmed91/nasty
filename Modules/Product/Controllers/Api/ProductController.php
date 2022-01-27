<?php

namespace Modules\Product\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Category\Models\Category;
use Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
            $users = Product::query()
                ->select('products.*')
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');

                    $query->join('categories', 'categories.id', '=', 'products.category_id');

                    return $query->whereRaw("(products.name like '%{$word}%') OR (products.id = '{$word}')  OR (categories.name like '%{$word}%')");
                })
                ->when($request->get('category'), function (Builder $query) {
                    $categories = Category::where('parent_id', request()->get('category'))->pluck('id')->toArray();
                    array_push($categories, (int) request()->get('category'));
                    return $query->whereIn('category_id', $categories);
                })
                ->orderBy(request()->get('sort', 'products.id'), request()->get('direction', 'ASC'))
                ->paginate(10);

        return response()->json($users);
    }

    public function show(Product $product, Request $request)
    {
        return response()->json($product);
    }
}
