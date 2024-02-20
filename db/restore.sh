#!/bin/bash
docker compose exec basedatos /bin/bash -c "mariadb -u user -puser db < /db/backup.sql"