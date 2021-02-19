<?php

namespace Modules\Lead\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Lead\Models\Lead;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
    {
            $users = Lead::query()
                ->when($request->get('q'), function (Builder $query) {
                    $word = request()->get('q');

                    return $query->whereRaw("(leads.name like '%{$word}%' OR leads.phone like '%{$word}%' )");
                })
                ->orderBy(request()->get('sort', 'leads.created_at'), request()->get('direction', 'DESC'))
                ->paginate(10);

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $criteria = [
            'name' => 'required',
            'phone' => 'required',
            'branch' => 'required',
        ];

        $request->validate($criteria);

        $lead = new Lead();
        $lead->fill($request->request->all());
        $lead->save();

        return response()->json($lead);
    }
}
