<x-layout>
    <x-slot name="banner">
        <h1>
            My blog
        </h1>
    </x-slot>

    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>
