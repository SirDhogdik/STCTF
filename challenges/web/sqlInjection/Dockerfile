FROM php:7.0-apache
RUN docker-php-ext-install mysqli
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install php5-mysql -y
ADD ./sql.sql /tmp/sql.sql
EXPOSE 80
COPY ./service /var/www/html/
