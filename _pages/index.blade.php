@extends('hyde::layouts.app')
@section('content')
@php($title = "Homepage")

<main class="w-full">
    <x-sections.hero />
    <x-sections.inwestycje />
    <x-sections.poradnik />
    <x-sections.contact />
</main>

@endsection
