<x-layout name="layout">

    <x-slot:content>

        <article>
            <h1>
                {{$post->title}}
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
            </p>

            <div>
                <p>
                    {{ $post->body }}
                </p>
            </div>

        </article>

        <a href="/"> go back</a>

    </x-slot:content>

</x-layout>
