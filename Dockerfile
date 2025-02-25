# Verwende das offizielle PHP 8.1 Apache-Image
FROM php:8.1-apache

# Installiere die mysqli-Erweiterung
RUN docker-php-ext-install mysqli

# Kopiere die Anwendung in das Verzeichnis /usr/src/myapp
COPY . /usr/src/myapp

# Konfiguriere Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Setze das Arbeitsverzeichnis
WORKDIR /usr/src/myapp

# Optional: Aktiviere die Rewrite-Engine, falls erforderlich
RUN a2enmod rewrite

