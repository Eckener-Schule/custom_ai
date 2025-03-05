# Docker-Compose Setup

Diese Anleitung beschreibt, wie du dein Docker-Compose-Projekt unter Linux, macOS und Windows starten kannst.

## Voraussetzungen

- Installiere [Docker](https://docs.docker.com/get-docker/)
- Installiere [Docker Compose](https://docs.docker.com/compose/install/), falls nicht bereits enthalten

## Installation & Start

1. **Docker-Compose starten**
   ```sh
   docker-compose up -d
   ```
   Der Parameter `-d` startet die Container im Hintergrund (detached mode).

2. **Überprüfe laufende Container**
   ```sh
   docker ps
   ```

3. **Auf die Dienste zugreifen**
   - phpMyAdmin befindet sich unter [http://localhost:8081/](http://localhost:8081/).

4. **Zugriffsdaten**
   - PhpMyAdmin: 
     - Benutzername: `root`
     - Passwort: `example`

5. **WordPress-Installation**
   - Öffne die Webseite [http://localhost:8080/](http://localhost:8080/) und folge den Anweisungen zur WordPress-Installation.
   - Verwende die folgenden Zugangsdaten:
     - Benutzername: `root`
     - Passwort: `root`
6. **MVC-Beispiel**
    - Unter Wordpress/wp-content/themes/my-theme/mvc
    - Hier befindet sich ein einfaches MVC-Beispiel, welches die Datenbank nutzt. Denkt datan, dass ihr auch das richtige Theme in Wordpress auswählt.
## Stoppen und Entfernen

Um die Container zu stoppen:
```sh
docker-compose down
```

Falls du auch Datenvolumes entfernen möchtest:
```sh
docker-compose down -v
```

## Hinweise für Windows-Nutzer
Falls du Probleme mit Dateirechten hast, führe Docker im Administrator-Modus aus oder überprüfe die Dateifreigabeeinstellungen in Docker Desktop.

## Weitere Informationen
Siehe die offizielle Docker-Compose-Dokumentation: [Docker Docs](https://docs.docker.com/compose/)

## Lizenz
