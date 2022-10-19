SHELL = /bin/bash

.PHONY: ci-build
ci-build:
	cd ${API_DIR}; \
	composer install; \
	php bin/console cache:warmup;
