<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', '1');


    if ($_POST[item]) $item_ids = implode(",",$_POST[item]);

    $query = "select * from redcoffee.item where id in (".$item_ids.")";
    $results = $g->db->fetch_all($query);

    foreach ($results as $item):
        $thumb_url = "/files/r".$item[id].".jpg";
?>
<li data-item-id="<?=$item[id]?>" class="active">
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
<?
    endforeach;
?>