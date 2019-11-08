<?php

class DrController extends V2Controller {

  public function pages() {
    $pages = [];

    $page1 = [
      "title" => "Kullanım Şartları",
      "content" => [
        [
          "subtitle" => "UYGULUMA MÜLKİYETİ; KULLANIM ŞEKLİ ANLAŞMASI",
          "subcontent" => "DR Store aracılığıyla sunulan hizmetlerin fikri ve sınai mülkiyet hakları DR Store'ye aittir. DR Store'nin içeriğini ve altyapısını oluşturan bölümlerinin, kaynak kodlarının, metinlerinin ve görsellerinin tümü ya da bir kısmı DR Store izni olmadan basılı ya da internet ortamında kullanılamaz, çoğaltılamaz. DR Store'ye ait ya da DR Store tarafından sağlanan tüm kurumsal logolar, görseller, fotoğraflar yazılı izin alınmadan basılı ya da internet ortamında kullanılamaz, çoğaltılamaz. Kullanıcılar tarafından, bu yönde bir olanak sağlanması halinde, DR Store'ye gönderilen, iletilen, kullanılan, oluşturulan ya da DR Store aracılığıyla 3. şahıslara iletilen her türlü kullanıcı içeriğinin gizlilik niteliğinin ortadan kalktığı ve herhangi bir fikri ve sınai hakkı/telif/lisans hakkını içermediği kabul edilir. Kullanıcılar gizli ya da üzerinde fikri ve sınai mülkiyet hakkı olduğu düşünülen herhangi bir içerik oluşturup hesabına eklediğinde bu içeriğin 'hukuki bir ayıp' içermediği ve bunları dijital iletim suretiyle yayınlama hakkı olduğu kabul edilir. Aksi halde tüm sorumluluk yasal ihlal oluşturan içeriği gönderen kullanıcıya aittir. DR Store tarafından sunulan dosyalar, yazılmış özgün içerik, görseller, açıklamalar ve benzeri ögeler ile tüm lisanslı tablo, lisanslı analiz ve lisanslı grafikler, kişisel bilgiler ve kurumsal şirket hakları nedeniyle DR Store'ın yazılı izni olmadan hiçbir ortamda yayınlanamaz, kullanılamaz, çoğaltılamaz. Kurumlar ile yapılan kiralama anlaşmaları gereği DR Store 'ın hak sahipliği ve yukarıda tanımlanan hakların ihlalinin tespiti sonucunda DR Store, yasal işlem başlatma hakkına sahiptir. Kullanıcıların DR Store'ye dahil olmasıyla bu telif hakkı bildirisini kabul ettiğini taahhüt eder."
        ],
        [
          "subtitle" => "İÇERİK",
          "subcontent" => "Tasarım, yapı, seçim, koordinasyon, ifade, sınırlama dahil olmak ancak bunlarla sınırlı olmaksızın tüm metin, grafik, kullanıcı arabirimleri, görsel arayüzler, fotoğraflar, ticari markalar, logolar, sesler, müzik, resim ve bilgisayar kodu (topluca 'İçerik' Uygulamada yer alan, İçerikte yer alan, kontrol edilen veya lisanslanan ve DR Store tarafından lisanslanan ve ticaret elbisesi, telif hakkı, patent ve ticari marka yasaları ile çeşitli fikri mülkiyet hakları ve haksız rekabet yasaları ile korunan, 'görünüş ve his' ve düzenlenmesi. Bu Kullanım Koşullarında açıkça belirtilmediği sürece, Uygulamanın hiçbir kısmı ve İçeriği, herhangi bir şekilde ('yansıtma' da dahil olmak üzere) kopyalanamaz, çoğaltılamaz, yeniden yayınlanamaz, yüklenemez, yayınlanır, kamuya açık şekilde görüntülenemez, kodlanmaz, tercüme edilemez, iletilemez veya dağıtılamaz. DR Store ürününü ve hizmetlerini (veri sayfaları, bilgi tabanı makaleleri ve benzeri materyaller gibi), Uygulamadan indirilmek üzere DR Store tarafından kullanılabilir hale getirmek için kullanabilirsiniz; ancak şu koşullar sağlanır: (1) tüm kopyalarında herhangi bir tescilli bildirim dilini kaldırmazsınız (2) bu tür bilgileri yalnızca kişisel, ticari olmayan bilgi amaçlı kullanın ve bu tür bilgileri ağa bağlı bir bilgisayara kopyalamayın veya yayınlamayın veya herhangi bir ortamda yayınlamayın, (3) bu tür herhangi bir bilgide herhangi bir değişiklik yapmayın ve (4) bu tür belgelerle ilgili ek beyan veya garanti vermeyin."
        ],
        [
          "subtitle" => "ÇEREZLER",
          "subcontent" => "Çerezler, DR Store'nin sağladığı işlevlerin sağlıklı çalışmasını sağlayan, kullanıcının bilgisayarına tarayıcı aracılığıyla yerleştirilen küçük bir dosyadır. DR Store çerezleri cihazları tanınması, güvenli bir şekilde erişim sağlanması, güvenlik kontrolleri gibi teknik alanlar ya da kullancının kullanımına göre özelleştirilmiş seçenekler sunmak dışında kullanılmaz. Çerezlere kişisel verileriniz asla yerleştirilmez."
        ],
      ]
    ];
    $page2 = [
      "title" => "Gizlilik Politikası",
      "content" => [
        [
          "subtitle" => "TELİF HAKLARI",
          "subcontent" => "DR Store aracılığıyla sunulan hizmetlerin fikri ve sınai mülkiyet hakları DR Store'ye aittir. DR Store'nin içeriğini ve altyapısını oluşturan bölümlerinin, kaynak kodlarının, metinlerinin ve görsellerinin tümü ya da bir kısmı DR Store izni olmadan basılı ya da internet ortamında kullanılamaz, çoğaltılamaz. DR Store'ye ait ya da DR Store tarafından sağlanan tüm kurumsal logolar, görseller, fotoğraflar yazılı izin alınmadan basılı ya da internet ortamında kullanılamaz, çoğaltılamaz. Kullanıcılar tarafından, bu yönde bir olanak sağlanması halinde, DR Store'ye gönderilen, iletilen, kullanılan, oluşturulan ya da DR Store aracılığıyla 3. şahıslara iletilen her türlü kullanıcı içeriğinin gizlilik niteliğinin ortadan kalktığı ve herhangi bir fikri ve sınai hakkı/telif/lisans hakkını içermediği kabul edilir. Kullanıcılar gizli ya da üzerinde fikri ve sınai mülkiyet hakkı olduğu düşünülen herhangi bir içerik oluşturup hesabına eklediğinde bu içeriğin 'hukuki bir ayıp' içermediği ve bunları dijital iletim suretiyle yayınlama hakkı olduğu kabul edilir. Aksi halde tüm sorumluluk yasal ihlal oluşturan içeriği gönderen kullanıcıya aittir. DR Store tarafından sunulan dosyalar, yazılmış özgün içerik, görseller, açıklamalar ve benzeri ögeler ile tüm lisanslı tablo, lisanslı analiz ve lisanslı grafikler, kişisel bilgiler ve kurumsal şirket hakları nedeniyle DR Store'nin yazılı izni olmadan hiçbir ortamda yayınlanamaz, kullanılamaz, çoğaltılamaz. Kurumlar ile yapılan kiralama anlaşmaları gereği DR Store'nin hak sahipliği ve yukarıda tanımlanan hakların ihlalinin tespiti sonucunda DR Store, yasal işlem başlatma hakkına sahiptir. Kullanıcıların DR Store'ye dahil olmasıyla bu telif hakkı bildirisini kabul ettiğini taahhüt eder."
        ],
        [
          "subtitle" => "GİZLİLİK",
          "subcontent" => "DR Store'de yer alan barkodlar sadece bilgilendirme amaçlıdır. Fiyat geçerlilik 'Türkiye Geneli' ise genel olarak satıldığı ortalama rakam fiyat olarak bulmaktadır. Uygulamada yer alan fiyatların ve fiyat geçerlilik yerinin bir kesinliği bulunmamakla beraber ürün-fiyat eşleşmesi de hatalı olabilir. Bu bilgilerin kullanımından doğacak sorumluluk kullanan kişiye aittir, DR Store herhangi bir sorumluluk kabul etmez. Kullanıcı bu uygulamayı kullanarak bu şartları kabul etmiş sayılır. DR Store bireylerin mahremiyetine saygı duyar ve kişilere ait toplanan verileri yasal zorunluluklar hali dışında üçüncü şahıslarla asla paylaşmaz; şahsi bilgilerinizin güvenliği için tüm tedbirlerin alındığını taahhüt eder. Kişisel verileriniz reklam, kampanya, veri madenciliği ve benzer maksatlarla satılması söz konusu değildir. Kurumların bilgi, sonuç, değerlendirme ve benzeri verileri DR Store tarafından kurumlara sunulan analizlerin dışında üçüncü kişilerle paylaşılmaz. Bu veriler geçmişe dönük olarak DR Store tarafından saklanabilir ve kurum için yapılacak uzun vadeli analizlerde tekrar kullanılabilir. DR Store ilgili verilerin güvenliği için tüm tedbirlerin alındığını taahhüt eder."
        ],
        [
          "subtitle" => "ÇEREZLER",
          "subcontent" => "Çerezler, DR Store'nin sağladığı işlevlerin sağlıklı çalışmasını sağlayan, kullanıcının bilgisayarına tarayıcı aracılığıyla yerleştirilen küçük bir dosyadır. DR Store çerezleri cihazları tanınması, güvenli bir şekilde erişim sağlanması, güvenlik kontrolleri gibi teknik alanlar ya da kullancının kullanımına göre özelleştirilmiş seçenekler sunmak dışında kullanılmaz. Çerezlere kişisel verileriniz asla yerleştirilmez."
        ],
      ]
    ];
    $pages[] = $page1;
    $pages[] = $page2;

    $json = self::_query_json_template(200, "Sayfa bilgileri getirildi", $pages);
    return $this->render(["text" => $json], ["content_type" => "application/json"]);
  }

