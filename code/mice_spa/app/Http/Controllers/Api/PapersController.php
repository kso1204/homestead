<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Paper;
use App\Http\Resources\PaperResource;



class PapersController extends Controller
{
    //
    public function index()
    {
        return PaperResource::collection(Paper::paginate(10)); 
    }

    public function show(Paper $Paper)
    {
        return new PaperResource($Paper);
    }

    
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => 'required',
            'abstracts' => 'required',
        ]);
            
        $paper=$request->all();
        /*
        $paper=merge_array($request->all(),$payload=[

        ])*/

        return new PaperResource(Paper::create([
            'title' => $data['title'],
            'abstracts' => $data['abstracts'],
        ]));
    }
}
