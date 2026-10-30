@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-lg p-6">
        <form method="POST" action="{{ route('password.store') }}" class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Reset Password') }}</h1>

                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input id="email" name="email" type="email" value="{{ old('email', $request->email) }}"
                        class="input w-full @error('email') input-error @enderror" required autofocus autocomplete="username">
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input id="password" name="password" type="password"
                        class="input w-full @error('password') input-error @enderror" required autocomplete="new-password">
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="input w-full @error('password_confirmation') input-error @enderror" required autocomplete="new-password">
                    @error('password_confirmation')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="card-actions justify-end">
                    <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                </div>
            </div>
        </form>
    </main>
@endsection
