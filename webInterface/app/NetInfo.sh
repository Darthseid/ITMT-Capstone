#!/bin/bash
ip -o -f inet addr show | awk '/scope global/ {print $2}'