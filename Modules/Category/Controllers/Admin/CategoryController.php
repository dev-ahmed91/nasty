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

    public function create()
    {
        $categories = Category::whereNull('parent_id')->pluck('name', 'id');

        return view($this->viewsPath.'create',['categories' => $categories]);
    }

    public function store(Request $request) {
        $criteria = [
            'name' => 'required',
        ];

        $request->validate($criteria);

        $category = new Category();
        $category->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $category->image = $this->uploaderService->upload($request->file("image"), "categories");
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with(['success' => 'Created Successfully']);
    }

    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_id')->pluck('name', 'id');

        return view($this->viewsPath.'edit',['form' => $category, 'categories' => $categories]);
    }

    public function update(Category $category, Request $request) {
        $criteria = [
            'name' => 'required',
        ];

        $request->validate($criteria);

        if (!$request->has('status')) {
            $request->request->set('status', CategoryStatus::DISABLED);
        }

        $category->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $category->image = $this->uploaderService->upload($request->file("image"), "categories");
        }



        $category->save();

        return redirect()->route('admin.categories.index')->with(['success' => 'Updated Successfully']);
    }
}

