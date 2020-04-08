@extends('layouts.app')

@section('content')
<div class="container-fluid w-75">
    <div class="row mb-3 justify-content-between">
        <div class="col-auto">
            <a href="/librarian" role="button" class="btn btn-secondary align-self-end"><span class="h3">
                    <svg class="bi bi-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> Librarian Panel</span></a>
        </div>
        <div class="col-auto">
            <a href="/librarian/book/create" role="button" class="btn btn-outline-dark align-self-end"><span class="h3">Add Book</span></a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Page Count</th>
            <th>Librarian</th>
            <th>Availability</th>
            <th class="text-center">Taken By</th>
            <th class="text-center">Taken At [d/m/y]</th>
            <th class="text-center">Return Book</th>
            <th class="text-center">Delete Book</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->page_count }}</td>
                <td>{{ $book->librarian->user->name }}</td>
                <td>{{ $book->member ? 'Taken' : 'Available' }}</td>
                <td class="text-center">{{ $book->member->user->name ?? '-' }}</td>
                <td class="text-center">{{ $book->taken_at ?? '-' }}</td>
                <td class="text-center">
                    @if(!$book->member)
                        -
                    @else
                        <a href="/librarian/book/return/{{$book->id}}" role="button" class="btn btn-info">Return</a>
                    @endif
                </td>
                <td class="text-center">
                    @if($book->member)
                        <a href="#" class="btn btn-danger disabled" role="button" disabled> Delete </a>
                        @else
                        {!! Form::open(['method' => 'DELETE', 'route' => ['librarian.book.destroy', $book->id]]) !!}
{{--                        {{ Form::submit('Click') }}--}}
                        <button type="submit" class="btn btn-danger"> Delete </button>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $books->links() }}
            </div>
        </div>
</div>
@endsection
