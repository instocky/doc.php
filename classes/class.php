<?php
/** общий класс относится к сайту...
 *
 */
class Common
{
  public $id; // уникальный в пределах базы параметр=транслит для адреса страницы ()
  public $name; // название на русском языке h1
  public $description; // описание, характеристики объекта
  public $image; // картинка(фото, логотип) объекта

  function __construct($id, $name, $description, $image)
  {
    echo 'test record';
  }
}

/** класс описивает свойства клиник
 *
 */
class Clinic extends Common
{
  public $adress; // то что будет написано на сайте
  public $longetude; // данные для yandex.maps
  public $latitude; // данные для yandex.maps





}

/** класс описывает параметры врачей
 *
 */
class Doctor extends Common
{
  public $education; // перечисляет учебные заведения
  public $profession; // перечисляет специальности врача



}

/** класс описывает поисковый запрос
 * специальность ищется по базе с врачами
 * адрес клиента сравнивается с базой клиник и ищется ближайшие 5-10 с нужными врачами
 */
class Search extends Common
{
  public $profession; // требуемая специальность
  public $adress; // адрес клиента

  // функция отдает массив отсортированный по параметру
  // удаление от точки запроса
  // 1. $adress передать в api.maps.yandex и получить координаты
  // 2. найти 5 ближайших клиник
  // 3. вернуть упоядоченный массив с клиниками
  function getDistance($adress, $arrayclinics)
  {
    // получить два параметра для вычисления
    foreach ($arrayclinics as $key => $value) {
      getArrayClinic($array, $search)
    }

    $tempdistance = squq

  }

  // функция отдает массив из n врачей нужной специальности из ближайших к адресу запроса клиник
  function getDoctor($profession, $adress)
  {
    $clinics = function getDistance($adress);
    foreach ($clinics as $key => $value) {
      foreach ($value as $key => $value) {
        # code...
      }
      $count [] = getArrayDoctors($value, $profession);
    }
  }
}


 ?>
