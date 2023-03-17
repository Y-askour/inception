FROM debian:buster
WORKDIR /var/www/html

COPY setup.sh /
COPY install_wp.sh /
RUN sh /setup.sh

ENTRYPOINT ["sh","/install_wp.sh"]

