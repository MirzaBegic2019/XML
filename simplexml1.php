<?php

$xmlTekst = <<<XML
<xml>
    <element> Prva vrijednost elementa </element> 
    <element> Druga vrijednost elementa </element> 
    <element> TreZa vrijednost elementa </element> 
</xml> 
XML; 

$xml = new SimpleXMLElement($xmlTekst); 
echo $xml->element[0]; 

?>
