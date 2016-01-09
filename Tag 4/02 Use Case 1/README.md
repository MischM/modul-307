# Use Case 1

## Aufgabenstellung

Realisiere das Projekt «bisHop!» gemäss Briefing.

Das Projekt wird vom Kunden erst nach Bestehen aller Abnahmetests abgenommen und bezahlt!

## Abnahmetests

```
GEGEBEN SEI    ich bin auf der Bestellseite
               UND habe alles korrekt ausgefüllt
WENN           ich die Bestellung absende
DANN           wird eine Bestätigungsseite angezeigt
```

```
GEGEBEN SEI    ich bin auf der Bestellseite  
               UND ich habe nicht alle Felder ausgefüllt 
WENN           ich die Bestellung absende
DANN           wird eine entsprechende Fehlermeldung per JS generiert
               UND das Formular wird nicht abgesendet
```

```
GEGEBEN SEI    ich bin auf der Bestellseite  
               UND ich habe JS deaktiviert
               UND ich habe nicht alle Felder ausgefüllt 
WENN           ich die Bestellung absende
DANN           wird eine entsprechende Fehlermeldung per PHP generiert
               UND ich werde nicht auf die Bestätigungsseite umgeleitet
```

```
GEGEBEN SEI    ich bin auf der Bestellseite  
WENN           ich die Anzahl eines Produktes ändere 
DANN           wird das Gesamttotal neu berechnet 
```

```
GEGEBEN SEI    ich bin auf der Bestellseite  
WENN           ich als Anzahl für ein Produkt nichts oder ABC eingebe
DANN           wird kein Gesamttotal angezeigt
```
