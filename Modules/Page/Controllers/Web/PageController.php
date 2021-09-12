<?php

namespace Modules\Page\Controllers\Web;

use App\Constants\Statuses;
use App\Http\Controllers\Controller;
use Modules\Doctor\Models\Doctor;

class PageController extends Controller
{
    private $viewsPath = 'Page.Resources.views.';

    public function index()
    {
        $doctors = Doctor::query()->where('status', Statuses::ACTIVE)->get();

        return view($this->viewsPath.'index', compact('doctors'));
    }
}

