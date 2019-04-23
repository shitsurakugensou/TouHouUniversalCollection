pipeline {
  agent {
    docker {
      image 'docker.io/voduytuan/jenkins-php-docker'
    }

  }
  stages {
    stage('install') {
      steps {
        echo 'Start to install the env'
        sh '''composer self-update
composer install --prefer-dist --optimize-autoloader
mysql -e \'CREATE DATABASE IF NOT EXISTS travis;\'
cp .env.travis .env
php artisan migrate
php artisan test:initTest'''
      }
    }
    stage('testing') {
      steps {
        echo 'Start to test the application'
        sh 'if [ "$TEST_SUITE" = "Testing" ]; then vendor/bin/phpunit -c phpunit.xml; fi;'
      }
    }
    stage('packingUP') {
      steps {
        archiveArtifacts(onlyIfSuccessful: true, excludes: '--exclude="./public/resources" --exclude="./Vagrantfile" --exclude="./.env.travis"     --exclude="./env" --exclude="./.vagrant" --exclude="./Homestead.yaml" --exclude="./.idea"     --exclude="./.git" --exclude="./vendor" ', artifacts: 'TouHouUC')
      }
    }
  }
}