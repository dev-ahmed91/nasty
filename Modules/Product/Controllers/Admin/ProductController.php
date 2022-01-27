<?php

namespace Modules\Product\Controllers\Admin;

use App\Constants\Statuses;
use App\Http\Controllers\Controller;
use App\Http\Services\UploaderService;
use Modules\Branch\Models\Branch;
use Modules\Category\Models\Category;
use Modules\Product\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class ProductController extends Controller
{
    /**
     * @var UploaderService
     */
    private $uploaderService;

    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }

    private $viewsPath = 'Product.Resources.views.';

    public function index()
    {
        $categories = Category::whereNull('parent_id')->pluck('name', 'id');
        ;
        return view($this->viewsPath.'index', ['categories' => $categories]);
    }

    public function show(Product $product)
    {
        $branches = Branch::all();

        return view($this->viewsPath.'show', ['product' => $product, 'branches' => $branches]);
    }


    public function create()
    {
        $categories = Category::pluck('name', 'id');


        return view($this->viewsPath.'create', ['categories' => $categories]);
    }

    public function createStock(Product $product)
    {
        $branches = Branch::pluck('name', 'id');

        return view($this->viewsPath.'stock', ['branches' => $branches, 'product' => $product]);
    }

    public function storeStock(Product $product, Request $request) {


        $criteria = [
            'branch_id' => 'required',
            'quantity' => 'required | integer',
        ];

        $request->validate($criteria);

        $product->stocks()->attach($request->get('branch_id'), [
            'quantity' => $request->get('quantity'),
        ]);

        $product->save();
        $product->refreshStock();

        return redirect()->route('admin.products.index')->with(['success' => 'Updated Successfully']);
    }


    public function store(Request $request) {


        $criteria = [
            'name' => 'required',
            'description' => '',
        ];

        $request->validate($criteria);
        $product = new Product();
        $product->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $product->image = $this->uploaderService->upload($request->file("image"), "products");
        }

        $product->save();

        return redirect()->route('admin.products.index')->with(['success' => 'Updated Successfully']);
    }


    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');

        return view($this->viewsPath.'edit',['form' => $product, 'categories' => $categories]);
    }


    public function update(Product $product, Request $request) {
        $criteria = [
            'name' => 'required',
            'description' => '',
        ];

        $request->validate($criteria);

        $product->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $product->image = $this->uploaderService->upload($request->file("image"), "products");
        }

        $product->save();

        return redirect()->route('admin.products.index')->with(['success' => 'Updated Successfully']);
    }
    public function enable(Product $product, Request $request) {
        $product->status = Statuses::ACTIVE;
        $product->save();

        return redirect()->route('admin.products.index')->with(['success' => 'Updated Successfully']);
    }

    public function disable(Product $product, Request $request) {
        $product->status = Statuses::DISABLED;
        $product->save();

        return redirect()->route('admin.products.index')->with(['success' => 'Updated Successfully']);
    }
}

