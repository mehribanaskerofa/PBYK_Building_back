-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 30 2024 г., 13:34
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `building_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin@gmail.com', '$2y$10$3s.oVtjL4.ZSKQR.H7F.FOvTvNR/VMeSmFuFZXDTqLStXZuDewpqK', '2023-07-06 14:21:13', '2023-07-06 14:21:13');

-- --------------------------------------------------------

--
-- Структура таблицы `benefits`
--

CREATE TABLE `benefits` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `benefits`
--

INSERT INTO `benefits` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'benefit_images/02aa837b-efb0-4296-aa80-73df15ffdada.jpg', 1, '2023-06-29 17:02:45', '2023-06-29 17:02:45'),
(2, 'benefit_images/fb7fc835-a131-42d6-abbf-fa7097bb7c04.jpg', 1, '2023-06-29 17:05:33', '2023-06-29 17:05:40'),
(3, 'benefit_images/62847602-84cf-49ed-b1f2-9da6ad57cbac.jpg', 1, '2023-06-29 17:07:51', '2023-06-29 17:09:08'),
(4, 'benefit_images/08fdd20c-749f-403b-b7d5-2a5699066e1e.jpg', 1, '2023-06-29 17:10:46', '2023-06-29 17:10:46'),
(5, 'benefit_images/89a3db3b-844a-4d2f-9005-c677da51a9b0.jpg', 1, '2023-06-29 17:12:25', '2023-06-29 17:12:25'),
(6, 'benefit_images/2c97a3fa-3f4b-4949-86ec-bf721af4efd7.jpg', 1, '2023-07-03 16:18:00', '2023-07-05 07:10:16'),
(7, 'benefit_images/9724c5a8-c695-4962-8c96-eebcab4124e9.jpg', 1, '2023-07-03 16:26:17', '2023-07-03 16:26:17');

-- --------------------------------------------------------

--
-- Структура таблицы `benefit_translations`
--

CREATE TABLE `benefit_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `benefit_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `benefit_translations`
--

INSERT INTO `benefit_translations` (`id`, `benefit_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'az', 'Uşaqlar üçün oyun parkları', 'Uşaqların şən əhval-ruhiyyəsi üçün nəzərdə tutulmuş oyun parkları canlı rəngləri və yaradıcı strukturu ilə diqqəti cəlb edir.&nbsp; &nbsp; &nbsp;aaa'),
(2, 1, 'en', 'Uşaqlar üçün oyun parkları', 'Uşaqların şən əhval-ruhiyyəsi üçün nəzərdə tutulmuş oyun parkları canlı rəngləri və yaradıcı strukturu ilə diqqəti cəlb edir.&nbsp; a'),
(3, 1, 'ru', 'Uşaqlar üçün oyun parkları', 'Uşaqların şən əhval-ruhiyyəsi üçün nəzərdə tutulmuş oyun parkları canlı rəngləri və yaradıcı strukturu ilə diqqəti cəlb edir.'),
(4, 2, 'az', 'Dəniz mənzərəli mənzillər', 'Binaların hər bir mərtəbəsi ucsuz-bucaqsız dəniz mənzərəsinə açılır. Geniş və panoramalı balkonlardan açılan mənzərə ilə dalğaların səsi sizi ağır iş günündən sonra rahatlaşdırır və sakitləşdirir'),
(5, 2, 'en', 'Dəniz mənzərəli mənzillər', 'Binaların hər bir mərtəbəsi ucsuz-bucaqsız dəniz mənzərəsinə açılır. Geniş və panoramalı balkonlardan açılan mənzərə ilə dalğaların səsi sizi ağır iş günündən sonra rahatlaşdırır və sakitləşdirir.'),
(6, 2, 'ru', 'Dəniz mənzərəli mənzillər', 'Binaların hər bir mərtəbəsi ucsuz-bucaqsız dəniz mənzərəsinə açılır. Geniş və panoramalı balkonlardan açılan mənzərə ilə dalğaların səsi sizi ağır iş günündən sonra rahatlaşdırır və sakitləşdirir.'),
(7, 3, 'az', 'Yerüstü parking', 'Yaşayış kompleksinin ərazısı bütün ehtiyaclarınızı qarşılayır.750 yerlik yerüstü parking ərazisi ilə maşınlarınızı harada saxlayacağınızı düşünməyə ehtiyac yoxdur.'),
(8, 3, 'en', 'Yerüstü parking', 'Yaşayış kompleksinin ərazısı bütün ehtiyaclarınızı qarşılayır. \r\n750 yerlik yerüstü parking ərazisi ilə maşınlarınızı harada saxlayacağınızı düşünməyə ehtiyac yoxdur.'),
(9, 3, 'ru', 'Yerüstü parking', 'Yaşayış kompleksinin ərazısı bütün ehtiyaclarınızı qarşılayır. \r\n750 yerlik yerüstü parking ərazisi ilə maşınlarınızı harada saxlayacağınızı düşünməyə ehtiyac yoxdur.'),
(10, 4, 'az', 'Alış-veriş obyektləri', 'Yaşayış kompleksinin sakinləri alış-veriş üçün yer axtararaq vaxt itirmir. Birinci mərtəbədə ən zəruri əşyaların olduğu satış obyektləri var: mağazalar, apteklər, kafelər, gözəllik salonları.'),
(11, 4, 'en', 'Alış-veriş obyektləri', 'Yaşayış kompleksinin sakinləri alış-veriş  üçün yer axtararaq vaxt itirmir. Birinci mərtəbədə ən zəruri əşyaların olduğu satış obyektləri var: mağazalar, apteklər, kafelər, gözəllik salonları.'),
(12, 4, 'ru', 'Alış-veriş obyektləri', 'Yaşayış kompleksinin sakinləri alış-veriş  üçün yer axtararaq vaxt itirmir. Birinci mərtəbədə ən zəruri əşyaların olduğu satış obyektləri var: mağazalar, apteklər, kafelər, gözəllik salonları.'),
(13, 5, 'az', 'Təhlükəsizlik sistemi', 'Sakinlərin təhlükəsizliyi üçün 7\\24 mühafizə xidməti, domafon və CCTV sistemi mövcuddur.'),
(14, 5, 'en', 'Təhlükəsizlik sistemi', 'Sakinlərin təhlükəsizliyi üçün 7\\24 mühafizə xidməti, domafon və CCTV sistemi mövcuddur.'),
(15, 5, 'ru', 'Təhlükəsizlik sistemi', 'Sakinlərin təhlükəsizliyi üçün 7\\24 mühafizə xidməti, domafon və CCTV sistemi mövcuddur.'),
(16, 6, 'az', 'Ofis otaqları', 'Məhsuldar iş şəraiti yaratmaq üçün təbii işıq düşən otaqlar müasir şəraitlə hazırlanmışdır.'),
(17, 6, 'en', 'Ofis otaqları', 'Məhsuldar iş şəraiti yaratmaq üçün təbii işıq\r\ndüşən otaqlar müasir şəraitlə hazırlanmışdır.'),
(18, 6, 'ru', 'Ofis otaqları', 'Məhsuldar iş şəraiti yaratmaq üçün təbii işıq\ndüşən otaqlar müasir şəraitlə hazırlanmışdır.'),
(19, 7, 'az', 'Qapalı parkinq', '1600 maşınlıq yeraltı dayanacaq vasitəsilə kompleksin ərazisi sakit istirahət məkanınaçevriləcək.'),
(20, 7, 'en', 'Qapalı parkinq', '1600 maşınlıq yeraltı dayanacaq vasitəsilə kompleksin ərazisi sakit istirahət məkanına çevriləcək.'),
(21, 7, 'ru', 'Qapalı parkinq', '1600 maşınlıq yeraltı dayanacaq vasitəsilə kompleksin ərazisi sakit istirahət məkanına çevriləcək.');

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `block` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `project_id`, `block`, `image`, `layout`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'house_layouts/1c3a7000-4e6b-4dbd-acca-cf027488dddd.jpg', 'house_layouts/a78df321-bc09-40ee-b012-17f04f8dcded.png', '2023-07-01', '2023-06-26 06:52:33', '2023-06-29 17:46:56'),
(2, 1, 2, 'house_layouts/ba60fa39-7b01-43cd-9b51-7ed6acefd90c.png', 'house_layouts/7a8f99cc-5522-41fe-aa34-8a052ab95e04.png', '2023-07-08', '2023-06-29 17:46:40', '2023-07-06 03:06:25'),
(3, 2, 3, 'house_layouts/c2fabe58-c749-4bac-8d31-cec75aea91f6.jpg', 'house_layouts/2e390320-4536-4344-975d-fb956af1d3b5.png', '2023-07-07', '2023-06-29 17:47:32', '2023-06-29 17:47:32'),
(4, 2, 4, 'house_layouts/d6cb9a4b-ca6d-4c05-94fb-aa54a51bc1c5.jpg', 'house_layouts/e67f1494-57e3-4349-9f3d-c2eb440017a3.png', '2023-07-07', '2023-06-29 17:47:59', '2023-06-29 17:47:59'),
(5, 3, 5, 'house_layouts/0f66de5e-b39e-47fd-b0bf-edbf85ccb942.jpg', 'house_layouts/bb724485-af1e-46b1-a551-fb17b193cbe7.png', '2023-07-08', '2023-06-29 17:50:57', '2023-06-29 17:50:57'),
(6, 3, 6, 'house_layouts/ed3e5fa2-9291-49bb-8357-3ac56fd2840b.jpg', 'house_layouts/5d88e781-2f12-4c43-98b7-8ef983d2a12c.png', '2023-07-08', '2023-06-29 17:51:35', '2023-06-29 17:51:35'),
(7, 4, 7, 'house_layouts/e9d6d794-9cde-4a8b-8e6c-03ad03c7a372.jpg', 'house_layouts/6c5bab2a-c65e-444f-8247-68da16a2e1de.png', '2023-07-08', '2023-06-29 17:51:59', '2023-06-29 17:51:59'),
(8, 4, 8, 'house_layouts/e68a6664-fef8-44f4-94a2-e0c5094cea2f.jpg', 'house_layouts/cdb5d6c1-10db-4b79-878e-3c33d3fa048a.png', '2023-07-08', '2023-06-29 17:52:20', '2023-06-29 17:52:20'),
(9, 5, 9, 'house_layouts/24401bb4-f50d-43c8-ba0a-fbb84ae29981.jpg', 'house_layouts/471029e5-fa0e-4aa3-ab18-6e6dedd7977a.png', '2023-07-01', '2023-06-29 17:52:49', '2023-06-29 17:52:49'),
(10, 5, 10, 'house_layouts/3f4f7b50-6add-4dcc-9f07-a1f5198e82a6.jpg', 'house_layouts/aba3034a-80c7-4f54-8852-b103cfbb5295.png', '2023-07-06', '2023-06-29 17:53:17', '2023-06-29 17:53:17');

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-06-29 17:24:24', '2023-06-29 17:24:24');

