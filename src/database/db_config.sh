#!/bin/bash
DATABASE_NAME="virtuallab"
export DEBIAN_FRONTEND=noninteractive
apt-get -q -y install mysql-server
mysql -u root -p electrical -Bse "create database $DATABASE_NAME;"
cd ../src/database

