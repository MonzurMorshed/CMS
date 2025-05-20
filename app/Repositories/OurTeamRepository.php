<?php

namespace App\Repositories;

use App\Models\OurTeam;

class OurTeamRepository implements OurTeamRepositoryInterface {

    public function all(){
        return OurTeam::latest()->pagianate(20);
    }
    public function find($id) {
        return OurTeam::findOrFail($id)->get()->toArray();
    }
    public function create(array $data) {
        return OurTeam::create($data);
    }
    public function update($id, array $data) {
        return OurTeam::where('id',$id)->update($data);
    }
    public function delete($id) {
        return OurTeam::where('id',$id)->delete();
    }

}


