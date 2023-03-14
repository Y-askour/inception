#!/bin/bash
cd /var/www/html
wp-cli core download --allow-root
wp-cli config create --allow-root --dbname=$WP_DB_NAME --dbuser=$WP_DB_USER --dbpass=$WP_DB_PASSWORD --dbhost=172.30.0.2
wp-cli core install --allow-root --url=nginx:443 --title=test --admin_user=$admin_user --admin_password=$admin_pass --admin_email=$email
mkdir -p /var/run/php/
sed -i 's/\/run\/php\/php7.3-fpm.sock/9000/g' /etc/php/7.3/fpm/pool.d/www.conf
php-fpm7.3 -F
