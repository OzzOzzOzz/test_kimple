#!/bin/bash
echo "CREATE DATABASE blog; use blog; source db-dump.sql;" | sudo mysql -u root ;
