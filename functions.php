<?php

function url_match($url)
{
  return $_SERVER["REQUEST_URI"] == $url;
}