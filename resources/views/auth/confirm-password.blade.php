@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-lg p-6">
        <form method="POST" action="{{ route('password.confirm') }}" class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Confirm Password') }}</h1>
                <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>

                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input id="password" name="password" type="password"
                        class="input w-full @error('password') input-error @enderror" required autocomplete="current-password">
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="card-actions justify-end">
                    <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
                </div>
            </div>
        </form>
    </main>
@endsection
