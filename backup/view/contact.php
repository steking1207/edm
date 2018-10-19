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
        <meta name="description" content="ed:m留遊學台北辦公室位於熱鬧的忠孝敦化站4號出口，我們提供美國、英國、澳洲、紐西蘭、加拿大、愛爾蘭、馬爾他、菲律賓等英語系國家，留學及遊學客製化免費諮詢及規劃服務，若您想進一步瞭解留遊學相關國家、學校、預算資訊，都歡迎在此留下您的訊息，ed:m顧問團隊將於24小時內與您聯繫。" >
        <meta name="keywords" content="edm,遊學,留學,遊學諮詢,留學諮詢,遊學代辦,留學代辦,遊學規劃,留學規劃,遊學英文,留學英文,免費遊學諮詢,免費留學諮詢,遊學國家,遊學城市,留遊學手冊, edm台北辦公室,">
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
            <div class="page-banner" style="background-image: url('/tmp/page-banner-1.jpg');">
                <div class="txt-grp">
                    <h1 class="caption">ed:m 沿革</h1>
                    <p class="txt">鼓勵學生不斷追尋自己的夢想</p>
                </div>
            </div>
            <div class="pageMenu">
                <select class="input" onchange="location.href=this.value">
                    <option value="/about" <?=$get_page_name === 'about' ? 'selected' : '';?>>ed:m 台灣介紹</option>
                    <option value="/contact" <?=$get_page_name === 'contact' ? 'selected' : '';?>>聯絡我們</option>
                </select>
                <nav class="pageMenu__nav">
                    <a class="pageMenu__link" href="/about">ed:m 台灣介紹</a>
                    <a class="pageMenu__link active" href="/contact">聯絡我們</a>
                </nav>
            </div>

            <div class="contact">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.791600814514!2d121.54837831500637!3d25.04114548396904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abc5720b02af%3A0x4a07bd88b9350504!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5b-g5a2d5p2x6Lev5Zub5q61MTY26Jmf!5e0!3m2!1szh-TW!2stw!4v1538038364722" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact__card">
                    <h4 class="caption">台北辦公室</h4>
                    <address>
                        <strong>聯絡資訊</strong><br>
                        106 台北市大安區忠孝東路4段166號4樓<br>
                        02-2711-3911<br>
                        info@edmtw.com
                    </address>
                    <address>
                        <strong>營業時間</strong><br>
                        週一至週五：10:00 – 19:00<br>
                        週六 : 採預約制，請事先來電預約
                    </address>
                    <hr>
                    <div class="socials">
                        <a class="social__item" target="_blank" href="https://www.facebook.com/Edm-Education-331365310744130/">
                            <i class="icon edm-facebook"></i>
                        </a>
                        <a class="social__item" target="_blank" href="https://www.instagram.com/edmedutw">
                            <i class="icon edm-instagram"></i>
                        </a>
                    </div>
                    <div class="line">
                        <p>不受時空限制快速諮詢！</p>
                        <div class="line__mobile">
                            <a class="btn -clr-primary" target="_blank" href="https://line.me/ti/p/dL6_Zbb5Ci">
                                <i class="icon edm-line"></i>
                                1:1 專業諮詢
                            </a>
                        </div>
                        <div class="line__desktop">
                            <p class="txt">
                                <img class="line__logo" src="/assets/img/line.png">
                                1:1 專業諮詢
                            </p>
                            <img src="/assets/img/qrcode.png">
                        </div>
                    </div>
                </div>
            </div>

            <section class="wrapper-form">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaVeUjTzHGzZSEKJYp_KI1Y4lEw0m0tvpxotdxKYpgjWP8jQ/viewform?embedded=true" width="100%" height="1241" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
            </section>

            <!-- <?php include_once 'incl/about-form.php';?> -->
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
</body>
</html>
