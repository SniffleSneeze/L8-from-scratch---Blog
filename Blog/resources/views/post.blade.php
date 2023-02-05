<x-layout name="layout">

    <x-slot:content>

        <article>
            <h1>
                {{$post->title}}
            </h1>
            <div>
                <p>
                    {{ $post->body }}
                </p>
            </div>
        </article>

        <a href="/"> go back</a>

    </x-slot:content>

</x-layout>
