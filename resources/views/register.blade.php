
@include('common.errorsettings')
@include('common.head')
@include('common.navigation')


<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <div class="form-box l-col-wrap">
        <div class="l-col form-box__content">
            <h1 class="form-box__title">房客註冊須知</h1>
            <div class="u-auto-format-text">
                <ul class="A">
                    　      <li>本系統由各房東所刊登的租屋資料僅供同學們參考用，請同學們還是要實地去參觀比較，慎重考慮後再承租，以減少租屋糾紛的發生。</li>
                    　      <li>本租屋網僅提供學生租屋參考，房東不會向學生收取仲介費，如發現有收費情形，煩請點選上方“連絡我們”或以電話告知，『請勿給予任何費用』，以確保同學們的權益。</li></br>
                    <li>若發覺房東所刊登的資料和實際狀況差距過大，煩請點選上方“聯絡我們”或以電話告知，以確保同學們的權益。</li></br>
                    <li>若您所住之租屋處所之評估等級有誤，亦可告知，我們將為您作更正，您的評估是供學弟妹們未來租屋的參考，請客觀的評估。</li></br>
                </ul>

            </div>
        </div>
        <div class="l-col form-box__form">

            <form id="register" action="/register/create_tenant" method="POST"  class="form form--sign-up">

                {{ csrf_field() }}

                <label for="account" class="form__label">帳號：</label>
                <span class="warn-account" style="margin-left:5px; color: red;"></span>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入帳號">

                <label for="password" class="form__label">密碼：</label>
                <span class="warn-password" style="margin-left:5px; color: red;"></span>
                <input id="password" name="password" type="password" class="form__field" placeholder="請輸入密碼">

                <label for="password2" class="form__label">確認密碼：</label>
                <span class="warn-password2" style="margin-left:5px; color: red;"></span>
                <input id="password2" name="password2" type="password" class="form__field" placeholder="請輸入確認密碼">

                <label for="name" class="form__label">房客姓名：</label>
                <span class="warn-name" style="margin-left:5px; color: red;"></span>
                <input id="name" name="name" type="text" class="form__field" placeholder="請輸入姓名">

                <label for="email" class="form__label">email:</label>
                <span class="warn-email" style="margin-left:5px; color: red;"></span>
                <input id="email" name="email" type="text" class="form__field" placeholder="請輸入email">

                <br>

                <input id="submit_btn"  type="submit" value="提交" class="form__button button">
            </form>


            <small class="form-box__addon u-auto-format-text">
                已經註冊過了? <a href='/login/1'>登入</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是要註冊房客? <a href='/register_entrance'>返回</a>
            </small>

        </div>
    </div>



<!-- Footer -->
@include('common.footer')








