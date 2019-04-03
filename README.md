# LICKD

## Price Calculator Challenge

### Setup & Installing

To set this project up you will need to first clone this repository.

You will also need `php` available on your computer via the command line.

To get this project up and running you will also need the `composer` package
manager. You can download composer [here](https://getcomposer.org/).

The following commands should get you up and running;

```
git clone git@github.com:hookdteam/lickd-price-calculator-test.git
cd ./lickd-price-calculator-test
composer install
php vendor/bin/phpunit tests/ #to confirm tests are working
php ./console #entry point to your command
```

## Docker Setup

To use via Docker you'll need docker on your machine setup along with Docker Compose.

```
docker-compose up  # to pull and start the image and install the dependancies
```

Once the container is up and you can see `looping` repeated in the console you can acccess the shell in the container by;

```
docker exec -it lickd-php-avv-challenge_php_1 bash
```

All the source code is stored under `/var/www/html` and from there you can run `php ./console.php`


### Application

This simple PHP project has been configured with the `symfony/console` package
and has a console command ready to take command line input. See `app/Console/PriceCalculatorConsole.php`.

If you are unfamiliar with the `symfony/console` package see the [documentation](https://symfony.com/doc/current/console.html).

### Testing

We have also gone to the effort of installing and bootstrapping `phpunit` inside
this project. To run your unit tests you can run `php vendor/bin/phpunit tests/`.

## The Challenge

We have provided CSV exports of the latest video uploads by various YouTube Creators inside the `data/` directory.

Each CSV file contains the channel id, video id, video title and video views.

### Part 1

Taking a `channelId` parameter from the command line we want you to calculate the average
video views across their latest 50 uploads. The `channelId` corresponds to the files in the `/data` directory.

### Part 2

Once you have the average video views across their latest video uploads you should put the channel into a
price band as detailed in the table below.

#### Standard Price

| Average Views | Price |
|---------------|-------|
| 0     - 100k  | £10   |
| 100k  - 500k  | £20   |
| 500k  - 1m    | £30   |
| 1m    - 1.25m | £35   |
| 1.25m - 1.5m  | £40   |
| 1.5m  - 1.75m | £45   |
| 1.75m - 2m    | £50   |
| 2m+           | £60   |

```php
[
    [0, 100000, 10.00],
    [100000, 500000, 20.00],
    [500000, 1000000, 30.00],
    [1000000, 1250000, 35.00],
    [1250000, 1500000, 40.00],
    [1500000, 1750000, 45.00],
    [1750000, 2000000, 50.00],
    [2000000, 9999999, 60.00],
]
```

#### Brand Pricing

| Average Views | Price |
|---------------|-------|
| 0     - 1m    | £25   |
| 1m    - 1.25m | £75   |
| 1.25m - 1.5m  | £125  |
| 1.5m  - 1.75m | £165  |
| 1.75m - 2m    | £200  |
| 2m+           | £250  |

```php
[
    [0, 1000000, 25.00],
    [1000000, 1250000, 75.00],
    [1250000, 1500000, 125.00],
    [1500000, 1750000, 165.00],
    [1750000, 2000000, 200.00],
    [2000000, 9999999, 250.00],
]
```

### Output

Your application should respond as follows:

```
php ./console.php price:calculator UCWRV5AVOlKJR1Flvgt310Cw
This YouTube Channels Standard Price is: £XX
This YouTube Channels Brand Price is: £XX
```

### Testing

You should demonstrate your application code works by including unit tests.

### Submitting Your Code

You should either zip your code and send it to use in an email or link to your fork of our github repository.
