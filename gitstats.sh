#!/bin/bash

gitStats()
{
	git ls-tree -r HEAD | sed -Ee 's/^.{53}//' | \
	while read filename; do file "$filename"; done | \
	grep -E ': .*text' | sed -E -e 's/: .*//' | \
	while read filename; do git blame --line-porcelain "$filename"; done | \
	sed -n 's/^author //p' | \
	sort | uniq -c | sort -rn
}



#Display the options User can Choose from
function showMenu()
{	
	echo "Please select the option by pressing the number"
	echo ------------------------
	echo "Press 1 to view overall contribution " 
	echo "Press 2 to view contribution in project code"
	echo "Press 3 to view contribution in the Web Interface "
	echo "Press 4 to view contribution in the reports"
	echo
	echo "Press 5 to exit (or  CTRL+C )"
	echo "------------------------"
	
}

function Menu()
{	
	local choice
	read -n1 -p "> " choice
	clear 
  	case $choice in
  		1) Overall_Stats;;
  		2) Code_Stats;;
  		3) Web_Stats;; 		
		4) Report_Stats;;
		5) exit 0
	esac
 }


 #Function to view  overall stats
function Overall_Stats()
{
	echo "Overall contriubtion" 
	gitStats	
}

##this could easily be stored in an array and be much shorter. 
##Future TODO:

#Function to view project code stats
function Code_Stats()
{
	echo "Code Contribution"
	cd Code
	gitStats
	cd ..
}

#Function to view Web Interface Stats stats
function Web_Stats()
{
	echo "Web Contribution"
	cd webInterface
	gitStats
	cd ..
}

#Function to view Web Interface Stats stats
function Report_Stats()
{
	echo "Reports Contribution"
	cd reports
	gitStats
	cd ..
}



#Creates a pause within the loop
#User must press Enter to Continue
function Pause()
{
	echo
	echo "Press enter to check another category"
	read 
	clear
}



while true
do
 showMenu
 Menu
 Pause
done	
exit 0