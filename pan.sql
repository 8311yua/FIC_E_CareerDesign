drop database if exists pan;
create database pan default character set utf8 collate utf8_general_ci;
grant all on pan.* to 'staff'@'localhost' identified by 'password';
use pan;

create table food (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null
);

create table drink (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	pricem int not null,
	prices int not null,
	pricel int not null
);

insert into food values(null, 'クッキー', 120);
insert into food values(null, 'クロワッサン', 200);
insert into food values(null, 'タルト', 400);
insert into food values(null, 'ケーキ', 400);
insert into food values(null, 'サンドイッチ', 300);
insert into food values(null, 'パンケーキ', 500);
insert into food values(null, 'フレンチトースト', 250);

insert into drink values(null, 'アイスレモンティー', 400,350,450);
insert into drink values(null, 'アイスミルクティー', 400,350,450);
insert into drink values(null, 'アイスティー', 400,350,450);
insert into drink values(null, 'レモンティー', 400,350,450);
insert into drink values(null, 'ミルクティー', 400,350,450);
insert into drink values(null, '紅茶', 400,350,450);
insert into drink values(null, 'アイスコーヒー', 350,300,400);
insert into drink values(null, 'ホットコーヒー', 350,300,400);
insert into drink values(null, 'アイスラテ', 400,350,450);
insert into drink values(null, 'ラテ', 400,350,450);
insert into drink values(null, 'アイスキャラメルラテ', 450,400,500);
insert into drink values(null, 'キャラメルラテ', 450,400,500);
insert into drink values(null, 'アイスココア', 450,400,500);
insert into drink values(null, 'ココア', 450,400,500);
insert into drink values(null, 'ホットチョコ', 450,400,500);
insert into drink values(null, 'オレンジジュース', 300,250,350);