-- --------------------------------------------------------

--
-- Структура таблицы `company_translations`
--

CREATE TABLE `company_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_translations`
--

INSERT INTO `company_translations` (`id`, `company_id`, `locale`, `title`) VALUES
(1, 1, 'az', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ'),
(2, 1, 'en', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ'),
(3, 1, 'ru', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `finishings`
--

CREATE TABLE `finishings` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `finishings`
--

INSERT INTO `finishings` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'finishing_images/4b56c2b7-ca4c-4cf7-a975-7bfe4747f2ed.jpg', 1, '2023-06-22 09:05:36', '2023-07-05 05:01:14'),
(2, 'finishing_images/81c32e4d-4cbc-4329-9258-0e515aa83194.jpg', 1, '2023-07-05 05:02:09', '2023-07-05 05:02:09'),
(3, 'finishing_images/09cf255e-59fa-426e-8b7d-198bce2ee03b.jpg', 1, '2023-07-05 05:02:57', '2023-07-05 05:21:37');

-- --------------------------------------------------------

--
-- Структура таблицы `finishing_translations`
--

CREATE TABLE `finishing_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `finishing_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `finishing_translations`
--

INSERT INTO `finishing_translations` (`id`, `finishing_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'az', 'İstirahət zonası', 'ghcf'),
(2, 1, 'en', 'İstirahət zonası', 'Duis qui voluptates'),
(3, 1, 'ru', 'İstirahət zonası', 'Nobis fugit cillum'),
(4, 2, 'az', 'İmkanlar', NULL),
(5, 2, 'en', 'İmkanlar', NULL),
(6, 2, 'ru', 'İmkanlar', NULL),
(7, 3, 'az', 'MƏNZİLLƏR', 'Menziller'),
(8, 3, 'en', 'MƏNZİLLƏR', 'Menziller'),
(9, 3, 'ru', 'MƏNZİLLƏR', 'Menziller');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'gallery_images/d17ad7b0-ab6c-401d-9a1d-7e6c99f1c017.jpg', 1, '2023-06-20 05:49:16', '2023-06-29 17:59:26'),
(2, 'gallery_images/61a42599-1051-4dbc-b047-d49536d047d3.jpg', 1, '2023-06-20 05:52:43', '2023-06-29 17:59:51'),
(3, 'gallery_images/c0c4e88a-ec2f-440e-9cb3-d358086694b4.jpg', 1, '2023-06-20 05:54:46', '2023-07-05 01:36:18'),
(4, 'gallery_images/837636e2-51e0-49fa-8d02-f8f8bbb3dce0.webp', 1, '2023-07-24 02:22:19', '2023-07-24 02:27:02');

-- --------------------------------------------------------

--
-- Структура таблицы `grands`
--

CREATE TABLE `grands` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `grands`
--

INSERT INTO `grands` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'grand_images/923f1d44-bec4-4bd7-b406-ed95fa4d4021.jpg', 1, '2023-06-29 17:16:35', '2023-07-05 01:36:05'),
(2, 'grand_images/2c161c08-ec0c-4b16-a92b-20bd786d06d7.jpg', 1, '2023-06-29 17:17:22', '2023-07-05 01:38:52'),
(3, 'grand_images/64dbbc19-d4ce-496e-a8a3-055c838b4a5e.jpg', 1, '2023-06-29 17:18:07', '2023-07-05 01:39:55'),
(4, 'grand_images/0923efb0-e4db-4a1e-b901-b9fb09817c46.jpg', 1, '2023-06-29 17:18:54', '2023-07-05 01:40:36'),
(5, 'grand_images/9eb33e2a-3333-4117-a06c-84077d6e9525.jpg', 1, '2023-06-29 17:19:42', '2023-07-05 05:25:51'),
(6, 'grand_images/8c72bd39-f8bb-4141-bc32-09c1844c0a32.jpg', 1, '2023-06-29 17:20:30', '2023-06-29 17:20:30');

-- --------------------------------------------------------

--
-- Структура таблицы `grand_translations`
--

CREATE TABLE `grand_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `grand_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `grand_translations`
--

INSERT INTO `grand_translations` (`id`, `grand_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'az', 'Studio tipli mənzillər', 'Səmərəli və yığcam yasamdan həzz alın.'),
(2, 1, 'en', 'Studio tipli mənzillər', 'Səmərəli və yığcam yasamdan həzz alın.'),
(3, 1, 'ru', 'Studio tipli mənzillər', 'Səmərəli və yığcam yasamdan həzz alın.'),
(4, 2, 'az', 'Dubleks tipli mənzillər', 'Geniş evin cazibəsini bu mənzillərlə yaşayın.'),
(5, 2, 'en', 'Dubleks tipli mənzillər', 'Geniş evin cazibəsini bu mənzillərlə yaşayın.'),
(6, 2, 'ru', 'Dubleks tipli mənzillər', 'Geniş evin cazibəsini bu mənzillərlə yaşayın.'),
(7, 3, 'az', 'Penthouse tipli mənzillər', 'Panoramik mənzərənin və dəbdəbəli şəraitin birləşdiyi mənzillər təklif edirik.'),
(8, 3, 'en', 'Penthouse tipli mənzillər', 'Panoramik mənzərənin və dəbdəbəli şəraitin birləşdiyi mənzillər təklif edirik.'),
(9, 3, 'ru', 'Penthouse tipli mənzillər', 'Panoramik mənzərənin və dəbdəbəli şəraitin birləşdiyi mənzillər təklif edirik.'),
(10, 4, 'az', 'Sysmoloji dayanıqlıq', 'Sysmoloji hərəkətlərə qarşı dayanıqlı mənzillərdə yaşayın.'),
(11, 4, 'en', 'Sysmoloji dayanıqlıq', 'Sysmoloji hərəkətlərə qarşı dayanıqlı mənzillərdə yaşayın.'),
(12, 4, 'ru', 'Sysmoloji dayanıqlıq', 'Sysmoloji hərəkətlərə qarşı dayanıqlı mənzillərdə yaşayın.'),
(13, 5, 'az', 'Müasir texnologiya', 'Mənzillər müasir texnologiya və MDB tikinti sistemi ilə inşa edilib.'),
(14, 5, 'en', 'Müasir texnologiya', 'Mənzillər müasir texnologiya və MDB tikinti sistemi ilə inşa edilib.'),
(15, 5, 'ru', 'Müasir texnologiya', 'Mənzillər müasir texnologiya və MDB tikinti sistemi ilə inşa edilib.'),
(16, 6, 'az', 'Hündür tavan', 'Daha geniş ərazi, daha təmiz mənzillər sizlər üçün düşünülüb.'),
(17, 6, 'en', 'Hündür tavan', 'Daha geniş ərazi, daha təmiz mənzillər sizlər üçün düşünülüb.'),
(18, 6, 'ru', 'Hündür tavan', 'Daha geniş ərazi, daha təmiz mənzillər sizlər üçün düşünülüb.');

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE `houses` (
  `id` bigint UNSIGNED NOT NULL,
  `block_id` bigint UNSIGNED NOT NULL,
  `floor` int NOT NULL,
  `room` int NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`id`, `block_id`, `floor`, `room`, `area`, `layout`, `date`, `active`, `created_at`, `updated_at`) VALUES
(2, 1, 11, 1, '60.5', 'house_layouts/f5d8f39c-ab4f-4353-8015-948fd1aa4c38.jpg', '2023-08-04', 1, '2023-06-26 07:39:00', '2023-07-07 05:25:01'),
(3, 4, 10, 2, '91.7', 'house_layouts/e87532f2-13b4-4af8-9e09-5789db65cd57.jpg', '2023-08-03', 1, '2023-06-26 07:39:16', '2023-07-07 05:25:32'),
(4, 8, 8, 3, '145.5', 'house_layouts/9d3ee972-b928-4581-b937-7781a0f01d48.jpg', '2023-08-03', 1, '2023-06-26 07:41:23', '2023-07-07 05:25:59'),
(5, 3, 10, 1, '61.1', 'house_layouts/53ad309a-a33e-4327-8da2-848c2969f9c3.jpg', '2023-08-03', 1, '2023-06-26 07:42:03', '2023-07-07 05:26:21'),
(6, 2, 8, 6, '386.5', 'house_layouts/f9b9e876-b5a8-486d-90c6-7d7b89a14880.png', '2023-07-08', 1, '2023-06-26 07:43:10', '2023-07-07 05:26:52');

-- --------------------------------------------------------

--
-- Структура таблицы `house_translations`
--

CREATE TABLE `house_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `house_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `house_translations`
--

INSERT INTO `house_translations` (`id`, `house_id`, `locale`, `price`) VALUES
(4, 2, 'az', '100 000 azn'),
(5, 2, 'en', '50 000 azn'),
(6, 2, 'ru', '55 000 azn'),
(7, 3, 'az', '70 000 azn'),
(8, 3, 'en', '70 000 azn'),
(9, 3, 'ru', '70 000 azn'),
(10, 4, 'az', '75 000 azn'),
(11, 4, 'en', '75 000 azn'),
(12, 4, 'ru', '75 000 azn'),
(13, 5, 'az', '170 000 azn'),
(14, 5, 'en', '170 000 azn'),
(15, 5, 'ru', '170 000 azn'),
(16, 6, 'az', '90 000 azn'),
(17, 6, 'en', '90 000 azn'),
(18, 6, 'ru', '90 000 azn');

-- --------------------------------------------------------

--
-- Структура таблицы `infrastructures`
--

CREATE TABLE `infrastructures` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `infrastructures`
--

INSERT INTO `infrastructures` (`id`, `image`, `date`, `active`, `created_at`, `updated_at`) VALUES
(1, 'infrastructure_images/c84acecf-59dd-4b1a-aba4-de83335a2609.jpg', NULL, 1, '2023-07-03 17:08:36', '2023-07-05 01:43:17'),
(2, 'infrastructure_images/1e711ebf-d57c-4957-858d-1c6d06cb8c59.jpg', NULL, 1, '2023-07-03 17:09:21', '2023-07-05 06:46:08'),
(3, 'infrastructure_images/e911a4a3-6624-4ade-97b5-39727781b3c4.jpg', NULL, 1, '2023-07-03 17:10:22', '2023-07-05 06:45:29');

-- --------------------------------------------------------

--
-- Структура таблицы `infrastructure_translations`
--

CREATE TABLE `infrastructure_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `infrastructure_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `infrastructure_translations`
--

INSERT INTO `infrastructure_translations` (`id`, `infrastructure_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'az', 'Heydər Əliyev parkı', 'Heydər Əliyev parkı'),
(2, 1, 'en', 'Heydər Əliyev parkı', 'Heydər Əliyev parkı'),
(3, 1, 'ru', 'Heydər Əliyev parkı', 'Heydər Əliyev parkı'),
(4, 2, 'az', 'Dənizkənarı Bulvar', 'Dənizkənarı Bulvar'),
(5, 2, 'en', 'Dənizkənarı Bulvar', 'Dənizkənarı Bulvar'),
(6, 2, 'ru', 'Dənizkənarı Bulvar', 'Dənizkənarı Bulvar'),
(7, 3, 'az', 'Amour Restoranı', 'Amour Restoranı'),
(8, 3, 'en', 'Amour Restoranı', 'Amour Restoranı'),
(9, 3, 'ru', 'Amour Restoranı', 'Amour Restoranı');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `url`, `active`, `created_at`, `updated_at`) VALUES
(1, '#about', 1, '2023-07-03 15:18:44', '2023-07-03 15:18:44'),
(2, '#location', 1, '2023-07-03 15:19:59', '2023-07-03 15:19:59'),
(3, '#benefits', 1, '2023-07-03 15:20:32', '2023-07-03 15:20:32'),
(4, '#parking', 1, '2023-07-03 15:21:12', '2023-07-03 15:21:12'),
(5, '#storagerooms', 1, '2023-07-03 15:21:38', '2023-07-03 15:29:56'),
(6, '#apartments', 1, '2023-07-03 15:22:06', '2023-07-03 15:30:23'),
(7, '#infrastructure', 1, '2023-07-03 15:22:31', '2023-07-03 15:22:31'),
(8, '#finishing', 1, '2023-07-03 15:23:09', '2023-07-03 15:31:48'),
(9, '#developer', 1, '2023-07-03 15:23:49', '2023-07-03 15:32:22'),
(10, '#gallery', 1, '2023-07-03 15:24:16', '2023-07-03 15:24:16');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_translations`
--

CREATE TABLE `menu_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_translations`
--

INSERT INTO `menu_translations` (`id`, `menu_id`, `locale`, `name`) VALUES
(1, 1, 'az', 'Haqqında'),
(2, 1, 'en', 'Haqqında'),
(3, 1, 'ru', 'Haqqında'),
(4, 2, 'az', 'Ünvan'),
(5, 2, 'en', 'Ünvan'),
(6, 2, 'ru', 'Ünvan'),
(7, 3, 'az', 'Üstünlüklər'),
(8, 3, 'en', 'Üstünlüklər'),
(9, 3, 'ru', 'Üstünlüklər'),
(10, 4, 'az', 'Parkinq'),
(11, 4, 'en', 'Parkinq'),
(12, 4, 'ru', 'Parkinq'),
(13, 5, 'az', 'Ofis otaqları'),
(14, 5, 'en', 'Ofis otaqları'),
(15, 5, 'ru', 'Ofis otaqları'),
(16, 6, 'az', 'Mənzillər'),
(17, 6, 'en', 'Mənzillər'),
(18, 6, 'ru', 'Mənzillər'),
(19, 7, 'az', 'İnfrastruktur'),
(20, 7, 'en', 'İnfrastruktur'),
(21, 7, 'ru', 'İnfrastruktur'),
(22, 8, 'az', 'Layihə'),
(23, 8, 'en', 'Layihə'),
(24, 8, 'ru', 'Layihə'),
(25, 9, 'az', 'Şirkət haqqında'),
(26, 9, 'en', 'Şirkət haqqında'),
(27, 9, 'ru', 'Şirkət haqqında'),
(28, 10, 'az', 'Qalereya'),
(29, 10, 'en', 'Qalereya'),
(30, 10, 'ru', 'Qalereya');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_16_230113_create_admin_table', 1),
(3, '2023_05_23_123243_create_products_table', 1),
(4, '2023_05_24_125845_create_product_images_table', 1),
(5, '2023_06_16_051805_create_benefits_table', 1),
(6, '2023_06_16_051805_create_finishings_table', 1),
(7, '2023_06_16_051805_create_galleries_table', 1),
(8, '2023_06_16_051805_create_grands_table', 1),
(9, '2023_06_16_051805_create_infrastructures_table', 1),
(10, '2023_06_16_051805_create_menus_table', 1),
(11, '2023_06_16_051805_create_pages_table', 1),
(12, '2023_06_16_051805_create_rare_formats_table', 1),
(13, '2023_06_16_051805_create_teams_table', 1),
(15, '2023_06_16_051805_create_statics_table', 2),
(16, '2023_06_16_051805_create_contact_table', 3),
(17, '2023_06_16_051805_create_settings_table', 3),
(24, '2023_06_22_053829_create_company_table', 4),
(25, '2023_06_22_053907_create_project_table', 4),
(26, '2023_06_22_053936_create_block_table', 4),
(27, '2023_06_22_053936_create_house_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'page_images/015183cf-282d-412f-8b54-042b8bd604cf.jpg', 1, '2023-06-29 16:41:22', '2023-06-29 16:49:04'),
(2, 'page_images/4e6b7c55-82c4-4453-8f68-8c3b66abacf2.jpg', 1, '2023-06-29 16:57:08', '2023-07-03 17:54:53'),
(3, 'page_images/58eada81-7f0a-4940-a557-9327853fd78f.jpg', 1, '2023-06-29 17:01:12', '2023-06-29 17:01:12'),
(4, 'page_images/739e3bf2-7e78-43bf-b8f9-6d6ad0406a2f.svg', 1, '2023-07-03 16:02:19', '2023-07-03 16:02:19'),
(5, 'page_images/88b0da15-3d46-4822-8717-d80938ad0220.jpg', 1, '2023-07-03 16:35:50', '2023-07-05 09:14:08'),
(6, 'page_images/49905495-7258-4ea3-a0bc-8a3b860fffef.jpg', 1, '2023-07-03 16:41:08', '2023-07-03 16:41:08'),
(7, 'page_images/ffced80e-0013-4055-9c97-e389162de6cd.jpg', 1, '2023-07-04 04:42:26', '2023-07-04 04:56:55'),
(8, 'page_images/8727a84f-4bb0-4660-b0d2-dbab38f66b63.jpg', 1, '2023-07-04 16:50:44', '2023-07-04 16:50:44'),
(9, 'page_images/71bc4a18-a320-4622-b996-c9f01164334a.jpg', 1, '2023-07-04 16:53:25', '2023-07-05 01:46:52'),
(10, 'page_images/db9069f1-42af-4033-9c3d-527aab65fa0f.jpg', 1, '2023-07-04 16:54:42', '2023-07-05 01:47:55'),
(11, 'page_images/a230e927-2bc8-4db3-997d-a05f57a70f29.jpg', 1, '2023-07-04 16:56:01', '2023-07-05 01:45:58'),
(12, 'page_images/86b071ef-b624-4467-8302-47c48bf989aa.jpg', 1, '2023-07-05 04:58:41', '2023-07-05 04:58:41');

-- --------------------------------------------------------

--
-- Структура таблицы `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `slug`, `button`, `description`) VALUES
(1, 1, 'az', 'Dəniz sahilində Dərin bir nəfəs alın', 'about', 'about', '<p>                                           Şəhərin səs-küyündən uzaq, Xəzərin sahilində dənizlə iç-içə yaşam vəd edən Park Bulvar yaşayış kompleksinə xoş gəldiniz.</p><p>5 bina, 9 penthouse, 720 mənzilin yer aldığı layihədə hər günə möhtəşəm mənzərə ilə oyanın.\r\n                                           </p>'),
(2, 1, 'en', 'Dəniz sahilində Dərin bir nəfəs alın', 'about', 'about', '<p>                                           Şəhərin səs-küyündən uzaq, Xəzərin sahilində dənizlə iç-içə yaşam vəd edən Park Bulvar yaşayış kompleksinə xoş gəldiniz!</p><p>5 bina, 9 penthouse, 720 mənzilin yer aldığı layihədə hər günə möhtəşəm mənzərə ilə oyanın.\r\n                                           </p>'),
(3, 1, 'ru', 'Dəniz sahilində Dərin bir nəfəs alın', 'about', 'about', '<p>                                           Şəhərin səs-küyündən uzaq, Xəzərin sahilində dənizlə iç-içə yaşam vəd edən Park Bulvar yaşayış kompleksinə xoş gəldiniz! </p><p>5 bina, 9 penthouse, 720 mənzilin yer aldığı layihədə hər günə möhtəşəm mənzərə ilə oyanın.\r\n                                           </p>'),
(4, 2, 'az', 'ÇİMƏRLİYƏ DAHA YAXIN', 'river', 'river', 'Ən yaxın qumlu çimərliyə qısa bir məsafədə yerləşən bu təmirli mənzillər sizi qarşılamağı gözləyir.'),
(5, 2, 'en', 'ÇİMƏRLİYƏ DAHA YAXIN', 'river', 'river', 'Ən yaxın qumlu çimərliyə qısa bir məsafədə yerləşən bu təmirli mənzillər sizi qarşılamağı gözləyir.'),
(6, 2, 'ru', 'ÇİMƏRLİYƏ DAHA YAXIN', 'river', 'river', 'Ən yaxın qumlu çimərliyə qısa bir məsafədə yerləşən bu təmirli mənzillər sizi qarşılamağı gözləyir.'),
(7, 3, 'az', 'BURADA YAŞAMAQ İSTƏYİRSƏN?', 'contact', 'Göndər', 'ƏLAQƏ NÖMRƏNİZİ QEYD EDİN, BİZ SİZƏ ZƏNG EDƏCƏYİK.'),
(8, 3, 'en', 'BURADA YAŞAMAQ İSTƏYİRSƏN?', 'contact', 'Göndər', 'ƏLAQƏ NÖMRƏNİZİ QEYD EDİN, BİZ SİZƏ ZƏNG EDƏCƏYİK.'),
(9, 3, 'ru', 'BURADA YAŞAMAQ İSTƏYİRSƏN?', 'contact', 'Göndər', 'ƏLAQƏ NÖMRƏNİZİ QEYD EDİN, BİZ SİZƏ ZƏNG EDƏCƏYİK.'),
(10, 4, 'az', 'DƏNİZ SAHİLİNƏ 50 METR', 'location', 'ŞƏHƏRİN MƏRKƏZİNƏ', 'Bulvar Park yaşayış kompleksini Sumqayıt bulvarına eyni zamanda şəhərin mərkəzinə çox yaxın ərazidə yerləşir. Keyfiyyətli yaşamın yüksək standartlarını bizimlə kəşf edin.! Ehtiyacınız olan hər şeyin bir arada olduğu məkan - Bulvar Park Yaşayış Kompleksi'),
(11, 4, 'en', 'DƏNİZ SAHİLİNƏ 50 METR', 'location', 'ŞƏHƏRİN MƏRKƏZİNƏ', 'Bulvar Park yaşayış kompleksini Sumqayıt bulvarına eyni zamanda şəhərin mərkəzinə çox yaxın ərazidə yerləşir. Keyfiyyətli yaşamın yüksək standartlarını bizimlə kəşf edin. \r\n<br><br>\r\n\r\n\r\n\r\n Ehtiyacınız olan hər şeyin bir arada olduğu məkan - Bulvar Park Yaşayış Kompleksi'),
(12, 4, 'ru', 'DƏNİZ SAHİLİNƏ 50 METR', 'location', 'ŞƏHƏRİN MƏRKƏZİNƏ', 'Bulvar Park yaşayış kompleksini Sumqayıt bulvarına eyni zamanda şəhərin mərkəzinə çox yaxın ərazidə yerləşir. Keyfiyyətli yaşamın yüksək standartlarını bizimlə kəşf edin. \r\n<br><br>\r\n\r\n\r\n\r\n Ehtiyacınız olan hər şeyin bir arada olduğu məkan - Bulvar Park Yaşayış Kompleksi'),
(13, 5, 'az', 'Fərdi dizaynlı mənzillər', 'apart', 'Öz mənzilini seç', 'Perspektiv sakinin istəyi ilə alternativ,mənzil planları, dizayn və təmir, işlərindən yararlana bilərsiz.'),
(14, 5, 'en', 'Fərdi dizaynlı mənzillər', 'apart', 'Öz mənzilini seç', 'Perspektiv sakinin istəyi ilə alternativ mənzil planları, dizayn və təmir işlərindən yararlana bilərsiz.'),
(15, 5, 'ru', 'Fərdi dizaynlı mənzillər', 'apart', 'Öz mənzilini seç', 'Perspektiv sakinin istəyi ilə alternativ mənzil planları, dizayn və təmir işlərindən yararlana bilərsiz.'),
(16, 6, 'az', 'Yerüstü dayanacaq', 'parking', 'Dayanacağını seç', '750 yerlik yerüstü dayanacaq ərazisindən öz,mənzilinə yaxın dayanacaq sənin olsun.'),
(17, 6, 'en', 'Yerüstü dayanacaq', 'parking', 'Dayanacağını seç', '750 yerlik yerüstü dayanacaq ərazisindən öz mənzilinə yaxın dayanacaq sənin olsun.'),
(18, 6, 'ru', 'Yerüstü dayanacaq', 'parking', 'Dayanacağını seç', '750 yerlik yerüstü dayanacaq ərazisindən öz mənzilinə yaxın dayanacaq sənin olsun.'),
(19, 7, 'az', 'Tikinti sahəsində 15 ildən çox təcrübəyə  malik şirkətimiz təqdim etdiyi layihələrin keyfiyyəti ilə tanınır.', 'developer', 'developer', 'Ən müasir texnologiyalardan, istifadə etməklə və sadələşdirilmiş prosesləri, tətbiq etməklə, keyfiyyətli tikinti, məhsulları ilə adınıza yaraşan, mənzillər inşa edirik.'),
(20, 7, 'en', 'Tikinti sahəsində 15 ildən çox təcrübəyə  malik şirkətimiz təqdim etdiyi layihələrin keyfiyyəti ilə tanınır.', 'developer', 'developer', 'Ən müasir texnologiyalardan istifadə etməklə və sadələşdirilmiş prosesləri tətbiq etməklə, keyfiyyətli tikinti məhsulları ilə adınıza yaraşan mənzillər inşa edirik.'),
(21, 7, 'ru', 'Tikinti sahəsində 15 ildən çox təcrübəyə  malik şirkətimiz təqdim etdiyi layihələrin keyfiyyəti ilə tanınır.', 'developer', 'developer', 'Ən müasir texnologiyalardan istifadə etməklə və sadələşdirilmiş prosesləri tətbiq etməklə, keyfiyyətli tikinti məhsulları ilə adınıza yaraşan mənzillər inşa edirik.'),
(22, 8, 'az', 'Dəbdəbəli həyata daha yaxın - Bulvar Park yaşayış kompleksi', 'finish', '300 m', 'finish'),
(23, 8, 'en', 'Dəbdəbəli həyata daha yaxın - Bulvar Park yaşayış kompleksi', 'finish', '300 m', 'finisf'),
(24, 8, 'ru', 'Dəbdəbəli həyata daha yaxın - Bulvar Park yaşayış kompleksi', 'finish', '300 m', 'finish'),
(25, 9, 'az', 'Dənizkənarı Bulvar', 'bulvar', '50 m', 'İstirahət mərkəzi'),
(26, 9, 'en', 'Dənizkənarı Bulvar', 'bulvar', '50 m', 'İstirahət mərkəzi'),
(27, 9, 'ru', 'Dənizkənarı Bulvar', 'bulvar', '50 m', 'İstirahət mərkəzi'),
(28, 10, 'az', 'İstedad Liseyi', 'lisey', '200 m', 'Təhsil ocağı'),
(29, 10, 'en', 'İstedad Liseyi', 'lisey', '200 m', 'Təhsil ocağı'),
(30, 10, 'ru', 'İstedad Liseyi', 'lisey', '200 m', 'Təhsil ocağı'),
(31, 11, 'az', 'Heydər Əliyev Parkı', 'park', '500 m', 'İstirahət mərkəzi'),
(32, 11, 'en', 'Heydər Əliyev Parkı', 'park', '500 m', 'İstirahət mərkəzi'),
(33, 11, 'ru', 'Heydər Əliyev Parkı', 'park', '500 m', 'İstirahət mərkəzi'),
(34, 12, 'az', 'Amour Restoranı', 'amour', '100 m', 'Istirahet zonasi'),
(35, 12, 'en', 'Amour Restoranı', 'amour', '100 m', 'Amour Restoranı'),
(36, 12, 'ru', 'Amour Restoranı', 'amour', '100 m', 'Amour Restoranı');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` int NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `image`, `floor`, `date`, `created_at`, `updated_at`) VALUES
(1, 'project_images/840fc6bd-0f49-43c7-9bd7-222d39f844dc.jpg', 14, '2023-09-14', '2023-06-26 06:31:45', '2023-06-29 17:27:30'),
(2, 'project_images/c8b7aae5-2193-4a77-bb08-7119beb5d7f8.jpg', 14, '2023-07-08', '2023-06-29 17:28:53', '2023-06-29 17:28:53'),
(3, 'project_images/8688fec1-4a6e-422c-8106-cb7b813b18ec.jpg', 14, '2023-07-08', '2023-06-29 17:30:07', '2023-06-29 17:30:07'),
(4, 'project_images/5ad6a305-517b-4019-8084-3df651efd719.jpg', 14, '2023-07-08', '2023-06-29 17:31:08', '2023-06-29 17:31:08'),
(5, 'project_images/05a91e08-b0cb-45ed-9e52-2e3699f0d186.jpg', 14, '2023-07-08', '2023-06-29 17:32:42', '2023-06-29 17:32:42');

-- --------------------------------------------------------

--
-- Структура таблицы `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project_translations`
--

INSERT INTO `project_translations` (`id`, `project_id`, `locale`, `title`, `address`) VALUES
(1, 1, 'az', 'Building 1', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 1'),
(2, 1, 'en', 'Building 1', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 1'),
(3, 1, 'ru', 'Building 1', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 1'),
(4, 2, 'az', 'Building 2', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 2'),
(5, 2, 'en', 'Building 2', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 2'),
(6, 2, 'ru', 'Building 2', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 2'),
(7, 3, 'az', 'Building 3', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 3'),
(8, 3, 'en', 'Building 3', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 3'),
(9, 3, 'ru', 'Building 3', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 3'),
(10, 4, 'az', 'Building 4', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 4'),
(11, 4, 'en', 'Building 4', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 4'),
(12, 4, 'ru', 'Building 4', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 4'),
(13, 5, 'az', 'Building 5', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 5'),
(14, 5, 'en', 'Building 5', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 5'),
(15, 5, 'ru', 'Building 5', 'BULVAR PARK YAŞAYIŞ KOMPLEKSİ 5');

-- --------------------------------------------------------

--
-- Структура таблицы `rare_formats`
--

CREATE TABLE `rare_formats` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rare_formats`
--

INSERT INTO `rare_formats` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'rare_format_images/be8708c7-a13d-452f-ae32-38c52e09d2c4.jpg', 1, '2023-07-04 02:00:31', '2023-07-04 02:00:31'),
(2, 'rare_format_images/3fc96bd1-73cd-456f-8f1a-942dd89b12f6.jpg', 1, '2023-07-04 02:02:06', '2023-07-04 02:19:10'),
(3, 'rare_format_images/9db2d2b4-77fe-4c89-b3c1-a52983661578.jpg', 1, '2023-07-04 02:03:01', '2023-07-04 02:03:01'),
(4, 'rare_format_images/9f058b55-0f56-481a-b3b9-c0e56a8f6e24.jpg', 1, '2023-07-04 02:04:09', '2023-07-05 08:01:32'),
(5, 'rare_format_images/b0ae0326-d1f6-4104-950d-a3bb6684157d.jpg', 1, '2023-07-04 02:05:18', '2023-07-04 02:20:36');

-- --------------------------------------------------------

--
-- Структура таблицы `rare_format_translations`
--

CREATE TABLE `rare_format_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `rare_format_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rare_format_translations`
--

INSERT INTO `rare_format_translations` (`id`, `rare_format_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'az', 'Mənzillərin tavandan olan məsafəsi 3 m', 'Hündür tavanlı mənzillərdə daha çox yer, daha çox sərbəstlik, daha çox hava və işıq'),
(2, 1, 'en', 'Mənzillərin tavandan olan məsafəsi 3 m', 'Hündür tavanlı mənzillərdə daha çox yer, daha çox sərbəstlik, daha çox hava və işıq'),
(3, 1, 'ru', 'Mənzillərin tavandan olan məsafəsi 3 m', 'Hündür tavanlı mənzillərdə daha çox yer, daha çox sərbəstlik, daha çox hava və işıq'),
(4, 2, 'az', 'Zövqünüzə uyğun mənzillər', '5 bina, 10 blokdan ibarət yaşayış kompleksində 1, 2, 3, 4 otaqlı və penthouse tipli mənzillər var.'),
(5, 2, 'en', 'Zövqünüzə uyğun mənzillər', '5 bina, 10 blokdan ibarət yaşayış kompleksində 1, 2, 3, 4 otaqlı və penthouse tipli mənzillər var.'),
(6, 2, 'ru', 'Zövqünüzə uyğun mənzillər', '5 bina, 10 blokdan ibarət yaşayış kompleksində 1, 2, 3, 4 otaqlı və penthouse tipli mənzillər var.'),
(7, 3, 'az', 'Geniş balkondan mənzərəsi', '740 mənzildən ibarət yaşayış kompleksinin hər mərtəbəsi möhtəşəm dəniz mənzərəsinə açılır.'),
(8, 3, 'en', 'Geniş balkondan mənzərəsi', '740 mənzildən ibarət yaşayış kompleksinin hər mərtəbəsi möhtəşəm dəniz mənzərəsinə açılır.'),
(9, 3, 'ru', 'Geniş balkondan mənzərəsi', '740 mənzildən ibarət yaşayış kompleksinin hər mərtəbəsi möhtəşəm dəniz mənzərəsinə açılır.'),
(10, 4, 'az', 'Uşaqların əyləncəsi üçün hər şərait', 'Böyük ölçüdə oyun parkları və 250 nəfərlik uşaq baxçası balacaların əyləncəsi üçün nəzərdə tutulub.'),
(11, 4, 'en', 'Uşaqların əyləncəsi üçün hər şərait', 'Böyük ölçüdə oyun parkları və 250 nəfərlik uşaq baxçası balacaların əyləncəsi üçün nəzərdə tutulub.'),
(12, 4, 'ru', 'Uşaqların əyləncəsi üçün hər şərait', 'Böyük ölçüdə oyun parkları və 250 nəfərlik uşaq baxçası balacaların əyləncəsi üçün nəzərdə tutulub.'),
(13, 5, 'az', 'Ehtiyacınız olan hər şey bir arada', 'Bulvar Park yaşayış kompleksində 3 böyük ticarət mərkəzi, restoranlar, fitness mərkəzi və daha çoxu fəaliyət göstərəcək.'),
(14, 5, 'en', 'Ehtiyacınız olan hər şey bir arada', 'Bulvar Park yaşayış kompleksində 3 böyük ticarət mərkəzi, ofis otaqları, restoranlar, fitness mərkəzi və daha çoxu fəaliyət göstərəcək.'),
(15, 5, 'ru', 'Ehtiyacınız olan hər şey bir arada', 'Bulvar Park yaşayış kompleksində 3 böyük ticarət mərkəzi, ofis otaqları, restoranlar, fitness mərkəzi və daha çoxu fəaliyət göstərəcək.');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `image`, `icon`, `email`, `phone`, `active`, `created_at`, `updated_at`) VALUES
(1, 'setting_images/9d50a8d8-07f7-4ce6-840b-97474099a6c5.png', 'spyk', 'info@bulvarpark.az', '+994(50) 777-77-77', 1, '2023-07-02 06:25:02', '2023-07-04 06:07:48');

-- --------------------------------------------------------

--
-- Структура таблицы `statics`
--

CREATE TABLE `statics` (
  `id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statics`
--

INSERT INTO `statics` (`id`, `active`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 0),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `static_translations`
--

CREATE TABLE `static_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `static_model_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `static_translations`
--

INSERT INTO `static_translations` (`id`, `static_model_id`, `locale`, `title`) VALUES
(1, 1, 'az', 'BULVAR PROYEKT'),
(2, 1, 'en', 'BULVAR PROYEKT'),
(3, 1, 'ru', 'BULVAR PROYEKT'),
(4, 2, 'az', 'Əlavə məlumat'),
(5, 2, 'en', 'Əlavə məlumat'),
(6, 2, 'ru', 'Əlavə məlumat'),
(7, 3, 'az', 'Şirkət haqqında'),
(8, 3, 'en', 'Şirkət haqqında'),
(9, 3, 'ru', 'Şirkət haqqında'),
(10, 4, 'az', 'Layihə sənədi'),
(11, 4, 'en', 'Layihə sənədi'),
(12, 4, 'ru', 'Layihə sənədi'),
(13, 5, 'az', 'elave'),
(14, 5, 'en', 'elave'),
(15, 5, 'ru', 'elave'),
(16, 6, 'az', 'Mənzil planlaması'),
(17, 6, 'en', 'Mənzil planlaması'),
(18, 6, 'ru', 'Mənzil planlaması'),
(19, 7, 'az', 'Zəng et'),
(20, 7, 'en', 'Zəng et'),
(21, 7, 'ru', 'Zəng et'),
(22, 8, 'az', 'Menyu'),
(23, 8, 'en', 'Menyu'),
(24, 8, 'ru', 'Menyu'),
(25, 9, 'az', 'RAHAT YAŞAM ÜÇÜN EHTİYACINIZ OLAN HƏR ŞEY BİR ARADA ...'),
(26, 9, 'en', 'RAHAT YAŞAM ÜÇÜN EHTİYACINIZ OLAN HƏR ŞEY BİR ARADA ...'),
(27, 9, 'ru', 'RAHAT YAŞAM ÜÇÜN EHTİYACINIZ OLAN HƏR ŞEY BİR ARADA ...'),
(28, 10, 'az', 'Kompleks haqqında'),
(29, 10, 'en', 'Kompleks haqqında'),
(30, 10, 'ru', 'Kompleks haqqında'),
(31, 11, 'az', 'Şəhərin mərkəzində, taninmış obyektlərlə yan-yana'),
(32, 11, 'en', 'Şəhərin mərkəzində, taninmış obyektlərlə yan-yana'),
(33, 11, 'ru', 'Şəhərin mərkəzində, taninmış obyektlərlə yan-yana'),
(34, 12, 'az', 'Zövqünüzə uyğun mənzilləri rahatlıqla seçin.'),
(35, 12, 'en', 'Zövqünüzə uyğun mənzilləri rahatlıqla seçin.'),
(36, 12, 'ru', 'Zövqünüzə uyğun mənzilləri rahatlıqla seçin.'),
(37, 13, 'az', 'Bütün planlar'),
(38, 13, 'en', 'Bütün planlar'),
(39, 13, 'ru', 'Bütün planlar'),
(40, 14, 'az', 'MƏNZİL PLANLARI'),
(41, 14, 'en', 'MƏNZİL PLANLARI'),
(42, 14, 'ru', 'MƏNZİL PLANLARI'),
(43, 15, 'az', 'Layihə haqqında'),
(44, 15, 'en', 'Layihə haqqında'),
(45, 15, 'ru', 'Layihə haqqında'),
(46, 16, 'az', 'Əlavə sulların varsa əlaqə salaya bilərik.'),
(47, 16, 'en', 'Əlavə sulların varsa əlaqə salaya bilərik.'),
(48, 16, 'ru', 'Əlavə sulların varsa əlaqə salaya bilərik.'),
(49, 17, 'az', 'All right reserved'),
(50, 17, 'en', 'All right reserved'),
(51, 17, 'ru', 'All right reserved'),
(52, 18, 'az', 'Layihənin ümumi planı'),
(53, 18, 'en', 'Layihənin ümumi planı'),
(54, 18, 'ru', 'Layihənin ümumi planı'),
(55, 19, 'az', 'project'),
(56, 19, 'en', 'project'),
(57, 19, 'ru', 'project'),
(58, 20, 'az', 'Bina'),
(59, 20, 'en', 'Bina'),
(60, 20, 'ru', 'Bina'),
(61, 21, 'az', 'rooms'),
(62, 21, 'en', 'rooms'),
(63, 21, 'ru', 'rooms'),
(64, 22, 'az', 'room'),
(65, 22, 'en', 'room'),
(66, 22, 'ru', 'room'),
(67, 23, 'az', 'Studiya'),
(68, 23, 'en', 'Studiya'),
(69, 23, 'ru', 'Studiya'),
(70, 24, 'az', 'Menziller'),
(71, 24, 'en', 'Menziller'),
(72, 24, 'ru', 'Menziller'),
(73, 25, 'az', 'Price'),
(74, 25, 'en', 'Price'),
(75, 25, 'ru', 'Price'),
(76, 26, 'az', 'area'),
(77, 26, 'en', 'area'),
(78, 26, 'ru', 'area'),
(79, 27, 'az', 'Floor'),
(80, 27, 'en', 'Floor'),
(81, 27, 'ru', 'Floor'),
(82, 28, 'az', 'blok'),
(83, 28, 'en', 'blok'),
(84, 28, 'ru', 'blok'),
(85, 29, 'az', 'Metbex'),
(86, 29, 'en', 'Metbex'),
(87, 29, 'ru', 'Metbex'),
(88, 30, 'az', 'Address'),
(89, 30, 'en', 'Address'),
(90, 30, 'ru', 'Address'),
(91, 31, 'az', 'SQ'),
(92, 31, 'en', 'SQ'),
(93, 31, 'ru', 'SQ'),
(94, 32, 'az', 'Eyvan'),
(95, 32, 'en', 'Eyvan'),
(96, 32, 'ru', 'Eyvan'),
(97, 33, 'az', 'Qonaq otagi'),
(98, 33, 'en', 'Qonaq otagi'),
(99, 33, 'ru', 'Qonaq otagi'),
(100, 34, 'az', 'Holl'),
(101, 34, 'en', 'Holl'),
(102, 34, 'ru', 'Holl'),
(103, 35, 'az', 'Планировка'),
(104, 35, 'en', 'Планировка'),
(105, 35, 'ru', 'Планировка'),
(106, 36, 'az', 'На этаже'),
(107, 36, 'en', 'На этаже'),
(108, 36, 'ru', 'На этаже'),
(109, 37, 'az', 'Генплан'),
(110, 37, 'en', 'Генплан'),
(111, 37, 'ru', 'Генплан'),
(112, 38, 'az', 'Penthouse'),
(113, 38, 'en', 'Penthouse'),
(114, 38, 'ru', 'Penthouse'),
(115, 39, 'az', 'PAYMENT'),
(116, 39, 'en', 'PAYMENT'),
(117, 39, 'ru', 'PAYMENT'),
(118, 40, 'az', 'Daxili Kredit Kalkulyatoru'),
(119, 40, 'en', 'Daxili Kredit Kalkulyatoru'),
(120, 40, 'ru', 'Daxili Kredit Kalkulyatoru'),
(121, 41, 'az', 'Ilkin odenis'),
(122, 41, 'en', 'Ilkin odenis'),
(123, 41, 'ru', 'Ilkin odenis'),
(124, 42, 'az', 'Ayliq odenis'),
(125, 42, 'en', 'Ayliq odenis'),
(126, 42, 'ru', 'Ayliq odenis'),
(127, 43, 'az', 'Umumi qiymet'),
(128, 43, 'en', 'Umumi qiymet'),
(129, 43, 'ru', 'Umumi qiymet'),
(130, 44, 'az', 'Hesabla'),
(131, 44, 'en', 'Hesabla'),
(132, 44, 'ru', 'Hesabla'),
(133, 45, 'az', 'Ödəniş müddəti'),
(134, 45, 'en', 'Ödəniş müddəti'),
(135, 45, 'ru', 'Ödəniş müddəti'),
(136, 46, 'az', 'Umumi sahe'),
(137, 46, 'en', 'Umumi sahe'),
(138, 46, 'ru', 'Umumi sahe'),
(139, 47, 'az', 'Ic sahe'),
(140, 47, 'en', 'Ic sahe'),
(141, 47, 'ru', 'Ic sahe'),
(142, 48, 'az', 'net'),
(143, 48, 'en', 'net'),
(144, 48, 'ru', 'net'),
(145, 49, 'az', '12.19'),
(146, 49, 'en', '12.19'),
(147, 49, 'ru', '12.19'),
(148, 50, 'az', '5.62'),
(149, 50, 'en', '5.62'),
(150, 50, 'ru', '5.62'),
(151, 51, 'az', '6.70'),
(152, 51, 'en', '6.70'),
(153, 51, 'ru', '6.70'),
(154, 52, 'az', '19.18'),
(155, 52, 'en', '19.18'),
(156, 52, 'ru', '19.18'),
(157, 53, 'az', '7.14'),
(158, 53, 'en', '7.14'),
(159, 53, 'ru', '7.14'),
(160, 54, 'az', 'm2'),
(161, 54, 'en', 'm2'),
(162, 54, 'ru', 'm2');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Индексы таблицы `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `benefit_translations`
--
ALTER TABLE `benefit_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `benefit_translations_benefit_id_locale_unique` (`benefit_id`,`locale`),
  ADD KEY `benefit_translations_locale_index` (`locale`);

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_project_id_foreign` (`project_id`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `company_translations`
--
ALTER TABLE `company_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_translations_company_id_locale_unique` (`company_id`,`locale`),
  ADD KEY `company_translations_locale_index` (`locale`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `finishings`
--
ALTER TABLE `finishings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `finishing_translations`
--
ALTER TABLE `finishing_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `finishing_translations_finishing_id_locale_unique` (`finishing_id`,`locale`),
  ADD KEY `finishing_translations_locale_index` (`locale`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grands`
--
ALTER TABLE `grands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grand_translations`
--
ALTER TABLE `grand_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grand_translations_grand_id_locale_unique` (`grand_id`,`locale`),
  ADD KEY `grand_translations_locale_index` (`locale`);

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `houses_block_id_foreign` (`block_id`);

--
-- Индексы таблицы `house_translations`
--
ALTER TABLE `house_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `house_translations_house_id_locale_unique` (`house_id`,`locale`),
  ADD KEY `house_translations_locale_index` (`locale`);

--
-- Индексы таблицы `infrastructures`
--
ALTER TABLE `infrastructures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `infrastructure_translations`
--
ALTER TABLE `infrastructure_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infrastructure_translations_infrastructure_id_locale_unique` (`infrastructure_id`,`locale`),
  ADD KEY `infrastructure_translations_locale_index` (`locale`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_translations_menu_id_locale_unique` (`menu_id`,`locale`),
  ADD KEY `menu_translations_locale_index` (`locale`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_translations_project_id_locale_unique` (`project_id`,`locale`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Индексы таблицы `rare_formats`
--
ALTER TABLE `rare_formats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rare_format_translations`
--
ALTER TABLE `rare_format_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rare_format_translations_rare_format_id_locale_unique` (`rare_format_id`,`locale`),
  ADD KEY `rare_format_translations_locale_index` (`locale`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statics`
--
ALTER TABLE `statics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `static_translations`
--
ALTER TABLE `static_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `static_translations_static_model_id_locale_unique` (`static_model_id`,`locale`),
  ADD KEY `static_translations_locale_index` (`locale`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `benefit_translations`
--
ALTER TABLE `benefit_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `company_translations`
--
ALTER TABLE `company_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `finishings`
--
ALTER TABLE `finishings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `finishing_translations`
--
ALTER TABLE `finishing_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `grands`
--
ALTER TABLE `grands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `grand_translations`
--
ALTER TABLE `grand_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `house_translations`
--
ALTER TABLE `house_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `infrastructures`
--
ALTER TABLE `infrastructures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `infrastructure_translations`
--
ALTER TABLE `infrastructure_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `rare_formats`
--
ALTER TABLE `rare_formats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `rare_format_translations`
--
ALTER TABLE `rare_format_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `statics`
--
ALTER TABLE `statics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `static_translations`
--
ALTER TABLE `static_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `benefit_translations`
--
ALTER TABLE `benefit_translations`
  ADD CONSTRAINT `benefit_translations_benefit_id_foreign` FOREIGN KEY (`benefit_id`) REFERENCES `benefits` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `company_translations`
--
ALTER TABLE `company_translations`
  ADD CONSTRAINT `company_translations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `finishing_translations`
--
ALTER TABLE `finishing_translations`
  ADD CONSTRAINT `finishing_translations_finishing_id_foreign` FOREIGN KEY (`finishing_id`) REFERENCES `finishings` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `grand_translations`
--
ALTER TABLE `grand_translations`
  ADD CONSTRAINT `grand_translations_grand_id_foreign` FOREIGN KEY (`grand_id`) REFERENCES `grands` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `house_translations`
--
ALTER TABLE `house_translations`
  ADD CONSTRAINT `house_translations_house_id_foreign` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `infrastructure_translations`
--
ALTER TABLE `infrastructure_translations`
  ADD CONSTRAINT `infrastructure_translations_infrastructure_id_foreign` FOREIGN KEY (`infrastructure_id`) REFERENCES `infrastructures` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  ADD CONSTRAINT `menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rare_format_translations`
--
ALTER TABLE `rare_format_translations`
  ADD CONSTRAINT `rare_format_translations_rare_format_id_foreign` FOREIGN KEY (`rare_format_id`) REFERENCES `rare_formats` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `static_translations`
--
ALTER TABLE `static_translations`
  ADD CONSTRAINT `static_translations_static_model_id_foreign` FOREIGN KEY (`static_model_id`) REFERENCES `statics` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
