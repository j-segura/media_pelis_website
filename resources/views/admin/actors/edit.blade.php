@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Actualizar datos del actor</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="image_banner">
                <strong class="form-label ">Foto actual:</strong>
                <img src="/imagenes/fotosActores/{{ $actor->foto }}" class="foto_admin_edit">
            </div>

            {!! Form::model($actor, [
                'route' => ['admin.actors.update', $actor],
                'method' => 'put',
                'enctype' => 'multipart/form-data'
            ]) !!}

            @include('admin.actors.partials.form')

            {!! Form::submit('Actualizar actor', [
                'class' => 'btn btn-primary',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop

<style>
    .foto_admin_edit {
        width: 200px;
        height: 250px;
        object-fit: cover;
        margin-bottom: 15px;
    }
    
    .image_banner {
        display: flex;
        flex-direction: column;
    }

    .image_banner strong {
        margin-bottom: 15px;
    }
</style>