<x-layout>

    <x-slot name="title">
      My BBS
    </x-slot>

<h1>
    <span>MyBBS</span>
    <a href="{{ route('posts.create')}}">[Add]</a>
</h1>
<ul>
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

