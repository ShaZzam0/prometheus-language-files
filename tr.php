<?php

    /**
     * Language array
     * @var array
     *
     * When updating this, ONLY change the values on the right hand side.
     * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
     * If the new values are not set it will fallback to the default ones.
     * 
     * Turkish translation courtesy of ShaZzam.
     */

    /**
     * Text direction
     * @var string
     *
     * LTR = Left to right
     * RTL = Right to left
     */
    $dir = 'ltr';

    $lang = array(

        // Navigation bar
        "home" => "Anasayfa",
        "store" => "Mağaza",
        "buy_credits" => "Kredi Satın Al",
        "raffles" => "Çekilişler",
        "profile" => "Profil",
        "support" => "Destek",
        "admin" => "Yönetici",
        "sign_out" => "Çıkış yap",
        "sign_in" => "Giriş yap",


        // Başlık hataları ve mesajları
        "not_setup" => "Panelinizi düzgün bir şekilde ayarlamadınız! <a href='admin.php?a=gen&p=settings'>Buraya tıklayın</a> [Yönetici -> Genel Ayarlar -> Ayarlar]",
        "header_sandbox" => "PayPal Sandbox etkin. Sandbox sadece test için kullanılmalıdır! Buradan devre dışı bırakabilirsiniz <a href='admin.php?a=gen&p=paypal'>burada</a>",
        "missing_action" => "Bir veya daha fazla paket eksik bir işlem içeriyor!",
        "unfinished_action" => "'Profil' sayfasında tamamlanmamış bir işleminiz var, <a href='profile.php'>burada</a>",


        // Ana Sayfa
        "welcome" => "Hoş geldiniz - Giriş yapın",
        "welcome_text" => "Kolay bağış portalımızı kullanmak için Steam üzerinden giriş yapın.",


        // Haberler
        "news" => "Haberler",
        "by" => "Tarafından",
        "no_news" => "Haber yok",
        "no_news_text" => "Şu anda haber yok.",
        "no_news_articles" => "Haber makalesi yok.",


        // Footer
        "tos" => "Kullanım Şartları",
        "powered_by" => "Steam tarafından desteklenmektedir",


        // Mağaza
        "credits" => "Krediler",
        "featured_pkg" => "Öne Çıkan Paket",
        "permanent" => "Kalıcı",
        "non_permanent" => "Geçici",


        "select_credit" => "Kredi Paketi Seçin",
        "global_packages" => "Global Paketler",


        // Çekilişler
        "raffle_ticket" => "Bilet Satın Al",
        "raffle_ended" => "Çekiliş sona erdi, kazanan: ",
        "raffle_not_compatible" => "Bu paket, sahip olduğunuz bir paketle uyumlu değil. Çekilişe giriş reddedildi.",
        "raffle_already_own" => "Bu pakete zaten sahipsiniz. Çekilişe giriş reddedildi.",
        "raffle_reached_max" => "Maksimum çekiliş girişine ulaştınız. Çekilişe giriş reddedildi.",


        // Destek
        "create_ticket" => "Bilet Oluştur",
        "ticket_closed" => "Bu bilet kapatıldı.",
        "reply" => "Yanıtla",
        "create" => "Oluştur",


        // Kullanım Şartları
        "tos_edited" => "Kullanım Şartları düzenlendi. Bir paket satın almadan önce <a href='tos.php'>Kullanım Şartları</a>'nı kabul edin!",
        "tos_must_accept" => "Satın almadan önce Kullanım Şartları'nı kabul etmelisiniz!",
        "tos_accept" => "Kabul Et",


        // Satın Alma Düğmeleri
        "purchase_paypal" => "Paypal ile Satın Al",
        "purchase_credits" => "Kredilerle Satın Al",
        "purchase" => "Satın Al",
        "buy_sign_in" => "Satın almadan önce giriş yapmalısınız!",
        "buy_already_own" => "Bu pakete zaten sahipsiniz!",
        "buy_not_compatible" => "Bu paket, sahip olduğunuz bir paketle uyumlu değil!",
        "buy_they_already_own" => "Bu kişi zaten bu pakete sahip!",
        "buy_they_not_compatible" => "Bu paket, sahip oldukları bir paketle uyumlu değil!",


        // Paketler
        "buying_someone_else" => "Başka biri için mi satın alıyorsunuz?",
        "buying_yourself" => "Şu anda kendiniz için satın alıyorsunuz",
        "buying_for" => "Şu anda şunun için satın alıyorsunuz",
        "packages_custom_amount" => "Özel miktar",

        "packages_not_available" => "Bu sunucu için hiç paket mevcut değil.",
        "raffle_not_available" => "Şu anda hiç çekiliş paketi mevcut değil.",
        "credit_not_available" => "Şu anda hiç kredi paketi mevcut değil.",

        // Düğmeler
        "submit" => "Gönder",

        // Profil
        "non_perm_pkg" => "Geçici Paket",
        "perm_pkg" => "Kalıcı Paket(ler)",
        "acc_info" => "Hesap Bilgileri",
        "pkg_history" => "Paket Geçmişi",
        "acc_credits" => "Krediler",
        "transfer_credits" => "Kredi Transferi",
        "package" => "Paket",

        // Tablolar
        "id" => "ID",
        "user" => "Kullanıcı",
        "description" => "Açıklama",
        "timestamp" => "Zaman Damgası",
        "action" => "Eylem",
        "replies" => "Yanıtlar",
        "view" => "Görüntüle",


        // Seçim Kutuları
        "select_server" => "Sunucu Seç:",
        "select_currency" => "Para Birimi Seç:",
        "select_category" => "Kategori Seç:",
        "none" => "Hiçbiri",

        // Modallar
        "yes" => "Evet",
        "no" => "Hayır",
        "sure" => "Emin misiniz?",
        "sure_cur" => "Bu para birimini silmek istediğinizden emin misiniz?",
        "sure_srv" => "Bu sunucuyu silmek istediğinizden emin misiniz?",
        "sure_cat" => "Bu kategoriyi silmek istediğinizden emin misiniz?",

        // Tehlikeli Ayarlar
        "dangerous" => "Tehlikeli Ayarlar",
        "danger_cur" => "Alternatif olarak, bu para birimini silebilirsiniz.",
        "danger_srv" => "Bu sunucuyu ancak üzerine atanan hiç paket yoksa silmeyin!",
        "danger_cat" => "Bu kategoriyi ancak üzerine atanan hiç paket yoksa silmeyin!",
        "delete" => "Sil",

        // Yönetici Navigasyonu
        "dashboard" => "Pano",
        "general_settings" => "Genel Ayarlar",
        "support_tickets" => "Destek Talepleri",
        "servers" => "Sunucular",
        "currencies" => "Para Birimleri",
        "categories" => "Kategoriler",
        "packages_and_actions" => "Paketler ve Eylemler",
        "credit_packages" => "Kredi Paketleri",
        "theme_editor" => "Tema Düzenleyici",
        "documentation" => "Belgeler",

        // Genel Ayarlar
        "settings" => "Ayarlar",
        "main_page" => "Ana Sayfa",
        "integration_settings" => "Entegrasyon Ayarları",
        "ingame_notifications" => "Oyunda Bildirimler",

        // Sunucular Sayfası
        "add_srv" => "Sunucu Ekle",
        "edit_srv" => "Sunucu Düzenle",
        "server_name" => "Sunucu Adı",
        "featured_pkg_short" => "Öne Çıkan pkg",

        // Para Birimi Sayfası
        "add_cur" => "Para Birimi Ekle",
        "edit_cur" => "Para Birimi Düzenle",
        "cc" => "Para Birimi Kodu",


        // Kategori Sayfası
        "add_cat" => "Kategori Ekle",
        "edit_cat" => "Kategori Düzenle",
        "cat_name" => "Kategori Adı",
            
        // Pano Navigasyonu
        "main_dashboard" => "Ana pano",
        "sale" => "Satış",
        "transactions" => "İşlemler",
        "users" => "Kullanıcılar",
        "logs" => "Kayıtlar",
        "update_sql" => "SQL Güncelleme",
        "other_features" => "Diğer özellikler",
            
        // Yönetici Pano
        "total" => "Toplam",
        "full_total" => "Tam Toplam",
        "dashboard_text" => "Yönetici paneline hoş geldiniz, burada sunucularınızın bağış etkinliği hakkında şık istatistikleri görüntüleyebileceksiniz.",
            
        /**
         * 1.4.7.2'de Yeni Eklenenler
         */
        "welcome_main" => "Hoş geldiniz",
        "need_credits" => "Daha fazla krediye mi ihtiyacınız var? <a href='store.php?page=credits'>Buraya tıklayın!</a>",
        "no_history" => "Tarih yok",
        "amount" => "Miktar",
        "you_have_none" => "Hiç yok!",
            
        "add_cre" => "Kredi paketi ekle",
        "edit_cre" => "Kredi paketi düzenle",
        "pack_title" => "Paket başlığı",
        "price" => "Fiyat",
        "currency" => "Para Birimi",
        "sure_cre" => "Bu kredi paketini silmek istediğinizden emin misiniz?",
        "danger_cre" => "Alternatif olarak, bu kredi paketini silebilirsiniz.",
        "select_package" => "Paket seç:",
        "choose_cre" => "Kredi paketi seçin",
        "brief_desc" => "Kısa açıklama",
        "amt_of_cre" => "Kredi miktarı",
        "price_of_pkg" => "Paketin fiyatı",
        "no_support" => "Destek talepleriniz yok",
        "no_other_available" => "Başka paketler mevcut değil",


        /**
         * 1.4.8'de Yeni Eklenenler
         */
        "purchase_free" => "Bu paketi ücretsiz alın!",
        "dashboard_revenuegraph" => "Gelir Grafiği",
        "dashboard_revenuecurrency" => "Ana para biriminizde gösterilir",
        "dashboard_packagesgraph" => "Paket Satışları",
        "dashboard_serversgraph" => "Sunucu Satışları",
        "between" => "Arasında",
        "and" => "ve",

        /**
         * 1.4.9'da Yeni Eklenenler
         */
        "free" => "Ücretsiz",
        "buy_own_free" => "Bu ücretsiz pakete zaten sahipsiniz. İkinci kez talep edemezsiniz!",

        /**
         * 1.4.9.2'de Yeni Eklenenler
         */
        "updates" => "Güncellemeler",

        /**
         * 1.4.9.3'te Yeni Eklenenler
         */
        "header_sqlupdate" => "Uygulanmamış bir MySQL güncellemeniz var <a href='admin.php?update'>burada!</a>",
        "monthly_goal" => "Aylık hedef",

        /**
         * 1.4.9.6'da Yeni Eklenenler
         */
        "payment_success" => "Ödeme başarılı!",
        "profile_updated" => "Profiliniz güncellendi.",
        "payment_failed" => "Ödeme başarısız oldu!",
        "check_credits" => "Lütfen bu paketi satın almak için yeterli kredinizin olduğunu kontrol edin!",
        "not_authorised" => "Bu alanı görüntüleme yetkiniz yok. Önce giriş yapın!",


        /**
         * 1.5'te Yeni Eklenenler
         */
        "wiki" => "Wiki",
        "no_graph_info" => "Grafik bilgisi yok",
        "no_graph_info_text" => "Herhangi bir işlem olmadığı için grafik bilgisi gösterilmiyor!",
        "paymentwall_purchase" => "Paymentwall ile Satın Al",
        "stripe_purchase" => "Stripe ile Satın Al",
        "payment_gateways" => "Ödeme Yöntemleri",
        "advanced" => "Gelişmiş",
        "no_servers" => "Şu anda mevcut sunucu yok.",
        "entries" => "girişler",
        "you_can_enter" => "Girebilirsiniz",
        "times_more" => "defa daha",
        "dashboard_creditsrevenue" => "Bu grafik ayrıca harcanan kredileri harcanan parayla karşılaştırır. Krediler para ile elde edilir. (Krediler = <font color='#9c9c9c'><b>Gri</b></font>, Para = <font color='#c10000'><b>Kırmızı</b></font>)",
        "pkg_discounted" => "Bu paket, sahip olduğunuz için indirimli",

        "compatible_text" => "Bu pakete sahipseniz, aşağıdaki seçilen paketleri alamazsınız",
        "not_compatible" => "İle uyumsuz",

        "packages" => "Paketler",
        "upgradeable_text" => "Seçilen pakete sahipseniz, seçilen paketlerin fiyatıyla bu paketi indirimli olarak alırsınız",
        "upgradeable" => "Yükseltilebilir",

        "assign_actions" => "Eylemleri Ata",
        "actions_text" => "Bu paketin, bir oyuncu tarafından satın alındıktan sonra ne tür eylemler yapmasını istediğinizi atayın.",
        "actions" => "Eylemler",
        "label_amount" => "Etiket miktarı",
        "add_package" => "Paket Ekle",
        "edit_package" => "Paket Düzenle",
        "labels" => "Etiketler",
        "title" => "Başlık",
        "category" => "Kategori",
        "no_packages" => "Şu anda sistemde hiç paketiniz yok",

        /**
         * 1.5.0.6'da Yeni Eklenenler
         */
        "signin" => "Giriş yap",
        "welcome_signin" => "Herhangi bir paket satın almak için önce giriş yapmalısınız",
        "blacklist_notext" => "Kara listeye almak için geçerli bir Steam64 veya SteamID girmelisiniz!",
        "blacklist_success" => "Bu kişiyi başarıyla kara listeye aldınız",
        "blacklisted_you" => "Bu topluluğun herhangi bir paket satın almasına kara listeye alındınız",
        "blacklisted_them" => "Bu kişi bu topluluktan kara listeye alındı, onun için satın alamazsınız",

        "recent_donators" => "Son bağış yapanlar",
        "name" => "Ad",
        "recent_none" => "Son zamanlarda bağış yapan kimse yok",
        "raffle_free" => "Ücretsiz katıl!",

        /**
         * 1.5.0.8'de Yeni Eklenenler
         */
        "top_donators" => "En büyük bağışçılar",
        "top_none" => "En büyük bağışçı yok",

        /**
         * 1.5.0.9'da Yeni Eklenenler
         */
        "step" => "Adım",

        /**
         * 1.5.1'de Yeni Eklenenler
         */
        "permission_groups" => "İzin Grupları",
        "add_permission" => "İzin grubu ekle",
        "edit_permission" => "İzin grubunu düzenle",
        "permissions" => "İzinler",
        "no_perm" => "Üzgünüm Dave, buna izin veremem (Yetersiz izinler)",

        /**
         * 1.5.1.2'de Yeni Eklenenler
         */
        "select_gateway" => "Ödeme yöntemi seçin",


        /**
         * 1.5.2'de Yeni Eklenenler
         */
        "buy_disable" => "Paketleri Devre Dışı Bırak",
        "buy_disable_text" => "Bu paketi satın alırsanız bu paketleri devre dışı bırakın",

        "credits_doesntexist" => "Bu kullanıcı bu sistemde mevcut değil.",
        "credits_yourself" => "Kredileri kendinize aktaramazsınız.",
        "credits_steamid" => "Başka bir SteamID deneyin",
        "credits_transferringto" => "Aktarılıyor:",

        "type" => "Tür",
        "gateway" => "Ödeme Yöntemi",
        "no_users" => "Kullanıcı bulunamadı",

        "view_profile" => "Profili Görüntüle",
        "view_blacklist" => "Kara Listeyi Görüntüle",

        "manage" => "Yönet",
        "users_search" => "Adı, steam64 veya steamid arayın",

        "transaction" => "İşlem",
        "delivered" => "Teslim Edildi",
        "state" => "Durum",
        "assign_package" => "Paket Ata",
        "set_credits" => "Kredileri Ayarla",
        "give_ticket" => "Bilet Ver",
        "del_inactive_actions" => "Etkin Olmayan Eylemleri Sil",

        "select_pkg" => "Paket Seçin",
        "do_assign_actions" => "Eylemleri Ata",
        "dont_assign_actions" => "Eylemleri Atama",
        "clone_expiretime" => "Aynı türün en son paketinin son kullanma tarihini klonla",
        "assign" => "Ata",

        "set" => "Ayarla",
        "disable" => "Devre Dışı Bırak",
        "enable" => "Etkinleştir",
        "inactive_everyone" => "Herkese İçin Etkin Olmayan",
        "del" => "Sil",
        "edit" => "Düzenle",

        "sale_settings" => "Satış Ayarları",
        "sale_text" => "Hangi paketlerin satışın uygulanmasını istediğinizi seçin.",
        "message" => "Mesaj",
        "percentage" => "Yüzde",
        "end_date" => "Bitiş Tarihi",

        "update" => "Güncelle",
        "automatic_updates" => "Otomatik Güncellemeler",
        "dl_lua" => "En son lua'yı indir",
        "dl_web" => "En son web'i indir",
        "no_write_perm" => "Güncelleme klasörünüz yazma izinlerine sahip değil! Otomatik güncellemeler, chmod 777 yapana kadar çalışmaz. <br> Bununla birlikte güncellemeyi manuel olarak indirmek için bu düğmeyi kullanabilirsiniz",
        "newest_version" => "Mevcut en yeni sürüm:",

        "test_message" => "Sunucuya test mesajı gönder",

        /**
         * 1.5.2.2'de Yeni Eklenenler
         */

        "find_more" => "Daha fazla bilgi edin!",

        /**
         * 1.5.3'te Yeni Eklenenler
         */

        "duplicate" => "Kopyala",
        "other" => "Diğer",
        "someone_else" => "Ancak, başkası için satın alabilirsiniz",

        /**
         * 1.5.4'te Yeni Eklenenler -- $1, $2, $3 vb. gibi şeyler otomatik olarak sayılar ve diğer şeylerle değiştirildiği için onları orada tutun!
         */

        "here" => "burada", // Bu, 'job_already_created' içinde $1 olduğu için bir bağlantı içine sarılır
        "job_already_created" => "Zaten özel bir iş oluşturdunuz. Hemen ödeme yapmak için $1'ı tıklayın. Aksi takdirde yeni bir tane oluşturabilirsiniz",

        "general_info" => "Genel bilgi",
        "preferences" => "Tercihler",

        "job_name" => "İş Adı",
        "chat_cmd" => "Bu iş olmak için sohbet komutu",
        "job_desc" => "İş Açıklaması",
        "job_colour" => "İş Rengi",

        "weapons" => "Silahlar",
        "models" => "Modeller",
        "model" => "Model",

        "job_costs" => "$1 veya $2 kredi maliyeti",

        "friends" => "Arkadaşlar",
        "friends_max" => "<h6>Arkadaşlar - $1 maksimum</h6>",
        "friends_add" => "Her arkadaş eklediğinizde son fiyata $1 veya $2 kredi ekler",
        "friends_not" => "Bu pakete arkadaş eklemenize izin verilmez",

        "salary" => "Maaş",
        "salary_static" => "Maaşınız $1 olacak",
        "salary_base" => "Taban maaş $1'dir. Onu artırarak son fiyata $2 veya $3 kredi ekler",
        "salary_max" => "<h6>Maaş - $1 maksimum defa ölçeklenir</h6>",
        "salary_current" => "Şu anki maaşınız: $1",

        "license" => "Lisans",
        "license_included" => "Bu işte bir lisans alırsınız",
        "license_include" => "Lisans dahil - Maliyet $1 veya $2 kredi",
        "license_no" => "Herhangi bir lisans alamazsınız",

        "payment_confirmation" => "Ödeme onayı",
        "job_total" => "Şu anki toplamınız $1 veya $2 kredi",
        "job_proceed" => "Ödemeye Devam Et",


        /**
         * 1.5.5'te Yeni Eklenenler
         */
        "job_total_nocredits" => "Şu anki toplamınız $1",
        "job_total_onlycredits" => "Şu anki toplamınız $1 kredi",

        "earned_total" => "TOPLAM KAZANILAN",
        "earned_week" => "BU HAFTA KAZANILAN",
        "earned_month" => "BU AY KAZANILAN",

        "real_transaction" => "Gerçek bir işlem olarak say",
        "not_real_transaction" => "Gerçek bir işlem olarak sayma (Herhangi bir istatistikte para eklemeyecektir)",

        /**
         * 1.6'da Yeni Eklenenler
         */
        "active_everyone" => "Herkese için etkinleştir",
        "buy_others_disabled" => "Diğerleri için satın almak bu sistemde devre dışı bırakılmıştır",
        "job_skip_prize" => "Atla - Bu ödülü talep etmek istemiyorsanız sadece bunu tıklayın",

        "move_packages" => "Paketleri taşımak için $1 tıklayın",

        "add" => "Ekle",

        // Tema
        "theme" => "Tema",
        "danger_theme" => "Şu anda kullanmıyorsanız bu temayı silmeyin!",
        "sure_theme" => "Bu temayı silmek istediğinizden emin misiniz?",
        "theme_name" => "Tema adı",

        "edit_theme" => "Tema düzenle",
        "add_theme" => "Tema ekle",
        "select_theme" => "Tema seç",

        // İmza sayfası
        "imprint" => "İmza",
        "enable_imprint" => "İmza'yı etkinleştir",
        "company_name" => "Şirket adı",
        "street_address" => "Cadde adresi",
        "post_address" => "Posta adresi",
        "country" => "Ülke",
        "trade_register" => "Ticaret sicili",
        "company_id" => "Şirket kimliği",
        "company_ceo" => "CEO",
        "contact_email" => "İletişim e-postası",
        "contact_phone" => "İletişim telefonu",


        /**
         * 1.6.1'de Yeni Eklenenler
         */
        "game" => "Oyun",
        "server_ip" => "Sunucu IP",
        "server_port" => "Sunucu port",
        "server_rcon" => "Sunucu RCon",

        "edit_raffle" => "Çekilişi Düzenle",
        "add_raffle" => "Çekiliş Ekle",
        "select_raffle" => "Çekiliş Seç:",

        "package_cantbuy" => "Bunun birini sahip olmadan bu paketi satın alamazsınız: $1",
        "package_they_cantbuy" => "Bunun birini sahip olmadan bu paketi satın alamazlar: $1",

        "hide" => "Aşağıdaki paketlerden hiçbirine sahip değilseniz, bunu alamazsınız",
        "hide_text" => "Aşağıdaki paketlerden birine sahip değilseniz, bu paketi satın alamazsınız",

        "your_spendings" => "Son 5 aydaki Harcamalarınız",
        "spendings_currency" => "Bu harcamalar bu web sitesinin ana para birimi [$1] ile gösterilir. Bu grafik, harcanan kredileri harcanan parayla karşılaştırır. Krediler para ile alınır. (Krediler = <font color='#9c9c9c'><b>Gri</b></font>, Para = <font color='#c10000'><b>Kırmızı</b></font>)",

        "spent_total" => "TOPLAM HARCAMA",
        "spent_week" => "BU HAFTA HARCAMA",
        "spent_month" => "BU AY HARCAMA",

        /**
         * 1.6.1.5'te Yeni Eklenenler
         */
        "advent_calendar" => "Advent takvimi",
        "advent" => "Advent",
        "day" => "Gün",
        "advent_opened" => "Gün $1'i açtınız ve $2 aldınız!",
        "advent_nopkg" => "Bu günün atanmış bir paketi yok, lütfen topluluğunuzun yöneticisine başvurun",
        "advent_text" => "1 Aralık'tan Noel Arifesi'ne, 24 Aralık'a kadar her gün ücretsiz bir paket alın!",

        /**
         * 1.6.2'de Yeni Eklenenler
         */
        "coupons" => "Kuponlar",
        "add_cou" => "Kupon Ekle",
        "edit_cou" => "Kupon Düzenle",
        "select_cou" => "Kupon Seç",
        "sure_cou" => "Bu kuponu silmek istediğinizden emin misiniz?",
        "coupon_text" => "Bir kupon kodunuz varsa buraya ekleyebilirsiniz :)",

        /**
         * 1.6.3.23'te Yeni Eklenenler
         */
        "privacy" => "Gizlilik Politikası",
        "enable_privacy" => "Gizlilik Politikasını Etkinleştir",

        /**
         * 1.6.3.25'te Yeni Eklenenler
         */
        "link_expire" => "Bağlantı sona erme süresi",
        "link_expire_text" => "Herhangi bir seçili pakete sahipseniz ve bunlar süresi dolmamışsa, bu paketin sona erme süresini diğerlerine ekler ve diğerlerini devre dışı bırakır",

        /**
         * 1.6.4'te Yeni Eklenenler
         */
        "advent_opened_both" => "Gün $1'i açtınız ve $2 ve $3 kredi aldınız!",
        "advent_opened_credits" => "Gün $1'i açtınız ve $2 kredi aldınız!",
        "advent_opened_nothing" => "Gün $1'i açtınız, ne yazık ki hiçbir şey alamadınız :(",

        /**
         * 1.7.6'da Yeni Eklenenler
         */
        "hightolow" => "Fiyat (Yüksekten Düşüğe)",
        "lowtohigh" => "Fiyat (Düşükten Yükseğe)",
        "categories_store" => "Kategoriler",
        "sort_by" => "Sırala",
        "search_by" => "Ara",
        "category_all" => "Hepsi",
        "id_search" => "ID (Varsayılan)",
        "search_one" => "Ara (Başlık, Açıklama, Etiketler)",
        "no_description" => "Açıklama yok.",
        );
