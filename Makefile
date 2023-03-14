all:
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose up -d
clean:
	docker-compose -f ./srcs/docker-compose.yml down
	rm -rf ./srcs/requirements/mariadb/db/* -y
	rm -rf ./srcs/requirements/nginx/web/* -y

fclean: clean
	docker rmi $(docker images -q)
