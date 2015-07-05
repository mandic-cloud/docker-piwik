#!/bin/bash

# init piwik
[ -f /piwik/config/config.ini.php ] && /bin/bash /opt/init-piwik.sh

# Start supervisord and services
supervisord -c /etc/supervisord.conf -n 
