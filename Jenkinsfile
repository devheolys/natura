pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
		sh 'ssh dev@103.56.156.131'
		sh 'cd /home/dev/natura/NaturaPass'
		sh 'su dev'
		sh 'touch quynh.test'
		sh 'git pull origin master'
            }
        }
        }
}
