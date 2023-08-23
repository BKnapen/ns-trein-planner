<?php 
    namespace Webkompanen\Tripplanner;

    class Stations{
        public $queryRequest;

        function set_queryRequest($queryRequest) {
            $this->queryRequest = $queryRequest;
        }
        function get_queryRequest() {
            return $this->queryRequest;
        }
    }
?>