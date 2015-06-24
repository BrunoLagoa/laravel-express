@extends('template')

@section('content')
    <h1>Edit Post: {{ $post->title }}</h1>

    @if($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <!-- Submit Form -->
    <div class="form-group">
        {!! Form::submit('Save Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection