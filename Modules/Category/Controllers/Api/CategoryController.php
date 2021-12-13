<?php

namespace Modules\Category\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Category\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
            $users = Category::query()
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');

                    return $query->whereRaw("(categories.name like '%{$word}%' OR categories.phone like '%{$word}%' )");
                })
                ->orderBy(request()->get('sort', 'categories.created_at'), request()->get('direction', 'DESC'))
                ->paginate(10);

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->fill([
            'branch' => $request->get('branch'),
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);

        $category->save();

        return response()->json($category);
    }
}
