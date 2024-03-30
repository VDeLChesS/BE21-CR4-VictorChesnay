CREATE TABLE Customer (
    Customer_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
    email VARCHAR(255) unique NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    Customer_address VARCHAR(255)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Lonna', 'Blandford', 'lblandford0@devhub.com', '+371-703-708-1065', '3740 Banding Terrace');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Eugine', 'Vanyukov', 'evanyukov1@miitbeian.gov.cn', '+353-626-596-5485', '05940 Mendota Hill');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Kendall', 'Phillp', 'kphillp2@reference.com', '+380-319-366-6336', '2425 Everett Drive');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Sadye', 'Vernazza', 'svernazza3@posterous.com', '+7-183-909-9829', '7049 Schiller Circle');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Derick', 'Hagwood', 'dhagwood4@yellowpages.com', '+212-156-582-8564', '6 Hudson Avenue');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Farleigh', 'Krahl', 'fkrahl5@ocn.ne.jp', '+62-594-170-9135', '78496 Lakewood Gardens Place');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Kym', 'Roxburgh', 'kroxburgh6@squarespace.com', '+596-383-688-0394', '24755 Anhalt Trail');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Cristi', 'Antushev', 'cantushev7@phoca.cz', '+48-894-930-7394', '0 Mcbride Drive');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Clare', 'Klimkovich', 'cklimkovich8@prnewswire.com', '+62-545-889-1901', '0 Erie Terrace');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Sascha', 'Redmile', 'sredmile9@tripod.com', '+84-819-750-6981', '932 Farwell Avenue');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Teador', 'Mulvy', 'tmulvya@infoseek.co.jp', '+86-501-749-4826', '450 Doe Crossing Point');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Kirbee', 'Canny', 'kcannyb@miibeian.gov.cn', '+48-854-356-7432', '37717 Steensland Pass');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Gabbey', 'Balhatchet', 'gbalhatchetc@ucoz.ru', '+62-639-511-8628', '82943 Farragut Terrace');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Cointon', 'Hallward', 'challwardd@mapy.cz', '+351-627-650-7850', '952 Lukken Road');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Devora', 'Agglio', 'dagglioe@flavors.me', '+47-358-288-0547', '77 Messerschmidt Court');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Thayne', 'Prine', 'tprinef@dyndns.org', '+63-976-592-2139', '72 Derek Circle');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Saxe', 'Tourle', 'stourleg@studiopress.com', '+63-330-265-5898', '126 Anderson Parkway');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Innis', 'Gagie', 'igagieh@japanpost.jp', '+86-265-946-2288', '8794 Anderson Terrace');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Gusta', 'Blodget', 'gblodgeti@google.com.br', '+86-902-779-2613', '2380 Luster Street');
insert into Customer (first_name, last_name, email, phone_number, Customer_address) values ('Aurea', 'Wooffinden', 'awooffindenj@usa.gov', '+381-613-827-1808', '77040 Sundown Street');


CREATE TABLE Restaurant (
    Restaurant_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    restaurant_name VARCHAR(255),
    restaurant_location VARCHAR(255),
    cuisine_type VARCHAR(255)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Le Petit Bistrot Parisien', '2356 Cardinal Road', 'Cuisine française');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('La Creperie Bretonne', '912 Kenwood Point', 'Spécialités Bretonnes');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Pizzeria Classica', '7987 Oak Valley Terrace', 'Cuisine Italienne');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('A la bonne Franquette', '4 Portage Terrace', 'Cuisine française');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Chez Mamie Delice', '08437 Mayfield Place', 'Boulangerie Patisserie');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Restaurant Thailandais', '3 Orin Terrace', 'Cuisine Thailandaise');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Restaurant Chinois', '00 Dahle Crossing', 'Cuisine Chinoise');
insert into Restaurant (restaurant_name, restaurant_location, cuisine_type) values ('Le bon Couscous', '4884 Pepper Wood Drive', 'Cuisine Marocaine');


