CWD=$(shell pwd)
all:
	@echo "Usage: make [docker|vagrant]"

docker:
	docker run -d -p 10080:80 -v $(CWD)/src:/var/www boopathi/hhvm

dockerbuild:
	docker build -t boopathi/hhvm .

