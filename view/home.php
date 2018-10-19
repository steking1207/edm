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
        <meta name="description" content="ed:m留遊學擁有超過20年代辦及學生諮詢服務經驗，成功協助超過4萬名的學生赴海外求學，為了提供學生全方位的服務及照顧，ed:m於全球擁有12個海外辦事處，並提供海外留遊學手冊免費索取及郵寄，讓學生可獲得最即時的海外學生服務與海外資訊，更提供學費保障制度，讓學生的學習更有保障。" >
        <meta name="keywords" content="edm,遊學,留學,遊學諮詢,留學諮詢,遊學代辦,留學代辦,遊學規劃,留學規劃,遊學英文,留學英文,免費遊學諮詢,免費留學諮詢,遊學國家,遊學城市,留遊學手冊,語言課程,遊學獎金,學費優惠,機票補助,海外辦事處,學費保障制度,學校優惠,短期遊學, working holiday,打工遊學,有薪實習,加拿大學院,企業實習,英國遊學,英國留學,加拿大遊學,加拿大留學,美國遊學,美國留學,澳洲遊學,紐西蘭遊學,菲律賓遊學,馬爾他遊學,紐西蘭遊學">
    <?php
    include_once 'incl/setting.php';

    renderSocialMeta();
    ?>

    <style>
        <?php for ($i = 1; $i <= count($homeData['kv']); $i++) { ?>
        .kv-item-<?=$i;?> {
            background-image: url('/tmp/kv-<?=$i;?>-m.jpg');
        }
        <?php } ?>

        @media (min-width: 768px) {
            <?php for ($i = 1; $i <= count($homeData['kv']); $i++) { ?>
            .kv-item-<?=$i;?> {
                background-image: url('/tmp/kv-0<?=$i;?>.jpg');
            }
            <?php } ?>
        }
    </style>
