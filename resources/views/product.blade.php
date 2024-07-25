@extends('layouts.master')
@push('styles')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush

@section('content')
    @livewire('product.index')
@endsection