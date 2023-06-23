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
	image varchar(200) not null,
	prices int not null,
	pricem int not null,
	pricel int not null
);
INSERT INTO food (`id`, `name`,`image`, `price`) VALUES
(1, 'クッキー\r\n','Cookie.jpg', 120),
(2, 'クロワッサン\r\n','Croissant.jpg', 200),
(3, 'タルト\r\n','StrawberryTart.jpg', 400),
(4, 'ケーキ\r\n','StrawberryCake.jpg', 400),
(5, 'サンドイッチ\r\n','Sandwich.jpg', 300),
(6, 'パンケーキ\r\n','Pancakes.jpg', 500),
(7, 'フレンチトースト\r\n','FrenchToast.jpg', 250);

INSERT INTO drink (`id`,`name`,`image`,`prices`,`pricem`,`pricel`) VALUES

(8, 'アイスレモンティー','IceLemonTea.jpg', 350,400,450),
(9, 'アイスミルクティー','IceMilkTea.jpg', 350,400,450),
(10, 'アイスティー','IceTea.jpg', 350,400,450),
(11, 'レモンティー','LemonTea.jpg', 350,400,450),
(12, 'ミルクティー','MilkTea.jpg', 350,400,450),
(13, '紅茶','Tea.jpg', 350,400,450),
(14, 'アイスコーヒー','IceCoffee.jpg',300,350,400),
(15, 'ホットコーヒー','HotCoffee.jpg',300,350,400),
(16, 'アイスラテ','IceLatte.jpg', 350,400,450),
(17, 'ラテ','Latte.jpg', 350,400,450),
(18, 'アイスキャラメルラテ','IceCaramel.jpg', 400,450,500),
(19, 'キャラメルラテ','CaramelLatte.jpg', 400,450,500),
(20, 'アイスココア','IceCocoa.jpg', 400,450,500),
(21, 'ココア','Cocoa.jpg', 400,450,500),
(22, 'ホットチョコ','HotChocolate.jpg', 400,450,500),
(23, 'オレンジジュース','OrangeJuice.jpg',250,300,350);
