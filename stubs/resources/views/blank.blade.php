@extends(config('laravel-auth.layout.app'))

@section('header')
<x-tab::page-header title="Untitled">
    <div class="btn-list">
        <x-tab::a href="#" class="btn btn-primary" icon="plus" :label="__('New')"></x-tab::a>
    </div>
</x-tab::page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
    </div>
</div>
@endsection