pipeline {
  agent {
    docker {
      args '--privileged=true --entrypoint /usr/sbin/init'
      image 'yuyuko/jenkinsci-laravel-docker'
    }

  }
  stages {
    stage('InitingSystem') {
      steps {
        sh '''systemctl start php-fpm
systemctl start mysqld
'''
      }
    }
    stage('initingMysql') {
      steps {
        sh 'mysql -e \'CREATE DATABASE IF NOT EXISTS jenkins;\''
      }
    }
    stage('InitingENV') {
      steps {
        sh '''composer config -g repo.packagist composer https://packagist.phpcomposer.com
composer self-update
composer install --prefer-dist --optimize-autoloader

cp .env.jenkins .env

php artisan migrate
php artisan test:initTest'''
      }
    }
    stage('TestingAPP') {
      steps {
        sh 'vendor/bin/phpunit -c phpunit.xml'
      }
    }
    stage('PackingUP') {
      steps {
        archiveArtifacts(onlyIfSuccessful: true, fingerprint: true, artifacts: 'TouHouUC', allowEmptyArchive: true, excludes: '--exclude="./public/resources" --exclude="./Vagrantfile" --exclude="./.env.travis"     --exclude="./env" --exclude="./.vagrant" --exclude="./Homestead.yaml" --exclude="./.idea"     --exclude="./.git" --exclude="./vendor" ')
      }
    }
  }
}