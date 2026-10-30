@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-2xl p-4">
        <form action="{{ route('tags.update', $tag) }}" method="POST" class="card bg-base-300 shadow-sm p-4">
            <div class="card-body">
                <h1 class="card-title">Edit Tag</h1>
                @csrf
                @method('PUT')

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name</legend>
                    <input name="name" value="{{ old('name', $tag->name) }}" type="text"
                        class="input w-full @error('name') input-error @enderror" required>
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="card-actions justify-end">
                    <a href="{{ route('tags.index') }}" class="btn">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </main>
@endsection
