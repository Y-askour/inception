all:
	docker-compose -f ./srcs/docker-compose.yml build
	docker-compose -f ./srcs/docker-compose.yml up -d
clean:
	docker-compose -f ./srcs/docker-compose.yml down
	rm -rf /Users/yaskour/Desktop/inception/1/*
	rm -rf /Users/yaskour/Desktop/inception/2/*

fclean: clean
	docker rmi $$(docker images -q)
