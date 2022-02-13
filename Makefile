
test-pop:
	@docker run --rm -it -v $$PWD:/app -p 8080:80 javanile/webrequest webrequest-pop.php
