
<x-layout>

    <x-slot name="title">
        新規投稿 - Laravel掲示板
      </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>
    <h1>新規投稿</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label for="">タイトル
                <input type="text" name="title" value={{ old('title' )}}>
            </label>

            @error('title')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            <label for="">本文
                <textarea name="body">{{ old('body') }}</textarea>
            </label>

            @error('body')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-button">
            <button>投稿</button>
        </div>

    </form>

</x-layout>
