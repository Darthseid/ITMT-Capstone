#!/bin/bash


FirstTime(){
echo "1. to Install"
echo "2. to start Server"
echo "3. to exit"
local choice
	read -n1 -p "> " choice
	clear 
  	case $choice in
  		1) Install_Config;;
  		2) Start_Config;;
			3) exit 0
		esac
}

Install_Config(){
	sudo apt install python3.7 npm -y
	python3.7 -m pip install -U pip
	python3.7 -m pip install -U pipenv
	pipenv install
}

Start_Config(){
	pipenv shell
	export FLASK_APP=webInterface.py
	flask run
}

Output()
{
FirstTime
}

while true
do
 Output
done
exit 0