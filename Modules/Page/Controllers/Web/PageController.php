<?php

namespace Modules\Page\Controllers\Web;

use App\Http\Controllers\Controller;
use Modules\Doctor\Models\Doctor;

class PageController extends Controller
{
    private $viewsPath = 'Page.Resources.views.';

    public function index()
    {
        $doctors = Doctor::all();

        return view($this->viewsPath.'index', compact('doctors'));
    }
}

