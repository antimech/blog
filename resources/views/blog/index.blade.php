<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Blog</h1>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                @forelse($posts as $post)
                    <div class="jumbotron">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ date('M j, Y', strtotime($post->created_at)) }}</p>
                        <p class="lead">{{ $post->body }}</p>
                        <p><a class="btn btn-primary btn-md" href="{{ route('blog.show', $post->id) }}" role="button">Learn more</a></p>
                    </div>
                @empty
                    <tr>
                        <td>Nothing here.</td>
                    </tr>
                @endforelse

                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>/
