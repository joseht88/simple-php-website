FROM php:7.4-apache

#COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
#COPY start-apache /usr/local/bin
#RUN a2enmod rewrite

# Copy application source
COPY * /var/www/html
RUN chmod -R a+r /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 80
#CMD ["start-apache"]