<?php

namespace App\Repositories;

class CommonRepository implements CommonRepositoryInterface {

    public function all($model){
        return $model::latest()->pagianate(20);
    }
    public function find($id,$model) {
        return $model::findOrFail($id)->get()->toArray();
    }
    public function create(array $data,$model) {
        return $model::create($data);
    }
    public function update($id, array $data,$model) {
        return $model::where('id',$id)->update($data);
    }
    public function delete($id,$model) {
        return $model::where('id',$id)->delete();
    }

}


