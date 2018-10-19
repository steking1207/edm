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
        <meta name="description" content="ed:m留遊學提供美國、英國、澳洲、紐西蘭、加拿大、愛爾蘭、馬爾他、菲律賓等英語系國家，留學及遊學客製化免費諮詢及規劃服務，若您想進一步瞭解留遊學相關國家、學校、預算資訊，都歡迎在此留下您的訊息，ed:m顧問團隊將於24小時內與您聯繫。" >
        <meta name="keywords" content="edm,遊學,留學,遊學諮詢,留學諮詢,遊學代辦,留學代辦,遊學規劃,留學規劃,遊學英文,留學英文,免費遊學諮詢,免費留學諮詢,語言課程遊學國家,遊學城市,留學國家,由學學校,留學學校,遊學預算,留學預算">
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
            <div class="page-banner" style="background-image: url('/tmp/appointment.jpg');">
                <h1 class="caption">預約諮詢</h1>
            </div>

            <div class="page-wrap wrapper-form">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaVeUjTzHGzZSEKJYp_KI1Y4lEw0m0tvpxotdxKYpgjWP8jQ/viewform?embedded=true" width="100%" height="1241" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
            </div>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
</body>
</html>
