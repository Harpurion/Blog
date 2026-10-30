@extends('partials.layout')

@section('content')
    <main class="container mx-auto space-y-4 p-4">
        <a href="{{ route('tags.index') }}" class="btn">Back to Tags</a>

        <section class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ $tag->name }}</h1>
                <p>{{ $tag->posts->count() }} posts</p>

                <div class="divider">Posts with this tag</div>
                <div class="space-y-2">
                    @forelse ($tag->posts as $post)
                        <article class="card bg-base-100 shadow-sm">
                            <div class="card-body">
                                <h2 class="card-title">
                                    <a href="{{ route('post', $post) }}" class="link link-hover">{{ $post->title }}</a>
                                </h2>
                                <div class="flex flex-wrap gap-3 text-sm text-base-content/70">
                                    <span>{{ $post->user->name }}</span>
                                    <time datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->created_at->format('Y-m-d H:i') }}</time>
                                </div>
                            </div>
                        </article>
                    @empty
                        <p>No posts use this tag yet.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
