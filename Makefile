SHELL = /bin/bash

.PHONY: ci-build-back
ci-build-back:
	cd ${API_DIR}; \
	composer install; \
	php bin/console cache:warmup;

.PHONY: build-front
build-front:
	cd apps/frontend; \
	npm install; \
	npm run build;

.PHONY: ci-build-front
ci-build-front: build-front
