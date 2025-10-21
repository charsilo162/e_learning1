@extends('layouts.dashboard')

@section('sidebar')
    <livewire:category-sidebar :active-category-slug="$activeCategorySlug ?? null" />
@endsection

@section('content')
    {{ $slot }}
@endsection
