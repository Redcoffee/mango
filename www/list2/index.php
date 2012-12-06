<?php
$g->page->js[] = 'http://static.dofork.com/mobile/js/fastclick.js';
$g->page->css[] = './list.css';
$g->page->display();

$query = "select * from redcoffee.item order by count desc";
$results = $g->db->fetch_all($query);
?>
<header class="navbar-fixed-top">
    <a href="#" class="btn-line pull-left">뒤로</a>
    <a href="#" class="btn-line pull-right">장바구니<span id="cart-count"></span></a>
    <h1><b>망고</b>마트</h1>
</header>
<section class="body">
    <ul class="list">
        <?
        foreach ($results as $item):
            $thumb_url = "/files/r".$item[id].".jpg";
        ?>
        <li>
            <!--span class="chk spr pull-left"></span-->
            <a href="#" class="arrow spr pull-right"></a>
            <span class="stock pull-right">v</span>
            <div class="item-wrap">
                <div class="thumb pull-left"><img src="<?=$thumb_url?>"></div>
                <div class="inner-wrap">
                    <h3 class="item">
                        <?=$item[name]?>
                        <?=$item[package] ? "(".$item[package].")" : ""?>
                    </h3>
                    <p class="price">
                        <span class="sale"><em><?=number_format($item[price_sale])?></em>원</span>
                        <? if ($item[price_origin]): ?>
                        <span class="origin"><em><?=number_format($item[price_origin])?></em>원</span>
                        <? endif; ?>
                    </p>
                    <p class="count"><?=number_format($item[count])?>개 판매</p>
                </div>
            </div>
        </li>
        <? endforeach; ?>
    </ul>
</section>

<script type="text/javascript">
    var $cart_count = 0;

    $('li > .item-wrap').each( function() {
        new FastClick(this);
        $(this).click( function() {

            var $parent = $(this).parent();
            var $prev = $parent.prev();
            var $next = $parent.next();

            $parent.toggleClass('active');
            $parent.removeClass('shade');

            // 그림자 처리
            switch ($parent[0].className) {
                case 'active':
                    if (!$prev.hasClass('active')) {
                        $parent.addClass('shade');
                    }
                    if ($next.hasClass('active')) {
                        $next.removeClass('shade');
                    }
                break;
                case '':
                    if ($next.hasClass('active')) {
                        $next.addClass('shade');
                    }
                break;
            }

            if ($parent.is('.active')) $cart_count++;
                else $cart_count--;

            if ($cart_count > 0) {
                $('#cart-count').html(" ("+$cart_count+")");
            }else if ($cart_count < 1) {
                $('#cart-count').html("");
            }
        });
    });

</script>


