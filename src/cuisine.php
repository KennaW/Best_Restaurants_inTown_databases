<?php

    class Cuisine
    {
        private $cuisine;
        private $id;

        function __construct($cuisine, $id = null)
            {

                $this->cuisine = $cuisine;
                $this->id = $id;

            }

        function setCuisine($new_cuisine)
            {
                $this->cuisine = (string) $new_cuisine;
            }

        function getCuisine()
            {
                return $this->cuisine;
            }

        function  setId($new_id)
            {
                $this->id = (int) $new_id;
            }


        function getId()
            {
                return $this->id;
            }

        function save()
            {

            }
    }
?>
