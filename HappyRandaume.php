<?php
$pleaseDisplayAllHeroesBecauseItsEasierForDebug = false;
//    $pleaseDisplayAllHeroesBecauseItsEasierForDebug = true;
    
// Celui qui lit ceci est un crétin
// Version 2018-10-08 : ajout d'un random entre plusieurs noms pour les hérals
//         2018-10-08 : ajout de Grim (Fandango) et moult noms débiles en plus
// Versions entre temps : non loggées
// Version 2019-12-01 : ajout des deux nouveaux ploucs Snapfire et Void Spirit
// Version 2020-09-10 : Fix du Void Facefull qui était sur le spirit; ajouts; fix des indices en doubles ou plus par ajout d'espaces (bah oui, sinon, ils s'écrasent et il n'en reste qu'un)






function ban($val) {
    return "<span style='color:#DD0000'>$val</span>";
}
  
$heroes []= array_rand(Array("Anti-Mage" => 0, "Maginaab" => 1, "Magicrap" => 0));
$heroes []= array_rand(Array("Axe" => 0, "Axe " => 1, "Axe-&agrave;-assurance" => 2));
$heroes []= array_rand(Array("Crystal Maiden" => 0, "La cong&eacute;latrice chauve" => 1));
$heroes []= array_rand(Array("Dazzle" => 0,));
$heroes []= ban(array_rand(Array("Drow Ranged" => 0, "Dral" => 1, "Drow Ranger \o/ &nbsp;(<i>Repick or GTFO...)</i>" => 2,)));
$heroes []= array_rand(Array("Earthshaker !" => 0, "Earthshaker, pas &agrave; la cuill&egrave;re" => 1, "Earthshake it off" => 2,));
$heroes []= array_rand(Array("Lich" => 0, "Lich-tenstein" => 1, "Meuh Lich" => 2));
$heroes []= array_rand(Array("Lina" => 0, "Lina (pas les archives)" => 1, "Annihile inversée" => 2));
$heroes []= array_rand(Array("Lion" => 0, "Lion va mourir ce soir" => 1));
$heroes []= array_rand(Array("Mirana" => 0, "Miranaze" => 1, "Miranoob" => 2));
$heroes []= array_rand(Array("Morphling" => 0, "Où c'est qu'j'ai mis Morphling" => 1,));
$heroes []= array_rand(Array("Necro" => 0, "Negro" => 1));
$heroes []= array_rand(Array("Puck" => 0, "Puck Duckuk" => 1, "Puck Norris" => 2,));
$heroes []= array_rand(Array("&hearts; Pudge &hearts;" => 0,));
$heroes []= array_rand(Array("Razor" => 0, "Razor mach&sup3" => 1,));
$heroes []= array_rand(Array("Sand King" => 0,"Sand King" => 1, "SK" => 2));
$heroes []= array_rand(Array("Shadow Shaman" => 0,)); //(Champi-chanmeh) -- Chacun cha merde
$heroes []= array_rand(Array("Storm Spirit" => 0, "Storm Sprint" => 1,));
$heroes []= array_rand(Array("Sven" => 0, "Sven wonders" => 1,));
$heroes []= array_rand(Array("Tidehunter" => 0, "Tidal hunter, seafood dinner" => 1,)); // ou Meteor hammer
$heroes []= array_rand(Array("Vengeful Spirit" => 0,));
$heroes []= array_rand(Array("Windrunner" => 0, "Windyra Gandhi" => 1,));
$heroes []= array_rand(Array("Witch Doctor" => 0, "Bitch Doctor" => 1, "Outch Doctor" => 1));
$heroes []= array_rand(Array("Zeus" => 0, "Monsieur Zeus et tout" => 1, "Bonjour Nimbus (ft. Zeus)" => 2, ));
$heroes []= array_rand(Array("Slardar" => 0, "Slardar-dare-motus" => 1));
$heroes []= array_rand(Array("Enigma" => 0,));
$heroes []= array_rand(Array("Faceless Void (<i>Legacy not included</i>)" => 0, "Void facefull" => 1));
$heroes []= array_rand(Array("Tiny" => 0,));
$heroes []= (array_rand(Array("Viper" => 0, "Viper au point" => 1, "Viperma slow" => 2)));
$heroes []= array_rand(Array("Venomancer" => 0,));
$heroes []= array_rand(Array("Clockwerk" => 0, "Clockberk" => 1, "Puissant Clockwerk" => 2,));
$heroes []= array_rand(Array("Nature's Prophet" => 0, "Nature's Prophet de l'huma" => 1,));
$heroes []= array_rand(Array("Dark Seer" => 0, "Dark Seer, Dark Seer.  On en a gros" => 1,));
$heroes []= (array_rand(Array("Sniper" => 0, "Sniper de rien" => 1, "Sniper yoyo" => 2)));
$heroes []= array_rand(Array("Pugna" => 0, "Pugna-bruti" => 1,));
//https://www.reddit.com/r/DotA2/comments/4q2y22/anyone_have_a_plain_top_to_bottom_alphabetical/
/*http://dota2.gamepedia.com/Heroes_by_release
*/
//http://dota2.gamepedia.com/Table_of_hero_attributes
$heroes []= array_rand(Array("Beastmaster" => 0, "Beastmaster " => 0, "Beastlicense" => 1, "Beastdoctorat" => 2,));
$heroes []= array_rand(Array("Bambi the enchantress" => 0, "Bambi the enchantress" => 0, "Bambi spouinkmaster" => 1, "Bambi the spwinkmastress" => 2,));
$heroes []= array_rand(Array("Leshrac" => 0, "Meuh Lesh(rac)" => 1,));
$heroes []= array_rand(Array("Shadow Fiend" => 0, "Shadow Fiente" => 1,));
$heroes []= array_rand(Array("Tinker" => 0, "Tinker-lol" => 1, "Tinker-surprise" => 2,));
$heroes []= array_rand(Array("Weaver" => 0, "Weaver &agrave moiti&eacute; vide" => 1, "Weaver &agrave moiti&eacute; plein" => 2));
$heroes []= array_rand(Array("Night Stalker" => 0, "Night Stoker" => 1,));
$heroes []= array_rand(Array("Ancient Apparition" => 0, "Ancient Appariteur" => 1,));
$heroes []= array_rand(Array("Spectre" => 0, "Le Spectre d'Ottokar" => 1,));
$heroes []= array_rand(Array("Doom" => 0, "Doom di dou dam" => 1, "Doom you belieeeeeeve" => 2));
$heroes []= array_rand(Array("Chen" => 0, "Chen qui les brise" => 1, "Chen ai pas chanché" => 2, "Prof. Chen" => 3));
$heroes []= array_rand(Array("Juggernaut" => 0,));
$heroes []= array_rand(Array("Bloodseeker" => 0, "Bloodseeker " => 0, "Bloodseeker  " => 0, "Bloodseeker de tipiak" => 1));
$heroes []= array_rand(Array("Kunkka" => 0, "Kunkka (moulox)" => 1, "Kunkka, Kunkka,  Wirf die Gläser an die Wand,  Russland ist ein schönes Land,  Ho ho ho ho ho, Hey !" => 2));
$heroes []= array_rand(Array("Riki marrant" => 0, "Riki mouru" => 1));
$heroes []= array_rand(Array("Queen of Pain, <i>a.k.a. \"La Boulang&egrave;re&#174\"</i>" => 0,));
$heroes []= array_rand(Array("Leoric&nbsp;&nbsp;&lt;gnagna Wraith King&gt; ze King" => 0, "Leo dagon <i>a.k.a. \"Wraith King\"</i>" => 1));
$heroes []= array_rand(Array("Brood" => 0,"Broodmotha of the swarm" => 1, "Blood-mozza" => 2,));
$heroes []= ban(array_rand(Array("Huskar-rr&eacute;ment abusours" => 0,)));
$heroes []= array_rand(Array("Jakiro" => 0, "Jakiral" => 1, "Jakiro practeur" => 2));
$heroes []= array_rand(Array("Batrider" => 0, "Batrider mortuaire" => 1, "Crousti-Batrider" => 2,));
$heroes []= array_rand(Array("Omniknight" => 0, "Omniknight " => 0, "Ni homme, \"Ni !\" knight" => 1, "Omni  (c'est pas ouf)" => 2,));
$heroes []= array_rand(Array("Dragon Knight" => 0, "Knight-Dragon" => 1));
$heroes []= array_rand(Array("Warlock" => 0, "Warloque humaine" => 1,));
$heroes []= array_rand(Array("Alchemist" => 0, "Alchemist France" => 1,));
$heroes []= array_rand(Array("Lifestealer" => 0,));
$heroes []= array_rand(Array("Death Prophet" => 0, "Death Prophet ta pri&egrave;re" => 1,));
$heroes []= array_rand(Array("Ursa" => 0,));
$heroes []= array_rand(Array("Bounty Hunter" => 0, "Bounty Larson" => 1, "Gondar Hunter" => 2, "Bounty" => 3));
$heroes []= array_rand(Array("Silencer" => 0, "Silencer " => 0, "Silencer  " => 0, "Silencer   " => 0, "Silencer Emmanuel" => 1, "Silensoeur Emmanuelle" => 1, "Silencer est Manuel" => 1, "Silencer et Manouèl" => 1, "Lencer, Lencer, Lencer, Lencer, Lencer, Lencer" => 2, "Lencer, Lencer, Lencer, Lencer, Lencer, Lencer" => 2,));
$heroes []= array_rand(Array("Spirit &lt;combo&gt; Breaker" => 0,));
$heroes []= array_rand(Array("Invoker" => 0, "Invoker d'artichal" => 1,));
$heroes []= array_rand(Array("Clinkz" => 0, "Clinkz" => 1, "Clinkz" => 2, "Le cow-boy Clinkz-Clinkz" => 3,));
$heroes []= array_rand(Array("Outworld Devourer" => 0,));
$heroes []= array_rand(Array("Bane" => 0, "Bane (sans S&eacute;bastien)" => 1, "Bane (Ah, l'ordure !)" => 2, ));
$heroes []= array_rand(Array("Shadow Demon" => 0, "Shadow Demon de minuit" => 1));
$heroes []= array_rand(Array("Lycan mobile" => 0,));
$heroes []= array_rand(Array("Lone Druid" => 0, "Lone Druid sans alcool" => 1));
$heroes []= array_rand(Array("Brewmaster" => 0, "Brewmaster à la noix" => 1,));
$heroes []= array_rand(Array("Phantom Lancer" => 0,));
$heroes []= array_rand(Array("Treant Protector" => 0, "Treant plus franchement protector" => 1,));
$heroes []= array_rand(Array("Ogre Majax" => 0,));
$heroes []= array_rand(Array("Gyronoobter" => 0, "GyroDuRhum" => 1,"Gyronoobter en vue" => 2,));
//https://www.toptal.com/designers/htmlarrows/math/
//™ &trade; &#153;
//® &reg;   &#174;
//© &copy;  &#169;
//³ &sup3;  
//ë &euml
$heroes []= array_rand(Array("Chaos Knight" => 0, "Chaos Knight " => 0, "Chaos NI-gt" => 1));
$heroes []= array_rand(Array("Phantom Ass assin" => 0, "PA leurs âmes" => 1,));
$heroes []= array_rand(Array("Rubick" => 0, "Rubick " => 0, "Rubick  " => 0, "Rubick   " => 0, "Bick.ru" => 1,));
$heroes []= array_rand(Array("Luna" => 0, "Luna " => 0,));
$heroes []= array_rand(Array("Io" => 0, "Io-zless" => 1,));
$heroes []= array_rand(Array("Undying" => 0,)); //Déteindre
$heroes []= array_rand(Array("Disruptor" => 0, "Disruptor (&quot;sruptor&quot;)" => 1, "Maître Glimpse" => 2, ));
$heroes []= array_rand(Array("Templar Assassin" => 0,));
$heroes []= array_rand(Array("Naga Siren 2 thons" => 0, "Siren du p&egravere no&eumll" => 1, "Naga Siren des neiges" => 2,));
$heroes []= array_rand(Array("Nyx Assassin" => 0, "Nyx t'harass" => 1,));
$heroes []= array_rand(Array("Keeper of the light" => 0, "Keeper of the bright" => 1, "Keeper of the sight" => 2, "Keeper of the night" => 3, "Keeper of the fight" => 4, "Keeper of the might" => 5, "Keeper of the rights" => 6, "Keeper of the plights" => 7, "Keeper of delights" => 8));
$heroes []= array_rand(Array("Visage" => 0, "Visage comme une image" => 1,));
$heroes []= array_rand(Array("Meepwn" => 0, "Meepov' merde" => 1,));
$heroes []= array_rand(Array("Magnus" => 0, "Magnus <i>#SKEWEEEEEER</i>" => 1, "The great Magnus" => 1,));
$heroes []= array_rand(Array("Centaur Warrunner" => 0, "Centaur Warrunner (#MeteorHammerFTW)" => 1));
$heroes []= ban(array_rand(Array("Slark Kent" => 0, "Slark Kent" => 1, "Slark pact" => 2,)));
$heroes []= array_rand(Array("Timbersaw" => 0, "Timberpoivre" => 1,));
$heroes []= array_rand(Array("Medusa" => 0,));
$heroes []= array_rand(Array("Trollolol Warlord" => 0, "Troll Warlord des templiers" => 1,));
$heroes []= array_rand(Array("Tuskar ad-hoc" => 0,));
$heroes []= ban(array_rand(Array("Bristleback" => 0, "Bristleback " => 0, "Bristleback de Nicetleback" => 1, "Bristle (comme l'intermittent)" => 1,)));
$heroes []= array_rand(Array("Skywrath Mage" => 0,));
$heroes []= array_rand(Array("Elder Tauren chieftain" => 0,));
$heroes []= array_rand(Array("Abaddon" => 0, "Abaddon-don-don" => 0,));
$heroes []= array_rand(Array("Ember Spirit" => 0, "Ember Spirit " => 0, "Ember et l'argent d'Ember" => 1, "Embeurk spirit" => 2,));
$heroes []= ban(array_rand(Array("Earth Spirit" => 0, "Earth Spirit Toutpourrite" => 1, "Earth Spirit Toutpourrite" => 1, "Le machin qu'on repick parce qu'on sait pas comment qu'y marche" => 2, "Voidful Spirit combo-breaker" => 3)));
$heroes []= array_rand(Array("==> Legion Commander !! <==" => 0,));
$heroes []= array_rand(Array("Phoenix" => 0, "Phoenix ta m&egravere" => 1,));
$heroes []= array_rand(Array("Terrorblade" => 0,));
$heroes []= array_rand(Array("Techies" => 0,));
$heroes []= array_rand(Array("Oracle&trade;" => 0,));
$heroes []= array_rand(Array("Winter Wyvern" => 0, "Winter Wyvern is coming" => 1, "Winter &lang;Wings of liberty&rang; Wyvern" => 2));
$heroes []= array_rand(Array("Arc Warden" => 0, "Arc Warden composite" => 1,));
$heroes []= array_rand(Array("Pit Underlord" => 0, "Shitlord" => 1,));
$heroes []= array_rand(Array("Monkey King" => 0, "Monkey King " => 0, "Monkey King  " => 0, "Monkey ring   " => 1, "Scroll of town portal" => 2, "Healing salve" => 2, "Bounty rune" => 2));
$heroes []= array_rand(Array("Dark Willow" => 0, "Dark pillow" => 1,));
$heroes []= array_rand(Array("Pangolier" => 0, "Pangonidas" => 1, "Pangonavirus" => 2, ));
$heroes []= array_rand(Array("Grimstroke" => 0, "Grim &lt;Fandango&gt; stroke" => 1, "Grim Grim Grim" => 2));
$heroes []= array_rand(Array("Mars" => 0, "Mars l'avoine" => 1, "Mars rep&egrave;re" => 2, "L&egrave;ve toi et Mars" => 3, ));
$heroes []= array_rand(Array("Void spirit" => 0, "Void spourite" => 1));
$heroes []= array_rand(Array("Snapfire" => 0, "Snapfire" => 1, "Crapfire" => 2, "Mamie Snapfire et ses Kikoo-cookies qu'on clique" => 2));


