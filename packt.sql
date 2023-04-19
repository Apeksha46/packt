-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2023 at 08:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profilePic` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `profilePic`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, 'admin@bookstore.com', NULL, '$2y$10$fRxy5JRG1TSXxxRHHlbTKuFOVW.RxA5Tid46EWdwdjOKAz4sk3n2G', NULL, '2023-04-18 04:41:26', '2023-04-18 04:41:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `published` date DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `description`, `isbn`, `image`, `published`, `publisher`, `created_at`, `updated_at`) VALUES
(1, 'Gryphon. \'I mean.', 'Virginia Jenkins', 'At', 'She got up very carefully, remarking, \'I really must be shutting up like telescopes: this time the Queen merely remarking as it happens; and if it likes.\' \'I\'d rather finish my tea,\' said the.', '9782550845805', '', '1994-10-30', 'Ad Harum', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(2, 'No, it\'ll never do.', 'Shaun Schneider', 'Doloribus', 'I wish you would have called him Tortoise because he was in such confusion that she did not like to show you! A little bright-eyed terrier, you know, with oh, such long ringlets, and mine doesn\'t go.', '9784145405661', '', '1981-06-08', 'Nulla Eos', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(3, 'I begin, please.', 'Eve Witting', 'Ducimus', 'Rabbit asked. \'No, I didn\'t,\' said Alice: \'she\'s so extremely--\' Just then she had not got into the garden at once; but, alas for poor Alice! when she first saw the Mock Turtle. \'Very much indeed,\'.', '9787212739508', '', '1989-02-01', 'Perspiciatis Ipsam', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(4, 'Queen of Hearts.', 'Deonte Powlowski', 'Minima', 'Alice; but she remembered that she remained the same solemn tone, \'For the Duchess. \'I make you dry enough!\' They all sat down at her for a baby: altogether Alice did not like to try the thing.', '9798283665368', '', '2004-04-05', 'Voluptates Ab', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(5, 'Hatter asked.', 'Wilford Quigley', 'Accusamus', 'Alice cautiously replied, not feeling at all for any of them. \'I\'m sure I\'m not particular as to prevent its undoing itself,) she carried it out to be an advantage,\' said Alice, looking down with.', '9792577177742', '', '2016-11-14', 'Dolore Dolorum', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(6, 'I beat him when he.', 'Raegan Block', 'Explicabo', 'And mentioned me to introduce it.\' \'I don\'t see,\' said the Queen, turning purple. \'I won\'t!\' said Alice. \'What IS a long time with the Dormouse. \'Don\'t talk nonsense,\' said Alice thoughtfully: \'but.', '9787641920720', '', '2013-02-22', 'Sapiente Quibusdam', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(7, 'Hatter replied.', 'Jaunita Larson', 'Minus', 'The Rabbit Sends in a tone of the singers in the pool rippling to the heads of the cattle in the sea. The master was an old Crab took the regular course.\' \'What was THAT like?\' said Alice. \'Exactly.', '9785733535890', '', '1987-11-01', 'Adipisci Debitis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(8, 'I was a large.', 'Shaylee Kris', 'Illum', 'While the Duchess said in a low voice, \'Your Majesty must cross-examine THIS witness.\' \'Well, if I like being that person, I\'ll come up: if not, I\'ll stay down here with me! There are no mice in the.', '9799458308578', '', '1993-06-06', 'Temporibus Ut', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(9, 'SOMEBODY ought to.', 'Coty Wolff', 'Repudiandae', 'Mock Turtle persisted. \'How COULD he turn them out again. Suddenly she came upon a neat little house, and wondering what to uglify is, you see, Alice had not gone much farther before she got to come.', '9786017848385', '', '2001-04-19', 'Sed Quis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(10, 'NOT, being made.', 'Amaya Parker', 'Qui', 'Alice was too slippery; and when she had hoped) a fan and the game was going a journey, I should think very likely it can be,\' said the Duchess, \'chop off her knowledge, as there was a general.', '9783622238952', '', '1991-03-02', 'Quisquam Vero', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(11, 'I might venture to.', 'Susie Abshire', 'Libero', 'Off--\' \'Nonsense!\' said Alice, \'how am I to get in?\' she repeated, aloud. \'I must be shutting up like a writing-desk?\' \'Come, we shall get on better.\' \'I\'d rather finish my tea,\' said the Hatter.', '9785578281556', '', '1999-02-13', 'Quas Qui', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(12, 'March Hare.', 'Rod Barrows', 'Itaque', 'Queen to-day?\' \'I should have liked teaching it tricks very much, if--if I\'d only been the right way to hear her try and repeat \"\'TIS THE VOICE OF THE SLUGGARD,\"\' said the Dodo said, \'EVERYBODY has.', '9793818568428', '', '1971-10-17', 'Consequuntur Architecto', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(13, 'This question the.', 'Lavern Ruecker', 'Ea', 'King. \'I can\'t explain it,\' said the Duchess; \'and most things twinkled after that--only the March Hare. Alice sighed wearily. \'I think you could keep it to the table for it, he was obliged to write.', '9785854811170', '', '1994-10-30', 'Tempora Reprehenderit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(14, 'Off--\' \'Nonsense!\'.', 'Lyda Murray', 'Ut', 'Mock Turtle. \'And how many hours a day is very confusing.\' \'It isn\'t,\' said the others. \'Are their heads down! I am so VERY much out of its mouth, and addressed her in a very truthful child; \'but.', '9789214568926', '', '2016-05-25', 'Rerum Iste', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(15, 'Alice as he spoke.', 'Anderson Jacobs', 'Magnam', 'Hatter. He came in sight of the e--e--evening, Beautiful, beautiful Soup! \'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not give all else for two Pennyworth only of.', '9782894724378', '', '1978-04-16', 'Sequi Ullam', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(16, 'Wonderland, though.', 'Estevan Maggio', 'Velit', 'March Hare. The Hatter was the BEST butter,\' the March Hare said--\' \'I didn\'t!\' the March Hare interrupted, yawning. \'I\'m getting tired of sitting by her sister kissed her, and said, \'It was much.', '9789133986085', '', '1983-11-30', 'Reiciendis Quis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(17, 'Mock Turtle. \'Hold.', 'Fred Kutch', 'Illo', 'WHAT?\' thought Alice to herself, \'to be going messages for a rabbit! I suppose I ought to be done, I wonder?\' As she said to the company generally, \'You are old, Father William,\' the young man said.', '9783359291381', '', '1988-11-16', 'Consequatur Qui', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(18, 'Game, or any other.', 'Madeline Kuhlman', 'Accusamus', 'Knave of Hearts, who only bowed and smiled in reply. \'That\'s right!\' shouted the Queen shouted at the Gryphon went on, half to itself, \'Oh dear! Oh dear! I wish you wouldn\'t have come here.\' Alice.', '9780427565658', '', '1997-11-28', 'Quia Ea', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(19, 'Alice, timidly.', 'Devante Stroman', 'Voluptatem', 'How neatly spread his claws, And welcome little fishes in With gently smiling jaws!\' \'I\'m sure those are not the smallest idea how to spell \'stupid,\' and that if you like,\' said the Duchess.', '9783648894460', '', '1995-07-05', 'Est Voluptates', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(20, 'Queen, and Alice.', 'Jackeline Kris', 'Quia', 'Nobody moved. \'Who cares for fish, Game, or any other dish? Who would not allow without knowing how old it was, and, as the Caterpillar took the hookah out of the Nile On every golden scale! \'How.', '9797081874668', '', '1984-03-29', 'Aut Illum', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(21, 'I don\'t put my arm.', 'Isac Wehner', 'Omnis', 'There could be no sort of way to change the subject,\' the March Hare was said to herself, \'if one only knew the name of nearly everything there. \'That\'s the reason they\'re called lessons,\' the.', '9785693048850', '', '1992-12-04', 'Maiores Nobis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(22, 'Alice laughed so.', 'Dalton Rath', 'Quibusdam', 'Gryphon. \'They can\'t have anything to put the Lizard in head downwards, and the procession moved on, three of her knowledge. \'Just think of any use, now,\' thought poor Alice, who always took a great.', '9790815429967', '', '2000-08-10', 'Labore Et', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(23, 'RED rose-tree, and.', 'Freida Schultz', 'Corporis', 'I\'m sure _I_ shan\'t be beheaded!\' said Alice, in a tone of great relief. \'Now at OURS they had been looking at them with the bread-knife.\' The March Hare and the words did not wish to offend the.', '9792908686806', '', '1973-05-21', 'Quis Est', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(24, 'Ugh, Serpent!\'.', 'Hector Osinski', 'Beatae', 'Seven. \'Yes, it IS his business!\' said Five, in a low curtain she had never heard of \"Uglification,\"\' Alice ventured to say. \'What is it?\' Alice panted as she could. \'No,\' said the Duck. \'Found IT,\'.', '9794281493781', '', '1997-09-29', 'Repellat Itaque', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(25, 'Bill\'s got the.', 'Lavinia Steuber', 'Aut', 'Hatter, and he says it\'s so useful, it\'s worth a hundred pounds! He says it kills all the arches are gone from this side of the trees behind him. \'--or next day, maybe,\' the Footman remarked, \'till.', '9796229364757', '', '2016-11-26', 'Quidem Atque', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(26, 'She waited for.', 'Gaylord Parisian', 'Officiis', 'Lory hastily. \'I thought you did,\' said the King had said that day. \'A likely story indeed!\' said the King; \'and don\'t look at them--\'I wish they\'d get the trial one way up as the Rabbit, and had.', '9795637401191', '', '1983-11-11', 'Molestias Cupiditate', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(27, 'Dodo solemnly.', 'Jevon Beatty', 'Cupiditate', 'CHAPTER IV. The Rabbit started violently, dropped the white kid gloves and a large mushroom growing near her, she began, rather timidly, saying to herself in a low, timid voice, \'If you knew Time as.', '9792823114507', '', '2003-02-03', 'Dolores Natus', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(28, 'Miss, we\'re doing.', 'Aurelia Stehr', 'Quis', 'Alice. \'Oh, don\'t bother ME,\' said the Queen, but she stopped hastily, for the White Rabbit; \'in fact, there\'s nothing written on the top of his shrill little voice, the name of nearly everything.', '9787069478155', '', '2010-08-21', 'Alias Maxime', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(29, 'Dodo replied very.', 'Monte Smith', 'Sit', 'Alice. \'Why, SHE,\' said the Lory positively refused to tell me the list of the party sat silent for a few minutes she heard a voice she had tired herself out with trying, the poor little thing sat.', '9793396743422', '', '2011-05-03', 'Illum Sit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(30, 'By the time they.', 'Mortimer Kilback', 'Quibusdam', 'Queen, who was sitting on the ground as she did not venture to say but \'It belongs to a shriek, \'and just as well she might, what a Mock Turtle recovered his voice, and, with tears again as she.', '9797176195685', '', '1988-08-28', 'Incidunt Blanditiis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(31, 'I\'ll set Dinah at.', 'Augustine Lehner', 'Vel', 'Alice heard the Rabbit came up to them to be ashamed of yourself for asking such a subject! Our family always HATED cats: nasty, low, vulgar things! Don\'t let him know she liked them best, For this.', '9785497616934', '', '2007-05-28', 'Accusamus Ut', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(32, 'Pigeon. \'I can see.', 'Jordy Kovacek', 'Repellat', 'This speech caused a remarkable sensation among the party. Some of the tale was something like it,\' said the Dormouse; \'VERY ill.\' Alice tried to fancy to cats if you cut your finger VERY deeply.', '9799142206852', '', '2012-03-19', 'Omnis Veniam', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(33, 'Alice replied.', 'Macey Ward', 'Illo', 'THE.', '9795988612017', '', '1998-03-20', 'Exercitationem Similique', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(34, 'Please, Ma\'am, is.', 'Guillermo Kuvalis', 'Qui', 'Alice soon came to the porpoise, \"Keep back, please: we don\'t want YOU with us!\"\' \'They were obliged to write this down on their backs was the fan and gloves--that is, if I was, I shouldn\'t want.', '9790225931326', '', '1971-09-17', 'Iure Dicta', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(35, 'YOUR shoes done.', 'Jimmie Hessel', 'Et', 'ARE a simpleton.\' Alice did not much like keeping so close to her head, and she crossed her hands on her face brightened up at the frontispiece if you were down here with me! There are no mice in.', '9780948766657', '', '2018-08-10', 'Qui Mollitia', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(36, 'I shall see it.', 'Reggie Sanford', 'Architecto', 'Though they were trying to put it to her ear. \'You\'re thinking about something, my dear, and that you had been anything near the door that led into the loveliest garden you ever eat a bat?\' when.', '9799233012652', '', '2000-10-05', 'Numquam Suscipit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(37, 'Lacie, and Tillie.', 'Ali Murphy', 'Sint', 'Queen, and in despair she put one arm out of breath, and said \'No, never\') \'--so you can find it.\' And she thought it had VERY long claws and a scroll of parchment in the middle of her hedgehog. The.', '9798497820539', '', '1981-08-31', 'Adipisci Dolore', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(38, 'Rome--no, THAT\'S.', 'Brielle Stracke', 'Molestias', 'No, I\'ve made up my mind about it; if I\'m Mabel, I\'ll stay down here with me! There are no mice in the other: he came trotting along in a low trembling voice, \'Let us get to the end of trials.', '9795963568148', '', '1988-10-27', 'Error Velit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(39, 'WAS a curious.', 'Isabel Trantow', 'Cum', 'Alice; \'living at the jury-box, or they would call after her: the last few minutes it puffed away without being invited,\' said the Cat said, waving its right ear and left off sneezing by this time.', '9794256695202', '', '1974-01-16', 'Aut Quasi', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(40, 'I COULD NOT.', 'Lemuel Wisoky', 'Voluptatem', 'Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice, (she had kept a piece of it in asking riddles that have no answers.\' \'If you do. I\'ll set Dinah at you!\' There was nothing on it.', '9791360582794', '', '1986-12-16', 'Qui Repudiandae', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(41, 'Hatter. He had.', 'Brooks Zemlak', 'Eligendi', 'Caterpillar. Here was another puzzling question; and as it happens; and if I might venture to ask his neighbour to tell its age, there was hardly room to grow up any more HERE.\' \'But then,\' thought.', '9791662263353', '', '2005-11-19', 'Sapiente Sapiente', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(42, 'Mouse, in a solemn.', 'Waino Dicki', 'Modi', 'His voice has a timid and tremulous sound.] \'That\'s different from what I say--that\'s the same year for such dainties would not allow without knowing how old it was, and, as they lay on the glass.', '9790708765127', '', '1998-04-20', 'Reprehenderit Repellat', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(43, 'Gryphon. \'I mean.', 'Elwyn Wintheiser', 'Consequatur', 'Queen of Hearts were seated on their backs was the Duchess\'s voice died away, even in the wood,\' continued the King. (The jury all brightened up again.) \'Please your Majesty,\' said the Dormouse fell.', '9796276663940', '', '2007-02-18', 'Aliquam Itaque', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(44, 'Alice. \'I\'m glad.', 'Ignatius McDermott', 'Ad', 'Why, I do so like that curious song about the temper of your nose-- What made you so awfully clever?\' \'I have answered three questions, and that makes the world she was now about two feet high: even.', '9789419690439', '', '1983-11-27', 'Quidem Maxime', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(45, 'Alice, so please.', 'Mylene Waelchi', 'Ea', 'However, when they arrived, with a round face, and large eyes like a wild beast, screamed \'Off with their heads!\' and the pool was getting very sleepy; \'and they all crowded round her, about four.', '9794122075114', '', '1995-02-15', 'Libero Dignissimos', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(46, 'I\'ve said as yet.\'.', 'Beverly Langosh', 'Et', 'However, when they hit her; and when Alice had begun to repeat it, but her voice sounded hoarse and strange, and the King said, with a knife, it usually bleeds; and she swam nearer to watch them.', '9780595589531', '', '1973-08-18', 'Ullam Dolore', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(48, 'The Gryphon sat up.', 'Anabelle Lindgren', 'Iusto', 'No room!\' they cried out when they met in the wind, and the Dormouse went on, turning to Alice for protection. \'You shan\'t be able! I shall remember it in a twinkling! Half-past one, time for.', '9798584539092', '', '2009-04-21', 'Dolor Sunt', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(49, 'THEIR eyes bright.', 'Deshaun Hammes', 'Debitis', 'The Mouse did not get dry again: they had any dispute with the lobsters, out to sea. So they sat down, and was delighted to find her in a hoarse growl, \'the world would go through,\' thought poor.', '9792358551266', '', '2017-04-12', 'Hic Voluptatem', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(50, 'They had not gone.', 'Winfield Hegmann', 'Quia', 'PROVES his guilt,\' said the Queen. An invitation from the sky! Ugh, Serpent!\' \'But I\'m not looking for eggs, I know I have to beat time when I was sent for.\' \'You ought to tell its age, there was.', '9781463780616', '', '2016-04-01', 'Impedit Aspernatur', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(51, 'There was a good.', 'Favian Bins', 'Velit', 'Alice crouched down among the leaves, which she concluded that it had gone. \'Well! I\'ve often seen them at dinn--\' she checked herself hastily. \'I don\'t know the meaning of half those long words.', '9798548819369', '', '1994-11-30', 'Sint Ut', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(52, 'March Hare. Visit.', 'Dion Koss', 'Consequuntur', 'I\'m not used to say.\' \'So he did, so he did,\' said the Caterpillar. \'I\'m afraid I am, sir,\' said Alice; \'you needn\'t be so easily offended!\' \'You\'ll get used up.\' \'But what happens when you come to.', '9791726037418', '', '1976-01-03', 'Enim Minus', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(53, 'I ought to have no.', 'Savanah Koepp', 'Quae', 'Queen. First came ten soldiers carrying clubs; these were ornamented all over their shoulders, that all the way I want to get out at all a pity. I said \"What for?\"\' \'She boxed the Queen\'s voice in.', '9785196925368', '', '1989-01-31', 'Voluptatem Inventore', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(54, 'The first question.', 'Cornell Cormier', 'Assumenda', 'The hedgehog was engaged in a minute, while Alice thought this a very melancholy voice. \'Repeat, \"YOU ARE OLD, FATHER WILLIAM,\' to the Gryphon. \'I mean, what makes them bitter--and--and barley-sugar.', '9798642703854', '', '1994-06-11', 'Atque Dolorem', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(55, 'Bill, I.', 'Crystal McGlynn', 'Numquam', 'Alice to herself, as she could even make out who I am! But I\'d better take him his fan and gloves, and, as the game began. Alice gave a little door was shut again, and did not get dry very soon.', '9782822244695', '', '1976-12-13', 'Voluptatem Earum', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(56, 'Allow me to.', 'Colleen Conroy', 'Nobis', 'Alice, who had been (Before she had not attended to this last remark, \'it\'s a vegetable. It doesn\'t look like it?\' he said, \'on and off, for days and days.\' \'But what did the Dormouse again, so that.', '9787451320987', '', '1976-01-27', 'At Omnis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(57, 'Alice (she was.', 'Susie Lakin', 'Error', 'VERY nearly at the door as you might catch a bat, and that\'s very like having a game of play with a pair of boots every Christmas.\' And she tried to fancy to cats if you like,\' said the Mock Turtle.', '9798345759387', '', '1998-05-05', 'Sunt Est', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(58, 'Alice, \'a great.', 'Darrick Conn', 'Ut', 'May it won\'t be raving mad--at least not so mad as it is.\' \'I quite agree with you,\' said the Caterpillar. \'Well, I\'ve tried to speak, and no more of the words all coming different, and then keep.', '9780204865902', '', '1993-08-05', 'Distinctio Error', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(59, 'I!\' he replied.', 'Grover Fadel', 'Quod', 'M, such as mouse-traps, and the procession moved on, three of the wood--(she considered him to be no doubt that it was her turn or not. So she began nursing her child again, singing a sort of idea.', '9782531123724', '', '2004-12-05', 'Distinctio Labore', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(60, 'Dormouse,\' thought.', 'Dion Quigley', 'Totam', 'That WILL be a grin, and she ran across the field after it, and very nearly carried it off. * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice in a hurry. \'No.', '9790554691205', '', '1992-04-20', 'Non Eos', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(61, 'Rabbit\'s little.', 'Jacinthe Abshire', 'Asperiores', 'Queen. \'It proves nothing of the court,\" and I had our Dinah here, I know is, it would make with the Queen was in such a noise inside, no one to listen to me! I\'LL soon make you grow shorter.\' \'One.', '9782350203089', '', '1973-08-14', 'Natus Nemo', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(62, 'King said to the.', 'Chaya Gleason', 'Nihil', 'Rabbit came near her, about four inches deep and reaching half down the chimney, has he?\' said Alice in a very grave voice, \'until all the jurymen on to her chin upon Alice\'s shoulder, and it was.', '9793029949405', '', '2012-12-17', 'Tempore Debitis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(63, 'I\'d only been the.', 'Tierra Cremin', 'Ipsum', 'Presently she began looking at the Queen, \'and take this young lady to see what this bottle does. I do wonder what they WILL do next! As for pulling me out of the trees had a door leading right into.', '9797958639307', '', '1980-06-21', 'Quod Iste', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(64, 'O Mouse!\' (Alice.', 'Nikita Feeney', 'Recusandae', 'Owl had the best of educations--in fact, we went to the cur, \"Such a trial, dear Sir, With no jury or judge, would be like, \'--for they haven\'t got much evidence YET,\' she said to the voice of the.', '9790727226807', '', '1978-08-01', 'Cumque Velit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(65, 'Rabbit began.', 'Ruthie Funk', 'Qui', 'But she waited patiently. \'Once,\' said the Caterpillar called after it; and the cool fountains. CHAPTER VIII. The Queen\'s Croquet-Ground A large rose-tree stood near the door began sneezing all at.', '9797368165335', '', '1988-02-07', 'Dolores Facere', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(66, 'Down, down, down.', 'Eldred Waelchi', 'Tempore', 'March Hare. \'He denies it,\' said the youth, \'and your jaws are too weak For anything tougher than suet; Yet you balanced an eel on the top of her age knew the right word) \'--but I shall ever see you.', '9795127461629', '', '2017-01-02', 'Mollitia Esse', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(67, 'YOU manage?\' Alice.', 'Allison Hauck', 'Nihil', 'YOUR shoes done with?\' said the March Hare and his friends shared their never-ending meal, and the Mock Turtle angrily: \'really you are painting those roses?\' Five and Seven said nothing, but looked.', '9798868277313', '', '1985-04-29', 'In Dolore', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(68, 'Duchess, \'and.', 'Ruth Johns', 'Sequi', 'Alice\'s head. \'Is that all?\' said the March Hare said in a hurried nervous manner, smiling at everything that Alice said; but was dreadfully puzzled by the pope, was soon left alone. \'I wish I.', '9784598121088', '', '1973-01-04', 'Maxime Assumenda', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(69, 'Hatter instead!\'.', 'Kyla Mayert', 'Est', 'Knave was standing before them, in chains, with a shiver. \'I beg pardon, your Majesty,\' the Hatter and the roof off.\' After a time there could be no use in talking to herself, \'I don\'t see how he.', '9798574166727', '', '1987-02-04', 'Nihil Dolorem', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(70, 'So she went on for.', 'Freida Roberts', 'Reprehenderit', 'King in a low, trembling voice. \'There\'s more evidence to come down the chimney!\' \'Oh! So Bill\'s got the other--Bill! fetch it here, lad!--Here, put \'em up at this moment the King, and he called the.', '9784041247648', '', '2011-06-11', 'Et Occaecati', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(71, 'I can\'t be Mabel.', 'Lou Mills', 'Sint', 'Pigeon the opportunity of adding, \'You\'re looking for it, you know--\' \'What did they draw the treacle from?\' \'You can draw water out of the evening, beautiful Soup! \'Beautiful Soup! Who cares for.', '9784261957549', '', '1985-05-12', 'Et Et', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(72, 'Lory, who at last.', 'Leora Nader', 'Et', 'Dodo managed it.) First it marked out a race-course, in a deep voice, \'are done with a deep voice, \'What are they doing?\' Alice whispered to the jury, who instantly made a dreadfully ugly child: but.', '9785156158065', '', '1971-10-19', 'Quas Quibusdam', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(73, 'Tortoise--\' \'Why.', 'Dion Stiedemann', 'Minima', 'Duchess, \'chop off her head!\' about once in a voice outside, and stopped to listen. The Fish-Footman began by taking the little door into that lovely garden. First, however, she waited patiently.', '9786235569789', '', '1998-08-02', 'Aut Odit', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(74, 'Cat said, waving.', 'Augustus Gutmann', 'Facere', 'I BEG your pardon!\' she exclaimed in a moment: she looked down into its eyes were looking up into the garden. Then she went on, \'What HAVE you been doing here?\' \'May it please your Majesty!\' the.', '9785025495444', '', '2010-10-26', 'Deserunt Sed', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(75, 'Alice started to.', 'Timmothy Cruickshank', 'Est', 'Duchess. \'Everything\'s got a moral, if only you can find out the answer to it?\' said the Mock Turtle. \'Seals, turtles, salmon, and so on; then, when you\'ve cleared all the rats and--oh dear!\' cried.', '9782254691845', '', '1984-11-25', 'Laudantium Laudantium', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(76, 'Alice very meekly.', 'Gonzalo Little', 'Velit', 'Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little before she made her next remark. \'Then the Dormouse shall!\' they both sat silent and looked at the cook was leaning over the.', '9781522313779', '', '2020-04-26', 'Unde Sequi', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(77, 'Mock Turtle.', 'Rex Stoltenberg', 'Nihil', 'She got up this morning? I almost think I can do without lobsters, you know. Come on!\' So they had been looking over his shoulder as he found it very hard indeed to make out that she wanted to send.', '9794174600562', '', '2008-05-08', 'In Asperiores', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(78, 'Alice was.', 'Alessandro Purdy', 'Qui', 'So she tucked it away under her arm, that it was very glad she had never been in a great hurry; \'this paper has just been picked up.\' \'What\'s in it?\' said the Hatter; \'so I should like to hear his.', '9798950865466', '', '2008-12-11', 'Ab Accusamus', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(79, 'Alice. \'Nothing,\'.', 'Neal Kessler', 'Error', 'Cat\'s head with great curiosity. \'Soles and eels, of course,\' the Dodo suddenly called out \'The race is over!\' and they sat down a very truthful child; \'but little girls in my kitchen AT ALL. Soup.', '9785317127947', '', '1986-09-13', 'Laborum Voluptas', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(80, 'Majesty must.', 'Serena Cummings', 'Cumque', 'Rabbit, and had no idea what a wonderful dream it had grown up,\' she said this, she noticed a curious dream!\' said Alice, rather doubtfully, as she spoke. Alice did not like to have it explained,\'.', '9794991026040', '', '1989-01-09', 'Illum Officiis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(81, 'Alice. \'Come on.', 'Shawna Robel', 'Ab', 'It was as much use in waiting by the way, was the Cat again, sitting on a branch of a candle is blown out, for she had known them all her riper years, the simple and loving heart of her hedgehog.', '9791504138856', '', '2009-08-21', 'Aspernatur Dolorem', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(82, 'Alice heard the.', 'Brent Bruen', 'Eaque', 'I\'m sure I can\'t quite follow it as she could, for the pool was getting so thin--and the twinkling of the e--e--evening, Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Gryphon. \'How the.', '9783782240956', '', '1978-11-08', 'Est Doloribus', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(83, 'CHORUS. \'Wow! wow!.', 'Mathias Waelchi', 'Corrupti', 'Duchess, the Duchess! Oh! won\'t she be savage if I\'ve kept her waiting!\' Alice felt so desperate that she ran off as hard as he spoke. \'A cat may look at me like that!\' But she went out, but it just.', '9791333990588', '', '1985-09-17', 'Nobis Omnis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(84, 'Hatter replied.', 'Ibrahim Satterfield', 'Ipsa', 'Caterpillar, just as I tell you!\' But she did not come the same thing as a last resource, she put it. She stretched herself up on tiptoe, and peeped over the wig, (look at the Caterpillar\'s making.', '9782786523706', '', '1976-06-03', 'Molestiae Distinctio', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(85, 'After a while.', 'Maureen Prosacco', 'Reprehenderit', 'I will just explain to you to set them free, Exactly as we were. My notion was that it is!\' \'Why should it?\' muttered the Hatter. \'He won\'t stand beating. Now, if you hold it too long; and that if.', '9788802676951', '', '2021-09-06', 'Labore Enim', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(86, 'However, when they.', 'Howell Farrell', 'Magni', 'She pitied him deeply. \'What is it?\' \'Why,\' said the Gryphon. \'Turn a somersault in the trial one way up as the door as you say things are \"much of a muchness\"--did you ever see such a capital one.', '9782578685834', '', '1972-06-05', 'Laboriosam Magni', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(87, 'March Hare.', 'Kira Casper', 'Ut', 'Duchess; \'and most things twinkled after that--only the March Hare interrupted, yawning. \'I\'m getting tired of this. I vote the young lady tells us a story.\' \'I\'m afraid I can\'t get out again. The.', '9792531411462', '', '2016-01-20', 'Rerum Et', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(88, 'Alice, (she had.', 'Deanna Wilkinson', 'Repellat', 'They all sat down and make one quite giddy.\' \'All right,\' said the others. \'We must burn the house till she fancied she heard her sentence three of the door and found quite a commotion in the air.', '9794510835627', '', '1984-05-03', 'Et Quia', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(89, 'He looked.', 'Reilly Lehner', 'Et', 'Alice, every now and then; such as, \'Sure, I don\'t want YOU with us!\"\' \'They were obliged to have changed since her swim in the lock, and to stand on your shoes and stockings for you now, dears? I\'m.', '9788359150393', '', '1979-11-14', 'Dolores Saepe', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(90, 'RED rose-tree, and.', 'Justice Bartell', 'Beatae', 'She waited for a minute, nurse! But I\'ve got to grow to my boy, I beat him when he sneezes: He only does it matter to me whether you\'re nervous or not.\' \'I\'m a poor man, your Majesty,\' said the.', '9793919235564', '', '1999-09-18', 'Et Tenetur', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(91, 'I to get into the.', 'Ray Treutel', 'Quia', 'Five! Don\'t go splashing paint over me like that!\' said Alice very politely; but she saw in my kitchen AT ALL. Soup does very well as the game was going off into a line along the passage into the.', '9795795862520', '', '1976-09-13', 'Officia Omnis', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(92, 'I\'ll look first,\'.', 'Malvina Gusikowski', 'Facere', 'I fancied that kind of serpent, that\'s all I can do without lobsters, you know. But do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, Miss, this here ought to go down the bottle.', '9790619050077', '', '1999-04-25', 'Dignissimos Nesciunt', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(93, 'CAN all that.', 'Roosevelt Haley', 'Alias', 'Alice noticed with some severity; \'it\'s very interesting. I never heard it before,\' said Alice,) and round the table, but there was room for YOU, and no room at all like the Queen?\' said the Duck.', '9780757986321', '', '1971-02-18', 'Quasi Eius', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(94, 'I am now? That\'ll.', 'Edna West', 'Unde', 'Then she went on, \'--likely to win, that it\'s hardly worth while finishing the game.\' The Queen turned angrily away from him, and very soon found herself lying on the bank, with her arms folded.', '9799761984445', '', '2012-09-09', 'Voluptatem Error', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(95, 'Alice a good deal.', 'Keara McGlynn', 'Enim', 'King put on one knee as he spoke, and added \'It isn\'t directed at all,\' said the Duchess, it had a large kitchen, which was full of the pack, she could not be denied, so she felt sure it would be.', '9796747273579', '', '1983-04-22', 'Sint Molestiae', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(96, 'Alice: \'three.', 'Carolyn McKenzie', 'Non', 'The Fish-Footman began by taking the little golden key, and when she noticed that one of the baby?\' said the King, and the party went back to the table, half hoping that the mouse doesn\'t get out.\".', '9788763381895', '', '1981-08-02', 'Reprehenderit Ea', '2023-04-18 04:41:26', '2023-04-18 04:41:26'),
(103, 'Apeksha', 'Apeksha', 'app', 'fsdfsfsfsf', '123541', 'books/xntPRQrI6pVom9qe9YB3O63gRyZ1Q25cWfETlpEi.svg', '2023-04-17', 'Apeksha', '2023-04-18 08:02:30', '2023-04-18 08:02:30'),
(105, 'rtyrt', 'Apeksha', 'y', 'rtyryry', '54645645', 'books/6xLY2YLP3cotDnIZeaZQBM9LtBaFR30it9MTEePN.svg', '2023-04-04', 'rtyry', '2023-04-19 00:40:39', '2023-04-19 00:40:39'),
(106, 'rett', 'fhf', '657567', 'rtertjgjgj', '5464', 'books/UJJsfXEY55UVA6NolYYeutwWjOsDeBzxBrTpE8bG.png', '2023-04-03', '545', '2023-04-19 00:41:22', '2023-04-19 00:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_18_094657_create_admins_table', 1),
(6, '2023_04_18_094812_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
