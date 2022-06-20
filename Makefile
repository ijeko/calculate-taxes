# Start project

build:
	docker-compose build

up:
	docker-compose up -d

composer-install:
	docker-compose exec app composer install

down:
	docker-compose down
