# Test Task

### Requirements:
1. Docker & Docker Compose
2. composer

## Getting Started

1. clone repository
2.
```bash
cd soft_house_group_test_task
```
3.
```bash
cp .env.example .env
```
4.
```bash
composer require laravel/sail --dev
```
5. Add variables to .env:
   LOG_TYPE=file or database or email
   ADMIN_EMAIL=email who get the logs
6. Setting your smtp server:
   MAIL_USERNAME=
   MAIL_PASSWORD=
   MAIL_FROM_ADDRESS=
7.
```bash
./vendor/bin/sail up -d
```
8.
```bash
./vendor/bin/sail artisan key:generate
```
9.
```bash
./vendor/bin/sail artisan migrate
```


