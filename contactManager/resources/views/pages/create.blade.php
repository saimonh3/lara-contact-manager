@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="error-message">
            @if (count($errors) > 0)
                <!-- Form Error List -->
                <div class="alert alert-danger">
                    <strong>Whoops! Something went wrong!</strong>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div> 
  <form class="form-horizontal" role="form" action="{{ route('contact.store') }}" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="number">Number:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="website">Website:</label>
      <div class="col-sm-10">
        <input type="website" class="form-control" id="website" name="website" placeholder="Enter Website">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Save">
      </div>
    </div>
    {{ csrf_field() }}
  </form>       
    </div>

@endsection