@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <a class="btn btn-primary"></a>
        {{ $posts->links()}}
        <div class="grid grid-cols-4 gap-2">
            <thead>
                <th>Title</th>
                <th>Created</th>
                <th>ID</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
        @foreach ($posts as $post)
            <tr class="hover:bg-base-300">
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->id }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <div class="join">
                        <a class="btn btn-info">View</a>
                        <a class="btn btn-warning">Edit</a>
                        <a class="btn btn-error">Delete</a>
                    </div>
                </td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
                <th>Title</th>
                <th>Created</th>
                <th>ID</th>
                <th>Updated</th>
                <th>Actions</th>
            </tfoot>
        </table>
        {{ $posts->links()}}
    </div>
@endsection
