# mvc-passoff

Prereq => Make sure you have docker installed in your computer.

1. Make a specific directory for the app and `cd` into it.
1. In the directory clone this repo and clone laradock `git clone https://github.com/laradock/laradock.git`.
1. Ask me about my `.env` files so that I can send them to you to get the build up and running properly.
1. Run `docker-compose up -d apache2 mysql`.
1. Run `docker-compose exec workspace bash`.
1. Inside of the workspace container, run `composer install`.
1. Open your browser to `localhost`

Profit

Also, PHP's Composer is like JavaScripts NPM
