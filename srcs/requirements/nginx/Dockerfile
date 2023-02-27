FROM debian:buster
RUN apt-get update && apt-get install nginx -y
RUN apt-get install openssl && openssl req -x509 -nodes -days 3650 -newkey rsa:2048  -sha384 -keyout server-cert.key -o server-cert.crt
#COPY index.html /var/www/html
#COPY styles.css /var/www/html
#COPY nginx.conf /etc/nginx/

CMD ["nginx", "-g", "daemon off;"]
