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
    include_once 'incl/setting.php';

    renderSocialMeta();
    ?>
</head>
<body>
    <?php include_once 'incl/loader.php';?>
    <div id="app">
        <?php include_once 'incl/header.php';?>

        <main class="container">
            <div class="page-banner" style="background-image: url('/tmp/privacy.jpg');">
                <h1 class="caption">隱私權</h1>
            </div>

            <div class="page-wrap">
                <article class="editor">
                    <h2>ed:m 隱私權政策</h2>
                    <p>歡迎您光臨「ed:m education 網站」(以下簡稱本網站)，為了讓您能夠安心的使用本網站的各項服務與資訊，特此向您說明本網站的隱私權保護政策，以保障您的權益，請您詳閱下列內容，當您在勾選「我已閱讀並同意」鍵後，即表示您已經詳細閱讀並同意遵守以下規範條款，並表示您願意以電子文件方式行使同意之權利：</p>
                    <p>蒐集、處理及利用個人資料告知聲明：<br>為保護您的個人資料，伊殿國際教育股份有限公司(下稱本公司)依據個人資料保護法規定，於下列事由與目的範圍內，說明本公司直接或間接蒐集、處理及利用您的個人資料，當您簽名同意後，即表示您已經詳細閱讀並同意遵守以下規範條款：</p>
                    <p>本公司於蒐集、處理及利用您的個人資料前，謹依個人資料保護法之規定，向您告知下列事項：</p>
                    <ol style="list-style-type: cjk-ideographic">
                        <li>蒐集個人資料公司：伊殿國際教育股份有限公司(下稱本公司)</li>
                        <li>蒐集之目的：本公司基於個人資料保護法及相關法令之規定，取得您的個人資料，目的在於辦理遊學、留學課程報名、學校申請、簽證申請、代訂機票、提供交通、住宿協助、保險申請等其他受委託之代辦事項、行銷、廣告或商業行為、管理分析、市場研究、查核及合於本公司營業登記項目或組織章程所定業務之目的、提供各式消費資訊及執行職務或業務之必要範圍內蒐集、處理及利用您的個人資料。您同意本公司以您所提供的個人資料確認您的身份、與您進行連絡、提供您本公司及韓國總公司EDMEDUCATION KOREA CO,,LTD及本公司關係企業或合作夥伴、旅行社、合作廠商、合作機構、合作學校等(含相關履行輔助人及代理人)之相關服務及資訊。</li>
                        <li>個人資料之類別：本公司所蒐集之個人資料類別包括但不限於姓名、生日、性別、照片、身分證字號、護照號碼、護照到期日、聯絡方式、通訊地址、電子郵件、飲食習慣、健康情形、緊急連絡人姓名、電話等資料)及其他得直接或間接辨識申請人個人之資料(如辨識個人者、辨識財物者、個人描述等)。</li>
                        <li>個人資料利用之期間、地區、對象及方式：(1)個人資料之利用期間：本公司營運期間及蒐集目的存續期間；(2)個人資料利用地區為本公司執行業務及伺服器主機所在地(包括但不限於台灣地區、韓國地區)及主管機關許可經營及經營營業登記項目或章程所定之業務，其營業活動之相關地區及為達蒐集、處理及利用目的所必須使用之相關地區：包含本公司、韓國總公司EDMEDUCATION KOREA CO,,LTD及分公司、本公司之分公司、與本公司有從屬關係之子公司或有控制關係之母公司暨其分公司或集團關係之公司、與本公司或前述公司因業務需要而訂有契約之機構、學校或顧問、旅行社等所在之地區、及國際傳輸個人資料需未受中央目的事業主管機關限制之接收者所在地；(3)利用之對象為本公司、韓國總公司EDMEDUCATION KOREA CO,,LTD及為執行蒐集目的而受本公司委託或雇用之人及本公司合作特約商暨委外之服務廠商及其他與本公司合作行銷推廣活動之第三人及合作學校及申請遊、留學所必要之政府單位、民間機構；(4)個人資料之利用方式包括但不限於以電話、簡訊、通訊軟體、電子郵件、紙本或其他合於當時科技之適當方式作個人資料之利用、包括任何依法得利用之方式，或與外部合作之行銷，並於法令容許之範圍內，為建檔、管理、業務推廣、活動聯繫、宣傳行銷、發送簡訊、電子郵件、發送傳單、發送訊息、文件物品揭露、轉介或交互運用予本公司及其合作對象等蒐集目的範圍內之利用。</li>
                        <li>本公司對您所提供之個人資料，將以安全之措施加以保護，您亦可隨時利用台灣服務電話02- 2711-3911，要求查詢、閱覽、製給複製本、補充、更正、或要求停止蒐集、處理、國際傳輸、利用、或要求刪除已提供之個人資料。</li>
                        <li>於您進行一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，絕不對外公布。</li>
                        <li>您的個人資料蒐集之目的消失或期限屆滿時，除本公司因執行職務或業務所必須或為遵循其他法令之規定者外，您可隨時向本公司請求刪除、停止處理或利用您的個人資料。</li>
                        <li>您得自由選擇是否提供相關個人資料予本公司蒐集、處理及利用，惟您若選擇不提供，或只提供部份/不完全/不真實/不正確個人資料予本公司，或提供後向本公司請求刪除部分或全部個人資料，或您所提供的個人資料，經檢舉或發現不足以確認您的身分真實性或其他個人資料冒用、盜用等情形時，導致本公司或合作機構/學校無法進行必要之審核及處理時，本公司有權暫時停止或撤銷提供對您的服務，若有不便之處尚請見諒。</li>
                    </ol>

                    <h5>網站服務條款聲明事項</h5>
                    <h6>一、網站/應用程式使用說明</h6>
                    <p>您對本網站/應用程式的使用（包括但不限於瀏覽、存取、傳輸等行為）相當於您同意遵守下列服務條款（下稱「本條款」）及相關法令。<br>本條款將構成您與伊殿國際教育股份有限公司(下稱本公司)之間的協議，拘束您對於本網站的使用，若您不同意本條款，請勿使用本網站。您同意本條款與其他由您簽署的書面協議具有相同效力，構成本公司與您之間對於使用本網站的全部和完整協議。</p>
                    <p>本公司擁有並得行使本網站的一切權利及利益，包括但不限於所有權、著作權、營業秘密、設計、專利等，且擁有或得使用本網站中的所有商標、服務標識、智慧財產之申請權及商業名稱包括但不限於本公司等。</p>
                    <p>本公司授權您在個人及非商業性使用的範圍內查看本網站上的資料，惟您在本網站資料的任何複本上必須完整保留原始資料的智慧財產權等聲明，且不得以任何方式修改本網站上的資料，亦不得公開展示、執行、散發、基於商業目的使用本網站資料，或將本網站資料使用在任何其他網站或網路環境。</p>
                    <p>任何商業機構或團體，非經本公司書面同意，不得以任何形式轉載、重製、散布、公開播送、出版或發行本網站內容。</p>
                    <p>為了提供您最佳的服務，本網站會在您的電腦中放置並取用我們的Cookie，若您不願接受Cookie的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕Cookie的寫入，但可能會導致網站某些功能無法正常執行。</p>
                    <p>若您違反本網站之條款，您使用本網站的授權將自動終止，必須立即銷毀任何下載或列印的資料。縱有上述規定，若您自本網站下載、存取、或使用任何資料，而該資料訂有授權條款、條件及注意事項者，您對該等資料的使用亦應受該等條款、條件或注意事項之拘束。若您於本條款任何修改或變更發佈後持續存取或使用本服務即視同您已閱讀、瞭解修定後條款之內容並同意受其約束。</p>

                    <h6>二、責任/免責條款</h6>
                    <p>本公司不對本網站資料為任何明示或默示的擔保、保證。本網站會盡力維護網站內容之準確性及完整性，但內容如有錯誤或遺漏，本網站不會承擔任何賠償責任，所有本網站內容，將會隨時更改，而不作另行通知，任何更改於本網站發佈時，立即生效。請您在每次瀏覽本網站時，務必查看此免責聲明。如您繼續使用本網站，即代表您同意接受更改後的免責聲明約束。</p>
                    <p>本網站對於任何使用或引用本網站網頁資料引致之損失或損害，概不負責。本網站亦有權隨時刪除、暫停或編輯本網站所登載之各項資料，以維護本網站之權益。本網站依現有設備及人力盡力做好網頁管理安全，但並無法保證網頁之絕對安全性或絕無瑕疵、失誤、病毒或其它惡意之程式（包括被其他暨第三人者惡意植入）。透過網際網路傳輸資料或資料儲存系統，均無法保證百分之百安全，如您提供個人資料予本公司，請一併考量風險，如仍有疑慮建議不要在本網站輸入個人資料。</p>
                    <p>本網站內以超連結方式向外所連結的網站，本公司不就連結之網頁內容作出任何保證或承擔任何責任，使用者如瀏覽這些網頁，應自負風險，本網站不承擔任何責任。</p>

                    <h6>三、服務及商品資訊</h6>
                    <p>本網站提供之資料、價格、內容據等資訊僅供參考且隨時有變動之可能，如有疑問請您與本公司承辦人員確認。</p>

                    <h6>四、資訊安全政策</h6>
                    <p>本網站努力保護您的個人資料安全，只有經過授權的人員才能接觸處理、利用您的個人資料，相關處理人員如有違反保密義務者，將會受到相關的法律處分。</p>
                    <p>如因法規或業務需要有必要委託本網站相關單位提供服務時，本網站亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其將確實遵守。</p>

                    <h6>五、未成年人使用網站</h6>
                    <p>倘您的年齡未滿二十歲，請您與父/母(法定代理人)或監護人一起閱讀本隱私權政策，並確認皆了解本網站隱私權政策的條款。</p>

                    <h6>六、準據法及管轄</h6>
                    <p>本條款以中華民國法律為準據法。如有任何爭議，您同意以臺灣臺北地方法院為第一審管轄法院。</p>
                </article>
            </div>
        </main>

        <?php include_once 'incl/footer.php';?>
    </div>

    <?php include_once 'incl/scripts.php';?>
</body>
</html>
