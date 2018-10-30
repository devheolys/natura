pipeline {
    agent any

    stages {
        stage('ssh') {
            
                sh 'ssh dev@103.56.156.131'
                
                
                
                
            
        }
	stage('cd') {
		sh 'cd /home/dev/natura/NaturaPass'
	}
	stage('su'){
		sh 'su dev'
	}
	stage('touch'){
		sh 'touch quynh.test'
	}
	stage('pull'){
	sh 'git pull origin master'
	}

        }
}
