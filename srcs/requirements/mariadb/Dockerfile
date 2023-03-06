FROM debian:buster
WORKDIR /
COPY ./script.sh /
RUN apt-get update && apt-get install mariadb-server -y
CMD sh script.sh

