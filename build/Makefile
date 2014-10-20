unit:
	@echo "=================="
	@echo "Running phpunit..."
	@echo
	phpunit --log-junit reports/unitreport.xml \
		--coverage-html reports/coverage \
		--coverage-clover reports/coverage/coverage.xml \
		--coverage-xml reports/xml \
		../tests
	@echo

phpcs:
	@echo "================"
	@echo "Running phpcs..."
	@echo
	phpcs --report=checkstyle \
		--report-file=reports/phpcs.xml \
		../src
	@echo

phpmd:
	@echo "================"
	@echo "Running phpmd..."
	@echo
	phpmd ../src xml \
		cleancode,codesize,controversial,design,naming,unusedcode \
		--reportfile reports/phpmd.xml
	@echo

all: unit phpmd