if ($pleaseDisplayAllHeroesBecauseItsEasierForDebug == true) {
    //{ echo "<pre>"; var_dump($heroes); }
    echo "<pre>";
    while ($heroes) {
        echo(array_shift($heroes) . "<br>");
    }
}
shuffle($heroes);

for ($i=0; $i<floor(rand(299, 401) / 100); ++$i) {
  echo "-------------------------<br><span style='font-family:courier houpa'>" . PHP_EOL;
  echo "<span id=first>Random : "   . array_shift($heroes) . "</span><br>" . PHP_EOL;
  echo "Repick &nbsp&nbsp: <span id=first2$i style='display:none'>"   . array_pop($heroes) . "</span><button id='rpkbtn$i' onclick='repick$i($i)'>Repick</button><br>" . PHP_EOL;
  $mdr = array_splice($heroes, 42, 1);
  echo "Mulligan : <span id=first3$i style='display:none'>" . $mdr[0] . "</span><button id='mullibtn$i' onclick='mulligan($i)' style='display:none'>Mulligan !</button><br>" . PHP_EOL;
  
  echo "<br>" . PHP_EOL;
  echo "<br>" . PHP_EOL . '</span>';
}

  echo "#########################<br>" . PHP_EOL;
  echo "#########################<br>" . PHP_EOL;


