-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 12:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_19_115258_music', 2),
(5, '2020_02_15_064223_create_playlists_table', 3);

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
(18, 'Shape of You', 'Ed Sheeran', 'Divide', 'i1579593501.jpg', 'm1579593501.mp3', 'The club isn\'t the best place to find a lover<br>\r\nSo the bar is where I go (mmmm)<br>\r\nMe and my friends at the table doing shots<br>\r\nDrinking fast and then we talk slow (mmmm)<br>\r\nAnd you come over and start up a conversation with just me<br>\r\nAnd trust me I\'ll give it a chance now (mmmm)<br>\r\nTake my hand, stop, put Van The Man on the jukebox<br>\r\nAnd then we start to dance<br>\r\nAnd now I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nOne week in we let the story begin<br>\r\nWe\'re going out on our first date (mmmm)<br>\r\nYou and me are thrifty, so go all you can eat<br>\r\nFill up your bag and I fill up a plate (mmmm)<br>\r\nWe talk for hours and hours about the sweet and the sour<br>\r\nAnd how your family is doing okay (mmmm)<br>\r\nAnd leave and get in a taxi, then kiss in the backseat<br>\r\nTell the driver make the radio play<br>\r\nAnd I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you', '2020-01-20 23:58:21', '2020-01-26 02:44:10'),
(19, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(20, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(21, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(22, 'Shape of You', 'Ed Sheeran', 'Divide', 'i1579593501.jpg', 'm1579593501.mp3', 'The club isn\'t the best place to find a lover<br>\r\nSo the bar is where I go (mmmm)<br>\r\nMe and my friends at the table doing shots<br>\r\nDrinking fast and then we talk slow (mmmm)<br>\r\nAnd you come over and start up a conversation with just me<br>\r\nAnd trust me I\'ll give it a chance now (mmmm)<br>\r\nTake my hand, stop, put Van The Man on the jukebox<br>\r\nAnd then we start to dance<br>\r\nAnd now I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nOne week in we let the story begin<br>\r\nWe\'re going out on our first date (mmmm)<br>\r\nYou and me are thrifty, so go all you can eat<br>\r\nFill up your bag and I fill up a plate (mmmm)<br>\r\nWe talk for hours and hours about the sweet and the sour<br>\r\nAnd how your family is doing okay (mmmm)<br>\r\nAnd leave and get in a taxi, then kiss in the backseat<br>\r\nTell the driver make the radio play<br>\r\nAnd I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you', '2020-01-20 23:58:21', '2020-01-20 23:58:21'),
(23, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(24, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(25, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(26, 'Shape of You', 'Ed Sheeran', 'Divide', 'i1579593501.jpg', 'm1579593501.mp3', 'The club isn\'t the best place to find a lover<br>\r\nSo the bar is where I go (mmmm)<br>\r\nMe and my friends at the table doing shots<br>\r\nDrinking fast and then we talk slow (mmmm)<br>\r\nAnd you come over and start up a conversation with just me<br>\r\nAnd trust me I\'ll give it a chance now (mmmm)<br>\r\nTake my hand, stop, put Van The Man on the jukebox<br>\r\nAnd then we start to dance<br>\r\nAnd now I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nOne week in we let the story begin<br>\r\nWe\'re going out on our first date (mmmm)<br>\r\nYou and me are thrifty, so go all you can eat<br>\r\nFill up your bag and I fill up a plate (mmmm)<br>\r\nWe talk for hours and hours about the sweet and the sour<br>\r\nAnd how your family is doing okay (mmmm)<br>\r\nAnd leave and get in a taxi, then kiss in the backseat<br>\r\nTell the driver make the radio play<br>\r\nAnd I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you', '2020-01-20 23:58:21', '2020-01-20 23:58:21'),
(27, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(28, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(29, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(30, 'Shape of You', 'Ed Sheeran', 'Divide', 'i1579593501.jpg', 'm1579593501.mp3', 'The club isn\'t the best place to find a lover<br>\r\nSo the bar is where I go (mmmm)<br>\r\nMe and my friends at the table doing shots<br>\r\nDrinking fast and then we talk slow (mmmm)<br>\r\nAnd you come over and start up a conversation with just me<br>\r\nAnd trust me I\'ll give it a chance now (mmmm)<br>\r\nTake my hand, stop, put Van The Man on the jukebox<br>\r\nAnd then we start to dance<br>\r\nAnd now I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nOne week in we let the story begin<br>\r\nWe\'re going out on our first date (mmmm)<br>\r\nYou and me are thrifty, so go all you can eat<br>\r\nFill up your bag and I fill up a plate (mmmm)<br>\r\nWe talk for hours and hours about the sweet and the sour<br>\r\nAnd how your family is doing okay (mmmm)<br>\r\nAnd leave and get in a taxi, then kiss in the backseat<br>\r\nTell the driver make the radio play<br>\r\nAnd I\'m singing like<br>\r\n<br>\r\nGirl, you know I want your love<br>\r\nYour love was handmade for somebody like me<br>\r\nCome on now, follow my lead<br>\r\nI may be crazy, don\'t mind me<br>\r\nSay, boy, let\'s not talk too much<br>\r\nGrab on my waist and put that body on me<br>\r\nCome on now, follow my lead<br>\r\nCome, come on now, follow my lead (mmmm)<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nOh I oh I oh I oh I<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\n<br>\r\nI\'m in love with the shape of you<br>\r\nWe push and pull like a magnet do<br>\r\nAlthough my heart is falling too<br>\r\nI\'m in love with your body<br>\r\nLast night you were in my room<br>\r\nAnd now my bedsheets smell like you<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with your body<br>\r\n<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nCome on, be my baby, come on<br>\r\nCome on, be my baby, come on<br>\r\nI\'m in love with your body<br>\r\nEvery day discovering something brand new<br>\r\nI\'m in love with the shape of you', '2020-01-20 23:58:21', '2020-01-20 23:58:21'),
(31, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(32, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(33, 'Love Someone', 'Lukas Graham', '3 (The Purple Album)', 'i1579596408.jpg', 'm1579596408.mp3', 'There are days<br>\r\nI wake up and I pinch myself<br>\r\nYou\'re with me, not someone else<br>\r\nAnd I am scared, yeah, I\'m still scared<br>\r\nThat it\'s all a dream<br>\r\n<br>\r\n\'Cause you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nWhen you say<br>\r\nYou love the way I make you feel<br>\r\nEverything becomes so real<br>\r\nDon\'t be scared, no, don\'t be scared<br>\r\n\'Cause you\'re all I need<br>\r\n<br>\r\nAnd you still look perfect as days go by<br>\r\nEven the worst ones, you make me smile<br>\r\nI\'d stop the world if it gave us time<br>\r\n<br>\r\n\'Cause when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\n<br>\r\nAll my life<br>\r\nI thought it\'d be hard to find<br>\r\nThe one \'til I found you<br>\r\nAnd I find it bittersweet<br>\r\n\'Cause you gave me something to lose<br>\r\n<br>\r\nBut when you love someone<br>\r\nYou open up your heart<br>\r\nWhen you love someone<br>\r\nYou make room<br>\r\nIf you love someone<br>\r\nAnd you\'re not afraid to lose \'em<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do<br>\r\nYou probably never loved someone like I do', '2020-01-21 00:46:48', '2020-01-21 00:46:48'),
(34, 'test', 'test', 'test', 'i1579600386.jpg', 'm1579600386.mp3', 'test', '2020-01-21 01:53:06', '2020-01-21 01:53:06'),
(35, 'test', 'test', 'test', 'i1579600428.jpg', 'm1579600428.mp3', 'test', '2020-01-21 01:53:48', '2020-01-21 01:53:48'),
(36, 'Test music1', 'Test Artist2', 'Test Album3', 'i1580036505.jpg', 'm1580036505.mp3', 'This is a test lyrics2', '2020-01-22 00:29:01', '2020-01-26 03:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('louards@emberspec.com', '$2y$10$1wsGkVz6HKjwT2/5UBVvh.xhcWcG7wzumVTXa8AzUDLEJzTtyf6Gi', '2020-01-14 00:55:35');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `birth_date`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cardo', 'Dalisay', 'male', '01/24/2020', 'admin@thenewj.com', NULL, '$2y$10$AL7Utu4CPjeDr.w9/St8Je5GAxvDGfEeYX22E0jRByCIZP5H8oUAe', 1, NULL, '2020-01-22 00:28:08', '2020-01-22 00:28:08'),
(2, 'John', 'Doe', 'male', '02/13/2020', 'john@gmail.com', NULL, '$2y$10$El4huJqrNfbyUkbCjAqNpeeDr3RGT0W80obLj46Kc53UuWL8gYwoi', 0, NULL, '2020-02-14 23:20:54', '2020-02-14 23:20:54'),
(3, 'Jane', 'Dooe', 'female', '02/27/2020', 'jane@gmail.com', NULL, '$2y$10$yR8HHqhLnWdTj/fc4MjPqO1FPC0gQ6IWLDAtRZR9/RARcB7R6.R4W', 0, NULL, '2020-02-15 00:33:28', '2020-02-15 00:33:28'),
(4, 'Darius', 'Noxia', 'male', '02/13/2020', 'test@test.com', NULL, '$2y$10$8Z5P78kP34uTm8M3F9VHWuSdcqJxXpe9oolEDuiwNCtJ1WlRYIIYy', 0, NULL, '2020-02-15 22:43:25', '2020-02-15 22:43:25');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
