<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Opportunites;
use App\Http\Requests\OpportunityRequest;
use App\Works;
use App\Http\Requests\WorksRequest;

class OpportunitesController extends Controller
{
    public function list(){
        $data = Opportunites::select('id', 'opportunity')->get();
        
        return $data;
    }

    public function find($id){
        $data = Opportunites::find($id);
        
        if(empty($data)){
            return "A busca pelo id:{$id} não retornou nenhum resultado.";        
        }

        return $data;
    }

    public function store(OpportunityRequest $request){
        Opportunites::create($request->all());
    }

    /*
    *   Work List and Store
    */

    public function works(){
        return Works::get();
    }

    public function store_work(WorksRequest $request){
        Works::create($request->all());
    }
}
