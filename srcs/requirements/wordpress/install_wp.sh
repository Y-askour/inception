#!/bin/bash
cd /var/www/html
wp-cli core download --allow-root
wp-cli config create --allow-root --dbname=$WP_DB_NAME --dbuser=$WP_DB_USER --dbpass=$WP_DB_PASSWORD --dbhost=$db_host
wp-cli core install --allow-root --url=localhost --title=test --admin_user=$admin_user --admin_password=$admin_pass --admin_email=$email
