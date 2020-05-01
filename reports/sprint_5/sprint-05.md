# Sprint-05 Written Report

## Team Number 13
* Jorell Socorro - Infrastructure/Developer/Junior Developer
* Amairani Lopez - UI/UX Infrastructure
* Jared McVey   - Project Manager

## UI/UX Artifacts
### Login/ Sign Up Restyling

#### https://github.com/illinoistech-itm/2020-team13w/commit/3cde618c1257252bf91bfbdb7eefadb08ea42fe1
  ![uiux](media/trello_styling_1.PNG)
  ![uiux](media/sign_in_1.png)

### Cleaning up styling 

#### https://github.com/illinoistech-itm/2020-team13w/commit/cd464a9370190f0ee6cbb35b6d7a1848de257047
 ![uiux](media/trello_styling_2.PNG)  
 ![uiux](media/contact_section.PNG)

### Making the comment section and readjusting the blog

#### https://github.com/illinoistech-itm/2020-team13w/commit/a2eeb920e33dbdcae039ba1ae9240d0af2452490
 ![uiux](media/trello_styling_3.PNG) 
 ![uiux](media/comment_section.PNG)   
 
### Added user interactivity and warnings 

#### https://github.com/illinoistech-itm/2020-team13w/commit/ea8435d9e562895b57fcb9ec56812edbb195c048
 ![uiux](media/user_home.PNG) 
 ![uiux](media/comment_section_2.PNG)  
 
* Add screenshot of a minimum of 5 additional GitHub issues/bugs reported, assigned, and resolved

## Infrastructure
* List all tasks that you have completed along with the artifacts proving they are complete (GitHub commit URL and Project Management artifact screenshot)
* Create a virtual machine based Load-Balancer to route between two copies of the front end virtual machines (For example: Nginx)
* Include a script that will build each of these discrete systems as virtual machines automatically, include instructions how to do this in the install.md located in the root of the GitHub repo
– At a minimum of 4 systems: Load Balancer, Frontend 1, Frontend 2 Backend-datastore
* Include in the Diagrams folder a diagram of all of the discrete servers and their IP addresses in your application (All systems need to be on a discrete server)
* Include a list of external packages per system being installed for this application via package manager
that were added or removed since sprint-04

## Developer
### HTML to PHP
* https://github.com/illinoistech-itm/2020-team13w/commit/a21fff259e2b476b44f4d3dd298ae35847d68ac3
![dev](media/htmlPhp.PNG)

### Login System
* https://github.com/illinoistech-itm/2020-team13w/commit/a21fff259e2b476b44f4d3dd298ae35847d68ac3
![dev](media/htmlPhp2.PNG)
![dev](media/htmlPhp3.PNG)

### Comment System
* https://github.com/illinoistech-itm/2020-team13w/commit/990b82782b9203c11648b7ca6a3ac4f8a2b48fa1
* https://github.com/illinoistech-itm/2020-team13w/commit/990b82782b9203c11648b7ca6a3ac4f8a2b48fa1
* https://github.com/illinoistech-itm/2020-team13w/commit/4a20d02170124cf39a1ddfb9a17a87d885f28759
* https://github.com/illinoistech-itm/2020-team13w/commit/6b1da485202a077d290fa00348ff27606274fbf7
* https://github.com/illinoistech-itm/2020-team13w/commit/47efdf193ae05d9825b427f6c67788106ba3049d 
* https://github.com/illinoistech-itm/2020-team13w/commit/031d446a4a552b58b6a80bf0b41ddc2d55c525b0
![dev](media/commentSystemDev.PNG)

#### Automation
        ## Acquiring GIT Project
        git clone https://github.com/illinoistech-itm/2020-team13w.git
        or
        if having issues with cloning due to access, deploy ssh key to avoid any problems
            - open powershell type: ssh-keygen
            - press "enter" twice 
            - next type: ls ~/.ssh to view files
            - next type: cat ~/.ssh.id_rsa.pub
            - copy from powershell the key
            - go to the git project you want to view and look at settings/deploy keys
            - click on add deploy key, give a title of machine accessing and paste key into key box
            - do not check box and press add key
            - go back to powershell and type git clone git@github.com:illinoistech-itm/2020-team13w
            - press enter and you should be good to go on acquiring the project

        ---Code---
        <?php

        $servername = "localhost";
        $dBUsername = "root";
        $dBPassword = "";//change this to your database info
        $dBName = "boomSaver";//change this to your database info
        $user = "admin";
        $pass = "root";



        //connection to our database
        $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

        if (!'conn') {
            die("Connection failed: ".mysqli_connect_error());
        }

        $sql = "CREATE TABLE usercom (
            idUsers INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
            uidUsers TINYTEXT NOT NULL,
            emailUsers TINYTEXT NOT NULL,
            pwdUsers TINYTEXT NOT NULL,
            comment1 VARCHAR(255) NOT NULL,
            comment2 VARCHAR(255) NOT NULL,
            comment3 VARCHAR(255) NOT NULL,
            comment4 VARCHAR(255) NOT NULL,
            comment5 VARCHAR(255) NOT NULL
            )";



        if ($conn->query($sql)) {
            echo "Table created successfully";
        } else {
            
        }

        //prepares the statement to look into table
        $stmt1 = $conn->prepare('SELECT uidUsers, pwdUsers FROM usercom WHERE uidUsers = ? OR pwdUsers = ?');
        $stmt1->bind_param('ss', $user, $pass);
        $stmt1->execute();
        $stmt1->store_result();

        //checks if admin was already created
        if ($stmt1->num_rows) {
        
        }
        //automatically creates an admin account
        else {
            echo "created";
            $admin = "INSERT INTO usercom (idUsers, uidUsers, emailUsers, pwdUsers, comment1, comment2, comment3, comment4, comment5)
            VALUES ('0', 'admin', 'admin@example.com', 'root', '', '', '','', '')";
            $conn->query($admin);
        }
        ---Code---

#### non-root creation
![dev](media/developer1.PNG)
 - User is created to allow to leave a comment into the blog page, without an account you are not able to leave a comment.

## Junior Developer
 ### Admin
* https://github.com/illinoistech-itm/2020-team13w/commit/12be9b4f04fe61f08d78011b4282d5fcd87c698a
* https://github.com/illinoistech-itm/2020-team13w/commit/384729965b2284e0c2378a35486aba76f0ad8770
* https://github.com/illinoistech-itm/2020-team13w/commit/0ee1d2dafb15cd40ada368649d426b8be6a00017
* https://github.com/illinoistech-itm/2020-team13w/commit/cdee2a600bd42c57ceff4ccf8c26e7741c920cd5
![dev](media/juniorDev1.PNG)


#### Feature on obtaining user info
* https://github.com/illinoistech-itm/2020-team13w/commit/12be9b4f04fe61f08d78011b4282d5fcd87c698a
![dev](media/juniorDev2.PNG)

#### User Feature Experience
##### Comment Section Usage
![dev](media/juniorDev3.PNG)
![dev](media/juniorDev4.PNG)
##### Contact page responses
![dev](media/juniorDev5.PNG)

#### IP information
![dev](media/juniorDev6.PNG)

## Project Manager
* List any detailed assumptions your team made explaining deliverable context as needed
* Instructor will execute instructions in your install.md file and recreate your live demonstration, so test, test, test.
