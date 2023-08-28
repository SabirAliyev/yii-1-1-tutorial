SELECT * FROM tbl_user;

DROP TABLE tbl_user;

create table public.tbl_user
(
    id       serial primary key,
    username varchar(128) not null,
    password varchar(128) not null,
    email    varchar(128) not null
);

alter table public.tbl_user
    owner to postgres;

insert into tbl_user (username, password, email) VALUES ('User_03', 'pass-03', 'user_03@yahoo.com');

update tbl_user set username='User_01', password='pass-01' where id=1;
