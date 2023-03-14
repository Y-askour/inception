FROM debian:buster
WORKDIR /var/www/html

COPY setup.sh /
COPY install_wp.sh /
RUN sh /setup.sh

CMD sh /install_wp.sh

