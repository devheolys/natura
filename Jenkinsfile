pipeline {
    agent any

    stages {
        stage('ssh') {
            steps {
                sh 'ssh dev@103.56.156.131'

            }
        }

        stage('cd') {
            steps {
                
                sh 'cd /home/dev/natura/NaturaPass'
                
            }
        }

        stage('su') {
            steps {
                
                sh 'su dev'
                
            }
        }

        stage('touch') {
            steps {
               
                sh 'touch quynh.test'
               
            }
        }

        stage('pull') {
            steps {
                
                sh 'git pull origin master'
            }
        }
        }
}
