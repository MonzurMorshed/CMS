<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\CommonRepositoryInterface;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public $common;

    public function __construct(CommonRepositoryInterface $common) {
        $this->common = $common;
    }

    function sanitizeToLowerAlphaOnly($string) {
        // Remove all non-alphabetic characters
        $onlyLetters = preg_replace('/[^a-zA-Z]/', '', $string);
        // Convert to lowercase
        return strtolower($onlyLetters);
    }

    public function index($model) {
        $data = $this->common->all($model);
        $heading = $model;
        $viewmodel = $this->sanitizeToLowerAlphaOnly($model);
        return view("cms-admin.$viewmodel.index", compact('data','heading'));
    }

    public function store(Request $request,$model){
        // $data = $request->validate([
        //     'name' => 'required',
        //     'designation' => 'required'
        // ]);
        $commonData = $this->common->create($data,$model);
        return response()->json($commonData, 201);
    }

    public function show($id,$model) {
        $data = $this->common->find($id,$model);
        $viewmodel = $this->sanitizeToLowerAlphaOnly($modal);
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
