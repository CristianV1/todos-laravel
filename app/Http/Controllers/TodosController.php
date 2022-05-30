<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //
    public function store(Request $request){
        /*$token = $request->session()->token();
        $token=csrf_token();*/
        $this->validate($request,['title'=>'required|min:3']);
        $todo=new Todo;
        $todo->category_id=$request->category_id;
        $todo->title=$request->title;
        $todo->save();
        return redirect()->route("todos")->with("success","Task created successfully");
    }

    public function index(){
        $todos = Todo::all();
        $categories = Category::all();
        return view("todos.index",["todos"=>$todos,"categories"=>$categories]);
    }

    public function show($id){
        $todo = Todo::find($id);
        return view("todos.editTodo",["todo"=>$todo]);
    }

    public function update(Request $request,$id){
        $this->validate($request,['title'=>'required|min:3']);
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();
        return redirect()->route("todos")->with("success","Updated Successfully");
    }

    public function destroy($id){
        
        $Todo = Todo::find($id);
        $Todo->delete();
        return redirect()->route("todos")->with("success","Deleted successfully");
    }



}
