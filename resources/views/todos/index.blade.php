@extends('app')

@section('content')

<div class="container w-25 border p-5 mt-5 bg-light">
  <form action="{{route('todoes')}}" method="POST">
  {{ csrf_field() }}
  @if (session("success"))
  <h6 class="alert alert-success">{{session("success")}}</h6>
  @endif

  @if($errors->any()) 
    @foreach ( $errors->all() as $error)
    <h6 class="alert alert-danger">{{$error}}</h6>
      
    @endforeach
  @endif
    <div class="mb-3">
      <input type="text" name="title" class="form-control" placeholder="Create todo" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label class="form-label">Category:</label><select name="category_id" class="form-select">
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>

  </form>
  @if ($todos)
    @foreach($todos as $todo)
    <div class="row py-1">
      <div class="col-md-9 d-flex align-items-center">
        <a href="{{route('todos-show',['id'=>$todo->id])}}">{{$todo->title}}</a>
      </div>
      <div class="col-md-3 d-flex justify-content-end">
        <form action="{{route('todos-destroy',['id'=>$todo->id])}}" method="POST">
        {!! method_field('delete') !!}
   
          {{csrf_field()}}
          <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
        </form>
      </div>
    </div>
    @endforeach
  @endif
</div>

@endsection