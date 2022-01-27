<?php

namespace Modules\Branch\Controllers\Admin;

use App\Http\Controllers\Controller;
use Modules\Branch\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    private $viewsPath = 'Branch.Resources.views.';

    public function index()
    {

        return view($this->viewsPath.'index');
    }

    public function create()
    {
        return view($this->viewsPath.'create');
    }

    public function store(Request $request) {
        $criteria = [
            'name' => 'required',
        ];

        $request->validate($criteria);

        $branch = new Branch();
        $branch->fill($request->all());
        $branch->save();

        return redirect()->route('admin.branches.index')->with(['success' => 'Created Successfully']);
    }

    public function edit(Branch $branch)
    {
        return view($this->viewsPath.'edit',['form' => $branch]);
    }



    public function update(Branch $branch, Request $request) {
        $criteria = [
            'name' => 'required',
        ];

        $request->validate($criteria);

        $branch->fill($request->all());
        $branch->save();

        return redirect()->route('admin.branches.index')->with(['success' => 'Updated Successfully']);
    }
}

