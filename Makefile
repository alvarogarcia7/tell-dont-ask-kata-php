test: up
	docker-compose exec ${DOCKER_OPTIONS} php ./bin/phpunit

test-ci: up
	DOCKER_OPTIONS="-T" $(MAKE) test

install-githooks:
	cp pre-commit .git/hooks
.PHONY: install-githooks

up:
	docker-compose up -d

init: up install-dependencies install-githooks

bash: up
	docker-compose exec php bash

install-dependencies: up
	docker-compose exec php sh -c "composer install"

down:
	docker-compose down