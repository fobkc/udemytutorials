apt-get update
apt-get install -y emacs24
apt-get install -y php5-cli php5-cgi;
apt-get install -y php5-mcrypt && php5enmod mcrypt;
apt-get install -y php5-mysqlnd;
echo 'alias ch="cd /vagrant"' >> .bashrc
echo 'alias pserver="php -S 0.0.0.0:8000"' >> .bashrc
apt-get install -y git
curl -sL https://deb.nodesource.com/setup | sudo bash -
apt-get install -y nodejs
npm install -g bower
npm install -g vulcanize
