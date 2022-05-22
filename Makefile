APP=mikros

start: 
	docker compose up

config:
	cp env.example .env

deps:
	docker-compose exec app composer install 
