<?php

/*
In einer stürmischen Sommernacht sind die drei Piraten Ray, Tom und Steve
von ihrem Piratenschiff gespült worden.
Glücklicherweise konnten sie sich auf eine einsame Insel retten.
Am nächsten Morgen stellen sie fest, dass es neben reichlich Trinkwasser
auch jede Menge Bananen und eine paar friedliche Tiere auf der kleinen Insel gibt.

Da sie nichts zu essen haben, sammeln sie den ganzen Tag lang einen großen
Haufen Bananen und wollen diesen dann später gerecht aufteilen.

Jedoch bricht die Dunkelheit früher als erwartet herein, die Müdigkeit macht
sich längst breit und so wird die Teilung auf den nächsten Tag verschoben.

In der Nacht wacht Ray auf.
Er traut den anderen beiden nicht über den Weg und möchte sich daher
sein Drittel schon mal sichern. So zählt er die Bananen,
teilt die gesamte Anzahl durch drei und versteckt seinen Anteil
unweit der Quelle unter Laub und Sand. Bei seiner Rechnung ergibt
sich ein Rest von einer Banane, die er kurzerhand einem Affen spendiert
und sich danach wieder beruhigt Schlafen legt.
Nur eine Stunde später erwacht Tom. Auch er will sich seinen Teil vorab sichern,
schafft ein Drittel von den noch vorhandenen Bananen zur Seite
und gibt eine Banane - die beim Teilen übrig bleibt - einem Affen.
Anschließend geht auch er wieder schlafen.
Das gleiche Schauspiel vollzieht sich später in der Nacht ein drittes Mal.
Auch Steve wird wach und abermals erhält ein Affe eine Banane,
da auch dieses Mal die Division nicht glatt aufgeht.
Tags darauf sagt aus Scham keiner der Piraten etwas über den arg
geschrumpften Haufen und so wird nochmals durch drei geteilt.
Wieder erhält ein Affe eine Banane, da die Division nicht aufgeht.

Nun die Rätselfrage:
Wie viele Bananen haben die drei Piraten Ray, Tom und Steve
am Tag vorher mindestens gesammelt?
*/


for ($range = 10; $range < 100; $range++ )
{
for($i = 0; $i < 4; $i++ ) {
	
	$a = $range / 3;
	if ( $a % 2 && is_int($a) ){
//	$a = ($a / 3);
//	$a = ceil($a) - 1;
	echo $a . "<br />";
	}
}

}