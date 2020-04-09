@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-12">
            <h2>Welcome to Member Panel, <span class="font-weight-bold">{{ $member->user->name }}</span></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 offset-1"><a href="/member/book/borrow" class="btn btn-dark p-4" role="button"><span class="h1">Borrow a Book</span></a></div>
    </div>
    @if($member->books()->count())
    <div class="row mt-5">
        <h1>Borrowed Books</h1>
    </div>

        <table class="table">
            <thead>
            <tr>
                <th>Book ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Page Count</th>
                <th class="text-center">Taken At [d/m/y]</th>
                <th class="text-center">Return Book</th>
            </tr>
            </thead>
            <tbody>
            @foreach($member->books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->page_count }}</td>
                    <td class="text-center">{{ $book->taken_at ?? '-' }}</td>
                    <td class="text-center">
                        @if(!$book->member)
                            -
                        @else
                            <a href="/member/book/return/{{$book->id}}" role="button" class="btn btn-info">Return</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
</div>
@endsection
