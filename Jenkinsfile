pipeline {
  agent {
    docker {
      image 'yuyuko/jenkinsci-laravel-docker'
      args '--privileged=true --entrypoint /usr/sbin/init'
    }

  }
  stages {
    stage('service_start') {
      steps {
        echo 'Start the services'
        sh '''#!/usr/bin/env bash
docker run -it -d -e "container=docker" --privileged=true -v /sys/fs/cgroup:/sys/fs/cgroup yuyuko/jenkinsci-laravel-docker /usr/sbin/init

echo "start the php-fpm service"
systemctl start php72-php-fpm

echo "start mysql service"
/usr/local/mysql/bin/mysqld_safe --skip-grant-tables &

echo "init the mysql"
mysql -e "create user \'travis\'@\'localhost\' identified by \'\';"
mysql -e "CREATE DATABASE IF NOT EXISTS travis;"'''
      }
    }
    stage('Installing') {
      steps {
        echo 'Start to test the application'
        sh '''composer self-update
composer install

cp .env.travis .env

php artisan migrate
php artisan test:initTest'''
      }
    }
    stage('Testing') {
      steps {
        sh 'vendor/bin/phpunit -c phpunit.xml'
      }
    }
    stage('PackUP') {
      steps {
        archiveArtifacts(artifacts: 'TouHouUC', defaultExcludes: true, onlyIfSuccessful: true, excludes: '--exclude="./public/resources" --exclude="./Vagrantfile" --exclude="./.env.travis"     --exclude="./env" --exclude="./.vagrant" --exclude="./Homestead.yaml" --exclude="./.idea"     --exclude="./.git" --exclude="./vendor" ')
      }
    }
  }
  environment {
    container = 'docker'
  }
}