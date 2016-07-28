@extends('layouts.app')

@section('content')

    <div class="container">
    @if (Session::has('status'))

        <div class="flash">
           <div class="alert alert-success">
             {{ Session::get('status') }}
           </div>
        </div>

    @endif
        <div class="contact-create">
            <a class="btn btn-primary" href="{{ route('contact.create') }}">Create Contact</a>
        </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
              <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->number }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->website }}</td>
                <td><a href="">Edit</a><form action="" method="POST"><button type="submit">Delete</button>
                  <input type="hidden" name="_method" value="DELETE">
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>        
    </div>

@endsection


