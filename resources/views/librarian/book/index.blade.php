@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Page Count</th>
            <th>Librarian</th>
            <th>Availability</th>
            <th>Taken By</th>
            <th>Taken At [d/m/y]</th>
            <th>Delete Book</th>
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
                <td>
                    @if($book->member)
                        <a href="#" class="btn btn-danger disabled" role="button" disabled> Delete </a>
                        @else
                        {!! Form::open(['method' => 'DELETE', 'route' => ['book.destroy', $book->id]]) !!}
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
