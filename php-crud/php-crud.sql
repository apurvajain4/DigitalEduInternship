--
-- Database: `php-crud`
--
CREATE DATABASE IF NOT EXISTS `php-crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `php-crud`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
    `roll_no` int(10) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `middle_name` varchar(50) DEFAULT NULL,
    `last_name` varchar(50) NOT NULL,
    `class` varchar(15) NOT NULL,
    `dob` date DEFAULT NULL,
    `blood_group` varchar(3) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students` ADD PRIMARY KEY (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `roll_no` int(10) NOT NULL AUTO_INCREMENT;

COMMIT;