<?php
session_start();
$website = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on" ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'];

define('_WEBSITE_', $website);
define('_LANG_', 'zh-Hant');
define('_LOCALE_', 'zh_TW');

$webinfo = 'json/webinfo.json';

$_sitename = 'ed:m LOVE YOUR DREAM';
$_thumbnail =  _WEBSITE_ . '/assets/img/opengraph.jpg';
$_favicon = _WEBSITE_ . '/assets/img/favicon.png';

$_email = 'service@edm.tw';
$_phone_number = '+88227263690';
$_fax_number = '+88227263659';

$_fb_app_id = '1099502563538329';
$_fb_admins = '100001604603012';
$_fb_pages = '167377986694957';

if (file_exists($webinfo)) {
    $webinfo = json_decode(file_get_contents($webinfo), true);

    $_sitename = isset($webinfo['title']) && strlen($webinfo['title']) ? $webinfo['title'] : $_sitename;
    $_description = isset($webinfo['description']) && strlen($webinfo['description']) ? $webinfo['description'] : $_description;
    $_thumbnail = isset($webinfo['thumbnail']) && strlen($webinfo['thumbnail']) ? _WEBSITE_ . '/uploads/webinfo/'. $webinfo['thumbnail'] : $_thumbnail;
    $_favicon = isset($webinfo['favicon']) && strlen($webinfo['favicon']) ? _WEBSITE_ . '/uploads/webinfo/'. $webinfo['favicon'] : $_favicon;

    $_email = isset($webinfo['tw_email']) && strlen($webinfo['tw_email']) ? $webinfo['tw_email'] : $_email;
    $_phone_number = isset($webinfo['tw_tel']) && strlen($webinfo['tw_tel']) ? $webinfo['tw_tel'] : $_phone_number;
    $_fax_number = isset($webinfo['tw_fax']) && strlen($webinfo['tw_fax']) ? $webinfo['tw_fax'] : $_fax_number;

    $_fb_app_id = isset($webinfo['fb_app_id']) && strlen($webinfo['fb_app_id']) ? $webinfo['fb_app_id'] : $_fb_app_id;
    $_fb_admins = isset($webinfo['fb_admins']) && strlen($webinfo['fb_admins']) ? $webinfo['fb_admins'] : $_fb_admins;
    $_fb_pages = isset($webinfo['fb_pages']) && strlen($webinfo['fb_pages']) ? $webinfo['fb_pages'] : $_fb_pages;
}

define('_SITENAME_', $_sitename);
define('_THUMBNAIL_', $_thumbnail);
define('_FAVICON_', $_favicon);

define('_EMAIL_', $_email);
define('_TEL_', $_phone_number);
define('_FAX_', $_fax_number);

define('_FB_APP_ID_', $_fb_app_id);
define('_FB_ADMINS_', $_fb_admins);
define('_FB_PAGES_', $_fb_pages);

$get_page_name = explode('/', $_SERVER["REQUEST_URI"])[1];
$get_page_name = explode('?', $get_page_name)[0];

$default_dynamic_meta = array(
    'og:title' => _SITENAME_,
    'og:url' => _WEBSITE_,
    //'og:description' => _DESCRIPTION_,

    'og:image' => _THUMBNAIL_,
    //'og:image:alt' => _DESCRIPTION_,
    'og:image:type' => null,
    'og:image:width' => 500,
    'og:image:height' => 262,

    'twitter:title' => null,
    'twitter:description' => null,
    'twitter:image' => null,
    'twitter:image:alt' => null
);

function renderSocialMeta($dynamic = null) {
    global $default_dynamic_meta;
    $dynamic = $dynamic ? $dynamic : $default_dynamic_meta;

    $static = array(
        'og:site_name' => _SITENAME_,
        'og:type' => 'website',
        'og:locale' => _LOCALE_,
        'og:latitude' => '25.0411455',
        'og:longitude' => '121.550567',
        'og:street-address' => '大安區忠孝東路四段166號4樓',
        'og:locality' => '台北市',
        'og:region' => 'TW',
        'og:postal-code' => '10688',
        'og:country-name' => 'Taiwan',
        'og:email' => _EMAIL_,
        'og:phone_number' => _TEL_,
        'og:fax_number' => _FAX_,
        'fb:app_id' => _FB_APP_ID_,
        'fb:admins' => _FB_ADMINS_,
        'fb:pages' => _FB_PAGES_,
        'ia:markup_url' => null,
        'ia:markup_url_dev' => null,
        'ia:rules_url' => null,
        'ia:rules_url_dev' => null,
        'twitter:card' => null,
        'twitter:site' => null,
        'twitter:creator' => null
    );

    $metas = "\t\t";

    foreach ($static as $key => $value) {
        $attr = preg_match('/^twitter\:/', $key) ? 'name' : 'property';
        if ($value) $metas .= '<meta '. $attr .'="' . $key . '" content="'. $value .'">' . "\n\t\t";
    }

    if ($dynamic) {
        foreach ($dynamic as $key => $value) {
            $attr = preg_match('/^twitter\:/', $key) ? 'name' : 'property';
            if ($value) $metas .= '<meta '. $attr .'="' . $key . '" content="'. $value .'">' . "\n\t\t";
        }
    }

    echo $metas . "\n";

}

function getUpdatedHtmlTag($files, $id = false) {
    $path = dirname($_SERVER['SCRIPT_FILENAME']) . '/assets/';

    $env = (preg_match('/demo\.tw/', $_SERVER['SERVER_NAME'])) ? true : ((preg_match('/kei\.tw/', $_SERVER['SERVER_NAME'])) ? true : false);
    $file = (count($files) > 1 && $env) ? $files[1] : $files[0];
    $local_file = $path . $file;
    $tag = (preg_match('/.css/', $file)) ? 'css' : 'js';

    if (file_exists($local_file)) {
        $timestamp = filemtime($local_file);

        switch ($tag) {
            case 'js':
                echo '<script src="/assets/' . $file . '?v='. $timestamp . '"></script>'."\n";
                break;

            case 'css':
                echo '<link rel="stylesheet" href="/assets/' . $file . '?v='. $timestamp . '" ' . $id . ' />'."\n";
                break;

            default:
        }
    }
}

function getFileVersion($file) {
    $ver = '';

    if (file_exists($file)) {
        $ver = '?v=' . filemtime($file);
    }

    echo _WEBSITE_ . '/' . $file . $ver;
}

$end = 'jpg';
function endsWith($arr, $string)
{
    $length = strlen($string);
    if ($length == 0) {
        return true;
    }

    return (substr($arr, -$length) === $string);
}

$_SESSION['page_url'] = $_SERVER['HTTP_REFERER'];

if ((endsWith($_SESSION['page_url'], $end) === false) && ($_SESSION['page_url'] !== $website . "/")){
    $_SESSION['page_data'] = $_SESSION['page_url'];
}


if (!isset($_SESSION['nav_history'])){
    $_SESSION['nav_history'] = [];
} else {
    array_push($_SESSION['nav_history'], $_SESSION['page_data']);
    $nav = array_slice($_SESSION['nav_history'], -20, 20);
    $nav_filter = array_unique($nav);
    $history = array_slice($nav_filter, -3, 3);

    // echo "<pre>";
    // print_r($history);
    // echo "</pre>";
}

?>
