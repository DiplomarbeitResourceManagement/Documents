DROP TABLE IF EXISTS td;

create table td (
  tnr     int,
  tbez    varchar(40),
  tbem    varchar(40),
  primary key(tnr)
) default character set 'UTF8';

insert into td values (1, "aaa", "bbb");
insert into td values (2, "aöa", "böb");
insert into td values (3, "aüa", "büb");