pipeline {
    agent any

    stages {
        
        stage('Preparacion'){
            steps {
                git 'git@github.com:joseht88/simple-php-website.git'
   	       		echo 'Pulled from github successfully'
            }
        }
        
        stage('Verifica version php'){
            steps {
                sh 'php --version'
            }
        }

        stage('Ejecutar php'){
            steps {
                sh 'php index.php'
            }
        }
         //Revisa la calidad de código con SonarQube
        stage('Analysis SonarQube') {
           steps {
               	 sh 'mvn sonar:sonar -Dsonar.login=squ_1c92667ee124676de7494757b6195a04d4ef8908 -Dsonar.projectKey=simple-php-website -Dsonar.projectName="Simple Php WebSite" -Dsonar.host.url=http://ec2-44-207-2-224.compute-1.amazonaws.com:9000'
               	 echo 'SonarQube Code review done'
           }
        }
    }
}
