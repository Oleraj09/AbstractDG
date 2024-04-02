-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `others`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `icon`) VALUES
(2, 'Development Process', 'uploads/Items/Group 3.png'),
(3, 'Acquisitions & Assemblages', 'uploads/Items/Group 5.png'),
(4, 'Financial Structuring', 'uploads/Items/Group 12.png'),
(5, 'Financial Analysis', 'uploads/Items/Group 18.png'),
(6, 'Capital Markets', 'uploads/Items/Group 21.png'),
(7, 'Investment Evaluation', 'uploads/Items/Group 23.png'),
(8, 'Design Process', 'uploads/Items/Group 26.png'),
(9, 'Construction & Consultant Coordination', 'uploads/Items/Group 28.png'),
(12, 'Marketing & Leasing', 'uploads/Items/Group 26.png'),
(13, 'Public-Private Relationships', 'uploads/Items/Group 3.png');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `bio`, `image`) VALUES
(1, 'Oleraj Hossin', 'Partner', '<p>A 15-year veteran of the real estate investment and development business, Jason brings a unique combination of natural creativity,&nbsp;a passion for building, and the requisite financial expertise which allows him to execute successful and profitable projects with a one-of-a-kind vision.&nbsp;His multi-faceted development experience allows him to select the right people and companies for the job and bring out the best in each team member. His areas of expertise span the entire development process including acquisitions, investment analysis, assemblages, zoning and entitlements, financing, equity structuring,&nbsp;contracts, legal negotiations, construction team oversight, and project design.</p><p>​Earlier in his career Jason worked on over $10 billion in new development projects comprising&nbsp;over 8 million square feet and more than 8,000 residential units, including the&nbsp;ultra-luxury&nbsp;1,400 ft. tower at 111 West 57th&nbsp;Street; a 45-story; QPS Tower, 400-unit multifamily&nbsp;building in Long Island City; 10&nbsp;Sullivan, a boutique condominium building in SoHo and a variety of luxury condominiums throughout South Florida, including ECHO Aventura, ECHO&nbsp;Brickell, Muse Residences, and Sage.</p><p>A graduate of the University of Miami, he received an MA&nbsp;in real estate finance and development&nbsp;from New York University.</p>', 'uploads/Teams/Barry Rudofsky D85_4962 copy 2-bw.png'),
(2, 'Daniel Rudofsky', 'Partner', '<p>Dan has a diverse range of experience from both inside and outside of the real estate industry. His jobs in politics and law, coupled with his family’s real estate business, have provided him with unique insights into the various challenges required to complete any project.</p><p>Dan is responsible for negotiating contracts,&nbsp;interpreting laws, zoning and other regulations, and acting as liaison to outside counsel.&nbsp;An integral part of the team that evaluates new opportunities, he uses his&nbsp;property management&nbsp;experience in the design process&nbsp;to&nbsp;help create more practical&nbsp;and&nbsp;thoughtful buildings.</p><p>Previously in his career Dan served as an Associate in the Litigation Department of Paul, Weiss, Rifkind, Wharton, and Garrison where he represented major banks in ongoing litigation and government investigations. Before attending law school, Dan worked for New York Senator Charles E. Schumer on the Judiciary Committee.</p><p>Dan earned a BA from the University of Pennsylvania and a&nbsp;JD from New York University School of Law.</p>', 'uploads/Teams/Brian Kreizel D85_5430 copy 2-bw.png'),
(3, 'Scott Silverman', 'Partner', '<p>Scott joined Bronstein Properties in 1999 and is responsible for executive oversight of property management with a focus on identification, evaluation and oversight of major capital improvement projects, such as individual apartment renovations as well as refurbishment management and building-wide improvements. He is also responsible for leasing management and strategy, including evaluation of new tenants, leasing turnover management and leasing commercial space. Scott serves as an advisor and partner of Abstract Development. He is a graduate of Washington University in St. Louis (BS, Business Administrations/Finance).</p>', 'uploads/Teams/Dan Rudofsky D85_4480 copy 2-bw.png'),
(4, 'Barry Rudofsky', 'Partner', '<p>Barry has over 30 years of experience managing commercial real estate in the New York City area. He joined the company in 1989 and is responsible for strategic and long-term planning, with particular emphasis on recruitment and retention of key employees. In his role as an asset manager, he provides supervisory review of day-to-day property management staff, with particular focus on identification, evaluation and oversight of major capital improvement projects including individual unit renovations and building-wide improvements. Barry serves as an advisor and partner of Abstract Development.</p><p>Previously he served as Assistant District Attorney in both the Manhattan and Philadelphia District Attorneys’ Offices. He is admitted to the Bar in Pennsylvania, New York and the U.S Eastern District of Pennsylvania and is a graduate of University of Michigan Law School and University of Michigan (BA, Economics and History).</p><p>Barry is also active in a number of professional and civic associations and current serves as Co-Chairman and Former President of the Community Housing Improvement Program (CHIP), a residential property Owners Organization as well as Co-Chair of its Lead Paint Legislation Committee. He is also a member of the Rent Stabilization Association.</p>', 'uploads/Teams/Jason Aglaze D85_5378 copy 2-bw.png'),
(5, 'Peter Schack, CPA', 'Chief Financial Officer', '<p>Peter joined Bronstein Properties in 2017 and is responsible for overseeing accounting, treasury and financial reporting functions. His areas of expertise include real estate, construction and development accounting, property management, staff selection, accounting systems and processes.</p><p>Peter has over 25 years of experience in various real estate, construction and public accounting firms. His real estate financial background includes executive level work with residential and commercial property owners and developers, sales and marketers of luxury condominiums as well as large construction contractors. Previously, he worked on the Hudson Yards Development project in Manhattan.</p><p>Peter graduated from Hofstra University with a B.A. in Business Administration, is a licensed New York State CPA and a member of the New York State Society of CPAs.</p>', 'uploads/Teams/Peter Schack  D85_4613 copy 3-bw.png'),
(6, 'Brian Kreizel', 'Director of Operations', '<p>Brian is an operation professional with over 15 years of success across diverse industries including real estate, healthcare, technology start-ups, and crisis management consulting.</p><p>&nbsp;He owns and operates a separate real estate platform that acquires, develops, and manages student-housing assets. In his current role, as Director of Operations for Bronstein Properties, he plays a lead role in strategic, business, and organizational operations.</p>', 'uploads/Teams/Scott Silverman D85_4970 copy 2-bw.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
