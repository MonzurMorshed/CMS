<?php

namespace App\Repositories;

use App\Repositories\Interface\CommonRepositoryInterface;

class CommonRepository implements CommonRepositoryInterface {

    public function all($model){
        $model = "\App\Models\\".ucFirst($model);
        return $model::all();
    }
    public function find($id,$model) {
        $model = "\App\Models\\".ucFirst($model);
        return $model::findOrFail($id)->get()->toArray();
    }
    public function create(array $data,$model) {
        $model = "\App\Models\\".ucFirst($model);
        return $model::create($data);
    }
    public function update($id, array $data,$model) {
        $model = "\App\Models\\".ucFirst($model);
        return $model::where('id',$id)->update($data);
    }
    public function delete($id,$model) {
        $model = "\App\Models\\".ucFirst($model);
        return $model::where('id',$id)->delete();
    }
}


