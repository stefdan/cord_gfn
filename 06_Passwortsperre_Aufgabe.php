<?php

/*
Wer kennt es nicht. Bei Mobiltelephonen, Webseiten und sogar am Bankomaten
müssen Passwörter eingegeben werden. Damit nicht ein Unbefugter alle möglichen
Passwörter ausprobiert, wird (meist) nach dem dritten falschen Eingabeversuch
das Konto gesperrt.
Das Passwort sei im Folgenden fest vorgegeben: "097765".
Schreiben Sie ein Programm, das den Anwender nach dem Passwort fragt.
Sobald es richtig eingegeben wurde, gilt die Person als berechtigt
und das Wort "BERECHTIGT" soll ausgegeben werden.
Nach jeder fehlerhaften Eingabe soll jedoch ausgegeben werden
dass das Passwort falsch war und wie viele Versuche noch bleiben.
Nach der dritten falschen Eingabe erscheint dann
"KONTO GESPERRT: ANZAHL PASSWORTVERSUCHE ÜBERSCHRITTEN!"
*/

// Beginn der Session, bereits vorhandene werden aktiviert
session_start();

// Abfrage, ob die Variable aufrufZaehler existiert
if ( ! isset ( $_SESSION['aufrufZaehler'] ) )
{
	$_SESSION['aufrufZaehler'] = 1;
}
else
{
	$_SESSION['aufrufZaehler'] ++;
}
echo $_SESSION['aufrufZaehler'];
if ($_SESSION['aufrufZaehler'] > 2)
{
	echo " Gesperrt, in 30 sec klopt es an ihre Tür";
	unset ($_SESSION['aufrufZaehler']);
}

$_logindaten = ARRAY("name"=>"admin", "passwort"=>"097765");

if (isset($_POST["loginname"]) && isset($_POST["loginpasswort"]))
{
	if ($_logindaten["name"] == $_POST["loginname"] &&
			$_logindaten["passwort"] == $_POST["loginpasswort"])
	{
		echo "Bin da";
		$_SESSION["login"] = 1;
	}
}

if ($_SESSION["login"] != 1)
{
	include("login.html");
	exit;
}

# eingeloggt
?>
