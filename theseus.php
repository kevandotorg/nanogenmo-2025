<html><head><title>The Edit History of Theseus</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quintessential&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&display=swap');
body { margin: 5% 20%; background: #cde6f2; color:#332; font-family: 'Libre Baskerville', serif; text-align: justify; }
div { padding:0.25em 0; text-indent: 2em; overflow-wrap: break-word; line-height: 1.6em; }
.fp { text-indent: 0em; }
a { text-decoration: none; color: #332; }
a:hover { text-decoration:underline; color:#900; background: #fdd;  }
hr { margin:2em 10em; }
.scroll { background:#fff;  padding: 3em; }

h1 { font-family: 'Quintessential', serif; font-size:3em; text-align:center }
.intro { text-indent: 0em; padding:0.25em 4em; font-family: 'Quintessential', serif; }
.intro a { text-decoration:underline; color:#900; }

@media screen and (max-width: 700px) {
body { margin:0.5em; }
.scroll { padding: 1em; }
}

</style>
</head>
<body>
<h1>The Edit History of Theseus</h1>

<div class="intro">This is a piece of text generated
for <a href="https://github.com/NaNoGenMo/2022/">NaNoGenMo 2025</a>
through <a href="https://github.com/kevandotorg/nanogenmo-2022">a script</a>
written by <a href="https://kevan.org">Kevan Davis</a>.</div>

<div class="intro">
The script takes the 24 year history of Wikipedia's human-written article on
<a href="https://en.wikipedia.org/wiki/Theseus">Theseus</a> and presents the 
incremental additions and changes to its text as a thread of spoken conversation between
a group of people. The
randomly-generated names of the speakers link to the historical edits. Some simple text
reversions and larger vandalism edits are deliberately omitted.</div>
<hr>
<div class="scroll">
<?php

$thespeakers = [];
$lastSpeaker = "";

$greekNames = ["Acacius","Achaikos","Achilles","Achilleus","Adamantios","Aeschylus","Aesop","Agape","Agapetos","Agapetus","Agapios","Agapius","Agatha","Agathangelos","Agathe","Agathinos","Agathinus","Agathocles","Agathokles","Agathon","Agelaos","Aikaterine","Aischylos","Aisopos","Akakios","Alcaeus","Alcetas","Alcibiades","Alcinoe","Alexander","Alexandra","Alexandros","Alexios","Alexis","Alexius","Alkaios","Alketas","Alkibiades","Ambrosia","Ambrosios","Ambrosius","Ampelios","Ampelius","Amyntas","Anacletus","Anakletos","Anastasia","Anastasios","Anastasius","Anatolia","Anatolios","Anatolius","Anaxagoras","Anaximander","Anaximandros","Andreas","Androcles","Androkles","Andronicus","Andronikos","Anicetus","Aniketos","Antenor","Anthousa","Antigone","Antigonos","Antigonus","Antikleia","Antikles","Antiochos","Antiochus","Antipater","Antipatros","Aphrodisia","Aphrodisios","Apollinaris","Apollodoros","Apollonia","Apollonides","Apollonios","Apollonius","Arcadius","Archelaos","Archelaus","Archestrate","Archestratos","Archestratus","Archimedes","Archippe","Archippos","Archippus","Areios","Arete","Argyros","Aristarchos","Aristarchus","Aristeas","Aristeides","Aristeus","Aristides","Aristocles","Aristodemos","Aristokles","Aristomache","Ariston","Aristophanes","Aristoteles","Aristotle","Arius","Arkadios","Arsenios","Arsenius","Arsinoe","Artemidoros","Artemios","Artemisia","Artemisios","Artemius","Artemon","Asclepiades","Asklepiades","Aspasia","Asterios","Asterius","Athanas","Athanasia","Athanasios","Athanasius","Athenais","Athenodoros","Atticus","Attikos","Auxentios","Auxentius","Basileios","Basilius","Berenice","Berenike","Bion","Callias","Callinicus","Cassander","Chares","Chariclea","Charikleia","Charilaos","Charis","Chariton","Charmion","Chloe","Chreste","Chrestos","Chrysanthe","Chrysanthos","Cleisthenes","Cleitus","Cleon","Cleopatra","Cléopâtre","Clisthenes","Clitus","Corinna","Corinthia","Cosmas","Cyrillus","Damasos","Damasus","Damianos","Damianus","Demetria","Demetrios","Demetrius","Democritus","Demokritos","Demon","Demophon","Demosthenes","Demostrate","Diocles","Diodoros","Diodorus","Diodotos","Diodotus","Diogenes","Diokles","Dion","Dionysia","Dionysios","Dionysius","Dionysodoros","Doris","Dorothea","Dorotheos","Dositheos","Dositheus","Draco","Drakon","Eirenaios","Eirene","Eleutherios","Eleutherius","Elpis","Empedocles","Empedokles","Epaphras","Epaphroditos","Epaphroditus","Epicrates","Epicurus","Epikouros","Epikrates","Epiktesis","Epiktetos","Epiphanes","Epiphanios","Epiphanius","Erastos","Eratosthenes","Euanthe","Euaristos","Euclid","Euclides","Eudocia","Eudokia","Eudokimos","Eudoxia","Eudoxos","Eugeneia","Eugenia","Eugenios","Eugenius","Eugraphios","Eukleides","Eulalia","Eumelia","Eunike","Euodia","Euphemia","Euphemios","Euphranor","Euphrasia","Eupraxia","Euripides","Eustachys","Eustathios","Eustathius","Eustorgios","Eustorgius","Euthymia","Euthymios","Euthymius","Eutropia","Eutropios","Eutropius","Eutychia","Eutychios","Eutychis","Eutychius","Eutychos","Evaristus","Gaiana","Gaiane","Galene","Galenos","Georgios","Georgius","Glaphyra","Helena","Helene","Heliodoros","Heracleitus","Heraclides","Heraclitus","Heraclius","Herais","Herakleides","Herakleios","Herakleitos","Hermagoras","Hermes","Hermogenes","Hermokrates","Hermolaos","Hero","Herodotos","Herodotus","Heroides","Heron","Hesiod","Hesiodos","Hesperos","Hieronymos","Hieronymus","Hilarion","Hippocrates","Hippokrates","Hippolytos","Hippolytus","Homer","Homeros","Hyacinthus","Hyakinthos","Hyginos","Hyginus","Hypatia","Hypatos","Iason","Irenaeus","Irene","Ireneus","Isidora","Isidoros","Isidorus","Isocrates","Isokrates","Kallias","Kallikrates","Kallinikos","Kallippos","Kallisto","Kallistos","Kallistrate","Karpos","Kassandra","Kassandros","Kleisthenes","Kleitos","Kleon","Kleonike","Kleopatra","Kleopatros","Korinna","Korinthia","Kosmas","Kyriakos","Kyrilla","Kyrillos","Lais","Laodice","Laodike","Leon","Leonidas","Leontia","Leontios","Leontius","Leucippus","Leukippos","Linos","Linus","Lycurgus","Lycus","Lydos","Lykos","Lykourgos","Lysander","Lysandra","Lysandros","Lysimache","Lysimachos","Lysimachus","Lysistrata","Lysistrate","Malthace","Malthake","Melanthios","Meleager","Meleagros","Melissa","Melite","Meliton","Melitta","Menander","Menandros","Menecrates","Menekrates","Menelaos","Menodora","Menophilos","Metrodora","Metrophanes","Milo","Milon","Miltiades","Mnason","Myron","Myrrhine","Myrto","Neilos","Nemesios","Nemesius","Neon","Neophytos","Nereus","Nicander","Nicanor","Nicasius","Nicodemus","Nicolaus","Nicomachus","Nicomedes","Nicostratus","Nikandros","Nikanor","Nikasios","Nike","Nikephoros","Niketas","Nikias","Nikodemos","Nikolaos","Nikomachos","Nikomedes","Nikon","Nikostrate","Nikostratos","Nilus","Nympha","Nymphas","Nymphe","Nymphodora","Nymphodoros","Olympas","Olympias","Olympiodoros","Olympos","Onesimos","Onesiphoros","Ophelia","Origenes","Pamphilos","Pamphilus","Pancratius","Pankratios","Pantaleon","Panther","Pantheras","Paramonos","Parmenides","Parthena","Pausanias","Pelagia","Pelagios","Pelagius","Pericles","Perikles","Phaedrus","Phaidros","Pherenike","Philadelphos","Philadelphus","Philandros","Phile","Philemon","Philippos","Philippus","Philo","Philokrates","Philomena","Philon","Philotheos","Philoumene","Phocas","Phoibe","Phoibos","Phokas","Photina","Photine","Photios","Plato","Platon","Ploutarchos","Polycarp","Polycrates","Polydoros","Polydorus","Polykarpos","Polykrates","Porphyrios","Porphyrius","Poseidonios","Posidonius","Praxiteles","Ptolemaeus","Ptolemaios","Ptolemais","Pyrrhos","Pyrrhus","Pythagoras","Rhode","Rhodopis","Rhoxane","Roxana","Sappho","Seleucus","Seleukos","Serapion","Simon","Simonides","Smaragdos","Socrates","Sokrates","Solon","Sophia","Sophocles","Sophokles","Sophos","Sophron","Sophus","Sosigenes","Sostrate","Soter","Soteria","Soterios","Soteris","Stephanos","Straton","Stratonice","Stratonike","Symmachos","Symmachus","Syntyche","Telemachos","Telemachus","Telesphoros","Telesphorus","Thaïs","Thais","Thales","Theano","Themistoclea","Themistocles","Themistokleia","Themistokles","Theocritus","Theodora","Theodoros","Theodorus","Theodosia","Theodosios","Theodosius","Theodota","Theodote","Theodotos","Theodotus","Theodoulos","Theodulus","Theokleia","Theokritos","Theon","Theophanes","Theophania","Theophila","Theophile","Theophilos","Theophilus","Theophylaktos","Theotimos","Theotimus","Theron","Thoukydides","Thrasyboulos","Thucydides","Timaeus","Timaios","Timarete","Timo","Timoleon","Timon","Timoteus","Timothea","Timotheos","Trophime","Trophimos","Tryphaina","Tryphon","Tryphosa","Tyche","Tychon","Xanthe","Xanthippe","Xanthippos","Xanthos","Xenagoras","Xenia","Xeno","Xenocles","Xenocrates","Xenokles","Xenokrates","Xenon","Xenophon","Xystos","Zenais","Zeno","Zenobia","Zenobios","Zenon","Zoe","Zoilos","Zoilus","Zopyros","Zosime","Zosimos","Zosimus","Zoticus","Zotikos"];
$greekIslands = ["Crete","Evia","Lesbos","Rhodes","Chíos","Kefalonia","Corfu","Lemnos","Samos","Naxos","Zakynthos","Thassos","Andros","Lefkada","Karpathos","Kos","Kythira","Icaria","Skyros","Paros","Tinos","Samothrace","Milos","Kea","Amorgos","Kalymnos","Ios","Kythnos","Astypalaia","Ithaca","Salamis","Skopelos","Mykonos","Syros","Aegina","Santorini","Serifos","Sifnos","Kasos","Alonnisos","Tilos","Symi","Leros","Hydra","Skiathos","Agios Efstratios","Sikinos","Nisyros","Psara","Anafi"];

shuffle($greekNames);
for ($i=0; $i<220; $i++)
{
	shuffle($greekIslands);

	$chosenName = array_shift($greekNames);
	array_push($greekNames,"$chosenName of ".$greekIslands[0],"$chosenName of ".$greekIslands[1],"$chosenName of ".$greekIslands[2],"$chosenName of ".$greekIslands[3],"$chosenName of ".$greekIslands[4],"$chosenName of ".$greekIslands[5]);
}
shuffle($greekNames);

//processDiff(12527488, 12527554, "test"); exit;

// quick hardcode of the first diff because the API doesn't return it like the others
speak("Jtheo", "Theseus (Θησευς) King of Athens, son of Aegeas (or of Poseidon)", "https://en.wikipedia.org/w/index.php?title=Theseus&oldid=290271", 1);

speak("Jtheo", "Aigeas (king of Athens) went to Troezena (a city located SW of Athens) and met with (sorry, forgot the name), daughter of Troezena's king. 
When she got pregnant, Aegeas decided to go back to Athens. Before leaving, he covered his shield and sword under a huge rock and told her that when their 
son would grow up, he should move the rock and bring his weapons back.", "https://en.wikipedia.org/w/index.php?title=Theseus&oldid=290271");

speak("Jtheo", "Indeed. Theseus grew up and became a brave young man. He managed to move the rock and got his father's arms. His mother then told him the 
truth about who his father was and how he should take the weapons back to him. Theseus had to go to Athens and could chooes to go by sea, which was the safe 
way and by land, following a dangerous path with thieves all the way long. Young, brave and ambitious, Theseus decided to go to Athens by land. ", 
"https://en.wikipedia.org/w/index.php?title=Theseus&oldid=290271");

fetchHistory("https://api.wikimedia.org/core/v1/wikipedia/en/page/Theseus/history?older_than=210242");

function fetchHistory($url,$carriedrev=0,$carrieduser=0,$carriedcomment="")
{
    $history = getFromAPI($url);
    $history = json_decode($history, true);
	debugnote("<h2>".$url."</h2>");
    $startrev = 19;
	while (!isset($history["revisions"][$startrev]["id"])) { $startrev--; }

	if ($carriedrev != 0 && !isARevert($carriedcomment))
	{
        processDiff($carriedrev, $history["revisions"][$startrev]["id"], $carrieduser);
	}

    for ($i = $startrev;$i > 0;$i--)
    {
        if (isset($history["revisions"][$i]["id"]) && isset($history["revisions"][$i]["user"]["name"]))
        {
			debugnote("<h2>h2: ".$history["revisions"][$i-1]["comment"]." (".$history["revisions"][$i-1]["id"].", ".$history["revisions"][$i-1]["user"]["name"].")</h2>");
			if (isARevert($history["revisions"][$i-1]["comment"])) // skip over straight reverts
			{
				debugnote("skipped");
				$difflink = "https://en.wikipedia.org/w/index.php?diff=".$history["revisions"][$i]["id"]."&oldid=".$history["revisions"][$i - 1]["id"];
				speak($history["revisions"][$i]["user"]["name"],
						"No.",
						$difflink);
			}
			else
            {
				processDiff($history["revisions"][$i]["id"], $history["revisions"][$i - 1]["id"], $history["revisions"][$i-1]["user"]["name"]);
			}
            debugnote("diffing ends");
        }
    }

    if (isset($history["newer"]) && 1 == 1)
    {
        fetchHistory($history["newer"],$history["revisions"][1]["id"], $history["revisions"][1]["user"]["name"], $history["revisions"][1]["comment"]);
    }
}

function isARevert($summary)
{
	if (preg_match("/(WP:UNDO|Revert|BOT - rv|Reversion|Undo revision|Undid)/",$summary)) { debugnote("revert found"); return true; }
	return false;
}

function processDiff($from, $to, $user)
{
    //print "[diff $from/$to/$user]";
	
    $wikipedia = getFromAPI("https://en.wikipedia.org/w/api.php?action=compare&fromrev=".$from."&torev=".$to."&format=xml", 1);

    $difflink = "https://en.wikipedia.org/w/index.php?diff=".$to."&oldid=".$from;

    debugnote($wikipedia);
	
	$spoke = 0;
	
	if (abs(substr_count($wikipedia,"deletedline") - substr_count($wikipedia,"addedline"))>50) 
	{
		// 50 paragraphs added or removed is likely to be the article being blanked or restored
	}
    elseif (preg_match("/<td/", $wikipedia)) // any HTML here at all?
    {
        $xml = simplexml_load_string($wikipedia) or die("Error: Cannot create object");

        $delpara = "";
        $inspara = "";
		$delfullpara = "";
		$previouspara = "";
		
        foreach ($xml->tr as $tr)
        {
            foreach ($tr->td as $td)
            {
				$attr=$td->attributes();
				$tdclass = $attr["class"];
				
                $para = $td->div->saveXML();
                debugnote("para=".$para.", delpara currently [$delpara]");
                $para = stripSilence($para);

                if (preg_match("/<(del|ins)/", $para, $matches) || preg_match("/<(del|ins)/", $delpara, $matches))
                {
                    $para = italicise($para);

                    //print "<div style=\"border:1px solid red\">".$matches[1].": $para</div>";

                    if ($matches[1] == "del")
                    {
                        $delpara = $para; debugnote("deletion found");
                    }
                    if ($matches[1] == "ins")
                    {
                        $inspara = $para; debugnote("insertion found");
                    }
					
					debugnote("now comparing [$delpara] and [$inspara]");

                    if (dropTags($delpara) == dropTags($inspara))
                    {
						debugnote("droptags match");
                        [$delpara, $inspara] = pareAgainst($delpara, $inspara);
						debugnote("now comparing [$delpara] and [$inspara]");

						speakNotXButY($user,$delpara,$inspara,$difflink);

						$spoke = 1;
                        $delpara = "";
                        $inspara = "";
						$delfullpara = "";
                    }
                    elseif (dropTags($previouspara) == dropTags($inspara))
                    {
						debugnote("droptags match prev");
						if (dropTags($inspara) != "")
						{
							speak($user, "But wait, what about '".pareToItalics($inspara)."'.", $difflink);
							$spoke = 1;
							$delpara = "";
							$inspara = "";
							$delfullpara = "";
						}
                    }
                    elseif (dropTags($delfullpara) == dropTags($inspara))
                    {
						debugnote("droptags match delfull");
                        [$delpara, $inspara] = pareAgainst($delfullpara, $inspara);

                        speakNotXButY($user,$delpara,$inspara,$difflink);
						$spoke = 1;
                        $delpara = "";
                        $inspara = "";
						$delfullpara = "";
                    }
                    else { debugnote("No match for\n[".dropTags($delpara)."] or [".dropTags($previouspara)."] \n to\n".dropTags($inspara)."!"); }
                }
                elseif (preg_match("/diff-addedline/",$tdclass))
                {
					$para = italicise($para);
					debugnote("deladded = $para");
					
					if ($para == "") { $para = "[ENTRY VOID]"; }
					
					if (strip_tags($delfullpara) != strip_tags($para))
                    {
						debugnote("($para) ne ($delfullpara)");
						if (strlen($delfullpara)>strlen($para)) // something was cut, and since we got this far nothing was added
						{
							debugnote("paring");
							
							speak($user, randword("We should not say","We cannot say","It would be wrong to say","I don't think we can say")." ".pareToItalics($delfullpara)."", $difflink); $spoke = 1;
							$delfullpara = "";
						}
						else
						{
							debugnote("$para was added, time to say it");
							$preamble = randword("","","","Listen to what I say.","Let me tell you something.","This much I know is true:");
							speak($user, "$preamble $para", $difflink); $spoke = 1;
						}
					}
					else
					{
						debugnote("para anyway = $para"); 
						//speak($user, "I'll say this anyway: $para", $difflink); $spoke = 1;
						debugnote("para anyway2 = $para");
					}
					// <td class="diff-addedline diff-side-added">
                }
				else
				{
					debugnote("no match for anything = $para");
					//speak($user,"&mdash;",$difflink);
				}
				
				$previouspara = $para;

                if (preg_match("/diff-deletedline/",$tdclass))
                {
					debugnote("delfull was [$delfullpara], becomes [$para]");
					$delfullpara = italicise($para);
                }
            }
        }
		
		$attr=$td->attributes();
		debugnote("class=".$attr["class"]);

        if (pareToItalics($delpara) != "" && pareToItalics($delpara) != "<i></i>" && $spoke==0)
        {
            speak($user, "'".pareToItalics($delpara)."'? ".
			randword("That's wrong.","That is incorrect.","This cannot be.","You are mistaken.","I think not."), $difflink);
			$spoke = 1;
        }
        if (pareToItalics($inspara) != "" && pareToItalics($inspara) != "<i></i>")
        {
			$topic = pareToItalics(italicise($inspara));
			if (strlen(dropTags($topic))>1)
			{
				speak($user, 
						randword("I suggest: $topic.",
								 "I would add: $topic.",
								 "I would note: $topic.",
								 "But listen; $topic.",
								 "You forget: $topic."),
						$difflink);
				$spoke = 1;
			}
        }

    }
	
	//if ($spoke == 0) { speak($user,"&mdash;",$difflink); }
}


function pareAgainst($a, $b)
{
    $a = preg_replace("/<\/?div>/", "", $a);
    $b = preg_replace("/<\/?div>/", "", $b);

    while (substr($a, -1) == substr($b, -1) && $a != "" && substr($a, -1) != ">")
    {
        $a = substr($a, 0, -1);
        $b = substr($b, 0, -1);
    }
    while (substr($a, 0, 1) == substr($b, 0, 1) && $a != "" && substr($a, 0, 1) != "<")
    {
        $a = substr($a, 1);
        $b = substr($b, 1);
    }
//	if (strlen($a)<3) { $a="[ENTRY VOID]"; }
//	if (strlen($b)<3) { $b="[ENTRY VOID]"; }
    return [$a, $b];
}

function pareToItalics($x)
{
    $x = preg_replace("/<\/?(div|ins|del)>/", "", $x);
    $x = preg_replace("/<\/?a[^>]+>/", "", $x);
    
	if (preg_match("/<.+>/",$x))
	{
		while (substr($x, -1) != ">")
		{
			$x = substr($x, 0, -1);
		}
		while (substr($x, 0, 1) != "<")
		{
			$x = substr($x, 1);
		}
	}
	
	$x = preg_replace("/^<i>[.,!]* */", "<i>", $x);
	$x = preg_replace("/^[\*#] ?/", "", $x);

	if (strlen(dropTags($x))<2) { $x="[ENTRY VOID]"; }
	
	return $x;
}

function dropTags($x)
{
	$x =  preg_replace("/<i>[^<]*<\/i>/", "", $x);
	$x =  preg_replace("/  +/", " ", $x);
    return $x;
}

function plainSpeech($x)
{
	$x = html_entity_decode($x);
    $x = preg_replace("/[\*#]/", "", $x);
    $x = preg_replace("/<ref>[^<]+<\/ref>/", "", $x);
    $x = preg_replace("/<i>([^<]+)<\/i>/", "&lt;i&gt;$1&lt;/i&gt;", $x);
	$x = strip_tags($x);
	$x = html_entity_decode($x);
	$x = trim($x);
	
	$x = preg_replace("/(\. )?\.+$/",".",$x);
	$x = preg_replace("/([!,:;])\.+$/","$1",$x);
	
	if (strlen($x)<2) { $x="[ENTRY VOID]"; }
	
	return $x;
}

function italicise($x)
{
    $ital = preg_replace("/<(del|ins)[^>]+>([^<]*)<\/(del|ins)>/", "<i>$2</i>", $x);
    return $ital;
}

function getFromAPI($url, $cleanxml = 0)
{
    debugnote($url);
    $options = array(
        'http' => array(
            'method' => "GET",
            'header' => "User-Agent: 2025 NaNoGenMo project (contact kevan@kevan.org)\r\n"
        )
    );

    $context = stream_context_create($options);

    $out = file_get_contents($url, false, $context);

    if ($cleanxml == 1)
    {
        $out = preg_replace("/^.+>&/", "&", $out);
        $out = preg_replace("/<\/compare><\/api>$/", "", $out);

        $out = "<table>".html_entity_decode($out)."</table>";
    }

    return $out;
}

function stripSilence($i)
{
	debugnote("stripping $i");
    $i = preg_replace("/\[\[[^\|\]]+\|([^\]]+)\]\]/", "$1", $i);
    $i = preg_replace("/\[\[([^\]]+)\]\]/", "$1", $i);
    $i = preg_replace("/'''/", "$1", $i);
    $i = preg_replace("/''/", "$1", $i);
    $i = preg_replace("/{{[^}]+}}/", "", $i);
    $i = preg_replace("/<ref>[^<]*<\/ref>/", "", $i);
	debugnote("stripped $i");

    return $i;
}

function debugnote($i)
{
//	print "<div style=\"border:1px solid blue; color:blue\"><pre>$i</pre></div>";
    //print "<!-- [ $i ] -->\n";
}

function speak($user, $speech, $diff, $veryfirst = 0)
{
	global $thespeakers,$greekNames,$lastSpeaker;
	
	if (!in_array($user,$thespeakers))
	{ array_push($thespeakers,$user); }

	$speakernumber = array_search($user,$thespeakers)+1;
	
	$spokenname = $greekNames[$speakernumber];
	
	if (!preg_match("/[\.\?!,;:](<\/i>)?$/",$speech))
	{ $speech = $speech."."; }

//	$speech = preg_replace("/\(, +; +\) /","",$speech);
//	$speech = preg_replace("/ \(\)/","",$speech);

    if (preg_match("/^[a-z]+:[^ ]+$/",$speech))
	{ $speech = "[ENTRY VOID]"; }

	$speech = preg_replace("/\. +<\/i>\.$/",".</i>",$speech);

	$output = "";
	$said = randword("said","said","said","commented","noted","insisted","mused","whispered","ventured","smiled","hissed","yawned","cried","shouted");
	
//	print "\n[plain=".plainSpeech($speech)."]\n"; 
	if ($veryfirst == 1)
	{
		$output = "<div>\"".plainSpeech($speech)."\" <a href=\"$diff\">began $spokenname.</a></div>";
	}	
	elseif (preg_match("/==+ ?([^=]+) ?==+/",plainSpeech($speech),$matches))
	{
		$heading = plainSpeech($matches[1]);
		$output = "<hr><div class=\"fp\">\"".
					randword(randword("Now we","It is time to")." talk of $heading.",
							 "We must talk of $heading.",
							 randword("Now","It is time")." for a tale of $heading.",
							 "The tale turns to $heading.",
							 "Let us not forget $heading.",
							 "But what of $heading?",
							 "We cannot overlook $heading.",
							 "You ask me of $heading?")
					."\" <a href=\"$diff\">$said $spokenname</a>.</div>";
	}
	elseif ($speech == "No.")
	{
		//$output = "<div><a href=\"$diff\">$spokenname ".randword("made a gesture","made a dismissive gesture","shook their head","shook their head dismissively","muttered dismissively")."</a>.</div>";
	}
	elseif ($lastSpeaker != "" && $lastSpeaker != $user && rand(1,3)==1)
	{
		$speech = preg_replace("/==+/","",$speech);
		$output = randword("<div>In response to this, <a href=\"$diff\">$spokenname $said</a> \"".plainSpeech($speech)."\"</div>",
						   "<div><a href=\"$diff\">$spokenname ".randword("nodded","nodded in agreement","acknowledged this","paused","raised a hand")." and $said</a> \"".plainSpeech($speech)."\"</div>",
						   "<div>\"".plainSpeech($speech)."\" <a href=\"$diff\">$said $spokenname</a>, ".randword("nodding","in response").".</div>"
						   );
	}
	else
	{
		$speech = preg_replace("/==+/","",$speech);
		$output = randword("<div><a href=\"$diff\">$spokenname $said</a> \"".plainSpeech($speech)."\"</div>",
						   "<div>\"".plainSpeech($speech)."\" <a href=\"$diff\">$said $spokenname.</a></div>"
						   );
	}
	
	if ($lastSpeaker == $user)
	{
		$output = preg_replace("/".$spokenname." said/",$greekNames[$speakernumber]." ".randword("added","continued"),$output);
		$output = preg_replace("/said ".$spokenname."/",randword("added","continued")." ".$greekNames[$speakernumber],$output);
	}

	$output = preg_replace("/==+/","",$output);
	
	if ($veryfirst == 1) { $output = preg_replace("/<div>/","<div class=\"fp\">",$output); }

	if (!preg_match("/\[ENTRY VOID\]/",$output) && !preg_match("/thumb\|/",$output))
	{
		print $output;
		$lastSpeaker = $user;
	}	
}

function speakNotXButY($user,$x,$y,$difflink)
{
	$x = preg_replace("/^<i>[.,!]* */","<i>",$x);
	$y = preg_replace("/^<i>[.,!]* */","<i>",$y);
	$x = preg_replace("/<i><\/i>/","",$x);
	$y = preg_replace("/<i><\/i>/","",$y);
	$x = trim($x);
	$y = trim($y);
	if (strlen($x)<2) { $x="[ENTRY VOID]"; }
	if (strlen($y)<2) { $y="[ENTRY VOID]"; }
				
	if (preg_replace("/[\[\]]/","",$x) == preg_replace("/[\[\]]/","",$y))
	{
		// same but for wikilinks, skip it
	}
	elseif (worthSaying($x) && worthSaying($y))
	{	
		speak($user,
			randword("You don't mean '$x'.",
			"'$x'?",
			"What's that? '$x'?",
			"You are mistaken to say '$x'.",
			"What's that you say? '$x'?").
			" ".
			randword("You mean '$y'",
			"I think you mean '$y'",
			"You must mean '$y'",
			"It would be more correct to say '$y'")
			,
			$difflink);
	}
	else if (worthSaying($y))
	{
		speak($user,
			randword("I would add: $y",
			"It must be remembered: $y",
			"Do not forget: $y",
			"It would be more correct to say '$y'",
			"We are forgetting something: $y")
			,
			$difflink);
	}
}

function worthSaying($x)
{
	if ((dropTags($x) == "") || (preg_match("/\[ENTRY VOID]/",$x))) { return false; }
	else { return true; }
}

function randword()
{
	$args = func_get_args();
	
	$wordcount = count($args);
	
	if ($wordcount==2)
	{ $position = rand(0,1); }
	else
	{ $position = sqrt(rand(0, $wordcount*$wordcount - 1)); }
	return $args[$wordcount-1-$position];		
}


?>
</div class="scroll">
</body>
