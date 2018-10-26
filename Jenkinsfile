pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
		sh 'cd /home/dev/natura/NaturaPass'
		sh 'su dev'
		sh 'git pull origin master'
            }
        }
        }
}
