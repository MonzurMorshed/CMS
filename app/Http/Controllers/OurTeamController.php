<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public $ourteam;

    public function __construct(OurTeamRepositoryInterface $ourteam) {
        $this->ourteam = $ourteam;
    }

    public function index() {
        $data = $this->ourteam->all();
        return response()->json($data, 200, $headers);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required'
        ]);

        $ourteamData = $this->ourteam->create($data);
        return response()->json($ourteamData, 201);
    }

    public function show($id) {
        $data = $this->ourteam->find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required'
        ]);

        $ourteamData = $this->ourteam->update($data, $id);
        return response()->json($ourteamData, 200);
    }

    public function delete($id) {
        $data = $this->ourteam->delete($id);
        return response()->json(null, 200);
    }
}
