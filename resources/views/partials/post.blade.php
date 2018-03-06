 <div class="post-preview">
            <a href="{{route('post.show', $post->slug)}}">
              <h2 class="post-title">

               {{ $post->title }}

              </h2>
              <h3 class="post-subtitle">

                {{ $post->excerpt }}

              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="">{{$post->author->name}}</a>
              on {{$post->created_at->format('F d,Y')}}</p>
          </div>

               <hr>


               @section('header')
     <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Jayce web dev</h1>
              <span class="subheading">Backend and Frontend</span>
            </div>
          </div>
        </div>
      </div>
    </header> 
    @stop