<?php

namespace App\Repositories\Interface;

interface CommonRepositoryInterface {
    public function all($model);
    public function find($id,$model);
    public function create(array $data,$model);
    public function update($id, array $data,$model);
    public function delete($id,$model);
}
