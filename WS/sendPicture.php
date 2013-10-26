<?php

include_once './library/common.php';

if (isset($_REQUEST["method"]))
    $method=$_REQUEST["method"];
else
    $method="";

  $isPicture=(isset($_REQUEST["photo"]));

  switch ($method)
  {
  case "SaveInregistrare":
      if (isset($_REQUEST["tip"]))
        {
            $tip=$_REQUEST["tip"];
        }
        else
            $tip=1;
      if (isset($_REQUEST["Nume"]))
        {
            $nume=$_REQUEST["Nume"];
        }
        else
            $nume="";
        if (isset($_REQUEST["Numar"]))
        {
            $nr_tel=$_REQUEST["Numar"];
        }
        else
            $nr_tel=0;
        if (isset($_REQUEST["latitude"]))
        {
            $lat=$_REQUEST["latitude"];
        }
        else
            $lat=-1;
        if (isset($_REQUEST["longitude"]))
        {
            $long=$_REQUEST["longitude"];
        }
        else
            $long=-1;
      SaveInregistrare($tip,($isPicture)?$_REQUEST["photo"]:"" ,  $lat,$long, $nume, "", $nr_tel);
      break;
  case "test":
            if (isset($_REQUEST["DATA"]))
      {
          TestVB ($_REQUEST["DATA"]);
          echo $_REQUEST["DATA"];
      }
      if (isset($_REQUEST["Gina"]))
          TestVB ($_REQUEST["Gina"]);
      if (isset($_REQUEST["Bogdan"]))
          TestVB ($_REQUEST["Bogdan"]);


//      if (isset($_GET["DATA"]))
//          TestVB ($_GET["DATA"]);
//      if (isset($_GET["Gina"]))
//          TestVB ($_GET["Gina"]);
//      if (isset($_GET["Bogdan"]))
//          TestVB ($_GET["Bogdan"]);
    break;
  }
  

//return;







?>
