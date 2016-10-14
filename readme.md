# Laravel PHP Framework with Codeception Testing

###### To setup
_this assumes you already have PHP >= 5.3 and Composer installed_
- `laravel new <project name>`
- `cd <project name>`

###### Require codeception via composer
- `composer require codeception/codeception --dev`

###### Setup
- `composer exec codecept bootstrap` <-- this will create your `tests` folder and files

###### Create a testing copy of your `.env.` file
- `cp .env .env.testing`

[Function Testing Guide](http://codeception.com/docs/04-FunctionalTests)

[Unit Testing Guide](http://codeception.com/docs/05-UnitTests)

###### Acceptance Testing
This demo uses [PhantomJS](http://phantomjs.org/) as the browser for accemptance tests.

It can be installed via download from their website, http://phantomjs.org/ or via 
`brew install phantomjs`

Change the `browser:` in your `acceptance.suite.yml` to `phantomjs`

We used the `Cest` style test in this application, which you can generate with the `php codecept generate:cest suitename CestName` command.

Example test can be found at `tests/acceptance/CancelBtnCest.php`

###### To run the test
Start PhantomJS
- `phantomjs --webdriver=4444` <-- starts phantomjs on port 4444
Run Codeception Test
- `composer exec codecept run tests/acceptance/CancelBtnCest.php`

