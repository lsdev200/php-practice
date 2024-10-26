<?php

function arrayToXmlString($array, $rootElement = null, $xml = null) {
    if ($xml === null) {
        $xml = new SimpleXMLElement($rootElement === null ? '<root/>' : "<$rootElement/>");
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayToXmlString($value, $key, $xml->addChild($key));
        } else {
            $xml->addChild($key, $value);
        }
    }
    return $xml->asXML();
}

echo arrayToXmlString(array("name"=>"John", "age"=>30, "address"=>array("street"=>"123 Main", "city"=>"Anytown", "state"=>"IL")));
