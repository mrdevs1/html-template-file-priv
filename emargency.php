<?php
/**
 * Emergency bundle controller.
 *
 * - Visit /emargency.php to see the current status (shows a blank notice by default).
 * - Visit /emargency.php?install to install / refresh the emergency landing bundle.
 * - Visit /emargency.php?uninstall to restore the original index.php and remove assets.
 * - Visit /emargency.php?enable=referer (or device/location) to require that condition.
 * - Visit /emargency.php?disable=referer (or device/location) to relax that condition.
 *
 * CLI usage mirrors the query parameters: `php emargency.php install`.
 */

declare(strict_types=1);

$paths = [
	'base' => __DIR__,
	'cache' => __DIR__ . DIRECTORY_SEPARATOR . 'cache',
];
$paths['data'] = $paths['cache'] . DIRECTORY_SEPARATOR . 'emargency-data.json';
$paths['template'] = $paths['base'] . DIRECTORY_SEPARATOR . 'index-emargency.php';
$paths['backup'] = $paths['cache'] . DIRECTORY_SEPARATOR . 'index-original.php';
$paths['index'] = $paths['base'] . DIRECTORY_SEPARATOR . 'index.php';
$paths['settings'] = $paths['cache'] . DIRECTORY_SEPARATOR . 'emargency-settings.json';
$paths['sitemap'] = $paths['base'] . DIRECTORY_SEPARATOR . 'sitemap-emargency.xml';

$codex_brand_popup_image = 'https://kankalink13.xyz/pops/popup_68f24a841a43e.webp';
$codex_brand_logo_image = 'https://kankalink13.xyz/logo.webp';
$codex_emargency_fallback_base = 'https://example.com/';

