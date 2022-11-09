SHELL = /bin/bash

.PHONY: ci-build-back
ci-build-back:
	cd ${API_DIR}; \
	composer install; \
	php bin/console cache:warmup;

.PHONY: ci-build-front
ci-build-back:
	cd ${FRONTEND_DIR}; \
	npm install;
