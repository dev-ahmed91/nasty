<?php

namespace Modules\Doctor\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Doctor\Models\Doctor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
            $users = Doctor::query()
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');

                    return $query->whereRaw("(doctors.name like '%{$word}%')");
                })
                ->orderBy(request()->get('sort', 'doctors.created_at'), request()->get('direction', 'DESC'))
                ->paginate(10);

        return response()->json($users);
    }
}
