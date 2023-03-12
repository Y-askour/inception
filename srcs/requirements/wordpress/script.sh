#!/bin/bash

apt-get update -y
apt-get install curl -y
apt-get install php -y
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp-cli
wp-cli core download --allow-root
