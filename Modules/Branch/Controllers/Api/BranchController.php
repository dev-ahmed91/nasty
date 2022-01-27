<?php

namespace Modules\Branch\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Branch\Models\Branch;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $users = Branch::query()
            ->when($request->get('q'), function (Builder $query) {
                $word = request()->get('q');

                return $query->whereRaw("(branches.name like '%{$word}%'");
            })
            ->orderBy(request()->get('sort', 'branches.created_at'), request()->get('direction', 'DESC'))
            ->paginate(10);

        return response()->json($users);
    }
}
