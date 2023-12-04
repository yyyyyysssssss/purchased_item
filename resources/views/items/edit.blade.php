@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id: {{ $item->id }} の編集ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('items.update', $item->id) }}" class="w-1/2">
            @csrf
            @method('PUT')

                <div class="form-control my-4">
                    <label for="purchase_date" class="label">
                        <span class="label-text">購入日:</span>
                    </label>
                    <input type="text" name="purchase_date" value="{{ $item->purchase_date }}" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="category" class="label">
                        <span class="label-text">カテゴリ:</span>
                    </label>
                    <input type="text" name="category" value="{{ $item->category }}" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="maker" class="label">
                        <span class="label-text">メーカー:</span>
                    </label>
                    <input type="text" name="maker" value="{{ $item->maker }}" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="product_number" class="label">
                        <span class="label-text">品番:</span>
                    </label>
                    <input type="text" name="product_number" value="{{ $item->product_number }}" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">コメント:</span>
                    </label>
                    <input type="text" name="content" value="{{ $item->content }}" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">更新</button>
        </form>
    </div>

@endsection