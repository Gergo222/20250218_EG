<?php

namespace App\Http\Controllers;

use App\Models\Harbor;
use App\Models\Ship;
use Illuminate\Http\Request;

class HarborController extends Controller
{
    public function getAll(){
        $harbors = Harbor::query()
            ->with("ships.owners")
            -> get();
        return response()->json($harbors);
    }
    public function create(Request $request){
        $data = $request->all();
        $harbor = Harbor::create($data);

        return response()->json($harbor, 201);
    }

    public function update(Harbor $harbor, Request $request){
        $data = $request->all();
        $harbor->update($data);
        return response()->json($harbor);
    }

    public function delete(Harbor $harbor){
        $harbor->delete();
        return response()->json("", 204);
    }

    public function parkOpen(Harbor $harbor){
        $harbor->open = !$harbor->open;
        $harbor->save();

        return response()->json($harbor);
    }
}
