@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-4xl p-6">
        <section class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Dashboard') }}</h1>
                <p>{{ __('You\'re logged in!') }}</p>
            </div>
        </section>
    </main>
@endsection
