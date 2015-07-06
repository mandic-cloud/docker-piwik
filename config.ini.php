[General]
enable_trusted_host_check = 0
assume_secure_protocol = 0
; Fix for nginx proxys or similar:
;proxy_client_headers[] = HTTP_X_REAL_IP
proxy_client_headers[] = HTTP_X_FORWARDED_FOR

[database]
host = PIWIK_MYSQL_HOST
username = PIWIK_MYSQL_USER
password = PIWIK_MYSQL_PASSWORD
dbname = PIWIK_MYSQL_DBNAME
tables_prefix = PIWIK_MYSQL_PREFIX
port = PIWIK_MYSQL_PORT
adapter = PDO\MYSQL
type = InnoDB
schema = Mysql
