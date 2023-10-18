@extends('main')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('.') }}">{{ __('home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('post/list') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('list') }}</li>
        </ol>
    </nav>
@endsection

@section('content')
    @livewire('post.postlist')
@endsection
