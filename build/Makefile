NO_COLOR=\x1b[0m
GREEN_COLOR=\x1b[1;32;01m

PHPUNIT=$(GREEN_COLOR)Running phpunit...$(NO_COLOR)
PHPMD=$(GREEN_COLOR)Running phpmd...$(NO_COLOR)
PHPCS=$(GREEN_COLOR)Running phpcs...$(NO_COLOR)

prepare:
	mkdir -p reports

phpunit: 
	@echo "=================="
	@echo "$(PHPUNIT)"
	@echo
	phpunit --coverage-text ../tests
	@echo

phpcs:
	@echo "================"
	@echo "$(PHPCS)"
	@echo
	phpcs --standard=PSR2 ../src
	@echo

phpmd:
	@echo "================"
	@echo "$(PHPMD)"
	@echo
	phpmd ../src text \
		cleancode,codesize,controversial,design,naming,unusedcode
	@echo

phpunit-ci: prepare
	@echo "=================="
	@echo "Running phpunit..."
	@echo
	phpunit --log-junit reports/unitreport.xml \
		--coverage-html reports/coverage \
		--coverage-clover reports/coverage/coverage.xml \
		--coverage-xml reports/xml \
		../tests
	@echo

phpcs-ci: prepare
	@echo "================"
	@echo "Running phpcs..."
	@echo
	phpcs --report=checkstyle \
		--report-file=reports/phpcs.xml \
		--standard=PSR2 \
		../src
	@echo

phpmd-ci: prepare
	@echo "================"
	@echo "Running phpmd..."
	@echo
	phpmd ../src xml \
		cleancode,codesize,controversial,design,naming,unusedcode \
		--reportfile reports/phpmd.xml
	@echo

precommit: phpunit phpmd phpcs

all: phpunit-ci phpmd-ci phpcs-ci

doc: doxygen Doxyfile

