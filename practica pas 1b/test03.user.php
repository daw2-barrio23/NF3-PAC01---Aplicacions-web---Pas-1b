<?php

        require("class.user.insert.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO, 1);
        print "Primer usuario: <br />";
        print "ID: " . $objUser->getID() . "<br />";
        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Password is " . $objUser->getUsername() . "<br />";
        print "Username is " . $objUser->getPassword() . "<br />";
        print "Email is " . $objUser->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br/><br/>";

        $objUser2 = new User($objPDO, 3);
        print "Segundo usuario: <br />";
        print "ID: " . $objUser2->getID() . "<br />";
        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Password is " . $objUser2->getUsername() . "<br />";
        print "Username is " . $objUser2->getPassword() . "<br />";
        print "Email is " . $objUser2->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser2->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser2->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br/><br/>";
        //print "ID in database is " . $objUser2->getID() . "<br />";



        print "Cambiamos los usuarios:<br /> <br />";

        $cambio = '';
        $cambio = $objUser2->getFirstName();
        $objUser2->setFirstName($objUser->getFirstName());
        $objUser->setFirstName($cambio);
        $cambio = $objUser2->getLastName();
        $objUser2->setLastName($objUser->getLastName());
        $objUser->setLastName($cambio);
        $cambio = $objUser2->getUsername();
        $objUser2->setUsername($objUser->getUsername());
        $objUser->setUsername($cambio);
        $cambio = $objUser2->getPassword();
        $objUser2->setPassword($objUser->getPassword());
        $objUser->setPassword($cambio);
        $cambio = $objUser2->getEmailAddress();
        $objUser2->setEmailAddress($objUser->getEmailAddress());
        $objUser->setEmailAddress($cambio);
        $cambio = $objUser2->getDateLastLogin();
        $objUser2->setDateLastLogin($objUser->getDateLastLogin());
        $objUser->setDateLastLogin($cambio);
        $cambio = $objUser2->getTimeLastLogin();
        $objUser2->setTimeLastLogin($objUser->getTimeLastLogin());
        $objUser->setTimeLastLogin($cambio);
        $cambio = $objUser2->getDateAccountCreated();
        $objUser2->setDateAccountCreated($objUser->getDateAccountCreated());
        $objUser->setDateAccountCreated($cambio);
        $cambio = $objUser2->getTimeAccountCreated();
        $objUser2->setTimeAccountCreated($objUser->getTimeAccountCreated());
        $objUser->setTimeAccountCreated($cambio);

        $objUser->Save();
        $objUser2->Save();
       
        print "Primer usuario: <br />";
        print "ID: " . $objUser->getID() . "<br />";
        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Password is " . $objUser->getUsername() . "<br />";
        print "Username is " . $objUser->getPassword() . "<br />";
        print "Email is " . $objUser->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br/><br/>";

        print "Segundo usuario: <br />";
        print "ID: " . $objUser2->getID() . "<br />";
        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Password is " . $objUser2->getUsername() . "<br />";
        print "Username is " . $objUser2->getPassword() . "<br />";
        print "Email is " . $objUser2->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser2->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser2->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br/><br/>";