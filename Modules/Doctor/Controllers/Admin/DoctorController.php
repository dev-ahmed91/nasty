<?php

namespace Modules\Doctor\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UploaderService;
use Modules\Doctor\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * @var UploaderService
     */
    private $uploaderService;

    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }

    private $viewsPath = 'Doctor.Resources.views.';

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
            'branch' => 'required',
            'image' => 'required',
            'description' => '',
        ];

        $request->validate($criteria);
        $doctor = new Doctor();
        $doctor->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $doctor->image = $this->uploaderService->upload($request->file("image"), "doctors");
        }

        $doctor->save();

        return redirect()->route('admin.doctors.index')->with(['success' => 'Updated Successfully']);
    }


    public function edit(Doctor $doctor)
    {
        return view($this->viewsPath.'edit',['form' => $doctor]);
    }


    public function update(Doctor $doctor, Request $request) {
        $criteria = [
            'name' => 'required',
            'branch' => 'required',
            'description' => '',
        ];

        $request->validate($criteria);

        $doctor->fill($request->request->all());

        if ($request->hasFile('image') ) {
            $doctor->image = $this->uploaderService->upload($request->file("image"), "doctors");
        }

        $doctor->save();

        return redirect()->route('admin.doctors.index')->with(['success' => 'Updated Successfully']);
    }
}