Echo "<Br/>";
echo "<div id=\"pandora\" style=\"display:none\">";
$mdlol = 54;
while ($mdlol > 3) { //class=\"pandora\" 
    if ($mdlol > 45)
        $mdlol -= 3;
    if ($mdlol > 35)
        $mdlol -= 2;
    if ($mdlol > 25)
        $mdlol -= 1;
    if ($mdlol > 15)
        $mdlol -= 1;
    echo "<span style=\"font-size: ${mdlol}px; font-family: arial; font-weight: bold\">"   . array_shift($heroes) . "</span><br>" . PHP_EOL;
    $mdlol -= 2;
}
Echo "<BR><br/><BR/><br>";
echo "</div>";
   

Echo "Ruleset for season 3 : <br>" . PHP_EOL;
Echo "Repick cost   : <b>Free !</b>" . "<br>" . PHP_EOL;
Echo "Mulligan cost : <b>♪ It's open-Pandora's box ♫</b>" . "<br>" . PHP_EOL;
Echo "Roshan cost   : <b>1 cookie, & our long gone dignity</b>" . "<br>" . PHP_EOL;
Echo "Lazyness cost : <b>no CSS</b>" . "<br>" . PHP_EOL;
echo "<br><br><button id='couvercle' onclick='openIt()'>Open pandora's box</button><br>" . PHP_EOL;

