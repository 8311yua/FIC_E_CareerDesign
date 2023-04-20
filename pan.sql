drop database if exists pan;
create database pan default character set utf8 collate utf8_general_ci;
grant all on pan.* to 'staff'@'localhost' identified by 'password';
use pan;

create table food (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	image varchar(200) not null,
	price int not null
);

create table drink (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	prices int not null,
	pricem int not null,
	pricel int not null
);
INSERT INTO food (`id`, `name`,`image`, `price`) VALUES
(1, 'クッキー\r\n','クッキー.jpg', 120),
(2, 'クロワッサン\r\n','クロワッサン.jpg', 200),
(3, 'タルト\r\n','いちごタルト2.jpg', 400),
(4, 'ケーキ\r\n','いちごケーキ.jpg', 400),
(5, 'サンドイッチ\r\n','サンドイッチ.jpg', 300),
(6, 'パンケーキ\r\n','パンケーキ.jpg', 500),
(7, 'フレンチトースト\r\n','フレンチトースト.jpg', 250);

INSERT INTO drink (`id`,`name`,`prices`,`pricem`,`pricel`) VALUES

(8, 'アイスレモンティー', 350,400,450),
(9, 'アイスミルクティー', 350,400,450),
(10, 'アイスティー', 350,400,450),
(11, 'レモンティー', 350,400,450),
(12, 'ミルクティー', 350,400,450),
(13, '紅茶', 350,400,450),
(14, 'アイスコーヒー',300,350,400),
(15, 'ホットコーヒー',300,350,400),
(16, 'アイスラテ', 350,400,450),
(17, 'ラテ', 350,400,450),
(18, 'アイスキャラメルラテ', 400,450,500),
(19, 'キャラメルラテ', 400,450,500),
(20, 'アイスココア', 400,450,500),
(21, 'ココア', 400,450,500),
(22, 'ホットチョコ', 400,450,500),
(23, 'オレンジジュース',250,300,350);
