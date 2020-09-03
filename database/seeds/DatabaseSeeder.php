<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::insert('INSERT INTO users (id, name, phone, email, fcm_registration_id, image, password, active, confirmation_code, confirmed, email_verified_at, status, role, created_at, updated_at, remember_token, deleted_at)'
            , [2, 'Elteyab Hassan', '114847667', 'admin@demo.com', NULL, NULL, '$2y$10$SGCQJsvWwUYXEaav05PZXOTFDag44rpeht4ASZ2atEojg96c4//UK', 1, NULL, 1, NULL, 1, 4, '2020-09-02 17:33:46', '2020-09-02 17:33:46', NULL, NULL]);
  DB::insert('INSERT INTO users (id, name, phone, email, fcm_registration_id, image, password, active, confirmation_code, confirmed, email_verified_at, status, role, created_at, updated_at, remember_token, deleted_at)'
            , [3, 'Omer', '123123', 'admin@gmail.com', NULL, NULL, '$2y$10$kz6Ma02crRDAacvZ3HyfPeJ3/J4Gaqb8HebJARQstfC6SUZ9CJ9Ha', 1, NULL, 1, NULL, 1, 4, '2020-09-02 19:07:11', '2020-09-02 19:07:11', NULL, NULL]);

  DB::select("
      INSERT INTO `medical_fields` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
    (1, 'fasfsdf', '2020-09-23 22:59:12', '2020-09-14 22:59:12', NULL),
(2, 'aefef', '2020-09-24 22:59:12', '2020-09-16 22:59:12', NULL),
(3, 'fasfsdf', '2020-09-23 22:59:12', '2020-09-14 22:59:12', NULL),
(4, 'aefef', '2020-09-24 22:59:12', '2020-09-16 22:59:12', NULL),
(5, 'fasfsdf', '2020-09-23 22:59:12', '2020-09-14 22:59:12', NULL),
(6, 'aefef', '2020-09-24 22:59:12', '2020-09-16 22:59:12', NULL);"
);

  DB::select("
INSERT INTO `medical_specialties` (`id`, `name`, `medical_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aefafe', 1, NULL, NULL, NULL),
(2, 'EFASEF', 4, NULL, NULL, NULL),
(3, 'aefafe', 1, NULL, NULL, NULL),
(4, 'EFASEF', 4, NULL, NULL, NULL),
(5, 'aefafe', 3, NULL, NULL, NULL),
(6, 'EFASEF', 5, NULL, NULL, NULL);

");
  DB::select("

INSERT INTO `request_specialists` (`id`, `name`, `address`, `start_time`, `end_time`, `number_of_hour`, `price`, `status`, `longitude`, `latitude`, `medical_id`, `user_id`, `doctor_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(4, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(5, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(6, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-11', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-11-02 23:57:53', NULL, NULL),
(7, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(8, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(9, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(10, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(11, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(12, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(13, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(14, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(15, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(16, 'AWDASD', 'sdasd', '2020-09-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-10-01 22:57:53', NULL, NULL),
(17, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(18, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(19, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(20, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(21, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(22, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(23, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(24, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(25, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(26, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(27, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(28, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(29, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(30, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(31, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(32, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(33, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-09-02 22:57:53', NULL, NULL),
(34, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-01-01 23:57:53', NULL, NULL),
(35, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-02-02 23:57:53', NULL, NULL),
(36, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-03-01 23:57:53', NULL, NULL),
(37, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-02-02 23:57:53', NULL, NULL),
(38, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-03-01 23:57:53', NULL, NULL),
(39, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-02-02 23:57:53', NULL, NULL),
(40, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-03-01 23:57:53', NULL, NULL),
(41, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-02-02 23:57:53', NULL, NULL),
(42, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-03-01 23:57:53', NULL, NULL),
(43, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(44, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(45, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(46, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(47, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(48, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(49, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(50, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(51, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(52, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(53, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(54, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(55, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(56, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(57, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(58, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(59, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(60, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(61, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(62, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(63, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(64, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(65, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(66, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(67, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(68, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(69, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(70, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(71, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(72, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(73, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(74, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(75, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(76, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(77, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(78, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(79, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(80, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(81, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(82, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(83, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(84, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(85, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(86, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(87, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(88, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(89, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(90, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(91, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(92, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(93, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(94, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(95, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(96, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(97, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(98, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(99, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(100, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(101, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(102, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(103, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(104, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(105, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(106, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(107, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(108, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(109, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(110, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(111, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(112, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(113, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(114, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(115, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(116, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(117, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(118, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(119, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(120, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(121, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(122, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(123, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(124, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(125, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(126, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(127, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(128, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(129, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(130, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(131, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(132, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(133, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(134, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(135, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(136, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(137, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(138, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(139, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(140, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(141, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(142, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(143, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(144, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(145, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(146, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(147, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(148, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(149, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(150, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(151, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(152, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(153, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(154, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(155, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(156, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(157, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(158, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(159, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(160, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(161, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(162, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(163, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(164, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(165, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(166, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(167, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(168, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(169, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(170, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL),
(171, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-05-02 22:57:53', NULL, NULL),
(172, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-04-01 22:57:53', NULL, NULL),
(173, 'iwjflafm', 'asfQEFOMQEFl', '2020-09-09', '2020-09-04', 22, 13.00, 1, 123, 123, 2, 2, 3, '2020-08-02 22:57:53', NULL, NULL),
(174, 'AWDASD', 'sdasd', '2020-02-10', '2020-09-16', 1, 212.00, 1, 213, 12213, 1, 3, 2, '2020-07-01 22:57:53', NULL, NULL);
");
        // $this->call(UserSeeder::class);
    }
}
