
pipeline {
	agent any   
	stages {
		stage('Preparacion') { // for display purposes
		      // Get some code from a GitHub repository
		      steps {
				git 'https://github.com/masterunir17/appweb2.git'
				// copia de respaldo de la version instalada 
				sh 'ssh root@172.31.57.100 cp -r /var/www/html/ /opt/lastversionweb'
				sh 'ssh root@172.31.57.100 cp -r /var/www/gestion/ /opt/lastversiongestion'
				// eliminar version actual
				sh 'ssh root@172.31.57.100 rm -rf /var/www/html/*'
				sh 'ssh root@172.31.57.100 rm -rf /var/www/gestion/*'
				}		
		   }
		
		stage('Despliegue') { // en servidor web
			steps {
				// Genera los ficheros .class con los fuentes .java
				sh 'mvn compile'
				// despliegue de la aplicacion
				sh 'scp -r gestion/* root@172.31.57.100:/var/www/gestion'
				sh 'scp -r webapp/* root@172.31.57.100:/var/www/html'
				}		     
		    }
		stage('Pruebas Funcionales') { // Ejecuta los comandos de JUnt - Pruebas unitarias
			steps {
				sh 'mvn test'
			     }		     
		    }
		stage('Finalizacion') { // Crear el .Jar validado
			steps {
			    sh 'echo Despliegue realizado con exito - QA'
			}		     
		    }
		}
	}