#!/bin/bash

sudo mkdir -p /var/log/hsabati-api-v2

export WWWUSER=${WWWUSER:-$UID}
export WWWGROUP=${WWWGROUP:-$(id -g)}

sudo chown -R $WWWUSER: /var/log/hsabati-api-v2

git pull
docker-compose -f docker-compose.yml up --detach --build

sleep 3s && \
    docker exec hsabati-api-v2-preprod bash -c 'chown -R application:application /var/log/hsabati-api-v2'

docker image prune -f --filter "until=1h"
