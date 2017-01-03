
-- use jewtoonz;
-- select * from post;
-- select * from user;
-- select * from jewtoonimage;


insert into [user]
values
(2, 'user', '02', 'user02@gmail.com', '123456', 1),
(3, 'user', '03', 'user03@gmail.com', '123456', 1);

insert into jewtooncategory
values
(1, 'category1'),
(2, 'category2');

create table image
(imageID int not null,
imagePath varchar(200) not null,
primary key (imageID));

alter table jewtoonimage
add foreign key (imageID)
references image(imageID);

insert into image
values
(1, 'C:\Users\LeahYarmark\Pictures\wallpapers\Artistic_7-1024x640.jpg'),
(2, 'C:\Users\LeahYarmark\Pictures\wallpapers\ATT00004.jpg');

insert into jewtoonimage
values
(1, 1),
(2, 2);

insert into post
(postid, userID, imageID, title)
values
(1, 1, 1, 'testPost1'),
(2, 2, 2, 'testPost2');



