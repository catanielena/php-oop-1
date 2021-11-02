<?php
    class Movie {
        private $title;
        private $genere;
        private $year;
        private $originaLanguage;

        function __construct($_title, $_genere, $_year, $_originaLanguage)
        {
            $this-> title = $_title;
            $this-> genere = $_genere;
            $this-> year = $_year;
            $this-> originaLanguage = $_originaLanguage;           
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }
    }
?>