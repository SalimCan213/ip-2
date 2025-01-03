# Ürün İnceleme ve Değerlendirme

Laravel ve MySQL kullanılarak geliştirilmiş bir ürün inceleme ve değerlendirme projesidir. *(Proje tamamlanmamıştır)*  
Bu proje, kullanıcıların farklı ürünleri inceleyip değerlendirmelerini sağlayan, bu değerlendirmeler doğrultusunda diğer kullanıcıların bilinçli alışveriş yapmasına yardımcı olan bir sistemdir.

---

## Özellikler    
- **Ürün İnceleme:** Kullanıcılar ilgilendikleri ürünler hakkında yorum yapabilir ve puanlama sistemiyle değerlendirme yapabilir.  
- **Kategori ve Arama:** Ürünler kategori bazında listelenir ve filtreleme/arama fonksiyonları ile kullanıcı dostu bir deneyim sunulur.  
- **Popüler Ürünler:** En yüksek puan alan veya en çok yorum yapılan ürünler listelenerek kullanıcıların ilgi göstermesi sağlanır.  

---

## Projenin Amacı  
- Kullanıcıların ürünler hakkında bilinçlendirilmesini sağlamak.  
- Ürün incelemeleri sayesinde sektörde şeffaflık ve güven oluşturmak.  

---

## Projede Kullanılan Gereksinimler  
- Composer version 2.7.9  
- PHP 8.2.4  
- PHP tabanlı web projeleri için XAMPP veya alternatif bir yerel sunucu çözümü  

---

## Kurulum
1. Cmd'den kurmak istediğiniz klasör yolunu belirtip depoyu klonlayın:
```
git clone https://github.com/SalimCan213/ip-2.git
```
2. .env dosyanızı ayarlayın
3. Gerekli paketleri yükleyin:
```
composer install
```
4. Projede kullanılacak benzersiz anahtarınızı üretin:
```
php artisan key:generate
```
5. Sanal sunucunuzu yarattıktan sonra şu kodu konsolunuzda şu kodu yazın:
```
php artisan serve
```
6. Daha sonra açılan server http kodunuza tıklayıp tarayıcınızdan siteyi açın.
### Projede Kullanılan teknolojiler (Kullanılan diller, kütüphaneler ve araçlar.)
- Php laravel
- MySQL

---

## Projede kullandığım uygulamalar
- Jetbrains : PhpStorm
- Jetbrains : Datagrip
