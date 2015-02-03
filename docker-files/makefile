.PHONY: all update-repo dependency-install unit-tests file-permission generate-proxies

#all: update-repo dependency-install unit-tests file-permission
all: generate-proxies unit-tests

#update-repo:
#	git reset --hard
#	git pull origin master

#dependency-install:
#	/usr/local/bin/composer install
#	/usr/local/bin/bower install --allow-root

generate-proxies:
	vendor/bin/doctrine orm:generate:proxies

unit-tests:
	vendor/bin/phpunit

file-permission:
	chmod 777 /app/application/logs
	chmod 777 /app/application/cache
	chmod 777 /app/application/models/proxies
