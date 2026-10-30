<section>
    <header class="mb-4">
        <h2 class="card-title">{{ __('Update Password') }}</h2>
        <p class="text-base-content/70">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>

    @if (session('status') === 'password-updated')
        <div role="alert" class="alert alert-success mb-4">
            <span>{{ __('Saved.') }}</span>
        </div>
    @endif

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Current Password') }}</legend>
            <input id="update_password_current_password" name="current_password" type="password"
                class="input w-full @error('current_password', 'updatePassword') input-error @enderror" autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('New Password') }}</legend>
            <input id="update_password_password" name="password" type="password"
                class="input w-full @error('password', 'updatePassword') input-error @enderror" autocomplete="new-password">
            @error('password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="input w-full @error('password_confirmation', 'updatePassword') input-error @enderror" autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
