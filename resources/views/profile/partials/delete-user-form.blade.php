<section>
    <header class="mb-4">
        <h2 class="card-title">{{ __('Delete Account') }}</h2>
        <p class="text-base-content/70">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
    </header>

    <button type="button" class="btn btn-error"
        onclick="document.getElementById('confirm-user-deletion').showModal()">
        {{ __('Delete Account') }}
    </button>

    <dialog id="confirm-user-deletion" class="modal" @if ($errors->userDeletion->isNotEmpty()) open @endif>
        <div class="modal-box">
            <form method="dialog">
                <button type="submit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" aria-label="{{ __('Close') }}">X</button>
            </form>

            <h3 class="text-lg font-bold">{{ __('Are you sure you want to delete your account?') }}</h3>
            <p class="py-4">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input id="delete_password" name="password" type="password" placeholder="{{ __('Password') }}"
                        class="input w-full @error('password', 'userDeletion') input-error @enderror" autocomplete="current-password">
                    @error('password', 'userDeletion')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="modal-action">
                    <button type="button" class="btn"
                        onclick="document.getElementById('confirm-user-deletion').close()">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-error">{{ __('Delete Account') }}</button>
                </div>
            </form>
        </div>

        <form method="dialog" class="modal-backdrop">
            <button type="submit">{{ __('Close') }}</button>
        </form>
    </dialog>
</section>
