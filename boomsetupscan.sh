#!/bin/bash
#automated enumeration
#this script should perform automated scans by pulling network info from DHCP

#what to do

#get requirements needed for install
getRequirements(){
    sudo apt install nmap -y
}


#get device IP adress

getIP(){
    echo IP address is
    myIP="$(hostname -I)"
    echo $myIP
    echo
}

getInterface(){
    echo "Interface name is"
    myInterface="$ip -o -f inet addr show | awk '/scope global/ {print $2}')"
    echo $myInterface
    echo
}

#getsubnet mask
#Helps identify scope of the network
getSubnet(){
    echo "subnet mask is"
    mySubnet="$(ip -o -f inet addr show | awk '/scope global/ {print $4}')"
    echo $mySubnet 
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
    getIP
    getInterface
    getSubnet
    ScanMySubnet
    #CheckShodan
}




Output
