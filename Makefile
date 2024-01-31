.PHONY: phpstan
phpstan:
	php vendor/bin/phpstan analyse --error-format friendly

.PHONY: phpunit
phpunit:
	php vendor/bin/phpunit

.PHONY: cs cs-fix
cs:
	php vendor/bin/php-cs-fixer check --allow-risky=yes -v

cs-fix:
	php vendor/bin/php-cs-fixer fix --allow-risky=yes -v

.PHONY: infection
infection:
	php vendor/bin/infection -s

.PHONY: test-all
test-all: cs phpstan phpunit infection