<?php

namespace App\Http\Controllers;
use App\Models\Word;
use App\Models\Category;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('words.index', ['words'=>Word::all(),'categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'persian'=>'required',
            'arabic' => 'required'
        ]);
       $words = new Word();
       $words->persian= request('persian');
       $words->arabic = request('arabic');
       $words->description= request('description');
       $words->cat_name= request('cat_name');
       $words->save();

       return redirect()->intended(route('words'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        return view('words.show', ['word' => $word]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        return view('words.edit',['word'=>$word,'categories'=>Category::all()]);
        
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
        $word= Word::find($id);
        $word->persian = $request->persian;
        $word->arabic = $request->arabic;
        $word->description  = $request->description;
        $word->cat_name = $request->cat_name;
        $word->save();
        return redirect()->route('words');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $words = Word::find($id);
        $words->delete();
        return redirect()->route('words')
                        ->with('success', 'کلمه حذف شد!');
    }
}
