<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    
    /**
    * @OA\Get(
    *     path="/chatbot",
    *      operationId="gel all records",
    *      tags={"chatbot"},
    *      summary="Get records information",
    *      description="Returns records data",
    *     @OA\Response(
    *          response=200,
    *          description="successful operation"
    *       ),
    *      @OA\Response(response=400, description="Bad request"),
    *      @OA\Response(response=404, description="Resource Not Found"),
    *       security={
    *           {"api_key_security_example": {}}
    *       }
    * )
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records= Chatbot::all();
        return view('chatbot.index', ['records'=>$records]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('chatbot.create');
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
        $this->validate($request, [
            'keyword' => 'required|unique:chatbots,keyword',
        ]);

        $record= new Chatbot;
        $record->keyword=$request->keyword;
        $record->save();
        return redirect()->action([ChatbotController::class, 'index'])->with(['message' => 'Transaccion exitosa', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function show(Chatbot $chatbot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function edit(Chatbot $chatbot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chatbot $chatbot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $record = Chatbot::find($id);
        $record->delete();
        dd('eliminando');
    }
}
