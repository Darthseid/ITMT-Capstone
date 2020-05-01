# Instructions On How to Run the Program
## XAMPP Installation - Windows
    Download and install XAMPP: https://sourceforge.net/projects/xampp/files/latest/download
    - Crucial steps for installation
        - After download run .exe file
        - Hit next two times
        - The folder should be placed in: C:\xampp
        - Hit next three more times
        - Wait for installation to complete

## Moving files
    - locate the 2020-team13w folder whereever you cloned the git project
    - clone the boomSaver folder
    - open file explorer and navigate to C:\xampp\htdocs and paste folder within it

## XAMPP Control Panel
    - open the xampp control panel program
    - once opened start Apache service and mysql service
    - after both are green and ready to go open a webrowser and test connection by typing localhost in search bar
    - if xampp site is shown everything is running right

## Run Project
    - after the previous step has no errors type: localhost/Project in search bar
    - You are running the program!

    ___________________________________________________________________________
    ** Note: If you have an error on mysql connection **
    **  - open C:\xampp\htdocs\boomSaver\pages\includes\dbh.inc.php with notepad **
    **  - edit line: $dBPassword = "Clarinet51423!"; -> $dBPassword = ""; **
    **  - open C:\xampp\htdocs\boomSaver\pages\includes\createdb.inc.php **
    **  - edit line: $dBPassword = "Clarinet51423!"; -> $dBPassword = ""; **
    Finally save both files and localhost/boomSaver in search bar
    ___________________________________________________________________________