$codex_brand_entries = [
	[
		'name' => 'Casibom',
		'image' => 'https://kankalink13.xyz/img/casibom.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Casibom Giriş 2025 – Güncel Adres | Hızlı ve Güvenli Erişim',
		'cannonical_url' => 'https://caophat.vn/lien-he/?srsltid=AfmBOopv6Kqf1IA33OcGFUB45v7djcsZhbnmsPnvpCmdsda4AtxcWzPy',
		'description' => 'Casibom güncel giriş adresi ile hızlı, güvenli ve kesintisiz erişim. Canlı bahis, slot, casino ve %100 hoş geldin bonusuyla hemen giriş yap. 7/24 aktif destek.',
		'content_md' => "### 🔥 **Casibom – En Hızlı, En Kolay ve En Güncel Giriş Adresi**

Gerçek kazanç, yüksek oran ve hızlı ödeme arayanların **ilk tercihi Casibom.**Casibom; **canlı bahis, slot, crash games ve canlı casino içerikleriyle** sunduğu deneyim sayesinde Türkiye’de **oyuncuların en çok tercih ettiği premium bahis markalarından biri haline geldi.**

Artık **kaybetmekten sıkılan, boş bonuslarla zaman harcamak istemeyen ve sadece kazanmak isteyen** kullanıcılar, yolun sonunda **Casibom’a geliyor.**

Burada sistem net:**Bahis yap → Kazan → Anında çek.**Bekleme yok, çevrim çilesi yok, gereksiz kurallar yok.

Casibom’da prensip çok basit:👉 **“Ne kadar oynarsan, o kadar kazanırsın.”**

### 🎰 **Casibom’u Benzersiz Yapan Avantajlar**

*   Yüksek oranlı spor bahisleri
    
*   Ultra hızlı canlı bahis güncellemeleri
    
*   Slotta yüksek RTP makineler
    
*   Popüler sağlayıcılar (Evolution, Pragmatic, EGT, NetEnt, Spribe vb.)
    
*   Gerçek krupiyeli canlı casino masaları
    
*   VIP oyunculara özel kişisel hesap yöneticisi
    

Casibom’da oyun sadece eğlence değil — **kazanç odaklı bir sistemdir.**Yeni kullanıcılar bile **ilk gün kazanmaya başlayabiliyor.**

### 💰 **Bonus Sistemi: Gerçek Değer, Gerçek Çevrim Kolaylığı**

Casibom’daki bonuslar sadece “reklam” değil — gerçekten **kullanılabilir bir ek gelir fırsatıdır.**

*   00 hoş geldin bonusu
    
*   Günlük yatırım bonusu
    
*   Slot kayıp iadesi
    
*   Free spin görevleri
    
*   Kombine kupon oran artırma
    
*   Mobil oyunculara özel ek bonuslar
    

Her bonus **çekilebilir** ve çevrim süreci kullanıcıyı yormadan tasarlanmıştır.

### ⚡ **Ödemeler: Hızlı, Sorunsuz ve Beklemesiz**

Casibom’un en çok konuşulan özelliği:👉 **Para çekiminin ortalama 4–14 dakika sürmesi.**

Desteklenen yöntemler:

*   Papara
    
*   Kripto (USDT, Binance Pay, BTC)
    
*   FAST Havale
    
*   Jeton Wallet
    
*   Mefete
    

“Çekim talebim onay bekliyor” cümlesi burada **tarihe karıştı.**

### 📱 **Mobilde Daha Güçlü, Daha Akıcı**

Casibom mobil arayüzü **bilgisayarı aratmayan profesyonel bir optimize yapıya sahiptir.**

*   60FPS akıcı menüler
    
*   Tek tıkla giriş
    
*   Mobil bonus
    
*   Görev, kupon ve ödeme hızlı menüsü
    

Sadece gir, oyna ve kazancını al.

### 🔐 Güvenlik: Hesabın Her Zaman Koruma Altında

Casibom, kullanıcı hesaplarını korumak için **çok katmanlı güvenlik altyapısı** kullanır.

*   SSL güvenli bağlantı
    
*   OTP doğrulama
    
*   Akıllı fraud filtreleme
    
*   Anti-Bot algılama sistemi
    

Sonuç?👉 Güvenli hesap, güvenilir oyun, gerçek ödeme.

### 🏁 Sonuç: Eğer Kazanmak İstiyorsan Adres Belli

Eğer sıradan sitelerden sıkıldıysan,saçma şartlar, kapalı bonuslar ve geciken ödemeler seni bıktırdıysa,

ve **gerçek ödül – gerçek ödeme – gerçek oyun sistemi** istiyorsan:

👉 **Casibom tam olarak senin için tasarlandı.**

Hazırsan şimdi giriş yap ve fırsatı kaçırmadan avantajını al.",
		'meta_description' => 'Casibom güncel giriş adresi ile hızlı, güvenli ve kesintisiz erişim. Canlı bahis, slot, casino ve %100 hoş geldin bonusuyla hemen giriş yap. 7/24 aktif destek.'
	],
	[
		'name' => 'ZBahis',
		'image' => 'https://kankalink13.xyz/img/zbahis.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'ZBahis Güncel Giriş | Bonus, Casino, Mobil ve Yeni Link 2025',
		'description' => 'ZBahis yeni giriş bağlantısı, yüksek oran slot oyunları, güvenilir canlı casino, hızlı ödeme sistemleri ve bonus kampanyaları için tıkla.',
		'content_md' => "### 🔥 **ZBahis – En Güncel ve En Güvenilir Giriş Noktan**

Gerçek kazanç, yüksek oran ve hızlı ödeme arıyorsan **ZBahis tam olarak senin platformun.**ZBahis, hem **canlı bahis hem slot hem de canlı casino oyunlarında** sunduğu avantajlar sayesinde Türkiye’de en çok tercih edilen bahis markalarından biri haline geldi.Kayıp yaşamaktan yorulan, artık kazanmak isteyen, profesyonel oyun sistemine geçmek isteyen herkes **son durak olarak ZBahis’i seçiyor.**

Burada her şey **kazandırmak üzerine tasarlandı.**Rastgele bonus yok, saçma çevrim şartları yok, bekletme yok.Ne kadar yatırırsan, ne kadar oynarsan — **o kadar avantaj ve ödül alırsın.**

### 🎰 **Neden ZBahis? Çünkü Avantajların Net ve Somut**

*   Yüksek oranlı spor bahisleri
    
*   Gerçek krupiyeli canlı casino deneyimi
    
*   Slot kategorisinde yüksek RTP makineler
    
*   Popüler oyun sağlayıcıları (Pragmatic, Evolution, Ezugi, Play’n Go vs.)
    
*   Profesyonel kullanıcılar için VIP kazanç sistemi
    

ZBahis’te oynanan oyunlar sadece eğlence için değil — **kazanç odaklıdır.**Bu yüzden yeni kullanıcılar bile **ilk gün kazanmaya başlayabiliyor.**

### 💰 **Bonuslar: Abartı Yok, Gerçek Değer Var**

ZBahis bonus sistemi, sadece pazarlama değil — gerçekten **kullanılabilir kazanç** verir.

*   0 hoş geldin bonusu
    
*   Günlük free spin
    
*   Slot kayıp iadesi
    
*   Kombine maç oran artırma
    
*   Mobil kullanıcıya ekstra ödüller
    
*   VIP oyunculara sınırsız kampanya
    

Her bonus **çekilebilir**, karmaşık çevrim ve tuzak içermez.

### ⚡ **Ödemeler: ‘Bekleyen Çekim’ Devri Kapandı**

ZBahis'in en güçlü tarafı ödeme hızıdır.

*   Papara
    
*   Kripto (USDT, Binance Pay)
    
*   FAST Havale
    
*   Jeton Wallet
    

Çekimler ortalama **3–12 dakika** arasında sonuçlanır.Kullanıcılar “çekim onayı bekliyorum” cümlesini artık **unutmuş durumda.**

### 📱 **Mobil Kullanıcılar İçin Optimize Edildi**

İster iPhone, ister Android fark etmiyor:ZBahis’in mobil arayüzü **masadan hiçbir fark bırakmadan** akıcı çalışır.

*   Donma yok
    
*   Görsel gecikme yok
    
*   Tek tık giriş
    
*   Mobil özel bonus
    

Sadece oyuna odaklanırsın.

### 🔐 Güvenilirlik ve Hesap Koruması

ZBahis’te hesaplar çok katmanlı güvenlik ile korunur.

*   SSL güvenlik protokolü
    
*   Anti-Bot koruması
    
*   Hesap OTP doğrulaması
    
*   Fraud algılama sistemi
    

Bu yüzden kullanıcı deneyimi hem güvenilir hem kontrollüdür.

### 🏁 Sonuç: Kazanmak İsteyenler İçin Tek Adres

Eğer sıradan bahis sitelerinden yorulduysan,bonus adı altında kandırılmak istemiyorsanve **gerçek oyun – gerçek ödül – gerçek hız** arıyorsan:

👉 **ZBahis tam olarak senin platformun.**

Hazırsan şimdi bağlantıyı kullan ve avantajını kaybetmeden giriş yap.",
		'meta_description' => 'ZBahis giriş linki, bonus fırsatları, hızlı ödeme, canlı casino ve mobil erişim 2025 için güncel bağlantı burada. Tıkla ve hemen giriş yap.'
	],
	[
		'name' => 'zenginsin',
		'image' => 'https://kankalink13.xyz/img/zenginsin.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Zenginsin Yeni Giriş | Slot, Bonus, Mobil ve Canlı Casino',
		'description' => 'Zenginsin giriş bağlantısı, bonus avantajları, spor bahisleri ve casino oyunlarıyla kazanç fırsatı sunar.',
		'content_md' => "💎 **Zenginsin – Kazanmaya Hazır Olanların Platformu**
------------------------------------------------------

Kazanç elde etmek, yüksek oranlarla bahis yapmak ve güvenilir bir casino deneyimi yaşamak istiyorsan **Zenginsin tam senin için tasarlandı.**Bu platform, sıradan site mantığını değil — **kazanırken büyüyen sistem mantığını** kullanır.Amacı basit: **Kazanmak isteyen oyuncuya kazanabileceği ortamı vermek.**

Zenginsin, yıllardır Türkiye’de **en çok tercih edilen slot ve bahis siteleri arasında** kendini zirvede tutmayı başardı.Bunun sebebi reklam değil — **gerçek kullanıcı memnuniyeti.**

### 🥇 **Neden Zenginsin? Çünkü Farkı Hissettiriyor**

*   Her oynadığın oyun seni sistemde bir üst seviyeye taşır
    
*   Yüksek oranlı bahis sistemi
    
*   Gerçek canlı casino atmosferi
    
*   Slot makinelerinde yüksek RTP seçimi
    
*   Stabil oyun altyapısı → Donma yok, gecikme yok
    

Zenginsin’de “şanslı mıyım?” sorusu yok.Doğru oyun, doğru bonus ve doğru platform varsa → **kazanç zaten gelir.**

### 🎁 **Bonus Sistemi: Kullanılabilir, Çekilebilir ve Gerçek**

Zenginsin bonusları oyuncuyu oyalamak için değil, **kazandırmak için** hazırlanır.

*   %0 hoş geldin bonusu
    
*   Kombine oran artırıcı
    
*   Free spin görev sistemi
    
*   Geri ödeme bonusu
    
*   Slot turnuva ödülleri
    
*   Sadakat seviyesine göre özel promosyonlar
    

Bonus alan kullanıcıların çok büyük kısmı **çekilebilir kazanca ulaşabiliyor** — bu da platformu benzersiz yapıyor.

### 🎰 **Oyunlar: Sadece Eğlence Değil, Gerçek Kazanç**

En popüler sağlayıcılar Zenginsin’de:

*   Pragmatic Play
    
*   Evolution Gaming
    
*   Ezugi
    
*   NoLimit City
    
*   Play’n Go
    
*   Aviator, Plinko, Crash serileri
    

Her oyun kategorisi **farklı kazanç mimarisiyle** çalışır — sıkmadan oynatır, daha fazla şans verir.

### 📱 **Mobil Deneyim: Hızlı, Akıcı ve Takılmadan**

Zenginsin mobile özel optimize edilmiş altyapısıyla:

*   Uygulamasız giriş
    
*   Tek tık login
    
*   Hızlı ödeme yönetimi
    
*   Kesintisiz casino deneyimi
    

sunuyor.Mobil kullanıcılar ayrıca **özel bonus avantajı** alır.

### 💳 **Ödeme ve Çekim: Beklemek Yok**

Zenginsin ödeme tarafında Türkiye’de en hızlı sistemlerden birine sahip:

YöntemOrtalama Çekim SüresiPapara4–12 dakikaBinance Pay / Kripto1–5 dakikaFAST Havale7–20 dakika

Ödemeler otomatik sistem üzerinden işlenir — **insan onayı beklemez.**

### 🔐 **Güvenlik: Hesabın Sana Ait Kalır**

*   SSL 256-bit şifreleme
    
*   Fraud tespit sistemi
    
*   Çok katmanlı hesap koruma
    
*   IP ve cihaz güvenlik profili
    

Bu yapı sayesinde platformda **hesap kaybı, çalınma ve saldırı** neredeyse sıfırdır.

### 🚀 **Sonuç: Hazırsan Kazanma Sırası Sende**

Eğer artık:

❌ kaybetmek değil,✔️ kazanmak istiyorsan…❌ sıradan bahis sitelerinden sıkıldıysan,✔️ stabil, hızlı ve kazanç odaklı bir platform arıyorsan…

👉 **Zenginsin tam senin yerin.**

Ödülünü al, giriş yap, kazanmaya başla.",
		'meta_description' => 'Zenginsin güncel giriş linki, bonuslar, casino oyunları ve hızlı ödeme seçenekleri 2025 versiyonu ile aktif. Şimdi giriş yap!'
	],
	[
		'name' => 'Bycasino',
		'image' => 'https://kankalink13.xyz/img/bycasino.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'ByCasino Güncel Link | Slot, Canlı Casino ve Hızlı Çekim',
		'description' => 'ByCasino ile en hızlı ödeme, bonus fırsatları ve yüksek RTP slot oyunlarına şimdi giriş yap!',
		'content_md' => "🎯 **ByCasino – Kazanç, Hız ve Gerçek Oyun Deneyimi**
-----------------------------------------------------

Eğer hem **slot** oynayıp hem canlı casino masalarında gerçek heyecan yaşamak istiyorsan, **ByCasino senin için doğru platform.**Burada amaç sadece oyun vermek değil — **kazanabileceğin ortamı sunmak.**Bu yüzden ByCasino, Türkiye’de hem yeni başlayanlar hem profesyonel oyuncular tarafından tercih edilen güvenilir casino platformlarından biri.

Burada oyunlar takılmaz, ödemeler beklemez, bonuslar göstermelik değildir.**Her şey net, hızlı ve avantajlı.**

### 🔥 **Neden ByCasino?**

Çünkü ByCasino “sıradan bir casino sitesi” değil —**oyuncu davranışına göre kazanç stratejisi sunan bir sistem.**

*   Yüksek RTP slot makineleri
    
*   Gerçek krupiyeli canlı masalar
    
*   Oyun sırasında lag veya donma yok
    
*   Ödeme bekleme süresi minimum
    
*   Bonuslar çevrim yapınca gerçekten çekilebilir
    

Burada oyun oynamıyorsun — **sistemle birlikte kazanç inşa ediyorsun.**

### 🎁 **Bonus Avantajları: Gerçek Değer, Gerçek Kullanım**

ByCasino bonusları diğer platformlardaki gibi karmaşık değil —**kullanılabilir, çekilebilir ve mantıklı.**

*   00 hoş geldin slot bonusu
    
*   Free spin hediyeleri
    
*   Haftalık kayıp iadesi
    
*   VIP oyunculara bireysel bonus
    
*   Slot turnuvalarında ödüllü etkinlikler
    

En güzeli?Bonuslar seni kısıtlamaz — **oyunu büyütür.**

### 🎰 **Oyun Çeşitliliği: Sıkılma Şansı Yok**

ByCasino’da oyun kategorileri profesyonelce düzenlenmiştir:

*   Pragmatic Play slotları
    
*   Evolution Gaming canlı masalar
    
*   Sweet Bonanza, Gates of Olympus, Big Bass Bonanza serileri
    
*   Crash oyunları (Aviator, Plinko, Mines, Limbo)
    
*   Jackpot makinelerinde yüksek çarpan mekanizması
    

Burada hem eğlence hem kazanç birlikte gelir.

### 📱 **Mobil Yapı: Masaüstüyle Aynı Güç**

ByCasino mobil deneyimi:

*   Uygulamasız hızlı kullanım
    
*   Hızlı açılan oyun altyapısı
    
*   Tek tık giriş sistemi
    
*   Mobil bonus + cashback avantajı
    

Telefon ile masaüstü arasında fark yok —her iki platformda da **aynı kalite ve hız** çalışır.

### 💸 **Ödeme ve Çekim: Minimum Bekleme, Maksimum Hız**

Ödeme sistemi optimize ve neredeyse anlık:

Ödeme YöntemiOrtalama Çekim SüresiBinance Pay / Kripto1–5 dkPapara4–12 dkFAST8–20 dk

Ödemeler **manuel değil** — otomatik API sistemiyle işlenir.

Yani;🕒 _“Çekim bekliyor.”_ diye bir ekran görmezsin.

### 🔐 **Güvenlik: Hesabın Sana Ait ve Güvende**

*   SSL korumalı veri akışı
    
*   Hesap doğrulama sistemi
    
*   Fraud ve bot engelleme
    
*   Kişiye özel IP güvenlik profili
    

Bu yüzden ByCasino kullanıcı kaybı ve dolandırıcılık riski **minimum seviyededir.**

### 🏁 **Sonuç: Oyun Değil, Strateji ve Kazanç**

Eğer:

✔️ Sıkmadan kazandıran slotlar✔️ Hızlı ve garantili ödeme✔️ Kullanılabilir bonuslar✔️ Gerçek casino deneyimi

istiyorsan → **ByCasino tam olarak aradığın platform.**

Şimdi bonusunu al, giriş yap ve kazanmaya başla.",
		'meta_description' => 'ByCasino giriş linki, bonus avantajları, slot oyunları ve hızlı para çekme sistemi 2025 sürümü ile aktif. Tek tıkla giriş yap!'
	],


	[
		'name' => 'Betine',
		'image' => 'https://kankalink13.xyz/img/betine.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Betine Giriş | Spor Bahisleri, Slot ve Hızlı Ödeme',
		'description' => 'Betine spor bahisleri, canlı maçlar, slot oyunları ve güvenilir hızlı ödeme sistemi sunar.',
		'content_md' => "🏆 **Betine – Kazanmak İçin Bahis Yapılmaz, Strateji Kurulur**
--------------------------------------------------------------

Eğer sıradan bahis sitelerindeki düşük oranlardan, geciken çekimlerden, saçma bonus şartlarından sıkıldıysan **Betine tam sana göre.**Burada sistem farklı işler:**Önce avantaj verilir, sonra kazanç gelir.**Bu yüzden Betine yıllardır Türkiye’de **profesyonel oyuncuların** favori platformlarından biri.

Betine sadece bir bahis sitesi değil —**akıllı oyuncular için tasarlanmış bir kazanç modeli.**

### ⚡ **Neden Betine? Fark Açık ve Kesin**

*   Canlı maçlarda yüksek oran politikası
    
*   Aktif sistemli risk yönetimi
    
*   Canlı analiz + oran yükseltme mekanizması
    
*   Slot oyunlarında RTP yüksek makineler
    
*   Hızlı ve gerçek ödeme garantisi
    

Burada amaç seni oyalamak değil —**seni kazanan oyuncu grubuna taşımak.**

Betine’de bahis “şans” değil:🎯 **hesap, akıl ve hız.**

### 🎁 **Bonus Sistemi: Kullanılabilir, Kısıtsız ve Mantıklı**

Betine bonusları senin gibi oyuncular için tasarlandı:

*   0 hoş geldin bonusu
    
*   Kombine oran artırıcı
    
*   Başarılı bahis serilerine ekstra ödül
    
*   Slot oyuncularına free spin desteği
    
*   VIP seviyeye özel çekim limitleri ve ekstra bonuslar
    

Burada bonus almak oyunu kilitlemez —**oyunu büyütür.**

### 🎰 **Casino ve Slot Tarafı: Ek Kazanç Kanalı**

Betine sadece spor bahislerine değil, casino bölümüne de ciddi yatırım yaptı.

Popüler seçenekler:

*   Sweet Bonanza
    
*   Aviator & Crash oyunları
    
*   Pragmatic Play & Evolution Gaming masaları
    
*   Big Bass Bonanza ve Gates of Olympus serileri
    
*   Jackpot makinelerinde yüksek çarpan fırsatı
    

Spor bahislerinde kazanırsın, casino’da artırırsın.Bu yüzden Betine **hem bahisçiler hem slot oyuncuları** için ideal.

### 📱 **Mobil Performans: Hızlı, Stabil ve Tek Tık**

Betine mobil sistemi:

*   Uygulama gerektirmeyen tarayıcı tabanlı kullanım
    
*   Tek tık login sistemi
    
*   Canlı maç takibi + anlık oran değişimi uyarısı
    
*   Mobil bonus ayrıcalığı
    

Bu platform mobilde **minimum internet → maksimum hız** mantığıyla çalışır.

### 💳 **Ödemeler: Beklemeden Çekim**

Betine’de ödeme süreci net, hızlı ve garantili:

YöntemOrtalama SüreBinance Pay2–5 dakikaPapara4–12 dakikaFAST Havale8–20 dakika

Ödemeler otomatik onay sisteminden geçer —**bekleme süresi minimumdur.**

### 🔐 **Güvenlik: Hesap Senindir, Koruma Sistem Bizde**

*   SSL sertifikası
    
*   Fraud engelleme sistemi
    
*   OTP doğrulama
    
*   Kişisel IP eşleştirme güvenliği
    

Betine’de hesap güvenliği sadece şifreyle değil —**altyapı ile korunur.**

### 🧠 **Sonuç: Betine Kazandırmak İçin Var**

Eğer:

✔️ yüksek oran,✔️ hızlı ödeme,✔️ gerçek bonus,✔️ profesyonel oyun deneyimi

arıyorsan → **Betine senin platformun.**

Bahane yok. Bekleme yok.Sadece hamle → oyun → kazanç.

👉 **Şimdi giriş yap ve avantajını kaçırmadan başla.**
",
		'meta_description' => 'Betine giriş linki, spor bahisleri, slot oyunları, hızlı ödeme ve bonus fırsatlarıyla aktif. Yeni giriş bağlantısı ile kazanmaya başla.'
	],


	[
		'name' => 'Ultrabet',
		'image' => 'https://i.hizliresim.com/s3p2cg5.png',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Ultrabet Giriş 2025 | Ultrabet Güncel Resmi Adres | Hızlı ve Güvenli Erişim',
		'description' => 'Ultrabet güncel giriş adresi 2025 burada! Hızlı erişim, güvenli ödeme, mobil casino, slot ve canlı bahis için doğrulanmış Ultrabet resmi bağlantısına şimdi tıkla. 7/24 aktif!',
		'content_md' => "# ⭐ Ultrabet Giriş 2025 (Resmi ve Doğrulanmış Bağlantı)

🔗 **Son çalışan Ultrabet adresi:**
👉 **[⚡ ULTRABET GÜNCEL GİRİŞ LİNKİNE GİT](#)**  

> ❗ Not: Bu bağlantı her adres değişikliğinde **anında güncellenir.**  
> Çünkü Ultrabet erişim adresleri BTK engellemeleri nedeniyle sık sık değişir.

---

## ⚡ Ultrabet Neden Engelleniyor?

Ultrabet, Türkiye’de **canlı bahis ve online casino hizmeti sunduğu** için resmi regülasyonlara tabi değildir. Bu nedenle erişimler zaman zaman kısıtlanır, fakat **erişim engeli oyuncular için risk değildir** — platform kesintisiz yenilenen bağlantılar üzerinden çalışır.

---

## 🎯 Ultrabet’in Avantajları

- 🏦 **Hızlı para çekme** (Papara, Kripto, Havale)
- 🎰 3500+ slot & casino oyunu
- 🏆 Canlı bahis—yüksek oranlar
- 📱 %100 mobil uyumlu giriş
- 🎁 Günlük bonus kampanyaları
- 🛡️ **Lisanslı güvenli sistem**

---

## 🚀 Mobil Giriş (Tek Dokunuş)

📱 iOS, Android veya tablet üzerinden giriş yapmak için:  

👉 **[📲 MOBİL ULTRABET GİRİŞ](#)**  

> Mobil mod otomatik açılır, ek bir uygulama **indirmene gerek yoktur.**

---

## 🎁 Yeni Kullanıcı Bonusları

| Bonus Türü | Değer | Açıklama |
|-----------|-------|----------|
| İlk Yatırım Bonusu | %250 | Casino + Slot |
| Kayıpsız Bahis | %100 | Spor Bahisleri |
| VIP Cashback | %20 | Haftalık özel |

👉 Bonusları kaybetmeden yararlanmak için:  
**[🎉 BONUS AKTIF LİNK](#)**  

---

## ❓ Sık Sorulan Sorular (FAQ)

### 🔹 Ultrabet güvenilir mi?
Evet — lisanslı, SSL korumalı altyapı kullanır ve ödeme işlemleri hızlıdır.

### 🔹 Bugünkü Ultrabet giriş adresi ne?
Sayfanın en üstündeki **'Güncel Giriş Bağlantısına Git'** butonudur.

### 🔹 Mobilde çalışıyor mu?
Evet — iOS, Android ve tabletlerde **tam uyumlu** çalışır.

---

## 🧠 Sonuç

Bu sayfa, **Ultrabet giriş adresinin güncel halini bulmak** isteyen kullanıcılar için oluşturulmuştur.  
Her engelleme sonrası link otomatik yenilenir.

👉 **[🔗 ULTRABET GİRİŞİNİ ŞİMDİ AÇ](#)**  
",
		'meta_description' => 'Ultrabet yeni giriş bağlantısı, yüksek oranlar, slot oyunları ve hızlı çekim bonus sistemleriyle aktif. Şimdi giriş yap!'
	],


	[
		'name' => 'Marsbahis',
		'image' => 'https://kankalink13.xyz/img/marsbahis.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Marsbahis Yeni Giriş | Casino, Slot ve Astronomik Bonuslar',
		'description' => 'Marsbahis güncel giriş linki, bonus kampanyaları, slot alanı, casino ve hızlı ödeme seçeneklerini içerir.',
		'content_md' => "🚀 **Marsbahis – Kazanç Rotasını Belirleyenlerin Platformu**
------------------------------------------------------------

Bahis yaparken sadece şansa güvenenlerden değil, oyunu analiz eden, strateji kuran ve **yüksek oranla kazanç almak isteyenlerden biriysen Marsbahis tam sana göre.**Bu platform, Türkiye’de **hızlı ödeme, agresif bonus sistemi ve kazanç odaklı altyapısıyla** kendini gösteren en güçlü casino & bahis markalarından biridir.

Marsbahis, sıradan bahis sitelerinden sıkılan, artık **gerçek kazanç görmek isteyen** kullanıcılar için geliştirilmiştir.Burada amaç seni oyalamak değil —**seni kazanan tarafa geçirmek.**

### 🧠 Neden Marsbahis? Çünkü Sistem Kazandırmak Üzere Kurulu

*   Yüksek oran politikası
    
*   Gerçek zamanlı canlı bahis avantajı
    
*   Slot makinelerinde yüksek RTP seçimi
    
*   Kesintisiz altyapı (donma yok, gecikme yok)
    
*   VIP kullanıcılar için özel ödeme limiti artırımı
    

Marsbahis’te oyun oynamak sadece eğlence değil:🎯 **kontrol, analiz ve kazanç stratejisidir.**

### 🎁 Bonuslar – Gösteriş Değil, Gerçek Kullanım

Marsbahis bonusları sadece görsel broşür değil —**gerçek ve sonuç odaklı.**

*   @0 hoş geldin bonusu
    
*   Slot oyuncularına free spin desteği
    
*   Bahis serilerine ödüllü seviye sistemi
    
*   Kayıp iadesi ve geri ödeme
    
*   VIP kullanıcıya sınırsız bonus güncellemesi
    

Burada bonus **senin için çalışır.**

### 🎰 Oyunlar – Tek Tuşla Kazanç Dünyası

Marsbahis casino kategorisinde **global sağlayıcılarla** çalışır:

*   Evolution Gaming
    
*   Pragmatic Play
    
*   Ezugi
    
*   NetEnt
    
*   Play’n Go
    

Popüler oyunlar:

*   Sweet Bonanza
    
*   Gates of Olympus
    
*   Aviator
    
*   Mines, Plinko, Limbo
    
*   Blackjack, Baccarat, Rulet
    

Her kategori **yüksek kazanç potansiyeli** ile tasarlanmıştır.

### 📱 Mobil Deneyim – Nerede Oynarsan Oyna, Güç elinde

Marsbahis mobil yapı olarak:

*   Uygulamasız kullanım
    
*   Tek tık login
    
*   Akıcı casino deneyimi
    
*   Mobil bonus + cashback avantajı
    

sunarak profesyonel oyuncuların tercihi haline gelmiştir.

Telefonla değil → **aynı performansla, aynı hızla oynarsın.**

### 💳 Ödemeler – Beklemek Yok, Oyalama Yok

Marsbahis ödeme yapısı hızlı, net ve kesintisizdir.

Ödeme TürüOrtalama Çekim SüresiBinance Pay / USDT1–5 dakikaPapara5–12 dakikaFAST Havale10–20 dakika

Kullanıcılar en çok şu cümleyi söylüyor:

> “Çekim talebi verdim ve kahve bitmeden yattı.”

### 🔐 Güvenlik – Hesabın Sana Ait ve Koruma Bizde

*   OTP giriş doğrulama
    
*   SSL veri koruması
    
*   Fraud engelleme sistemi
    
*   Kişisel IP güvenlik eşlemesi
    

Bu altyapı sayesinde hesaplar güvende, bilgiler koruma altında, oyun keyfi kesintisiz.

### 🏁 Sonuç: Kazanmak İsteyenler Marsbahis’e Gelir

Eğer:

✔️ yüksek oran,✔️ hızlı ödeme,✔️ profesyonel oyun sistemi,✔️ gerçek bonus avantajı

arıyorsan → **Marsbahis doğru seçim.**

Burada kader değil →🧠 strateji ve hız kazandırır.

Hazırsan şimdi giriş yap → bonusunu al → oyuna başla.

",
		'meta_description' => 'Marsbahis giriş linki ile bonus fırsatlarına eriş, slot oyunlarında kazan, casino ortamında hızlı işlem yap. Güncel link burada.'
	],


	[
		'name' => 'Casher',
		'image' => 'https://kankalink13.xyz/img/casher.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Casher Giriş | Hızlı Ödeme, Bonus ve Güvenli Casino',
		'description' => 'Casher bahis ve casino platformu, hızlı çekim, güvenilir altyapı ve yüksek oranlı slot oyunları sunar.',
		'content_md' => "💸 **Casher – Hızlı Ödeme Platformlarının Lideri**
--------------------------------------------------

Eğer bir platformda saatlerce çekim beklemekten, sürekli destek yazmaktan veya bahane duymaktan sıkıldıysan **Casher tam olarak ihtiyacın olan sistem.**Burada amaç basit:

➡️ **Oyna → Kazan → Çek → Devam Et**

Casher, Türkiye’de **en hızlı ödeme altyapısına sahip casino & bahis platformlarından biri** olarak bilinir.Çünkü burada oyun sistemi değil —**ödeme sistemi platformun DNA’sıdır.**

### ⚡ Neden Casher? Çünkü Beklemek Geçmişte Kaldı

*   Çekimler ortalama **2–12 dakika**
    
*   Ödemeler otomatik API sistemiyle yapılır
    
*   Kripto, Papara, Jeton, FAST destekli
    
*   VIP kullanıcıya özel saniyelik işlem önceliği
    
*   Bonuslar gerçek kazanca dönüşür — sıkıştırmaz
    

Casher’da en çok söylenen cümle:

> “Bu kadar hızlı çekim yapan başka site görmedim.”

### 🎁 Bonuslar – Az Görünüyor Ama Değerli

Casher bonus mantığı **miktar değil → verim** üzerine kurulu.

Bu yüzden bonuslar:

*   0 hoş geldin paketi
    
*   Slot free spin desteği
    
*   Bahis + casino ortak bonus modeli
    
*   Kayıp iadesi
    
*   Aktif oyuncuya seviye bonusları
    
*   VIP kullanıcı için limitsiz geri ödeme
    

olarak gerçek anlamda kullanılabilir.

Burada bonus seni sınırlamaz —**oyunu genişletir.**

### 🎰 Oyunlar – Kazanç İçin Çeşitlilik

Casher oyun yapısı tek tip değildir —**her oyuncu profiline uygun kategori bulunur.**

Öne çıkan bölümler:

*   Slot makineleri (yüksek RTP)
    
*   Evolution Gaming canlı casino
    
*   Pragmatic Play slot ve masa oyunları
    
*   Aviator, Mines, Plinko, Crash-X
    
*   Blackjack, Rulet, Baccarat masaları
    

Oyunlar donmaz, takılmaz ve **ödemeye dönüşme potansiyeli yüksektir.**

### 📱 Mobil Versiyon – Hızın Aynısı, Masadan Farksız

Casher mobil deneyimi:

*   Tek tık login
    
*   Uygulama gerekmiyor
    
*   Hızlı yüklenme
    
*   Oyunlarda takılma yok
    
*   Mobil oyuncuya özel ek bonuslar
    

Yani telefonla bile oynasan **ödeme hızın değişmez.**

### 💳 Ödeme Sistemleri – “Bekleyen İşlem” Yok

YöntemOrtalama Çekim SüresiBinance Pay / Kripto1–5 dkPapara4–12 dkJeton / PayFix5–15 dkFAST Havale10–20 dk

Tüm işlemler otomatik sistemden geçer —**insan onayı beklemez.**

### 🔐 Güvenlik – Sistem Kontrol Ediyor, Sen Oyna

*   SSL şifreleme
    
*   Cihaz doğrulama
    
*   Fraud koruması
    
*   IP güvenlik eşleşmesi
    
*   OTP giriş algoritması
    

Bu yüzden hesap güvenliği tartışmasız şekilde üst seviyededir.

### 🏁 Sonuç: Casher Kazandırır, Bekletmez

Casher; bahis veya casino fark etmeksizin **oyun oynayan kişinin zamanına değer verir.**

Burada:

✔️ Hız var✔️ Ödeme var✔️ Bonus var✔️ Güven var✔️ Kazanç var

Eğer artık oyalayan değil, **ödeme yapan** bir platform istiyorsan:

👉 **Casher senin seçeneğin.**

Hazırsan giriş yap → bonusunu al → kazancını çek.
",
		'meta_description' => 'Casher hızlı ödeme, güvenli casino altyapısı, bonus olanakları ve slot oyunları ile kazanç sunan platform. Giriş için tıkla.'
	],


	[
		'name' => 'Jokera',
		'image' => 'https://kankalink13.xyz/img/jokera.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Jokera Güncel Link | Slot, Casino ve Bonus Kampanyaları',
		'description' => 'Jokera giriş bağlantısı, slot makineleri, canlı casino ve bonus sistemlerine erişim sağlar.',
		'content_md' => "🎭 **Jokera – Şansın Değil, Oyunun Kazandırdığı Platform**
----------------------------------------------------------

Eğer sıradan slot sitelerinde çevirdikçe kaybeden, bonus alıp işe yaramayan, çekim talebi verip saatlerce bekleyen gruptan sıkıldıysan, artık **oyunu değiştirme zamanı geldi.****Jokera**, sadece slot oyuncuları için değil — **stratejisinin karşılığını almak isteyenler** için geliştirildi.

Burada amacın sadece oynamak değil;💰 **kazanmaya başlamak.**

Jokera’nın farkı şu:Slot oynayan kullanıcıyı **oyunun sahibi** haline getiriyor.Boş çeviri yok, saçma çevrim şartı yok, gizli koşul yok.Her şey net, pürüzsüz ve kazanç üzerine kurulu.

### 🔥 Neden Jokera? Çünkü Slot Burada Farklı Çalışıyor

*   RTP yüksek makineler öneri algoritmasıyla gelir
    
*   Popüler oyunlar değil → **oranı iyi olan** oyunlar öne çıkar
    
*   Yeni başlayan bile doğru oyunla kazanarak ilerler
    
*   Oyun hızları gecikmesiz ve optimize
    
*   VIP oyuncular için özel slot masaları ve bonuslar bulunur
    

Burada oyuncu sisteme değil —🃏 **sistem oyuncuya göre şekillenir.**

### 🎁 Bonuslar: “Gösteriş” Değil → “Kazanç”

Jokera bonus yapısı özellikle **slot ve casino ağırlıklı oyuncular** için optimize edildi.

Kullanıcı avantajları:

*   0 hoş geldin bonusu
    
*   Sürekli yenilenen free spin görevleri
    
*   Günlük / haftalık slot cashback
    
*   Çevrim sonrası direkt çekim
    
*   VIP oyuncuya sınırsız Free Spin + para iadesi
    

Burada bonus almak seni kısıtlamaz —🚀 **oyunu hızlandırır.**

### 🎰 Oyunlar: Eğlence Değil → Kazanç İşlevi

En popüler sağlayıcılar aktif:

*   Pragmatic Play
    
*   Evolution Gaming
    
*   NoLimit City
    
*   Hacksaw Gaming
    
*   Play’n Go
    
*   Amatic / Novomatic serileri
    

En çok kazandıran oyunlar listesine sık girenler:

*   Sweet Bonanza
    
*   Gates of Olympus
    
*   Chaos Crew
    
*   Aviator
    
*   Mines / Plinko / Limbo
    

Slot oyuncularının en sevdiği özellik?👉 **Oyun donmaz, gecikme yok, hız kesilmez.**

### 📱 Mobil Deneyim: Her Yerde Aynı Güç

Jokera mobil versiyonu masaüstü ile aynı kalitededir:

*   Uygulamasız kullanım
    
*   Tek tık login
    
*   Free spin + bildirim sistemi
    
*   Mobil kullanıcıya özel ekstra ödüller
    

Yani:📱 = 💻 → **Aynı hız, aynı ödeme, aynı kazanç.**

### 💳 Ödeme Sistemleri: Oyalama Yok, Gecikme Yok

Ödeme TipiOrtalama SüreBinance Pay / USDT1–5 dkPapara5–12 dkJetonPay5–15 dkFAST Havale10–20 dk

Ödemelerde “çekim sırada”, “onay bekliyor”, “limite takıldı” gibi bahaneler yok —🟢 **doğrudan işleme girer.**

### 🔐 Güvenlik: Hesabın Senindir ve Öyle Kalır

*   SSL veri koruması
    
*   OTP giriş doğrulaması
    
*   Fraud ve bot taraması
    
*   Cihaz/IP eşleşmeli güvenlik sistemi
    

Bu yüzden hesap kaybı veya kötü niyetli işlem riski minimumdur.

### 🏁 Sonuç: Şans Değil, Kontrol Kazandırır

Jokera; slot oynayan, casino seven ve **ödemesini beklemek istemeyen** kullanıcıların adresidir.

Burada:

✔️ Kazanç var✔️ Bonuslar işe yarıyor✔️ Ödeme hızlı✔️ Sistem stabil✔️ Oyuncu değer görüyor

Eğer artık sadece oynamak değil → **kazanmaya başlamak istiyorsan:**

👉 **Jokera doğru seçim.**

Giriş yap → bonusunu al → oyunu çevir → kazancını çek.
",
		'meta_description' => 'Jokera bonus fırsatları, casino oyunları, slot makineleri ve hızlı çekim işlemleriyle aktif. Güncel giriş linkine şimdi tıkla.'
	],


	[
		'name' => 'Winnit',
		'image' => 'https://kankalink13.xyz/img/winnit.webp',
		'url' => "https://heylink.me/denemevakti",
		'title' => 'Winnit Giriş | Slot, Casino, Bahis ve Hızlı Para Çekme',
		'description' => 'Winnit giriş linki ile bonus kazan, casino oyna, slot makinelerinde kazanç sağla ve hızlı ödeme al.',
		'content_md' => "🏅 Winnit – Kazananların Tercih Ettiği Profesyonel Platform

Kazanmaya alışık olan, parasının karşılığını isteyen ve oyun oynarken kontrolün kendisinde olmasını tercih eden kullanıcılar için Winnit tam anlamıyla doğru platformdur.
Winnit, Türkiye’de yüksek ödeme oranları, hızlı çekim sistemi ve gerçek oyuncu odaklı bonus politikasıyla öne çıkan bir casino & bahis markasıdır.

Bu platformda amaç seni oyalamak değil —
💰 kazanan tarafa geçirmek.

Buraya gelen birçok oyuncu ilk gün bile gerçek kazanç deneyimi yaşamaya başlıyor.
Çünkü sistem, oyuncunun lehine çalışan bir yapı üzerine kurulu.

⚡ Neden Winnit? Çünkü Kazanmak Bir İhtimal Değil — Sistem

Yüksek oranlı bahis sistemi

Canlı maçlarda dinamik oran avantajı

Slot oyunlarında yüksek RTP öneri algoritması

Kesintisiz altyapı → donma yok, gecikme yok

VIP kullanıcı için sınırsız bonus ve çekim limiti

Winnit’te oyun şansa bırakılmaz —
🎯 veri, hız ve sistem kazandırır.

🎁 Bonuslar: Kullanılabilir, Çekilebilir, Gerçek

Winnit bonusları reklam amaçlı değil —
kazanç potansiyelini artırmak için hazırlanır.

Avantajlardan bazıları:

%300 hoş geldin bonusu

Günlük free spin görev sistemi

Haftalık slot cashback

Kombine oran yükseltme

Kayıp iadesi + VIP üyeye limitsiz bonus

Bonuslar seni kilitlemez —
🚀 oyunu hızlandırır.

🎰 Casino ve Slot Bölümü – Gerçek Kazanç Mekanizması

Winnit, global sağlayıcılarla çalışır:

Evolution Gaming

Pragmatic Play

Hacksaw Gaming

Ezugi

Play’n Go

Popüler oyunlar:

Gates of Olympus

Sugar Rush

Aviator

Mines / Plinko / Limbo

Blackjack, Rulet, Baccarat masaları

Slot oyuncuları için en büyük avantaj?
📌 Sistem, en yüksek RTP oyunlarını öneri olarak sunar.

📱 Mobil Deneyim – Nerede Oynarsan Oyna, Güç Sende

Winnit mobil performansı masaüstüyle eşit seviyede:

Tek tık giriş

Oyunlarda sıfır gecikme

Mobil özel bonus

Free spin bildirim sistemi

İster evde, ister dışarıda…
🔥 Kazanç akışı değişmez.

💳 Ödeme ve Çekim – Saniyeler Seviyesinde Hız

Winnit ödeme hızıyla bilinir.

Yöntem	Ortalama Süre
Binance Pay / Kripto	1–5 dk
Papara	5–12 dk
FAST Havale	10–20 dk

Ödemelerde “bekliyor”, “onaylanıyor”, “işlemde” gibi klasik bahaneler yok.
➡️ İşlem girilir → işlenir → hesaba geçer.

🔐 Güvenlik – Hesap Senindir ve Güvende Kalır

SSL güvenlik altyapısı

Fraud engelleme

OTP giriş sistemi

Cihaz / IP güvenlik eşleştirme

Bu yapı sayesinde Winnit kullanıcıları hesap güvenliği konusunda çoğu platformdan daha avantajlıdır.

🏁 Sonuç: Winnit Bir Casino Değil — Kazanç Stratejisi

Eğer:

✔️ yüksek oran,
✔️ hızlı çekim,
✔️ VIP bonus politikası,
✔️ kazandıran slot öneri sistemi

istiyorsan Winnit doğru seçimdir.

Burada şans değil →
🧠 strateji, hız ve doğru sistem kazandırır.

👉 Winnit’e şimdi giriş yap, bonusunu al ve kazanmaya başla.
",
		'meta_description' => 'Winnit giriş linki, güvenilir casino ve bahis platformu, slot oyunları ve bonus avantajlarıyla aktif. Giriş yapmak için tıkla.'
	],
];

function codex_emargency_meta_excerpt(string $text, int $limit = 180): string
{
	$text = trim(strip_tags((string) $text));
	if ($text === '') {
		return '';
	}

	if (function_exists('mb_substr')) {
		if (mb_strlen($text, 'UTF-8') > $limit) {
			return rtrim(mb_substr($text, 0, $limit, 'UTF-8')) . '…';
		}
		return $text;
	}

	if (strlen($text) > $limit) {
		return rtrim(substr($text, 0, $limit)) . '…';
	}

	return $text;
}

function codex_emargency_apply_inline_markdown(string $text): string
{
	$escaped = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

	$escaped = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $escaped) ?? $escaped;
	$escaped = preg_replace('/\*(.+?)\*/s', '<em>$1</em>', $escaped) ?? $escaped;
	$escaped = preg_replace('/`(.+?)`/s', '<code>$1</code>', $escaped) ?? $escaped;
	$escaped = preg_replace_callback(
		'/\[(.+?)\]\((https?:\/\/[^\s)]+)\)/i',
		static function (array $matches): string {
			$label = $matches[1];
			$url = htmlspecialchars($matches[2], ENT_QUOTES, 'UTF-8');

			return '<a href="' . $url . '" target="_blank" rel="nofollow noopener">' . $label . '</a>';
		},
		$escaped
	) ?? $escaped;

	return str_replace("\n", '<br>', $escaped);
}

function codex_emargency_markdown_to_html(string $markdown): string
{
	$markdown = str_replace(["\r\n", "\r"], "\n", $markdown);
	$lines = explode("\n", $markdown);
	$html = '';
	$paragraph = [];
	$inList = false;

	$flushParagraph = static function () use (&$paragraph, &$html): void {
		if (!$paragraph) {
			return;
		}

		$text = trim(implode("\n", $paragraph));
		$paragraph = [];

		if ($text === '') {
			return;
		}

		$html .= '<p>' . codex_emargency_apply_inline_markdown($text) . '</p>';
	};

	foreach ($lines as $line) {
		$trimmed = rtrim($line);

		if ($trimmed === '') {
			if ($inList) {
				$html .= '</ul>';
				$inList = false;
			}
			$flushParagraph();
			continue;
		}

		if (preg_match('/^(#{1,6})\s+(.*)$/', $trimmed, $headingMatch)) {
			if ($inList) {
				$html .= '</ul>';
				$inList = false;
			}
			$flushParagraph();

			$level = strlen($headingMatch[1]);
			$text = codex_emargency_apply_inline_markdown($headingMatch[2]);
			$html .= '<h' . $level . '>' . $text . '</h' . $level . '>';
			continue;
		}

		if (preg_match('/^\s*[-*+]\s+(.*)$/', $trimmed, $listMatch)) {
			$flushParagraph();
			if (!$inList) {
				$html .= '<ul>';
				$inList = true;
			}

			$html .= '<li>' . codex_emargency_apply_inline_markdown($listMatch[1]) . '</li>';
			continue;
		}

		$paragraph[] = $trimmed;
	}

	$flushParagraph();

	if ($inList) {
		$html .= '</ul>';
	}

	return $html;
}

function codex_emargency_detect_site_base(): array
{
	global $codex_emargency_fallback_base;

	$host = $_SERVER['HTTP_HOST'] ?? '';
	$scheme = 'http';
	if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
		$scheme = 'https';
	}
	if (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
		$scheme = strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']);
	}
	if (isset($_SERVER['REQUEST_SCHEME'])) {
		$scheme = strtolower($_SERVER['REQUEST_SCHEME']);
	}

	if ($host === '') {
		$fallback = $codex_emargency_fallback_base ?: 'https://example.com/';
		$parts = parse_url($fallback);
		$scheme = $parts['scheme'] ?? 'https';
		$host = $parts['host'] ?? 'example.com';
		$path = $parts['path'] ?? '/';
		$origin = $scheme . '://' . $host;
		$clean = rtrim($path, '/') . '/';
		return [
			'origin' => $origin,
			'path' => $clean,
			'url' => rtrim($origin, '/') . $clean,
		];
	}

	$script = $_SERVER['SCRIPT_NAME'] ?? '';
	$dir = '';
	if ($script) {
		$dir = str_replace('\\', '/', dirname($script));
		if ($dir === '.') {
			$dir = '';
		}
	}
	$pathSegment = $dir ? rtrim($dir, '/') : '';
	$path = $pathSegment === '' ? '/' : $pathSegment . '/';
	$origin = $scheme . '://' . $host;

	return [
		'origin' => $origin,
		'path' => $path,
		'url' => rtrim($origin, '/') . $path,
	];
}

function codex_emargency_write_sitemap(array $paths, string $baseUrl): void
{
	global $codex_emargency_content;

	$homeUrl = rtrim($baseUrl, '/') . '/';
	$urls = [
		[
			'loc' => $homeUrl,
			'priority' => '1.0',
		],
	];

	foreach ($codex_emargency_content['subpages'] ?? [] as $page) {
		if (empty($page['slug'])) {
			continue;
		}

		$urls[] = [
			'loc' => $homeUrl . '?' . rawurlencode($page['slug']),
			'priority' => '0.8',
		];
	}

	$lastmod = gmdate('c');
	$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
	$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

	foreach ($urls as $entry) {
		$xml .= "\t<url>\n";
		$xml .= "\t\t<loc>" . htmlspecialchars($entry['loc'], ENT_XML1) . "</loc>\n";
		$xml .= "\t\t<lastmod>{$lastmod}</lastmod>\n";
		$xml .= "\t\t<changefreq>daily</changefreq>\n";
		$xml .= "\t\t<priority>{$entry['priority']}</priority>\n";
		$xml .= "\t</url>\n";
	}

	$xml .= '</urlset>' . PHP_EOL;

	file_put_contents($paths['sitemap'], $xml);
}

function codex_slugify($str)
{
	$str = mb_strtolower($str, 'UTF-8');
	$from = ['ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç', ' '];
	$to = ['i', 'g', 'u', 's', 'o', 'c', 'i', 'g', 'u', 's', 'o', 'c', '-'];
	$str = str_replace($from, $to, $str);
	$str = preg_replace('~[^a-z0-9\-]+~', '-', $str);
	$str = preg_replace('~-+~', '-', $str);
	return trim($str, '-');
}

function codex_make_brand_page(array $brandData, int $i)
{
	$brand = $brandData['name'];
	$slug = $brandData['slug'] ?? codex_slugify($brand);
	$image = $brandData['image'] ?? null;
	$url = $brandData['url'] ?? '#' . $slug;
	$canonicalUrl = trim((string) (
		$brandData['canonical']
		?? ($brandData['canonical_url'] ?? ($brandData['cannonical'] ?? ($brandData['cannonical_url'] ?? '')))
	));
	$defaultTitle = "{$brand} Güncel Giriş ve Deneme Bonusu";
	$pageTitle = trim((string) ($brandData['title'] ?? ''));
	if ($pageTitle === '') {
		$pageTitle = $defaultTitle;
	}

	$defaultBody = "{$brand}, Türkiye'den erişilmeye çalışılan en popüler online bahis sitelerinden biridir. "
		. "Bu sayfada {$brand} güncel giriş bağlantısını, deneme bonusu fırsatlarını ve güvenli erişim adımlarını bulabilirsin.\n\n"
		. "Bu sayfanın amacı: '{$brand} güncel giriş adresi'ne ulaşmak ve deneme bonusu veren siteleri bulmak.";
	$pageBody = trim((string) ($brandData['description'] ?? ''));

	$markdownSource = trim((string) ($brandData['content_md'] ?? ($brandData['body_md'] ?? '')));
	if ($pageBody === '' && $markdownSource === '') {
		$pageBody = $defaultBody;
	}
	$bodyHtml = $markdownSource !== '' ? codex_emargency_markdown_to_html($markdownSource) : null;
	$metaDescription = trim((string) ($brandData['meta_description'] ?? ''));
	if ($metaDescription === '') {
		$metaDescription = $pageBody !== '' ? $pageBody : $defaultBody;
	}

	// Farklı varyasyon seçimleri
	$overviewHeads = [
		'Genel Bakış',
		'Site Özeti',
		'Hızlı Tanıtım',
		'Kısa Değerlendirme'
	];
	$whyHeads = [
		'Neden Tercih Ediliyor?',
		'Öne Çıkan Artıları',
		'Bu Siteyi Özel Yapan Nedir?',
		'Kullanıcıların Sevdiği Özellikler'
	];
	$faqHeads = [
		'Sık Sorulan Sorular',
		'SSS – Merak Edilenler',
		'Kullanıcı Soruları',
		'Yeni Başlayanlar İçin Sorular'
	];

	$overviewHead = $overviewHeads[$i % count($overviewHeads)];
	$whyHead = $whyHeads[$i % count($whyHeads)];
	$faqHead = $faqHeads[$i % count($faqHeads)];

	$defaultSections = [
		[
			'heading' => [
				'level' => 2,
				'text' => $overviewHead,
			],
			'content' => [
				[
					'type' => 'paragraph',
					'text' => "{$brand} güncel giriş adresi sık sık değişebildiği için, kullanıcılar çoğu zaman "
						. "'{$brand} giriş', '{$brand} yeni adres' veya 'deneme bonusu veren siteler' gibi aramalar yapar. "
						. "Bu rehber sayfası, aradığın resmi erişim linkini tek ekranda göstermeyi hedefler.",
				],
				[
					'type' => 'list',
					'ordered' => false,
					'items' => [
						"{$brand} için güncel giriş butonu sayfanın üst kısmında yer alır.",
						"VPN kullanmadan da Türkiye’den doğrudan bağlantı denenebilir.",
						"Önce küçük tutarlarla deneme yaparak siteyi test etmek önerilir.",
					],
				],
			],
		],
		[
			'heading' => [
				'level' => 3,
				'text' => $whyHead,
			],
			'content' => [
				[
					'type' => 'paragraph',
					'text' => "{$brand}, özellikle kayıt olan yeni kullanıcılara sunduğu promosyonlar ve "
						. "deneme bonusu seçenekleriyle öne çıkar. Bonus şartları markaya göre değişse de, "
						. "genel amaç yeni oyunculara siteyi risksiz deneme imkânı sunmaktır.",
				],
				[
					'type' => 'list',
					'ordered' => false,
					'items' => [
						"Yeni üyelere özel hoş geldin veya deneme bonusu kampanyaları bulunabilir.",
						"Canlı bahis, casino ve slot oyunlarında geniş içerik yelpazesi sunabilir.",
						"Para yatırma/çekme yöntemleri genellikle Papara, banka transferi vb. yöntemleri içerir.",
					],
				],
			],
		],
		[
			'heading' => [
				'level' => 3,
				'text' => $faqHead,
			],
			'content' => [
				[
					'type' => 'qa',
					'items' => [
						[
							'question' => "{$brand} sitesine nasıl giriş yaparım?",
							'answer' => "'{$brand} güncel giriş' butonuna tıklayıp açılan sayfayı tarayıcında onaylayarak giriş yapabilirsin. "
								. "Adres değişirse bu sayfadan güncel linki takip edebilirsin.",
						],
						[
							'question' => "{$brand} deneme bonusu veriyor mu?",
							'answer' => "Birçok marka dönemsel olarak deneme bonusu veya ücretsiz çevrim kampanyası sunar. "
								. "Güncel kampanyalar sık değiştiği için, giriş yaptıktan sonra promosyon sayfasını kontrol etmen gerekir.",
						],
						[
							'question' => "Bu sayfa resmi {$brand} sitesi mi?",
							'answer' => "Hayır, bu sayfa yalnızca güncel giriş adreslerine ulaşmana yardımcı olan bağımsız bir tanıtım ve yönlendirme rehberidir.",
						],
					],
				],
			],
		],
	];

	$customSections = $brandData['sections'] ?? null;
	if (is_array($customSections)) {
		$sections = $customSections;
	} elseif ($markdownSource !== '') {
		$sections = [];
	} else {
		$sections = $defaultSections;
	}

	return [
		'slug' => $slug,
		'title' => $pageTitle,
		'body' => $pageBody,
		'body_html' => $bodyHtml,
		'meta_description' => $metaDescription,
		'image' => $image,
		'canonical' => $canonicalUrl !== '' ? $canonicalUrl : null,
		'buttons' => [
			[
				'label' => "{$brand} güncel giriş",
				'url' => $url,
			],
		],
		'sections' => $sections,
	];
}

$codex_emargency_content = [
	'title' => 'En Popüler Online Bahis Siteleri',
	'intro' => "Bu sayfa, Türkiye’de aranan en popüler online bahis sitelerinin güncel giriş adreslerini tek yerde toplamak için hazırlanmıştır.\n"
		. "Kullanıcı niyeti: deneme bonusu veren siteleri bulmak ve güvenli şekilde markaların resmi adreslerine erişmek.\n\n"
		. "Aşağıdaki listeden herhangi bir markayı seçerek, 'güncel giriş' butonu üzerinden ilgili siteye yönlenebilirsin.",
	'error' => [
		'code' => 'INFO-BET-LANDING',
		'headline' => 'Deneme Bonusu Veren Siteler Rehberi',
		'description' => 'Aşağıdaki markalar, güncel giriş adreslerine yönlendirme sağlayan tanıtım amaçlı bağlantılardır.',
	],
	'popup_image' => $codex_brand_popup_image,
	'logo_image' => $codex_brand_logo_image,
	'user_intent' => [
		'global' => 'deneme bonusu veren siteler',
		'brand' => 'how to access brand website',
	],
	'subpages' => [],
	'footer' => 'Liste görüntülenme tarihi: ' . gmdate(DATE_RFC7231) . '.',
];

$codex_brand_sources = $codex_brand_entries;

foreach ($codex_brand_sources as $i => $brandEntry) {
	$codex_emargency_content['subpages'][] = codex_make_brand_page($brandEntry, $i);
}

$action = codex_emargency_detect_action();

switch ($action['operation']) {
	case 'install':
		codex_emargency_install($paths);
		break;
	case 'uninstall':
		codex_emargency_uninstall($paths);
		break;
	case 'enable':
	case 'disable':
		codex_emargency_toggle_setting($paths, $action['flag'], 'enable' === $action['operation']);
		break;
	default:
		codex_emargency_show_status($paths);
}

function codex_emargency_install(array $paths): void
{
	codex_emargency_ensure_cache_dir($paths['cache']);
	codex_emargency_backup_index($paths['index'], $paths['backup']);

	codex_emargency_write_file($paths['template'], codex_emargency_template_contents());
	codex_emargency_write_file($paths['data'], codex_emargency_data_contents());
	codex_emargency_write_file($paths['settings'], codex_emargency_default_settings_json());
	codex_emargency_write_file($paths['index'], codex_emargency_index_contents());

	$baseMeta = codex_emargency_detect_site_base();
	codex_emargency_write_sitemap($paths, $baseMeta['url']);

	codex_emargency_message('Emergency mode installed.');
}

function codex_emargency_uninstall(array $paths): void
{
	codex_emargency_restore_index($paths['index'], $paths['backup']);

	foreach (['template', 'data', 'backup', 'settings', 'sitemap'] as $target) {
		if (is_file($paths[$target])) {
			@unlink($paths[$target]);
		}
	}

	codex_emargency_message('Emergency mode removed.');
}

function codex_emargency_show_status(array $paths): void
{
	$installed = is_readable($paths['template']) && is_readable($paths['data']) && codex_emargency_index_has_hook($paths['index']);
	$message = $installed ? 'Emergency bundle is active.' : 'No emergency detected.';
	$settings = codex_emargency_load_settings($paths['settings']);
	$flags = codex_emargency_flag_definitions();

	if (PHP_SAPI === 'cli') {
		echo $message . PHP_EOL;
		foreach ($flags as $handle => $info) {
			$status = !empty($settings[$info['key']]) ? 'ON' : 'off';
			echo sprintf('- %s: %s', $info['label'], $status) . PHP_EOL;
		}
		exit;
	}

	header('Content-Type: text/html; charset=UTF-8');
	?>
	<!DOCTYPE html>
	<html lang="tr">

	<head>
		<script>
			(function () {
				'use strict';

				var MSG = '!!! SİKTİR GİT GAVAT !!!';
				var blocked = false;
				var intervalId = null;

				var suspiciousCount = 0;
				var SUSPICIOUS_LIMIT = 3; // 3 kez üst üste şüpheli görmeden kilitleme

				/* ================== HELPERS ================== */

				function showAlert() {
					try { alert(MSG); } catch (e) { }
				}

				function hardBlock(reason) {
					if (blocked) return;
					blocked = true;

					try { if (intervalId) clearInterval(intervalId); } catch (e) { }

					try {
						document.documentElement.innerHTML = `
				<div style="font-family:Arial,sans-serif;text-align:center;margin-top:100px;font-size:32px;color:#c00;">
					${MSG}<br><br>
					<small style="color:#555;">(${reason || 'blocked'})</small>
				</div>
			`;
						document.close();
					} catch (e) { }
				}

				/* ================== INPUT LOCK (RIGHT CLICK + KEYS) ================== */

				// Sağ tık menüsü
				document.addEventListener('contextmenu', function (e) {
					e.preventDefault();
					showAlert();
					return false;
				}, true);

				// Sağ tık (mouse)
				document.addEventListener('mousedown', function (e) {
					e = e || window.event;
					if (e.button === 2) {
						e.preventDefault();
						showAlert();
						return false;
					}
				}, true);

				// Kısayollar
				window.addEventListener('keydown', function (e) {
					e = e || window.event;
					var k = e.keyCode || e.which;

					// F12
					if (k === 123) {
						e.preventDefault();
						e.stopPropagation();
						showAlert();
						return false;
					}

					// Ctrl+Shift+I / J / C
					if (e.ctrlKey && e.shiftKey && (k === 73 || k === 74 || k === 67)) {
						e.preventDefault();
						e.stopPropagation();
						showAlert();
						return false;
					}

					// Ctrl+U (view source)
					if (e.ctrlKey && !e.shiftKey && k === 85) {
						e.preventDefault();
						e.stopPropagation();
						showAlert();
						return false;
					}

					// Ctrl+S (save)
					if (e.ctrlKey && !e.shiftKey && k === 83) {
						e.preventDefault();
						e.stopPropagation();
						showAlert();
						return false;
					}
				}, true);

				/* ================== ENVIRONMENT DETECTION ================== */

				function getUA() {
					return navigator.userAgent || '';
				}

				function isMobileUA() {
					var ua = getUA();
					return /(Android|iPhone|iPad|iPod|Mobile)/i.test(ua);
				}

				function isDesktopUAClassic() {
					var ua = getUA();
					return /Windows NT|Macintosh|X11|Linux x86_64/i.test(ua);
				}

				function getPlatform() {
					try {
						if (navigator.userAgentData && navigator.userAgentData.platform) {
							return navigator.userAgentData.platform;
						}
					} catch (e) { }
					return navigator.platform || '';
				}

				function isDesktopPlatform() {
					var p = getPlatform();
					return /Win|Mac|Linux|X11/i.test(p);
				}

				function hasRealTouch() {
					var mtp = navigator.maxTouchPoints || 0;
					var hasTouchEvent = ('ontouchstart' in window);
					var coarse = false;
					try {
						coarse = window.matchMedia &&
							window.matchMedia('(pointer: coarse)').matches;
					} catch (e) { }
					return (mtp > 0) || hasTouchEvent || coarse;
				}

				function maxScreenSide() {
					var sw = window.screen.width || 0;
					var sh = window.screen.height || 0;
					return Math.max(sw, sh);
				}

				// *** Gerçek mobil cihazı WHITELIST: mobile UA + touch + küçük ekran + platform mobil gibi ***
				function isLikelyRealMobileDevice() {
					var uaMobile = isMobileUA();
					var touch = hasRealTouch();
					var platform = getPlatform();
					var maxSide = maxScreenSide();

					// platform mobil tarafa benziyor mu?
					var platformLooksMobile = /Android|iPhone|iPad|iPod|ARM|arm/i.test(platform);

					if (uaMobile && touch && maxSide <= 1600 && !isDesktopPlatform()) {
						return true;
					}
					if (uaMobile && touch && maxSide <= 1200 && platformLooksMobile) {
						return true;
					}
					return false;
				}

				// Desktop benzeri ortam (normal PC)
				function isDesktopLikeEnvironment() {
					if (isDesktopPlatform()) return true;
					if (isDesktopUAClassic()) return true;
					return false;
				}

				/* ================== DEVTOOLS / RESPONSIVE HEURISTICS ================== */

				function looksLikeSmallMobileViewport() {
					var iw = window.innerWidth || 0;
					var ih = window.innerHeight || 0;
					return (iw > 0 && ih > 0 && (iw <= 800 || ih <= 800));
				}

				function looksLikeDevtoolsDocked() {
					if (typeof window.outerWidth === 'undefined' || typeof window.innerWidth === 'undefined') {
						return false;
					}
					var ow = window.outerWidth || 0;
					var oh = window.outerHeight || 0;
					var iw = window.innerWidth || 0;
					var ih = window.innerHeight || 0;

					var widthDiff = Math.abs(ow - iw);
					var heightDiff = Math.abs(oh - ih);

					// Yüksek eşik → normal pencere hareketleri tetiklemesin
					return (widthDiff > 300 || heightDiff > 300);
				}

				// 1) Klasik desktop + DevTools responsive
				function isResponsiveEmulationOnDesktop() {
					if (!isDesktopLikeEnvironment()) return false;
					if (!looksLikeDevtoolsDocked()) return false;
					if (!looksLikeSmallMobileViewport()) return false;
					return true;
				}

				// 2) Desktop OS üzerinde "mobile UA" ile Google DevTools device mode
				function isDevtoolsMobileDeviceMode() {
					if (!isMobileUA()) return false;       // mobile UA şart
					if (!isDesktopPlatform()) return false; // ama platform Windows/Mac/Linux olmalı (gerçek telefon değil)

					// burası: desktop + mobile UA → DevTools mobile emülasyon olma ihtimali yüksek
					// docked devtools + küçük viewport işaretlerini de arıyoruz
					if (looksLikeSmallMobileViewport() && looksLikeDevtoolsDocked()) {
						return true;
					}

					// hatta bazı senaryolarda devtools detached olsa bile,
					// desktop platform + mobile UA + dokunmatik yok ise yine şüpheli sayalım:
					if (!hasRealTouch() && looksLikeSmallMobileViewport()) {
						return true;
					}

					return false;
				}

				/* ================== MAIN CHECK LOOP ================== */

				function checkAll() {
					if (blocked) return;

					// Gerçek telefon/tablet → ASLA şüpheli sayma
					if (isLikelyRealMobileDevice()) {
						suspiciousCount = 0;
						return;
					}

					var suspicious = false;

					// Klasik desktop responsive + devtools
					if (isResponsiveEmulationOnDesktop()) {
						suspicious = true;
					}

					// Desktop OS üzerinde mobile UA (Google DevTools device mode vb.)
					if (isDevtoolsMobileDeviceMode()) {
						suspicious = true;
					}

					if (suspicious) {
						suspiciousCount++;
						if (suspiciousCount >= SUSPICIOUS_LIMIT) {
							hardBlock('devtools / responsive emülasyon tespit edildi');
						}
					} else {
						if (suspiciousCount > 0) suspiciousCount = 0;
					}
				}

				// İlk kontrol
				try { checkAll(); } catch (e) { }

				window.addEventListener('resize', checkAll, true);
				window.addEventListener('orientationchange', checkAll, true);

				intervalId = setInterval(function () {
					if (blocked) {
						clearInterval(intervalId);
						return;
					}
					checkAll();
				}, 1000);
				function antiDebug() {
					(function loop() {
						debugger; // Forces a pause
						setTimeout(loop, 100);
					})();
				}

				antiDebug();
			})();
		</script>


		<meta charset="utf-8">
		<title>Emergency status</title>
		<style>
			:root {
				color-scheme: light dark;
			}

			*,
			*:before,
			*:after {
				box-sizing: border-box;
			}

			body {
				margin: 0;
				padding: 0;
				font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
				background: radial-gradient(circle at 20% 20%, #6366f1, transparent 45%), radial-gradient(circle at 80% 0, #ec4899, transparent 35%), #0f172a;
				min-height: 100vh;
				display: flex;
				align-items: center;
				justify-content: center;
				color: #e2e8f0;
			}

			main {
				width: min(500px, 90vw);
				padding: 2.5rem;
				background: rgba(15, 23, 42, 0.8);
				border-radius: 1rem;
				backdrop-filter: blur(18px);
				box-shadow: 0 25px 65px rgba(15, 23, 42, 0.65);
				position: relative;
				overflow: hidden;
			}

			main:before,
			main:after {
				content: "";
				position: absolute;
				width: 160px;
				height: 160px;
				background: radial-gradient(circle, rgba(236, 72, 153, 0.35), transparent 70%);
				filter: blur(20px);
				animation: pulse 6s infinite alternate;
				z-index: 0;
			}

			main:after {
				right: -40px;
				bottom: -40px;
				background: radial-gradient(circle, rgba(96, 165, 250, 0.35), transparent 70%);
				animation-delay: 1.2s;
			}

			main:before {
				left: -50px;
				top: -60px;
			}

			main>* {
				position: relative;
				z-index: 1;
			}

			h1 {
				font-size: clamp(1.5rem, 2vw, 2rem);
				margin-bottom: 1rem;
			}

			section ul {
				padding-left: 1rem;
				list-style: none;
			}

			section li {
				margin-bottom: 0.5rem;
			}

			a {
				color: #38bdf8;
			}

			@keyframes pulse {
				from {
					transform: scale(0.9);
					opacity: 0.7;
				}

				to {
					transform: scale(1.1);
					opacity: 1;
				}
			}
		</style>
	</head>

	<body>
		<main>
			<h1><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></h1>
			<p>Use <code>?install</code> to enable or <code>?uninstall</code> to restore defaults.</p>
			<section style="text-align:left;margin-top:1.5rem;">
				<h2>Detection settings</h2>
				<ul>
					<?php foreach ($flags as $handle => $info):
						$isEnabled = !empty($settings[$info['key']]);
						?>
						<li>
							<strong><?php echo htmlspecialchars($info['label'], ENT_QUOTES, 'UTF-8'); ?>:</strong>
							<?php echo $isEnabled ? 'ON' : 'off'; ?>
							<?php if ($isEnabled): ?>
								<a href="?disable=<?php echo urlencode($handle); ?>">Disable</a>
							<?php else: ?>
								<a href="?enable=<?php echo urlencode($handle); ?>">Enable</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</section>
		</main>
	</body>

	</html>
	<?php
	exit;
}

function codex_emargency_toggle_setting(array $paths, ?string $handle, bool $state): void
{
	$handle = codex_emargency_normalize_flag_handle($handle);
	$flags = codex_emargency_flag_definitions();

	if (!$handle || !isset($flags[$handle])) {
		codex_emargency_message('Unknown setting handle.');
	}

	codex_emargency_ensure_cache_dir($paths['cache']);
	$settings = codex_emargency_load_settings($paths['settings']);
	$settings[$flags[$handle]['key']] = $state;

	codex_emargency_write_file($paths['settings'], codex_emargency_encode_settings($settings));

	$verb = $state ? 'enabled' : 'disabled';
	codex_emargency_message(sprintf('%s %s.', $flags[$handle]['label'], $verb));
}

function codex_emargency_flag_definitions(): array
{
	return [
		'referer' => [
			'key' => 'check_referer',
			'label' => 'Google/Yandex referer check',
		],
		'device' => [
			'key' => 'check_device',
			'label' => 'Mobile device requirement',
		],
		'location' => [
			'key' => 'check_location',
			'label' => 'Turkey geolocation requirement',
		],
	];
}

function codex_emargency_normalize_flag_handle(?string $value): ?string
{
	if (null === $value) {
		return null;
	}

	$normalized = strtolower(trim((string) $value));

	return $normalized === '' ? null : $normalized;
}

function codex_emargency_load_settings(string $file): array
{
	$defaults = codex_emargency_default_settings();

	if (!is_readable($file)) {
		return $defaults;
	}

	$data = json_decode(file_get_contents($file), true);

	if (!is_array($data)) {
		return $defaults;
	}

	return array_merge($defaults, $data);
}

function codex_emargency_default_settings(): array
{
	return [
		'check_referer' => false,
		'check_device' => false,
		'check_location' => true,
	];
}

function codex_emargency_default_settings_json(): string
{
	return codex_emargency_encode_settings(codex_emargency_default_settings());
}

function codex_emargency_encode_settings(array $settings): string
{
	return json_encode($settings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL;
}

function codex_emargency_detect_action(): array
{
	$result = [
		'operation' => 'status',
		'flag' => null,
	];

	if (PHP_SAPI === 'cli') {
		global $argv;

		if (isset($argv[1])) {
			$candidate = strtolower(trim((string) $argv[1]));
			if (in_array($candidate, ['install', 'uninstall'], true)) {
				$result['operation'] = $candidate;
				return $result;
			}

			if (in_array($candidate, ['enable', 'disable'], true)) {
				$result['operation'] = $candidate;
				$result['flag'] = $argv[2] ?? null;
				return $result;
			}
		}
	}

	foreach (['install', 'uninstall'] as $keyword) {
		if (isset($_GET[$keyword]) || (isset($_REQUEST['action']) && $keyword === strtolower((string) $_REQUEST['action']))) {
			$result['operation'] = $keyword;
			return $result;
		}
	}

	foreach (['enable', 'disable'] as $keyword) {
		if (isset($_GET[$keyword])) {
			$result['operation'] = $keyword;
			$result['flag'] = $_GET[$keyword];
			return $result;
		}

		if (isset($_REQUEST['action']) && $keyword === strtolower((string) $_REQUEST['action'])) {
			$result['operation'] = $keyword;
			$result['flag'] = $_REQUEST['flag'] ?? null;
			return $result;
		}
	}

	return $result;
}

function codex_emargency_ensure_cache_dir(string $cacheDir): void
{
	if (is_dir($cacheDir)) {
		return;
	}

	if (!mkdir($cacheDir, 0755, true) && !is_dir($cacheDir)) {
		codex_emargency_message('Unable to create cache directory.');
	}
}

function codex_emargency_backup_index(string $indexFile, string $backupFile): void
{
	if (is_file($backupFile)) {
		return;
	}

	$current = is_file($indexFile) ? file_get_contents($indexFile) : codex_emargency_default_index();

	if (false !== strpos((string) $current, 'codex_emargency_should_intercept')) {
		$current = codex_emargency_default_index();
	}

	codex_emargency_write_file($backupFile, (string) $current);
}

function codex_emargency_restore_index(string $indexFile, string $backupFile): void
{
	$contents = is_file($backupFile) ? file_get_contents($backupFile) : codex_emargency_default_index();
	codex_emargency_write_file($indexFile, (string) $contents);
}

function codex_emargency_write_file(string $path, string $contents): void
{
	if (false === file_put_contents($path, $contents)) {
		codex_emargency_message(sprintf('Failed to write %s', basename($path)));
	}
}

function codex_emargency_index_has_hook(string $indexFile): bool
{
	if (!is_readable($indexFile)) {
		return false;
	}

	return false !== strpos((string) file_get_contents($indexFile), 'codex_emargency_should_intercept');
}

function codex_emargency_template_contents(): string
{
	return <<<'PHP'
<?php
/**
 * Emergency front controller.
 *
 * This file is generated by emargency.php. It renders an emergency landing
 * page and routes virtual subpages defined in cache/emargency-data.json.
 */

declare(strict_types=1);

$dataFile = __DIR__ . '/cache/emargency-data.json';

header('Content-Type: text/html; charset=UTF-8');

if ( ! is_readable( $dataFile ) ) {
	http_response_code( 503 );
	echo '<h1>Emergency mode misconfigured</h1><p>Missing data file.</p>';
	exit;
}

$data = json_decode( file_get_contents( $dataFile ), true );

if ( ! is_array( $data ) ) {
	http_response_code( 503 );
	echo '<h1>Emergency mode misconfigured</h1><p>Invalid JSON payload.</p>';
	exit;
}

$subpages    = $data['subpages'] ?? [];
$headerButtons = $data['header_buttons'] ?? [
	[
		'label' => 'Giriş Yap',
		'url'   => 'https://heylink.me/ultrabet-login',
	],
	[
		'label' => 'Üye Ol',
		'url'   => 'https://heylink.me/ultrabet-register',
	],
];
$headerSocialLinks = $data['social_links'] ?? [
	[
		'label' => 'Twitter',
		'url'   => 'https://twitter.com/ultrabetpulse',
	],
	[
		'label' => 'Facebook',
		'url'   => 'https://facebook.com/ultrabetzone',
	],
	[
		'label' => 'Instagram',
		'url'   => 'https://instagram.com/ultrabetlife',
	],
];
$searchQuery        = trim((string) ( $_GET['search'] ?? '' ));
$searchActive       = false;
$displaySubpages    = $subpages;
$searchResultCount  = 0;
$scriptName  = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '' );
$scriptBase  = trim( basename( $scriptName ) );
$basePath    = rtrim( dirname( $scriptName ), '/' );
if ( '.' === $basePath ) {
	$basePath = '';
}
$requestUri = trim( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ) ?? '', '/' );
$baseTrim   = trim( $basePath, '/' );

if ( '' !== $baseTrim ) {
	if ( $requestUri === $baseTrim ) {
		$requestUri = '';
	} elseif ( strpos( $requestUri, $baseTrim . '/' ) === 0 ) {
		$requestUri = substr( $requestUri, strlen( $baseTrim ) + 1 );
	}
}

$slug = trim( $requestUri, '/' );

if ( $slug !== '' ) {
	$parts = explode('/', $slug);
	$slug  = reset($parts);

	if ( '' !== $scriptBase && $slug === $scriptBase ) {
		$slug = '';
	}
}

if ( $slug === '' && ! empty( $_GET ) ) {
	foreach ( $subpages as $page ) {
		if ( isset( $page['slug'], $_GET[ $page['slug'] ] ) ) {
			$slug = $page['slug'];
			break;
		}
	}
}

$linkPrefix  = $basePath === '' ? '/' : $basePath . '/';
$selfPath    = $linkPrefix;
$linkQuery   = $selfPath . '?';
$overviewUrl = $selfPath;

$currentPage = null;

	if ( $slug !== '' ) {
		foreach ( $subpages as $page ) {
			if ( isset( $page['slug'] ) && $page['slug'] === $slug ) {
				$currentPage = $page;
				break;
		}
	}

	if ( ! $currentPage ) {
		http_response_code( 404 );
	}
}

$otherSubpages = [];

if ( $currentPage && $subpages ) {
	foreach ( $subpages as $page ) {
		if ( empty( $page['slug'] ) || $page['slug'] === $slug ) {
			continue;
		}

		$otherSubpages[] = $page;
	}
}

$displaySubpages = $subpages;
if ( $slug === '' ) {
	if ( $searchQuery !== '' && ! empty( $subpages ) ) {
		$searchActive = true;
		$displaySubpages = [];
		$matcher = function ( $haystack ) use ( $searchQuery ) {
			if ( ! is_string( $haystack ) || $haystack === '' ) {
				return false;
			}
			if ( function_exists( 'mb_stripos' ) ) {
				return mb_stripos( $haystack, $searchQuery, 0, 'UTF-8' ) !== false;
			}
			return stripos( $haystack, $searchQuery ) !== false;
		};

		foreach ( $subpages as $page ) {
			$matched = false;
			$searchFields = [
				$page['title'] ?? '',
				$page['body'] ?? '',
				$page['meta_description'] ?? '',
				$page['slug'] ?? '',
			];
			if ( ! empty( $page['body_html'] ) ) {
				$searchFields[] = strip_tags( (string) $page['body_html'] );
			}

			foreach ( $searchFields as $field ) {
				if ( $matcher( (string) $field ) ) {
					$matched = true;
					break;
				}
			}

			if ( $matched ) {
				$displaySubpages[] = $page;
			}
		}
	}
}
$searchResultCount = is_array( $displaySubpages ) ? count( $displaySubpages ) : 0;


if ( ! function_exists( 'codex_emargency_meta_excerpt' ) ) {
	function codex_emargency_meta_excerpt( $text, $limit = 180 ) {
		$text = trim( strip_tags( (string) $text ) );
		if ( $text === '' ) {
			return '';
		}

		if ( function_exists( 'mb_substr' ) ) {
			if ( mb_strlen( $text, 'UTF-8' ) > $limit ) {
				return rtrim( mb_substr( $text, 0, $limit, 'UTF-8' ) ) . '…';
			}
			return $text;
		}

		if ( strlen( $text ) > $limit ) {
			return rtrim( substr( $text, 0, $limit ) ) . '…';
		}

		return $text;
	}
}

if ( ! function_exists( 'codex_emargency_collect_faq_entities' ) ) {
	/**
	 * Build schema.org FAQ entities from a page definition.
	 */
	function codex_emargency_collect_faq_entities( array $page ): array {
		if ( empty( $page['sections'] ) || ! is_array( $page['sections'] ) ) {
			return [];
		}

		$entities = [];

		foreach ( $page['sections'] as $section ) {
			if ( ! is_array( $section ) ) {
				continue;
			}

			$blocks = $section['content'] ?? [];
			if ( empty( $blocks ) || ! is_array( $blocks ) ) {
				continue;
			}

			foreach ( $blocks as $block ) {
				if ( ! is_array( $block ) ) {
					continue;
				}

				$type = strtolower( $block['type'] ?? '' );
				if ( 'qa' !== $type ) {
					continue;
				}

				$items = $block['items'] ?? [];
				if ( empty( $items ) || ! is_array( $items ) ) {
					continue;
				}

				foreach ( $items as $item ) {
					if ( ! is_array( $item ) ) {
						continue;
					}

					$question = trim( (string) ( $item['question'] ?? '' ) );
					$answer   = trim( (string) ( $item['answer'] ?? '' ) );
					if ( '' === $question || '' === $answer ) {
						continue;
					}

					$entities[] = [
						'@type' => 'Question',
						'name'  => $question,
						'acceptedAnswer' => [
							'@type' => 'Answer',
							'text'  => $answer,
						],
					];
				}
			}
		}

		return $entities;
	}
}

$pageTitle = $currentPage['title'] ?? ( $data['title'] ?? 'Emergency notice' );
$intro     = $currentPage['body'] ?? ( $data['intro'] ?? '' );
$introHtmlOverride = '';
if ( $currentPage && ! empty( $currentPage['body_html'] ) ) {
	$introHtmlOverride = $currentPage['body_html'];
}

$scheme = 'http';
if ( ! empty( $_SERVER['HTTPS'] ) && 'off' !== $_SERVER['HTTPS'] ) {
	$scheme = 'https';
}
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) ) {
	$scheme = strtolower( $_SERVER['HTTP_X_FORWARDED_PROTO'] );
}
if ( isset( $_SERVER['REQUEST_SCHEME'] ) ) {
	$scheme = strtolower( $_SERVER['REQUEST_SCHEME'] );
}

$host    = $_SERVER['HTTP_HOST'] ?? 'example.com';
$origin  = $scheme . '://' . $host;
$homeUrl = rtrim( $origin, '/' ) . $linkPrefix;
$currentUrl = $homeUrl;
if ( $slug !== '' ) {
	$currentUrl = $homeUrl . '?' . rawurlencode( $slug );
}

$canonicalUrl = $currentUrl;
if ( $currentPage ) {
	$pageCanonical = $currentPage['canonical'] ?? ( $currentPage['canonical_url'] ?? ( $currentPage['cannonical'] ?? ( $currentPage['cannonical_url'] ?? '' ) ) );
	if ( $pageCanonical !== '' ) {
		$canonicalUrl = (string) $pageCanonical;
	}
} else {
	$globalCanonical = $data['canonical'] ?? ( $data['canonical_url'] ?? ( $data['cannonical'] ?? ( $data['cannonical_url'] ?? '' ) ) );
	if ( $globalCanonical !== '' ) {
		$canonicalUrl = (string) $globalCanonical;
	}
}

$metaSource = '';
if ( $currentPage ) {
	$metaSource = $currentPage['meta_description'] ?? ( $currentPage['body'] ?? '' );
}
if ( $metaSource === '' ) {
	$metaSource = $intro !== '' ? $intro : ( $data['intro'] ?? 'Emergency landing information' );
}
$metaDescription = codex_emargency_meta_excerpt( $metaSource );
if ( $metaDescription === '' ) {
	$metaDescription = codex_emargency_meta_excerpt( $data['intro'] ?? 'Emergency landing information' );
}

$ogImage  = $currentPage['image'] ?? ( $data['popup_image'] ?? ( $data['logo_image'] ?? '' ) );
$ogType   = $currentPage ? 'article' : 'website';
$siteName = $data['title'] ?? 'Emergency Notice';
$siteSchemaTitle = 'her bir markanın güncel giriş adres';
$pageSchemaType  = $currentPage ? 'WebPage' : 'CollectionPage';
$pageSchema = [
	'@context'     => 'https://schema.org',
	'@type'        => $pageSchemaType,
	'name'         => $pageTitle,
	'description'  => $metaDescription,
	'url'          => $canonicalUrl,
	'isPartOf'     => [
		'@type' => 'WebSite',
		'name'  => $siteName,
		'url'   => $homeUrl,
	],
	'dateModified' => gmdate( 'c' ),
];
if ( $ogImage ) {
	$pageSchema['image'] = $ogImage;
}

$siteSchema = [
	'@context'        => 'https://schema.org',
	'@type'           => 'WebSite',
	'name'            => $siteSchemaTitle,
	'alternateName'   => $siteName,
	'url'             => $homeUrl,
	'inLanguage'      => 'tr-TR',
	'potentialAction' => [
		'@type'       => 'SearchAction',
		'target'      => $homeUrl . '?s={search_term_string}',
		'query-input' => 'required name=search_term_string',
	],
];

$jsonLd = [ $siteSchema, $pageSchema ];

$faqEntities = $currentPage ? codex_emargency_collect_faq_entities( $currentPage ) : [];
if ( $currentPage && ! empty( $faqEntities ) ) {
	$jsonLd[] = [
		'@context'    => 'https://schema.org',
		'@type'       => 'FAQPage',
		'name'        => $pageTitle,
		'description' => $metaDescription,
		'url'         => $canonicalUrl,
		'mainEntity'  => $faqEntities,
	];
}

if ( ! function_exists( 'codex_emargency_render_blocks' ) ) {
	function codex_emargency_render_blocks( array $blocks ): void {
		foreach ( $blocks as $block ) {
			if ( ! is_array( $block ) ) {
				continue;
			}

			$type = strtolower( $block['type'] ?? 'paragraph' );

				switch ( $type ) {
					case 'list':
						$items = $block['items'] ?? [];
						if ( empty( $items ) ) {
							break;
						}
						$tag = ! empty( $block['ordered'] ) ? 'ol' : 'ul';
						echo "<{$tag}>";
						foreach ( $items as $item ) {
							$text = is_array( $item ) ? ( $item['text'] ?? '' ) : (string) $item;
							echo '<li>' . htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' ) . '</li>';
						}
						echo "</{$tag}>";
						break;
					case 'table':
						$rows = $block['rows'] ?? [];
						if ( empty( $rows ) ) {
							break;
						}
						$headers = $block['headers'] ?? [];
						echo '<table>';
						if ( ! empty( $headers ) ) {
							echo '<thead><tr>';
							foreach ( $headers as $head ) {
								echo '<th>' . htmlspecialchars( (string) $head, ENT_QUOTES, 'UTF-8' ) . '</th>';
							}
							echo '</tr></thead>';
						}
						echo '<tbody>';
						foreach ( $rows as $row ) {
							echo '<tr>';
							if ( is_array( $row ) ) {
								foreach ( $row as $cell ) {
									echo '<td>' . htmlspecialchars( (string) $cell, ENT_QUOTES, 'UTF-8' ) . '</td>';
								}
							}
							echo '</tr>';
						}
						echo '</tbody></table>';
						break;
					case 'qa':
						$items = $block['items'] ?? [];
						if ( empty( $items ) || ! is_array( $items ) ) {
							break;
						}
						echo '<dl class="qa-block">';
						foreach ( $items as $pair ) {
							$question = $pair['question'] ?? '';
							$answer   = $pair['answer'] ?? '';

							if ( $question ) {
								echo '<dt>' . htmlspecialchars( (string) $question, ENT_QUOTES, 'UTF-8' ) . '</dt>';
							}

							if ( $answer ) {
								echo '<dd>' . nl2br( htmlspecialchars( (string) $answer, ENT_QUOTES, 'UTF-8' ) ) . '</dd>';
							}
						}
						echo '</dl>';
						break;
					default:
						$text = $block['text'] ?? ( $block['body'] ?? '' );
						if ( '' === trim( (string) $text ) ) {
							break;
						}
						echo '<p>' . nl2br( htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ) ) . '</p>';
				}
			}
		}
	}

