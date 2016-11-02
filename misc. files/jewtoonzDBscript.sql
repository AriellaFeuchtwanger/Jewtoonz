create database Jewtoonz;
USE Jewtoonz;

CREATE TABLE Jewtoonz.JewtoonCategory (
  jewtoonCategoryID INT NOT NULL,
  jewtoonCategoryName VARCHAR(15) NOT NULL,
  PRIMARY KEY (jewtoonCategoryID)
  );

CREATE TABLE Jewtoonz.JewtoonImage (
  imageID INT NOT NULL,
  jewtoonCategoryID INT NOT NULL,
  PRIMARY KEY (imageID),
  CONSTRAINT fk_Jewtoon_JewtoonCategory1
    FOREIGN KEY (jewtoonCategoryID)
    REFERENCES Jewtoonz.JewtoonCategory (jewtoonCategoryID)
  );

create table jewtoonz.userType(
  typeID int not null,
  typeName varchar(20) not null,
  primary key (typeID)
);

CREATE TABLE Jewtoonz.User (
  userID INT NOT NULL,
  firstName VARCHAR(45) NOT NULL,
  lastName VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL,
  userTypeID int not null,
  PRIMARY KEY (userID),
  constraint fk_userTypeID
	foreign key (userTypeID)
    references jewtoonz.usertype (typeID)
  );

CREATE TABLE Jewtoonz.Post (
  postID INT NOT NULL,
  userID INT NOT NULL,
  imageID INT NOT NULL,
  timePosted DATE NOT NULL,
  Title VARCHAR(45) NULL,
  PRIMARY KEY (postID, imageID, userID),
  CONSTRAINT fk_Post_User1
    FOREIGN KEY (userID)
    REFERENCES Jewtoonz.User (userID),
  CONSTRAINT fk_Post_Jewtoon1
    FOREIGN KEY (imageID)
    REFERENCES Jewtoonz.JewtoonImage (imageID)
    );
    
CREATE TABLE Jewtoonz.Comment (
  commentID INT NOT NULL,
  commentText VARCHAR(100) NOT NULL,
  userID INT NOT NULL,
  timePosted DATETIME NOT NULL,
  postID int not null,
  PRIMARY KEY (commentID, userID, postID),
  CONSTRAINT fk_Comment_User1
    FOREIGN KEY (userID)
    REFERENCES Jewtoonz.User (userID),
  constraint fk_Comment_postID1
	foreign key (postID)
    references jewtoonz.post (postID)
    );