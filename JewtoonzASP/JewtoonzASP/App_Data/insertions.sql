/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Ariella
 * Created: Nov 1, 2016
 */

insert into usertype (typeid, typename) values (1, 'user');
insert into usertype (typeid, typeName) values (2, 'guest');
insert into [user] (userid, firstName, lastName, email, password, userTypeID) values
(1, 'User', '01', 'user01@gmail.com', '123456', 1);

