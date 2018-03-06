@extends('layouts.index')


@section('content')

<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        @foreach($posts as $post)

          @include('partials.post', ['post'=> $post])

          @endforeach


          {{$posts->links()}}
     
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>

@stop