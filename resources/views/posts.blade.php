<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="post/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->body }}</p>
        </article>
    @endforeach
</x-layout>
