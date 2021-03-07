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
        $lead = new Lead();

        $lead->fill([
            'branch' => $request->get('LEADCF1'),
            'name' => $request->get('Last_Name'),
            'phone' => $request->get('Mobile')
        ]);

        $lead->save();

        return response()->json($lead);
    }
}
