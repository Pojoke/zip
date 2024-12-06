<?php

$zip = new ZipArchive(); //Создаём объект для работы с ZIP-архивами
$arch = "backup_".date("m.d.y "). time() . ".zip";
$dir = "site/";
if ($zip->open($arch) === true) { //Открываем архив и делаем проверку успешности открытия
    $zip->extractTo($dir);
    echo "Извлекаем файлы в директорию " . $dir;
    $zip->close(); //Завершаем работу с архивом
} else {
    echo "Ошибка открытия файла архива!";
}
