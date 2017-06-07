<?php

require('classes/Person.php');

//Create new person
$person = new Person('John Doe', 'jdoe@gmail.com', '1980-01-01');

//print results from the functions
echo "<h1>Welcome message</h1>";
echo $person->getWelcomeMessage();

echo "<h1>Age</h1>";
echo $person->getAge();
?>
