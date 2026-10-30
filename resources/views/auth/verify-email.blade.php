@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-2xl p-6">
        <section class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Verify your email address') }}</h1>
                <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

                @if (session('status') === 'verification-link-sent')
                    <div role="alert" class="alert alert-success">
                        <span>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</span>
                    </div>
                @endif

                <div class="card-actions justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-ghost">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
