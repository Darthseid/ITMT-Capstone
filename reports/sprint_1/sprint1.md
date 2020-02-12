# Team 13: Boom Saver Sprint 1 Report

## Jorell Socorro (Project Manager/IT Infrastructure)
    - I will be in charge of organization of social networks
    - Keep organization of github repository
    - In charge of sprint reports
    - Watch over all members works and progress
    - Do minor development coding  
## Michael Kotlyar  
    - Cyber security
    - Design outline app process and functions
    - Document instructions for related process towards security
    - Getting ip to test their devices if its on the internet
 ## Amairani Lopez  
    - Frontend of web app and mobile app
    - Will be working alongside with Jared to make sure frontend and backend is linked
    - Help create diagrams for the frontend side
    - Design with a variety of different programs for frontend
 ## Jared McVey  
    - Will create the backend of the program
    - Link up a database that will collect data
    - Primarily use python to work
    - Will keep communication with security and Frontend

# UI/UX Report: Amairani Lopez
 ### Mock Up on White board
   - Did several sketches on what we wanted the product to look like 
   - Came up with final sketch version on Mobile and Website
   - Came up with several trials of App names 
 ### Mock Up Online
   - Designed all main mobile pages through a graphic design program
		- Home Page
		- Profile
		- Scan Code pg
		- Scan Network Mock up
		- News event Mock Up
   - Designed all Website pages 
		- Home Page (Latest news events)
		- History Page (Solved Issues, Pending issues)
		- Scan Page (Scan Network/ Find Product)
		- Vulnerabilities Results Page 
- Made a PowerPoint with the Mock Ups to represent the product

# Developer Report

### Sample code from the developer is on his private repo
 https://github.com/Darthseid/ITMT-Capstone/tree/master/Project_Examples

# IT Infrastructure Report: Jorell Socorro

- Choose between mongoDB or mysql database 
- List all devices we will test on
    - Webcam provided by professor
    - Virtual machines to create server
    - Old model laptops provided by professor
    - Cell Phone devices

# Developer and Security Assumptions: Mike Kotlyar

- Assumptions for security:
   - Old or legacy devices that are slow,due to:
   - Outdated Software
      - Find devices that have outdated software that will show up in a scan
      - Checking the model number to see if any company still keeps things updated
   - Enable services
      - Provide services for the outdated software or give advice on how to handle it 
   - Default user/password
      - How easy it is to grab the admin password and user to access the desktop
   - Network work arounds
      - port forwarding or public facing ports to see if it is able to access lets say, smartcam, through the network it is connected to

   

# User Story Diagram
## User Story on Product
   -  User opens the device and plugs in to the router of home network
   -  After getting the device setup it will grab the software of pi-hole that will set a base of how it will grab different devices within the network
   -  Device is setup and will have a small screen that will show a ip address
   -  User will put that ip address into a web broswer from the phone or laptop
   -  A login screen will appear for user security
   -  After signing in, the diagram provided from here, will be what the user will see and do
   -  Both mobile and website have similar steps, this is for the user that bought the product

![](/reports/sprint_1/diagrams/website_user.PNG)
### User steps for Website
## What a user would do
   -  User will go to the website
      -  User will go to the different tabs to learn about vulnerable devices
      -  User might go and check out if their own devices may have been solved 
      -  User can access their devices by two ways
         -  One is to click on scan network and will go into their network and scan the devices that are connected to your network and will navigate to a new page that will show devices and vulnerbility
         -  Second if you do not want to scan your device with your network, just fillout the form and find the specific device that you may have and get a general explanation if that device is vulnerable

   - Simple layout for website
      -  Three different tabs for different pages
         -  Tech news
            -  Show user about different security news that have occurred
         -  History
            -  Show the history of user warnings or solved
         -  Vulnerbility Page
            -  User can scan the network devices are part of or can specifically find device through device model

![](/reports/sprint_1/diagrams/user_story.PNG)
### User steps for Mobile
## What the user does first
   -  Go to app store or google play to download the application
      -  Once user opens application the app will kindly ask to link the app to your network, similar to connecting a google home to the network
      -  User must create an account that will be connected with their home network to provide more of a security so no one can scan people's networks
      -  After connected it will navigate to the home page and the user can start using the application
   - There are three choices
      - Scan network
         -  Goes to a page that shows the user different devices with vulnerbilities
      - Scan Code
         -  Goes to a camera that will scan a barcode that will show the device's vulnerbility
      - Tech News
         -  Goes to a live feed on recent security technology news
      -  Top left corner are personal user warnings that was received and solved
# Admin Story Diagram
![](/reports/sprint_1/diagrams/admin_story_diagram.PNG)  


# Atomic Goals for Sprint-02

## Project Manager
- Ask for each member's phone numbers since slack is more of a social app
- Use the browser organization for tasks more
- Set up a schedule to meet more than once a week which is lab time

## IT Infrastructure
- Obtaining all of the devices for the upcoming sprint
   - Once devices have been obtained will setup with networks
- Finally deciding a database and cooperate with the developer
   - Database between mongoDB or mysql 
- Webcam should be the first device to be tested if it was located in the nmap
- Check old software of streaming devices

## UI/UX 
- Test out UI/UX 
	- Use Power point mock up to test with friends and acquaintances and modify user experience
    - Use the feedback to improve and show some interactive designs
- Start interactive mobile experience with mock ups using Android Studios
	- Learn how to connect python with Android Studios 
	- Have some main pages ready for test
- Start interactive web site experience using HTML & CSS
	- Learn how to connect python back end with HTML & CSS 
	- Have at least the core pages ready with HTML
   
## Developer
   - Test the sample program that was created that is related to our project
      - url to the repository to test out the program is linked in this readme
   - will be using IDLE to test out the program
   - Once completed will cooperate with the IT infrastructure for the backend database
      - Hopefully will create a basic structure on how the backend should look like, a sample image of backend is already uploaded

## Cyber Security 
   - Provide more information on different situations that relates to vulnerable devices
      - many articles that will be used to display when a user is using the program
   - Run different tests to see how vulnerable the devices are shown in the open source programs like nmaps
      - after running tests come up with different solutions to fix certain vulnerbilities
   - Test out the two different assumptions that was mentioned here in the first sprint
   - Check against default credentials or ports that are open to attack vectors

