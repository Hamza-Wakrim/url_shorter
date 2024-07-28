#!/bin/bash

sudo mkdir -p /var/log/link-shorter

export WWWUSER=${WWWUSER:-$UID}
export WWWGROUP=${WWWGROUP:-$(id -g)}

sudo chown -R $WWWUSER: /var/log/link-shorter

docker-compose -f docker-compose.yml up --detach --build

sleep 3s && \
    docker exec link-shorter-developement bash -c 'chown -R application:application /var/log/link-shorter'

docker image prune -f --filter "until=1h"
