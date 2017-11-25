#!/usr/bin/env bash

cd ~/
git clone https://github.com/lpm0073/Mighty-Wizards.git

sudo rm -r /var/www/html/wizards/wp-content/themes/Mighty-Wizards/
sudo mv Mighty-Wizards /var/www/html/wizards/wp-content/themes/
