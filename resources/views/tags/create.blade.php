@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-2xl p-4">
        <form action="{{ route('tags.store') }}" method="POST" class="card bg-base-300 shadow-sm p-4">
            <div class="card-body">
                <h1 class="card-title">New Tag</h1>
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name</legend>
                    <input name="name" value="{{ old('name') }}" type="text"
                        class="input w-full @error('name') input-error @enderror" required>
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="card-actions justify-end">
                    <a href="{{ route('tags.index') }}" class="btn">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </main>
@endsection
