<?php

// Okay I found the answer.  For phpunit --version 9.1.x and beyond the class of the test
// must agree with the filename of the test file.  So, instead of calling 
// phpunit hello-world_test.php  I should have renamed the test file to match
// the classname of the test:
// phpunit HelloWorldTest.php
// Once I did this the problem was solved.  Probably someone should document this.  :0)

function helloWorld()
{
    return "Hello, World!";
}

