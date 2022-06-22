@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
        @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                @include('wishfors.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('wishfors.wishfors')
        </div>
    </div>
@endsection