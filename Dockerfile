FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get -y update

# Install Utilities
RUN apt-get install -y curl unzip build-essential nano wget mcrypt
RUN apt-get -qq update && apt-get -qq -y install bzip2
RUN apt-get install -y chrpath libssl-dev libxft-dev
RUN apt-get install -y libfreetype6 libfreetype6-dev libfontconfig1 libfontconfig1-dev

# Install ppa:ondrej/php PPA
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update

# Install PHP 8
RUN apt-get update && apt-get install -y apache2
RUN apt-get install -y php-pear libapache2-mod-php8.0
RUN apt-get install -y php8.0-common php8.0-cli
RUN apt-get install -y php8.0-bz2 php8.0-zip php8.0-curl php8.0-gd php8.0-mysql php8.0-xml php8.0-dev php8.0-sqlite php8.0-mbstring php8.0-bcmath
RUN php -v
RUN php -m

# Apache Config
# Allow .htaccess with RewriteEngine.
RUN a2enmod rewrite

# Without the following line we get "AH00558: apache2: Could not reliably determine the server's fully qualified domain name".
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Authorise .htaccess files.
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Ports
EXPOSE 80 5000

# Start Apache2 on image start.
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]

# Purge old PHP
RUN apt-get update
RUN apt-get -y purge '^php7.4.*'
RUN php -v