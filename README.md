# Forum
Simple forum for homework submissions during quarantine. Add, Edit, Remove, Submit your homeworks with your friends and much more.

# Info
This was my first bigger project with PHP so its a messy spaghetti code. 

# How To Use (XAMPP)
0) Put those files into the htdocs folder
1) Create MySQL DB, default name is forum
2) Paste DB information into script/conn.php file. Currently, this file is set up for XAMPP default
3) Paste these commands into your database CLI or Command inline. MAKE SURE IT IS FOR DB NOT FOR TABLE
  ```
  CREATE TABLE users (id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                      username varchar(255) NOT NULL,
                      nickname varchar(255) NOT NULL,
                      password varchar(255) NOT NULL,
                      workCount int NOT NULL DEFAULT 0);

  CREATE TABLE work (id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                     title varchar(255) NOT NULL,
                     description varchar(255) NOT NULL,
                     subject varchar(255) NOT NULL,
                     date timestamp, duedate varchar(255) NOT NULL,
                     user varchar(255) NOT NULL,
                     isDone boolean NOT NULL DEFAULT 0,
                     isHanded boolean NOT NULL DEFAULT 0,
                     solution varchar(666) NOT NULL DEFAULT 0,
                     uid varchar(255) NOT NULL);

  CREATE TABLE chat (id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                     name varchar(255) NOT NULL,
                     message varchar(255) NOT NULL,
                     time timestamp NOT NULL);
  ```
4) Now go test it out! It should work!
