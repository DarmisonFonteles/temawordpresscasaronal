<?php
/*
* Data Functions
* Desenvolvedor: Bruno Kiedis
*/

// PEGA O ANO DO CAMPO DATE DA TIMELINE
function data_evento($data){
    $time  = strtotime($data);
    $day   = date('d',$time);
    $month = date('m',$time);
    $year  = date('Y',$time);
  
    return $day.'/'.$month;
  
  }