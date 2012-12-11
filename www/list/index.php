<?php
$g->page->css[] = './index.css';
$g->page->display();

$query = "select * from redcoffee.item order by count desc";
$results = $g->db->fetch_all($query);
?>
<header class="navbar-fixed-top">
    <a href="#" class="btn-line pull-left">뒤로</a>
    <a href="/cart/#" class="btn-line pull-right cart">장바구니<span id="cart-badge" class="badge"></span></a>
    <h1>봉지라면</h1>
</header>
<section class="body">
    <ul class="list">
        <?
        foreach ($results as $item):
            $thumb_url = "/files/r".$item[id].".jpg";
        ?>
        <li data-item-id="<?=$item[id]?>">
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
    var user = 'redcoffee';
    //localStorage.clear();
    try {
        var cart = JSON.parse(localStorage.getItem(user));
        for (var i = 0; i < cart.item.length; i++) {
            $list = $('li[data-item-id |= '+cart.item[i]+']');
            if ($list.length) list_toggle($list);
        };
    }catch(e){
        localStorage.clear();
        //todo : 서버에 저장된 정보가 있으면 새롭게 가져오기
        var cart = new Object();
        cart.item = new Array();
    }
    cart_badge_update(cart.item.length);
    list_init();

    function list_toggle(obj) {
        var $self = $(obj)
            , $prev = $self.prev()
            , $next = $self.next();

        // 클래스 처리
        $self.toggleClass('active');
        $self.removeClass('shade');

        // 그림자 처리
        switch ($self[0].className) {
            case 'active':
                if (!$prev.hasClass('active')) {
                    $self.addClass('shade');
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
    }

    function cart_badge_update(count) {
        // 장바구니 배지 표시
        var $cart_badge = $('#cart-badge');

        if (count > 0) {
            $cart_badge.html(count);
            $cart_badge.fadeIn('fast');
        } else if (count <= 0) {
            $cart_badge.fadeOut('fast');
            $cart_badge.html();
        }
    }

    // 리스트 클릭 설정
    function list_init() {
        $('li > .item-wrap').each( function() {
            new FastClick(this);

            $(this).click( function() {

                var $parent = $(this).parent()
                    , item_id = $parent.attr('data-item-id');

                // 리스트 토글
                list_toggle($parent);

                if ($parent.is('.active')) {
                    // 장바구니에 아이템 추가
                    if (cart.item.indexOf(item_id)<0) cart.item.push(item_id);
                } else {
                    // 장바구니에 아이템 제거
                    cart.item.splice(cart.item.indexOf(item_id),1);
                }

                cart.timestamp = new Date().getTime();

                localStorage.setItem(user,JSON.stringify(cart));

                console.log(cart);
                console.log(cart.item);

                // 장바구니 배지 표시
                cart_badge_update(cart.item.length);
            });
        });
    }

</script>


