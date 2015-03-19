<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/restaurant.php";
    require_once "src/cuisine.php";

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
            $cuisine = "Soul Food";
            $id = null;
            $test_cuisine = new Cuisine($cuisine, $id);
            $test_cuisine->save();

            $restaurant_name = "Home Town Buffet";
            $cuisine_id = $test_cuisine->getId();
            $test_restaurant = new Restaurant($restaurant_name, $id, $cuisine_id);
            $test_restaurant->save();


            //Act
            $result = $test_restaurant->getId();

            //Assert
            $this->assertEquals(true, is_numeric($result));
        }


        function test_cuisineId()
        {
            //Arrang
            $cuisine = "Soul food";
            $id = null;
            $test_cuisine = new Cuisine($cuisine, $id);
            $test_cuisine->save();

            $restaurant_name = "Home Town Buffet";
            $cuisine_id = $test_cuisine->getId();
            $test_restaurant = new Restaurant($restaurant_name, $id, $cuisine_id);
            $test_restaurant->save();


            //Act
            $result = $test_restaurant->getCuisineId();


            //Assert
            $this->assertEquals(true, is_numeric($result));
        }
    }

    ?>
