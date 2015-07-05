#!/bin/bash

# init piwik
[ `grep "; file automatically generated or modified by Piwik;" /piwik/config/config.ini.php | wc -l` -lt 1 ] && /bin/bash /opt/init-piwik.sh

# Start supervisord and services
supervisord -c /etc/supervisord.conf -n 
