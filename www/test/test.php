<?php
    $g->page->display();
?>

<a href="#" class="btn">redcoffee</a>

<script type="text/javascript">
$('.btn').bind("click", function () {
    $.post("async.php", { name: "redcoffee" },
        function(data) {
            console.log(data.tel);
        }, "json");
});
</script>