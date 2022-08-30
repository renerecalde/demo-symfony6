#!/bin/bash
include .makerc

DOCKER_DB = ${PROJECT_NAME}-db
DOCKER_BE = ${PROJECT_NAME}-be
DOCKER_NETWORK = ${PROJECT_NAME}-network
OS := $(shell uname)

ifeq ($(OS),Linux)
	UID = $(shell id -u)
else
	true = $true
	UID = 1000
endif

help: ## Show this help message
	@echo 'usage: make [target]'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

run: ## Start the containers
	U_ID=${UID} docker network create ${DOCKER_NETWORK} || echo $(true)
	U_ID=${UID} docker-compose up -d

stop: ## Stop the containers
	U_ID=${UID} docker-compose stop

restart: ## Restart the containers
	$(MAKE) stop && $(MAKE) run

build: ## Rebuilds all the containers
	docker-compose stop && U_ID=${UID} docker-compose build && $(MAKE) run && $(MAKE) initialize

# Backend commands
be-logs: ## Tails the Symfony dev log
	docker exec -it --user ${UID} ${DOCKER_BE} tail -f var/log/dev.log
# End backend commands

ssh-be-root: ## ssh's into the be container
	docker exec -it --user 0 ${DOCKER_BE} bash

ssh-be: ## ssh's into the be container
	docker exec -it --user ${UID} ${DOCKER_BE} bash

code-style: ## Runs php-cs to fix code styling following Symfony rules
	docker exec -it --user ${UID} ${DOCKER_BE} php-cs-fixer fix src --rules=@Symfony
	docker exec -it --user ${UID} ${DOCKER_BE} php-cs-fixer fix tests --rules=@Symfony

config-db-user: ## Config database user
	docker exec ${DOCKER_DB} sh -c 'exec mysqldump --all-databases -uroot -p root' < /docker/database/configUser.sql

initialize: ## Initialize project 
	docker exec -it --user ${UID} ${DOCKER_BE} git config --global user.email "renerecalde2@gmail.com"
	docker exec -it --user ${UID} ${DOCKER_BE} git config --global user.name "renerecalde"
	docker exec -it --user ${UID} ${DOCKER_BE} symfony new ./demo-symfony6 --version="6.1.*" --webapp 
	rm -rf ./demo-symfony6/.docker-compose.yml
	mv ./demo-symfony6/* ./ --force
	rm -rf ./demo-symfony6/.git
	rm -rf ./demo-symfony6/.gitignore
	mv ./demo-symfony6/.* ./ --force 