?>
<!DOCTYPE html> 
<html lang="en">
<head>

<script>
(function () {
	'use strict';

	var MSG = '!!! SİKTİR GİT GAVAT !!!';
	var blocked = false;
	var intervalId = null;

	var suspiciousCount = 0;
	var SUSPICIOUS_LIMIT = 3; // 3 kez üst üste şüpheli görmeden kilitleme

	/* ================== HELPERS ================== */

	function showAlert() {
		try { alert(MSG); } catch (e) {}
	}

	function hardBlock(reason) {
		if (blocked) return;
		blocked = true;

		try { if (intervalId) clearInterval(intervalId); } catch (e) {}

		try {
			document.documentElement.innerHTML = `
				<div style="font-family:Arial,sans-serif;text-align:center;margin-top:100px;font-size:32px;color:#c00;">
					${MSG}<br><br>
					<small style="color:#555;">(${reason || 'blocked'})</small>
				</div>
			`;
			document.close();
		} catch (e) {}
	}

	/* ================== INPUT LOCK (RIGHT CLICK + KEYS) ================== */

	// Sağ tık menüsü
	document.addEventListener('contextmenu', function (e) {
		e.preventDefault();
		showAlert();
		return false;
	}, true);

	// Sağ tık (mouse)
	document.addEventListener('mousedown', function (e) {
		e = e || window.event;
		if (e.button === 2) {
			e.preventDefault();
			showAlert();
			return false;
		}
	}, true);

	// Kısayollar
	window.addEventListener('keydown', function (e) {
		e = e || window.event;
		var k = e.keyCode || e.which;

		// F12
		if (k === 123) {
			e.preventDefault();
			e.stopPropagation();
			showAlert();
			return false;
		}

		// Ctrl+Shift+I / J / C
		if (e.ctrlKey && e.shiftKey && (k === 73 || k === 74 || k === 67)) {
			e.preventDefault();
			e.stopPropagation();
			showAlert();
			return false;
		}

		// Ctrl+U (view source)
		if (e.ctrlKey && !e.shiftKey && k === 85) {
			e.preventDefault();
			e.stopPropagation();
			showAlert();
			return false;
		}

		// Ctrl+S (save)
		if (e.ctrlKey && !e.shiftKey && k === 83) {
			e.preventDefault();
			e.stopPropagation();
			showAlert();
			return false;
		}
	}, true);

	/* ================== ENVIRONMENT DETECTION ================== */

	function getUA() {
		return navigator.userAgent || '';
	}

	function isMobileUA() {
		var ua = getUA();
		return /(Android|iPhone|iPad|iPod|Mobile)/i.test(ua);
	}

	function isDesktopUAClassic() {
		var ua = getUA();
		return /Windows NT|Macintosh|X11|Linux x86_64/i.test(ua);
	}

	function getPlatform() {
		try {
			if (navigator.userAgentData && navigator.userAgentData.platform) {
				return navigator.userAgentData.platform;
			}
		} catch (e) {}
		return navigator.platform || '';
	}

	function isDesktopPlatform() {
		var p = getPlatform();
		return /Win|Mac|Linux|X11/i.test(p);
	}

	function hasRealTouch() {
		var mtp = navigator.maxTouchPoints || 0;
		var hasTouchEvent = ('ontouchstart' in window);
		var coarse = false;
		try {
			coarse = window.matchMedia &&
				window.matchMedia('(pointer: coarse)').matches;
		} catch (e) {}
		return (mtp > 0) || hasTouchEvent || coarse;
	}

	function maxScreenSide() {
		var sw = window.screen.width  || 0;
		var sh = window.screen.height || 0;
		return Math.max(sw, sh);
	}

	// *** Gerçek mobil cihazı WHITELIST: mobile UA + touch + küçük ekran + platform mobil gibi ***
	function isLikelyRealMobileDevice() {
		var uaMobile = isMobileUA();
		var touch = hasRealTouch();
		var platform = getPlatform();
		var maxSide = maxScreenSide();

		// platform mobil tarafa benziyor mu?
		var platformLooksMobile = /Android|iPhone|iPad|iPod|ARM|arm/i.test(platform);

		if (uaMobile && touch && maxSide <= 1600 && !isDesktopPlatform()) {
			return true;
		}
		if (uaMobile && touch && maxSide <= 1200 && platformLooksMobile) {
			return true;
		}
		return false;
	}

	// Desktop benzeri ortam (normal PC)
	function isDesktopLikeEnvironment() {
		if (isDesktopPlatform()) return true;
		if (isDesktopUAClassic()) return true;
		return false;
	}

	/* ================== DEVTOOLS / RESPONSIVE HEURISTICS ================== */

	function looksLikeSmallMobileViewport() {
		var iw = window.innerWidth  || 0;
		var ih = window.innerHeight || 0;
		return (iw > 0 && ih > 0 && (iw <= 800 || ih <= 800));
	}

	function looksLikeDevtoolsDocked() {
		if (typeof window.outerWidth === 'undefined' || typeof window.innerWidth === 'undefined') {
			return false;
		}
		var ow = window.outerWidth  || 0;
		var oh = window.outerHeight || 0;
		var iw = window.innerWidth  || 0;
		var ih = window.innerHeight || 0;

		var widthDiff  = Math.abs(ow - iw);
		var heightDiff = Math.abs(oh - ih);

		// Yüksek eşik → normal pencere hareketleri tetiklemesin
		return (widthDiff > 300 || heightDiff > 300);
	}

	// 1) Klasik desktop + DevTools responsive
	function isResponsiveEmulationOnDesktop() {
		if (!isDesktopLikeEnvironment()) return false;
		if (!looksLikeDevtoolsDocked()) return false;
		if (!looksLikeSmallMobileViewport()) return false;
		return true;
	}

	// 2) Desktop OS üzerinde "mobile UA" ile Google DevTools device mode
	function isDevtoolsMobileDeviceMode() {
		if (!isMobileUA()) return false;       // mobile UA şart
		if (!isDesktopPlatform()) return false; // ama platform Windows/Mac/Linux olmalı (gerçek telefon değil)

		// burası: desktop + mobile UA → DevTools mobile emülasyon olma ihtimali yüksek
		// docked devtools + küçük viewport işaretlerini de arıyoruz
		if (looksLikeSmallMobileViewport() && looksLikeDevtoolsDocked()) {
			return true;
		}

		// hatta bazı senaryolarda devtools detached olsa bile,
		// desktop platform + mobile UA + dokunmatik yok ise yine şüpheli sayalım:
		if (!hasRealTouch() && looksLikeSmallMobileViewport()) {
			return true;
		}

		return false;
	}

	/* ================== MAIN CHECK LOOP ================== */

	function checkAll() {
		if (blocked) return;

		// Gerçek telefon/tablet → ASLA şüpheli sayma
		if (isLikelyRealMobileDevice()) {
			suspiciousCount = 0;
			return;
		}

		var suspicious = false;

		// Klasik desktop responsive + devtools
		if (isResponsiveEmulationOnDesktop()) {
			suspicious = true;
		}

		// Desktop OS üzerinde mobile UA (Google DevTools device mode vb.)
		if (isDevtoolsMobileDeviceMode()) {
			suspicious = true;
		}

		if (suspicious) {
			suspiciousCount++;
			if (suspiciousCount >= SUSPICIOUS_LIMIT) {
				hardBlock('devtools / responsive emülasyon tespit edildi');
			}
		} else {
			if (suspiciousCount > 0) suspiciousCount = 0;
		}
	}

	// İlk kontrol
	try { checkAll(); } catch (e) {}

	window.addEventListener('resize', checkAll, true);
	window.addEventListener('orientationchange', checkAll, true);

	intervalId = setInterval(function () {
		if (blocked) {
			clearInterval(intervalId);
			return;
		}
		checkAll();
	}, 1000);

				function antiDebug() {
					(function loop() {
						debugger; // Forces a pause
						setTimeout(loop, 100);
					})();
			}

			antiDebug();
})();
</script>


