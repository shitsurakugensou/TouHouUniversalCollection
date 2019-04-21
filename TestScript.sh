#!/usr/bin/env bash
php artisan migrate:rollback --step=100
php artisan migrate
php artisan test:initTest
