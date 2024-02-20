#!/bin/bash
docker compose exec basedatos /bin/bash -c "mariadb-dump -u user -puser db" >./db/backup.sql