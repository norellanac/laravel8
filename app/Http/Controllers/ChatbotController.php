<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use App\Models\ChatbotsQuestion;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records= Chatbot::with('questions')->get();
        if ($records) {
            return view('chatbot.index', ['records'=>$records->where('is_conversation', '==', 0), 'conversations'=>$records->where('is_conversation', '==', 1)]);
        } else {
            return view('chatbot.index', ['records'=>null]);
        }
        
        

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
        //dd($request);
        $this->validate($request, [
            'keyword' => 'required|unique:chatbots,keyword',
            'is_conversation' => 'required',
        ]);

        $record= new Chatbot;
        $record->keyword=$request->keyword;
        $record->is_conversation=$request->is_conversation;
        $record->save();
        return redirect()->action([ChatbotController::class, 'index'])->with(['message' => 'Transaccion exitosa', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id $chatbot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit chatbot keyword's questions
        $records= Chatbot::where('id',$id)->with('questions')->get();
        if ($records->first()) {
            return view('chatbot.questions.index', ['chatbot'=>$records->first(), 'records'=>$records->first()->questions]);
        } else {
            return view('chatbot.questions.index', ['chatbot'=>null, 'records'=>null]);
        }
        
        
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
        return redirect()->action([ChatbotController::class, 'index'])->with(['message' => 'Record deleted', 'alert' => 'danger']);
    }


    /* ++++++++admin questions to chat+++++++++ */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuestions(Request $request)
    {
        //
        $this->validate($request, [
            'description' => 'required',
            'sort_number' => 'required',
            
        ]);

        $record= new ChatbotsQuestion;
        $record->description=$request->description;
        $record->chatbot_id=$request->chatbot_id;
        $record->sort_number=$request->sort_number;
        $record->save();
        return redirect()->action([ChatbotController::class, 'edit'],  ['chatbot' => $request->chatbot_id])->with(['message' => 'Transaccion exitosa', 'alert' => 'success']);
    }
}
