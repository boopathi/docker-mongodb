# docker-mongodb

A mongodb container that runs in docker

# Build

`docker build -t myname/mongodb .`

# Start mongodb as service

`docker run -d -p 27017:27017 -v /path/that/mongo/can/use:/data/db -name mongodb myname/mongodb`

# Linking your app running inside docker to use mongodb

Let's assume your app runs on port 80.

`docker run -d -p 80:80 -link mongodb:db -name myapp myname/myapp`

Now, your `myapp` container's `ENV` would contain these presets:

+ `DB_PORT_27017_TCP_ADDR`
+ `DB_PORT_27017_TCP_PORT`

# Note

If you try to start your mongodb as a service for the second time, it'll give you an error that the name already exists. So either delete the container or use a different name (say monogodb-myapp)

`docker rm mongodb` will delete it.

