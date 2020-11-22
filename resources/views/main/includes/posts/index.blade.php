@switch($type)
    @case('article')
        <article class="card">
            @if($post->hasCover())
                <img src="{{ $post->cover->cover() }}" class="card-img-top" alt="{{ $post->headline }}">
            @endif
            <div class="card-body">
                <h3 class="card-title">{{ $post->headline }}</h3>
                <p class="card-text">{{ $post->excerpt }}</p>
                <p class="card-text">{{ $post->publishedAt() }}</p>
                <p class="card-text">
                    Категория: <a href="#">{{ $post->section->name }}</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Читать полностью</a>
                </p>
            </div>
        </article>
        @break
    @case('carousel')
        <article class="card bg-dark text-white">
            <img src="{{ $post->cover->cover() }}"
                 class="card-img brightness-50" alt="{{ $post->headline }}">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $post->headline }}</h5>
                <p class="card-text">{{ $post->publishedAt() }}</p>
                <p class="card-text">
                    Категория: <a href="#">{{ $post->section->name }}</a>
                </p>
                <a href="#" class="btn btn-dark">Смотреть <i class="fas fa-images fa-sm ml-3 text-right"></i></a>
            </div>
        </article>
        @break
    @case('presentation')
        <article class="card bg-dark text-white">
            <img src="{{ $post->cover->cover() }}"
                 class="card-img brightness-50" alt="{{ $post->headline }}">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $post->headline }}</h5>
                <p class="card-text">{{ $post->publishedAt() }}</p>
                <p class="card-text">
                    Категория: <a href="#">{{ $post->section->name }}</a>
                </p>
                <a href="#" class="btn btn-dark">Смотреть <i class="fas fa-file-powerpoint fa-sm ml-3 text-right"></i></a>
            </div>
        </article>
        @break
    @case('videopost')
        <article class="card bg-dark text-white">
            <img src="{{ $post->cover->cover() }}"
                 class="card-img brightness-50" alt="{{ $post->headline }}">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $post->headline }}</h5>
                <p class="card-text">{{ $post->publishedAt() }}</p>
                <p class="card-text">
                    Категория: <a href="#">{{ $post->section->name }}</a>
                </p>
                <a href="#" class="btn btn-dark">Смотреть <i class="fas fa-file-video fa-sm ml-3 text-right"></i></a>
            </div>
        </article>
        @break
@endswitch
