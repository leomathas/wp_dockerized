# Read Me First

## Requirements:
* docker
* docker-compose

## Installation
1. run `/.setup.sh`
2. visit localhost:8080 and setup a local db for wordpress
3. visit localhost and connect wordpress to your database

## Running
`/.setup.sh`

## Reminders
* Add user to docker group - logout for it to take effect
* Check docker with docker info command
* Make sure  to chmod -R 777 themes and plugins folders
* volumes created are foldername_mariadbfiles & foldername_wordpressfiles
