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
   - Die Webseite ist unter [http://localhost:8090/](http://localhost:8090/) erreichbar.
   - phpMyAdmin befindet sich unter [http://localhost:8009/](http://localhost:8009/).

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


