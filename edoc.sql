-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 12:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aemail`, `apassword`) VALUES
('admin@edoc.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoid` int(11) NOT NULL,
  `pid` int(10) DEFAULT NULL,
  `apponum` int(3) DEFAULT NULL,
  `scheduleid` int(10) DEFAULT NULL,
  `appodate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoid`, `pid`, `apponum`, `scheduleid`, `appodate`) VALUES
(1, 1, 1, 1, '2022-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(2000) NOT NULL,
  `date` datetime NOT NULL,
  `post_by` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `date`, `post_by`) VALUES
(1, 'Tips and tricks to keep your cat safe', 'A family of new cat-owners wrote for ideas on how to keep their cat safe. I had some ideas that might help, and might help you and your cats, too!\r\n\r\n\r\n\r\nQ: We’re new to cats. What should we know about keeping ours safe?\r\n\r\nA: We always hear that cats have nine lives, but my fellow veterinarians and I know that’s not true. Prevention is key. Here’s my best advice on keeping them safe and healthy.\r\n\r\nDon’t let your cat roam outdoors. Free-roaming cats are at risk of getting lost or closed in a neighbor’s garage or shed; hit by a car crossing the street or run over in your driveway because you didn’t see them; attacked or killed by a coyote or a neighbor’s loose dog; or infection or disease from fighting with another cat. If you want them to experience the pleasures of being outdoors, build a catio.', 'https://www.drmartybecker.com/wp-content/uploads/2020/01/5589FACA-C3E2-4478-B9F7-95C30CEEFD01.jpeg', '2023-02-17 12:02:56', 'By DR. MARTY BECKER'),
(2, 'Benefits of Spaying and Neutering Your Pets\r\n', 'Spaying, also known as ovariohysterectomy, involves the removal of the female pet’s uterus and ovaries through an incision made in the abdomen.\r\nNeutering, also known as castration, is the removal of a male pet’s testes.\r\n\r\n\r\nHealth benefits of spaying or neutering your pets:\r\n1. Increases their chances of living a longer and healthier life\r\nSpaying your female cat or dog before their first heat cycle (reproductive cycle) greatly reduces their chances of developing uterine, ovarian, and breast cancer, and other infections.\r\nNeutering your male pets helps in decreasing their chances of developing testicular cancer, hernias, prostate related complications, and other health issues.\r\n\r\n2. Prevent unwanted pregnancies and infections\r\nSpaying and neutering is a responsible way of preventing accidental pregnancies and unplanned litters. Delivering a litter and looking after them can be very taxing on your pet’s health. If your pet is not taken care of properly during pregnancy, it can lead to several health related issues like abortion, miscarriages, still-births, and can sometimes even lead to death of both the mother and her litter.\r\nMoreover, if a female pet is not looked after and cleaned regularly during their heat cycle or post delivery, she can develop uterine infections like pyometra and metritis.', 'https://www.amtmindia.org/wp-content/uploads/2022/07/AdobeStock_120574924-1024x683.jpg', '2023-03-16 13:41:37', 'Dr. Temple Grandin '),
(3, 'Benefits of Regular Check-Ups for Your Pet', '\r\nBenefits-Regular-Check-Ups-Your-Pet-Babcock-Hills-Veterinary-HospitalIs your pet healthy? How can you be sure?\r\nAccording to the American Veterinary Medical Association, all pets should receive a physical medical examination at least once a year. This includes indoor pets. Beyond flea treatments and vaccinations, your pet needs regular visits to the veterinarian to keep them at their best.\r\n\r\nSeeing is Not Always Believing\r\n\r\nYou can’t always tell how your pet feels by looking at them. While they may not show outward signs of disease or injury, problems could be developing that can only be detected by a trained professional.\r\n\r\nThings like lethargy, loss of interest in certain activities, and changes in behavior can mask illness or infection.\r\nHow often do you check your pet’s teeth? Tooth decay can cause your pet to lose weight, eat poorly, or act out in other ways. If untreated, their health can be threatened.\r\nAnimals with active outdoor lives need to have their skin checked regularly for signs of bites and infestations. Your vet will know which marks to be concerned about, and can order blood tests to confirm possible infection or disease.\r\nSome internal illnesses won’t show outward signs until it’s too late. Yearly check-ups allow you to track your pet’s vital signs, so any problems can be treated before they get out of control.\r\nCommon chronic issues like diabetes and arthritis can be managed better when diagnosed early. Regular vet visits mean earlier detection, which will lengthen your pet’s healthy years.\r\nDon’t rely on your eyes to keep your pet healthy. Your vet has the tools and training needed to assess and identify your pet’s true state.', 'https://d1m34p9xkycorf.cloudfront.net/close-up-veterinarian-taking-care-dog__1_.jpg', '2023-04-02 13:46:05', 'Dr. Michael W. Fox'),
(4, 'Most Popular Dog Breeds and Their Health Issues', '1). Siberian Husky: Autoimmune Disorders\r\n\r\n Siberian Huskies seem to be predisposed to a variety of autoimmune disorders, many of which affect the skin. These conditions cause sores and hair loss, often on the face.\r\n\r\n2). Bulldog: Respiratory Problems\r\n\r\nLike all dogs with those adorable smashed-in faces, bulldogs can suffer from breathing problems. Your bulldog\'s small nostrils, elongated soft palate, and narrow trachea are the reasons why they probably snore, and they can lead to a life-threatening emergency if they get overheated or overtired. \r\n\r\n3). Pug: Eye Problems\r\n\r\nWith their squashed faces and bulgy eyes, pugs are at risk for eye problems. The most serious is an eye popping out of its socket. This can happen if a pug gets into an accident or a fight with another dog. If this happens, cover the eye with a damp cloth and rush your dog to the vet. The vet may be able to put the eye back in place, although whether the dog will retain vision in the eye depends on the severity of the damage.\r\n', 'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/articles/health_tools/dog_breed_health_issues_slideshow/getty_rf_photo_of_english_bulldog.jpg?resize=652px:*&output-quality=100', '2023-04-10 15:07:29', 'Dr. James Herriot'),
(5, 'Grooming Your Bird', 'Bird grooming is an important part of keeping your feathered friend healthy and happy. Regular grooming can help maintain your bird\'s appearance, prevent health problems, and strengthen your bond with your pet. Here are some tips for grooming your bird:\r\n\r\nBathing: Most birds enjoy bathing and it helps them stay clean and healthy. You can provide a shallow dish of water in which your bird can splash around or you can mist them with a spray bottle. Make sure the water is not too cold or too hot.\r\n\r\nBeak trimming: Birds\' beaks grow continuously, and they may need periodic trimming to prevent overgrowth. This should be done by a professional, such as a veterinarian or an experienced bird groomer, to avoid injuring the bird.\r\n\r\nNail trimming: Overgrown nails can cause discomfort, pain, and even injury to your bird. Trimming the nails is essential for their health and safety. This should also be done by a professional, as it is easy to accidentally cut into the quick, which is a blood vessel in the nail.\r\n\r\nFeather trimming: Some bird owners choose to have their bird\'s feathers trimmed to prevent them from flying. This is a personal choice and should be discussed with your veterinarian.\r\n\r\nCleaning: Cleaning your bird\'s cage, perches, and toys is essential for their health and hygiene. Use a bird-safe disinfectant to clean their living space, and make sure to remove any droppings and uneaten food daily.\r\n\r\nIn conclusion, grooming your bird is an important part of keeping them healthy and happy. Regular bathing, beak and nail trimming, and cleaning their living space can help prevent health problems and strengthen your bond with your pet. Always consult with a professional before attempting any grooming procedures on your bird.', 'https://www.wikihow.com/images/thumb/8/85/Tell-if-Your-Pet-Budgie-Likes-You-Step-14.jpg/aid860419-v4-1200px-Tell-if-Your-Pet-Budgie-Likes-You-Step-14.jpg', '2023-04-17 15:12:20', 'Dr. Mukesh Kumar'),
(6, 'How to set up and maintain a healthy aquarium', 'Aquariums can be a beautiful and relaxing addition to any home, but they also require proper care and maintenance to ensure a healthy environment for your fish. Here are some tips for setting up and maintaining a healthy aquarium:\r\n\r\nChoose the right size aquarium: The size of your aquarium will depend on the number and type of fish you want to keep. As a general rule, a larger aquarium is easier to maintain than a smaller one, as it can support a greater volume of water and is less susceptible to fluctuations in water chemistry.\r\n\r\nSelect appropriate equipment: You will need a filter, heater, and lighting system for your aquarium. Choose equipment that is appropriate for the size of your aquarium and the needs of your fish.\r\n\r\nChoose suitable substrate and decorations: Substrate is the material that lines the bottom of the aquarium, and decorations such as plants and rocks can provide hiding places for your fish. Choose substrate and decorations that are appropriate for your fish species.\r\n\r\nCycle your aquarium: Cycling your aquarium is the process of establishing beneficial bacteria that break down waste products in the water. This process can take several weeks, but it is essential for maintaining a healthy environment for your fish.\r\n\r\nMonitor water chemistry: Regularly test the pH, ammonia, nitrite, and nitrate levels in your aquarium to ensure they are within the appropriate range for your fish species. Make water changes as necessary to maintain optimal water chemistry.\r\n\r\nFeed your fish appropriately: Overfeeding can lead to excess waste in the aquarium, which can harm your fish and affect water quality. Follow the feeding recommendations for your fish species, and remove any uneaten food promptly.\r\n\r\nIn conclusion, setting up and maintaining a healthy aquarium requires careful attention to detail and regular maintenance. Choose appropriate equipment and decorations, cycle your aquarium, monitor water chemistry, feed your fish appropriately, and perform regular maintenance to keep your fish happy and healthy.\r\n\r\n\r\n', 'https://www.homestratosphere.com/wp-content/uploads/2019/03/1-5-3-1.jpg.webp', '2023-04-21 15:22:29', 'Dr. David E. Bowles');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(11) NOT NULL,
  `docemail` varchar(255) DEFAULT NULL,
  `docname` varchar(255) DEFAULT NULL,
  `docpassword` varchar(255) DEFAULT NULL,
  `docnic` varchar(15) DEFAULT NULL,
  `doctel` varchar(15) DEFAULT NULL,
  `specialties` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docemail`, `docname`, `docpassword`, `docnic`, `doctel`, `specialties`) VALUES
(1, 'doctor@edoc.com', 'Test Doctor', '123', '000000000', '0110000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pemail` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `ppassword` varchar(255) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `pnic` varchar(15) DEFAULT NULL,
  `pdob` date DEFAULT NULL,
  `ptel` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pemail`, `pname`, `ppassword`, `paddress`, `pnic`, `pdob`, `ptel`) VALUES
(1, 'patient@edoc.com', 'Test Patient', '123', 'Sri Lanka', '0000000000', '2000-01-01', '0120000000'),
(2, 'emhashenudara@gmail.com', 'Hashen Udara', '123', 'Sri Lanka', '0110000000', '2022-06-03', '0700000000'),
(3, 'abc@gmail.com', 'sau rar', '123', 'shd6636', '000000000', '2023-04-01', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` int(11) NOT NULL,
  `docid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` time DEFAULT NULL,
  `nop` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `docid`, `title`, `scheduledate`, `scheduletime`, `nop`) VALUES
