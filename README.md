# 2-tier-app

Docker containers running nginx, php and mysql to simulate a 2-tier application.

## Preparations

Prepare an Ubuntu 22.04 machine by running the following commands:

* ```sudo apt update && sudo apt install python3 git docker-compose```
* ```git clone https://github.com/rutgerblom/2-tier-app.git ~/git/2-tier-app```
* ```chmod +x ~/git/2-tier-app/frontend/up.sh```
* ```chmod +x ~/git/2-tier-app/frontend/down.sh```
* ```chmod +x ~/git/2-tier-app/backend/up.sh```
* ```chmod +x ~/git/2-tier-app/backend/down.sh```

## Usage

### Frontend Component
Modify the values for ```$host``` and ```$port``` in ```frontend/src/index.php``` so that these correspond with the IP address and port number of your backend.

Start the frontend containers by running:

```sudo ~/git/2-tier-app/frontend/up.sh```

Stop the frontend containers by running:

```sudo ~/git/2-tier-app/frontend/down.sh```

### Backend Component
You can use the backend container that is part of this repository The backend can run on the same as the frontend or on a different host.

Started the back-end by running:
 
```sudo ~/git/2-tier-app/backend/up.sh```

Stop the backend by running:

```sudo ~/git/2-tier-app/backend/up.sh```