@if (count($wishfors) > 0)
    <ul class="list-unstyled">
        @foreach ($wishfors as $wishfor)
            <li class="media mb-3"> 
                <div class="col-sm-2">
                    {{--get,haveボタン--}}
                    @include('wishfors.owned_button', ['wishfors'=> $wishfors])
                </div>
                    <div class="media-body">
                        <div class="border border-info rounded">
                            <div>
                                <p class="mb-2"><a href="{!! nl2br(e($wishfor->url)) !!}" target="_blank">{!! nl2br(e($wishfor->url)) !!}</a></p>
                            </div>
                        <div class="border border-info"></div>
                            <div>
                                <p class="mb-2">{!! nl2br(e($wishfor->content)) !!}</p>
                            </div>
                        </div>
                        <div class="text-sm-right">
                                @if (Auth::id() == $wishfor->user_id)
                                    {{-- 投稿削除ボタンのフォーム --}}
                                    {!! Form::open(['route' => ['wishfor.destroy', $wishfor->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                @endif
                        </div>
                    </div>
            </li>
        @endforeach
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $wishfors->links() }}
@endif