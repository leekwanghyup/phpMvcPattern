<?php 

class Test
{
    public static $GENDER = "male"; // 정적 변수 
    public $name; 

    // 정적메서드
    public static function testMethod()
    {
        echo "정적 메서드<br>"; 
    }

    public function testMehotd2(){
        echo self::$GENDER."<br>"; 
        echo "Hello $this->name <br>";
    }
}

echo Test::$GENDER; 
Test::testMethod();

$test = new Test(); 
$test->name = '이광협';


$test2 = new Test(); 
$test2->name = '홍성용';
$test2->testMehotd2();

?>