#!/bin/bash
sleep 4
cd /var/www/html
wp-cli core download --allow-root
wp-cli config create --allow-root --dbname=$WP_DB_NAME --dbuser=$WP_DB_USER --dbpass=$WP_DB_PASSWORD --dbhost=mariadb
wp-cli core install --allow-root --url=localhost --title=test --admin_user=$admin_user --admin_password=$admin_pass --admin_email=$email
wp-cli user create --allow-root $user_word $user_email --role=author --user_pass=$user_pass
mkdir -p /var/run/php/
sed -i 's/\/run\/php\/php7.3-fpm.sock/9000/g' /etc/php/7.3/fpm/pool.d/www.conf
php-fpm7.3 -F
