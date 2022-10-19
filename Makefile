SHELL = /bin/bash

.PHONY: ci-build
ci-build:
	cd ${API_DIR}; \
	composer install --prefer-dist --classmap-authoritative --no-dev; \
	php bin/console cache:warmup;
