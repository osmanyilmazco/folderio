# Folderia
Folderia klasör listeleme sınıfı, composer ile kullanım yapılmaktadır.

## Kullanım
### Composer ile kullanım

```composer require osmanyilmazco/folderia "~1.0"```

Alternatif olarak ```composer.json``` dosyasınada ekleyebilirsiniz.
```
"require": {
    "osmanyilmazco/folderia": "~1.0"
}
```

### Normal Kullanım
**Composer olmadan kullanmak için** autoload.php dosyamızı kullanmak istediğimiz kısma belirtiyoruz.
```
require_once __DIR__ . '/src/autoload.php';
```

**Sınıfımızı tanımlıyoruz** ```$folder = new Astald\Folderia;``` kullanımı yerine use ile sınıfımızda belirtiyoruz.  Siz istediğiniz gibi kullanabilirsiniz.
```
use Astald\Folderia; // 
$folder = new Folderia;
```

#### Listeleme tipi varsayılan NULL dur, ihtiyacınıza göre, **"size", "type"** vb. yapabilirsiniz.

```
$folder->orderBy = 'type';
```

Listeleme yapılırken görünmesini istemediğimiz dosyalarımızı paramet
```
$folder->setFileHidden(array("index.php","zsystem"));
```

**setFolderName** fonksiyonumuza, listelemenin baz alınacağı klasörü yazıyoruz. Varsayılan kök dizindir
```
$folder->setFolderName('customer');
```

**getFolder()** fonksiyonu ile listelemyi sağlıyoruz.
```
$folder->setFolderName('customer');
```

### Kullanım örneği
```
foreach ($folder->getFolder() as $key => $value) {
	echo "Dosya Adı : {$value['filename']}, Tam Dosya Adı: {$value['name']}, Dosya Türü: {$value['type']}, Dosya Boyutu: {$value['size']}, Son Düzenleme Tarihi: {$value['lastmod']}";
	echo "<br>";
}
```