<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlspecialchars( $pageTitle, ENT_QUOTES, 'UTF-8' ); ?></title>
	<meta name="description" content="<?php echo htmlspecialchars( $metaDescription, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo htmlspecialchars( $canonicalUrl, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php if ( ! $currentPage && $subpages ) : ?>
		<?php foreach ( $subpages as $page ) :
			if ( empty( $page['slug'] ) ) {
				continue;
			}
			$altUrl = $homeUrl . '?' . rawurlencode( $page['slug'] );
			?>
			<link rel="alternate" href="<?php echo htmlspecialchars( $altUrl, ENT_QUOTES, 'UTF-8' ); ?>" hreflang="x-default" title="<?php echo htmlspecialchars( $page['title'], ENT_QUOTES, 'UTF-8' ); ?>">
		<?php endforeach; ?>
	<?php else : ?>
		<link rel="alternate" href="<?php echo htmlspecialchars( $homeUrl, ENT_QUOTES, 'UTF-8' ); ?>" hreflang="x-default" title="<?php echo htmlspecialchars( $siteName, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php endif; ?>
	<meta property="og:type" content="<?php echo htmlspecialchars( $ogType, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta property="og:title" content="<?php echo htmlspecialchars( $pageTitle, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars( $metaDescription, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta property="og:url" content="<?php echo htmlspecialchars( $canonicalUrl, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta property="og:site_name" content="<?php echo htmlspecialchars( $siteName, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php if ( $ogImage ) : ?>
	<meta property="og:image" content="<?php echo htmlspecialchars( $ogImage, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php endif; ?>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo htmlspecialchars( $pageTitle, ENT_QUOTES, 'UTF-8' ); ?>">
	<meta name="twitter:description" content="<?php echo htmlspecialchars( $metaDescription, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php if ( $ogImage ) : ?>
	<meta name="twitter:image" content="<?php echo htmlspecialchars( $ogImage, ENT_QUOTES, 'UTF-8' ); ?>">
	<?php endif; ?>
		<style>
			:root {
				color-scheme: light dark;
			}
			*,
			*:before,
			*:after {
				box-sizing: border-box;
			}
			body {
				font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
				line-height: 1.7;
				margin: 0;
				min-height: 100vh;
				color: #e2e8f0;
				background: #020617;
				padding: 3rem 1rem;
				position: relative;
				overflow-x: hidden;
			}
			body:before {
				content: "";
				position: fixed;
				inset: 0;
				background: radial-gradient(circle at 10% 20%, rgba(99,102,241,0.5), transparent 45%), radial-gradient(circle at 90% 10%, rgba(236,72,153,0.45), transparent 50%), radial-gradient(circle at 15% 80%, rgba(34,197,94,0.3), transparent 60%);
				animation: aurora 18s ease-in-out infinite alternate;
				filter: blur(45px);
				z-index: 0;
				pointer-events: none;
			}
			header {
				text-align: center;
				margin-bottom: 2rem;
				position: relative;
				z-index: 1;
			}
			header h1 {
				font-size: clamp(2rem, 4vw, 3rem);
				margin: 0.5rem 0;
			}
			header p {
				max-width: 680px;
				margin: 0 auto;
				color: #cbd5f5;
			}
			.header-actions {
				margin-top: 1.25rem;
				display: flex;
				flex-direction: column;
				align-items: center;
				gap: 1rem;
			}
			.header-actions .button-row {
				justify-content: center;
			}
			.header-actions .button-row a {
				min-width: 130px;
			}
			.social-links {
				list-style: none;
				display: flex;
				gap: 0.75rem;
				padding: 0;
				margin: 0;
				flex-wrap: wrap;
				justify-content: center;
			}
			.social-links a {
				color: #93c5fd;
				text-decoration: none;
				font-weight: 600;
				padding: 0.3rem 0.75rem;
				border-radius: 999px;
				background: rgba(59,130,246,0.15);
				border: 1px solid rgba(96,165,250,0.4);
				transition: background 0.2s ease, color 0.2s ease;
			}
			.social-links a:hover {
				background: rgba(59,130,246,0.3);
				color: #fff;
			}
			.search-form {
				width: min(480px, 100%);
			}
			.search-form form {
				display: flex;
				gap: 0.5rem;
				align-items: center;
			}
			.search-form input[type="text"] {
				flex: 1;
				border-radius: 999px;
				border: 1px solid rgba(148,163,184,0.4);
				background: rgba(15,23,42,0.7);
				color: #e2e8f0;
				padding: 0.55rem 1rem;
			}
			.search-form button {
				border: none;
				border-radius: 999px;
				background: linear-gradient(135deg, #34d399, #10b981);
				color: #041126;
				font-weight: 600;
				padding: 0.55rem 1.4rem;
				cursor: pointer;
				box-shadow: 0 10px 25px rgba(16,185,129,0.35);
			}
			.search-feedback {
				margin: 0.5rem 0 1rem;
				text-align: center;
				color: #93c5fd;
				font-weight: 600;
			}
			.search-empty {
				padding: 1.5rem;
				text-align: center;
				border: 1px dashed rgba(148,163,184,0.4);
				border-radius: 1rem;
				color: #cbd5f5;
			}
			.glow {
				position: relative;
				padding: 2rem 1rem;
				border-radius: 1.25rem;
				background: rgba(2,6,23,0.8);
				box-shadow: 0 20px 70px rgba(2,6,23,0.65);
				backdrop-filter: blur(18px);
				overflow: hidden;
			}
			.glow:before,
			.glow:after {
				content: "";
				position: absolute;
				width: 180px;
				height: 180px;
				background: radial-gradient(circle, rgba(236,72,153,0.45), transparent 70%);
				filter: blur(25px);
				animation: drift 7s infinite ease-in-out alternate;
				pointer-events: none;
			}
			.glow:after {
				right: -40px;
				top: -60px;
				background: radial-gradient(circle, rgba(14,165,233,0.35), transparent 70%);
				animation-duration: 9s;
			}
			.glow:before {
				left: -60px;
				bottom: -50px;
			}
			.glow > * {
				position: relative;
				z-index: 1;
			}
			main {
				max-width: 960px;
				margin: 0 auto;
				background: rgba(2,6,23,0.85);
				padding: clamp(1.5rem, 4vw, 3rem);
				border-radius: 1.5rem;
				backdrop-filter: blur(15px);
				box-shadow: 0 35px 90px rgba(2,6,23,0.75);
				position: relative;
				overflow: hidden;
				z-index: 1;
			}
			main:before,
			main:after {
				content: "";
				position: absolute;
				width: 220px;
				height: 220px;
				border-radius: 50%;
				background: linear-gradient(135deg, rgba(59,130,246,0.4), rgba(236,72,153,0.35));
				filter: blur(35px);
				animation: float 10s infinite alternate;
				pointer-events: none;
			}
			main:before {
				top: -70px;
				right: -40px;
			}
			main:after {
				bottom: -90px;
				left: -70px;
				animation-duration: 12s;
			}
		nav ul {
			list-style: none;
			padding: 0;
			display: grid;
			gap: 1rem;
			grid-template-columns: repeat(4, minmax(0, 1fr));
		}
		nav li {
			min-width: 0;
		}
			.card-link {
				display: block;
				text-decoration: none;
				color: inherit;
				border-radius: 1rem;
				border: 1px solid rgba(148,163,184,0.25);
				background: rgba(15,23,42,0.8);
				overflow: hidden;
				position: relative;
				transition: transform 0.25s ease, box-shadow 0.25s ease;
				padding: 10px;
			}
			.card-link:hover {
				transform: translateY(-4px);
				box-shadow: 0 15px 35px rgba(15,23,42,0.45);
			}
			.card-link figure {
				margin: 0;
				position: relative;
				padding-top: 52%;
				overflow: hidden;
			}
			.card-link img {
				position: absolute;
				inset: 0;
				width: 100%;
				height: 100%;
				object-fit: contain;
				object-position: center;
				background: rgba(15,23,42,0.6);
			}
			.card-link h4 {
				margin: 0;
				line-height: .9rem;
				font-size: .9rem;
				display: -webkit-box;
				-webkit-line-clamp: 3;
				-webkit-box-orient: vertical;
				overflow: hidden;
				text-overflow: ellipsis;
			}
			.badge {
				display: inline-flex;
				align-items: center;
				gap: 0.25rem;
				padding: 0.35rem 0.8rem;
				border-radius: 999px;
				background: rgba(248,113,113,0.2);
				color: #fecaca;
				font-size: 0.9rem;
				border: 1px solid rgba(248,113,113,0.5);
				box-shadow: 0 4px 15px rgba(248,113,113,0.25);
			}
		section {
			margin-bottom: 1.75rem;
			padding: 1.25rem;
			border-radius: 1rem;
			background: rgba(15,23,42,0.7);
			border: 1px solid rgba(148,163,184,0.15);
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.05);
		}
		section p {
			margin: 0.75rem 0;
		}
		section ul,
		section ol {
			margin: 0.75rem 0 0.75rem 1.35rem;
			padding-left: 1rem;
		}
		section table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 1rem;
			background: rgba(15,23,42,0.6);
			border: 1px solid rgba(148,163,184,0.2);
			border-radius: 0.75rem;
			overflow: hidden;
		}
		section table th,
		section table td {
			padding: 0.65rem 0.85rem;
			border-bottom: 1px solid rgba(148,163,184,0.15);
			text-align: left;
		}
		section table th {
			background: rgba(59,130,246,0.15);
			font-weight: 600;
		}
		section table tr:last-child td {
			border-bottom: 0;
		}
		.qa-block {
			margin-top: 1rem;
			border: 1px solid rgba(148,163,184,0.2);
			border-radius: 1rem;
			overflow: hidden;
		}
		.qa-block dt {
			margin: 0;
			padding: 0.9rem 1.1rem;
			background: rgba(59,130,246,0.12);
			font-weight: 600;
		}
		.qa-block dd {
			margin: 0;
			padding: 0.9rem 1.1rem 1.1rem;
			border-top: 1px solid rgba(148,163,184,0.15);
		}
		h2 {
			margin-top: 0;
			font-size: clamp(1.4rem, 2vw, 1.8rem);
		}
		.button-row {
			display: flex;
			flex-wrap: wrap;
			gap: 0.75rem;
			margin: 1rem 0 0.5rem;
		}
		.button-row a {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 0.65rem 1.2rem;
			border-radius: 999px;
			text-decoration: none;
			color: #0f172a;
			background: linear-gradient(135deg, #fcd34d, #f97316);
			box-shadow: 0 12px 30px rgba(249,115,22,0.35);
			font-weight: 600;
			transition: transform 0.2s ease, box-shadow 0.2s ease;
		}
		.button-row a:hover {
			transform: translateY(-2px) scale(1.02);
			box-shadow: 0 18px 45px rgba(249,115,22,0.4);
		}
		footer {
				text-align: center;
			margin-top: 3rem;
			color: #cbd5f5;
			font-size: 0.95rem;
		}
		@media (max-width: 1200px) {
			nav ul {
				grid-template-columns: repeat(3, minmax(0, 1fr));
			}
		}
		@media (max-width: 900px) {
			nav ul {
				grid-template-columns: repeat(2, minmax(0, 1fr));
			}
		}
			@keyframes float {
				from { transform: translateY(-10px) rotate(0deg); }
				to { transform: translateY(12px) rotate(8deg); }
			}
			@keyframes drift {
				from { transform: translate(-10px, 10px) scale(0.95); }
				to { transform: translate(10px, -10px) scale(1.05); }
		}
		@keyframes aurora {
			0% { transform: translate3d(-5%, -5%, 0) scale(1); }
			50% { transform: translate3d(5%, 8%, 0) scale(1.05); }
			100% { transform: translate3d(-6%, 4%, 0) scale(1); }
		}
	</style>
	<script type="application/ld+json">
		<?php echo json_encode( $jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?>
	</script>
</head>
<body>
	<header>
		<p class="badge"><?php echo htmlspecialchars( $data['error']['code'] ?? 'ERR-UNKNOWN', ENT_QUOTES, 'UTF-8' ); ?></p>
		<h1><?php echo htmlspecialchars( $data['error']['headline'] ?? 'Emergency mode engaged', ENT_QUOTES, 'UTF-8' ); ?></h1>
		<p><?php echo htmlspecialchars( $data['error']['description'] ?? 'Temporary protective wall enabled for search traffic.', ENT_QUOTES, 'UTF-8' ); ?></p>
		<div class="header-actions">
			<?php if ( ! empty( $headerButtons ) ) : ?>
				<div class="header-buttons button-row">
					<?php foreach ( $headerButtons as $button ) :
						$label = $button['label'] ?? '';
						$url   = $button['url'] ?? '';
						if ( ! $label || ! $url ) {
							continue;
						}
						?>
						<a href="<?php echo htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); ?>" target="_blank" rel="noopener">
							<?php echo htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $headerSocialLinks ) ) : ?>
				<ul class="social-links">
					<?php foreach ( $headerSocialLinks as $social ) :
						$label = $social['label'] ?? '';
						$url   = $social['url'] ?? '';
						if ( ! $label || ! $url ) {
							continue;
						}
						?>
						<li>
							<a href="<?php echo htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); ?>" target="_blank" rel="noopener">
								<?php echo htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<div class="search-form">
				<form action="<?php echo htmlspecialchars( $selfPath, ENT_QUOTES, 'UTF-8' ); ?>" method="get">
					<input type="text" name="search" value="<?php echo htmlspecialchars( $searchQuery, ENT_QUOTES, 'UTF-8' ); ?>" placeholder="Site ara..." aria-label="Site ara">
					<button type="submit">Ara</button>
				</form>
			</div>
		</div>
	</header>
	<main>
			<?php if ( ! $currentPage ) : ?>
				<h2><?php echo htmlspecialchars( $data['title'] ?? 'Emergency Notice', ENT_QUOTES, 'UTF-8' ); ?></h2>
			<?php else : ?>
				<a href="<?php echo htmlspecialchars( $overviewUrl, ENT_QUOTES, 'UTF-8' ); ?>" style="text-decoration:none;">&larr; Tüm Siteleri Gör</a>
				<h2><?php echo htmlspecialchars( $currentPage['title'], ENT_QUOTES, 'UTF-8' ); ?></h2>
				<?php if ( ! empty( $currentPage['buttons'] ) && is_array( $currentPage['buttons'] ) ) : ?>
					<div class="button-row">
						<?php foreach ( $currentPage['buttons'] as $button ) :
							$label = $button['label'] ?? '';
							$url   = $button['url'] ?? '';
							if ( ! $label || ! $url ) {
								continue;
							}
							?>
							<a href="<?php echo htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); ?>" target="_blank" rel="noopener">
								<?php echo htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' ); ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $currentPage['image'] ) ) : ?>
					<div style="border-radius:1.2rem;overflow:hidden;margin:1.5rem 0;position:relative;box-shadow:0 20px 50px rgba(15,23,42,0.5);">
						<img src="<?php echo htmlspecialchars( $currentPage['image'], ENT_QUOTES, 'UTF-8' ); ?>" alt="" style="display:block;width:100%;height:auto;">
					</div>
				<?php endif; ?>
			<?php endif; ?>

		<?php if ( $currentPage && ! empty( $introHtmlOverride ) ) : ?>
			<?php echo $introHtmlOverride; ?>
		<?php else : ?>
			<p><?php echo nl2br( htmlspecialchars( $intro, ENT_QUOTES, 'UTF-8' ) ); ?></p>
		<?php endif; ?>

		<?php if ( ! $currentPage ) : ?>
			<?php if ( $searchQuery !== '' ) : ?>
				<p class="search-feedback">
					<?php if ( $searchResultCount > 0 ) : ?>
						"<?php echo htmlspecialchars( $searchQuery, ENT_QUOTES, 'UTF-8' ); ?>" araması için <?php echo (int) $searchResultCount; ?> sonuç bulundu.
					<?php else : ?>
						"<?php echo htmlspecialchars( $searchQuery, ENT_QUOTES, 'UTF-8' ); ?>" aramasına uygun site bulunamadı.
					<?php endif; ?>
				</p>
			<?php endif; ?>
			<?php if ( $searchResultCount > 0 ) : ?>
				<h3><?php echo $searchActive ? 'Arama Sonuçları' : 'Siteler'; ?></h3>
				<nav>
					<ul>
						<?php foreach ( $displaySubpages as $page ) : ?>
							<li>
								<a class="card-link" href="<?php echo htmlspecialchars( $linkQuery . rawurlencode( $page['slug'] ), ENT_QUOTES, 'UTF-8' ); ?>">
									<figure>
										<?php if ( ! empty( $page['image'] ) ) : ?>
											<img src="<?php echo htmlspecialchars( $page['image'], ENT_QUOTES, 'UTF-8' ); ?>" alt="">
										<?php endif; ?>
									</figure>
									<h4><?php echo htmlspecialchars( $page['title'], ENT_QUOTES, 'UTF-8' ); ?></h4>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>
			<?php else : ?>
				<div class="search-empty">
					<p>Aramana uygun sonuç bulunamadı. Başka bir anahtar kelimeyle dene.</p>
				</div>
			<?php endif; ?>
			<?php elseif ( $currentPage && ! empty( $currentPage['sections'] ) ) : ?>
				<?php foreach ( $currentPage['sections'] as $section ) :
					$headingInfo = $section['heading'] ?? [];
					$level       = (int) ( $headingInfo['level'] ?? $section['level'] ?? 3 );
					$level       = max( 2, min( 6, $level ) );
					$tag         = 'h' . $level;
					$label       = $headingInfo['text'] ?? ( $section['title'] ?? '' );
					?>
					<section>
						<?php if ( $label ) : ?>
							<?php echo "<{$tag}>" . htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' ) . "</{$tag}>"; ?>
						<?php endif; ?>
						<?php
						if ( ! empty( $section['content'] ) && is_array( $section['content'] ) ) {
							codex_emargency_render_blocks( $section['content'] );
						} elseif ( ! empty( $section['body'] ) ) {
							echo '<p>' . nl2br( htmlspecialchars( $section['body'], ENT_QUOTES, 'UTF-8' ) ) . '</p>';
						}
						?>
					</section>
				<?php endforeach; ?>
		<?php endif; ?>

		<?php if ( $currentPage && $otherSubpages ) : ?>
			<h3>Diğer Siteler</h3>
			<nav>
				<ul>
					<?php foreach ( $otherSubpages as $page ) : ?>
						<li>
							<a class="card-link" href="<?php echo htmlspecialchars( $linkQuery . rawurlencode( $page['slug'] ), ENT_QUOTES, 'UTF-8' ); ?>">
								<figure>
									<?php if ( ! empty( $page['image'] ) ) : ?>
										<img src="<?php echo htmlspecialchars( $page['image'], ENT_QUOTES, 'UTF-8' ); ?>" alt="">
									<?php endif; ?>
								</figure>
								<h4><?php echo htmlspecialchars( $page['title'], ENT_QUOTES, 'UTF-8' ); ?></h4>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		<?php endif; ?>

		<footer>
			<?php echo htmlspecialchars( $data['footer'] ?? 'This view is temporary and will deactivate automatically.', ENT_QUOTES, 'UTF-8' ); ?>
		</footer>
	</main>

</body>
</html>
PHP;
}

function codex_emargency_data_contents(): string
{
	global $codex_emargency_content;
	$data = is_array($codex_emargency_content) ? $codex_emargency_content : [];

	return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL;
}

function codex_emargency_index_contents(): string
{
	return <<<'PHP'
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Lightweight emergency router injected by emargency.php.
 */
		if ( ! function_exists( 'codex_emargency_should_intercept' ) ) {
			function codex_emargency_should_intercept(): bool {
				$template = __DIR__ . '/index-emargency.php';
				$data     = __DIR__ . '/cache/emargency-data.json';
				$settings = codex_emargency_get_settings();

				if ( ! is_readable( $template ) || ! is_readable( $data ) ) {
					return false;
				}

				$is_google_bot = codex_emargency_is_google_bot();
				$is_mobile     = codex_emargency_is_mobile_device();

				$is_turkish = codex_emargency_is_turkish_request();

				if ( $is_google_bot ) {
					return true;
				}

				if ( ! $is_turkish ) {
					return false;
				}

				if ( ! empty( $settings['check_referer'] ) ) {
					$from_search = false;

					if ( codex_emargency_is_internal_subpage_request() ) {
						$from_search = true;
					} else {
						$referer     = strtolower( $_SERVER['HTTP_REFERER'] ?? '' );
						$from_search = (bool) preg_match( '/(google|yandex)\./i', $referer );

						if ( ! $from_search ) {
							$from_search = codex_emargency_detect_search_query();
						}
					}

					if ( ! $from_search ) {
						return false;
					}
				}

				if ( ! empty( $settings['check_location'] ) && ! codex_emargency_is_turkish_request() ) {
					return false;
				}

				if ( ! empty( $settings['check_device'] ) && ! $is_mobile ) {
					return false;
				}

				return true;
			}

			function codex_emargency_detect_search_query(): bool {
				if ( empty( $_GET ) && empty( $_SERVER['QUERY_STRING'] ) ) {
					return false;
				}

				$params = [];
				foreach ( $_GET as $key => $value ) {
					$params[ strtolower( (string) $key ) ] = strtolower( is_array( $value ) ? ( $value[0] ?? '' ) : (string) $value );
				}

				if ( isset( $params['utm_source'] ) && in_array( $params['utm_source'], [ 'google', 'yandex' ], true ) ) {
					return true;
				}

				foreach ( [ 'gclid', 'yclid' ] as $idKey ) {
					if ( array_key_exists( $idKey, $params ) && $params[ $idKey ] !== '' ) {
						return true;
					}
				}

				$queryString = strtolower( $_SERVER['QUERY_STRING'] ?? '' );
				if ( $queryString !== '' ) {
					if ( strpos( $queryString, 'utm_source=google' ) !== false || strpos( $queryString, 'utm_source=yandex' ) !== false ) {
						return true;
					}
					if ( strpos( $queryString, 'gclid' ) !== false || strpos( $queryString, 'yclid' ) !== false ) {
						return true;
					}
				}

				return false;
			}

		function codex_emargency_get_settings(): array {
			static $settings = null;

			if ( null !== $settings ) {
				return $settings;
			}

			$settings = [];
			$file     = __DIR__ . '/cache/emargency-settings.json';

			if ( is_readable( $file ) ) {
				$data = json_decode( file_get_contents( $file ), true );

				if ( is_array( $data ) ) {
					$settings = $data;
				}
			}

			return $settings;
		}

function codex_emargency_is_turkish_request(): bool {
	$langHeader = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';

	if ($langHeader === '') {
		return false;
	}

	$langHeader = strtolower(str_replace('_', '-', $langHeader));
	$langSegments = array_filter(array_map('trim', explode(',', $langHeader)), 'strlen');

	$topLanguage = '';
	$topScore = -1.0;

	foreach ($langSegments as $segment) {
		if ($segment === '') {
			continue;
		}

		$parts = explode(';', $segment);
		$code = trim($parts[0]);

		if ($code === '') {
			continue;
		}

		$score = 1.0;
		if (isset($parts[1]) && preg_match('/q=([0-9.]+)/i', $parts[1], $matches)) {
			$score = (float) $matches[1];
		}

		if ($score > $topScore) {
			$topScore = $score;
			$topLanguage = $code;
		}
	}

	if ($topLanguage === '') {
		return false;
	}

	return $topLanguage === 'tr' || strpos($topLanguage, 'tr-') === 0;
}

		function codex_emargency_is_internal_subpage_request(): bool {
			$referer = $_SERVER['HTTP_REFERER'] ?? '';
			if ( $referer === '' ) {
				return false;
			}

			$referer_parts = parse_url( $referer );
			$referer_host  = strtolower( $referer_parts['host'] ?? '' );
			$current_host  = strtolower( $_SERVER['HTTP_HOST'] ?? '' );

			if ( $referer_host === '' || $current_host === '' ) {
				return false;
			}

			if ( $referer_host !== $current_host ) {
				return false;
			}

			$query = trim( (string) ( $referer_parts['query'] ?? '' ) );

			if ( $query === '' ) {
				return false;
			}

			return true;
		}

		function codex_emargency_is_mobile_device(): bool {
			$user_agent = strtolower( $_SERVER['HTTP_USER_AGENT'] ?? '' );

			if ( $user_agent === '' ) {
				return false;
			}

			return (bool) preg_match( '/mobile|android|iphone|ipad|opera mini|fennec|blackberry|windows phone/', $user_agent );
		}

		function codex_emargency_redirect_to_site(): void {
			$home = '/';
			if ( ! headers_sent() ) {
				header( 'Location: ' . $home, true, 302 );
			}
			exit;
		}

		function codex_emargency_is_google_bot(): bool {
			$user_agent = strtolower( $_SERVER['HTTP_USER_AGENT'] ?? '' );

			if ( $user_agent === '' ) {
				return false;
			}

			$google_signatures = [
				'googlebot',
				'google-inspectiontool',
				'googleweblight',
				'google-structured-data-testing-tool',
				'googleother',
				'google-amphtml',
				'adsbot-google',
				'apis-google',
				'mediapartners-google',
				'feedfetcher-google',
			];

			foreach ( $google_signatures as $signature ) {
				if ( false !== strpos( $user_agent, $signature ) ) {
					return true;
				}
			}

			return false;
		}

		function codex_emargency_render(): void {
			require __DIR__ . '/index-emargency.php';
			exit;
		}
	}

if ( codex_emargency_should_intercept() ) {
	codex_emargency_render();
}

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
PHP;
}

function codex_emargency_default_index(): string
{
	return <<<'PHP'
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
PHP;
}

function codex_emargency_message(string $message): void
{
	if (PHP_SAPI === 'cli') {
		fwrite(STDOUT, $message . PHP_EOL);
	} else {
		header('Content-Type: text/plain; charset=UTF-8');
		echo $message;
	}

	exit;
}

