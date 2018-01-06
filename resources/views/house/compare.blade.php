{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/css/one.css">
<link rel="stylesheet" type="text/css" href="/css/compare.css"> <!-- 收藏表格css-->

@include('common.navigation')

<div class="comparison">

    <table>

        <thead>

        <tr>
            <th class=""><p style="font-size: 30px;margin-bottom: 30px;border-bottom: 6px double black;border-top: 6px double black">房屋比較表</p></th>
            <th class="product" style="background:#98f; border-top-left-radius: 5px; border-left:0px;"></th>
        </tr>

        <tr>
            <th><span style="color: slategrey;">/~最多收藏5筆資料~/</span></th>
            <th class="price-info">
                <div class="price-now"><span>$ </span>
                    <p>  / 月</p>
                </div>
            </th>
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;width: 20%;">房&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
            <td></td>
        </tr>

        <tr>
            <td style="font-size: 25px;">坪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數</td>
            <td></td>
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">屋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;齡</td>
            <td></td>
        </tr>

        <tr>
            <td style="font-size: 25px;">押&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;金</td>
            <td></td>
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">寵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;物</td>
            <td></td>
        </tr>

        <tr>
            <td style="font-size: 25px;">開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伙</td>
            <td></td>
        </tr>



        <tr class="compare-row">
            <td style="font-size: 25px;">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;梯</td>
            <td></td>
        </tr>

        <tr>
            <td style="font-size: 25px;">車&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</td>
            <td></td>
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">陽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;台</td>
            <td></td>
        </tr>


        <tr>
            <td></td>
            <td><button id="delete_collect" name="delete_collect" type="submit" value="delete_collect" class="price-buy"> 刪除收藏</button></td>
        </tr>

    </table>
</div>




@include('common.footer')