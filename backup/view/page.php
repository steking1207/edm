<?php
include_once 'incl/startup.php';
$param_lv2 = $route->getParameter(2);
$id = $param_lv2 ? $param_lv2 : 1;

$pageFile = 'json/pages/' . $id . '.json';

if (file_exists($pageFile)) {
    $pageFile = file_get_contents($pageFile);
    $pageData = json_decode($pageFile, true);

    $pages = json_decode(file_get_contents('json/pages.json'), true);
    $counterByPages = count($pages);

    $pages_keys = array_keys($pages);
    $page_index = array_search($id, $pages_keys);

    $relationKeys = array_slice($pages_keys, $page_index + 1, 3);
    $relationCount = 3;
    $lack = $relationCount - count($relationKeys);

    if ($lack) {
        for ($i = 0; $i < $lack; $i++) {
            array_push($relationKeys, $pages_keys[$i]);
        }
    }

    if ($page_index !== false) {
        $page_prev_key = isset($pages_keys[$page_index - 1]) ? $pages_keys[$page_index - 1] : null;
        $page_next_key = isset($pages_keys[$page_index + 1]) ? $pages_keys[$page_index + 1] : null;

        $page_prev = $page_prev_key ? $pages[$page_prev_key] : null;
        $page_next = $page_next_key ? $pages[$page_next_key] : null;
    }
} else {

    header('Location:/');
    exit();

}
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
		<meta name="description" content="<?= $pageData['meta-keywords'];?>" >
        <meta name="keywords" content="<?= $pageData['meta-keywords'];?>">
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
            <div class="page-banner" style="background-image: url('/tmp/<?=$pageData['cover'];?>');">
                <h1 class="caption"><?=$pageData['title'];?></h1>
            </div>

            <div class="page-wrap">
                <article class="editor">
                    <?=$pageData['content'];?>
                </article>
            </div>
            <div class="relations">
                <h6 class="caption">相關文章</h6>
                <div class="relation-grp">
                    <?php
                    foreach ($relationKeys as $id) {
                        echo <<< HTML
                    <div class="relation__item">
                        <div class="embed">
                            <div class="embed__img" style="background-image: url('/tmp/{$pages[$id]['image']}')"></div>
                            <img src="'/tmp/{$pages[$id]['image']}'" alt="{$pages[$id]['title']}">
                        </div>
                        <h6 class="relation__caption">{$pages[$id]['title']}</h6>
                        <a class="relation__link" href="/page/{$pages[$id]['id']}">
                            閱讀更多
                            <i class="icon edm-chevron-right"></i>
                        </a>
                    </div>
HTML;
                    }
                    ?>
                </div>
            </div>
            <div class="pager">
                <?php
                if ($page_prev_key) {
                    echo <<< HTML
                    <div class="pager__prev">
                        <a class="pager__link" href="{$page_prev['link']}">
                            <i class="icon edm-chevron-left"></i>
                            <div class="pager__txt">
                                <sup class="pager__nav">前一篇</sup>
                                <span class="pager__name">{$page_prev['title']}</span>
                            </div>
                        </a>
                    </div>
HTML;
                }

                if ($page_next_key) {
                    echo <<< HTML
                    <div class="pager__next">
                        <a class="pager__link" href="{$page_next['link']}">
                            <div class="pager__txt">
                                <sup class="pager__nav">下一篇</sup>
                                <span class="pager__name">{$page_next['title']}</span>
                            </div>
                            <i class="icon edm-chevron-right"></i>
                        </a>
                    </div>
HTML;

                }
                ?>
            </div>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
</body>
</html>
