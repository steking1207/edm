<div class="localBusiness">
    <div class="inner f-row">
        <div class="f-col(12) f-col-sm(6) f-col-md(auto) f-col-lg(4) localBusiness__item">
            <a class="infoitem" href="/about">
                <div class="infoitem__icon">
                    <i class="icon edm-pin"></i>
                </div>
                <div class="infoitem__content">
                    <h6 class="infoitem__caption">ADDRESS</h6>
                    <p class="infoitem__txt">106台北市大安區<br>忠孝東路4段166號4樓
                    </p>
                </div>
            </a>
        </div>
        <div class="f-col(12) f-col-sm(6) f-col-md(auto) f-col-lg(4) localBusiness__item">
            <a class="infoitem" href="/about">
                <div class="infoitem__icon">
                    <i class="icon edm-contacts"></i>
                </div>
                <div class="infoitem__content">
                    <h6 class="infoitem__caption">CONTACT US</h6>
                    <p class="infoitem__txt">02-2711-3911<br>info@edmtw.com</p>
                </div>
            </a>
        </div>
        <div class="f-col(12) f-col-sm(12) f-col-md(auto) f-col-lg(4) localBusiness__item">
            <a class="infoitem" href="/about">
                <div class="infoitem__icon">
                    <i class="icon edm-clock"></i>
                </div>
                <div class="infoitem__content">
                    <h6 class="infoitem__caption">WORKING HOURS</h6>
                    <p class="infoitem__txt">週一至週五：10:00 – 19:00<br>週六：採預約制，請事先來電預約</p>
                </div>
            </a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="inner">
        <div class="footer__primary">
            <div class="footer__self">
                <a class="footer__brand" href="/">
                    <img class="img-block" src="/assets/img/logo_simple_white.svg" alt="ed:m LOVE YOUR DREAM">
                </a>
                <div class="socials">
                    <a class="social__item" target="_blank" href="https://www.facebook.com/Edm-Education-331365310744130/">
                        <i class="icon edm-facebook"></i>
                    </a>
                    <a class="social__item" target="_blank" href="https://www.instagram.com/edmedutw">
                        <i class="icon edm-instagram"></i>
                    </a>
                    <a class="social__item" target="_blank" href="https://line.me/ti/p/dL6_Zbb5Ci">
                        <i class="icon edm-line"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__secondary">
            <nav class="footer__other">
                <a class="footer__other__link" href="/about">關於我們</a>
                <a class="footer__other__link" href="/privacy">隱私權</a>
            </nav>

            <div class="drop show__pc">
                <button class="drop__btn">
                    FamilySite
                </button>
                <div class="drop__box">
                    <div class="drop__menu">
                        <a class="drop__menu__item" target="_blank" href="http://edmedu.com/">ed:m education</a>
                    </div>
                </div>
                <button class="drop__btn2">
                </button>
            </div>

            <div class="drop show__mb">
                <select class="selection" onchange="if (this.value) window.location.href=this.value">
                    <option value="#">FamilySite</option>
                    <option value="http://edmedu.com/">ed:m education</option>
                </select>
            </div>

            <div class="copyright">2018 &copy; edm EDUCATION All rights reserved. </div>
        </div>
    </div>
</footer>

<div class="quickNav open">
    <button class="q1 quickNav__switch">關閉導覽</button>
    <button class="q2 quickNav__switch display-none">快速導覽</button>
    <div class="quickNav__container">
        <div class="scrollbar-inner">
            <section class="quickNav__section">
                <img class="brand" src="/assets/img/logo_full.svg" alt="ed:m">
                <p class="slogan">從學校推薦到在地生活大小事</p>
                <a class="btn -clr-primary" href="/information">申請遊學指南</a>
            </section>
            <section class="quickNav__section">
                <p class="txt">不受時空限制快速諮詢！</p>
                <p class="txt u-marginY-10">
                    <img class="line" src="/assets/img/line.png" alt="Line">
                    1:1 專業諮詢
                </p>
                <img src="/assets/img/qrcode.png" alt="QR Code">
            </section>
            <section class="quickNav__section">
                <div class="list">
                    <div class="list__item">
                        <a class="embed" href="/page/9">
                            <div class="embed__img" style="background-image: url('/tmp/page-banner-9.jpg')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">優惠滿載，開心出發遊學去</div>
                        </a>
                    </div>
                    <div class="list__item">
                        <a class="embed" href="/page/1">
                            <div class="embed__img" style="background-image: url('/tmp/page-1.jpg')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">ed:m 精選學校優惠</div>
                        </a>
                    </div>
                    <div class="list__item">
                        <a class="embed" href="/page/4">
                            <div class="embed__img" style="background-image: url('/tmp/page-4.jpg')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">遊學人氣城市TOP4</div>
                        </a>
                    </div>
                </div>

                <?php if (isset($_SESSION['nav_history'])) { ?>
                <h6 class="quickNav__subtitle">最近導覽</h6>
                <?php foreach ($history as $page){ ?>
                <div class="list">
                    <div class="list__item">
                        <a class="embed" href="<?= $page ?>">
                            <div class="embed__img" style="background-image: url('/tmp/');"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">優惠滿載，開心出發遊學去</div>
                        </a>
                    </div>
                </div>
                <?php } } ?>
            </section>
        </div>
    </div>
</div>
