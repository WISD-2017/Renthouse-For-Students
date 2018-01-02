<!DOCTYPE html>


@include('common.errorsettings')
@include('common.head')
@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script> -->
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

<div class="form-box l-col-wrap">
    <div class="l-col form-box__content">
        <h1 class="form-box__title">Login</h1>
        <br>
        <div class="u-auto-format-text">
            <p>請點擊下方按鈕進行登入</p>

            <button  type="submit" class="form__button button" value="1"  style="margin-bottom: 10px;">房客入口 </button>
            <button  type="submit" class="form__button button" value="2"  style="margin-bottom: 10px;">房東入口 </button>
            <button  type="submit" class="form__button button" value="3"  style="margin-bottom: 10px;">管理人員入口 </button>


            <small class="form-box__addon u-auto-format-text">
                還尚未註冊嗎? <a href='/register_entrance'>註冊</a>
            </small>

        </div>
    </div>

</div>

<!-- Footer -->
@include('common.footer')



