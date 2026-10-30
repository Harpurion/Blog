@extends('partials.layout')

@section('content')
    <main class="container mx-auto space-y-4 p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold">Tags</h1>
            <a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
        </div>

        {{ $tags->links() }}

        <div class="overflow-x-auto rounded-box border border-base-300 bg-base-100">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Posts</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->posts_count }}</td>
                            <td>
                                <div class="join">
                                    <a href="{{ route('tags.show', $tag) }}" class="join-item btn btn-info">View</a>
                                    <a href="{{ route('tags.edit', $tag) }}" class="join-item btn btn-warning">Edit</a>
                                    <button form="delete-tag-{{ $tag->id }}" type="submit" class="join-item btn btn-error">Delete</button>
                                </div>
                                <form id="delete-tag-{{ $tag->id }}" action="{{ route('tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No tags found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $tags->links() }}
    </main>
@endsection
