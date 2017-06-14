DROP TABLE IF EXISTS sdfull;
DROP TABLE IF EXISTS sd;
DROP TABLE IF EXISTS jd;
DROP TABLE IF EXISTS fd;
DROP TABLE IF EXISTS td;

create table td (
  tnr     int,
  tbez    varchar(40),
  tbem    varchar(40),
  primary key(tnr)
);

create table fd (
  fnr     int,
  fname   varchar(100),
  fadr    varchar(100),
  primary key(fnr)
);

create table jd (
  jnr     int,
  jjahr   int,
  jbem    varchar(100),
  primary key(jnr)
);

create table sd (
  snr     int,
  svname  varchar(40),
  snname  varchar(40),
  stitel  int,
  sjahr   int,
  stel1p  varchar(30),
  stel2p  varchar(30),
  stel1f  varchar(30),
  stel2f  varchar(30),
  sxing   int,
  sfirma  int,
  primary key(snr),
  foreign key(stitel) references td(tnr),
  foreign key(sjahr)  references jd(jnr),
  foreign key(sfirma) references fd(fnr)
);

create table sdfull (
  nr          int,
  jahr        int,
  klasse      varchar(10),
  titel       varchar(20),
  xing        char,
  fjahr       int,
  fname       varchar(50),
  femail      varchar(40),
  ftaetigkeit varchar(30),
  ftel        varchar(30),
  fplz        varchar(10),
  fort        varchar(30),
  fstrasse    varchar(50),
  ferial      char,
  diplom      char,
  exursion    char,
  fexname     varchar(40),
  pemail      varchar(50),
  ptel        varchar(30),
  bemerkung   varchar(100),
  primary key(nr)
);

  
  