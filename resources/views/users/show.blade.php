@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-6 offset-sm-4">
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded-circle" src="{{ Gravatar::get($user->email, ['size' => 300]) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="offset-sm-2 col-sm-8">
            {{--投稿一覧--}}
            @include("wishfors.wishfors")
            {{--get,haveボタン--}}
            @include('wishfors.owned_button', ['wishfors'=> $wishfors])
        </div>
    </div>
@endsection