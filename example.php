<?php 

/*
 * Folderio, Klasör sınıfı
 *  
 * Author:	Osman YILMAZ 
 * Email:	osmnylmz@outlook.com
 * Web:		http://www.astald.com - www.osmnylmz.com
 * 
 * Created Date: 23.03.2016
 *
**/

// require_once __DIR__ . '/vendor/autoload.php';   // Composer ile kullanmak için.
require_once __DIR__ . '/src/autoload.php';  // Composer olmadan kullanmak için.


// $items2 = ;

/*foreach (Astald\Folderio::factory() as $item)  {
	echo $item['name'];
}*/

// $items = Astald\Folderio::factory()->setFolder('src')->toArray(); 
// $folder->setFolder('../')->createFolder('folderio');
var_dump(Astald\Folderio::factory()->setFolder('/')->toArray());
 
echo "<table border=1>";
echo "<thead>";

echo "<tr><th>Dosya Adı</th><th>Tam Dosya Adı:</th><th>Dosya Türü:</th><th>Dosya Boyutu:</th><th>Son Düzenleme Tarihi</th><th>Görünürlük</th></tr>";
echo "</thead>";

// $items = Astald\Folderio::factory()->orderBy('size');

foreach (Astald\Folderio::factory()->orderBy('name')->toArray() as $key => $value) {  
	echo "<tr>";
	echo "<td>{$value['fileName']}</td>";
	echo "<td>{$value['name']}</td>";
	echo "<td>{$value['type']}</td>";
	echo "<td>{$value['size']}</td>";
	echo "<td>{$value['lastMod']}</td>";
	echo "<td>{$value['visible']}</td>";
	echo "</tr>";
} 
echo "</table>"; 



echo "<table border=1>";
echo "<thead>";

echo "<tr><th>Dosya Adı</th><th>Tam Dosya Adı:</th><th>Dosya Türü:</th><th>Dosya Boyutu:</th><th>Son Düzenleme Tarihi</th><th>Görünürlük</th></tr>";
echo "</thead>";
foreach (Astald\Folderio::factory()->toArray() as $key => $value) {
	echo "<tr>";
	echo "<td>{$value['fileName']}</td>";
	echo "<td>{$value['name']}</td>";
	echo "<td>{$value['type']}</td>";
	echo "<td>{$value['size']}</td>";
	echo "<td>{$value['lastMod']}</td>";
	echo "<td>{$value['visible']}</td>";
	echo "</tr>";
} 
echo "</table>";