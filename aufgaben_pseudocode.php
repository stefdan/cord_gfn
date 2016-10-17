<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cord's Pseudocodeaufgaben</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="wrap01">

		<h3>Cord's Pseudocodeaufgaben</h3>
		<h3>in PHP</h3>
		<hr>
		<hr>
		<br />
		<h4>Inhaltsverzeichnung</h4>
		<nav>
			<ol id="navlist">
				<li><a href="#zweizahlenvergl">Zwei Zahlen vergleichen</a></li>
				<li><a href="#gerade">Gerade?</a></li>
				<li><a href="#zweiZahlengenau">Zwei Zahlen genau vergleichen</a></li>
				<li><a href="#weihnachten">10x Weihnachten</a></li>
				<li><a href="#begruessung">Begrüssung</a></li>
				<li><a href="#kleinstevon3">Kleinste von 3 Zahlen</a></li>
				<ol type="a"><li><a href="#kleinstevon3a">Kleinste von 3 (random)</a></li></ol>
				<li><a href="#portokosten">Portokosten</a></li>
			</ol>
		</nav>
		<hr>
		<hr>
		<br />
		<h4 id="zweizahlenvergl">1. Zwei Zahlen vergleichen</h4>
		Schreibe eine Funktion, die testet, ob zwei Zahlen gleich sind<br />
		und dies nur ausgibt, wenn die Zahlen gleich sind.<br /> <br />
		<form action="<?php $_SERVER['PHP_SELF'] ?>#anker1" method="GET">
			<input type="text" id="vergleich01" name="vergleich01"> <input
				type="text" id="vergleich02" name="vergleich02"> <a id="anker1"><input
				type="submit"></a>
		</form>
		<br>
<?php
function vergleicheZahlen() {
	@$zahl01 = $_GET ['vergleich01'];
	@$zahl02 = $_GET ['vergleich02'];
	if (! isset ( $zahl01 ) || ! isset ( $zahl02 )) {
		echo '<span class="red">Geben sie die Zahlen zur Berechnung in die Felder ein!</span>';
	} elseif ($zahl01 == $zahl02) {
		echo "<span class='green'>" . $zahl01 . " und " . $zahl02 . " sind gleich." . "</span>";
	} else {
		;
	}
}
vergleicheZahlen ();
?>
<br /> <br />
		<hr>
		<br />
		<h4 id="gerade">2. Gerade?</h4>
		Schreibe eine Funktion, die testet, ob eine Zahl gerade ist.<br /> <br />
		<form action="<?php $_SERVER['PHP_SELF'] ?>#anker2" method="GET">
			<input type="text" id="gerade1" name="gerade1"> <a id="anker2"><input
				type="submit"></a>
		</form>
		<br>
<?php
function geradeZahlen() {
	@$zahl03 = $_GET ['gerade1'];
	if (! isset ( $zahl03 )) {
		echo '<span class="red">Geben sie die Zahlen zur Berechnung in die Felder ein!</span>';
	} elseif ($zahl03 !== 0 && $zahl03 % 2) {
		echo "<span class='green'>" . $zahl03 . " ist ungerade." . "</span>";
	} else {
		echo "<span class='green'>" . $zahl03 . " ist gerade." . "</span>";
	}
}
geradeZahlen ();
?>
<br /> <br />
		<hr>
		<br />
		<h4 id="zweiZahlengenau">3. Zwei Zahlen genau vergleichen</h4>
		Schreibe eine Funktion, die testet, ob zwei Zahlen gleich sind und
		ausgibt,<br /> welche Zahl größer ist oder ob beide Zahlen gleich
		gross sind.<br /> <br />
		<form action="<?php $_SERVER['PHP_SELF']; ?>#anker3" method="GET">
			<input type="text" id="vergleich05" name="vergleich05"> <input
				type="text" id="vergleich06" name="vergleich06"> <a id="anker3"><input
				type="submit"></a>
		</form>
		<br />
<?php
function vergleicheGenauZahlen() {
	@$zahl05 = $_GET ['vergleich05'];
	@$zahl06 = $_GET ['vergleich06'];
	if (! isset ( $zahl05 ) && ! isset ( $zahl06 )) {
		echo '<span class="red">Geben sie die Zahlen zur Berechnung in die Felder ein!</span>';
	} elseif ($zahl05 == $zahl06) {
		echo "<span class='green'>" . $zahl05 . " und " . $zahl06 . " sind gleich." . "</span>";
	} elseif ($zahl05 > $zahl06) {
		echo "<span class='green'>" . $zahl05 . " ist größer als " . $zahl06 . "." . "</span>";
	} elseif ($zahl06 > $zahl05) {
		echo "<span class='green'>" . $zahl06 . " ist größer als " . $zahl05 . "." . "</span>";
	}
}
echo vergleicheGenauZahlen ()?>
<br /> <br />
		<hr>
		<br />
		<h4 id="weihnachten">4. 10 x Weihnachten:</h4>
		Schreibe eine Funktion,<br /> die per Schleife zehnmal 'Bald ist
		Weihnachten!' ausgibt.<br /> <br />
<?php
function weihnachten() {
		if() {

		echo "<span class='green'>" . $i . "\t Bald ist Weihnachten!</span><br />";
	}
}
echo weihnachten ()?>
<br /> <br />
		<hr>
		<br />
		<h4 id="begruessung">5. Begrüssung:</h4>
		Schreibe eine Funktion,<br /> die eine Begrüssung in Abhängingkeit zur
		Uhrzeit ausgibt.<br /> Die Stunde der Uhrzeit wird der Funktion
		übergeben.<br /> <br /> Zwischen 22 Uhr und 5 Uhr: Gute Nacht<br />
		Vor 11 Uhr: Guten Morgen<br /> Vor 15 Uhr: Guten Mittag<br /> Vor 18
		Uhr: Guten Nachmittag<br /> Vor 22 Uhr: Guten Abend<br /> <br />
