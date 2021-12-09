<?php
$age=20;
echo "You are".$age."years old.<br \>";
echo "You are $age years old.<br \>";
// You are 20 years old.
echo 'You are $age years old .<br \>';
// You are $age years old.
echo "Today is your $ageth birthday. <br\>";
// $ageth not found
echo "Today is your {$age}th birthday. <br\>";
// Today is your 20th birthday.
