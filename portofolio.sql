-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2025 pada 11.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_09_02_142752_create_projects_table', 1),
(6, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `framework` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `name`, `cover`, `language`, `framework`, `content`, `created_at`, `updated_at`) VALUES
(5, 'PJB VILLAGE APPLICATION', 'https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867116/cover_xp8c6k.png', 'PHP & JavaScript', 'Laravel & Tailwind CSS', '<!-- Judul -->\r\n        <p class=\"text-center text-2xl sm:text-3xl md:text-4xl font-bold\">\r\n            Village Procurement Management System\r\n        </p>\r\n\r\n        <!-- Deskripsi -->\r\n        <p class=\"text-base sm:text-lg md:text-xl font-semibold my-8 sm:my-12 leading-relaxed\">\r\n            This website is designed to assist village governments in managing their annual activities, starting\r\n            from the initial community meetings (musyawarah) up to the handover of project results. The system\r\n            provides structured data and documentation, making it easier for village officials to handle tasks such\r\n            as document submission and instant document printing.\r\n            <br><br>\r\n            <b>Note:</b> This project was developed by a team of four during an <b>internship at PT Klipaa Solusi\r\n                Indonesia</b>. The author of this documentation was responsible for system workflow and programming,\r\n            while the interface design was handled by another team member.\r\n        </p>\r\n\r\n        <!-- Guest Section -->\r\n        <p class=\"font-bold text-lg sm:text-xl my-6 sm:my-12\">\r\n            Guest Access\r\n            <span class=\"block font-normal text-gray-700\">For users who have not logged in, access to the system is\r\n                limited. Only specific public pages are available to visitors, while full functionality can only be\r\n                accessed after successful authentication.</span>\r\n        </p>\r\n\r\n        <p class=\"font-bold text-lg my-4\">Guest page:</p>\r\n        <div class=\"space-y-6\">\r\n            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867128/guest-page1_uzwygv.png\"\r\n                    class=\"rounded-lg shadow w-full\">\r\n                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867129/guest-page2_rtp737.png\"\r\n                    class=\"rounded-lg shadow w-full\">\r\n            </div>\r\n            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867141/guest-page3_d46qhs.png\"\r\n                    class=\"rounded-lg shadow w-full\">\r\n                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867161/login-page_ncigfw.png\"\r\n                    class=\"rounded-lg shadow w-full\">\r\n            </div>\r\n\r\n\r\n        </div>\r\n\r\n        <!-- Main Modules -->\r\n        <p class=\"text-center font-bold text-lg sm:text-xl my-12\">\r\n            Main Project Modules (Accessible After Login)\r\n        </p>\r\n\r\n        <div class=\"text-base sm:text-lg md:text-xl space-y-8 sm:space-y-12\">\r\n\r\n            <!-- Data Umum -->\r\n            <div>\r\n                <p class=\"font-semibold text-lg sm:text-xl\">1. Data Umum</p>\r\n                <p class=\"my-2 text-gray-700\">\r\n                    This module contains the village’s core identity and organizational structure, managed primarily\r\n                    by the village secretary.\r\n                </p>\r\n                <ul class=\"list-disc ml-6 space-y-8 font-medium\">\r\n                    <li>\r\n                        Data Desa – Village identity details such as office location, village head’s name, and\r\n                        village code.\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867159/profil-page_yrfznt.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        Data Aparat Desa – List of village officials (head, secretary, treasurer, operators, etc.).\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867160/general-data1_igrkig.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        Data PKA – Registered PKA members (automatically synchronized with Data Aparat Desa).\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867158/general-data2_pgb0e0.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        Data TPK – Established TPK groups along with decree numbers (Nomor SK).\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867125/general-data3_ycuz41.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        Data Penyedia – List of providers who are officially registered to collaborate with the\r\n                        village.\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867127/general-data4_dwgekw.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n\r\n            <!-- Data Perencanaan -->\r\n            <div>\r\n                <p class=\"font-semibold text-lg sm:text-xl\">2. Data Perencanaan</p>\r\n                <p class=\"my-2 text-gray-700\">\r\n                    This module records the results of village meetings (musyawarah) and outlines decisions\r\n                    regarding upcoming activities, methods of execution, and responsible parties.\r\n                </p>\r\n                <ul class=\"list-disc ml-6 space-y-8 font-medium\">\r\n                    <li>\r\n                        Bamusrenbangdes – Records of village planning discussions (participants, outcomes, etc.),\r\n                        exportable to PDF.\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867134/plan-data1_gepzbq.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        RKP – List of planned projects/activities including details such as name, scope, timeline,\r\n                        method (Swakelola/Penyedia), and responsible person(s).\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867121/plan-data2_qngdaz.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        Pengumuman – Official announcements declaring the commencement of activities and their\r\n                        method of implementation.\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867122/plan-data3_gyhqra.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n\r\n            <!-- Data Persiapan -->\r\n            <div class=\"mt-12\">\r\n                <p class=\"font-semibold text-lg sm:text-xl\">3. Data Persiapan</p>\r\n                <p class=\"my-2 text-gray-700\">\r\n                    Preparation modules are divided into two categories: <b>Swakelola</b> (self-managed projects)\r\n                    and <b>Penyedia</b> (projects through external providers).\r\n                </p>\r\n\r\n                <!-- Swakelola -->\r\n                <div class=\"mt-6\">\r\n                    <p class=\"font-semibold\">Swakelola</p>\r\n                    <div class=\"flex justify-center mt-2 mb-8\">\r\n                        <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867123/prepare-data1_bsuuxn.png\"\r\n                            class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                    </div>\r\n\r\n                    <ul class=\"list-disc ml-6 space-y-6 font-normal\">\r\n                        <li>Spesifikasi Teknis\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867145/1.1_wosoeg.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867147/1.2_zf40gm.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Analisa Harga Satuan\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867149/2.1_b89pfk.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867148/2.2_qjzuns.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Rencana Anggaran Biaya (RAB)\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867150/3.1_gm1ikx.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867152/3.2_eyjvnx.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>RPTKBPS\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867153/4.1_zkrfjo.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867154/4.2_zo0dah.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Jadwal Pelaksanaan Kegiatan\r\n                            <div class=\"flex justify-center mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867155/5.1_xggvl0.png\"\r\n                                    class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Data KAK\r\n                            <div class=\"flex justify-center mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867156/6.1_wvcwjg.png\"\r\n                                    class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                            </div>\r\n                        </li>\r\n                    </ul>\r\n                </div>\r\n\r\n                <!-- Penyedia -->\r\n                <div class=\"mt-10\">\r\n                    <p class=\"font-semibold\">Penyedia</p>\r\n                    <div class=\"flex justify-center mt-2 mb-8\">\r\n                        <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867125/prepare-data2_iyzei0.png\"\r\n                            class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                    </div>\r\n\r\n\r\n                    <ul class=\"list-disc ml-6 space-y-6 font-normal\">\r\n                        <li>Jadwal Pelaksanaan\r\n                            <div class=\"flex justify-center mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867135/1.1_hfnfno.png\"\r\n                                    class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Kerangka Acuan Kerja (KAK)\r\n                            <div class=\"flex justify-center mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867136/2.1_cl8bvp.png\"\r\n                                    class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Spesifikasi Teknis\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867137/3.1_s116fj.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867138/3.2_yebxj6.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Analisa Harga Satuan\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867140/4.1_k7cmdb.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867142/4.2_sawqtd.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                        <li>Harga Perkiraan Sendiri\r\n                            <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2 mb-8\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867143/5.1_gmevd7.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                                <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867144/5.2_r11xxe.png\"\r\n                                    class=\"rounded-lg shadow w-full\">\r\n                            </div>\r\n                        </li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n\r\n\r\n            <!-- Data Pelaksanaan -->\r\n            <div>\r\n                <p class=\"font-semibold text-lg sm:text-xl\">4. Data Pelaksanaan</p>\r\n                <p class=\"my-2 text-gray-700\">\r\n                    This section manages the implementation phase of activities, which can be carried out either\r\n                    through <span class=\"font-semibold\">Swakelola</span> or <span class=\"font-semibold\">Penyedia</span>.\r\n                </p>\r\n\r\n                <ul class=\"list-disc ml-6 space-y-6\">\r\n                    <li>\r\n                        <span class=\"font-semibold\">Swakelola</span> – Activities managed internally by the village.\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867117/implementation-data1_jqa55y.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                    </li>\r\n                    <li>\r\n                        <span class=\"font-semibold\">Penyedia</span> – Activities managed by providers, with two\r\n                        possible methods:\r\n                        <div class=\"flex justify-center mt-2 mb-8\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867120/implementation-data2_kf3sr9.png\"\r\n                                class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                        </div>\r\n                        <ul class=\"list-decimal ml-6 space-y-4\">\r\n                            <li>Secara Lelang (via tender)\r\n                                <div class=\"flex justify-center mt-2 mb-8\">\r\n                                    <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867131/1.1_vxiyjh.png\"\r\n                                        class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                                </div>\r\n                            </li>\r\n                            <li>Secara Penawaran (via direct offer)\r\n                                <div class=\"flex justify-center mt-2 mb-8\">\r\n                                    <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756867130/2.1_dslhji.png\"\r\n                                        class=\"rounded-lg shadow w-full sm:w-3/4 md:w-1/2\">\r\n                                </div>\r\n                            </li>\r\n                        </ul>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n\r\n        </div>', '2025-09-02 22:10:31', '2025-09-02 22:10:31'),
(6, 'SIMPLE ANDROID APPLICATION', 'https://res.cloudinary.com/dvugdsa0z/image/upload/v1756876384/cover_l2cedr.jpg', 'Kotlin', 'Android SDK', '<!-- Judul -->\r\n                <p class=\"text-center text-2xl sm:text-3xl md:text-4xl font-bold\">\r\n                    SIMPLE ANDROID APPLICATION\r\n                </p>\r\n\r\n                <!-- Deskripsi -->\r\n                <p class=\"text-base sm:text-lg md:text-xl font-semibold my-8 sm:my-12 leading-relaxed\">\r\n                    This project is a simple Android application designed as a basic implementation\r\n                    example of mobile app development using Kotlin. The application is read-only,\r\n                    allowing users to view the available content without modifying any data. In addition,\r\n                    the project includes several simple navigation features to provide an overview\r\n                    of the general structure of an Android application as well as the interaction\r\n                    flow between different screens.\r\n                </p>\r\n\r\n                <!-- Intro Section -->\r\n                <p class=\"font-bold text-lg sm:text-xl my-6 sm:my-12\">\r\n                    In addition, this application consists of three main types of pages:\r\n                </p>\r\n\r\n                <!-- List -->\r\n                <ol class=\"list-decimal pl-6 space-y-6 sm:space-y-8\">\r\n                    <li>\r\n                        <strong>Items List Page</strong> – displays a list of available items.\r\n                        <div class=\"my-4 flex justify-center\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756821478/items-list_zjvkvk.jpg\"\r\n                                class=\"h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md\">\r\n                        </div>\r\n                    </li>\r\n\r\n                    <li>\r\n                        <strong>Item Details Page</strong> – provides detailed information about a selected item.\r\n                        <div class=\"my-4 flex justify-center\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756821478/item-details_vizxhp.jpg\"\r\n                                class=\"h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md\">\r\n                        </div>\r\n                    </li>\r\n\r\n                    <li>\r\n                        <strong>Profile Page</strong> – presents basic information about the user or application\r\n                        profile.\r\n                        <div class=\"my-4 flex justify-center\">\r\n                            <img src=\"https://res.cloudinary.com/dvugdsa0z/image/upload/v1756824005/profile_ivmc68.jpg\"\r\n                                class=\"h-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 object-cover rounded-lg shadow-md\">\r\n                        </div>\r\n                    </li>\r\n                </ol>', '2025-09-02 22:13:26', '2025-09-02 22:13:26'),
(7, 'HOTEL BOOKING APPLICATION', 'https://res.cloudinary.com/dvugdsa0z/image/upload/v1756869811/cover_z6kxad.png', 'PHP & JavaScript', 'Laravel & Tailwind CSS', '<!-- Konten Utama -->\r\n    <p class=\"text-center text-2xl md:text-4xl font-bold\">Hotel Reservation Website</p>\r\n\r\n    <p class=\"text-base md:text-lg font-semibold my-6 md:my-12 leading-relaxed\">\r\n        This is a hotel reservation website that allows users to book rooms online.<br><br>\r\n        The website has four types of roles:\r\n        <br><br>\r\n        <strong>Guest:</strong> can register, log in, view the hotel dashboard, and see the list of rooms.<br>\r\n        <strong>User:</strong> can make room reservations, view booking history, cancel bookings, and print\r\n        booking receipts.<br>\r\n        <strong>Receptionist:</strong> manages booking data and changes booking status.<br>\r\n        <strong>Admin:</strong> has full authority to manage details of each room type, add new rooms, and\r\n        deactivate rooms.<br><br>\r\n        <em>Note:</em> This website uses an API that you can clone via the following GitHub link:\r\n        <a class=\"text-blue-500 underline break-words\" href=\"https://github.com/Rasheed151/rest-api\"\r\n            target=\"_blank\">https://github.com/Rasheed151/rest-api</a>\r\n    </p>\r\n\r\n    <!-- Guest Section -->\r\n    <p class=\"text-center font-bold text-xl md:text-2xl my-8 md:my-12\">Guest</p>\r\n    <ol class=\"list-decimal pl-6 text-base md:text-lg\">\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Registration Page</strong> – This page is used to register a new user account and verify the\r\n            email address used during registration.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/118a3118-486e-4561-87a1-78f510c84673\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Successful Verification Notification Page</strong> – Displayed after successful\r\n            verification.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/65a94a95-63d8-4adb-883e-62b83eed4d54\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Login Page</strong> – Allows guests to log in and change their role to user.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/5c1a7cf2-2026-4c02-aecf-7b871cbdcfbe\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Hotel Dashboard</strong> – Shows hotel information and facilities.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/5a28e5fb-63c1-4eb6-818a-80e8f03c6232\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Room Information Page</strong> – Shows details about available rooms.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/48ec484c-619f-4281-b8d1-20f461ae06eb\" />\r\n        </li>\r\n    </ol>\r\n\r\n    <!-- User Section -->\r\n    <p class=\"text-center font-bold text-xl md:text-2xl my-8 md:my-12\">User</p>\r\n    <ol class=\"list-decimal pl-6 text-base md:text-lg\">\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Room Booking Page</strong> – Select room type and dates to book.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/f43bb00a-df0d-4b1a-9101-919355862adb\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Booking History</strong> – Shows list of previous bookings.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/6d26a7ee-93b8-45c4-9e89-9024bf865723\" />\r\n        </li>\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Print Booking History</strong> – Users can print their booking history.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/9c03f6cc-3203-4f44-b921-eb41d25c409d\" />\r\n        </li>\r\n    </ol>\r\n\r\n    <!-- Receptionist Section -->\r\n    <p class=\"text-center font-bold text-xl md:text-2xl my-8 md:my-12\">Receptionist</p>\r\n    <ol class=\"list-decimal pl-6 text-base md:text-lg\">\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Receptionist Dashboard</strong> – Used to manage orders and bookings.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/8cf209ca-ce7d-4f18-b564-7678d7796b1a\" />\r\n        </li>\r\n    </ol>\r\n\r\n    <!-- Admin Section -->\r\n    <p class=\"text-center font-bold text-xl md:text-2xl my-8 md:my-12\">Admin</p>\r\n    <ol class=\"list-decimal pl-6 text-base md:text-lg\">\r\n        <li class=\"my-6 md:my-8\">\r\n            <strong>Admin Dashboard</strong> – Manage room types, add/edit/delete rooms.\r\n            <img class=\"my-4 rounded-lg shadow max-w-full h-auto\"\r\n                src=\"https://github.com/user-attachments/assets/df549953-addc-4779-84dd-8f8b195af489\" />\r\n        </li>\r\n    </ol>\r\n\r\n    <!-- Contact -->\r\n    <div class=\"mt-8 md:mt-12 border-t pt-4 text-base md:text-lg\">\r\n        <strong>Contact and Support:</strong><br>\r\n        Email: <a class=\"text-blue-500 underline\"\r\n            href=\"mailto:mrasheed.muhyiddien@gmail.com\">mrasheed.muhyiddien@gmail.com</a>\r\n    </div>', '2025-09-02 22:15:10', '2025-09-02 22:15:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ngasalteam05', '$2y$10$t2GCUD.2drHQZmx6Oa6GO.w65tQNb3ZIDqO1FgogOpITpAu6QvHI2', NULL, '2025-09-02 23:05:48', '2025-09-02 23:05:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
