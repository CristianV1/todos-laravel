@extends("app")
@section("content")
<div class="container w-25 border p-5 mt-5 bg-light">
    
  <form action="{{route('todos-edit',['id'=>$todo->id])}}" method="POST">
  
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
      <label for="exampleInputEmail1" class="form-label">Modify todo name: </label>
      <input type="text" name="title" class="form-control" value="{{$todo->title}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Update todo</button>

  </form>
 
</div>
@endsection