# 2-tier-app

Docker containers running nginx, php and mysql to simulate a 2-tier application.

## Prerequisites

Prepare an Ubuntu 22.04 machine by running the following commands:

* ```sudo apt update && sudo apt install python3 git docker-compose```
* ```git clone https://github.com/rutgerblom/2-tier-app.git ~/git/2-tier-app```
* ```chmod +x ~/git/2-tier-app/front-end/up.sh```
* ```chmod +x ~/git/2-tier-app/back-end/up.sh```

## Usage

Modify the values for ```$host``` and ```$port``` in ```front-end/src/index.php``` so that they correspond with the IP address and port number where your back-end is running. Start the front-end containers by running ```sudo ~/git/2-tier-app/front-end/up.sh```. You can use the Docker container back-end that is part of this repository. The back-end can run on the same or a different host and is started by running ```sudo ~/git/2-tier-app/back-end/up.sh```.