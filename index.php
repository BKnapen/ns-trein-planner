<?php
    //require_once "vendor/autoload.php";
    require __DIR__ . "/vendor/autoload.php";

    use App\Trips\TripPlanner;
    
    $tripplanner = new TripPlanner();
    
    $tripplanner->set_fromStation("Eindhoven");
    $tripplanner->set_toStation("Utrecht");
    $tripplanner->set_departDateTime("2023-08-23T20:00:00+0200");
    
    $url = "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v3/trips?";
    $url .= "fromStation=".$tripplanner->get_fromStation()."&";
    $url .= "toStation=".$tripplanner->get_toStation()."&";
    $url .= "originWalk=false&";
    $url .= "originBike=false&"; 
    $url .= "originCar=false&";
    $url .= "destinationWalk=false&";
    $url .= "destinationBike=false&";
    $url .= "destinationCar=false&";
    $url .= "dateTime=".$tripplanner->set_departDateTime()."&";
    $url .= "shorterChange=false&";
    $url .= "travelAssistance=false&";
    $url .= "searchForAccessibleTrip=false&";
    $url .= "localTrainsOnly=false&";
    $url .= "excludeHighSpeedTrains=false&";
    $url .= "excludeTrainsWithReservationRequired=false&";
    $url .= "product=GEEN&";
    $url .= "discount=NO_DISCOUNT&";
    $url .= "travelClass=2&";
    $url .= "passing=false&";
    $url .= "travelRequestType=DEFAULT";

    $curl = curl_init($url);
    
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    # Request headers
    $headers = array(
        'Cache-Control: no-cache',
        'Ocp-Apim-Subscription-Key: 81c6df58fd86454b80577991531182c3',);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);
?>