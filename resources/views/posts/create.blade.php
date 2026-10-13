@extends('partials.layout')
@section('content')
<div class="container mx-auto">
    <form method="POST">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">What is your name?</legend>
            <input type="text" class="input" placeholder="Type here" />
            <p class="label">Optional</p>
        </fieldset>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