(1, '1', 'Test Session', '2050-01-01', '18:00:00', 50),
(2, '1', '1', '2022-06-10', '20:36:00', 1),
(3, '1', '12', '2022-06-10', '20:33:00', 1),
(4, '1', '1', '2022-06-10', '12:32:00', 1),
(5, '1', '1', '2022-06-10', '20:35:00', 1),
(6, '1', '12', '2022-06-10', '20:35:00', 1),
(7, '1', '1', '2022-06-24', '20:36:00', 1),
(8, '1', '12', '2022-06-10', '13:33:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(2) NOT NULL,
  `sname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `sname`) VALUES
(1, 'Accident and emergency medicine'),
(2, 'Black quarter (black-leg)'),
(3, 'Foot and mouth disease'),
(4, 'Blue tongue'),
(5, 'Pox'),
(6, 'Brucellosis of sheep'),
(7, 'Tetanus'),
(8, 'Clinical chemistry'),
(9, 'Listeriosis'),
(10, 'Campylobactor abortion (vibriosis)'),
(11, 'Bovine ephemeral fever'),
(12, 'Rinderpest'),
(13, 'Lesions'),
(14, 'Footrot'),
(15, 'Mastitis'),
(16, 'Bovine rhinotracheitis'),
(17, 'PPR (goat plague)'),
(18, 'Piglet diarrhea or scour'),
(19, 'Bovine babesiosis (tick fever)'),
(20, 'Theileriosis'),
(21, 'Immunology'),
(22, 'East coast fever'),
(23, 'Ringworm'),
(24, 'Milk fever'),
(25, 'Calf scour'),
(26, 'Microbiology'),
(27, 'Nephrology'),
(28, 'Neuro-psychiatry'),
(29, 'Neurology'),
(30, 'Neurosurgery'),
(31, 'Nuclear medicine'),
(32, 'Obstetrics and gynecology'),
(33, 'Occupational medicine'),
(34, 'Ophthalmology'),
(35, 'Orthopaedics'),
(36, 'Otorhinolaryngology'),
(37, 'Paediatric surgery'),
(38, 'Paediatrics'),
(39, 'Pathology'),
(40, 'Pharmacology'),
(41, 'Physical medicine and rehabilitation'),
(42, 'Plastic surgery'),
(43, 'Podiatric Medicine'),
(44, 'Podiatric Surgery'),
(45, 'Psychiatry'),
(46, 'Public health and Preventive Medicine'),
(47, 'Radiology'),
(48, 'Radiotherapy'),
(49, 'Respiratory medicine'),
(50, 'Rheumatology'),
(51, 'Stomatology'),
(52, 'Thoracic surgery'),
(53, 'Tropical medicine'),
(54, 'Urology'),
(55, 'Vascular surgery'),
(56, 'Venereology');

-- --------------------------------------------------------

--
-- Table structure for table `webuser`
--

CREATE TABLE `webuser` (
  `email` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `webuser`
--

INSERT INTO `webuser` (`email`, `usertype`) VALUES
('admin@edoc.com', 'a'),
('doctor@edoc.com', 'd'),
('patient@edoc.com', 'p'),
('emhashenudara@gmail.com', 'p'),
('abc@gmail.com', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `scheduleid` (`scheduleid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`),
  ADD KEY `specialties` (`specialties`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webuser`
--
ALTER TABLE `webuser`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
