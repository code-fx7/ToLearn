# ToLearn
First steps in programming languages

## 20.02.2023
1. Entwicklungsumgebung eingerichtet
    1. Installation von PHP (brew install php)
    2. Erweiterungen VSC (PHP Server, PHP Intelephense)
    3. Installationspfad von PHP im PHP Server eintragen
2. PHP Grundlagen in der [Bootstrap Academy](https://bootstrap.academy/courses/[object%20Object]?section=section&lecture=SW1fgMxj9a4) angesehen

## 27.01.2023
1. Docker Desktop installiert (macOS)
2. Einarbeitung in Docker Desktop
3. Docker Container für PHP erstellt
4. Einarbeitung in PHP Klassen, Constructor, Sichtbarkeit (siehe src/PHP) 

Ein Container-Image stellt einen Container bereit. Ein Container ist ein benutzerdefiniertes isoliertes Dateisystem.
Einfach ausgedrückt ist ein Container ein weiterer Prozess auf dem Computer, der von allen anderen Prozessen auf dem Host-Computer isoliert wurde.
Da das Image das Dateisystem des Containers enthält, muss es alles enthalten, was zum Ausführen der Anwendung erforderlich ist – alle Abhängigkeiten, Konfigurationen, Skripte, Binärdateien usw.

Fragen:
- Migration?
- was sind Kernel-Namespaces und Cgroups?
- cgroups
    - Quotas (Limitierung) für Prozesse auf CPU- und RAM-Ebene
- Namespaces (einen Prozess isolieren)
    - PID (Prozess ID (Prozessverwaltung))
    - Netzwerk
    - Dateisystem
Deamon = Name für einen Service im Unix Umfeld