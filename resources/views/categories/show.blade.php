@extends('app')

@section('content')

<div class="container w-25 border p-5 mt-5 bg-light">
  <form action="{{route('categories.update',['id'=>$category->id])}}" method="POST">
  {{ csrf_field() }}

  {!! method_field('PATCH') !!}

  @if (session("success"))
  <h6 class="alert alert-success">{{session("success")}}</h6>
  @endif

  @if($errors->any()) 
    @foreach ( $errors->all() as $error)
    <h6 class="alert alert-danger">{{$error}}</h6>
      
    @endforeach
  @endif
    <div class="mb-3">
      <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="modify category" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
      <input type="color" name="color" value="{{$category->color}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Modify</button>
    @if($category->todos->count()>0)

    @foreach ($category->todos as $todo)
    
    <div class="row-py-1">
        <div class="col-md-9 d-flex align-items-center">
          <a href="{{route('todos-edit',['id'=>$todo->id])}}">{{$todo->title}}</a>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
          <form action="{{route('todos-destroy',['id'=>$todo->id])}}" method="post">
            
            {!! method_field("DELETE") !!}
            
            
            {{ csrf_field() }}

            <button class="btn btn-danger btn-sm">Delete</button>
          </form>
        </div>
      </div>
      @endforeach
    @else
      <p>there is not todos for this category</p>
    @endif

  </form>
 
</div>

@endsection