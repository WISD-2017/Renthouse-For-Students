@include('common.errorsettings')

@include('common.head')
@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>
<!--<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>-->


    <div class="form-box l-col-wrap">

        <div class="l-col form-box__form">
            <h1 class="form-box__title">Login For Tenant<p><p>請輸入房客的帳號密碼進行登入</p></h1>
            <br>

            <form name="loggedin" id="loggedin" method="post" action="/login/find" class="form form--log-in">
                {{ csrf_field() }}
                <label for="account" class="form__label">房客帳號：</label>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入房客帳號" >

                <label for="password" class="form__label">房客密碼：</label>
                <input id="inputPassword" name="password" type="password" class="form__field" placeholder="請輸入房客密碼" >

                <br>
                <input name="submit" type="submit" class="form__button button" value="Login">
            </form>

            <small class="form-box__addon u-auto-format-text">
                還尚未註冊嗎? <a href='/register/1'>註冊</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是房客? <a href='/login_entrance'>返回</a>
            </small>

        </div>
    </div>



<!-- Footer -->
@include('common.footer')


