@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>購入一覧</h2>
    </div>

    @if (isset($items))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>コメント</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                     <td><a class="link link-hover text-info" href="{{ route('items.show', $item->id) }}">{{ $item->id }}</a></td>
                    <td>{{ $item->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    

@endsection