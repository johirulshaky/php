<!-- login-logout-start -->
<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->


<div style="padding-left:60px; background:#dbfdff; padding-bottom: 100px;">


    <?php echo "<h1 style= 'color:dodgerblue;text-decoration:underline;text-align:center;margin: 0;padding-top: 30px;'>WELCOME TO PHP TUTORIAL</h1>" ?>

    <!-- without html tag -->
    <?php echo "Welcome to PHP without html element"; ?>

    <!-- with html tag -->
    <?php echo "<h2>Welcome to PHP with html element</h2>"; ?>

    <!-- variable -->
    <?php 
    echo "<b><u>Variable</u></b> <br>";
    $name = "Johirul ";
    $age = 24;
    echo "$name";
    echo "<br>";
    echo "$age"."<br>";
    ?>

    <?php
    $color = "blue";
    $background = "dodgerblue";
    echo "My favourite color is: $color";
    echo "<br>";
    echo 'My favourite color is: '. $background . "<br>";
    ?>

    <?php 
    $x = 21;
    $y = 19;
    echo $x + $y . "<br>";
    ?>

    <?php 
    $account = "amount";
    $amount = 200;
    echo $$account . "<br> <br>";
    ?>

    <!-- constants -->
    <?php 
    echo "<b><u>constants --- define()</u></b> <br>";
    define("NAME", "Johirul Islam");
    echo NAME . "<br>";
    ?>
    <?php 
    define("AGE", 24);
    echo AGE . "<br> <br>"; //constants case-sensitive
    ?>

    <!-- default constants -->
    <?php
    echo "<b><u>default constants</u></b> <br>";
    echo "__FILE__ : " . __FILE__;

    echo "<br><br>";
    ?>

    <!-- define(), constants variable -->
    <?php
    echo "<b><u>constants() variable</u></b> <br>";
    define("COLOR", "blue");
    echo constant("COLOR") . "<br><br>";
    ?>

    <!-- constants array -->
    <?php
    echo "<b><u>constants array</u></b> <br>";
    define("NAM", ["Johirul", "samin", "abir"]);
    echo NAM[0];
    echo "<br><br>";
    ?>

    <!-- Constants are Global -->
    <?php
    echo "<b><u>constants global</u></b> <br>";
    define("WELCOME", "Welcome to php tutorial");
    function constantGlobal() {
        echo WELCOME;
    }
    constantGlobal();
    echo "<br><br>";
    ?> 

    <!-- echo vs print -->
    <?php
    echo "<b><u>print vs echo</u></b> <br>";
    $test = print("hello "); //print return the value 1
    echo $test . "<br>";    //echo not return the value
    ?>

    <?php
    echo "Hello ", "Google ", "good morning", "<br>";    // echo multiple value print and not value return
    print ("Hello" /* , "Google ", "good morning" */ ); // print() one value print and return value
    echo "<br>";
    print ("Hello" . " Google " . " good morning");   // concatination . multiple value print
    echo "<h4 class = \"textColor\">Johirul</h4>";
    ?>

    <!-- data types -->
    <?php
    echo "<b><u>data types --- var_dump() function</u></b> <br>";
    $string = "johirul";                           //string data types
    $number = 40;                                 //number data types
    $floatNumber = 4.5;                          //float data types
    $Boolean = true; //or false                 //boolean data types
    $array = array("johirul", 24, 4.5, true);  //array data types
    var_dump ($string, $number, $floatNumber, $Boolean, $array);
    echo "<br>";
    echo gettype($string);
    echo "<br>";
    // php numbers
    var_dump(is_string($name), is_int($number), is_float($floatNumber), is_bool($Boolean), is_array($array));
    echo "<br>";
    $integerNumber = 758;
    $longNumber = 428268245866;
    $doubleNumber = 22.5684585;
    $finite = 758;
    $infinite = 1.9e45611;
    $nan = acos(343);
    $numeric = 5929;
    var_dump(is_integer($integerNumber), is_long($longNumber), is_double($doubleNumber), is_finite($finite), is_infinite($infinite), is_nan($nan), is_numeric($numeric));
    echo "<br> <br>";
    ?>

    <!-- strlen() function -->
    <?php
    echo "<b><u>strlen() function</u></b> <br>"; //strlen() function returns the length of a string
    $name = "johirul islam";
    echo "length of - johirul islam : ";
    echo strlen($name);
    echo "<br><br>";
    ?>

    <!-- str_word_count() function -->
    <?php
    echo "<b><u>str_word_count() function</u></b> <br>"; //str_word_count() function counts the number of words in a string
    $name = "johirul islam";
    echo "number of words in - johirul islam : ";
    echo str_word_count($name);
    echo "<br><br>";
    ?>

    <!-- strrev() function -->
    <?php
    echo "<b><u>strrev() function</u></b> <br>"; //strrev() function reverses a string
    $name = "johirul islam";
    echo "Reverse the string - johirul islam : ";
    echo strrev($name);
    echo "<br><br>";
    ?>

    <!-- strpos() function -->
    <?php
    echo "<b><u>strpos() function</u></b> <br>"; //strpos() function searches for a specific text within a string
    $name = "johirul islam";
    echo "Search for the text 'islam' - johirul islam : ";
    echo strpos($name, "islam");
    echo "<br><br>";
    ?>

    <!-- str_replace() function -->
    <?php
    echo "<b><u>str_replace() function</u></b> <br>"; //str_replace() function replaces some characters with some other characters in a string
    $name = "johirul islam";
    echo "Replace the text 'johirul' with 'samin' - johirul islam : ";
    echo str_replace("johirul", "samin", $name);
    echo "<br><br>";
    ?>

    <!-- ucwords() printf() sprintf() -->
    <?php
    echo "<b><u>ucwords() function</u></b> <br>";
    $name = "johirul";
    $name = ucwords($name); //first letter capitalize
    echo $name;
    ?>

    <!-- printf() -->
    <?php
    $firstName = "johirul";
    $lastName = "islam";
    $fullName = "<div>
                    <h5>%s</h5>
                    <h6>%s</h6>
                </div>";
    printf($fullName, ucwords($firstName), ucwords($lastName));
    ?>

    <?php
    echo "<b><u>Printf() function</u></b> <br>";
    $name = "johirul";
    $age = 24;
    $cgpa = 4.3;
    $isRegistered = true;
    $character = 74;
    $binary = 20;
    $octal = 10;
    $hexadecimal = 15;
    printf("Name: %s, Age:  %d, cgpa: %f, Registered: %b, Character: %c, Binary: %b, Octal: %o, Hexadecimal: %x", $name, $age, $cgpa, $isRegistered, $character, $binary, $octal, $hexadecimal);
    echo "<br>";
    ?>

    <?php
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    printf("Num2 : %2\$d, Num3 : %3\$d, Num1 : %1\$d", $num1, $num2, $num3); //integer: argument change and value not change
    echo "<br>";
    ?>

    <?php
    $num = 100;
    printf('Num : %1$d, anotherNum : %1$d', $num); //integer: two argument and one value
    echo "<br>";
    ?>

    <?php
    $firstName = "johirul";
    $lastName = "islam";
    printf('lastName : %2$s, firstName : %1$s', $firstName, $lastName); //string: argument change and value not change
    echo "<br>";
    ?>

    <?php
    $floatNum = 12.32;
    printf('floatNumber is : %.2f', $floatNum); //floating number after two point
    echo "<br> <br>";
    ?>

    <!-- sprintf() -->
    <?php
    echo "<b><u>sprintf()</u></b> <br>";
    $name = "Johirul islam";
    $newName = sprintf("My name is %s", $name);  //sprintf assign the variable
    echo $newName;
    echo "<br><br>";
    ?>

    <!-- align -->
    <?php
    echo "<b><u>Right and left align</u></b> <br>";
    $name = "Johirul";
    printf("[%12s]", $name); //right align and left space -- [ Johirul] 
    ?>
    <?php
    $name = "Johirul";
    printf("[%-12s]", $name); //left align and right space -- [Johirul ]
    ?>
    <?php
    $name = "Johirul";
    printf("[%012s]", $name); //right align and left 00000 -- [00000Johirul]
    ?>
    <?php
    $name = "Johirul";
    printf("[%-012s]", $name); //left align and right 00000 -- [Johirul00000]
    ?>
    <?php
    $name = "Johirul";
    printf("[%'*12s]", $name); //right align and left ***** -- [*****Johirul]
    ?>
    <?php
    $name = "Johirul";
    printf("[%-'*12s]", $name); //left align and right ***** -- [Johirul*****]
    ?>
    <?php
    $name = "Johirul Islam";
    printf("[%'#10.7s]", $name); //print [###Johirul]
    ?>
    <?php
    $name = "Johirul Islam";
    printf("[%-'#10.7s]", $name); //print [Johirul###]
    echo "<br> <br>";
    ?>

    <!-- Arithmetic Operators -->
    <?php
    echo "<b><u>Arithmetic Operators</u></b> <br>";
    echo "<i>num1= 9, num2= 2</i> <br>";
    $num = 9 + 2;
    echo "addition operator + : $num"; //Sum of $num1 and $num2
    echo "<br>";
    ?>
    <?php
    $num = 9 - 2;
    echo "Subtraction operator - : $num"; //Difference of $num1 and $num2
    echo "<br>";
    ?>
    <?php
    $num = 9 * 2;
    echo "Multiplication operator * : $num"; //Product of $num1 and $num2
    echo "<br>";
    ?>
    <?php
    $num = 9 / 2;
    echo "Division operator / : $num"; //Quotient of $num1 and $num2
    echo "<br>";
    ?>
    <?php
    $num = 9 % 2;
    echo "Modulus operator % : $num"; //Remainder of $num1 and $num2
    echo "<br>";
    ?>
    <?php
    $num = 9 ** 2;
    echo "Exponentiation operator ** : $num"; //Result of raising $num1 to the $num2'th power
    echo "<br> <br>";
    ?>

    <!-- Assignment Operators -->
    <?php
    echo "<b><u>Assignment Operators</u></b> <br>";
    echo "<i>num1= 5, num2= 2</i> <br>";
    $num = 5;
    echo "Assign = :  $num";
    echo "<br>";
    ?>
    <?php
    $num = 5;
    $num += 2;
    echo "Addition assign += : $num";
    echo "<br>";
    ?>
    <?php
    $num = 5;
    $num -= 2;
    echo "Subtraction assign -= : $num";
    echo "<br>";
    ?>
    <?php
    $num = 5;
    $num *= 2;
    echo "Multiplication assign *= : $num";
    echo "<br>";
    ?>
    <?php
    $num = 5;
    $num /= 2;
    echo "Division assign /= : $num";
    echo "<br>";
    ?>
    <?php
    $num = 5;
    $num %= 2;
    echo "Modulus assign %= : $num";
    echo "<br><br>";
    ?>

    <!-- 
        Author   : Johirul Islam
        Github   : https://github.com/johirulshaky
        Facebook : https://facebook.com/johirulshaky
        Linkedin : https://linkedin.com/in/johirulshaky
        Instagram: https://www.instagram.com/johirulshaky/
    -->

    <!-- Increment / Decrement Operators -->
    <?php
    echo "<b><u>Increment / Decrement Operators</u></b> <br>";
    echo "<i>num= 10</i> <br>";
    $number = 10;
    echo "Pre-increment ++num : " . ++$number; //Increments $number by one, then returns $number
    echo "<br>";
    ?>
    <?php
    $number = 10;
    echo "post-increment num++ : " . $number++; //Returns $number, then increments $number by one
    echo "<br>";
    ?>
    <?php
    $number = 10;
    echo "pre-decrement --num : " . --$number; //Decrements $number by one, then returns $number
    echo "<br>";
    ?>
    <?php
    $number = 10;
    echo "post-decrement num-- : " . $number--; //Returns $number, then decrements $number by one
    echo "<br><br>";
    ?>

    <!-- String Operators -->
    <?php
    echo "<b><u>String Operators</u></b> <br>";
    echo "<i>firstName = Johirul, lastName = Islam</i> <br>";
    $firstName = "Johirul";
    $lastName = " Islam";
    echo "Concatenation . : " . $firstName . $lastName;
    echo "<br>";
    ?>
    <?php
    $firstName = "Johirul";
    $firstName .= " Islam";
    echo "Concatenation assignment .= : " . $firstName;
    echo "<br><br>";
    ?>

    <!-- Comparison Operators -->
    <?php
    echo "<b><u>Comparison Operators</u></b> <br>";
    echo "<i>number1 = 25, number2 = 20</i> <br>";
    $number1 = 25;
    $number2 = 20;
    echo "Equal == : ";
    var_dump($number1 == $number2); // returns false because values are not equal
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = "20";
    echo "Identical === : ";
    var_dump($number1 === $number2); // returns false because types are not equal
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Not equal != : ";
    var_dump($number1 != $number2); // returns true because values are not equal
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Not equal <> : ";
    var_dump($number1 <> $number2); // returns true because values are not equal
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = "20";
    echo "Not identical !== : ";
    var_dump($number1 !== $number2); // returns true because types are not equal
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Greater than > : ";
    var_dump($number1 > $number2); // returns true because $number1 is greater than $number2
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Less than < : ";
    var_dump($number1 < $number2); // returns false because $number1 is not less than $number2
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Greater than or equal to >= : ";
    var_dump($number1 >= $number2); // returns true because $number1 is greater than or equal to $number2
    echo "<br>";
    ?>
    <?php
    $number1 = 25;
    $number2 = 20;
    echo "Less than or equal to <= : ";
    var_dump($number1 <= $number2); // returns false because $number1 is not less than or equal to $number2
    echo "<br>";
    ?>
    <?php
    $number1 = 10;
    $number2 = 20;
    echo "Spaceship 10<=>20 : ";
    var_dump($number1 <=> $number2); // returns -1 because $number1 is less than $number2
    echo " // returns -1 because number1 is less than number2";
    echo "<br>";
    ?>
    <?php
    $number1 = 10;
    $number2 = 10;
    echo "Spaceship 10<=>10 : ";
    var_dump($number1 <=> $number2); // returns 0 because $number1 is equal $number2
    echo " // returns 0 because number1 is equal number2";
    echo "<br>";
    ?>
    <?php
    $number1 = 20;
    $number2 = 10;
    echo "Spaceship 20<=>10 : ";
    var_dump($number1 <=> $number2); // returns +1 because $number1 is greater than $number2
    echo " // returns +1 because number1 is greater than number2";
    echo "<br><br>";
    ?>

    <!-- Logical Operators -->
    <!-- and Operators -->
    <?php
    echo "<b><u>Logical Operators / if, else statement</u></b> <br>";
    echo "<i>num1 = 25, num2 = 20</i> <br>";
    $num1 = 25;
    $num2 = 20;
    echo "And operator - num1 == 25 and num2 == 20 : ";
    if ($num1 == 25 and $num2 == 20) {
        echo "both num1 and num2 true"; //True if both $num1 and $num2 are true
        echo "<br>";
    }else{
        echo "both num1 and num2 not true";
        echo "<br>";
    }
    ?>
    <!-- && Operators -->
    <?php
    $num1 = 25;
    $num2 = 20;
    echo "&& operator - num1 == 25 && num2 == 30 : ";
    if ($num1 == 25 && $num2 == 30) {
        echo "both num1 && num2 true"; //True if both $num1 and $num2 are true
        echo "<br>";
    }else{
        echo "both num1 && num2 not true";
        echo "<br>";
    }
    ?>
    <!-- or Operators -->
    <?php
    $num1 = 25;
    $num2 = 20;
    echo "Or operator - num1 == 25 or num2 == 30 : ";
    if ($num1 == 25 or $num2 == 30) {
        echo "either num1 or num2 true"; //True if either $num1 or $num2 is true
        echo "<br>";
    }else{
        echo "either num1 or num2 not true";
        echo "<br>";
    }
    ?>
    <!-- || Operators -->
    <?php
    $num1 = 25;
    $num2 = 20;
    echo "|| operator - num1 == 20 || num2 == 30 : ";
    if ($num1 == 20 || $num2 == 30) {
        echo "either num1 || num2 true"; //True if either $num1 or $num2 is true
        echo "<br>";
    }else{
        echo "either num1 || num2 not true";
        echo "<br>";
    }
    ?>
    <!-- xor operators -->
    <?php
    $num1 = 25;
    $num2 = 20;
    echo "Xor operator - num1 == 25 xor num2 == 30 : ";
    if ($num1 == 25 xor $num2 == 30) {
        echo "either num1 or num2 true, but not both"; //True if either $num1 or $num2 is true, but not both
        echo "<br>";
    }else{
        echo "false";
        echo "<br>";
    }
    ?>
    <?php
    $num1 = 25;
    $num2 = 20;
    echo "Xor operator - num1 == 25 xor num2 == 20 : ";
    if ($num1 == 25 xor $num2 == 20) {
        echo "either num1 or num2 true, but not both"; //True if either $num1 or $num2 is true, but not both
        echo "<br>";
    }else{
        echo "false, num1 or num2 value same";
        echo "<br>";
    }
    ?>
    <!-- ! Operators -->
    <?php
    $num1 = 25;
    echo "! operator - num1 !== 20 : ";
    if ($num1 !== 20) {
        echo "true"; //True if $num1 is not true
        echo "<br>";
    }else{
        echo "false";
        echo "<br>";
    }
    ?>
    <?php
    $num1 = 25;
    echo "! operator - num1 !== 25 : ";
    if ($num1 !== 25) {
        echo "true";
        echo "<br>";
    }else{
        echo "false"; //True if $num1 is true
        echo "<br><br>";
    }
    ?>

    <!-- if..... else -->
    <?php
    echo "<b><u>if statement</u></b> <br>";
    $number1 = 24;
    $number2 = 35;
    if ($number1 < $number2) {     //The if statement executes some code if one condition is true
        echo "This condition is true";
    }
    echo "<br><br>";
    ?>

    <!-- if..... else -->
    <?php
    echo "<b><u>if.....else statement</u></b> <br>";
    $number1 = 20;
    $number2 = 20;
    if ($number1 == $number2) {     //The if...else statement executes some code if a condition is true and another code if that condition is false
        echo "This condition is true";
    }else{
        echo "This condition is false";
    }
    echo "<br><br>";
    ?>

    <!-- if...elseif... else -->
    <?php
    echo "<b><u>if...elseif...else statement</u></b> <br>";
    $number1 = 20;
    $number2 = 30;
    if ($number > $number2) {       //The if...elseif...else statement executes different codes for more than two conditions
        echo "number1 is big";
    }elseif($number1 == $number2){
        echo "number1 and number2 is equal";
    }else{
        echo "number2 is big";
    }
    echo "<br><br>";
    ?>

    <!-- switch -->
    <?php
    echo "<b><u>switch statement</u></b> <br>";
    $color = "red";
    switch ($color) {     //Use the switch statement to select one of many blocks of code to be executed
        case "white":
            echo "Your favourite color is white";
            break;
        case "red":
            echo "Your favourite color is red";
            break;
        case "green":
            echo "Your favourite color is green";
            break;
        case "blue":
            echo "Your favourite color is blue";
            break;
        default:
            echo "Your favourite color is neither white, red, green nor blue";
            break;
    }
    echo "<br><br>";
    ?>

    <!-- while loop -->
    <?php
    echo "<b><u>while loop</u></b> <br>";
    echo "variable++ <br>";
    $num = 1;
    while ($num <= 10) {              //The while loop executes a block of code as long as the specified condition is true
        echo "the number is : $num <br>";
        $num++;
    }
    ?>
    <?php
    echo "variable+= <br>";
    $num = 1;
    while ($num <= 100) {
        echo "the number is : $num <br>";
        $num+= 10;
    }
    echo "<br>";
    ?>

    <!-- do...while loop -->
    <?php
    echo "<b><u>do...while loop</u></b> <br>";
    $num = 1;
    do {    //The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true
        echo "The number is : $num <br>";
        $num++;
    } while ($num <= 10);
    echo "<br>";
    ?>

    <!-- for loop -->
    <?php
    echo "<b><u>for loop</u></b> <br>";
    for ($num=0; $num <= 10 ; $num++) {     //The for loop is used when you know in advance how many times the script should run
        echo "The number is : $num <br>";
    }
    echo "<br>";
    ?>

    <!-- foreach loop -->
    <?php
    echo "<b><u>foreach loop</u></b> <br>";
    $name = array("Johirul", "samin", "abir");
    foreach ($name as $value) {          //The foreach loop works only on arrays, and is used to loop through each key/value pair in an array
        echo "$value <br>";
    }
    ?>
    <?php
    $students = array("Johirul" => "24", "Samin" => "18", "abir" => "15");
    foreach ($students as $name => $age) {
        echo "$name = $age <br>";
    }
    echo "<br>";
    ?>

    <!-- function() -->
    <?php
    echo "<b><u>function()</u></b> <br>";
    function myFunction(){      //function 
        echo "Hello world <br>";
    }
    myFunction();
    ?>
    <?php
    function county(){
        return "Hello Bangladesh <br>";
    }
    echo county();
    ?>
    <?php
    function name($name){   //function argument
        echo "Hello $name";
    }
    name("Google <br>");
    ?>
    <?php
    function students($name = "Johirul", $age = 24){   //this is default value
        echo "Name: $name. Age: $age";
    }
    students("samin", 15);   //return Name: samin, Age: 15
    echo "<br><br>";
    ?>

    <!-- array() function -->
    <?php
    echo "<b><u>array() function, array count()</u></b> <br>";
    $name = array("Johirul", "Samin", "Abir", "siyam", "Sajid");
    echo "$name[0], $name[1], $name[2], $name[3], $name[4]";
    echo "<br> array count: ";
    echo count($name);      //array count()
    echo "<br><br>";
    ?>

    <!-- Loop Through an Indexed Array -->
    <?php
    echo "<b><u>Loop Through an Indexed Array</u></b> <br>";
    $name = array("Johirul", "samin", "Abir", "Sajid", "siyam");
    $arrayLength = count($name);
    for ($i=0; $i < $arrayLength; $i++) { 
        echo $name[$i];
        echo ", ";
    }
    echo "<br><br>";
    ?>

    <!-- Associative Arrays -->
    <?php
    echo "<b><u>Associative Arrays</u></b> <br>";
    $age = array(
        "Johirul" => "24", 
        "Samin" => "16", 
        "Abir" => "15", 
        "Siyam" => "28"
    );
    echo "Johirul: " . $age["Johirul"] . ", Samin: " . $age["Samin"] . ", Abir: " . $age["Abir"] . ", Siyam: " . $age["Siyam"];
    echo "<br>";
    echo "<pre>";
    print_r($age);      //print_r() 
    echo "</pre>";
    echo "gettype: " . gettype($age);  //gettype(variable) - return value type
    echo "<br> <br>";
    ?>

    <!-- Loop Through an Associative Array -->
    <?php
    echo "<b><u>Loop Through an Associative Array</u></b> <br>";
    $age = array("Johirul" => "24", "Samin" => "16", "Abir" => "15", "Siyam" => "28");
    foreach ($age as $key => $value) {
        echo "key = $key, value = $value";
        echo "<br>";
    }
    echo "<br>";
    ?>

    <!-- Multidimensional Arrays -->
    <?php
    echo "<b><u>Multidimensional Arrays</u></b> <br>";
    $mobile = array(
        array("Samsung", 24, 12),   // mobile stock or sold
        array("Vivo", 43, 23),
        array("Huawei", 32, 43),
        array("Oppo", 37, 34),
        array("Redmi", 46, 13)
    );
    echo $mobile[0][0] . ": In Stock: " . $mobile[0][1] . ", Sold: " . $mobile[0][2] . ". <br>";
    echo $mobile[1][0] . ": In Stock: " . $mobile[1][1] . ", Sold: " . $mobile[1][2] . ". <br>";
    echo $mobile[2][0] . ": In Stock: " . $mobile[2][1] . ", Sold: " . $mobile[2][2] . ". <br>";
    echo $mobile[3][0] . ": In Stock: " . $mobile[3][1] . ", Sold: " . $mobile[3][2] . ". <br>";
    echo $mobile[4][0] . ": In Stock: " . $mobile[4][1] . ", Sold: " . $mobile[4][2] . ". <br><br>";
    ?>

    <!-- loop multidimenstonal arrays -->
    <?php
    echo "<b><u>loop Multidimensional Arrays</u></b> <br>";
    $cars = array(
        array("Samsung", 24, 12),   // mobile stock or sold
        array("Vivo", 43, 23),
        array("Huawei", 32, 43),
        array("Oppo", 37, 34),
        array("Redmi", 46, 13)
    );
        
    for ($row = 0; $row < 5; $row++) {
    echo "<i><i>Row number $row</i></i>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
    }
    echo "<br>";
    ?>

    <!-- Sorting arrays -->
    <?php
    echo "<b><u>Sorting Arrays</u></b> <br>";
    ?>
    
    <div style="background: #80daf3; padding: 30px 10px;">

        <?php
        echo "<ul>";
        echo "<li>sort() - sort arrays in ascending order <br></li>";
        echo "<li>rsort() - sort arrays in descending order <br></li>";
        echo "<li>asort() - sort associative arrays in ascending order, according to the value <br></li>";
        echo "<li>ksort() - sort associative arrays in ascending order, according to the key <br></li>";
        echo "<li>arsort() - sort associative arrays in descending order, according to the value <br></li>";
        echo "<li>krsort() - sort associative arrays in descending order, according to the key <br></li>";
        echo "</ul>";
        ?>

    </div>

    <!-- Sort Array in Ascending Order - sort() -->
    <?php
    echo "<b>---sort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        //string
        $name = array("Johirul", "Samin", "Abir", "siyam", "Sajid");
        sort($name);
        $arrLength = count($name);
        for ($i=0; $i < $arrLength; $i++) { 
            echo $name[$i];
            echo "<br>";
        }
        //number
        $numbers = array(35,23,52,4,12,32);
        sort($numbers);
        $numberLength = count($numbers);
        for ($i=0; $i < $numberLength; $i++) { 
            echo $numbers[$i];
            echo "<br>";
        }
        ?>

    </div>

    <!-- Sort Array in Descending Order - rsort() -->
    <?php
    echo "<b>---rsort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        //string
        $name = array("habib", "korim", "rohim", "jamal", "samin", "abir");
        rsort($name);
        $arrLength = count($name);
        for ($i=0; $i < $arrLength; $i++) { 
            echo $name[$i];
            echo "<br>";
        }
        //number
        $numbers = array(23,12,42,53,32);
        rsort($numbers);
        $numberLength = count($numbers);
        for ($i=0; $i < $numberLength; $i++) { 
            echo $numbers[$i];
            echo "<br>";
        }
        ?>

    </div>

    <!-- Sort Array (Ascending Order), According to Value - asort() -->
    <?php
    echo "<b>---asort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        $age = array('Johirul' => 24, 'Samin' => 15, 'Sany' => 23, 'Rohim' => 32, 'Korim' => 34);
        asort($age);
        foreach ($age as $name => $years) {
            echo "Name: " . $name . ", Age: " . $years . "<br>";
        }
        ?>

    </div>

    <!-- Sort Array (Ascending Order), According to Key - ksort() -->
    <?php
    echo "<b>---ksort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        $age = array('Johirul' => 24, 'Samin' => 15, 'Sany' => 23, 'Rohim' => 32, 'Korim' => 34);
        ksort($age);
        foreach ($age as $name => $years) {
            echo "Name: " . $name . ", Age: " . $years . "<br>";
        }
        ?>

    </div>

    <!-- Sort Array (Descending Order), According to Value - arsort() -->
    <?php
    echo "<b>---arsort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        $age = array('Johirul' => 24, 'Samin' => 15, 'Sany' => 23, 'Rohim' => 32, 'Korim' => 34);
        arsort($age);
        foreach ($age as $name => $years) {
            echo "Name: " . $name . ", Age: " . $years . "<br>";
        }
        ?>
    
    </div>

    <!-- Sort Array (Descending Order), According to Key - krsort() -->
    <?php
    echo "<b>---krsort()</b> <br>";
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        $age = array('Johirul' => 24, 'Samin' => 15, 'Sany' => 23, 'Rohim' => 32, 'Korim' => 34);
        krsort($age);
        foreach ($age as $name => $years) {
            echo "Name: " . $name . ", Age: " . $years . "<br>";
        }
        echo "<br>";
        ?>

    </div>

    <!-- 
        Author   : Johirul Islam
        Github   : https://github.com/johirulshaky
        Facebook : https://facebook.com/johirulshaky
        Linkedin : https://linkedin.com/in/johirulshaky
        Instagram: https://www.instagram.com/johirulshaky/
    -->

    <!-- Global Variables - Superglobals -->
    <?php
    echo "<b><u>Global Variables - Superglobals</u></b> <br>";
    ?>
    
    <div style="background: #80daf3; padding: 30px 10px;">

        <?php
        echo "<ul>";
        echo '<li>$GLOBALS</li>';
        echo '<li>$_SERVER</li>';
        echo '<li>$_REQUEST</li>';
        echo '<li>$_POST</li>';
        echo '<li>$_GET</li>';
        echo '<li>$_FILES</li>';
        echo '<li>$_ENV</li>';
        echo '<li>$_COOKIE</li>';
        echo '<li>$_SESSION</li>';
        echo "</ul>";
        ?>

    </div>

    <!-- Superglobal - $GLOBALS -->
    <?php
    echo '<b>---$GLOBALS</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        $x = 23;
        $y = 43;
        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        echo '$x = 23, $y = 43 -- addition <br>';
        echo "z: $z <br>";
        ?>

    </div>

    <!-- Superglobal - $_SERVER -->
    <?php
    echo '<b>---$_SERVER</b> <br>';
    ?>
    
    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        echo "<strong style= 'color:dodgerblue'>Returns the filename of the currently executing script = </strong>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo "<strong style= 'color:dodgerblue'>Returns the name of the host server = </strong>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "<strong style= 'color:dodgerblue'>Returns the Host header from the current request = </strong>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo "<strong style= 'color:dodgerblue'>Returns the complete URL of the current page = </strong>";
        echo isset($_SERVER['HTTP_REFERER']);
        echo "<br>";
        echo "<strong style= 'color:dodgerblue'>Return the URL user agent = </strong>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo "<strong style= 'color:dodgerblue'>Returns the path of the current script = </strong>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
    ?>

    </div>

    <!-- Superglobal - $_REQUEST -->
    <div id="requestButton"></div>

    <?php
    echo '<b>---$_REQUEST</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // collect value of input field
            $name = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : '<span style=color:red>Name is empty</span>';
            if (empty($name)) {
                echo "<h3>Name: <span style=color:red>Name is empty</span></h3>";
            } else {
                echo "<h3>Name: <span style=color:green>$name</span></h3>";
            }
        }
        ?>

        <?php
        //REQUEST form submit system this page
        $user = isset($_REQUEST['user']) ? $_REQUEST['user'] : "johirulshaky";
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "johirul018641@gmail.com";
        $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "575859";
        ?>
        <form action="request.php" method="GET">
            <input type="text" name="user" placeholder="johirulshaky" required>
            <input type="email" name="email" placeholder="johirul018641@gmail.com" required>
            <input type="password" name="password" placeholder="********" required>
            <input type="submit" name="submit" value="sign up">
        </form>

    </div>

    <!-- Superglobal - $_POST -->
    <div id="postButton"></div>

    <?php
    echo '<b>---$_POST</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "<h3>Name: <span style=color:red>Name is empty</span></h3>";
            } else {
                echo "<h3>Name: <span style=color:green>$name</span></h3>";
            }
        }
        ?>

        <?php
        //POST form submit system this page
        $user = isset($_POST['user']) ? $_POST['user'] : "johirulshaky";
        $email = isset($_POST['email']) ? $_POST['email'] : "johirul018641@gmail.com";
        $password = isset($_POST['password']) ? $_POST['password'] : "575859";
        ?>
        <form action="post.php" method="POST">
            <input type="text" name="user" placeholder="johirulshaky" required>
            <input type="email" name="email" placeholder="johirul018641@gmail.com" required>
            <input type="password" name="password" placeholder="********" required>
            <input type="submit" name="submit" value="sign up">
        </form>

    </div>

    <!-- Superglobal - $_GET -->
    <div id="getButton"></div>

    <?php
    echo '<b>---$_GET</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
        //manualy value system
        echo "<a href='http://localhost/php/php-code/?subject=PHP&web=http://johirulshaky.com'>http://localhost/php/php-code/?subject=PHP&web=http://johirulshaky.com </a>";
        echo "Subject: " . $_GET['subject'] . " Web: " . $_GET['web'];
        echo "<br>";
        ?>

        <?php
        //default value system
        echo "<a href='http://localhost/php/php-code/?name=samin'>http://localhost/php/php-code/?name=samin </a>";
        if (isset($_GET['name'])) {
            echo $_GET['name'];
        }else {
            echo $_GET['name'] = " johirul";
        }
        echo "<br>";
        ?>

        <?php
        //blank value
        $name = isset($_GET['age']) ? $_GET['age'] : NULL;
        echo $name;
        echo "<br>";
        echo "<a href='http://localhost/php/php-code/'>main path</a>";
        echo "<br><br>";
        ?>

        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // collect value of input field
            $fullName = $_GET['name'];
            if (empty($fullName)) {
                echo "<h3>Name: <span style=color:red>Name is empty</span></h3>";
            } else {
                echo "<h3>Name: <span style=color:green>$fullName</span></h3>";
            }
        }
        ?>

        <?php
        //GET form submit system this page
        $user = isset($_GET['user']) ? $_GET['user'] : "johirulshaky";
        $email = isset($_GET['email']) ? $_GET['email'] : "johirul018641@gmail.com";
        $password = isset($_GET['password']) ? $_GET['password'] : "575859";
        ?>
        <form action="get.php" method="GET">
            <input type="text" name="user" placeholder="johirulshaky" required>
            <input type="email" name="email" placeholder="johirul018641@gmail.com" required>
            <input type="password" name="password" placeholder="********" required>
            <input type="submit" name="submit" value="sign up">
        </form>

    </div>

    <!-- Superglobal - $_SESSION -->
    <?php
    echo '<b>---$_SESSION</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
            // session_start();
            $_SESSION['welcome'] = "Welcome to PHP <br>";
            $_SESSION['name'] = "Johirul <br>";
            $_SESSION['bye'] = "Bye PHP <br>";

            print_r ($_SESSION);

            echo '<br><br><b>echo $_SESSION[ ]</b><br><br>';

            require_once "session.php";
        ?>

    </div>

    <!-- Superglobal - $_COOKIE -->
    <?php
    echo '<b>---$_COOKIE</b> <br>';
    ?>

    <div style="background: #bfdde8; padding: 30px 10px;">

        <?php
            print_r($_COOKIE);
        ?>

    </div>






















</div>


