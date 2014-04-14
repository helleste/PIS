<?php

if(isset($_POST["go"]))
  getLocals($_POST["psc"]);

function getLocals ($psc) {

  //step1
  $cSession = curl_init(); 
  //step2
  //curl_setopt($cSession,CURLOPT_URL,"http://smerovaci.cz/rejstrik/".$psc);
  curl_setopt($cSession,CURLOPT_URL, "http://www.yr.no/soek/soek.aspx?sted=letkov");
  curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($cSession,CURLOPT_HEADER, true);
  curl_setopt($cSession,CURLOPT_FOLLOWLOCATION, true); 
  //step3
  $result=curl_exec($cSession);
  //step4
  curl_close($cSession);
  //step5
  echo $result;
}