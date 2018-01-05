{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/css/one.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

@include('common.rapidsearch')

<main class="app--core">

    @include('common.navigation')


    @if($over_three_error!='')
        <script>
            layer.alert('{{$over_three_error}}', {
                skin: 'layui-layer-lan' //样式类名
                ,closeBtn: 0
            });

        </script>
    @endif

    @if (session('WaitForMail') == '請確認信件')

        <script>
            layer.alert('為了確保您具備學生身分，請至信箱確認信件！', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('WaitForMail') }}
    @endif

    @if (session('getmail') == '以確認信件')

        {{ $data->email }}

    @endif


    @if (session('verify_ok') == '審核成功')

        <script>
            layer.alert('恭喜，身分審核成功，登入即可使用', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('verify_ok') }}

    @endif

    @if (session('landlord_msg') == '房東註冊成功')

        <script>
            layer.alert('恭喜註冊成功，登入後即可刊登房屋！', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        </script>

        {{  Session::forget('landlord_msg') }}
    @endif
    <section class="rslt">
        <nav class="rslt__view">
            <div class="rslt__view__acts">
                <form>
                    <button class="btn__fl state--active" js-view-grid><i class="btn__seg ion ion-grid"></i></button>
                    <button class="btn__fl" js-view-rows><i class="btn__seg ion ion-navicon"></i></button>
                    <button class="btn__fl" js-view-map><i class="btn__seg ion ion-ios-location"></i></button>

                    <label class="ui-dd">
                        <select name="result-sort" id="">
                            <option value="relevant">價格↑</option>
                            <option value="relevant">價格↓</option>
                        </select>
                        <i class="ion ion-ios-arrow-down"></i>
                    </label>
                </form>

            </div>
        </nav>

        <ul class="rslt__feed">
            @if (session('houses'))
                @foreach(session('houses') as $house)
                    <li class="feed__itm" js-result-item><!--item 1 -->
                        <div class="feed__itm__inr">
                            <div class="feed__itm__img" style="background-image: url('{{  $house->file1 }}')" >
                                <span class="feed__itm__prc">${{ $house->rental }} 元/月</span>
                                <button class="btn__fl btn--fav" js-item-fav>
                                    <i class="btn__seg ion ion-android-favorite-outline"></i>
                                    <i class="btn__seg ion ion-android-favorite"></i>
                                </button>
                            </div>
                            <h5 class="feed__itm__ttl">{{ $house->housename }}</h5>
                            <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;
                                <span>
                                   {{ '#'.$house->housetype.' '}}
                                    {{ '#'.$house->rental.' '}}
                                    {{ '#'.$house->lease_term.' '}}
                                    {{ '#'.$house->material.' '}}
                                </span>
                            </p>
                            <button class="layui-btn layui-btn-radius layui-btn-normal" style="float: right;" type="button" onclick="javascript:location.href='houseinfo/{{ $house->house_id }}'">查看房屋</button>
                        </div>
                    </li><!--@end feed item-->
                @endforeach
            @endif
        </ul>

        @include('common.footer')

        <script src="/js/one.js" type="text/javascript" charset="utf-8" async defer></script>

