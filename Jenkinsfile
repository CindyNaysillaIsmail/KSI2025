pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }
        stage('Unit Test') {
            steps {
                powershell 'vendor\\bin\\phpunit tests'
            }
        }
    }
    post {
        success {
            echo 'Pipeline sukses dijalankan!'
        }
        failure {
            echo 'Pipeline gagal!'
        }
    }
}
