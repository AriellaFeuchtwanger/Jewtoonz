use master;
go
drop database jewtoonz;
create database Jewtoonz;
go
USE Jewtoonz;

CREATE TABLE JewtoonCategory (
  jewtoonCategoryID INT NOT NULL,
  jewtoonCategoryName VARCHAR(15) NOT NULL,
  PRIMARY KEY (jewtoonCategoryID)
  );

CREATE TABLE JewtoonImage (
  imageID INT NOT NULL,
  jewtoonCategoryID INT NOT NULL,
  PRIMARY KEY (imageID),
  CONSTRAINT fk_Jewtoon_JewtoonCategory1
    FOREIGN KEY (jewtoonCategoryID)
    REFERENCES JewtoonCategory (jewtoonCategoryID)
  );

create table userType(
  typeID int not null,
  typeName varchar(20) not null,
  primary key (typeID)
);

CREATE TABLE [User] (
  userID INT NOT NULL,
  firstName VARCHAR(45) NOT NULL,
  lastName VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL,
  userTypeID int not null,
  PRIMARY KEY (userID),
  constraint fk_userTypeID
	foreign key (userTypeID)
    references usertype (typeID)
  );
  
CREATE TABLE Post (
  postID INT NOT NULL unique,
  userID INT NOT NULL unique,
  imageID INT NOT NULL unique,
  datePosted DATEtime NOT NULL default getdate(),
  Title VARCHAR(45) NULL,
  PRIMARY KEY (postID, imageID, userID),
  CONSTRAINT fk_Post_User1
    FOREIGN KEY (userID)
    REFERENCES [User] (userID),
  CONSTRAINT fk_Post_Jewtoon1
    FOREIGN KEY (imageID)
    REFERENCES JewtoonImage (imageID)
    );
    
CREATE TABLE Comment (
  commentID INT NOT NULL,
  commentText VARCHAR(100) NOT NULL,
  userID INT NOT NULL,
  timePosted DATETIME NOT NULL,
  postID int not null,
  PRIMARY KEY (commentID, userID, postID),
  CONSTRAINT fk_Comment_User1
    FOREIGN KEY (userID)
    REFERENCES [User] (userID),
  constraint fk_Comment_postID1
	foreign key (postID)
    references post (postID)
    );
    
