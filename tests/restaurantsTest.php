<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/restaurant.php";

    $DB = new PDO('pgsql:host=localhost;dbname=test_best_restaurants');

    class restaurantsTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Restaurant::deleteAll();
        }

        function test_getId()
        {
            //Arrange
            $name = "Home Town Buffet";
            $id = null;
            $test_name = new Restaurant($name, $id);
            $test_name->save();

            //Act
            $result = $test_name->getId();

            //Assert
            $this->assertEquals(true, is_numeric($result));
        }
    }

    ?>
