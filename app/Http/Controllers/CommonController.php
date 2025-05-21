<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public $common;

    public function __construct(CommonRepositoryInterface $common) {
        $this->common = $common;
    }

    public function index($model) {
        $data = $this->common->all($model);
        return response()->json($data, 200, $headers);
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
        return response()->json($data, 200);
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
