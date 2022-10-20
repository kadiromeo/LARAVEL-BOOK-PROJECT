-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Eki 2022, 16:32:31
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `book`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategorilers`
--

CREATE TABLE `kategorilers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selflink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategorilers`
--

INSERT INTO `kategorilers` (`id`, `name`, `selflink`, `created_at`, `updated_at`) VALUES
(1, 'Felsefe', 'felsefe', '2022-10-19 11:10:02', '2022-10-19 11:10:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitaplars`
--

CREATE TABLE `kitaplars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selflink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yazarid` int(11) DEFAULT NULL,
  `yayineviid` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiyat` double DEFAULT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2022_10_19_075521_create_yazarlars_table', 1),
(3, '2022_10_19_075547_create_kitaplars_table', 1),
(4, '2022_10_19_105903_create_yayin_evis_table', 2),
(5, '2022_10_19_140114_create_kategorilers_table', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayin_evis`
--

CREATE TABLE `yayin_evis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selflink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yazarid` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yayin_evis`
--

INSERT INTO `yayin_evis` (`id`, `name`, `selflink`, `yazarid`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Can Yayınevi', 'can-yayinevi', NULL, NULL, '2022-10-19 10:04:26', '2022-10-19 10:04:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazarlars`
--

CREATE TABLE `yazarlars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selflink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yazarlars`
--

INSERT INTO `yazarlars` (`id`, `name`, `selflink`, `image`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Friedrich Wilhelm Nietzsche', 'friedrich-wilhelm-nietzsche', 'images/yazar/269/58642.jpg', 'Friedrich Wilhelm Nietzsche, Alman bir filolog, filozof, şair, kültür eleştirmeni ve besteci nitelikleriyle tanımlanmaktadır. Din, ahlak, felsefe, bilim ve modern kültür konuları üzerine yoğunlaşmış, bu alanlarda metafor, aforizma, ironilerle dolu eleştirel yazılar yazmıştır. Güç istenci, Tanrının ölümü, Üstinsan ve Bengi dönüş gibi kavramlara kilitlenmiştir. Ve Böyle Buyurdu Zerdüşt isimli eseriyle hafızalara kazınmış olan dahinin hayat hikayesi de kendisi gibi etkileyicidir.\r\n\r\nGarip bir anne ile anlaşamadığı bir kız kardeşe sahip Nietzsche’nin kadınlarla ilgili düşüncelerinde etkili olan sebep; ilk başta ailesindeki kadınlar olmuştur. Papaz olabilmek için teoloji ve filoloji okumaya başlayıp, daha sonra “tanrı öldü” diyerek eğitimine dil bilimi alanında tamamlamıştır. Hayatı boyunca migren ağrılarından muzdarip olmuş ve şehir şehir gezerek sağlığına iyi gelecek iklimi aramıştır. Ama baş ağrılarına rağmen, yazmaya devam etmiş, delirene kadar kalemi elinden bırakmamıştır.', '2022-10-19 10:03:01', '2022-10-19 10:03:01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategorilers`
--
ALTER TABLE `kategorilers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kitaplars`
--
ALTER TABLE `kitaplars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `yayin_evis`
--
ALTER TABLE `yayin_evis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazarlars`
--
ALTER TABLE `yazarlars`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategorilers`
--
ALTER TABLE `kategorilers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kitaplars`
--
ALTER TABLE `kitaplars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yayin_evis`
--
ALTER TABLE `yayin_evis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yazarlars`
--
ALTER TABLE `yazarlars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
