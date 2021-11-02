install:
	composer install

brain-games:
	./bin/brain-games
	./bin/brain-even
	./bin/brain-calc

validate:
	composer validate

lint:
	composer exec --phpcs -- --standard=PSR12 src bin