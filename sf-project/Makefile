.PHONY:
install-deps:
	docker-compose run --rm php composer install

.env:
	cp .env.dist .env

.PHONY:
start:
	docker-compose up -d

.PHONY:
stop:
	docker-compose stop
