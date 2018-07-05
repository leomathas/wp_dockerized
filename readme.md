# Read Me First

1. run with `docker-compose up --build -d` or `/.setup.sh`
2. visit localhost:8080 and setup a local db for wordpress
3. visit localhost and connect wordpress to your database
4. done

## Requirements:
* docker
* docker-compose

## Reminders
* Add user to docker group - logout for it to take effect
* Check docker with docker info command
* Make sure  to chmod -R 777 themes and plugins folders
* clean up Adminer volumes by running `docker volume prune`
* run `docker inspect -f ‘{{ .Mounts }}’ containername` to see the volume id.
* make setup.sh executable