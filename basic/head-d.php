<?
    if($_GET["bo_table"]=="pro") {$num=4;$bgnum=4;$c_title='IR/PR';}
    else if($_GET["bo_table"]=="qa") {$num=5;$bgnum=4;$c_title='고객문의';}
    else if($_GET["bo_table"]=="notice") {$num=0;$bgnum=4;$c_title='공지사항';}
?>

<section class="sub_title" style="background:url(<?php echo G5_THEME_URL ?>/img/main_visual0<?=$bgnum?>.jpg) no-repeat center center/cover">
    <div class="txt">
        <h2><?=$title?><?php echo $board['bo_subject'] ?></h2>
    </div>
</section>


<div class="container sub_page">
    <article>
        <h2><?=$title?><?php echo $board['bo_subject'] ?> <small><?=$c_title?></small></h2>
