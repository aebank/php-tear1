# Test project for PHP backend contenders. Tier one

## Description

Template project for PHP backend position contenders tier one. This project is a general recomendation on where to start. Initial configuration, directory structure and dependency requirement are not mandatory and can be changed freely as contender wishes.

## Task

Create a backend program using template in your own public repository and send a pull request when ready to present a result. Business logic task is given separaterly by email and can be modified through time, so looking up forks for a complete solution is useless. Other contenders's forks can be used for overviewing general ideas and style conventions. If you are not a job contender please ignore project. Or if you have accidentally came here and wish to try out a real task please do not hesitate to check vacancies and contact HR department at [Almazergienbank](http://albank.ru/).

## Usage

1. Fork source tree to your account using GitHub interface. 
2. Start a branch with any convinient name.
3. Complete the given business task.
4. Pass unit-tests
5. Create a pill request to original repository.
6. Present you work

## Install dependencies

Project by default uses `composer` package manager. To install dependencies install [Composer](https://getcomposer.org/) and run

```
$ composer install
```
from project root.

## Unit testing

Work can be tested with `phpunit` framework included in project dependencies. Default test runs just by executing 

```
./vendor/bin/phpunit
```
from project root

## Logging

Monolog PSR logger is also included. Usage example is given in `api/register.php`. All well built software should provide a good runtime log. If log has special format or error codes documentation should be supplied.

## Additional dependencies

All above frameworks and packages are not mandatory. Any of it can be replaced by another alternative with reasoning provided. Any additional package is free to be added to project as long as it added using `composer.json`.

## License

This program is available under the MIT license. See the [LICENSE](LICENSE.md) file for more info.

Copyright &copy; 2023 JSB "Almazergienbank".
