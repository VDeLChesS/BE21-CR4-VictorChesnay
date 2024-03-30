create table dishes (
	dish_Id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	dish_name VARCHAR(23) NOT NULL,
	price VARCHAR(50),
	picture VARCHAR(255) NULL,
	dish_description TEXT,
	ingredients TEXT,
	category VARCHAR(50),
	allergenes TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('739', 'Les escargots persillés', '€44,06', 'escargots_persilles.jpg', "Cette délicatesse, faite d''escargots de terre cuits dans du beurre à l''ail, du persil et du vin blanc, est souvent associée au luxe et à la sophistication. La riche histoire de ce plat et sa méthode de préparation unique contribuent à son statut d''icône de la cuisine française.", "escargots, beurre, ail, persil, vin blanc", "appetizer", "escargots, beurre");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('152', 'La bouillabaisse', '€29,61', "bouillabaisse.jpg", "La bouillabaisse est un plat emblématique de notre belle ville néanmoins ce plat serait d''origine grecque et romaine… Pourquoi cette appellation ? Tout simplement parce que lorsque le bouillon bout on doit baisser le feu afin que les poissons cuisent “ quand ça bout, on abaisse”.", "poissons, tomates, oignons, ail, huile d''olive, safran, fenouil, pommes de terre, sel, poivre", "main course", "poissons");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('830', 'Le pot-au-feu', '€23,50', "pot_au_feu.jpg", "Plat composé de viande de bœuf bouillie, avec légumes et aromates, servis avec le bouillon de cuisson. Le pot-au-feu est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver.", "viande de bœuf, carottes, poireaux, navets, oignons, clous de girofle, bouquet garni, sel, poivre", "main course", "viande de bœuf");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('593', 'La quiche lorraine', '€16,90', "quiche_lorraine.jpg", "Selon la tradition Lorraine, la Quiche Lorraine est une tarte salée composée d''une pâte brisée garnie d''un mélange d''œufs et de crème, et de lardons fumés. Adoptée par les Français depuis longtemps, elle fait partie du patrimoine culinaire français.", "pâte brisée, œufs, crème, lardons fumés, sel, poivre", "main course", "lardons fumés");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('540', 'Les galettes bretonnes', '€22,30', "galettes_bretonnes.jpg", "La galette bretonne est un biscuit sablé et une spécialité culinaire traditionnelle emblématique de la cuisine bretonne, originaire de Pont-Aven dans le Finistère en Basse-Bretagne, à base de pâte sablée (beurre demi-sel, jaune d''œuf, farine, sucre).", "beurre demi-sel, jaune d''œuf, farine, sucre", "dessert", "beurre demi-sel");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('071', 'Le steak-tartare', '€35,80', "steak_tartare.jpg", "Viande crue hachée de bœuf ou de cheval agrémentée d''aromates. Le steak tartare est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver.", "viande de bœuf ou de cheval, câpres, cornichons, oignons, persil, moutarde, ketchup, tabasco, sel, poivre", "main course", "viande de bœuf ou de cheval");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('611', 'aligot', '€14,60', "aligot.jpg", "L''aligot est une spécialité culinaire de l''Aubrac, à base de purée de pommes de terre et de tome fraîche, une variété de fromage de l''Aveyron. C''est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver.", "purée de pommes de terre, tome fraîche, beurre, crème, ail, sel, poivre", "main course", "fromage");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('741', 'Les moules frites', '€25,82', "moules_frites.jpg", "Les moules frites sont un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver. Il est composé de moules cuites à la marinière, accompagnées de frites.", "moules, vin blanc, oignons, échalotes, persil, beurre, sel, poivre, frites", "main course", "moules");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('120', 'Le Croque-Monsieur', '€12,80', "Croque_Monsieur.jpg", "Le croque-monsieur est un sandwich chaud composé de deux tranches de pain de mie, de jambon et de fromage, le tout grillé au four. C''est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver.", "pain de mie, jambon, fromage, beurre, sel, poivre", "main course", "fromage");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('284', 'Le gratin dauphinois', '€38,70', "gratin_dauphinois.jpg", "Le gratin dauphinois est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver. Il est composé de pommes de terre, de lait, de crème, de beurre, d''ail et de muscade.", "pommes de terre, lait, crème, beurre, ail, muscade, sel, poivre", "main course", "lait, beurre");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('928', 'Le coq au vin', '€28,39', "coq_au_vin.jpg", "Le coq au vin est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver. Il est composé de morceaux de coq marinés dans du vin rouge, de lardons, d''oignons, de carottes et de bouquet garni.", "morceaux de coq, vin rouge, lardons, oignons, carottes, bouquet garni, sel, poivre", "main course", "vin rouge");
insert into dishes (dish_Id, dish_name, price, picture, dish_description, ingredients, category, allergenes) values ('839', 'La fondue bourguignonne', '€26,44', "fondue_bourguignonne.jpg", "La fondue bourguignonne est un plat traditionnel de la cuisine française, qui se consomme en général en automne et en hiver. Elle est composée de viande de bœuf coupée en dés, que l''on trempe dans de l''huile bouillante.", "viande de bœuf, huile, sauces diverses, sel, poivre", "main course", "viande de bœuf");
