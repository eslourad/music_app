-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 10:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thenewj`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lyrics` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `title`, `artist`, `album_name`, `album_image`, `file`, `lyrics`, `created_at`, `updated_at`) VALUES
(53, 'Shape of You', 'Ed Sheeran', 'Divide', 'i1583689305.jpg', 'm1583689305.mp3', 'The club isn\'t the best place to find a lover\r\nSo the bar is where I go (mmmm)\r\nMe and my friends at the table doing shots\r\nDrinking fast and then we talk slow (mmmm)\r\nAnd you come over and start up a conversation with just me\r\nAnd trust me I\'ll give it a chance now (mmmm)\r\nTake my hand, stop, put Van The Man on the jukebox\r\nAnd then we start to dance\r\nAnd now I\'m singing like\r\n\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don\'t mind me\r\nSay, boy, let\'s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead (mmmm)\r\n\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nLast night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\n\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you\r\n\r\nOne week in we let the story begin\r\nWe\'re going out on our first date (mmmm)\r\nYou and me are thrifty, so go all you can eat\r\nFill up your bag and I fill up a plate (mmmm)\r\nWe talk for hours and hours about the sweet and the sour\r\nAnd how your family is doing okay (mmmm)\r\nAnd leave and get in a taxi, then kiss in the backseat\r\nTell the driver make the radio play\r\nAnd I\'m singing like\r\n\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don\'t mind me\r\nSay, boy, let\'s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead (mmmm)\r\n\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nLast night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\n\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nOh I oh I oh I oh I\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you\r\n\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\n\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nLast night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\n\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you', '2020-03-08 09:41:45', '2020-03-08 09:41:45'),
(54, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1583690623.jpg', 'm1583690623.mp3', 'There are days\r\nI wake up and I pinch myself\r\nYou\'re with me, not someone else\r\nAnd I am scared, yeah, I\'m still scared\r\nThat it\'s all a dream\r\n\r\n\'Cause you still look perfect as days go by\r\nEven the worst ones, you make me smile\r\nI\'d stop the world if it gave us time\r\n\r\n\'Cause when you love someone\r\nYou open up your heart\r\nWhen you love someone\r\nYou make room\r\nIf you love someone\r\nAnd you\'re not afraid to lose \'em\r\nYou probably never loved someone like I do\r\nYou probably never loved someone like I do\r\n\r\nWhen you say\r\nYou love the way I make you feel\r\nEverything becomes so real\r\nDon\'t be scared, no, don\'t be scared\r\n\'Cause you\'re all I need\r\n\r\nAnd you still look perfect as days go by\r\nEven the worst ones, you make me smile\r\nI\'d stop the world if it gave us time\r\n\r\n\'Cause when you love someone\r\nYou open up your heart\r\nWhen you love someone\r\nYou make room\r\nIf you love someone\r\nAnd you\'re not afraid to lose \'em\r\nYou probably never loved someone like I do\r\nYou probably never loved someone like I do\r\n\r\nAll my life\r\nI thought it\'d be hard to find\r\nThe one \'til I found you\r\nAnd I find it bittersweet\r\n\'Cause you gave me something to lose\r\n\r\nBut when you love someone\r\nYou open up your heart\r\nWhen you love someone\r\nYou make room\r\nIf you love someone\r\nAnd you\'re not afraid to lose \'em\r\nYou probably never loved someone like I do\r\nYou probably never loved someone like I do\r\nYou probably never loved someone like I do', '2020-03-08 10:03:44', '2020-03-08 10:03:44'),
(55, 'Blank Space', 'Taylor Swift', '1989', 'i1583690802.jpg', 'm1583690802.mp3', 'Nice to meet you, where you been?\r\nI could show you incredible things\r\nMagic, madness, heaven sin\r\nSaw you there and I thought\r\nOh my God, look at that face\r\nYou look like my next mistake\r\nLove\'s a game, want to play?\r\nNew money, suit and tie\r\nI can read you like a magazine\r\nAin\'t it funny, rumors, lie\r\nAnd I know you heard about me\r\nSo hey, let\'s be friends\r\nI\'m dying to see how this one ends\r\nGrab your passport and my hand\r\nI can make the bad guys good for a weekend\r\nSo it\'s gonna be forever\r\nOr it\'s gonna go down in flames\r\nYou can tell me when it\'s over\r\nIf the high was worth the pain\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane\r\n\'Cause you know I love the players\r\nAnd you love the game\r\n\'Cause we\'re young and we\'re reckless\r\nWe\'ll take this way too far\r\nIt\'ll leave you breathless\r\nOr with a nasty scar\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane\r\nBut I\'ve got a blank space baby\r\nAnd I\'ll write your name\r\nCherry lips, crystal skies\r\nI could show you incredible things\r\nStolen kisses, pretty lies\r\nYou\'re the king baby I\'m your Queen\r\nFind out what you want\r\nBe that girl for a month\r\nWait the worst is yet to come, oh no\r\nScreaming, crying, perfect storm\r\nI can make all the tables turn\r\nRose gardens filled with thorns\r\nKeep you second guessing like\r\n\"Oh my God, who is she?\"\r\nI get drunk on jealousy\r\nBut you\'ll come back each time you leave\r\n\'Cause darling I\'m a nightmare dressed like a daydream\r\nSo it\'s gonna be forever\r\nOr it\'s gonna go down in flames\r\nYou can tell me when it\'s over\r\nIf the high was worth the pain\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane\r\n\'Cause you know I love the players\r\nAnd you love the game\r\n\'Cause we\'re young and we\'re reckless\r\nWe\'ll take this way too far\r\nIt\'ll leave you breathless\r\nOr with a nasty scar\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane (Insane)\r\nBut I\'ve got a blank space baby\r\nAnd I\'ll write your name\r\nBoys only want love if it\'s torture\r\nDon\'t say I didn\'t say I didn\'t warn ya\r\nBoys only want love if it\'s torture\r\nDon\'t say I didn\'t say I didn\'t warn ya\r\nSo it\'s gonna be forever\r\nOr it\'s gonna go down in flames\r\nYou can tell me when it\'s over\r\nIf the high was worth the pain\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane\r\n\'Cause you know I love the players\r\nAnd you love the game\r\n\'Cause we\'re young and we\'re reckless\r\nWe\'ll take this way too far\r\nIt\'ll leave you breathless\r\nOr with a nasty scar\r\nGot a long list of ex-lovers\r\nThey\'ll tell you I\'m insane\r\nBut I\'ve got a blank space baby\r\nAnd I\'ll write your name', '2020-03-08 10:06:42', '2020-03-08 10:06:42'),
(56, 'All of Me', 'John Legend', 'Love in the Future', 'i1583691157.jpg', 'm1583691073.mp3', 'What would I do without your smart mouth\r\nDrawing me in, and you kicking me out\r\nYou got my head spinning, no kidding, I can\'t pin you down\r\nWhat\'s going on in that beautiful mind\r\nI\'m on your magical mystery ride\r\nAnd I\'m so dizzy, don\'t know what hit me, but I\'ll be alright\r\nMy head\'s underwater\r\nBut I\'m breathing fine\r\nYou\'re crazy and I\'m out of my mind\r\nCause all all all ...\r\nHow many times do I have to tell you\r\nEven when you\'re crying you\'re beautiful too\r\nThe world is beating you down, I\'m around through every mood\r\nYou\'re my downfall, you\'re my muse\r\nMy worst distraction, my rhythm and blues\r\nI can\'t stop singing, it\'s ringing in my head for you\r\nMy head\'s underwater\r\nBut I\'m breathing fine\r\nYou\'re crazy and I\'m out of my mind\r\nCause all of me\r\nLoves all of you\r\nLove your curves and all your edges\r\nAll your perfect imperfections\r\nGive your all to me\r\nI\'ll give my all to you\r\nYou\'re my end and my beginning\r\nEven when I lose I\'m winning\r\nCause I give you all ...\r\nCause I give you all of me\r\nAnd you give me all of you,\r\nCause I give you all of me\r\nAnd you give me all of you', '2020-03-08 10:11:13', '2020-03-08 10:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `music_playlist`
--

CREATE TABLE `music_playlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `music_id` int(10) UNSIGNED NOT NULL,
  `playlist_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_playlist`
--

INSERT INTO `music_playlist` (`id`, `music_id`, `playlist_id`, `position`, `created_at`, `updated_at`) VALUES
(41, 53, 1, 3, '2020-03-08 10:17:59', '2020-03-08 10:18:42'),
(42, 54, 1, 3, '2020-03-08 10:18:02', '2020-03-08 10:18:41'),
(43, 55, 1, 1, '2020-03-08 10:18:05', '2020-03-08 10:18:42'),
(44, 56, 1, 4, '2020-03-08 10:18:23', '2020-03-08 10:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Morning Routine', 1, '2020-03-07 08:48:41', '2020-03-08 08:36:03'),
(2, 'Groovy Funky', 1, '2020-03-07 08:48:47', '2020-03-07 08:48:47'),
(3, 'Jazzitup', 1, '2020-03-07 09:07:36', '2020-03-08 08:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `birth_date`, `email`, `email_verified_at`, `password`, `is_admin`, `is_premium`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cardo', 'Dalisay', 'male', '05/15/1996', 'admin@thenewj.com', NULL, '$2y$10$wBZ3sN5EKQnBrERc5HTUSewI7PVxpMq.Ovx5gg7wErs7dp7//aUaG', 1, 1, NULL, '2020-03-08 10:26:06', '2020-03-08 10:26:06'),
(5, 'John', 'Doe', 'male', '03/31/2020', 'john@gmail.com', NULL, '$2y$10$J9D29KIg201C.KeQvIrKtOQ7SmWYAYFizf9PAOp1T0V9KCPMa4nDi', 0, 1, NULL, '2020-03-08 13:44:29', '2020-03-08 13:45:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_playlist`
--
ALTER TABLE `music_playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `music_playlist`
--
ALTER TABLE `music_playlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
