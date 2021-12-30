
<x-layout>

    <x-slot name="title">
        {{ $post->title }} - My BBS
      </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>{{ $post->title }}
        <a href="{{ route('posts.edit', $post) }}">[Edit]</a>

        <form method="post" action="{{ route('posts.destroy', $post) }}" id=delete_post>

            @method('DELETE')
            @csrf

            <button class="button">[x]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comennts</h2>
    <ul>
        <li>
            <form method="post" action="{{ route('comments.store', $post) }}" class="comment-form">
                @csrf

                <input type="text" name="body">
                <button>add</button>
            </form>
        </li>
        @foreach ($post->comments()->latest()->get() as $comment)
        <li>
            {{ $comment->body }}
            <form  method="post" action="{{ route('comments.destroy', $comment) }}"  class="delete-comment">
                @method('DELETE')
                @csrf

                <button class="button">[x]</button>

            </form>
        </li>
        @endforeach
    </ul>


    <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if(!confirm('sure to delete?')) {
                    return;
                }

                e.target.submit();
            });

            document.querySelectorAll('.delete-comment').forEach(form => {

                form.addEventListener('submit', e => {
                    e.preventDefault();

                    if(!confirm('sure to delete?')) {
                        return;
                    }

                    form.submit();
                });

            });

        }
    </script>

</x-layout>
