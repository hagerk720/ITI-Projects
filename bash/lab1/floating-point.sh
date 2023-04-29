#!/bin/bash

# Check if the first parameter is a valid floating point number
$(echo "${1}" | grep -Eq "^[+-]?[0-9]+([.][0-9]+)?$") || exit 2
$(echo "${2}" | grep -Eq "^[+-]?[0-9]+([.][0-9]+)?$") || exit 3

# Perform the floating point operation with the first and second parameters
result=$(echo "$1 + $2" | bc -l)

# Print the result
echo "Result: $result"
