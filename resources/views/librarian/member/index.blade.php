@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3 justify-content-between">
        <div class="col-auto">
            <a href="/librarian" role="button" class="btn btn-secondary align-self-end"><span class="h3">
                    <svg class="bi bi-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> Librarian Panel</span></a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    @if($user->id != auth()->user()->id)
                    {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                    <button type="submit" class="btn btn-danger"> Delete </button>
                    {!! Form::close() !!}
                        @else
                        <a href="#" role="button" class="btn btn-danger disabled" disabled> Delete </a>
                        @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection
