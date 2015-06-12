@extends('blog')

@section('title')
    Home
@endsection


@section('stories')
@foreach($posts as $post)
<div class="row">
<br>
<div class="col-md-2 col-sm-3 text-center">
  <a class="story-img" href="#"><img src="//lorempixel.com/100/100/people/" style="width:100px;height:100px" class="img-circle"></a>
</div>
<div class="col-md-10 col-sm-9">
  <h3>{{ $post['title_post'] }}</h3>
  <div class="row">
    <div class="col-xs-9">
      <p>{{ $post['post'] }}</p>
      <p class="lead"><button class="btn btn-default">Post Completo</button></p>
      <p class="pull-right">
      @foreach($post['tags_post'] as $tag)
        <span class="label label-default">{{ $tag  }}</span>
      @endforeach
      </p>
      <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-calendar"></i> {{ $post['data_post'] }}</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> {{ $post['comments_post'] }} Comentários</a></li><li><a href="#"><i class="glyphicon glyphicon-user"></i> {{ $post['autor_post'] }}</a></li></ul>
      </div>
    <div class="col-xs-3"></div>
  </div>
  <br><br>
</div>
</div>
<hr>
@endforeach
@endsection