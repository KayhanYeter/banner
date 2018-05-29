Kurulum
Projenizin ana klasörünün altında bulunan composer.json adlı dosyayı açın. repositories kısmına

{

"type": "vcs",

"url": "https://github.com/KayhanYeter/banner"

}

require kısmına
"{Proje ismi}/evet": "dev-master"
yapıştırın. Daha sonra proje klasörünün olduğu dizinde bir komut satırı açın.

php yii migrate

komutu ile veri tabanını oluşturun.
