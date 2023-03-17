all:
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose -f ./srcs/docker-compose.yml up -d
clean:
	docker-compose -f ./srcs/docker-compose.yml down -v
fclean: clean
	docker rmi $$(docker images -q)