<?php
function begruessung() {
	date_default_timezone_set ( 'Europe/Berlin' );
	if (date ( 'H:i:s' ) < "11.00.00") {
		echo "<span class='green'>Guten Morgen!</span>";
	} elseif (date ( 'H:i:s' ) < "15.00.00") {
		echo "<span class='green'>Guten Mittag!</span>";
	} elseif (date ( 'H:i:s' ) < "18.00.00") {
		echo "<span class='green'>Guten Nachmittag!</span>";
	} elseif (date ( 'H:i:s' ) < "22.00.00") {
		echo "<span class='green'>Guten Abend!</span>";
	}
}
echo begruessung () . "\n";
echo "<br />" . date ( 'Y-m-d H:i:s T', time () ) . "<br />";
date_default_timezone_set ( 'UTC' );
echo date ( 'Y-m-d H:i:s T', time () ) . "<br />";
?>
<br /> <br />
		<hr>
		<br />
		<h4 id="kleinstevon3">6. Kleinste von drei Zahlen:</h4>
		Schreibe eine Funktion,<br /> die ausgibt, welche von drei Zahlen die
		kleinste ist.<br /><br />
		<form action="<?php $_SERVER['PHP_SELF']; ?>#anker6" method="GET">
			<input type="text" id="kleinsteVergleich01"
				name="kleinsteVergleich01"><br /><input type="text"
				id="kleinsteVergleich02" name="kleinsteVergleich02"><br /> <input
				type="text" id="kleinsteVergleich03" name="kleinsteVergleich03"> <a
				id="anker6"> <input type="submit"></a>
		</form>
		<br />
<?php
function vergleicheGenau3Zahlen() {
	@$zahl07 = $_GET ['kleinsteVergleich01'];
	@$zahl08 = $_GET ['kleinsteVergleich02'];
	@$zahl09 = $_GET ['kleinsteVergleich03'];
	if (! isset ( $zahl07 ) && ! isset ( $zahl08 ) && ! isset ( $zahl09 )) {
		echo '<span class="red">Geben sie die Zahlen zur Berechnung in die Felder ein!</span>';
	} elseif ($zahl07 == $zahl08 && $zahl08 == $zahl09) {
		echo "<span class='green'>" . $zahl07 . ", " . $zahl08 . " und " . $zahl09 . " sind gleich." . "</span>";
	} else {
		$zahlenarray = array (
				$zahl07,
				$zahl08,
				$zahl09,
		);
		echo "<span class='green'>" . min ( $zahlenarray ) . " ist die kleinste Zahl." . "</span>";
	}
}
echo vergleicheGenau3Zahlen ()?>
<br /> <br />
		<hr>
		<br />
		<h4 id="kleinstevon3a">6a. Kleinste von drei Zahlen:</h4>
		Schreibe eine Funktion,<br /> die drei unterschiedliche Zufallszahlen erzeugt
		und die kleinste davon zurück gibt.<br />
		Es steht eine globale Funktion random() zur Verfügung.
<br /><br />
<?php
function vergleicheGenau3randoZahlen() {
	@$zahl10 = rand(0,100000);
	@$zahl11 = rand(0,100000);
	@$zahl12 = rand(0,100000);
	if ($zahl10 == $zahl11 && $zahl11 == $zahl12) {
		echo "<span class='green'>" . $zahl10 . ", " . $zahl11 . " und " . $zahl11 . " sind gleich." . "</span>";
	} else {
		$zahlenarray = array (
				$zahl10,
				$zahl11,
				$zahl12,
		);
		echo "<span class='green'>" . "Der Zufall wollte:<br />" . $zahl10 . "<br />" . $zahl11 . "<br />" . $zahl12 . "<br /> Davon ist" . min ( $zahlenarray ) . " die kleinste Zahl." . "</span>";
	}
}
echo vergleicheGenau3randoZahlen ();
echo '<br /><a href="javascript:history.go(0)">nochmal mischen</a>';
?>
<br /> <br />
		<hr>
		<br />
		<h4 id="portokosten">7. Portokosten:</h4>
Schreibe eine Funktion,<br /> die zu einem Rechnungsbetrag die Portokosten addiert
und den Gesamtbetrag zurück gibt.<br /><br />

Die Portokosten sind wie folgt festgelegt:<br />
 0 - 39.99€ kosten 3.99€<br />
40 - 69.99€ kosten 2.99€<br />
70 - 99.99€ kosten 1.99€<br />
ab 100€ portofrei<br /> <br />
		<form action="<?php $_SERVER['PHP_SELF'] ?>#anker8" method="GET">
			<input type="text" id="portokosten" name="portokosten"> <a id="anker8"><input
				type="submit"></a>
		</form>
		<br>
<?php
function portokosten() {
	@$porto = $_GET ['portokosten'];
	$porto01 = 3.99;
	$porto02 = 2.99;
	$porto03 = 1.99;
	if (! isset ( $porto )) {
		echo '<span class="red">Geben sie die Zahl zur Berechnung in die Felder ein!</span>';
	} elseif ($porto <= 39.99) {
		echo "<span class='green'>" . $porto01 + round($porto, 2) + $porto01 . "</span>";
	} elseif ($porto <= 69.99) {
		echo "<span class='green'>" . $porto02 + round($porto, 2) + $porto02 . "</span>";
		echo 3 + 3;
	} elseif ($porto <= 99.99) {
		echo "<span class='green'>" . $porto03 + round($porto, 2) + $porto03 . "</span>";
	}
}
portokosten ();
?>
	</div>
</body>
</html>