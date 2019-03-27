# Symfony RabbitMQ Benchmark

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

## Table of Contents

- [Installation](#installation)
- [FAQ](#faq)
- [License](#license)

---

## Installation

### Clone

- Clone this repo to your local machine using `git clone https://github.com/vasilvestre/symfony-rmq-benchmark.git`

### Setup

- Docker isn't required but highly recommended (and I will assume you are using it in next steps)

> launch docker (first launch could be long as it build images)

```shell
$ docker-compose up -d
```

> now install composer dependencies

```shell
$ docker-compose exec php composer install
```

---

## Usage 
Launch http request to `http://localhost:8080/mail/send` with parameters such as `?from=test@test.com&to=test@test.com&content=Test`

---

## FAQ

- **Why are you putting mail in spooler ?**
    - Because sending via AMQP with messenger [doesn't seem to work actually](https://github.com/symfony/swiftmailer-bundle/issues/258). Could be fixed via Events.

---

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright © <a href="http://fvcproductions.com" target="_blank">Valentin Silvestre</a>.