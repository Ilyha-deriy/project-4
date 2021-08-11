<?php
class User{
    public $name;
    public $secondname;
    function save($name){
        $this->name;
        echo "Пользователь $name сохранен";
    }
}
$number1= new User();
$number1->save("Илья");
class Admin extends User {
    function save($name){
        $this->name;
        echo "<br>", "Админ $name сохранен";
    }
}
$number2= new Admin();
$number2->save("Илья");
class Registrator extends User {
    function save($name){
        $this->name;
        echo "<br>", "Регистратор $name сохранен";
    }
}
$number3= new Registrator();
$number3->save("Илья");
class ContantManager extends User {
    function save($name){
        $this->name;
        echo "<br>", "Контент-менеджер $name сохранен";
    }
}
$number4= new ContantManager();
$number4->save("Илья");
?>