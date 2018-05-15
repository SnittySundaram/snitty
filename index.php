sudo apt update

sudo apt -y upgrade

sudo apt -y install apache2

cd /var/www/html

ls -l

sudo chown `whoami` index.html 

echo Hello World >index.html 
