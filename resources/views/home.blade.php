@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', [
        'title' => __('Accede a un curso ahora!'),
        'icon' => "th"
    ])
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @forelse($courses as $course)
            <div class="col-md-4">
                @include('partials.courses.card_course')
            </div>
        @empty
            <div class="alert alert-dark">
                {{ __("No hay cursos") }}
            </div>
        @endforelse
    </div>
    <div class="row justify-content-center">
        {{ $courses->links() }}
    </div>
</div>
@endsection
