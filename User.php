<?php 
/* 
Автор: Шаринская Елизавета
Дата реализации: 20.09.2022 20:00
Утилита для работы с базой данных - mySQL Workbench
    
Класс для работы с базой данных людей
Класс должен иметь поля:
id, имя, фамилия, дата рождения, пол(0,1), город рождения
Класс должен иметь методы:
1. Сохранение полей экземпляра класса в БД;
2. Удаление человека из БД в соответствии с id объекта;
3. static преобразование даты рождения в возраст (полных лет);
4. static преобразование пола из двоичной системы в текстовую (муж,
жен);
5. Конструктор класса либо создает человека в БД с заданной
информацией, либо берет информацию из БД по id (предусмотреть
валидацию данных);
6. Форматирование человека с преобразованием возраста и (или) пола
(п.3 и п.4) в зависимотси от параметров (возвращает новый экземпляр
StdClass со всеми полями изначального класса).
*/


$mysqli = new mysqli('127.0.0.1', 'root', '', 'user');
if ($mysqli -> connect_error) {
  printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
  exit();
};
$sql = "SELECT * FROM `users`";
$result = $mysqli -> query($sql);
var_dump($result);
echo "Hello {$sql}, welcome back!";
if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
      echo "Имя: {$row["firstname"]};{$row["lastname"]};
            <hr>";
    }
  } else {
    echo "Данных нет";
  }
class User
{
    public $id, $firstname, $lastname, $dob, $sex, $city;

    public function __construct($firstname, $lastname, $dob, $sex, $city){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->sex = $sex;
        $this->city = $city;
    }

    public function save_user() {
        
    }

    public function edit_user() {

    }

    public function delete_user() {
        
    }

    static function age_user() {
        
    }

    static function sex_user(){
        
    }
}



?>