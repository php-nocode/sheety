#!make

stop:
	@docker stop $$(docker ps | grep ":8080" | cut -c1-12) > /dev/null 2>&1 || true

test-pop: stop
	@docker run --rm -it -v $$PWD:/app -p 8080:80 javanile/webrequest webrequest-pop.php
