APP=mikros

install: 
	docker compose up -d

config:
	cp .env.example .env

deps:
	docker-compose exec app composer install 

start: install config deps

createdb:
	docker exec -it db mysql -u root --password=password -e "create database microdb_test"