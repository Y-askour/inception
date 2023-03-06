FROM debian:buster
WORKDIR /
COPY ./script.sh /
RUN apt-get update && apt-get install mariadb-server -y
RUN chmod +x /script.sh
CMD sh script.sh



