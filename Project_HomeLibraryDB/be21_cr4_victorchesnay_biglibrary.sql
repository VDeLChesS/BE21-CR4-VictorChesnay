-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 02:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be21_cr4_victorchesnay_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be21_cr4_victorchesnay_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be21_cr4_victorchesnay_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_media`
--

CREATE TABLE `list_of_media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `short_description` longtext NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `author_firstname` varchar(50) NOT NULL,
  `author_lastname` varchar(50) NOT NULL,
  `publish_year` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `publisher_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_of_media`
--

INSERT INTO `list_of_media` (`id`, `title`, `picture`, `ISBN`, `short_description`, `media_type`, `author_firstname`, `author_lastname`, `publish_year`, `publisher`, `publisher_address`) VALUES
(1, 'Around The World in Eighty Days', 'around_the_world.jpg', '9781416534723', 'In this classic adventure story, a wealthy gentleman, Phileas Fogg, makes a bet that he can travel around the world in eighty days. Fogg and his servant set off immediately, determined to win this race against time. Little do they know they aren\'t making the journey alone....', 'Book', 'Jules', 'Vernes', '1873', 'Schuster', '1230 Avenue of the Americas, New York, NY, 10020-1'),
(2, 'Journey to the Center of the Earth', 'journeyToTheCenterOfTheEarth.jpg', '9780553213973', 'An adventurous geology professor chances upon a manuscript in which a 16th-century explorer claims to have found a route to the earth\'s core. Professor Lidenbrock can\'t resist the opportunity to investigate, and with his nephew Axel, he sets off across Iceland in the company of Hans Bjelke, a native guide.The expedition descends into an extinct volcano toward a sunless sea, where they encounter a subterranean world of luminous rocks, antediluvian forests, and fantastic marine life — a living past that holds the secrets to the origins of human existence', 'Book', 'Jules', 'Vernes', '1864', 'Bantam', 'Random House Academic Marketing, 1745 Broadway, 20'),
(3, 'Twenty Thousand Leagues Under the Sea', 'twenty_thousand_under_sea.jpg', '9880653214773', 'Twenty Thousand Leagues Under the Sea tells the story of three men who go to sea in search of a giant whale. They are taken prisoner on board the world\'s first submarine, the Nautilus. The Nautilus travels through the world\'s seas. The men see amazing deep-sea creatures, and they travel to remote islands.', 'Book', 'Jules', 'Vernes', '1870', 'Livre de Poche', '58 Rue Jean Bleuzen, 92170 Vanves, France'),
(4, 'The Mysterious Island', 'mysterious_island.jpg', '9780812972122', 'The Mysterious Island is a 19th-century science-fiction adventure novel by French author Jules Verne. The plot concerns five men who, during the American Civil War, escape a prison camp in Richmond, Virginia by stealing a hot air balloon and subsequently discover an uninhabited island.', 'Book', 'Jules', 'Vernes', '2004', 'Modern Library', '457 Madison Avenue, 20 East 57th Street'),
(5, 'From The Earth to the Moon', 'earth_to_the_moon.jpg', '9781598184549', 'La fin de la guerre de Sécession freine inévitablement les activités des fanatiques artilleurs du Gun-Club de Baltimore. Impey Barbicane, le président, propose alors un projet hors du commun : lancer un énorme projectile sur la Lune. Le premier moment de stupeur passé, l\'enthousiasme est général !\r\n\r\nIt tells the story of the Baltimore Gun Club, a post-American Civil War society of weapons enthusiasts, and their attempts to build an enormous Columbiad space gun and launch three people — the Gun Club\'s president, his Philadelphian armor-making rival, and a French poet — in a projectile with the goal of a Moon ...', 'Book', 'Jules', 'Vernes', '2006', 'Aegypan', '12312 sherman way apt 119 North Hollywood CA 91605'),
(6, 'Les enfants du capitaine Grant', 'enfants_du_capitaine_grant.jpg', '9782253160885', 'A message in a bottle relays an urgent plea from the long-missing Captain Grant. His ship, the Britannia, has sunk. He is alive but is being held hostage. Captain Grant\'s children, Mary and Robert, along with their friend and benefactor Lord Glenervan launch a rescue expedition.', 'Book', 'Jules', 'Vernes', '2005', 'Livre de Poche', '58 Rue Jean Bleuzen, 92170 Vanves, France'),
(7, 'Dick Sand A Captain at Fifteen', 'dick_sand_a_captain_at_fifteen.jpg', '9783451165252', 'Dick Sand, A Captain at Fifteen (French: Un capitaine de quinze ans) is a Jules Verne novel published in 1878. It deals primarily with the issue of slavery, and the African slave trade by other Africans in particular. Dick Sand is a fifteen-year-old boy serving on the schooner \'Pilgrim\' as a sailor.', 'Book', 'Jules', 'Vernes', '2024', 'Livre de Poche', '58 Rue Jean Bleuzen, 92170 Vanves, France'),
(8, 'Five Weeks in a Balloon', 'five_weeks_in_balloon.jpg', '9781421820606', 'A scholar and explorer, Dr. Samuel Fergusson, accompanied by his manservant Joe and his friend professional hunter Richard Dick Kennedy, sets out to travel across the African continent — still not fully explored — with the help of a balloon filled with hydrogen.', 'Book', 'Jules', 'Vernes', '2006', '1st World Library', '203-206 Piccadilly, London, W1J 9HD'),
(9, 'Michel Strogoff', 'michael_strogoff.jpg', '9782253005865', 'Michael(Michel) Strogoff a brave courier in Czar\'s Alexander the Second\'s service, is sent as a secret agent to Siberia. He will deliver a vital message to the at risk Emperor\'s brother. And hopefully the letter will prevent a dangerous... Tartar rebellion from spreading in that Siberian province.', 'Book', 'Jules', 'Vernes', '2000', 'Livre de Poche', '58 Rue Jean Bleuzen, 92170 Vanves, France'),
(10, 'Around the Moon', 'around_the_moon.jpg', '9781434600639', 'This book is the follow-up of “De la Terre a La Lune” and tells the story of what happened on the way to the moon. Our three astronauts, two American scientists Barbican and Nicoll and a young French adventurer Michel Ardan are risking their lives in attempting an unknown experience.', 'Book', 'Jules', 'Vernes', '2007', 'BiblioBazar', '94 Straubel Alley'),
(11, 'The Lighthouse at the End of the World', 'lighthouse_at_the_end_of_the_world.jpg', '9781589630949', 'In 1859, three sailors arrive on an isolated island to man a new lighthouse at the wreck-prone tippy tip of South America. They soon discover a band of “egregious criminals,” led by “dangerous evildoer” Kongre, who have been tricking ships into running aground, killing the survivors and taking the loot.', 'Book', 'Jules', 'Vernes', '2005', 'Fredonia books', '8915 Gerber Road, Sacramento, CA 95829. Sacramento'),
(12, 'The Green Ray', 'the_green_ray.jpg', '9780809530748', 'When the Morning Post writes about the legendary Green Ray\'s elevating effects on the mind and soul, Helena Campbell vows to experience it for herself, postponing the wedding being forced upon her against her will. Together with her uncles, Sam and Sib Melville, she sets off on what becomes a near-epic quest.', 'Book', 'Jules', 'Vernes', '2021', 'Wildside Press', '7945 MacArthur Blvd., Suite 215. Cabin John, MD 20'),
(13, 'Robur the Conqueror', 'robur_the_conqueror.jpg', '9781557429667', 'At the Weldon Institute in Philadelphia, a mob of zealous balloon enthusiasts plans to conquer the sky in a state-of-the-art dirigible. When a stranger, the mysterious Robur, declares that the future belongs not to balloons but to heavier-than-air flying machines, the Institute scornfully dismisses the idea.', 'Book', 'Jules', 'Vernes', '2006', 'Wildside Press', '7945 MacArthur Blvd., Suite 215. Cabin John, MD 20'),
(14, 'Pulp Fiction', 'pulp_fiction.jpg', '9789048806829', 'Vincent Vega (John Travolta) and Jules Winnfield (Samuel L. Jackson) are hitmen with a penchant for philosophical discussions. In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, gangster Marsellus Wallace (Ving Rhames) ; his actress wife, Mia (Uma Thurman) ; struggling boxer Butch Coolidge (Bruce Willis) ; master fixer Winston Wolfe (Harvey Keitel) and a nervous pair of armed robbers, \'Pumpkin\' (Tim Roth) and \'Honey Bunny\' (Amanda Plummer).', 'DVD', 'Quentin', 'Tarantino', '1994', 'Miramax', '1901 Avenue of the Stars Suite 2000 Los Angeles, C'),
(15, 'The Godfather', 'the_godfather.jpg', '9783217001442', 'Widely regarded as one of the greatest films of all time, this mob drama, based on Mario Puzo\'s novel of the same name, focuses on the powerful Italian-American crime family of Don Vito Corleone (Marlon Brando). When the don\'s youngest son, Michael (Al Pacino), reluctantly joins the Mafia, he becomes involved in the inevitable cycle of violence and betrayal. Although Michael tries to maintain a normal relationship with his wife, Kay (Diane Keaton), he is drawn deeper into the family business.', 'DVD', 'Francis', 'Ford Coppola', '1972', 'Paramount Pictures', '5555 Melrose Ave, Los Angeles'),
(16, 'Game Of Thrones Part 1', 'game_of_thrones.jpg', 'Book', 'Although fantasy, Game of Thrones borrows heavily from real history, including elements from the Crusades, Spartans and Byzantines. Most of all, however, this saga tells the story of the realm of England and how it came to be, from the first men and the Angles to the Conquest and War of the Roses.', '9780553593', 'George ', 'R. R. Martin', '1996', 'Schuster', ''),
(18, '', 'product.png', '', '', '', '', '', '', '', NULL),
(19, 'Harry Potter Part 5', 'product.png', '9782253245666', 'Test Item Description', 'Book', 'Joanne', 'Rowling', '2003', 'Bloomsbury', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_of_media`
--
ALTER TABLE `list_of_media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `picture` (`picture`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_media`
--
ALTER TABLE `list_of_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
