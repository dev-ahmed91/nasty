<?php

namespace Modules\Category\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UploaderService;
use Modules\Category\Constants\CategoryStatus;
use Modules\Category\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var UploaderService
     */
    private $uploaderService;

    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }

    private $viewsPath = 'Category.Resources.views.';

    public function index()
    {

        return view($this->viewsPath.'index');
    }

    public function edit(Category $category)
    {
        $categories = Category::pluck('name', 'id');

        return view($this->viewsPath.'edit',['form' => $category, 'categories' => $categories]);
    }

    public function update(Category $category, Request $request) {
        $criteria = [
            'name' => 'required',
        ];

        $request->validate($criteria);

        $category->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $category->image = $this->uploaderService->upload($request->file("image"), "categories");
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with(['success' => 'Updated Successfully']);
    }
}

