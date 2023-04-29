#!/bin/bash

# Get the current system load
load=$(uptime | awk '{print $10}')

# Get the current date and time
date=$(date +"%Y-%m-%d %H:%M:%S")

# Append the load and date to the system-load log file
echo "$date - System load: $load" >> /var/log/system-load.log
