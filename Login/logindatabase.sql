CREATE table users (
user_id int(11) not null auto_increment primary key,
user_first varchar(256) not null, 
user_last varchar(256) not null, 
user_email varchar(256) not null, 
user_uid varchar(256) not null, 
user_password varchar(256) not null
);