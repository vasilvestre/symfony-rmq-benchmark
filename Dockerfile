FROM webdevops/php-nginx:7.2

RUN apt-get update && apt-get install -y \
		librabbitmq-dev \
	&& pecl install amqp-1.9.4 \
	&& docker-php-ext-enable amqp
