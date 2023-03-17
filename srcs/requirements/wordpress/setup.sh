#!/bin/bash
apt-get update -y
apt-get install php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
apt-get install curl -y
apt-get install php-mysql -y
apt install php-fpm php7.3-fpm curl -y
apt-get install php -y
apt-get install mariadb-client -y
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp-cli
