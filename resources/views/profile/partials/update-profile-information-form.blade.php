<section>
    <header class="mb-4">
        <h2 class="card-title">{{ __('Profile Information') }}</h2>
        <p class="text-base-content/70">{{ __('Update your account\'s profile information and email address.') }}</p>
    </header>

    @if (session('status') === 'profile-updated')
        <div role="alert" class="alert alert-success mb-4">
            <span>{{ __('Saved.') }}</span>
        </div>
    @endif

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('patch')

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Name') }}</legend>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}"
                class="input w-full @error('name') input-error @enderror" required autofocus autocomplete="name">
            @error('name')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Email') }}</legend>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                class="input w-full @error('email') input-error @enderror" required autocomplete="username">
            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div role="alert" class="alert alert-warning">
                <span>{{ __('Your email address is unverified.') }}</span>
                <button form="send-verification" class="btn btn-link">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </div>
        @endif

        @if (session('status') === 'verification-link-sent')
            <div role="alert" class="alert alert-success">
                <span>{{ __('A new verification link has been sent to your email address.') }}</span>
            </div>
        @endif

        <div class="flex items-center gap-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</section>