  public function tops() {

    $drtops_savekey = "__drtops__";
    $drtops = Drtop::load()->order("count", "desc")->limit(3)->get_all();
    $tops = [];

    if ($drtops) {
      if (ApplicationCache::exists($drtops_savekey)) {
        $tops = ApplicationCache::read($drtops_savekey);
      } else {

        foreach ($drtops as $drtop)
          $tops[] = self::_query($drtop->barcode, true);

        ApplicationCache::write($drtops_savekey, $tops);
      }
    }

    $json = self::_query_json_template(200, "Top 3 ürün ile ilgili veriler", $tops);
    return $this->render(["text" => $json], ["content_type" => "application/json"]);
  }

  public function search_text() {

    if (!isset($_POST["text"])) {
      $json = self::_query_json_template(429, "Verilerde eksiklik var!");
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    }

    $post_text = $_POST["text"];
    $data = self::_query($post_text, false);

    if ($data) {
      $json = self::_query_json_template(200, "Başarılı istek", $data, $post_text);
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    } else {
      $json = self::_query_json_template(404, "Üzgünüm aradığım kaynaklarımda ürününüzü bulamadım.");
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    }
  }

  public function search_barcode() {

    if (!isset($_POST["barcode"])) {
      $json = self::_query_json_template(429, "Verilerde eksiklik var!");
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    }

    $post_barcode = $_POST["barcode"];
    $data = self::_query($post_barcode, true);

    if ($data) {
      $json = self::_query_json_template(200, "Başarılı istek", $data, $post_barcode);
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    } else {
      $json = self::_query_json_template(404, "Üzgünüm aradığım kaynaklarımda ürününüzü bulamadım.");
      return $this->render(["text" => $json], ["content_type" => "application/json"]);
    }
  }

