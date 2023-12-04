@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>新規作成ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('items.store') }}" class="w-1/2">
            @csrf

                <div class="form-control my-4">
                    <label for="purchase_date" class="label">
                        <span class="label-text">購入日:</span>
                    </label>
                    <input type="text" name="purchase_date" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="category" class="label">
                        <span class="label-text">カテゴリ:</span>
                    </label>
                    <input type="text" name="category" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="maker" class="label">
                        <span class="label-text">メーカー:</span>
                    </label>
                    <input type="text" name="maker" class="input input-bordered w-full">
                </div>
                
                <div class="form-control my-4">
                    <label for="product_number" class="label">
                        <span class="label-text">品番:</span>
                    </label>
                    <input type="text" name="product_number" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">コメント:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">新規作成</button>        
        </form>
    </div>
@endsection