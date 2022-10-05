# DevOps

## Requirements
- Requirements to run Docker on system
- Docker installed
  
## Terminal command
Clone the repo and cd to this directory
To install run ``` docker-compose -d up```
``` docker ps ``` to see all containers up
Run ``` docker exec <container_name> bash -c "php --version -i" ``` to verify the php installation

## Path of logs
/var/log/nginx/
/var/log/php/