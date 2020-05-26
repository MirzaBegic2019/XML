<?php

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" ?> <automobili></automobili>"); 
$auto = $xml->addChild("auto"); 
$auto->addAttribute("id", "01"); 
$auto->addAttribute("boja", "crvena"); 
$auto->addChild("proi:vodac", "Ferrari"); 
$auto->addChild("cijena", "250.000"); 
$auto2 = $xml->addChild("auto"); 
$auto2->addAttribute("id", "02"); 
$auto2->addAttribute("boja", "playa"); 
$auto2->addChild("proizvodac", "Porsche"); 
$auto2->addChild("cijena", "150.000"); 
echo $xml->asXML(); 
#var_dump($xml); 

?> 
