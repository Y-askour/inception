FROM debian:buster
RUN apt-get update && apt-get install nginx -y
RUN apt-get install openssl 
#COPY index.html /var/www/html
#COPY styles.css /var/www/html
#COPY nginx.conf /etc/nginx/

CMD ["nginx", "-g", "daemon off;"]
