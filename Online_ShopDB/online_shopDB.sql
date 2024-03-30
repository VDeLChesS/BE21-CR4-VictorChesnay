CREATE DATABASE `online_shopDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `online_shopDB`.`users` (
`id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first_name` VARCHAR(255) NOT NULL ,
`last_name` VARCHAR(255) NOT  NULL,
`password` VARCHAR (255) UNIQUE NOT NULL,
`date_of_birth` DATE NOT  NULL,
`email` VARCHAR(255) NOT  NULL,
`picture` VARCHAR(255) NULL,
`status` VARCHAR(4) NOT NULL DEFAULT 'user',
`address` VARCHAR(255) DEFAULT 'Döblingerhauptstraße 4, 1190 Wien' NOT NULL,
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Alfy', 'Arnaudin', '$2a$04$OpJ7Io/pMTZVO9fysrUFwuHKldKDlslmCdOq3HOmZtsFAbVKAHWy6', '1985-07-06', 'aarnaudin0@wikia.com', '84 La Follette Alley');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Griff', 'Sawnwy', '$2a$04$uBmeaVNz7Uwmp3g1Z4SGf.kvBQF.D12Kkj6CTkRrnLBSlAPioxsye', '1983-02-19', 'gsawnwy1@scribd.com', '303 Pleasure Point');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Yanaton', 'Maccrea', '$2a$04$sHFAwGrE2V8XDzjC88CUxOgsl2nM6Qv9t9mv8kFBa86YTDRPO3GmG', '1994-11-24', 'ymaccrea2@nymag.com', '8 Calypso Lane');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Adriena', 'Willbourne', '$2a$04$Jx.8QUaQRC6481eIDNACBexf5DTTc/95IRWDDDTJnbmwiDPWc/uWS', '1990-10-16', 'awillbourne3@nytimes.com', '193 Ohio Point');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Catharina', 'Blanche', '$2a$04$23rmtBhvr8C2H7ko55w9puqamFKTgV5sN8jtMEhDJHNn6Xkch0AN.', '1991-03-29', 'cblanche4@imageshack.us', '3 Jenna Lane');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Cecil', 'Hendrichs', '$2a$04$fMyNoiH38A1SIMmIJ59eBO57K.w3ZRnO91t2L61l.n1pNgCinanRu', '1972-10-12', 'chendrichs5@stumbleupon.com', '947 Acker Hill');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Von', 'Abbate', '$2a$04$uyPE/x099r9s7i1IaGHsqeWCcGgrt/fveiLo0WYogIeVvJadc53Ru', '1988-11-21', 'vabbate6@amazon.co.jp', '29 Parkside Parkway');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Sherry', 'Aylesbury', '$2a$04$kr7Sw4sSrkOjKKgc6Q0Na.LHwnkjz7VlG7qcYQWwoDY4jASKgMvhC', '1969-02-20', 'saylesbury7@senate.gov', '78830 Utah Plaza');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Sybilla', 'Ellington', '$2a$04$taeMPhdPXgVDfuOwDHK5YO8v7c9BUz6auqkniHBIOmTd/qvdfUClC', '1983-02-23', 'sellington8@typepad.com', '2 Claremont Plaza');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Amabel', 'Rust', '$2a$04$UosJ1AfwDjexbKoMzjkpPemiD2S54l4AlxuXgjhM3HRTte.6Kv22q', '1974-01-10', 'arust9@usnews.com', '9 Shopko Terrace');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Fidel', 'Lowder', '$2a$04$a4Wkw4Bj0688zLHR4s.nXel5EMdRffmtltqPy1ouvruPCR59zyMuG', '1994-09-22', 'flowdera@msn.com', '25932 Artisan Way');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Zita', 'Bembrigg', '$2a$04$2WZnkkxZmpOvD5PkX9r0QOwAaAWNy1khBl0oo.ctGMqw9LLMYJkeu', '1969-06-22', 'zbembriggb@artisteer.com', '2699 Kipling Park');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Carry', 'Freathy', '$2a$04$ns7I8uVKfV./8aUotkBj0O38gAqjPktNdXSKNbep/Dg.9sLApJK/G', '1971-09-10', 'cfreathyc@opensource.org', '87 Steensland Way');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Simmonds', 'Josupeit', '$2a$04$Z4vnG.uCegX1s8FLwM0z5eR8XoxmY2SGNWCzQJDc58MQXYN3fcDRO', '1987-10-19', 'sjosupeitd@networkadvertising.org', '3994 Logan Street');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Roselia', 'Tosdevin', '$2a$04$L7hGT/E17BRIlsK.pK0dQu1SsFt.foTr9pcIoJmrwSzpC5jYYggyW', '1964-01-21', 'rtosdevine@slate.com', '4 Jenifer Alley');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Haroun', 'Gilardi', '$2a$04$xRxcMOMexk/GvH6lMV8sGucxdfSAtn2SSKS6IdGHVTCXHqPjKOlqW', '1962-02-27', 'hgilardif@gravatar.com', '85731 Comanche Avenue');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Corey', 'Patty', '$2a$04$HvUNMkYs2QkGIgA.PR1pbuXsKqwv7EMo9X5Yy3fyvnsjlojSYmrKK', '1986-09-09', 'cpattyg@ebay.com', '30925 Lake View Center');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Violetta', 'Downse', '$2a$04$kRzlXHQ3ZCIecyT.CfmNI.9f8Uw3rvEYq6BToEmAphSDT8vi1FuY.', '1969-04-20', 'vdownseh@gizmodo.com', '6 Anthes Junction');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Jan', 'Hassur', '$2a$04$OkMrr4iNbbwXEp0mmpNHOOqrxLKIBf7ueJbI7w7vLHicrBhrBnVei', '1981-09-19', 'jhassuri@marriott.com', '49775 Lighthouse Bay Way');
insert into users (first_name, last_name, password, date_of_birth, email, address) values ('Patrizia', 'Kinch', '$2a$04$m/XzqeLhIcq35VBJONpI3up2eP5lyry7.8zhOxbGxAezfgSXxY.rO', '1966-01-28', 'pkinchj@home.pl', '5 Ridgeway Court');

CREATE TABLE `online_shopDB`.`logs` (
    `log_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_user_id` INT(11) NOT NULL,
    `fk_status` VARCHAR(4) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;


CREATE TABLE `online_shopDB`.`customers` (
    `customer_id` int(11) NOT NULL AUTO_INCREMENT,
    `fk_user_id` int(11) NOT NULL,
    `customer_address` varchar(255) DEFAULT 'Döblingerhauptstraße 4 / 1190 Wien' NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(`customer_id`),
    FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`),
    CONSTRAINT `fk_user_id_status`
        FOREIGN KEY (`fk_user_id`)
        REFERENCES `users` (`id`)
        ON DELETE CASCADE,
    CONSTRAINT `fk_user_id_status_check`
        CHECK (EXISTS (SELECT 1 FROM `users` WHERE `id` = `fk_user_id` AND `status` = 'user'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;


CREATE TABLE `online_shopDB`.`products` (
    `product_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL ,
    `price` DECIMAL(13,2) NOT NULL,
    `picture` VARCHAR(255) NULL,
    `category` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `fk_supplier` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`fk_supplier`) REFERENCES `suppliers` ('supplier_id'),
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Backpack', 70.00, 'backpack.jpg', 'Sports', 'This is a backpack perfect for hiking, climbing, traveling. WaterProof and a lot of room', 'eastpack', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Shoes', 50.00, 'shoes.jpg', 'Sports', 'This is a pair of shoes perfect for running, hiking, climbing. Comfortable and durable', 'Nike', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('T-shirt', 20.00, 'tshirt_jackjones.jpg', 'Clothing', 'This is a t-shirt perfect for casual wear, sports, gym. Comfortable and durable', 'Jack&Jones', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Jeans', 40.00, 'jeans.jpg', 'Clothing', 'This is a pair of jeans perfect for casual wear, sports, gym. Comfortable and durable', 'Jack&Jones', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Sweater', 30.00, 'sweater.jpg', 'Clothing', 'This is a sweater perfect for casual wear, sports, gym. Comfortable and durable', 'Jack&Jones', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Jacket', 60.00, 'jacket.jpg', 'Clothing', 'This is a jacket perfect for casual wear, sports, gym. Comfortable and durable', 'Jack&Jones', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Hat', 10.00, 'hat.jpg', 'Clothing', 'This is a hat perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Gloves', 15.00, 'gloves.jpg', 'Clothing', 'This is a pair of gloves perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Socks', 5.00, 'socks.jpg', 'Clothing', 'This is a pair of socks perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Belt', 10.00, 'belt.jpg', 'Clothing', 'This is a belt perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Watch', 30.00, 'watch.jpg', 'Accessories', 'This is a watch perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Necklace', 20.00, 'necklace.jpg', 'Accessories', 'This is a necklace perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Bracelet', 15.00, 'bracelet.jpg', 'Accessories', 'This is a bracelet perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Earrings', 10.00, 'earrings.jpg', 'Accessories', 'This is a pair of earrings perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Ring', 10.00, 'ring.jpg', 'Accessories', 'This is a ring perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Sunglasses', 20.00, 'sunglasses.jpg', 'Accessories', 'This is a pair of sunglasses perfect for casual wear, sports, gym. Comfortable and durable', 'rayban', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Bag', 30.00, 'bag.jpg', 'Accessories', 'This is a bag perfect for casual wear, sports, gym. Comfortable and durable', 'eastpack', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Wallet', 15.00, 'wallet.jpg', 'Accessories', 'This is a wallet perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Perfume', 20.00, 'perfume.jpg', 'Accessories', 'This is a perfume perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Shampoo', 10.00, 'shampoo.jpg', 'Accessories', 'This is a shampoo perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Conditioner', 10.00, 'conditioner.jpg', 'Accessories', 'This is a conditioner perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Soap', 5.00, 'soap.jpg', 'Accessories', 'This is a soap perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Toothpaste', 5.00, 'toothpaste.jpg', 'Accessories', 'This is a toothpaste perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Toothbrush', 5.00, 'toothbrush.jpg', 'Accessories', 'This is a toothbrush perfect for casual wear, sports, gym. Comfortable and durable', 'Amazon', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Towel', 10.00, 'towel.jpg', 'Home&Kitchen', 'This is a towel perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Blanket', 20.00, 'blanket.jpg', 'Home&Kitchen', 'This is a blanket perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Pillow', 10.00, 'pillow.jpg', 'Home&Kitchen', 'This is a pillow perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Bed', 100.00, 'bed.jpg', 'Home&Kitchen', 'This is a bed perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Chair', 50.00, 'chair.jpg', 'Home&Kitchen', 'This is a chair perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Table', 70.00, 'table.jpg', 'Home&Kitchen', 'This is a table perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Sofa', 100.00, 'sofa.jpg', 'Home&Kitchen', 'This is a sofa perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Couch', 100.00, 'couch.jpg', 'Home&Kitchen', 'This is a couch perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());

INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Curtains', 20.00, 'curtains.jpg', 'Home&Kitchen', 'This is a pair of curtains perfect for casual wear, sports, gym. Comfortable and durable', 'Ikea', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Laptop', 1250.00, 'laptop.jpg', 'Electronics', 'A very efficient Laptop, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Smartphone', 800.00, 'smartphone.jpg', 'Electronics', 'A very efficient Smartphone, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Tablet', 600.00, 'tablet.jpg', 'Electronics', 'A very efficient Tablet, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Headphones', 200.00, 'headphones.jpg', 'Electronics', 'A very efficient Headphones, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Earphones', 100.00, 'earphones.jpg', 'Electronics', 'A very efficient Earphones, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Keyboard', 50.00, 'keyboard.jpg', 'Electronics', 'A very efficient Keyboard, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Mouse', 30.00, 'mouse.jpg', 'Electronics', 'A very efficient Mouse, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());
INSERT INTO `products`(`name`, `price`, `picture`, `category`, `description`, `provider`, `created_at`) VALUES('Monitor', 300.00, 'monitor.jpg', 'Electronics', 'A very efficient Monitor, perfectly well designed to improve productivity for Home Office', 'Apple', NOW());

CREATE TABLE `online_shopDB`.`orders` (
    `order_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `fk_product_id` INT(11) NOT NULL,
    `quantity` INT(11) NOT NULL,
    `total_price` DECIMAL(13,2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`),
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`cart` (
    `cart_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `fk_order_id` INT(11) NOT NULL,
    `quantity` INT(11) NOT NULL,
    `total_price` DECIMAL(13,2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`),
    FOREIGN KEY (`fk_order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;



CREATE TABLE `online_shopDB`.`categories` (
    `category_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

INSERT INTO `categories`(`name`, `created_at`) VALUES('Sports', NOW());
INSERT INTO `categories`(`name`, `created_at`) VALUES('Clothing', NOW());
INSERT INTO `categories`(`name`, `created_at`) VALUES('Accessories', NOW());
INSERT INTO `categories`(`name`, `created_at`) VALUES('Home&Kitchen', NOW());
INSERT INTO `categories`(`name`, `created_at`) VALUES('Electronics', NOW());



CREATE TABLE `online_shopDB`.`product_categories` (
    `product_category_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_product_id` INT(11) NOT NULL,
    `fk_category_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`id`),
    FOREIGN KEY (`fk_category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`suppliers` (
    `supplier_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,  
    `email` VARCHAR(255) NOT NULL,
    `website` VARCHAR(255) NOT NULL,
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Amazon', 'impressum@amazon.de', 'https://www.amazon.com');
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Ikea', 'contact@ikea.com', 'https://www.ikea.com');	
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Apple', 'contact@apple.com', 'https://www.apple.com');
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Nike', 'contact@nike.com', 'https://www.nike.com');	
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Jack&Jones', 'contact@jackjones.com', 'https://www.jackjones.com');
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Rayban', 'contact@rayban.com', 'https://www.rayban.com');
INSERT INTO `suppliers`(`name`, `email`, `website`) VALUES('Eastpack', 'contact@eastpack.com', 'https://www.eastpack.com');

 
/* CREATE TABLE `online_shopDB`.`admin` (
`id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first_name` VARCHAR(255) NOT NULL ,
`last_name` VARCHAR(255) NOT  NULL,
`password` VARCHAR (255) UNIQUE NOT NULL,
`date_of_birth` DATE NOT  NULL,
`email` VARCHAR(255) NOT  NULL,
`picture` VARCHAR(255) NULL,
`status` VARCHAR(4) NOT NULL DEFAULT 'admin'
`address` VARCHAR(255) DEFAULT 'Pokornygasse 3, 1190 Wien' NOT NULL,
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`reviews` (
    `review_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `fk_product_id` INT(11) NOT NULL,
    `rating` INT(11) NOT NULL,
    `comment` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`),
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`wishlist` (
    `wishlist_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `fk_product_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`),
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`notifications` (
    `notification_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`messages` (
    `message_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_customer_id` INT(11) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_customer_id`) REFERENCES `customers` (`customer_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;



CREATE TABLE `online_shopDB`.`product_images` (
    `product_image_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_product_id` INT(11) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE `online_shopDB`.`product_reviews` (
    `product_review_id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fk_product_id` INT(11) NOT NULL,
    `fk_review_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`fk_product_id`) REFERENCES `products` (`id`),
    FOREIGN KEY (`fk_review_id`) REFERENCES `reviews` (`review_id`)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;


