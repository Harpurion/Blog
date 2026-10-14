@extends('partials.layout')
@section('content')
<div class="container mx-auto">
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">Back</a>
    <div class="card bg-base-300 shadow-sm">
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>{{ $post->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{ $post->content }}</td>
                <tr>
                    <th>Created</th>
                    <td>{{ $post->created_at }}</td>
                <tr>
                    <th>Updated</th>
                    <td>{{ $post->updated_at }}</td>
                </tr>
                </tr>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection