sh 'git pull origin v3'
pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
		sh 'cd /home/dev/natura/NaturaPass'
		sh 'git clone origin master'
            }
        }
        }
}
