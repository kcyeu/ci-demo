NO_COLOR=\x1b[0m
GREEN_COLOR=\x1b[1;32;01m

PHPUNIT=$(GREEN_COLOR)Running phpunit...$(NO_COLOR)
PHPMD=$(GREEN_COLOR)Running phpmd...$(NO_COLOR)
PHPCS=$(GREEN_COLOR)Running phpcs...$(NO_COLOR)

phpunit: 
	@echo "=================="
	@echo "$(PHPUNIT)"
	@echo
	phpunit --coverage-text ./tests/unit-tests
	@echo

phpcs:
	@echo "================"
	@echo "$(PHPCS)"
	@echo
	phpcs --standard=PSR2 ./src ./tests
	@echo

phpmd:
	@echo "================"
	@echo "$(PHPMD)"
	@echo
	phpmd ./src text \
		cleancode,codesize,controversial,design,naming,unusedcode
	@echo

phpunit-ci:
	@echo "=================="
	@echo "Running phpunit..."
	@echo
	phpunit --log-junit build/reports/unitreport.xml \
		--coverage-html build/reports/coverage \
		--coverage-clover build/reports/coverage/coverage.xml \
		--coverage-xml build/reports/xml \
		./tests/unit-tests
	@echo

phpcs-ci: 
	@echo "================"
	@echo "Running phpcs..."
	@echo
	phpcs --report=checkstyle \
		--report-file=build/reports/phpcs.xml \
		--standard=PSR2 \
		./src ./tests
	@echo

phpmd-ci: 
	@echo "================"
	@echo "Running phpmd..."
	@echo
	phpmd ./src xml \
		cleancode,codesize,controversial,design,naming,unusedcode \
		--reportfile build/reports/phpmd.xml
	@echo

doc:
	doxygen Doxyfile

precommit: phpunit phpmd phpcs

all: phpunit-ci phpmd-ci phpcs-ci doc

