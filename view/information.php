<?php
include_once 'incl/startup.php';

$homeFile = file_get_contents('json/home.json');
$homeData = json_decode($homeFile, true);
?>
<!DOCTYPE html>
<html
    lang="<?=_LANG_;?>"
    itemscope itemtype="http://schema.org/WebSite"
    xmlns:og="http://ogp.me/ns#"
    xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <?php
    include_once 'incl/meta.php';
    ?>
        <meta name="description" content="ed:m留遊學提供海外留遊學情報指南免費索取及郵寄服務，讓您可以更快速的瞭解並規劃您的留遊學計畫，留遊學情報指南提供美國、英國、澳洲、紐西蘭、加拿大、愛爾蘭等英語系國家與城市介紹、學制、課程及學校資訊，若您想進一步瞭解留遊學相關資訊，歡迎在此留下您的訊息，我們將於24小時內與您聯繫並免費郵寄給您。" >
        <meta name="keywords" content="edm,遊學,留學,遊學諮詢,留學諮詢,遊學代辦,留學代辦,遊學規劃,留學規劃,遊學英文,留學英文,免費遊學諮詢,免費留學諮詢,留遊學手冊,語言課程,海外升學,海外進修,英國學校,美國學校,加拿大學校,愛爾蘭學校,澳洲學校,紐西蘭學校,英國課程,美國課程,加拿大課程,愛爾蘭課程,澳洲課程,紐西蘭課程,">
    <?php
    include_once 'incl/setting.php';

    renderSocialMeta();
    ?>
</head>
<body>
    <?php include_once 'incl/loader.php';?>
    <div id="app">
        <?php include_once 'incl/header.php';?>

        <main class="container">
            <div class="page-banner" style="background-image: url('/tmp/information.jpg');">
                <h1 class="caption">索取資料</h1>
            </div>

            <div class="page-wrap wrapper-form">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeNSM63rEEwyR__qqUe5oN1WlITFFOTx8Z794wnwj2ObvZK3Q/viewform?embedded=true" width="100%" height="1288" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
            </div>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
</body>
</html>