CREATE TABLE Menu_Item (
	dish_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Restaurant_id INT,
	dish_name VARCHAR(255) NOT NULL,
	category VARCHAR(50),
	price DECIMAL(10, 2),
	picture VARCHAR(255) NULL,
	item_description TEXT,
	ingredients TEXT,
    FOREIGN KEY (Restaurant_id) REFERENCES Restaurant(Restaurant_id)
) ENGINE=InnoDB   DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Les escargots persillés', 'Main course', '€44,06', 'escargots_persilles.jpg', "Cette délicatesse, faite d''escargots de terre cuits dans du beurre à l''ail, du persil et du vin blanc, est souvent associée au luxe et à la sophistication. La riche histoire de ce plat et sa méthode de préparation unique contribuent à son statut d''icône de la Main course.", "escargots, beurre, ail, persil, vin blanc");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'La bouillabaisse', 'Main course', '€29,61', "bouillabaisse.jpg", "La bouillabaisse est un plat emblématique de notre belle ville néanmoins ce plat serait d''origine grecque et roMaine… Pourquoi cette appellation ? Tout simplement parce que lorsque le bouillon bout on doit baisser le feu afin que les poissons cuisent “ quand ça bout, on abaisse”.", "poissons, tomates, oignons, ail, huile d''olive, safran, fenouil, pommes de terre, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Le pot-au-feu', 'Main course', '€23,50', "pot_au_feu.jpg", "Plat composé de viande de bœuf bouillie, avec légumes et aromates, servis avec le bouillon de cuisson. Le pot-au-feu est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver.", "viande de bœuf, carottes, poireaux, navets, oignons, clous de girofle, bouquet garni, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'La quiche lorraine', 'Appetizer or Main Course', '€16,90', "quiche_lorraine.jpg", "Selon la tradition Lorraine, la Quiche Lorraine est une tarte salée composée d''une pâte brisée garnie d''un mélange d''œufs et de crème, et de lardons fumés. Adoptée par les Français depuis longtemps, elle fait partie du patrimoine culinaire français.", "pâte brisée, œufs, crème, lardons fumés, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Les galettes bretonnes', 'Dessert', '€22,30', "galettes_bretonnes.jpg", "La galette bretonne est un biscuit sablé et une spécialité culinaire traditionnelle emblématique de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne, à base de pâte sablée (beurre demi-sel, jaune d''œuf, farine, sucre).", "beurre demi-sel, jaune d''œuf, farine, sucre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Le steak-tartare', 'Main course', '€35,80', "steak_tartare.jpg", "Viande crue hachée de bœuf ou de cheval agrémentée d''aromates. Le steak tartare est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver.", "viande de bœuf ou de cheval, câpres, cornichons, oignons, persil, moutarde, ketchup, tabasco, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'aligot', 'Main course', '€14,60', "aligot.jpg", "L''aligot est une spécialité culinaire de l''Aubrac, à base de purée de pommes de terre et de tome fraîche, une variété de fromage de l''Aveyron. C'est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver.", "purée de pommes de terre, tome fraîche, beurre, crème, ail, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Les moules frites', 'Main course', '€25,82', "moules_frites.jpg", "Les moules frites sont un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver. Il est composé de moules cuites à la marinière, accompagnées de frites.", "moules, vin blanc, oignons, échalotes, persil, beurre, sel, poivre, frites");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Le Croque-Monsieur', 'Appetizer', '€12,80', "Croque_Monsieur.jpg", "Le croque-monsieur est un sandwich chaud composé de deux tranches de pain de mie, de jambon et de fromage, le tout grillé au four. C'est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver.", "pain de mie, jambon, fromage, beurre, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Le gratin dauphinois', 'Main course', '€38,70', "gratin_dauphinois.jpg", "Le gratin dauphinois est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver. Il est composé de pommes de terre, de lait, de crème, de beurre, d''ail et de muscade.", "pommes de terre, lait, crème, beurre, ail, muscade, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'Le coq au vin', 'Main course', '€28,39', "coq_au_vin.jpg", "Le coq au vin est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver. Il est composé de morceaux de coq marinés dans du vin rouge, de lardons, d''oignons, de carottes et de bouquet garni.", "morceaux de coq, vin rouge, lardons, oignons, carottes, bouquet garni, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'La fondue bourguignonne', 'Main course', '€26,44', "fondue_bourguignonne.jpg", "La fondue bourguignonne est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver. Elle est composée de viande de bœuf coupée en dés, que l''on trempe dans de l''huile bouillante.", "viande de bœuf, huile, sauces diverses, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('1', 'La choucroute garnie', 'Main course', '€31,90', "choucroute_garnie.jpg", "La choucroute garnie est un plat traditionnel de la Main course, qui se consomme en général en automne et en hiver. Elle est composée de choucroute cuite, de saucisses, de lard fumé, de palette de porc, de pommes de terre et de baies de genièvre.", "choucroute, saucisses, lard fumé, palette de porc, pommes de terre, baies de genièvre, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'Les galettes bretonnes', 'Dessert', '€22,30', "galettes_bretonnes.jpg", "La galette bretonne est un biscuit sablé et une spécialité culinaire traditionnelle emblématique de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne, à base de pâte sablée (beurre demi-sel, jaune d''œuf, farine, sucre).", "beurre demi-sel, jaune d''œuf, farine, sucre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La galette complète', 'Main course', '€29,61', "galette_complete.jpg", "La galette complète est une galette de sarrasin garnie d''un œuf, de jambon et de fromage. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "sarrasin, œuf, jambon, fromage, beurre demi-sel, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La galette saucisse', 'Main course', '€23,50', "galette_saucisse.jpg", "La galette saucisse est une galette de sarrasin garnie d''une saucisse de porc grillée. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "sarrasin, saucisse de porc, beurre demi-sel, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crêpe sucrée', 'Dessert', '€16,90', "crepe_sucree.jpg", "La crêpe sucrée est une crêpe de froment garnie de sucre, de beurre et de citron. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "froment, sucre, beurre, citron");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crêpe salée', 'Main course', '€22,30', "crepe_salee.jpg", "La crêpe salée est une crêpe de froment garnie de jambon, de fromage et de champignons. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "froment, jambon, fromage, champignons, beurre demi-sel, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crêpe complète', 'Main course', '€35,80', "crepe_complete.jpg", "La crêpe complète est une crêpe de froment garnie d''un œuf, de jambon et de fromage. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "froment, œuf, jambon, fromage, beurre demi-sel, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crêpe saucisse', 'Main course', '€14,60', "crepe_saucisse.jpg", "La crêpe saucisse est une crêpe de froment garnie d''une saucisse de porc grillée. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "froment, saucisse de porc, beurre demi-sel, sel, poivre");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crêpe sucrée', 'Dessert', '€15,80', "crepe_sucree.jpg", "La crêpe sucrée est une crêpe de froment garnie de sucre, de beurre et de citron. C'est une spécialité culinaire traditionnelle de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne.", "froment, sucre, beurre, citron");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La creme de Marron', 'Dessert', '€12,80', "cremedemarron.jpg", " La crème de marrons est une préparation culinaire à base de purée de marrons sucrée. Elle est utilisée pour garnir des crêpes, des gaufres, des tartes, des gâteaux, des glaces, des yaourts, des crèmes dessert, des mousses, des entremets, des verrines, des bûches de Noël, des chocolats, des mignardises, des pâtisseries, des viennoiseries, des pains, des brioches, des croissants, des beignets, des chaussons, des tourtes, des feuilletés", "purée de marrons, sucre, vanille, rhum");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'Des macarons', 'Dessert', '€16.90', "macaron.jpg", "Le macaron est une pâtisserie d'origine italienne, composée de deux coques de meringue à base de poudre d'amande, de sucre et de blancs d'œufs, collées avec une ganache, une crème ou une confiture. C'est une spécialité culinaire traditionnelle de la cuisine française, originaire de Paris en Île-de-France.", "poudre d'amande, sucre, blancs d'œufs, ganache, crème, confiture");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La tarte tatin', 'Dessert', '€19.00', "tartetatin.jpg", "La tarte Tatin est une tarte aux pommes renversée, composée de pommes caramélisées cuites au four sur une pâte brisée. C'est une spécialité culinaire traditionnelle de la cuisine française, originaire de la région Centre-Val de Loire.", "pommes, sucre, beurre, pâte brisée");
insert into Menu_Item (Restaurant_id, dish_name, category, price, picture, item_description, ingredients) values ('2', 'La crême brulée', 'Dessert', '€16.00', "cremebrule.jpg", "La crème brûlée est un dessert composé de crème, de jaunes d'œufs, de sucre et de vanille, caramélisé au chalumeau. C'est une spécialité culinaire traditionnelle de la cuisine française, originaire de la région Occitanie.", "crème, jaunes d'œufs, sucre, vanille");


CREATE TABLE Reservation (
    Reservation_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Customer_id INT,
    Restaurant_id INT,
    reservation_date DATE,
 	number_of_guests INT,
    FOREIGN KEY (Customer_id) REFERENCES Customer(Customer_id),
    FOREIGN KEY (Restaurant_id) REFERENCES Restaurant(Restaurant_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE Food_order (
    foodorder_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Customer_id INT,
    Restaurant_id INT,
    order_date DATE,
    total_amount DECIMAL(10, 2),
    FOREIGN KEY (Customer_id) REFERENCES Customer(Customer_id),
    FOREIGN KEY (Restaurant_id) REFERENCES Restaurant(Restaurant_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE Delivery (
    delivery_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    foodorder_id INT,
    delivery_service VARCHAR(255),
    delivery_status VARCHAR(255),
    delivery_date DATETIME,
    FOREIGN KEY (foodorder_id) REFERENCES Food_order(foodorder_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

