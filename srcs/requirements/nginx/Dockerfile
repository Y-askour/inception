FROM debian:buster
WORKDIR /root
COPY ./cer/ /root
RUN apt-get update && apt-get install nginx -y
RUN apt-get install openssl
RUN cp localhost.crt /etc/ssl/certs/localhost.crt
RUN cp localhost.key /etc/ssl/private/localhost.key

CMD ["nginx", "-g", "daemon off;"]
