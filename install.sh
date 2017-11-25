#!/usr/bin/env bash

cd ~/
git clone https://github.com/lpm0073/Mighty-Wizards.git

sudo chown -R apache /home/ec2-user/Mighty-Wizards
sudo chgrp -R apache /home/ec2-user/Mighty-Wizards
sudo chmod 2775 /home/ec2-user/Mighty-Wizards
find /home/ec2-user/Mighty-Wizards -type d -exec sudo chmod 2775 {} \;
find /home/ec2-user/Mighty-Wizards -type f -exec sudo chmod 0664 {} \;

sudo rm -r /var/www/html/wizards/wp-content/themes/Mighty-Wizards/
sudo mv Mighty-Wizards /var/www/html/wizards/wp-content/themes/
