pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                powershell '''
                    composer install
                '''
            }
        }

        stage('Run PHP') {
            steps {
                powershell '''
                    php index.php
                '''
            }
        }

        stage('Unit Test') {
            steps {
                powershell '''
                    vendor\\bin\\phpunit.bat tests
                '''
            }
        }
    }

    post {
        failure {
            echo "Pipeline gagal!"
        }
        success {
            echo "Pipeline sukses!"
        }
    }
}
