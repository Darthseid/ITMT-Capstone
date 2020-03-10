#!/bin/bash
ip r | awk '/default via/ {print $3}'