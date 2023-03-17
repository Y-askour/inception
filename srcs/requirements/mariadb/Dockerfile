FROM debian:buster
WORKDIR /
COPY ./script.sh /
RUN apt-get update && apt-get install mariadb-server -y
RUN chmod +x /script.sh
RUN sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf
CMD sh script.sh



