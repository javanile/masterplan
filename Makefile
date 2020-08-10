#!make

.PHONY: dist
push:
	git config credential.helper 'cache --timeout=3600'
	git pull
	git add .
	git commit -am "push"
	git push

install-dev:
	sudo curl -o /usr/local/bin/box -sL https://github.com/humbug/box/releases/download/3.8.5/box.phar
	sudo chmod +x /usr/local/bin/box

build:
	docker run --rm -v ${PWD}:/app javanile/lime define.lime > src/GrammarParser.php

dist:
	bash scripts/build.sh
	sudo cp dist/define.phar /usr/local/bin/define
	git add .
	git commit -am "latest release"
	git push

test-example1: build
	php bin/masterplan

test-build:
	php bin/propan build .

fork:
	curl -sL git.io/fork.sh | bash -
