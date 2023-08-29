<?php

session_start();

$current_lang = $_SESSION["lang"] ? $_SESSION["lang"] : "bg";
define("LANG", $current_lang);

require "languages/$current_lang.php";
