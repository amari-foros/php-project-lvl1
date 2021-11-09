install:
	composer install

brain-games:
	./bin/brain-games
	./bin/brain-even
	./bin/brain-calc
	./bin/brain-gcd
	./bin/brain-progression
	./bin/brain-prime

validate:
	composer validate

lint:
	composer exec phpcs -- --standard=PSR12 src bin