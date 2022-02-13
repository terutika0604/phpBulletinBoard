<x-layout>

    <x-slot name="title">
        Laravel掲示板
    </x-slot>

<h1>
    <span>Laravel掲示板</span>
    <a href="{{ route('posts.create')}}">投稿</a>
</h1>
<p>自由に書き込み、コメントしてください。</p>
<ul class="articles">
    @forelse ($posts as $post)
    <li>
        {{-- Implicit Binding --}}
        {{-- <a href="{{ route('posts.show', $post) }}"> --}}
        <a href="{{ route('posts.show', $post) }}">
            {{ $post->title }}
        </a>
    </li>
    @empty
    <li>No</li>
    @endforelse
</ul>

</x-layout>

