create database estudiante;
use estudiante;
create table estudiante
(
    nombre  varchar(50) not null primary key,
    ci      varchar(50) not null,
    telf    varchar(50) not null
);
insert into estudiante values('pepe','1111','1111');
insert into estudiante values('pepe dos','2222','2222');
insert into estudiante values('pepe tres','3333','3333');