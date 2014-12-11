@extends ('login')
@section('posts')
@foreach($posts as $post)
          <div class="sing_20A">
            <h1>{{ $post->title }}</h1>
            <div class="contenido_noticia">
              <div class="ocultar">
                <p>{{ $post->content }}
                    <a href="{{ URL::to('admin/posts/' . $post->id) }}" class="more-link">Continue reading</a></p>
              </div>
            </div>
          </div>
@endforeach
 {{ $posts->links() }}
@stop