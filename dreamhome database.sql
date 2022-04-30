BEGIN
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE branch';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
    END;
    EXECUTE IMMEDIATE 'CREATE TABLE branch (branchNo varchar(50) DEFAULT NULL,street varchar(50) DEFAULT NULL,city varchar(50) DEFAULT NULL,postcode varchar(50) DEFAULT NULL)';
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE client';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
    END;
    EXECUTE IMMEDIATE 'CREATE TABLE client (ID number(11) DEFAULT NULL,clientNo varchar(50) DEFAULT NULL,fName varchar(30) DEFAULT NULL,lName varchar(30) DEFAULT NULL,telNo varchar(20) DEFAULT NULL,Street varchar(30) DEFAULT NULL,City varchar(30) DEFAULT NULL,PostCode varchar(10) DEFAULT NULL,email varchar(40) DEFAULT NULL,JoinedOn timestamp DEFAULT NULL,Region varchar(30) DEFAULT NULL,preType varchar(5) DEFAULT NULL,maxRent number(6) DEFAULT NULL)'; 
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE propertyforrent';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
    END;
    EXECUTE IMMEDIATE 'CREATE TABLE propertyforrent (propertyNo varchar(50) DEFAULT NULL,street varchar(50) DEFAULT NULL,city varchar(50) DEFAULT NULL,postcode varchar(50) DEFAULT NULL,type varchar(50) DEFAULT NULL,rooms number(11) DEFAULT NULL,rent number(11) DEFAULT NULL,ownerNo varchar(50) DEFAULT NULL,staffNo varchar(50) DEFAULT NULL,branchNo varchar(50) DEFAULT NULL,picture varchar(40) DEFAULT NULL,floorPlan varchar(40) DEFAULT NULL)';
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE staff';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
    END;
    EXECUTE IMMEDIATE 'CREATE TABLE staff (staffNo varchar(50) DEFAULT NULL,fName varchar(50) DEFAULT NULL,lName varchar(50) DEFAULT NULL,position varchar(50) DEFAULT NULL,sex varchar(50) DEFAULT NULL,DOB timestamp DEFAULT NULL,salary number(11) DEFAULT NULL,branchNo varchar(50) DEFAULT NULL,Telephone varchar(16) DEFAULT NULL,Mobile varchar(16) DEFAULT NULL,Email varchar(50) DEFAULT NULL)'; /*StaffPropCount number(11) DEFAULT NULL)*/
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE viewing';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
    END;
   /*EXECUTE IMMEDIATE 'CREATE TABLE PrivateOwner (ownerNo varchar(50) DEFAULT NULL,fName varchar(50) DEFAULT NULL,lName varchar(50) DEFAULT NULL,position varchar(50) DEFAULT NULL,sex varchar(50) DEFAULT NULL,DOB timestamp DEFAULT NULL,salary number(11) DEFAULT NULL,branchNo varchar(50) DEFAULT NULL,Telephone varchar(16) DEFAULT NULL,Mobile varchar(16) DEFAULT NULL,Email varchar(50) DEFAULT NULL)';
    BEGIN
        EXECUTE IMMEDIATE 'DROP TABLE viewing';
    EXCEPTION
        WHEN OTHERS THEN
            IF SQLCODE != -942 THEN
                RAISE;
            END IF;
            END;*/
    EXECUTE IMMEDIATE 'CREATE TABLE viewing (ID number(11) DEFAULT NULL,clientID number(11) DEFAULT NULL,propertyNo varchar(10) DEFAULT NULL,viewDate timestamp DEFAULT NULL,viewHour number(4) DEFAULT NULL,Comments varchar(255) DEFAULT NULL,WishToRent number(1) DEFAULT NULL)';
END;