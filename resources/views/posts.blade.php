<x-button class="foo">
    Press me!
</x-button>
<x-layout>
    <x-slot name="banner">
        <h1>
            My blog
        </h1>
    </x-slot>
    @foreach ($posts as $post)
    <article class="{{ $loop->even ? 'foobar' : '' }}">
        <h1>
            <a href='/posts/{{ $post->slug }}'>{{ $post->title }}</a>
        </h1>

        <div>
            {{ $post->excerpt }}
        </div>
    </article>
    @endforeach
</x-layout>
