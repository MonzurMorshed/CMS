<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\CommonRepositoryInterface;
use App\Repositories\ValidationRepository;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public $common;
    public $validation;

    public function __construct(CommonRepositoryInterface $common, ValidationRepository $validation) {
        $this->common = $common;
        $this->validation = $validation;
    }

    public function index($model) {
        $data = $this->common->all($model);
        $heading = $model;
        $viewmodel = sanitizeToLowerAlphaOnly($model);
        return view("cms-admin.$viewmodel.index", compact('data','heading'));
    }

    public function store(Request $request,$model){

        $input = $request->except('_token');
        $viewmodel = sanitizeToLowerAlphaOnly($model);
        $validated = $this->validation->validate(ucfirst($request->model), $input);
        $attachmentData = fileUpload($input, $model);
        $input = array_merge($input, $attachmentData);
        $commonData = $this->common->create($input,$model);
        return response()->json($commonData, 201);
    }

    public function show($id,$model) {
        $data = $this->common->find($id,$model);
        $viewmodel = sanitizeToLowerAlphaOnly($modal);
        // return response()->json($data, 200);
        return view("'.$viewmodel.'details",$data);
    }

    public function update(Request $request, $id, $model){
        // $data = $request->validate([
        //     'name' => 'required',
        //     'designation' => 'required'
        // ]);

        $commonData = $this->common->update($data, $id, $model);
        return response()->json($commonData, 200);
    }

    public function delete($id, $model) {
        $data = $this->common->delete($id, $model);
        return response()->json(null, 200);
    }
}
