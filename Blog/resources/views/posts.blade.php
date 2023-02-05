<x-layout name="layout">

    <x-slot:banner>
        <h1>My Blog</h1>
    </x-slot:banner>

    <x-slot:content>
            @foreach ($posts as $post)
                <article class="{{ $loop->even ? 'even' : 'odd' }}">
                    <h1>
                        <a href="/post/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <div>
                        {{ $post->excerpt }}
                    </div>
                </article>
            @endforeach
    </x-slot:content>
</x-layout>


