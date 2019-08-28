<?php
//--Data Warna--//
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
$orange = "\e[125";
//--Data warna--//
//system("figlet JnckFamz");
echo "$kuning ============================================================";
echo "\n";
echo "$merah   d8b                   888       .d8888b.   .d8888b.
   Y8P                   888      d88P  Y88b d88P  Y88b
                         888      888    888 Y88b. d88P
  8888 88888b.   .d8888b 888  888 888    888   Y88888 
   888 888  88b d88P     888 .88P 888    888 .d8P  Y8b.
   888 888  888 888      888888K  888    888 888    888
   888 888  888 Y88b.    888  88b Y88b  d88P Y88b  d88P
   888 888  888   Y8888P 888  888   Y8888P    Y8888P 
   888
  d88P
888P";
echo "\n";
echo "$kuning ============================================================";
echo "\n\n";
require "./cc.class.php";
echo ">> BIN : "; $bin = trim(fgets(STDIN)); // BIN
echo ">> Total : "; $total = trim(fgets(STDIN)); // TOTAL in Numeric
echo ">> RESULT <<"; 
echo "\n";
echo "==============================================";
echo "\n";
$check = $total; // BOOLEAN 1 or 0
$cc = new creditCardGenerator($bin, $total, $check);
$cc->getCC();
?>
