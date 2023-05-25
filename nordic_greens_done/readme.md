# Nordic Greens webside projekt

## Table of Contents
1. [Nødvendig Software](#nødvendig-software)
2. [Installation](#installation)
3. [Brug af website](#brug-af-website)

***
## Nødvendig software
Liste over software der skal bruges til dette projekt:
* [Google Chrome Browser](https://www.google.com/chrome/): www.google.com/chrome/
* [MAMP for PC and MAC](https://www.mamp.info/en/downloads/?m=1672829638&): www.mamp.info/en/downloads/?m=1672829638&
* [PhpMyAdmin](localhost:8888/phpmyadmin5): localhost:8888/phpmyadmin5

***
## Installation
#### Opsætning af MAMP
1. Portopsætning:
* Apache Port: 8888
* Nginx Port: 8888
* MySQL Port: 3306

2. Root mappe (Tjek at rootmappe er som følger):
* Mac: /Applications/MAMP/htdocs
* Win: \MAMP\htdocs

3. Start server

#### Download af filer til website og database
1. Download "nordic_greens_done" fra github.com/
2. Flyt filen fra dine downloads til:
* Mac: /Applications/MAMP/htdocs
* Win: \MAMP\htdocs

#### Opsætning af database
1. Skriv url i browser:
* Mac: localhost:8888/phpmyadmin5
* Win: localhost/phpMyAdmin/ (Case sensitive)
2. Gå til fanen "Import" i toppen af siden
3. Tryk på "Vælg fil" og åben filen /htdocs/NordicGreen-main/nordic_greens_done/nordic_greens_db.sql
4. Scroll til bunden og tryk på "Import" / "Go"

Hvis importen er gennemført korrekt vil du nu kunne se databasen med navnet "nordic_greens" i panelet i venstre side.


#### Hvordan vises websiden
1. Åbn browseren og skriv i url: localhost:8888
2. Vælg filen "NordicGreen-main" -> "nordic_greens_done"

***
## Brug af website

#### Funktionelle dele af websitet

**_Alle disse funktioner/links virker:_**

| Header        | Navigationsbar    | Footer              |
| ------------- | ----------------- | -------------       |
| Registrering  | Produkter         | Produktkategorier   |
| Login         | Om os             | Om os               |
| Log ud        | Kontakt           | Kontaktformular     |
| Searchbar     |                   |                     |

**_Der er dele af websitet som er rent visuelle, og som ikke "virker":_**
* Tilføjelse af produkter til kurv
* Kontaktformularen

**_Manglende elementer:_**
* Kurven
* Profilsiden

#### Registrering og login

**_Registrering_**
1. Tryk på "Registrer" øverst til højre
2. Udfyld alle felter
3. Tryk på "Opret konto"

Hvis kontoen er oprettet korrekt, får du beskeden: "Du er nu oprettet!"

Hvis ikke kontoen er oprettet korrekt, får du en fejlbesked, og du kan prøve igen.

**_Login_**
1. Tryk på "Login" øverst til højre
2. Indtast dine loginoplysninger som du har oprettet
3. Tryk på "Login" under tekstfelterne

Hvis du har indtastet dine oplysninger korrekt, vil du blive logget ind og sendt videre til forsiden af websitet.

Hvis du har indtastet dine oplysninger forkert, vil du få en fejlbesked, og du kan prøve igen.

#### Brug af søgefunktion

Når du vil bruge søgefunktionen, kan du søge på både produktnavne og tekst fra produktbeskrivelsen.

F.eks. kan du søge på "Tomat" og så vil alle produkter med "Tomat" i navnet eller beskrivelsen blive vist.