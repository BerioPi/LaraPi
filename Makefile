.PHONY: bash phpstan

sail ?= ./vendor/bin/sail

bash:
	@echo "Running bash commands..."
	$(sail) ps -q laravel.test >/dev/null 2>&1 && \
	$(sail) exec -it laravel.test bash || \
	$(sail) run --rm -it laravel.test bash

phpstan:
	@echo "Running PHPStan..."
	$(sail) ps -q laravel.test >/dev/null 2>&1 && \
	$(sail) exec -it laravel.test ./vendor/bin/phpstan analyse || \
	$(sail) run --rm -it laravel.test ./vendor/bin/phpstan analyse
