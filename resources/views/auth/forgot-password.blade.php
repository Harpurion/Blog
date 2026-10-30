@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-lg p-6">
        <form method="POST" action="{{ route('password.email') }}" class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Forgot your password?') }}</h1>
                <p>{{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

                @if (session('status'))
                    <div role="alert" class="alert alert-success">
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                        class="input w-full @error('email') input-error @enderror" required autofocus autocomplete="username">
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="card-actions justify-end">
                    <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                </div>
            </div>
        </form>
    </main>
@endsection
