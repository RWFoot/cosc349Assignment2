      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
      # Change VM's webserver's configuration to use shared folder.
        # (Look inside admin-website.conf for specifics.)
      cp /vagrant/admin-website.conf /etc/apache2/sites-available/
        # install our website configuration and disable the default
      a2ensite admin-website
      a2dissite 000-default
      service apache2 reload
