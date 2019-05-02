-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 11:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addUser` (IN `first` INT, IN `second` INT, IN `user` INT, IN `pass` INT, IN `mail` INT, IN `ro` INT, IN `country1` INT)  NO SQL
begin
insert into user(first_name, surname, username, password, email, role, country_id ) values (( first), (second), (user), ( pass), (mail), (ro), (select id from country where country1=country));
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_comment` (IN `email` VARCHAR(50), IN `postid` INT, IN `content` VARCHAR(250))  NO SQL
BEGIN
insert into comment (user_id, post_id, content)
values((select id from user where email=user.Email),(postid),(content));
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_post` (IN `userID` INT, IN `post_title` VARCHAR(50) CHARSET latin1, IN `body` VARCHAR(200) CHARSET latin1, IN `category1` VARCHAR(50) CHARSET latin1, IN `pic_name` VARCHAR(50) CHARSET latin1)  NO SQL
BEGIN
insert into image (image_name)
values(pic_name);

begin
insert into post (user_id, title, body, category_id, image_id)
values((userID),(post_title),(body), (select id from category where category1=category.categories),(SELECT id from image where pic_name=image_name));


end;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_post` (IN `id` VARCHAR(50) CHARSET latin1)  NO SQL
BEGIN
DELETE FROM post
WHERE id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserbyName` (IN `userFirst_name` VARCHAR(50) CHARSET latin1)  BEGIN
SELECT * 
FROM user
WHERE userFirst_name = first_name;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `read_all_posts` ()  NO SQL
begin
SELECT title from post;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `read_post` (IN `postID` INT)  NO SQL
BEGIN
select title, body, image_name 
from post 
inner join image on post.image_id=image.id
where postID=post.id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `totalLikes` (IN `postID` INT)  NO SQL
begin 
update liketotal
set totalcount = (SELECT count(*) from post_like where postID=post_id)
where postID=Post_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdatePassword` (IN `userEmail` VARCHAR(50) CHARSET latin1, IN `oldPassword` VARCHAR(10) CHARSET latin1, IN `newPassword` VARCHAR(10) CHARSET latin1)  BEGIN
UPDATE user SET PASSWORD = newPassword
WHERE userEmail = email and oldPassword = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_comment` (IN `postID` INT)  NO SQL
BEGIN
SELECT content FROM COMMENT WHERE post_id=postID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categories` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`) VALUES
(1, 'Destination'),
(2, 'Eco-travel'),
(3, 'Family-travel'),
(4, 'INSPIRATION'),
(5, 'Practical-tips');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `content`, `date`) VALUES
(8, 8, 94, 'i love this article', '2019-04-28 14:33:59'),
(9, 8, 109, 'hello', '2019-04-28 16:32:44'),
(11, 64, 108, 'I love this article', '2019-04-30 12:02:37'),
(17, 63, 115, 'I love this article!', '2019-04-30 18:15:43'),
(18, 64, 115, 'Thanks for sharing!', '2019-04-30 18:16:29'),
(19, 59, 115, 'Will be going there soon..', '2019-04-30 18:35:09'),
(20, 66, 115, 'I love this', '2019-04-30 20:26:34'),
(21, 67, 63, 'I would never visit this place!', '2019-05-02 00:08:11'),
(22, 67, 63, 'I would never visit this place!', '2019-05-02 00:08:44'),
(23, 67, 8, 'This looks Amazing!', '2019-05-02 00:09:57'),
(24, 63, 8, 'This looks Amazing!', '2019-05-02 00:10:49'),
(25, 63, 8, 'This looks Amazing!', '2019-05-02 00:34:36'),
(26, 63, 63, 'this is victoria', '2019-05-02 00:36:30'),
(28, 63, 8, 'I would never visit this place!', '2019-05-02 00:40:42'),
(29, 63, 8, 'This looks Amazing!', '2019-05-02 00:46:24'),
(30, 63, 8, 'I would never visit this place!', '2019-05-02 00:54:20'),
(31, 68, 63, 'love too', '2019-05-02 00:58:14'),
(39, 65, 115, 'I would never visit this place!', '2019-05-02 06:54:16'),
(42, 65, 113, 'Lovely', '2019-05-02 07:07:04'),
(43, 65, 103, 'Save the world!', '2019-05-02 07:36:06'),
(44, 72, 101, 'Want to go there for my honeymoon!', '2019-05-02 09:58:58'),
(45, 63, 101, 'I want to go there for my honeymoon!', '2019-05-02 10:00:19'),
(46, 59, 101, 'I went to the Maldives! I recommend ', '2019-05-02 10:00:43'),
(47, 64, 101, 'Greece is perfect!', '2019-05-02 10:01:05'),
(48, 67, 101, 'This is a waste of money!', '2019-05-02 10:01:33'),
(49, 73, 106, 'Great Tips! ', '2019-05-02 10:17:04'),
(50, 67, 106, 'Don\'t like kids to use the Ipad..', '2019-05-02 10:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'USA'),
(2, 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `liketotal`
--

CREATE TABLE `liketotal` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `totalCount` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liketotal`
--

INSERT INTO `liketotal` (`id`, `post_id`, `totalCount`, `categoryID`) VALUES
(3, 92, 7, NULL),
(5, 94, 6, 1),
(6, 95, 1, 3),
(8, 97, 25, 3),
(9, 98, 21, 3),
(10, 99, 6, 4),
(11, 100, 9, 4),
(12, 101, 10, 4),
(14, 103, 5, 2),
(15, 105, 12, 5),
(16, 106, 5, 5),
(18, 108, 13, 1),
(19, 109, 12, 1),
(20, 112, 1, 2),
(21, 113, 2, 2),
(22, 114, 0, 5),
(23, 115, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `body` text COLLATE latin1_general_ci NOT NULL,
  `published` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `body`, `published`, `created_at`, `updated_at`, `categoryID`, `image`) VALUES
