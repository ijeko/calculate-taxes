# Start project
setup: build up composer-install migrate-fresh

build:
	docker-compose build

up:
	docker-compose up -d

composer-install:
	docker-compose exec app composer install

down:
	docker-compose down

migrate-fresh:
	docker-compose exec app php artisan migrate:fresh --seed
