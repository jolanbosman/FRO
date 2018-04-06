<?php
// Array with names
$a[] = "Rainbow six siege";
$a[] = "Tom Clancy´s: Wildlands";
$a[] = "Terraria";
$a[] = "Stellaris";
$a[] = "Space Engineers";
$a[] = "Stardew Valley";
$a[] = "Rust";
$a[] = "G-mod";
$a[] = "Portal 2";
$a[] = "Unturned";
$a[] = "Tom Clancy's: phantoms";
$a[] = "7 Days To Die";
$a[] = "ASTRONEER";
$a[] = "Dying Light";
$a[] = "Dark Souls 3";
$a[] = "FTL";
$a[] = "The Crew";
$a[] = "Just Cause 2";
$a[] = "Just Cause 3";
$a[] = "The Crew 2";
$a[] = "Company of Heroes 2";
$a[] = "Heroes & Generals";
$a[] = "Battleblock Theater";
$a[] = "City:Skylines";
$a[] = "Castle Crashers";
$a[] = "Factorio";
$a[] = "Subnautica";
$a[] = "Civ 5";
$a[] = "Civ 6";
$a[] = "Insurgency";
$a[] = "Five Nights at Freddies";
$a[] = "Warhammer";
$a[] = "FORTNITE (GOD GAME)";
$a[] = "Counter-Strike";
$a[] = "Minecraft";
$a[] = "Arma 2";
$a[] = "Arma 3";
$a[] = "Fallout 4";
$a[] = "Ark Survival: Evolved";
$a[] = "Dota 2";
$a[] = "PUBG";
$a[] = "H1Z1";
$a[] = "Far Cry 5";
$a[] = "Far Cry 4";
$a[] = "Far Cry 3";
$a[] = "Far Cry Classic";
$a[] = "The Witcher";
$a[] = "Destiny 2";
$a[] = "Outlast";
$a[] = "League of Legends";
$a[] = "Left for dead 2";
$a[] = "Starwars: Battlefront 2";
$a[] = "Stick Fight: The Game";
$a[] = "Escape from tarkov";
$a[] = "Rocket League";
$a[] = "GTA IIV";
$a[] = "GTA IV";
$a[] = "GTA V";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
