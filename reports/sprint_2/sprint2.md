# Sprint-02 Report

## Team Number 13

List team members and roles here
- Jorell Socorro (Project Manager IT Infrastructure)
- Michael Kotlyar (Security)
- Amairani Lopez (UI/UX Developer)
- Jared McVey (Developer)

## Project Manager Report
The different goals that we had planned for sprint 2 were to create the first few steps of our device. The first step that we had to do was to create the shell command to be able to scan devices within the local devices. The next goal was to get started on creating the skeleton of the python and database. With the database schema created to get an idea on how the data should be stored, all we have to do is connect the python code that runs the scan shell and stores it into the database. Finally the last goal we wanted to get finished was the UI/UX of the 7 inch screen on the device. From this point on the overall next goal for sprint 3 is to combine everything together, prioritizing the database and python code first. What makes our user story that is still outstanding are the steps on how the user is going to use the device that we are making. I will quickly go through it:
- user is going to setup device
- user will accept the required installations on the device and ip acceptance
- Asked to create a username and password for the device
(Used to login to any device as long as they are within the ip address)
- The Website will automatically pop up 
- User is given the homepage of the device with 3 icons, trashcan, chromium, tutorial videos
- User can press on tab that will scan devices and show everything

These are the necessary steps that the user will go trhough when they retrieve the device.
 

 ### Here is the image of our progress
 ![](/reports/sprint_2/images/progress.PNG)
 ![](/reports/sprint_2/images/progress2.PNG)

## Atomic Goals for Sprint-03

#### UI/UX
- Connected with the python
- Functionable UI/UX Login with python flask
- UI/UX of 7 inch device screen
- Able to UI/UX basic setup of website
- Outlook of how the device will navigate to the website
#### Developer
- Connect the Database with the python code
- Connect the scan shell with the python code
- Connect the UI/UX simply/ not connecting the database to ui/ux
- Create more tests to make sure everything works
- Convert the XML file to javascript
#### Infrastructure
- Get the database to share with teammates
- Make sure the database is able to read and write
- Combine the schema that was created with the database
- Send the local database onto linux
- Check with security that the database will be safe
#### Junior Developer and Security Assumptions
- Create packer buid for virtual box
- Test out the scan shell to grab more and output it through the developer
- Connect the database local server through packer
- Test out the database to see how secure it is
- Help connect with the developer with the Infrastructure, code to database

## UI/UX Report
The biggest goal for sprint 2 was to figure out how the user was going to go through the device in the perspective of the user. This is the user story:

#### User will agree with installation and permission to use ip address
![](/reports/sprint_2/images/uiuxP6.PNG)
#### User will create a username and password
![](/reports/sprint_2/images/uiuxP1.PNG)
#### User will automatically see the website
![](/reports/sprint_2/images/uiuxP2.PNG)
#### User will scan the local network and see the devices
![](/reports/sprint_2/images/uiuxP3.PNG)
#### User is able to exit and see the destop of the pihole
![](/reports/sprint_2/images/uiuxP4.PNG)
#### The progress of the website
![](/reports/sprint_2/images/uiuxP5.PNG)


## Developer Report


What the developer had to do for this sprint was to get used to python and see how to initiate the mysql through python and the code to run the shell command to scan the devices. In the Admin story, there is not much because the developer was not able to connect to the database with what the IT infrastructure created. Developer was also able to create a conversion code in python from .xml to JSON to SQL because when the scan shell is aquired it will convert the JSON to the database. The only way to collect specific data on the important information, the developer was able to create a filter program in python.

![](/reports/sprint_2/images/progressD3.PNG)
![](/reports/sprint_2/images/progressD4.PNG)
![](/reports/sprint_2/images/progressD5.PNG)

### ***All code inside of the sprint_2/Conversion_Code and to see the scan shell and filter, look into /Code is the folder to look at***


## IT Infrastructure Report

The IT infrastructure was able to create the schema of the database and a sample. Right now since the python code is not yet connected to the database not much data was created from the scan file. However, the database has a skeleton on how the data is going to be formated so all the developer has to do is to create the python code for the UI/UX developer so it will display the required informations. Similar to the previous sprint the Admin story of the database has not changed, please analyze the image here: 
![](/reports/sprint_2/images/admin_story_diagram.PNG)

#### Here is the database schema
![](/reports/sprint_2/images/database_schema.PNG)

#### Here is what the database is going to look like:
![](/reports/sprint_2/images/progressIT5.PNG)



## Junior Developer and Security Assumptions

The Security/Junior developer had a simple task for this sprint 2. The task was to create the file that will scan through the local data and find all devices and put it into a .xml file. The developer has already created a python code that will convert from xml -> JSON -> SQL. The next task is to connect with the database. Admin story here was to scan and collect. 


![](/reports/sprint_2/images/progressS1.PNG)
![](/reports/sprint_2/images/progressS2.PNG)

