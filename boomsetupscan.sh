#!/bin/bash
#automated enumeration
#this script should perform automated scans by pulling network info from DHCP

#what to do

#get requirements needed for install

## Check if root user
CheckRoot()
if [ "$EUID" -ne 0 ]
  then echo "Operation Requires Root. Please run again using 'sudo'"
  exit
fi


#get device IP adress

getIP(){
    echo IP address is
    myIP="$(hostname -I)"
    echo $myIP
    echo
}

getGateway(){
    echo "Default Gateway is"
    myGateway="$(ip r | awk '/default via/ {print $3}')"
    echo $myGateway
    echo
}


#getsubnet mask
#Helps identify scope of the network
getSubnet(){
    echo "subnet mask is"
    mySubnet="$(ip -o -f inet addr show | awk '/scope global/ {print $4}')"
    echo $mySubnet
    echo
}


getInterface(){
    echo "Interface name is"
    myInterface="$(ip -o -f inet addr show | awk '/scope global/ {print $2}')"
    echo $myInterface
    echo
}

#Perform a scripted network scan to find devices
#Identify Open Ports
#Identify Default Credentials

ScanMySubnet(){
    echo 
    echo "Scanning Subnet"
    sudo nmap $mySubnet -sC -A --open -oX scannedlist.xml 
}

##
##CheckShodan()
##{
##    echo "Checking IP in Shodan"
##    shodan host $myIP
##}


Output(){
    CheckRoot
    getInterface  
    getIP
    getGateway
    getSubnet   
    ScanMySubnet
    #CheckShodan
}




Output
