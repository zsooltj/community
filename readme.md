# Install:

1. Create a DB (in GCloud)
2. ```docker compose -f "docker-compose.yml" up -d --build ```
3. cp public_html/includes/config-example.php public_html/includes/config.php
4. edit the config file accordingly


## Note:
Apache web server will run on port :80, change it in the compose file if needed

