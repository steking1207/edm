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
        <meta name="description" content="ed:m留遊學擁有近20年的代辦及學生服務經驗，協助超過4萬名學生赴海外求學，ed:m擁有12個海外辦事處，提供學生最即時在地支援服務。我們立志於透過豐富的諮詢服務經驗，根據每位學生不同的學習需求和目標，提供整合性的客製化諮詢及學生服務，更提供學費保障制度，讓學生的學習更加完善有保障。" >
        <meta name="keywords" content="edm,遊學,留學,遊學諮詢,留學諮詢,遊學代辦,留學代辦,遊學規劃,留學規劃,遊學英文,留學英文,免費遊學諮詢,免費留學諮詢,語言課程,遊學國家,遊學城市,留遊學手冊,遊學獎金,海外辦事處,升學諮詢,升學輔導,學費代匯,學費保證制度,機票代訂,簽證申請,寄宿家庭,機票代訂,">
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
            <div class="page-banner" style="background-image: url('/tmp/banner_edm_about-min.png');">
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
                    <a class="pageMenu__link active" href="/about">ed:m 台灣介紹</a>
                    <a class="pageMenu__link" href="/contact">聯絡我們</a>
                </nav>
            </div>
            <section class="about-section about-section-1">
                <h2 class="caption">Why ed:m</h2>
                <div class="f-row">
                    <div class="f-col-lg(4)">
                        <div class="paperstrip odd">
                            <div class="embed embed--1by1">
                                <div class="embed__img" style="background-image: url('/tmp/about-1.jpg')"></div>
                            </div>
                            <div class="paperstrip__content">
                                <div>
                                    <h4 class="caption">國外生活安頓服務</h4>
                                    <p>ed:m 海外辦事處於全球主要城市共有20據點，包括倫敦、紐約、柏克萊、溫哥華及雪梨等等，並提供以下學生服務</p>
                                    <ul>
                                        <li>在地支援 : 在當地不管是日常生活、住宿或學業等，任何需協助的地方，常駐於辦事處的顧問，將提供最即時的諮詢服務，作為學生最安心的後盾</li>
                                        <li>開學前說明會 : 提供安頓生活指南、銀行開戶、手機號碼開通及緊急就醫協助等資訊</li>
                                        <li>留學生聚會：定期舉辦融入當地文化的特色體驗及活動</li>
                                        <li>升學輔導: 有學業、升學或其他進修計畫的學生，常駐於辦事處的遊留學顧問，會提供即時專業的諮詢服務</li>
                                    </ul>
                                    <p>* ed:m 禮物盒：海外遊子的思鄉之情我們都聽到了，出國時ed:m將準備裝滿台灣零食、小物的禮物盒，把滿滿的台灣味穿越千里送到學生身邊</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-col-lg(4)">
                        <div class="paperstrip even">
                            <div class="embed embed--1by1">
                                <div class="embed__img" style="background-image: url('/tmp/about-2.jpg')"></div>
                            </div>
                            <div class="paperstrip__content">
                                <div>
                                    <h4 class="caption">學生權益</h4>
                                    <p>我們致力於保障學生最高權益</p>
                                    <p>ed:m 集團的自有資本比率高達80%，遠超過一般認定安全值30%，金流機制安全且有保障</p>
                                    <ul>
                                        <li>24 小時學費代匯服務 : 每位學生匯款至ed:m的學費，我們保證將於繳費後24小時內完成學費代付的程序</li>
                                        <li>學費保證制度 :  透過過去4萬名的學生回饋，ed:m僅推薦學生就讀於可信賴也受到政府認可的語言學校，若發生因不可抗力之因素導致學校倒閉或無法繼續使學生完成課程之情形，ed:m將會以學生的學習權益為優先，將尚未完成之學費退還給學生或協助轉學至其他學校就讀</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-col-lg(4)">
                        <div class="paperstrip odd">
                            <div class="embed embed--1by1">
                                <div class="embed__img" style="background-image: url('/tmp/about-3.jpg')"></div>
                            </div>
                            <div class="paperstrip__content">
                                <div>
                                    <h4 class="caption">出國前的準備</h4>
                                    <p>ed:m 擁有19年留遊學諮詢經驗，服務超過4萬名學生</p>
                                    <ul>
                                        <li>留遊學手冊免費索取，即刻申請郵寄到府服務</li>
                                        <li>專業顧問一對一諮詢 : 為提供專業的諮詢服務，每一位顧問皆受過系統化的教育訓練，且ed:m掌握每位顧問的專業度成長，針對每位學生不同的學習需求、學習方式與個性，提供客製化的諮詢及學習計畫</li>
                                        <li>嚴謹的申請作業流程 : 透過19年的申請經驗，ed:m 制定零出錯率的作業流程，提供最簡便且高效率的申請程序</li>
                                        <li>代訂服務 : ed:m 提供面面俱到的學生服務，包括海外或台灣的學生保險代訂及機票購買服務</li>
                                        <li>行前說明 : ed:m協助學生核對學校及簽證文件、瞭解入境等相關注意事項，宿舍及寄宿家庭入住、生活起居、接送機、校園生活以及學生保險投保等問題的進行詳細的解說及核對。</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-section about-section-2">
                <h2 class="caption">
                    每位學生的留遊學計畫<br>
                    <span class="u-text-primary">ed:m都負責到底</span>
                </h2>
                <div class="steps">
                    <div class="step__item">
                        <div class="circle -clr-primary -sz-lg">
                            <i class="icon edm-report-card"></i>
                        </div>
                        <div class="step__content">
                            <h6 class="caption">選擇國家 / 學校</h6>
                            <ul>
                                <li>留遊學手冊免費索取</li>
                                <li>一對一留遊學諮詢</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step__item">
                        <div class="circle -clr-primary -sz-lg">
                            <i class="icon edm-passport"></i>
                        </div>
                        <div class="step__content">
                            <h6 class="caption">準備出國</h6>
                            <ul>
                                <li>申請流程處理</li>
                                <li>簽證申請服務</li>
                                <li>住宿與接機安排</li>
                                <li>學生保險及機票代訂</li>
                                <li>行前說明</li>
                                <li>24小時學費代匯服務</li>
                                <li>學費保證制度</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step__item">
                        <div class="circle -clr-primary -sz-lg">
                            <i class="icon edm-meeting"></i>
                        </div>
                        <div class="step__content">
                            <h6 class="caption">出國</h6>
                            <ul>
                                <li>接機服務</li>
                                <li>生活安頓指南：銀行開戶、辦手機號碼等等</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step__item">
                        <div class="circle -clr-primary -sz-lg">
                            <i class="icon edm-curriculum"></i>
                        </div>
                        <div class="step__content">
                            <h6 class="caption">當地生活</h6>
                            <p class="txt">ed:m 海外辦事處服務項目：</p>
                            <ul>
                                <li>協助學生適應各國文化及學校生活</li>
                                <li>升學及延長課程之留遊學諮詢服務</li>
                                <li>定期舉辦學生活動及聚會</li>
                                <li>充滿家鄉味的ed:m box</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step__item">
                        <div class="circle -clr-primary -sz-lg">
                            <i class="icon edm-secured-letter"></i>
                        </div>
                        <div class="step__content">
                            <h6 class="caption">回國後</h6>
                            <p class="txt">ed:m dream post office-收到出國前寄給未來自己的一封信</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-section about-section-3">
                <div class="about-clip">
                    <h2 class="caption">About ed:m</h2>
                    <div class="about-card-grp">
                        <div class="about-card">
                            <h4 class="caption">ed:m Mission</h4>
                            <p class="txt">We inspire our clients to find and grow their personal dreams continuously
                                鼓勵學生不斷追尋自己的夢想</p>
                        </div>
                        <div class="about-card">
                            <h4 class="caption">ed:m Vision</h4>
                            <p class="txt">Global Education Power House
                                透過教育改變世界的專業教育集團</p>
                        </div>
                    </div>
                </div>
                <div class="embed">
                    <div class="embed__img" style="background-image: url('/tmp/about-6.jpg')"></div>
                </div>
            </section>

            <section class="about-section about-section-4">
                <h2 class="caption">ed:m Core Value</h2>
                <div class="about-features">
                    <div class="about-feature__item">
                        <i class="icon edm-heart-health"></i>
                        <h4 class="caption">Passion for Clients<br>學生服務的熱忱</h4>
                        <p class="txt">學生是ed：m存在的價值，我們致力於提供學生客製化的整合服務。[ed：m]追求的最高價值為讓服務熱忱帶領學生成功更超越學生的期待滿意度。</p>
                    </div>
                    <div class="about-feature__item">
                        <i class="icon edm-multichannel"></i>
                        <h4 class="caption">Strive for Excellence<br>追求卓越</h4>
                        <p class="txt">為提供最專業且即時的諮詢服務，[ed：m]透過不間斷的學習及進步，我們以立志成為能夠以教育改變世界的專業教育集團而努力。</p>
                    </div>
                    <div class="about-feature__item">
                        <i class="icon edm-group-task"></i>
                        <h4 class="caption">Results through Teamwork<br>重視團隊合作</h4>
                        <p class="txt">[ed：m]不僅重視個人成果更重視團體的信賴及合作，我們堅信團隊合作將帶給我們更傑出的成果</p>
                    </div>
                    <div class="about-feature__item">
                        <i class="icon edm-accuracy"></i>
                        <h4 class="caption">Create New Challenges<br>接受挑戰</h4>
                        <p class="txt">[ed：m]重視在快速變動的大環境下，個人和組織發展所需要的變革，所帶來的成長，我們變化的商業環境下，能享受接受挑戰的過程，並保持不變的初衷。</p>
                    </div>
                </div>
            </section>

            <section class="about-section about-section-5">
                <div class="about-space">
                    <div class="embed">
                        <div class="embed__img" style="background-image: url('/tmp/about-section-5-01.png')"></div>
                    </div>
                    <div class="about-space__content">
                        <h2 class="caption">ed:m Space</h2>
                        <p class="txt">以「人」為出發點打造的舒適空間</p>
                        <p class="txt">ed:m台北辦公室位於交通易達性極高的忠孝敦化站，以便學生來訪，辦公室整體空間規劃以提供學生及顧問良好的諮詢環境為主概念，設有6間獨立諮詢室，讓學生能在不受干擾的舒適環境中，心無旁鶩的和顧問一起規劃升學藍圖。</p>
                    </div>
                    <div class="about-slider">
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-02.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-03.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-04.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-05.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-06.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-07.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-08.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-09.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-10.png');"></div>
                        <div class="about-slider__item" style="background-image: url('/tmp/about-section-5-11.png');"></div>
                    </div>
                </div>
            </section>

            <section class="about-section about-section-6">
                <div class="circle">
                    <i class="icon edm-quotation"></i>
                </div>
                <h2>With ed:m!</h2>
                <h4 class='texteffect-hold'>為了夢想而 <span id='text'></span><div class='console-underscore' id='console'>|</div></h4>
            </section>

            <section class="about-section about-section-7">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaVeUjTzHGzZSEKJYp_KI1Y4lEw0m0tvpxotdxKYpgjWP8jQ/viewform?embedded=true" width="100%" height="1241" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
            </section>

            <?php include_once 'incl/about-contact.php';?>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
    <script>
        var sliderIndexInit = null;
        var $nav;

        $('.about-slider').owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            dots: false,
            info: true,
            onInitialized: function(e) {
                var $that = $(this);

                $.each($that[0].$element[0].children, function(index, value) {
                    if (value.className === 'owl-nav') {
                        $nav = $(value);
                        return false;
                    }
                });

                sliderIndexInit = e.item.index;

                $nav.attr({
                    'data-count': e.item.count,
                    'data-index': 1
                });
            },
            onChanged: function(e) {
                if ($nav) {
                    $nav.attr({
                        'data-index': e.item.index - sliderIndexInit + 1
                    })
                }
            }
        })
    </script>
</body>
</html>
