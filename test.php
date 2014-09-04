<?php

error_reporting(E_ALL);

// Report all PHP errors
error_reporting(1);
$testArray = array('testID' => '1', 'testName' => 'Test', 'testDate' => '20140423');
print_r($testArray);
$result = arrayToString($testArray, '#');
echo $result;
exit();
//setting in php that allow error to be display
ini_set("log_errors", 1);
//setting in php to specify filename where error will be logged to i.e php_error.log
ini_set("error_log", "php_error.log");

echo "Current time plus 30 days: " . (time() + (60 * 60 * 24 * 30)) . "<br/>";

$greet = function($name) {
            printf("Hello %s\r\n", $name);
        };

$greet('Hello World');
echo"<br/>";
$greet('PHP');
echo"<br/>";

$sha1 = SHA1('folarinb295d117135a9763da282e7dae73a5ca7d3e5b11');
echo $sha1;
echo"<br/>";
interface ShapeArea {

    public function area();
}

abstract class Shape {

    private $_color;

    function __construct($color) {

        $this->_color = $color;
    }

    public function getColor() {
        return $this->_color;
    }

    abstract function alternateColor();
}

class Rectangle extends Shape implements ShapeArea {

    private $_h;
    private $_w;

    public function __construct($color, $w, $h) {
        parent::__construct($color);
        $this->_h = $h;
        $this->_w = $w;
    }

    public function area() {
        return $this->_h * $this->_w;
    }

    public function alternateColor() {
        return $this->getColor() . "_Alt";
    }

}

class Circle extends Shape implements ShapeArea {

    private $_r;

    public function __construct($color, $r) {
        parent::__construct($color);
        $this->_r = $r;
    }

    public function area() {
        return (3.14 * pow($this->_r, 2));
    }

    public function alternateColor() {
        return $this->getColor() . "_Alt";
    }

}

function getArea(ShapeArea $shape) {
    return $shape->area();
}

$shapes = array(
    'rectangle' => new Rectangle("Blue", 4, 8),
    'circle' => new Circle("Black", 2)
);
foreach ($shapes as $shapName => $shapeObject) {
    $area = getArea($shapeObject);
    echo $shapName . " has an area of " . $area . " and the color is " . $shapeObject->alternateColor() . "<br>";
}
include_once 'car.php';
$car = new Car("Toyota", "Corolla");
echo $car->journeyTime();

function fibonacci($x1, $x2) {
    return $x1 + $x2;
}

$x1 = 0;
$x2 = 1;
echo"<br/>";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($x1, $x2) . ',';
}
print_r(get_loaded_extensions());
define("CONSTANT", 1);
define("_CONSTANT", 0);
define("EMPTY", '');

if (!((boolean) _CONSTANT)) {
    print "ONE";
} else if (constant('CONSTANT') == 1)
    print "good<br/>";

$a = 1;
echo "a= $a <br/>";
++$a;
echo "a= $a <br/>";
$a *= $a;
echo "a= $a <br/>";
echo--$a;
echo "<br/>" . $a;
?>

<?php

$str = "Is your name O'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);

echo $_SERVER['HTTP_HOST'];

if (strpos($_SERVER['HTTP_HOST'], 'test') !== false) {
    echo $_SERVER['HTTP_HOST'];
}
$test = "Jeans/Trousers";
$test = str_replace('/', '', $test);
echo "<br/>TEST: " . $test . "<br/>";

$wordToWrite = "55dsl fontz sweat jumper blue";
if (preg_match("/[0-9]/", $wordToWrite)) {
    echo "<br/>Number Found in: " . $wordToWrite . "<br/>";
}

/**
 * Use curl to get remote content. 
 * @param String $url -  full path to the remote content
 * @return String - content after making curl call 
 */
function getRemoteContents($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

$url = "http://www.test.com/test.php?w=cavalli";

$myContent = getRemoteContents($url);
echo $myContent;

$test = '16½ Collar';
//$test = str_replace(array('\'','"'), '', $test);
//$test = str_replace('1/2', '', $test);
//$test = str_replace('"', '', $test);
//$test = str_replace('½', '.5', $test);
$test = htmlentities($test);
echo "<br/>TEST: " . $test . "<br/>";

$test = html_entity_decode($test);
echo "<br/>TEST: " . $test . "<br/>";

function checkBruteForce($xUsername) {
    global $dbA, $tableUserLog;

    date_default_timezone_set('Europe/London');
    // Get timestamp of current time 
    $now = time();

    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);
    $failedAttemptSql = "SELECT * FROM $tableUserLog WHERE description LIKE '%Login Failed' ORDER BY actionTime DESC LIMIT 10";
    //$failedAttemptSql = "select * from $tableUserLog where username='".$xUsername."' AND description LIKE '%Login Failed' ORDER BY actionTime DESC LIMIT 5";
    //echo "Sql: ".$failedAttemptSql."<br/>";
    $failedAttemptResult = $dbA->query($failedAttemptSql);
    $failedAttemptCount = $dbA->count($failedAttemptResult);
    $timeArray = array();
    $bruteForceCount = 0;
    for ($i = 0; $i < $failedAttemptCount; $i++) {
        $failedAttemptRecord = $dbA->fetch($failedAttemptResult);
        $dateFormat = 'Y-m-d';
        $theYear = substr($failedAttemptRecord["actionDate"], 0, 4);
        $theMonth = substr($failedAttemptRecord["actionDate"], 4, 2);
        $theDay = substr($failedAttemptRecord["actionDate"], 6, 2);
        $failedAttemptRecord["actionDate"] = @date($dateFormat, mktime(0, 0, 0, $theMonth, $theDay, $theYear));
        $failedAttemptRecord["actionTime"] = formatTime($failedAttemptRecord["actionTime"]);
        $failedAttemptRecord["timeStamp"] = strtotime($failedAttemptRecord["actionDate"] . " " . $failedAttemptRecord["actionTime"]);
        if ($failedAttemptRecord["timeStamp"] > $valid_attempts) {
            $bruteForceCount++;
        }
        $timeArray[] = $failedAttemptRecord;
    }
    if ($bruteForceCount >= 5) {
        $username = $timeArray[0]['username'];
        if ($username == "")
            $username = "Unknown";
        $actionDate = $timeArray[0]['actionDate'];
        $actionTime = $timeArray[0]['actionTime'];
        $ip = $timeArray[0]['ip'];
        $desc = $timeArray[0]['description'];
        $theMessage = "Suspicious Login, User: " . $username . " IP: " . $ip;

        $number = "447446300538";
        $originator = "MMWServer";
        //send_message($number,$theMessage,$originator);
    }
    print_r($timeArray[0]);
}

function arrayToString($myArray, $separator) {

    $parameterString = "";
    $parameterStringCounter = 0;
    foreach ($myArray as $key => $value) {
        if ($parameterStringCounter == 0)
            $parameterString .= $key . "=" . $value;
        else
            $parameterString .= $separator . $key . "=" . $value;
        $parameterStringCounter++;
    }
    return $parameterString;
}

?>