(94, 64, '48 hours in . . . Miami', '<p style=\"text-align: left;\"><strong>Do</strong><br />With free admission, an alluring location in the stylish Design District and cutting-edge contemporary art, the Institute of Contemporary Art, Miami (61 NE 41 St; 00 1 305 901 5272) is a must-visit for anyone who wants a taste of the latest in Miami culture.</p>\r\n<p><strong>Eat</strong><br />Palmar (180 NW 29 St.; 00 1 305 573 5682) is an intimate, haute Chinese restaurant with a casual yet hip vibe by the team behind Alter, one of Miami&rsquo;s most revered restaurants. The menu is ever-changing, but don\'t miss the soft-shell crab fried rice or the whole roasted duck.</p>\r\n<p><strong>Stay</strong><br />Four Seasons Surfside at the Surf Club (9011 Collins Ave.; 00 1 305 381 3333) is a feat of sublime architectural and design harmony from Richard Meier and Joseph Dirand. Soak it in over a flute of Ruinart at Le Sirenuse&rsquo;s champagne bar just off the lobby.</p>\r\n<p><strong>Day one</strong><br />Get your morning started by taking in the sights and sounds of South Beach. The heart of Ocean Drive spans from 5th to 15th streets and runs parallel to Lummus Park and the beach.</p>\r\n<p>Get lunch at La Sandwicherie (229 14th St.; 00 1 305 532 8934), a charming lunch counter specialising in enormous sandwiches on baguettes or croissants.</p>\r\n<p>If you\'re looking for an active way to enjoy Miami\'s gorgeous weather, head to South Beach Kayak and give stand-up paddle boarding a try.</p>\r\n<p><strong>Day two</strong><br />Start your morning in Little Havana at the legendary Versailles Cuban restaurant (3555 SW 8th St.; 00 1 305 444 0240) where you can either grab a table inside for a proper breakfast or order from the ventanita (hole in the wall).</p>\r\n<p>You can also book a Little Havana Tour (00 1 305 814 8884) with cultural anthropologist Corinna J. Moebius to explore Domino Park, Cuban bakeries, rum shops, cigar shops, art galleries and fruit markets in just a few short blocks along the famed Calle Ocho.</p>\r\n<p>Get off your feet and prepare for a beautiful dinner at one of Miami&rsquo;s hippest restaurants. KYU (251 NW 25th St.; 00 1 786 577 0150) is dedicated to pan-Asian, wood-fired cuisine with both small and large dishes perfect for sharing.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Book your flight now:&nbsp;<a href=\"https://www.google.com/flights?hl=en#flt=/m/04jpl.MIA.2019-05-16*MIA./m/04jpl.2019-05-20;c:GBP;e:1;sd:1;t:f\">https://www.google.com/flights?hl=en#flt=/m/04jpl.MIA.2019-05-16*MIA./m/04jpl.2019-05-20;c:GBP;e:1;sd:1;t:f</a></p>', NULL, '2019-04-24 18:50:47', NULL, 1, NULL),
(95, 8, 'An Ibiza yoga retreat with toddlers', '<p>&ldquo;Me and mum are goin&rsquo; to Beefa,&rdquo; said my two-year-old daughter, turning confidently to the two raucous men sitting behind us on our Easy Jet flight. One was busy slurring through his fourth vodka and coke order. The other, who had just taken his top off, whooped and said: &ldquo;Wicked! Girls on tour!&rdquo;</p>\r\n<p>Holy Mama yoga retreats are get-aways designed specifically for mothers and their young children. The mums do yoga in the morning, while the children go off to play with Montessori-qualified carers. At lunch, the kids are returned to their Zen-like mothers, and everyone meets up again for a three-course supper (all vegetarian and organic, of course). By the end of the week, everyone flies home with rejuvenated spirits, glowing skin and toned bodies. But can it really be that easy?</p>\r\n<p>Frida and I were sharing a room in Can Juan &ndash; a traditional and simple, white washed finca with four bedrooms. We woke the next morning to a shared kitchen stocked with herbals teas, organic breakfast foods and milks of many kinds (cow, almond, rice, spelt...) Breakfast dispatched in a significantly healthier manner than usual, we walked past red fields, green palms and shocking bougainvillea to meet the other guests at the &ldquo;welcoming circle&rdquo;.</p>\r\n<p>Holy Mama is the perfect holiday for those seeking reassurance that you can still pursue interests other than pureeing post-baby. Particularly so if you are still in the early stages of parenthood, and nervous about travelling alone. This was an adventure with gentle support. The grounds and the pools are safely fenced off, there are high chairs and stair gates supplied. Plus, with four women sharing each house, there is always someone to hold your baby when you need a wee.</p>\r\n<p>Two hours of yoga and a little Hindu philosophy later, and we were ready for lunch. Food is almost as important a part of the Holy Mama pampering as yoga. Essentially, it&rsquo;s vegetables, paired with more vegetables and some gluten free stuff. Yet each day, at lunch and supper, chef Maili Dinim cast some kind of culinary sorcery that rendered them inexplicably, mouth-wateringly delicious.</p>\r\n<p>Then, just as we were approaching a state of Zen, the children came trotting back and everyone went their separate ways &ndash; to splash in one of the pools (each house has one) or to one of the nearby beaches like sandy Aguas Blancas or baby-friendly bay Benirras (about a 20 Euro taxi journey away).</p>\r\n<p><em>Seven day HolyMoma yoga retreats in Ibiza start at 1499 euros (&pound;1300) for one adult and child. That includes daily yoga classes, all meals and snacks, childcare every morning, a pedicure or facial and a life coaching or nutrition session. It excludes flights and transfers. Second children can be accommodated for 250 euros (holy-mama.com).</em></p>', NULL, '2019-04-24 19:27:19', NULL, 3, NULL),
(97, 8, 'Sun, sea and Legoland', '<p>After the upheaval of a significant house move, we were in search of sun, some family downtime, and the right balance of activities. Dubai certainly delivers sunshine: in October half term, when we travelled, it was perfect for poolside relaxation with no goosebumps at all &ndash; only very light packing was required. There&rsquo;s also a satisfying mix of city sights, activities for children, relaxing beaches &ndash; and, of course, some excellent hotel options.</p>\r\n<p>Our first few nights were spent at the Ritz-Carlton. It&rsquo;s on the beach yet in the heart of the city, with a seemingly never-ending mall containing a giant aquarium. There&rsquo;s easy access to the Burj Khalifa tower, too, with its rocket of a lift to the 125th floor.</p>\r\n<p>The newly updated &ldquo;family suites&rdquo; on the first floor of the Ritz-Carlton offer the perfect interconnecting combination: two rooms linked via a private lobby. The rooms are child-friendly and spacious, with giant beds and baths, luxurious toiletries &ndash; and very fluffy towels. On arrival, a big bowl of chocolate strawberries and cookies was waiting for the boys &ndash; aged six, eight and 10 &ndash; which was a nice touch.</p>\r\n<p>Child-friendly activities in the hotel were limited but the boys chased each other around the sandy football pitch until they were a sweaty mess, created their own rules on the giant chess board, and made the most of the table tennis tables in the gardens. The Lego selection in the kids&rsquo; club kept them happy for a couple of hours one morning too, allowing my husband and I to sneak off for the couples massage at the in-house spa.</p>\r\n<p>While we&rsquo;re on the subject of Lego, the iconic Danish bricks are well worth leaving the hotel for. Dubai does theme and water parks very well, with the most significant recent addition being Legoland Dubai, set in its own out-of-town village. It offers everything you have come to know and love about Legoland in Windsor, but without the rain and endless queues. As you might expect, there are plenty of opportunities to part with extra cash once you&rsquo;re inside: fast-food options, the chance to get your Lego driving licence &ndash; and you haven&rsquo;t lived until you&rsquo;ve seen the Lego Taj Mahal.</p>\r\n<p><strong>The essentials</strong></p>\r\n<p>Best at Travel (020 3553 5076; bestattravel.co.uk) offers seven nights (three nights at Anantara The Palm and four nights at the Ritz-Carlton Dubai) from &pound;3,449 (&pound;862pp) based on a family of four sharing a Premier Lagoon View Room and a Deluxe Double Room, respectively, on a half board basis, including return flights from Heathrow with Emirates and private airport transfers.</p>', NULL, '2019-04-24 19:55:58', NULL, 3, NULL),
(98, 8, 'Family holiday heaven', '<p>It&rsquo;s remote, wild and, off season, pretty much empty. But if you are prepared to make the journey here, the beauty of this corner of west Wales will captivate you. It certainly shook my family out of its comfort zone in the most delightful of ways. Never have we spent so much time together outside (it was not warm over February half term; even now, before Easter, the temperature tops out at about 10C).</p>\r\n<p>We skimmed stones, we climbed, we explored caves, we foraged for seaweed, we built a dam on the beach, we canoed, we walked, we drank hot chocolate in a forest. Our 11-year-old son and his friend happily forsook the superfast wifi in our accommodation for more exciting adventures outdoors.</p>\r\n<p>Ceredigion? This coastal county looks west over the Irish Sea. Its 50 miles of coastline are peppered with sandy beaches backed by wild countryside and ancient hill forts. It is one of only two places in the United Kingdom with a permanent presence of bottlenose dolphins. (Alas we &ldquo;only&rdquo; saw seals.) Red kites? Tick. For Londoners like us, it was a wilderness of great beauty.</p>\r\n<p>Our home for four days was Ty Cwch Beach House, a bolt-hole right on a pebbly cove made entirely from shipping containers. With three sleeping cabins and two bathrooms upstairs, plus a kitchen and living room downstairs, it proved to be one of the most eccentric places we have ever stayed in. Tucked away in the mouth of a quiet valley in the hamlet of Cwmtydu, it sits right on the Ceredigion coast path and offers not only access to hiking along the cliffs but a huge range of outdoor activities.</p>\r\n<p>Enter Rhydian Wilson, our ex-Army adventure instructor, who took over our schedule for the next few days. I was not convinced by the idea of being babysat by a guide. But we dutifully ceded control to our host and were really glad we did. On our first day, Rhydian took us on a magical walk along the coastal path, on a route we would never have found ourselves. He made the kids hot chocolate over a fire in the woods, after instructing them to collect twigs and branches for kindling and showing them how to make a fire for his Kelly Kettle (quite an event for a pair of townie kids).</p>\r\n<p>On our second day, Rhydian took us canoeing on the nearby Teifi River. Never one for voluntarily stepping off dry land, I nevertheless did as I was told and totally loved our Lord of the Rings-style, four hour journey with Chris and Rhod, our guides. We rode rapids, picnicked on the river bank, tried not to get competitive and wondered at the quiet and the beauty of it all.</p>\r\n<p><strong>How to do it</strong></p>\r\n<p>The three cabins at Ty Cwch Beach House (each sleeping four) are available to book individually, with prices from &pound;100 per cabin per night. Alternatively the property can be booked exclusively for up to 12 from &pound;300 per night, on self-catering basis. For more information or to book contact Quality Unearthed (<a href=\"qualityunearthed.co.uk\">qualityunearthed.co.uk</a> 01348 830922)</p>\r\n<p>Activity packages with local specialist ICY Activities (<a href=\"i-c-y.co.uk\">i-c-y.co.uk</a> 07813 702982) can be arranged to suit and cost from &pound;180 per person for three days of guided activities.</p>\r\n<p>Jade Mellor can be found at <a href=\"wildpickings.co.uk\">wildpickings.co.uk</a></p>\r\n<p>Canoeing on the Teifi River via <a href=\"cardiganbayactive.co.uk\">cardiganbayactive.co.uk</a> or <a title=\"adventurebeyond.co.uk\" href=\"adventurebeyond.co.uk\">adventurebeyond.co.uk</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', NULL, '2019-04-24 20:06:25', NULL, 3, NULL),
(99, 8, 'Sardinia&#39;s grand canyon', '<p>There&rsquo;s plenty of tourist information in Sardinia that tells you the Gola su Gorropu is the deepest gorge in Europe. It&rsquo;s not (see below). But that doesn&rsquo;t really matter when you&rsquo;re standing at the bottom of an almighty vertical wall of rock and there&rsquo;s a climber dangling from a precarious handhold high above your head.</p>\r\n<p>Did I say vertical? At this point, the wall &ndash; all 1,300ft of it &ndash; leans oppressively inwards. Just a few yards away, the opposite cliff soars skywards and in between is a traffic jam of car-sized boulders, as white and smooth as pebbles.</p>\r\n<p>Folklore says that you can see stars during the daytime. Unlikely, but not as fanciful as the legend that tells of evil creatures creeping out of the gorge at night to steal away men and animals.</p>\r\n<p>I love these tales; they sit nicely with my own vivid impressions of Sardinia&rsquo;s natural poster boy. Viewed from both the other side of the valley and down in the gorge&rsquo;s dungeons, Gorropu looks like it was cut with a broken hacksaw blade. It splits apart the formidable Supramonte limestone massif that dominates the east of this great oblong of an island.</p>\r\n<p>Actually, it was the Flumineddu river that did the damage. Fortunately for hikers such as myself, the river runs underground through the ravine unless there has been heavy rainfall, after which a mass of water rages through the slot before it soaks away.</p>\r\n<p>That&rsquo;s what the lady at the gorge&rsquo;s mouth explained to me when she took my &euro;5 (&pound;4.30) entrance fee and gave me a detailed briefing on what lay ahead. But the story starts before here, because getting to Gorropu is very much part of the adventure.</p>\r\n<p>A Jeep service from a different access point cuts the trek down to 40 minutes, but I&rsquo;d recommend the whole walk. On the right is the gigantic grey wall of the Supramonte &ndash; up there somewhere, in a concealed cave, is one of the most intriguing of Sardinia&rsquo;s nuraghic settlements, the 2,500-year-old Tiscali. On the left is the valley, smothered with dense Mediterranean macchia &ndash; a jumble of mastic trees, oleander and myrtle.</p>\r\n<p>For all its spectacle, Gorropu is a baby in terms of length &ndash; barely three miles &ndash; and unless you have a guide and rope skills, only about a third can be penetrated. I scrambled as far as possible, mindful of spraining an ankle with a four-mile walk back to come, looking up to search for the wild goats and golden eagles that call this wilderness their home and feeling the silence close in on me.</p>\r\n<p><strong>How to do it</strong><br />EasyJet flies to Olbia from London Gatwick. Stay at Su Gologone in Sardinia&rsquo;s pristine Barbagia mountains, close to both the gorge and the beaches of Cala Gonone. It&rsquo;s a colour-drenched oasis of authenticity, art and beauty, a world away from the bling-obsessed Costa Smeralda.</p>', NULL, '2019-04-29 20:26:58', NULL, 4, NULL),
(100, 64, 'Three desert holidays you must try', '<p><strong>The Gobi, Mongolia</strong> <br />For three days, something had been niggling me. A back-of-brain nagging that refused to budge.</p>\r\n<p>Travelling through the thousand-mile-wide Gobi Desert, I surveyed the vista for a sign, when it dawned on me. In the UK, my eyes were accustomed to neat plots of land divided by fences, stone walls and telephone poles. Out here, the landscape galloped free. Unhemmed and boundless, there was nothing to stop a car or horse in any direction and the vastness stretches the mind in new ways.</p>\r\n<p>I was staying at Erdene Camp &ndash; a cluster of a dozen gers (traditional circular Mongolian tents), swaddled in wool and white cotton, and framed against a ruler-straight horizon. To the west lay the feared Taklamakan Desert that Silk Road travellers and their Bactrian camels strived to avoid.</p>\r\n<p>The silence shattered as my boot crunched across the gravel away from camp until the domed gers were mere dimples. The mellow evening cast tones of peach and pale lilac as if a palette of watercolours had been spilt across the sky, fading until the navy night was sprinkled with lustrous stars. The rapidly cooling air made smoke of my warm breath and, sandwiched between rocks ancient and celestial, I felt my smallness.</p>\r\n<p>An eight-day Highlights of Mongolia tour from Regent Holidays (0117 3215 093; regent-holidays.co.uk) starts from &pound;1,470 per person, including full-board accommodation, a stay at Erdene Camp, local transport and entrance fees. International flights not included.</p>\r\n<p><strong>The Thar, Rajasthan</strong> <br />I woke before sunrise to an unfamiliar sensation: cold. For the first time in weeks, I shivered, and clutched my thin cotton quilt tighter.</p>\r\n<p>It wasn&rsquo;t the chill that roused me, though. I was being tickled. An almost imperceptible pit-a-pat betrayed the furtive scampering of Indian desert jirds &ndash; gerbils &ndash; scaling the ridges of my limbs as they foraged for chapati crumbs.</p>\r\n<p>The Thar Desert, stretching west across Rajasthan from the Arabian Nights-calibre fortress of Jaisalmer to the Pakistan border, is a contradictory landscape. It&rsquo;s searing hot, until it&rsquo;s cold. Soft sand dunes and jagged rocks, smooth plains and thorny scrub. Dry, wet, dry. Life, and the absence of it. Absent from the ancient maharajas&rsquo; cenotaphs at Bada Bagh, and from ghost villages abandoned by Paliwal Brahmins two centuries ago.</p>\r\n<p>A 14-day, tailor-made tour from India specialist TransIndus (0208566 3739; www.transindus.co.uk) starts from &pound;2,450 per person, including B&amp;B accommodation, flights, transfers and entrance fees to sites.</p>\r\n<p><strong>&lsquo;The Empty Quarter&rsquo;, Oman</strong> <br />Surrounded on all sides by golden dunes like towering mountains, the Rub&rsquo; al-Khali Desert was at once foreign and alien, and yet, to my inner nomad, familiar and hospitable, and we had it all to ourselves. There was no need to set up tents, we would simply sleep out in the open. In the distance, the sun was setting, casting long shadows from the camels like creeping tentacles, and turning the desert a deep blood red.</p>\r\n<p>A thin sliver of moon gradually appeared from behind the dark silhouettes of the dunes and a twinkling of stars emerged from the depths of the heavens. For the first time, I felt completely alone and at peace. I forgot all about home; all about my troubles; all about the past and even what lay unknowingly ahead. There was no phone signal, no internet, nothing to do, just me and my empty thoughts and nothing to disturb them. I finally knew what perfect stillness felt like and I wanted to stay in its embrace a moment longer.</p>\r\n<p>An 11-day Arabian Deserts of Oman tailor-made tour from Wild Frontiers (020 8741 7390; wildfrontierstravel.com) costs from &pound;2,860 per person, including accommodation, most meals, entrance fees and transfers. International flights excluded.</p>', NULL, '2019-04-24 20:51:05', NULL, 4, NULL),
(101, 8, 'Where to go on your honeymoon', '<p><strong>1 Greece</strong><br />Greece&rsquo;s rich history, exceptional food and mesmerizing beauty make it an ideal place to set off on honeymoon, spending at least a few nights amid the postcard beauty of Santorini.</p>\r\n<p>Post up at the Andronis, replete with private cave-like pools that overlook the island&rsquo;s crater bay. Greek cuisine is all about the fresh catch, so take some time to explore the town.</p>\r\n<p style=\"text-align: left;\"><strong>2 Colombia</strong><br />Every year sees a new Latin American destination coming into the spotlight. This year, it&rsquo;s Colombia: a vibrant country home to buzzy Cartagena and vast Llanos Orientales.</p>\r\n<p>Colombia oozes romance with a buzzy nightlife, top shelf fresh catch, and surprisingly impressive wellness offerings. Check out Cartagena, where pastel buildings in the old city house some of Colombia&rsquo;s best dining options.</p>\r\n<p><strong>3 Sunnm&oslash;re Alps &amp; Lofoten, Western Norway</strong><br />For nature lovers, Western Norway&rsquo;s alpine region of Lofoten should go off the bucket list and become a reality. For an active duo, head to Sunnm&oslash;re, a magnificent stretch of peaks and summits that&rsquo;s far removed from the tourist trail where you can climb, hike, surf, sail, and even take in a whale safari by rib.</p>\r\n<p><strong>4 Puglia, Italy</strong><br />Puglia is about as close to perfection as anywhere. This Italian gem is ideal for year-round honeymoons with its charmingly quaint yet luxurious approach to life&mdash;and its peppering of some of Italy&rsquo;s finest beaches.</p>\r\n<p>The breathtaking Borgo Egnazia luxury resort, gently tucked into olive groves and scattered with bougainvillea and jasmine, perfectly captures the elegance and mesmerizing beauty of the region.</p>\r\n<p><strong>5 Big Sur, California</strong><br />The California coast oozes romance with its natural beauty, varied (but perfect) climates and plays host to some of the best views around. For some Big Little Lies vibes, spend a few nights in the utterly cool beach town of Montecito (where many celebrities call home) for its low-key energy, discreet luxury, and picture perfect setting.</p>\r\n<p><strong>6 Zanzibar</strong><br />The small island set to make a big splash this year, Zanzibar has seen a raft of new openings to entice honeymooners to the Spice Isle. Nowhere though has managed quite the same pull as the new, design-conscious and eco-savvy, Zuri Zanzibar. A hotel strung together with honeymoon moments, some of the best times here are found off the silken sands of Kendwa Beach (fast garnering a reputation as one of the best in the archipelago) and out on the atoll.</p>\r\n<p><strong>7 Comporta, Portugal</strong><br />For an alternative to oft-crowded Ibiza, newlyweds should turn their sights on this Portuguese seaside getaway, where the well-heeled Lisbonites flock on weekends. Just an hour south of Lisbon, this cluster of villages is often referred to as &ldquo;the Hamptons of Portugal,&rdquo;.</p>\r\n<p><strong>8 The Maldives</strong><br />Southwest of Sri Lanka, this small nation of islands is tailor-made for ocean-obsessed couples. With snow-white sand and aquiline-blue waters, the Maldives is home to some of the planet\'s most idyllic islands&mdash;and sunsets that will make your heart melt.</p>\r\n<p><strong>9 Zambia</strong> <br />For those looking to experience a part of the world that remains largely untouched by outsiders, where lions lounge in the shade of trees and elephants wander freely, Zambia is an unbeatable adventure. While the landscape remains entirely authentic, the country is home to some of the most luxurious safari lodges around, like Chinzombo, Time + Tide Chongwe Camp, Tongabezi Lodge, and more.</p>\r\n<p><strong>10 Indonesia</strong><br />Indonesia has always been a honeymooner&rsquo;s favorite. It has that exotic appeal that makes it worthy of the occasion yet the luxury of somewhere that will bring that sense of marital bliss. While Java entices with the ancient stupas of Borobodur, Lombok invites an adventurous side and Bali speaks for itself.</p>', NULL, '2019-04-25 11:35:28', NULL, 4, NULL),
(103, 8, 'How to travel plastic-free', '<p><strong>Dine in</strong><br />Dining in instead of taking food to-go is one of the easiest ways to avoid single-use plastic and other disposable paper products. In places like Europe where there is a strong cafe culture, it is actually easier to dine in than out; however, if you are heading to a country where street food is popular (e.g. Southeast Asia), look for vendors that serve you food on reusable or paper containers.</p>\r\n<p><strong>Eat and drink local</strong><br />Enjoying local cuisine helps reduce how much plastic you incur. When my husband and I did the Annapurna Circuit last year, we noticed that you could get imported pasta with tomato sauce or the unofficial dish of Nepal, dal bhat (seasoned lentils and rice). Pasta is imported in plastic bags, which get burned by the locals in open pits since there isn&rsquo;t trash collection in the Himalayas, whereas dal bhat comes from locally grown rice and lentils, which are delivered in large sacks from local farms.</p>\r\n<p><strong>Bring a refillable water bottle</strong><br />Staying hydrated while traveling is important for your health; however, it can be hard to find drinking water on-the-go, since drinking fountains can be hard to find in much of the world. The way I work around this is to bring two 750ml stainless steel bottles with me wherever I go and to fill them up whenever I have a chance.</p>\r\n<p><strong>Pack your own toiletries</strong><br />While many hotel chains are starting to move away from individual plastic bottles of soap, shampoo and conditioner in favor of bulk soap dispensers, it is far from being ubiquitous yet. I personally swear by the refillable silicon GoToob to carry my own soap, shampoo and conditioner, which never explode or leak in your luggage.</p>\r\n<p><strong>Bring snacks for the plane</strong><br />The airlines are notorious for giving little bags of individually wrapped snacks that are low-quality, not filling in the least and covered in plastic. I like to use a refillable stainless steel container to carry filling snacks like nuts and dried fruit.</p>\r\n<p><strong>Translate key phrases</strong><br />When traveling for 4.5 months out of the country last year, I went to the grocery store in many countries where I didn&rsquo;t speak the language and had no way to ask people not to use a plastic bag aside from doing an elaborate game of charades which were not always successful. At the end of my trip, I found a grocery store in Japan that had a great solution for this, a card at the register that said \"I don&rsquo;t need a plastic bag\" in English and Japanese.</p>\r\n<p><strong>Cover up!</strong><br />Sunscreen is one of those necessary evils for those of us with pale skin. Either you buy chemical sunscreen that is damaging our oceans, reefs, and possibly your own health, or you buy natural sunscreen that leaves your skin a tinge white and is prone to clogging your pores. In either case, the sunscreen you buy will likely come in a single-use plastic tube or tub. I avoid sunscreen by wearing a hat, light scarf and lightweight long layers to provide physical protection whenever possible.</p>\r\n<p><strong>Be road trip ready</strong><br />My cousin&rsquo;s family has traveled all over the United States by car. One of their biggest challenges has been hotel breakfasts since many hotels surprisingly do not offer reusable cups and plates with their continental breakfast. The only solution they have been able to find in these situations is to bring their own reusable dining set.</p>', NULL, '2019-04-25 12:13:40', NULL, 2, NULL),
(105, 8, 'Family holiday packing list', '<p>My grandmother never goes anywhere without a swimming costume and a book &ndash; if things are going well, she reasons, she&rsquo;ll get to use both. Make this your policy.</p>\r\n<p>There are, of course, a few other practical things to consider. Check the items below off of your packing list.</p>\r\n<p><strong>1</strong> driving licence, code for hire car; email a copy of both to yourself<br /><strong>2</strong> for plane, train or bus <br /><strong>3</strong> mobile phone and charger<br /><strong>4</strong> music on your device of choice for playing in the car (and relevant cable)<br /><strong>5</strong> wallet with credit and debit cards and some cash<br /><strong>6</strong> keys<br /><strong>7</strong> camera and charger<br /><strong>8</strong> backpack or another hands-free bag for carrying around daily essentials<br /><strong>9</strong> clothes: socks; shoes (at least two pairs); pants; bras; shorts; shirts; warm layers; swimming costume; rainy day gear; pyjamas<br /><strong>10</strong> medication (anything you regularly take plus Calpol) and a copy of your family&rsquo;s prescriptions<br /><strong>11</strong> first aid kit<br /><strong>12</strong> contraception<br /><strong>13</strong> tampons and sanitary towels<br /><strong>14</strong> wet wipes<br /><strong>15</strong> nappies<br /><strong>16</strong> face wash in a small container, if you\'re flying<br /><strong>17</strong> moisturiser<br /><strong>18</strong> shampoo and conditioner for all<br /><strong>19</strong> toothbrushes and paste<br /><strong>20</strong> glasses or contact lenses plus case and lens solution<br /><strong>21</strong> sunglasses <br /><strong>22</strong> hairbrushes for young and old, plus hair clips<br /><strong>23</strong> books and magazines for all ages<br /><strong>24</strong> tablet loaded with programmes viewable offline for planes or cars<br /><strong>25</strong> drawing supplies<br /><strong>26</strong> playing cards<br /><strong>27</strong> extra bag for dirty laundry<br /><strong>28</strong> water bottle to refill</p>', NULL, '2019-04-25 12:38:28', NULL, 5, NULL),
(106, 8, 'How to survive a long car journey with children', '<p>Having survived driving more than 8,000 miles around Britain with two children in the back seat while writing a guidebook about family-friendly attractions, I have come up with some essential tips for those long car journeys this summer. Hopefully it might stop one or two of you doing what I once did - losing my cool so badly at the wheel I snapped the rear-view mirror off and flung it into a field. Stay calm parents, read this, and let me know if you have any other ideas.</p>\r\n<p><strong>1 Enthuse kids about their destination</strong><br />Enough take the edge of the journey, but never oversell it as we once did visiting the Wensleydale Cheese Visitor Centre. On the strength of a Yorkshire Tourist Board leaflet featuring pictures of Wallace and Gromit sticking their thumbs up, we rashly promised life-size models of these cartoon characters would be wandering around. Unfortunately the only thing Wallace and Gromit related at the Wensleydale Cheese Visitor Centre was a chalk outline of them on the caf&eacute;&rsquo;s specials board. Effectively we&rsquo;d driven two hours to a working cheese factory to show small kids some stainless steel tubs and information boards highlighting the cheese-making processes of milling and tipping. I&rsquo;m not sure about your kids, but it turned out ours weren&rsquo;t that interested in milling or tipping, something they reminded us about the whole drive back.</p>\r\n<p><strong>2 Always carry treats</strong><br />Travelling long distances with young children in a car minus a packet of fruit pastilles or its equivalent is like walking through a vampire-infested grave-yard in New Orleans after midnight without a wooden stake. OK, you just might survive, but why take the chance?</p>\r\n<p><strong>3 Forget I-spy</strong><br />There&rsquo;s little to see from a speeding car window except the road, others cars and the back of dad and mum&rsquo;s head. Instead play I-don&rsquo;t-Spy, as in &ldquo;I don&rsquo;t spy with my little eye something beginning with P&rdquo;, where the p is then capable of being anything in the known universe unobservable from your car. Our kids once spend two full (I wouldn&rsquo;t say pleasant, but tolerable) hours guessing the word armadillo. The pub sign game also works. Split your family into two halves - one on the right-hand side of the car, the other on the left. Now each time you pass a pub whichever team is sitting on the nearest side to it is awarded points according to how many legs are in its sign eg the White Horse scores 4, the Jolly Sailor two points. If it all gets too much, stop in at one, have a stiff drink then insist your partner takes their turn at wheel. The kids will still moan but you just won&rsquo;t care as much.</p>\r\n<p><strong>4 In-car DVD players</strong><br />They can be found for under &pound;70 - but don&rsquo;t buy the cheapest model. We did and it kept disconnecting from the cigarette lighter and returning the film to the beginning every time my wife scratched a mosquito bite on her leg in the passenger seat. Consequently despite watching Finding Nemo 10 times our kids are still unaware Nemo was eventually reunited with his father.</p>\r\n<p><br /><strong>5 iPads</strong><br />Yes, it&rsquo;s evil screen-time but iPads work. But to avoid that ipaddy (a tech toddler tantrum) ensure your device is charged before setting off. It is prudent to download movies the night before and not leave it to the morning of travel because of the mysteriously temperamental nature of buffering that&rsquo;s been known to last almost as long as an entire movie takes to be shot on location.</p>', NULL, '2019-04-25 12:51:18', NULL, 5, NULL),
(108, 8, '48 hours in... Rome', '<p>Rome has been around for almost three thousand years and yet carries all that weight of history with a dolce vita lightness of heart. It&rsquo;s a city that combines the intimacy and human scale of a village with the cultural draws of a historic, art-laden European metropolis.</p>\r\n<p><strong>Drink</strong><br />Sample the city\'s finest craft beer at trendy new gastropub and microbrewery Birra del Borgo (Via Silla 26; 00 39 06 8376 2316), a short walk from the Vatican.</p>\r\n<p><strong>Eat</strong><br />A longtime draw in Rome&rsquo;s Flaminio neighbourhood, with arguably the best gelato in the city, Neve di Latte (Via Federico Cesi, 1; 00 39 063 225 744) has opened a new branch near Castel Sant&rsquo;Angelo and the Vatican.</p>\r\n<p><strong>Stay</strong><br />Done out in a tastefully modern spin on Art Deco by Italian set designer Paolo Bonfini, the Vil&ograve;n (Via dell\'Arancio, 69; 00 39 06 87 81 87), which has been pulling in the cool crowd since its opening earlier this year, is a delicously cool 18-room refuge.</p>\r\n<p><strong>Day one</strong><br />Head up the steps of the Capitoline to admire two and a half millennia of history in harmonious Piazza del Campidoglio, laid out by Michelangelo in the 1530s on a site that once bristled with Roman temples. In the centre, emperor Marcus Aurelius still greets you proudly from his saddle, though today&rsquo;s equestrian statue is a replica of the second-century-AD bronze original conserved just across the square in the Musei Capitolini (00 39 060 608).</p>\r\n<p>Brave the crowds again and head for the Colosseum/Forum/Palatine complex. Half circus, half sports arena, Rome&rsquo;s most famous classical ruin is unmissable &ndash; especially now that they have extended the visitor route to the underfloor passageways through which gladiators and wild beasts made their entrances. Walk from the Colosseum though the Forum to the pretty Palatine Hill, where Romulus legendarily founded Rome, and where emperors such as Augustus built their palaces.</p>\r\n<p><strong>Day two</strong><br />If you\'re determined to include the Vatican in your brief Roman holiday, brace for queues at St Peter\'s, and pre-book your slot at the Vatican Museums (00 39 06 6988 4676) online to avoid an even longer wait there.</p>\r\n<p>Dine at one of Rome&rsquo;s new breed of creative trattorias. In boho Trastevere, La Gensola (Piazza della Gensola 15; 00 39 06 581 6312) offers a mix of tasty Roman specialities and Sicilian-style seafood dishes in an informal setting. Alternatively, head for Testaccio and grab a pizza at Remo (Piazza Santa Maria Liberatrice 44; closed Sundays) or an aperitivo at the Enoteca Palombi (Piazza Testaccio 41), where, between 7pm and 9pm, &euro;10 (&pound;9) buys you a drink and a heaving plate of food from the buffet.</p>', NULL, '2019-04-25 13:28:34', NULL, 1, NULL),
(109, 64, 'An insider&#39;s guide to Cape Town', '<p>You really can&rsquo;t overstate the case for visiting Cape Town. First, there&rsquo;s the in-your-face beauty of a craggy mountain range that drops precipitously into a glittering sea, its flanks carpeted in greens and delicate florals. Then there&rsquo;s the pristine white beaches lapped by &ndash; it must be said &ndash; a chilly Atlantic, their curves defined by giant granite boulders to bake on, and burbling mountain streams in dappled forests. And no visit is complete without at least one full day exploring some of the surrounding vine-carpeted valleys, their rich terroir spawning not only award-winning wines but superb produce.</p>\r\n<p><strong>Eat</strong><br />Salsify at The Round House (Roundhouse Road; 00 27 21 010 6444) is the latest restaurant from Luke Dale Roberts, widely regarded as Africa&rsquo;s best chef, and Ryan Cole. Tucked into a glen on the slopes of Lion&rsquo;s Head, the restaurant offers superb mountain and sea views from the Sea Room along with world-class fine dining. It&rsquo;s not as famous (yet) as his Test Kitchen so move now and you might still get a table (bookings open online at 8.30am on the first of every month).</p>\r\n<p><strong>Stay</strong><br />Tintswalo at Boulders Boutique Villa (Boulders Beach; 00 27 11 300 8888) has become the city&rsquo;s best seaside b&amp;b. The six-suite villa (seven including the children&rsquo;s suite) is strolling distance from Boulders, where you can swim with Cape Town&rsquo;s penguins.</p>\r\n<p><strong>Day one</strong><br />Schedule Table Mountain (00 27 21 424 8181) for the morning, when the wind is least likely to blow. It&rsquo;s a relatively easy two- to three-hour walk up along Platteklip Gorge, the oldest, most direct route, following a well-constructed trail up the front face of the mountain, but as we&rsquo;re pushed for time, lets ascend by cable car. Purchase the ticket online, dated for the day of your arrival; the single-use ticket is valid for one week. The cable car starts running at 8am in summer and 8.30am in winter. How long you spend exploring the top is entirely up to you, but it can be done in an hour.</p>\r\n<p><strong>Day two</strong><br />To fully grasp the natural splendour of the city, you need to go on a drive that loops around the peninsula, tooling along the west-facing coastal road that hugs the Atlantic to Cape Point, then exploring the village-like suburbs that look across False Bay, with its magnificent backdrop of craggy mountains like cardboard cutouts against a big blue sky.</p>\r\n<p>Make a start at 8am to get to Cape Point National Park before the crowds, winding your way along the coastal road that connects Camps Bay to Hout Bay. Stop to enjoy the view halfway up Chapman&rsquo;s Peak Drive before paying the toll and traversing the narrow road carved into the perpendicular cliffs high above the Atlantic Ocean. Cross Noordhoek Valley, skirting Misty Cliffs and Scarborough, to get to Cape Point National Park, also known as the Cape of Good Hope (Cape Point Road; 00 27 21 780 9526).</p>\r\n<p>Enjoying the same stunning view, Chef&rsquo;s Warehouse at Beau Constantia is a popular fine dining option &ndash; good value too &ndash; so either stay on for dinner here (it opens at 6pm) or head back into the city centre for a table at The Shortmarket Club (88 Shortmarket Street; 00 27 21 447 2874). No view, but the venue, food and service are all excellent, as you&rsquo;d expect from any Luke Dale-Roberts venture.</p>', NULL, '2019-04-25 13:38:44', NULL, 1, NULL),
(112, 8, 'Holiday destinations that are saving the planet', '<p>Environmentally-friendly travel is something on an oxymoron, of course - just staying put is one sure-fire way to reduce your carbon footprint. But travel is one of the life&amp;rsquo;s great pleasures. It broadens the mind and - done right - can be hugely beneficial to the local population. A far better idea is to adapt how we travel to lessen our impact.</p>\r\n<p><strong>Switzerland</strong></p>\r\n<p>Switzerland topped the 2018 Environmental Performance Index (EPI), produced by the Yale Center for Environmental Law &amp;amp; Policy, ahead of France and Denmark. According to the report: &amp;ldquo;Switzerland&amp;rsquo;s top ranking reflects strong performance across most issues, especially Climate &amp;amp; Energy and Air Pollution. Within Environmental Health, Switzerland also stands out in Water &amp;amp; Sanitation.&amp;rdquo;</p>\r\n<p><strong>Belize</strong></p>\r\n<p>There are eco-lodges galore in Belize - Leonardo DiCaprio is building one right now, on Blackadore Caye - while 36.6 per cent of the country is protected by law. &amp;ldquo;In June, the Belize government made major voluntary commitments at the UN Oceans Conference to secure Belize&amp;rsquo;s fisheries as an engine for sustainable development, while in October, the government established the first-ever nationwide ray sanctuary and introduced legislation for a moratorium on offshore drilling,&amp;rdquo; the Ethical Traveler explains in its 2018 report.</p>\r\n<p><strong>Denmark</strong></p>\r\n<p>No country on Earth belches out less CO2 per capita &amp;ndash; 0.06 tonnes, compared with 6.31 in the UK and 35.73 in Qatar, the worst country on the International Energy Agency (IEA) emissions list.</p>\r\n<p>It comes in at number three on the EPI. The report explains: &amp;ldquo;Within Environmental Health, Denmark, Malta, and Sweden stand out for high scores in Air Quality. On Ecosystem Vitality, France, Denmark, and Malta earn top scores in the issue category of Biodiversity &amp;amp; Habitat. France and Denmark rank first in marine protected areas.&amp;rdquo;<br />SloveniaNo country on Earth - bar Venezuela, which is currently off-limits due to economic woes and civil unrest - safeguards more of its land than Slovenia. Almost 54 per cent of it is protected, according to data compiled by the World Bank. It also ranks a respectable 28th on the EPI.</p>\r\n<p><strong>Chile</strong></p>\r\n<p>The Ethical Traveler includes Chile in its 10 best. &amp;ldquo;Chile is actively increasing its solar power capacity and also relies on geothermal power,&amp;rdquo; it says. &amp;ldquo;Additionally, the Chilean government rejected plans for a billion-dollar mining project because of its potential environmental impact.&amp;rdquo;</p>\r\n<p><strong>Finland</strong></p>\r\n<p>It was number one on the EPI back in 2016 (it now sits 10th) and is the second least polluting country in terms of CO2 per capita. &amp;ldquo;Finland&amp;rsquo;s goal of consuming 38 per cent of their final energy from renewable sources by 2020 is legally binding, and they already produce nearly two-thirds of their electricity from renewable or nuclear power sources,&amp;rdquo; said the 2016 EPI report.</p>\r\n<p><strong>Costa Rica</strong></p>\r\n<p>\"Costa Rica has set a goal of carbon neutrality by 2021, and for the first half of 2017, nearly 100 per cent of its electricity came from renewable sources such as hydropower, wind, solar, and geothermal,\" the Ethical Traveler says. &amp;ldquo;Plans for a new El Diqu&amp;iacute;s dam, which, even though it would increase the country&amp;rsquo;s renewable energy capacity, would have a devastating impact on the lands of indigenous communities, were blocked in court.&amp;rdquo;</p>\r\n<p><strong>Vanuatu and Palau</strong></p>\r\n<p>These two South Pacific nations - the former to the north east of Australia, the latter to the west of the Philippines - are both difficult to reach (a couple of flights is a must) but appear on the Ethical Traveler list. Of Vanuatu, it said: &amp;ldquo;The government recently adopted a comprehensive policy to ensure conservation and sustainable management of its ecosystems, address risks posed by natural and man-made disasters, and foster and maintain their diverse human cultures.</p>', NULL, '2019-04-29 09:57:30', NULL, 2, NULL),
(113, 8, 'Ecotourism in Costa Rica', '<p>Ecotourism has been able to actively contribute to the conservation of the cultural heritage and the natural environment of a country. It is one of the most effective means by which we humans can save nature from any potential harm.</p>\r\n<p>Ensuring excellent ecotourism, Costa Rica has devoted an estimated 26% of its land to national parks, wildlife reserves and protected lands. For a tiny country of just 19,730 sq. miles (51,100 sq. km), it has a lot to offer. There is so much to see and do in Costa Rica. Sight various exotic birds as you hike through the verdant rainforests, get fascinated by amazing plethora of wildlife and marine species, relax at the spectacular beaches or surround yourself with adventure. Whether you are a nature lover or an adrenaline seeker, there is so much to do!</p>\r\n<p>Costa Rica&rsquo;s tourism industry has developed as environmentally sound and lucrative, protecting the vast natural treasures of the country while bringing economic opportunities to the rural areas. The far reaching environmental and economic benefits of ecotourism cannot be denied. Costa Rica has been able to attain sustainable development and protect the unspoiled landscapes from the dangers of destructive agricultural practices.</p>\r\n<p><strong>Sustainable ecotourism</strong><br />Through successful ecotourism Costa Rica has been able to prove that conservation and economic growth goes hand in hand. The growth potential and environmental benefits of ecotourism keeps it from becoming a burden on the developing countries. The investment in ecotourism is for a worthwhile cause and provides positive development for the environment and the country.</p>\r\n<p>Manuel Antonio National Park and Monteverde Cloud Forest Reserve are viewed as models for ecotourism and sustainable development. These parks offer critical habitat to various plant and animal species. The major reason of ecotourism&rsquo;s success in Costa Rica goes to the active participation of the private sector, exceptional biodiversity and the interaction between the comprehensive protected areas network. The international and national NGOs, local businesses, natives and government organizations also play a major part in the success of the ecotourism programs.</p>\r\n<p>Sound ecotourism practices in Costa Rica have helped minimize adverse effects of traditional tourism on the natural environment, created awareness, provided financial benefits to the local communities and have facilitated in building the environment. Responsible tourism has also allowed the country to respond effectively to the growing demands of the tourism industry and enhance the cultural integrity of the local community.</p>', NULL, '2019-04-27 10:34:53', NULL, 2, NULL);
INSERT INTO `post` (`id`, `user_id`, `title`, `body`, `published`, `created_at`, `updated_at`, `categoryID`, `image`) VALUES
(114, 8, 'How to choose the perfect travel companion', '<p><strong>Q:</strong> I&rsquo;m planning to travel around south-east Asia and Australia for six months after I finish university. A close friend has suggested we partner up, but she&rsquo;s a real stress-head and other friends might make better travel buddies. How do I choose?</p>\r\n<p><strong>A:</strong> Of the scraps of well-worn advice that adults bestow upon students, &ldquo;Make friends out of flatmates, not flatmates out of friends&rdquo; haunts me because of its pertinence to travel. What we look for in a travel companion differs hugely from what we look for in a friend.&nbsp;</p>\r\n<p>Think of yourself as a film director casting two wildly different parts. That wickedly sarcastic, downbeat friend who makes you laugh like nobody else might be the one you position yourself next to in the pub, but in the chaos of a Bangkok bus station, you&rsquo;ll wonder what possessed you to team&nbsp;<br />up with such a glum, useless companion.&nbsp;</p>\r\n<p>And that soft-hearted best friend from school you call when you want a 90-minute analysis of a single text message from a guy on Tinder? She&rsquo;ll end up driving you bananas as you tour the temples of Angkor Wat with her and her bundle of neuroses. Travelling is stressful and exhausting, and the dream travel companion combines an upbeat outlook, practical mindset and calm exterior.&nbsp;</p>\r\n<p>Here are five questions I ask myself about any potential travel companion:&nbsp;</p>\r\n<p><strong>1 What are their priorities?&nbsp;</strong><br />If they&rsquo;re all about getting drunk on cheap bottles of Chang, or bringing Swedish girls back to the beach shack, while you want to do yoga and learn to surf, it won&rsquo;t work.&nbsp;</p>\r\n<p><strong>2 What is their budget?</strong><br />Nothing drives a rift between travellers faster than disagreeing on what&rsquo;s a sensible spend on a meal or hotel. Talk this through before you book any flights.</p>\r\n<p><strong>3 Are they good in a crisis?&nbsp;</strong><br />Around 60 per cent of what happens to you when you backpack is unplanned, and you need someone who&rsquo;ll roll with the punches. Do they have a history of spinning out if they can&rsquo;t get a taxi home at night? Do they blame others when they&rsquo;re late? Do they hold grudges or sulk if things don&rsquo;t go their way? This behaviour is just about tolerable on a group night out, much less so when you&rsquo;re hot and bothered and trying to find a hostel for the night.</p>\r\n<p><strong>4 What do they contribute?&nbsp;</strong><br />Are they too shy to approach a stranger and ask for directions? Will they make an effort to learn the language or will they expect you to do all the talking? Will they research and plan and book hostels along the way, or will you be thrust into the role of unpaid tour guide? It&rsquo;s fine for you both to have different roles and strengths, but a healthy balance of travel chores is key.</p>\r\n<p><strong>5 Do they make you laugh?</strong>&nbsp;<br />Will they help you see the funny side when you accidentally book a night in a brothel? Will they magnanimously laugh it off if you lose their flip-flops in the sea? Laughter is the most cleansing thing in the world, and we all need to travel with people who laugh easily, and coax laughter out of us.</p>', NULL, '2019-04-27 10:56:57', NULL, 5, NULL),
(115, 63, 'Croatia  islands', '<p>If you&rsquo;re looking for an island worthy of a week&rsquo;s stay, some &ndash; like&nbsp;<a href=\"http://www.timeout.com/croatia/things-to-do/brac-area-guide\">BraÄ</a>&nbsp;&ndash; are expansive enough to have their own airports. If you&rsquo;re after daytrips and excursions, most can be reached by ferry from the mainland. Some of the tinier islands are determinedly deserted, meaning that overnight stays are banned &ndash; but you can still take boat trips to these Adriatic gems. There&rsquo;s plenty of island hopping to be done, here&rsquo;s our pick of the best in&nbsp;<a href=\"http://www.timeout.com/croatia/\">Croatia</a>.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Croatia&rsquo;s coast is pure, nearly all 2,000 kilometres and 1,200 islands of it, and is open to all.&nbsp;Verdant islands, bare karst-rock islands, tiny dots of islands with nothing on them but a lighthouse converted to accommodate isolated holidaymakers, naturist islands, islands with just deer and naturists feeding them, islands with cocktail bars attracting the VIP set, islands for windsurfers, islands for sculptors, islands for Tito&rsquo;s political prisoners, islands for Tito&rsquo;s collection of safari animals, islands so remote they&rsquo;re nearer to Italy, islands called home by a family of 120 dolphins, islands of age-old fishing traditions, islands with a particular cave in which the sunlight turns a brilliant blue for an hour each day, islands known for their wine, cheese or anchovy pasties. More than 80 per cent of Croatia&rsquo;s islands have no people on them at all.</p>', NULL, '2019-04-30 16:57:47', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `like_count` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_id`, `user_id`, `like_count`, `id`) VALUES
(112, 8, 1, 8),
(108, 8, 1, 12),
(109, 8, 1, 13),
(103, 8, 1, 14),
(103, 8, 1, 15),
(103, 8, 1, 16),
(97, 8, 1, 17),
(95, 8, 1, 18),
(97, 8, 1, 19),
(97, 8, 1, 20),
(94, 8, 1, 21),
(94, 8, 1, 22),
(94, 8, 1, 23),
(94, 8, 1, 24),
(106, 8, 1, 35),
(106, 8, 1, 36),
(109, 8, 1, 38),
(109, 8, 1, 39),
(109, 8, 1, 40),
(97, 8, 1, 41),
(97, 8, 1, 42),
(109, 8, 1, 43),
(109, 8, 1, 44),
(109, 8, 1, 45),
(109, 8, 1, 46),
(109, 8, 1, 47),
(108, 8, 1, 49),
(108, 8, 1, 50),
(108, 8, 1, 51),
(108, 8, 1, 52),
(108, 8, 1, 53),
(108, 8, 1, 54),
(108, 8, 1, 55),
(108, 8, 1, 56),
(108, 8, 1, 57),
(108, 8, 1, 58),
(105, 63, 1, 59),
(105, 63, 1, 60),
(105, 63, 1, 61),
(97, 63, 1, 62),
(105, 63, 1, 63),
(105, 63, 1, 64),
(105, 63, 1, 65),
(105, 63, 1, 66),
(105, 63, 1, 67),
(105, 63, 1, 68),
(105, 63, 1, 69),
(105, 63, 1, 70),
(105, 63, 1, 71),
(108, 64, 1, 72),
(94, 49, 1, 73),
(94, 49, 1, 74),
(115, 63, 1, 75),
(115, 63, 1, 76),
(115, 66, 1, 77),
(63, 63, 1, 78),
(63, 63, 1, 79),
(63, 63, 1, 80),
(63, 63, 1, 81),
(8, 63, 1, 82),
(63, 63, 1, 83),
(63, 63, 1, 84),
(63, 63, 1, 85),
(63, 63, 1, 86),
(63, 63, 1, 87),
(63, 63, 1, 88),
(63, 63, 1, 89),
(63, 63, 1, 90),
(8, 63, 1, 91),
(63, 63, 1, 92),
(63, 63, 1, 93),
(8, 63, 1, 94),
(8, 63, 1, 95),
(8, 63, 1, 96),
(8, 63, 1, 97),
(8, 63, 1, 98),
(8, 63, 1, 99),
(8, 63, 1, 100),
(8, 63, 1, 101),
(8, 65, 1, 102),
(8, 65, 1, 103),
(63, 65, 1, 105),
(63, 65, 1, 106),
(115, 65, 1, 107),
(113, 65, 1, 108),
(113, 65, 1, 109),
(115, 65, 1, 110),
(115, 65, 1, 111),
(103, 65, 1, 112),
(103, 65, 1, 113),
(115, 72, -1, 114),
(115, 72, 1, 115),
(115, 72, -1, 116),
(115, 63, 1, 117),
(106, 73, 1, 118),
(106, 73, 1, 119),
(106, 73, 1, 120),
(106, 73, 1, 121);

-- --------------------------------------------------------

--
-- Table structure for table `totalcomments`
--

CREATE TABLE `totalcomments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `totalCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` enum('master','Admin','User','','') CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `surname`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`, `country_id`, `image`) VALUES
(8, 'Krisztina', 'Kovacs', 'Krisztina1', 'Krisztina@mail.com', 'Admin', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-20 23:04:20', NULL, 1, NULL),
(50, 'Tess', 'Draper', 'tess', 'issi@email.com', 'User', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-23 19:39:32', NULL, NULL, NULL),
(55, 'Judith', 'Chalmers', 'judy', 'judy@hols.com', 'User', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-23 23:22:20', NULL, NULL, NULL),
(59, 'Isabel', 'Draper', 'issi', 'isabel.draper.edwards@gmail.com', 'Admin', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-24 00:32:01', NULL, 2, NULL),
(62, 'Melanie', 'Leather', 'Melanie', 'melanie_leather@hotmail.com', 'Admin', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-27 08:20:33', NULL, 2, NULL),
(63, 'Victoria', 'holmes', 'Victoria12', 'qainstructorsky@gmail.com', 'master', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-29 14:57:45', NULL, 2, NULL),
(64, 'Ghena', 'shaban', 'ghena1', 'ghena@hotmail.com', 'Admin', '$2y$10$0UePXYv5pAjZKQsNgxb9ZeICJdK/VONVXCyWc75KhgSXhCxT9Abca', '2019-04-29 20:12:39', NULL, NULL, NULL),
(65, 'Sarah', 'Rainbow ', 'Sarah.R', 'Sarah@sky.com', 'User', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-30 19:34:03', NULL, 1, NULL),
(66, 'Lucy', 'Hello', 'Lucy12', 'Lucy@mail.com', 'User', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-04-30 20:25:49', NULL, 1, NULL),
(67, 'Conrad', 'Sky', 'Conrad.Sky', 'Conrad@sky.com', 'Admin', '$2y$10$UtAwQBoU27R4rgL25tRNB.p6/oU5SO13CW70jsLv9Tyxo/lIZ3Mva', '2019-05-01 23:32:23', NULL, 2, NULL),
(68, 'Fouzie', 'Mahrat', 'Fouzie', 'Fouzie@mail.com', 'User', '$2y$10$TYw7vMCelXQ4O1qYzWG19uPK1grqRsvYESD3I/urI8uSxNgS6TV66', '2019-05-01 23:38:08', NULL, 1, NULL),
(69, 'Samira', 'Ali', 'Samira1', 'Samira@mail.com', 'Admin', '$2y$10$OUJIuzz70SxR/TE0XclBzOy3vWXKzHm8A09IEGLbcsk6dt2uq14Gm', '2019-05-02 07:47:53', NULL, 2, NULL),
(73, 'bob', 'sky', 'bobby', 'bob@mail.com', 'User', '$2y$10$FkQBRtahN40eYln.oMY/revnR4meVo1q0OZPX1Py1/NBiBtI.vrNa', '2019-05-02 10:10:52', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `post_id` int(11) NOT NULL,
  `view_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liketotal`
--
ALTER TABLE `liketotal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`categoryID`),
  ADD KEY `image_id` (`image`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `totalcomments`
--
ALTER TABLE `totalcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `liketotal`
--
ALTER TABLE `liketotal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `totalcomments`
--
ALTER TABLE `totalcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `liketotal`
--
ALTER TABLE `liketotal`
  ADD CONSTRAINT `liketotal_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`);

--
-- Constraints for table `totalcomments`
--
ALTER TABLE `totalcomments`
  ADD CONSTRAINT `totalcomments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
