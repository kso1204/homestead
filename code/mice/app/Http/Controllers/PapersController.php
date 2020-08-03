<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('papers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paper = new \App\Paper;
        return view('papers.create', compact('paper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        

        if($request->hasFile('files')){

            $files = $request->file('files');

            foreach($files as $file)
            {
                $filename = filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);
                $file->move(attachments_path(),$filename);
                $payload=[
                    'filename' => $filename,
                    'bytes' => $file->getSize(),
                    'mime' => $file->getClientMimeType()
                ];

                \App\Attachment::create($payload);
            }
            
        }
        //
        //넘겨받는 request->all()에서 정리된 값들이랑 이 데이터를 처리하는 모델에서 정의된 변수명이랑 일치할 경우 그 내용이 그대로 들어간다
        dd($request->all());
        \App\Paper::create($request->all());


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
