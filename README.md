## KURULUM

Kurulum
Projenizin ana klasörünün altında bulunan composer.json adlı dosyayı açın. repositories kısmına

{

  "type": "vcs",

  "url": "https://github.com/KayhanYeter/banner"

}

require kısmına
"{Proje ismi}/evet": "dev-master"
yapıştırın. Daha sonra proje klasörünün olduğu dizinde bir komut satırı açın.

  php yii migrate --migrationPath=@vendor/kouosl/banner/migrations --interactive=0

komutu ile veri tabanını oluşturun.


## Banner Oluşturma
http://portal.kouosl/admin/banner/banner/index sayfasından Create Banner butonuna tıklayarak açılan sayfadan yeni bir banner oluşturulabilir. Daha sonra view kısmından banner içerik sayfasına gidilip oradan yeni banner eklenebilir. Bu kısımda update ve delete işlemi de yapabilirsiniz.
