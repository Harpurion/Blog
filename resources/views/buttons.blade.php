@extends('partials.layout')

@section('content')
    <main class="p-6">
        <h1 class="mb-4 text-lg font-semibold">Bootstrap primary button with Tailwind</h1>

        <div class="flex flex-wrap items-center gap-3">
            <button
                type="button"
                class="rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base leading-6 font-normal text-white transition-colors hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus-visible:ring-4 focus-visible:ring-[#0d6efd]/50 focus-visible:outline-none disabled:pointer-events-none disabled:opacity-[0.65]">
                Primary button
            </button>

            <button
                type="button"
                disabled
                class="rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base leading-6 font-normal text-white transition-colors hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus-visible:ring-4 focus-visible:ring-[#0d6efd]/50 focus-visible:outline-none disabled:pointer-events-none disabled:opacity-[0.65]">
                Disabled
            </button>
        </div>
    </main>
@endsection
