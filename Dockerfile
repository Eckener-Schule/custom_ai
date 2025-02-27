 # Verwende das offizielle PHP 8.1 Apache-Image
FROM php:8.1-apache

# Installiere die mysqli-Erweiterung
RUN docker-php-ext-install mysqli

# Kopiere die Anwendung nach /var/www/html, wo Apache standardmäßig sucht
COPY . /var/www/html/

# Konfiguriere Apache: Setze den ServerName (optional)
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Setze den DocumentRoot auf /var/www/html
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Setze die richtigen Berechtigungen für den Apache-Benutzer
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Optional: Aktiviere die Rewrite-Engine, falls erforderlich
RUN a2enmod rewrite

# Setze die DocumentRoot und Verzeichnisberechtigungen direkt in der Apache-Konfigurationsdatei
RUN echo "DocumentRoot /var/www/html" > /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /var/www/html>" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    AllowOverride All" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Require all granted" >> /etc/apache2/sites-available/000-default.conf && \
    echo "</Directory>" >> /etc/apache2/sites-available/000-default.conf

# Exponiere Port 80 für den Webserver
EXPOSE 80

RUN echo '<Directory /var/www/html/public>' >> /etc/apache2/apache2.conf && \
    echo '    AllowOverride All' >> /etc/apache2/apache2.conf && \
    echo '    Require all granted' >> /etc/apache2/apache2.conf && \
    echo '</Directory>' >> /etc/apache2/apache2.conf


# Startbefehl für Apache im Vordergrund
CMD ["apache2-foreground"]
