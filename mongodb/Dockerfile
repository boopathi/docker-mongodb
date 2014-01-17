from ubuntu:12.04
maintainer Boopathi Rajaa <me@boopathi.in>

# Mongodb ppa
run apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 7F0CEB10
run echo 'deb http://downloads-distro.mongodb.org/repo/ubuntu-upstart dist 10gen' > /etc/apt/sources.list.d/mongodb.list

# Hack for initctl not available in ubuntu
run dpkg-divert --local --rename --add /sbin/initctl
run ln -s /bin/true /sbin/initctl

# Mongo db requires this to be present
run mkdir -p /data/db

# Install
run apt-get update
run apt-get install mongodb-10gen

expose 27017

volume ["/data/db"]

# Start DB
entrypoint /usr/bin/mongod

