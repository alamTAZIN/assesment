<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Auth;

class NoteController extends Controller
{
    public function note_store(Request $request){
        $note= new Note;
        $note->title=$request->title;
        $note->content=$request->content;
        $note->created_by=Auth::user()->id;
        $note->save();

        return redirect()->route('note');

    }

    public function note(){
        $note=Note::all();
        return view('admin.note',[
            'note'=>$note,
        ]);
    }

    public function show_note(){
        $note=Note::all();
        return view('admin.note',[
            'note'=>$note,
        ]);
    }

    public function note_edit($id){
        $note = Note::find($id);
        return view('admin.note_edit',[
            'note'=>$note
        ]);
    }

    public function note_edit_update(Request $request){
        $note= Note::find($request->note_id);
        $note->title=$request->title;
        $note->content=$request->content;
        $note->created_by=Auth::user()->id;
        $note->update();

        return redirect()->route('note');

    }

    public function note_delete(Request $request){
        $note= Note::find($request->id);
       $note->delete();
       return redirect()->route('note');


    }
}
