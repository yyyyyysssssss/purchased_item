@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id = {{ $item->id }} の詳細ページ</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th>購入日</th>
            <td>{{ $item->purchase_date }}</td>
        </tr>
        <tr>
            <th>カテゴリ</th>
            <td>{{ $item->category }}</td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>{{ $item->maker }}</td>
        </tr>
        <tr>
            <th>品番</th>
            <td>{{ $item->product_number }}</td>
        </tr>
        <tr>
            <th>コメント</th>
            <td>{{ $item->content }}</td>
        </tr>
    </table>

    {{-- アイテム編集ページへのリンク --}}
    <a class="btn btn-outline" href="{{ route('items.edit', $item->id) }}">修正</a>

    {{-- アイテム削除フォーム --}}
    <form method="POST" action="{{ route('items.destroy', $item->id) }}" class="my-2">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-error btn-outline" 
            onclick="return confirm('id = {{ $item->id }} を削除します。よろしいですか？')">削除</button>
    </form>

@endsection