<?php

function UrlIs($link){
   return $_SERVER['REQUEST_URI'] === $link ;
}