</head>
<body>
    <?php include_once 'incl/loader.php';?>
    <div id="app">
        <?php include_once 'incl/header.php';?>

        <main class="container">
            <div class="kv">
                <div class="kv-list js-carousel">
                    <?php
                    $kv = $homeData['kv'];

                    foreach ($kv as $key => $value) { ?>
                    <a href="<?=$value['link'];?>">
                        <div class="kv-item kv-item-<?=($key + 1);?>">
                            <div class="jumbotron">
                                <h2 class="jumbotron__caption"><?=$value['title'];?></h2>
                                <p class="txt"><?=$value['intro'];?></p>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>

                <div class="tab tab--card js-tab">
                    <nav class="tab__nav">
                        <a class="tab__btn active" href="#taiwan">edm台北辦公室</a>
                        <a class="tab__btn" href="#branches">海外辦事處</a>
                    </nav>
                    <div class="tab__container">
                        <div class="scrollbar-inner">
                            <div id="taiwan" class="tab__content show">
                                <div class="branch">
                                    <div class="branch__cover" style="background-image: url('/tmp/office-02.png')">
                                        <img src="/tmp/office-02.png" alt="ed:m 台北辦公室">
                                    </div>
                                    <a class="branch__info" href="/about">
                                        <h4 class="caption">台北辦公室</h4>
                                        <address class="txt">106台北市大安區忠孝東路4段166號4樓

                                            02-2711-3911

                                            週一至週五：10:00 – 19:00
                                            週六：採預約制，請事先來電預約
                                        </address>
                                    </a>
                                    <ul class="branch__service">
                                        <?php
                                        $provided = $homeData['provided'];

                                        foreach ($provided as $key => $value) {
                                            $method = isset($value['link']) ? 'href="' . $value['link'] . '"' : (isset($value['click']) ? 'onclick="' . $value['click'] . '"' : '');
                                        ?>
                                        <li class="branch__service__item">
                                            <a <?=$method;?>>
                                                <i class="icon edm-<?=$value['ico'];?>"></i>
                                                <?=$value['txt'];?>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>
                            <div id="branches" class="tab__content">
                                <?php
                                $branches = $homeData['branches'];

                                foreach ($branches as $key => $branch) {
                                    $active = !$key ? 'active' : '';
                                ?>
                                <div class="accordion">
                                    <h6 class="accordion__caption <?=$active;?>"><?=$branch['country'];?></h6>
                                    <div class="accordion__content">
                                        <div class="branch">
                                            <address class="txt"><?=$branch['info'];?></address>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="home-section-provided">
                <?php
                foreach ($provided as $key => $value) {
                    $method = isset($value['link']) ? 'href="' . $value['link'] . '"' : (isset($value['click-m']) ? 'onclick="' . $value['click'] . '"' : 'href="https://line.me/ti/p/dL6_Zbb5Ci" target="_blank"');
                ?><a href=""></a>
                <div class="provide__item">
                    <a <?=$method;?>>
                        <div>
                            <i class="icon edm-<?=$value['ico'];?>"></i>
                            <p><?=$value['txt'];?></p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </section>

            <section class="wall">
            <div class="wall-wrapper">
            <div class="wall__brick">
                    <div class="wall__item">
                        <div class="jumbotron">
                            <h2 class="jumbotron__caption">永遠把學生需求擺在第一位的 ed:m</h2>
                            <p class="txt">ed:m掌握每位學生的學習需求並鼓勵其不斷追尋自己的夢想，立志於透過豐富的諮詢服務經驗，提供提供整合性的客製化諮詢及學生服務</p>
                            <a class="btn -clr-primary" href="/about">瞭解更多</a>
                        </div>
                    </div>
                </div>
                <div class="wall__brick">
                    <div class="wall__item">
                        <a class="feature" href="/about">
                            <div class="feature__img">
                                <i class="icon edm-country"></i>
                            </div>
                            <h6 class="feature__caption">20個 ed:m 海外辦事處</h6>
                            <p class="txt">分佈於倫敦、紐約、溫哥華、雪梨等全球主要城市</p>
                        </a>
                    </div>
                    <div class="wall__item">
                        <a class="feature" href="/about">
                            <div class="feature__img">
                                <i class="icon edm-curriculum"></i>
                            </div>
                            <h6 class="feature__caption">學費保障制度</h6>
                            <p class="txt"> 財務金流安全掛保證的ed:m</p>
                        </a>
                    </div>
                    <div class="wall__item">
                        <a class="feature" href="/about">
                            <div class="feature__img">
                                <i class="icon edm-contract"></i>
                            </div>
                            <h6 class="feature__caption">可信賴的專業服務</h6>
                            <p class="txt">19年留遊學諮詢經驗，累積服務過4萬名學生</p>
                        </a>
                    </div>
                    <div class="wall__item">
                        <a class="feature" href="/about">
                            <div class="feature__img">
                                <i class="icon edm-knowledge-sharing"></i>
                            </div>
                            <h6 class="feature__caption">留遊學規劃諮詢</h6>
                            <p class="txt">專業教育顧問提供每位學生客製化的最佳升學方案</p>
                        </a>
                    </div>
                </div>
            </div>
            </section>

            <section class="home-section-course">
                <h3 class="section-title">精選課程</h3>
                <div class="postcard-grp">
                    <?php
                    $courses = json_decode(file_get_contents('json/pages.json'), true);
                    $count = 0;
                    foreach ($courses as $key => $course) {
                        if ($count < 8) {
                    ?>
                    <div class="postcard">
                        <a class="embed" href="<?=$course['link'];?>">
                            <div class="embed__img" style="background-image: url('/tmp/<?=$course['image'];?>')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">
                                <h4 class="caption"><?=$course['title'];?></h4>
                                <p class="bottom"><?=$course['intro'];?></p>
                            </div>
                            <img src="/tmp/<?=$course['image'];?>" alt="<?=$course['title'];?>">
                        </a>
                    </div>
                    <?php } $count++; } ?>
                </div>
            </section>

            <div id="section2">

            <section class="home-section-hot">
                <h3 class="section-title">熱門國家</h3>
                <div class="card-country-grp">
                    <?php
                    $countries = $homeData['countries'];

                    foreach ($countries as $key => $country) {
                    ?>
                    <div class="card-country">
                        <div class="embed">
                            <div class="embed__img" style="background-image: url('/tmp/<?=$country['image'];?>')"></div>
                            <div class="embed__content">
                                <div class="country">
                                    <h4 class="caption"><?=$country['title'];?></h4>
                                    <nav class="country__nav">
                                        <?php
                                        $list = $country['list'];

                                        foreach ($list as $key => $item) {
                                        ?>
                                        <a class="country__link" href="<?=$item['link'];?>"><?=$item['txt'];?></a>
                                        <?php } ?>
                                    </nav>
                                </div>
                            </div>
                            <img src="/tmp/<?=$country['image'];?>" alt="加拿大">
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <section class="home-section-support">
                <div class="home-section-support__txt">
                    <h3 class="section-title">ed:m 全球支援</h3>
                    <div class="infodata">
                        <div class="infodata__item">
                            <strong class="infodata__number"><span class="number" data-value="12">0</span></strong>
                            <span class="infodata__txt">海外辦事處</span>
                        </div>
                        <div class="infodata__item">
                            <strong class="infodata__number"><span class="number" data-value="3000">0</span><sup>+</sup></strong>
                            <span class="infodata__txt">合作學校</span>
                        </div>
                        <div class="infodata__item">
                            <strong class="infodata__number"><span class="number" data-value="20">0</span></strong>
                            <span class="infodata__txt">留學代辦經驗</span>
                        </div>
                        <div class="infodata__item">
                            <strong class="infodata__number"><span class="number" data-value="40000">0</span><sup>+</sup></strong>
                            <span class="infodata__txt">海外學子見證</span>
                        </div>
                    </div>
                </div>
                <div class="home-section-support__map">
                    <a href="/about">
                        <img src="/tmp/map.jpg" alt="全球據點">
                    </a>
                </div>
            </section>

            </div>


            <section class="home-section-experience">
                <div class="experience_titles">
                    <h3 class="section-title">心得分享</h3>
                    <p class="section-intro">最真實的 ed:m 經驗，最美好的回憶</p>
                </div>
                <div class="home-section-experience-wrapper">
                    <div class="experiences">
                        <div class="experience-owl js-carousel">
                            <?php
                            $experiences = $homeData['experiences'];

                            foreach ($experiences as $key => $exp) {
                            ?>
                            <div class="experience__item">
                                <h4 class="caption"><?=$exp['title'];?></h4>
                                <p class="txt"><?=$exp['description'];?></p>
                                <div class="person">
                                    <div class="person__info">
                                        <h6 class="person__name"><?=$exp['person']['fullname'];?></h6>
                                        <div class="person__txt"><?=$exp['person']['school'];?></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="experience-cover-grp">
                        <?php
                        $experiences = $homeData['experiences'];

                        foreach ($experiences as $key => $exp) {
                            $show = !$key ? 'show' : '';
                        ?>
                        <div class="experience-cover <?=$show;?>" style="background-image: url('/tmp/<?=$exp['image'];?>');">
                            <img src="/tmp/<?=$exp['image'];?>" alt="<?=$exp['title'];?>">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section class="home-section-feedback">
                <h3 class="section-title">學生回饋</h3>
                <p class="section-intro">謝謝您對我們的支持，學生的滿意度是 ed:m 追求的最高價值  </p>
                <div class="review-grp js-carousel">
                    <?php
                    $feedbacks = $homeData['feedbacks'];

                    foreach ($feedbacks as $key => $feedback) {
                        $avatar = strlen($feedback['person']['avatar']) ? '/tmp/' . $feedback['person']['avatar'] : '/assets/img/avatar.jpg'
                    ?>
                    <div class="review-grp__item">
                        <div class="review">
                            <h4 class="caption"><?=$feedback['title'];?></h4>
                            <div class="rating rating--score-<?=$feedback['rating'];?>">
                                <i class="rating__item icon edm-star"></i>
                                <i class="rating__item icon edm-star"></i>
                                <i class="rating__item icon edm-star"></i>
                                <i class="rating__item icon edm-star"></i>
                                <i class="rating__item icon edm-star"></i>
                            </div>
                            <p class="txt"><?=$feedback['description'];?></p>
                            <div class="person">
                                <div class="person__avatar" style="background-image: url('<?=$avatar;?>')"></div>
                                <div class="person__info">
                                    <h6 class="person__name"><?=$feedback['person']['fullname'];?></h6>
                                    <div class="person__txt"><?=$feedback['datetime'];?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <section class="home-section-partners">
                <div class="partner-kv">
                    <div class="partner-kv__jumbotron">
                        <h2 class="caption">合作夥伴</h2>
                        <p class="txt">ed:m活躍於各大全球教育機構，為提升諮詢品質及保障學生權益而努力</p>
                    </div>
                </div>

                <div class="partner-list js-carousel">
                    <?php
                    $partners = $homeData['partners'];

                    foreach ($partners as $key => $partner) {
                    ?>
                    <div class="partner">
                        <img class="partner__logo" src="/tmp/<?=$partner['logo'];?>" alt="<?=$partner['title'];?>">
                    </div>
                    <?php } ?>
                </div>
            </section>

            <section class="home-section-quick">
                <div class="postcard-grp">
                    <div class="postcard">
                        <a class="embed embed--zoom" href="/appointment">
                            <div class="embed__img" style="background-image: url('/tmp/quick-1.jpg')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">
                                <h4 class="caption">專屬於您的 1:1 免費諮詢</h4>
                                <p>ed:m 的教育顧問EC(Education Consultant)透過豐富的諮詢經驗，針對每個學生的需求，提供最即時且專業的升學或進修規劃</p>
                                <strong class="bottom">
                                    免費諮詢申請 <i class="icon edm-chevron-right"></i>
                                </strong>
                            </div>
                        </a>
                    </div>
                    <div class="postcard">
                        <a class="embed embed--zoom" href="/information">
                            <div class="embed__img" style="background-image: url('/tmp/quick-2.jpg')"></div>
                            <div class="embed__overlay"></div>
                            <div class="embed__content">
                                <h4 class="caption">留遊學指南免費申請</h4>
                                <p>為了讓每位學生能更有效率的了解與規劃海外升學與進修計畫，ed:m 海外留遊學情報指南，提供英國、美國、加拿大、愛爾蘭、澳洲及紐西蘭的各國家與城市介紹、學制、課程及學校資訊，並提供免費申請及郵寄服務。</p>
                                <strong class="bottom">
                                    申請留遊學指南
                                     <i class="icon edm-chevron-right"></i>
                                </strong>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="jumbotron">
                    <h2 class="jumbotron__caption">申請諮詢！</h2>
                    <p class="txt">留下您的聯絡資訊，ed:m 顧問團隊會於24小時內與您聯繫。</p>
                    <a class="btn -clr-primary" href="/appointment">立即諮詢</a>
                </div>
            </section>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>
    <?php include_once 'incl/scripts.php';?>
    <script>
        $.home();
    </script>
</body>
</html>