  private static function _query($queryname, $one_record = true) {
    $cachename = "DR_" . $queryname;

    if (ApplicationCache::exists("$cachename")) {

      $data = ApplicationCache::read("$cachename");

    } else { // barcode or text search and fetch [data, data], data, NULL

      $data = self::_query_dr($queryname, $one_record);

      if ($data) {

        ApplicationCache::write("$cachename", $data);

      } else {
        return NULL;
      }
    }
    
    // TOP COUNT START
    // if one_record == true, (queryname=barcode) barcode save
    if ($one_record) {
      if ($drtop = Drtop::unique(["barcode" => $queryname])) {
        $drtop->count = $drtop->count + 1;
        $drtop->updated_at = date("Y-m-d H:i:s");
        $drtop->save();
      } else  {
        Drtop::create(["barcode" => $queryname, "count" => 1, "created_at" => date("Y-m-d H:i:s")]);
      }
    }
    // TOP COUNT END

    return $data;
  }

  private static function _query_dr($queryname, $one_record = true) {
    $queryname = preg_replace("/ /", "%20", $queryname);

    $file = file_get_contents("https://www.dr.com.tr/Search?q=" . $queryname);

    preg_match_all("'<figure>\s*<a href=\"(.*?)\" class=\"item-name\">\s*<img src=\"(.*?)\" alt=\"(.*?)\"\s*/>\s*</a>\s*</figure>'si", $file, $cards);
    $_names = $cards[3];
    $_images = $cards[2];
    $_links = $cards[1];

    foreach ($_links as $i => $value)
      $_links[$i] = "https://www.dr.com.tr" . $value;

    // preg_match_all("'<a href=\"(.*?)\" class=\"item-name\">\s*<h3>(.*?)</h3>\s*</a>'si", $file, $names);
    // $_names = $names[2];

    preg_match_all("'<span class=\"price\">(.*?)</span>'si", $file, $prices);
    $_prices = $prices[1];

    // preg_match_all("'<span class=\"name\">(.*?)</span>'si", $file, $authors);
    preg_match_all("'<a href=\"(.*?)\" class=\"who mb10\">(.*?)</a>'si", $file, $publishers);
    $_publishers = $publishers[2];

    // preg_match_all("'<span class=\"name\" id=\"brandName\">(.*?)</span>'si", $file, $authors);
    preg_match_all("'<a href=\"(.*?)\" class=\"who\">(.*?)</a>'si", $file, $authors);
    $_authors = $authors[2];

    if (isset($_names[0])) {
      if ($one_record) {

        $_name = $_names[0];

        // remove TL crachter
        $_price = preg_replace("/[^0-9,.|]/", "", $_prices[0]);

        $_image = $_images[0];

        $_link = $_links[0];

        $_publisher = $_publishers[0];

        $_author = $_authors[0];

        $data = [
          "barcode" => $queryname,
          "name" => $_name,
          "price" => $_price,
          "image" => $_image,
          "link" => $_link,
          "publisher" => $_publisher,
          "author" => $_author
        ];
      } else {

        $datas = [];
        foreach ($_names as $i => $value) {
          $datas[]= [
            "name" => $_names[$i],
            "price" => $_prices[$i],
            "image" => $_images[$i],
            "link" => $_links[$i],
            "publisher" => $_publishers[$i],
            "author" => $_authors[$i]
          ];
        }

        $data = $datas;
      }
    } else {
      $data = NULL;
    }

    // $_name = mb_convert_encoding($_names[0],  'ISO-8859-1', 'UTF-8');
    // $_name = utf8_decode($_name);
    // $_name = mb_convert_encoding($_name, "UTF-8", "ISO-8859-1");

    // $_name = mb_convert_encoding($_name, 'UTF-8', mb_detect_encoding($_name, 'UTF-8, ISO-8859-1', true));
    // $_name = iconv('ASCII', 'UTF-8//IGNORE', $_name);
    // $_name = html_entity_decode($_name);

    // $_name = html_entity_decode($_name, ENT_COMPAT, $encoding = 'UTF-8');
    // $_name = html_entity_decode($_name, ENT_QUOTES | ENT_HTML5);
    // $_name = html_entity_decode($_name, ENT_COMPAT, 'ISO-8859-1');

    // $_name = htmlspecialchars_decode($_name, ENT_QUOTES);

    return $data;
  }
}
?>
