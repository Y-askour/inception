FROM debian:buster
WORKDIR /var/www/html

COPY setup.sh /
COPY install_wp.sh /
RUN sh /setup.sh
RUN sh /install_wp.sh


CMD while true; do sleep 1; done 

