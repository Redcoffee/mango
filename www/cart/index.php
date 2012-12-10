<?php
$g->page->js[] = 'http://static.dofork.com/mobile/js/fastclick.js';
$g->page->css[] = './index.css';
$g->page->display();

$query = "select * from redcoffee.item order by count desc";
$results = $g->db->fetch_all($query);
?>
<header class="navbar-fixed-top">
    <a href="/list/#" class="btn-line pull-left">뒤로</a>
    <!--a href="#" class="btn-line pull-right cart">장바구니<span id="cart-badge" class="badge"></span></a-->
    <h1>장바구니<span id="cart-badge" class="badge"></span></h1>
</header>
<section class="body">
    <ul class="list"></ul>
</section>

<script type="text/javascript">
    var user = 'redcoffee';

    try {
        var cart = JSON.parse(localStorage.getItem(user));
        $.post("async.php", cart,
        function(data) {
            $('ul.list').html(data);
            list_init();
        }, "html");
    }catch(e){
        localStorage.clear();
        //todo : 서버에 저장된 정보가 있으면 새롭게 가져오기
        var cart = new Object();
        cart.item = new Array();
    }
    //cart_badge_update(cart.item.length);


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
                //cart_badge_update(cart.item.length);
            });
        });
    }
</script>


