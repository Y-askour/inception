all:
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose -f ./srcs/docker-compose.yml up -d
clean:
	docker-compose -f ./srcs/docker-compose.yml down
	rm -rf /home/yaskour/data/wp_databases/*
	rm -rf /home/yaskour/data/wp_files/*

fclean: clean
	docker rmi $$(docker images -q)
