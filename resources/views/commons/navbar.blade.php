<header class="mb-4">
    <nav class="navbar bg-indigo-500 text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">Purchased item</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu lg:block lg:menu-horizontal">
                {{-- アイテム作成ページへのリンク --}}
                <li><a class="link bg-violet-800" href="{{ route('items.create') }}">新規リスト</a></li>
            </ul>
        </div>
    </nav>
</header>