<?php
    namespace App\Trips;

    class TripPlanner{
        public $fromStation;
        public $toStation;
        public $departDateTime;

        // Tripplanner depart information

        function set_fromStation($fromStation) {
            $this->fromStation = $fromStation;
        }
        function get_fromStation() {
            return $this->fromStation;
        }

        function set_departDateTime($departDateTime) {
            $this->departDateTime = $departDateTime;
        }
        function get_departDateTime() {
            return $this->departDateTime;
        }

        // Tripplanner arrival information
        function set_toStation($toStation) {
            $this->toStation = $toStation;
        }
        function get_toStation() {
            return $this->toStation;
        }
    }
?>