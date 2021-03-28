<div class="card bg-dark text-white mb-4">
    <div 
        style="height:36em; background-size: cover; background-image: url('{{asset('images/' . $thumbnail)}}');">
    </div>
    <div class="card-body">
        <h2 class="card-title">{{ $title }}</h2>
        @if ($href !== '') 
            {!! \Illuminate\Support\Str::limit($description, $limit = 200, '..')  !!}
        @else
            {!! $description !!}
        @endif
        <p class="card-text text-muted">{{ $author }} - {{ $publishedAt }}</p>

        @if ($href !== '')
            <a href="{{ $href }}" class="stretched-link"></a>
        @endif
    </div>
</div>