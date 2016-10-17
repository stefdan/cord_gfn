<?php

/*
Ein Lehrer stellt folgende Aufgabe:

  «Löse die folgenden drei Aufgaben und erfinde 3 weitere im selben Stil:
    364 * 2475 = ???
    308 * 2925 = ???
    165 * 5460 = ???»

Selbst hat der Lehrer die Aufgabe natürlich nicht gelöst.
Nun kommen aber Schüler mit weiteren Aufgaben im selben Stil
und er soll deren Lösungen bewerten!
Doch was ist 'der selbe Stil'?
Im Lösungsbuch steht, dass das Produkt der beiden ganzzahligen Faktoren immer 900900 ergeben muss.
Natürlich könnte der Lehrer dies nun immer nachrechnen.
Doch er bevorzugt eine Liste mit allen möglichen Produkten aus zwei Faktoren, welche 900900 ergeben:
 900900 = 1 * 900900
        = 2 * 450450
        = 3 * 300300
        = 4 * 225225
        = 5 * ...
Mit dieser Liste muss er nicht mal seinen Taschenrechner bemühen!

Helfen Sie dem Lehrer mit einem Programm,
das alle möglichen Multiplikationen (aus zwei Faktoren) sortiert ausgibt,
welche als Produkt 900900 ergeben.
Der erste der beiden Faktoren soll immer kleiner als der zweite sein.
Die Sortierung ist aufsteigend nach dem ersten Faktor.
Somit kann der Lehrer einfach in der Liste nachschlagen,
ob seine Schüler eine sinnvolle Lösung erstellt haben.
*/