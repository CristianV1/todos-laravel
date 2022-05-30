@extends('app')

@section('content')

<div class="container w-25 border p-5 mt-5 bg-light ">
  <form action="{{route('categories.store')}}" method="POST">
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
      <input type="text" name="name" class="form-control" placeholder="Create category" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
      <input type="color" name="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>

  </form>
  @if ($categories)
    @foreach($categories as $category)
    <div class="row py-1">
      <div class="col-md-9 d-flex align-items-center">
        <a href="{{route('categories.show',['id'=>$category->id])}}"><span class="color-container" style="background-color:{{$category->color}}"></span>{{$category->name}}</a>
      </div>
      <div class="col-md-3 d-flex justify-content-end">
        <form action="{{route('categories.destroy',['id'=>$category->id])}}" method="POST">
        {!! method_field('DELETE') !!}
   
          {{csrf_field()}}
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$category->id}}">
            Delete
            </button>
            <div class="modal fade" id="modal-{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         if you erase <strong>{{$category->name}}</strong> all the todos that have the category will be deleted
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>


   
    @endforeach
  @endif
</div>



@endsection