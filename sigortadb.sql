-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2023, 12:15:54
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sigortadb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `tc` int(11) NOT NULL,
  `tur` varchar(3) NOT NULL,
  `tel` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisi`
--

CREATE TABLE `kisi` (
  `tc` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `cinsiyet` varchar(1) NOT NULL,
  `dog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kisi`
--

INSERT INTO `kisi` (`tc`, `ad`, `soyad`, `cinsiyet`, `dog`) VALUES
(123132123, 'qweqwe', 'wewewe', 'k', '2999-05-01'),
(346345747, 'rendu', 'kurdu', 'e', '2022-12-07'),
(2147483647, 'EReeen', 'yalcccnn', 'E', '1999-05-03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sigorta`
--

CREATE TABLE `sigorta` (
  `tc` int(11) NOT NULL,
  `tur` varchar(3) NOT NULL,
  `bas_tar` date NOT NULL,
  `bit_tar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`tc`);

--
-- Tablo için indeksler `kisi`
--
ALTER TABLE `kisi`
  ADD PRIMARY KEY (`tc`);

--
-- Tablo için indeksler `sigorta`
--
ALTER TABLE `sigorta`
  ADD PRIMARY KEY (`tc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
