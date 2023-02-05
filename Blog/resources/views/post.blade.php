<x-layout name="layout">

    <x-slot:content>

        <article>
            <h1>
                {{$post->title}}
            </h1>
            <div>
                {{--  !! will escape html tag and render them  --}}
                {!!$post->body!!}
            </div>
        </article>
        <a href="/"> go back</a>

    </x-slot:content>

</x-layout>