/*   
Echo "Ruleset for season 2 : <br>" . PHP_EOL;
Echo "Repick cost   : <b>800 gold</b>" . "<br>" . PHP_EOL;
Echo "Mulligan cost : <b>Cursed meteor hammer</b> en lieu et place des <b>boots</b>" . "<br>" . PHP_EOL;
//Echo "Mulligan cost : <b>no courier</b>" . "<br>" . PHP_EOL;
Echo "Lazyness cost : <b>no CSS</b>" . "<br>" . PHP_EOL;
echo "<br><br><button id='couvercle' onclick='openIt()'>Open pandora's box</button><br>" . PHP_EOL;
*/

// Les autres aussi
?>
<script>
function repick0() {
    //console.log("");
    showStuff("first20", 1);
    showStuff("rpkbtn0", 0);
    showStuff("mullibtn0", 1);
}
function repick2() {showStuff("first22", 1);showStuff("rpkbtn2", 0);showStuff("mullibtn2", 1)};
function repick1() {
    showStuff("first21", 1);
    showStuff("rpkbtn1", 0);
    showStuff("mullibtn1", 1);
}
function repick3(i) {
    showStuff("first2" + i, 1);
    showStuff("rpkbtn" + i, 0);
    showStuff("mullibtn" +i, 1);
}
function mulligan(i) {
    showStuff("first3" + i, 1);
    //showStuff("rpkbtn1", 0);
    showStuff("mullibtn" + i, 0);
}

function showStuff(id, doShow) {
    if (doShow)
        document.getElementById(id).style.display = 'inline';
    else
        document.getElementById(id).style.display = 'none';
    //finally ... wait, what ?
}

function openIt() {
    document.getElementById("couvercle").style.display = 'none';
    document.getElementById("pandora").style.display = 'inline';
    //document.getElementsByClassName("pandora").style.display = 'inline';
}

</script>


<div id='srclol' style='display:none'><?php echo highlight_string ( file_get_contents(__FILE__) )?></div>
