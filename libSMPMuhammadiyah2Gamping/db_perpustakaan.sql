-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 10:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libsmpm2gamping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(6, 'Andrian', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jk`, `id_kelas`) VALUES
('3817', 'ADAM SANTOSO', 'L', '9A'),
('3818', 'AKBAR PAMUNGKAS SAPUTRA', 'L', '9A'),
('3819', 'ALINZKI RIDHA PRATAMA', 'L', '9A'),
('3820', 'ARDIAN ANGGA KURNIANTA', 'L', '9A'),
('3821', 'ASRORI BAGUS SYAH PUTRA', 'L', '9A'),
('3822', 'AZI ISSA SAPUTRA', 'L', '9A'),
('3823', 'BIMA SATRIYA DWI KUSANTO', 'L', '9A'),
('3824', 'CHANDRA DEWI PRAMUDITA', 'P', '9A'),
('3825', 'DINI SOSENA ATAMARAN', 'P', '9A'),
('3826', 'DWI ARIF WICAKSONO', 'L', '9A'),
('3827', 'FAISHAL YANFHA', 'L', '9A'),
('3828', 'FARELLYNO KHOIRUL AZZAM', 'L', '9A'),
('3829', 'GALUH WANGI RATNADUHITA', 'P', '9A'),
('3830', 'HANIF ARIF NURICO', 'L', '9A'),
('3831', 'JENA FENY ARDANI', 'P', '9A'),
('3832', 'KARIN SARASWATI', 'P', '9A'),
('3833', 'LAURA ANINDHITA EXSA ALIVIA', 'P', '9A'),
('3834', 'MARIO KRISTIAN MUHAMMAD', 'L', '9A'),
('3835', 'MARSYA INWA HAFIFAH', 'P', '9A'),
('3836', 'MUHAMMAD IRNAN SETYATAMA', 'L', '9A'),
('3837', 'MUHAMMAD RAFI ARDIANSYAH', 'L', '9A'),
('3838', 'MUHAMMAD RIDWAN NOOR RA\'UF', 'L', '9B'),
('3839', 'NAJWA NUR AINI', 'P', '9B'),
('3840', 'RIFKY OKTA PRATAMA', 'L', '9A'),
('3841', 'WANDA ESA MARLIANA', 'P', '9A'),
('3843', 'ALEXA SAHIH WIDURA', 'L', '9B'),
('3844', 'ANANG SETIYADI', 'L', '9B'),
('3845', 'ANDIKA FARIS', 'L', '9B'),
('3846', 'CHIKA PURNAMASARI', 'P', '9B'),
('3847', 'DAMAR NUGROHO JATI', 'L', '9B'),
('3848', 'ERLINDA AULIA DEVIANTI', 'P', '9B'),
('3849', 'FAHMI PRAMUDIYA NUGROHO', 'L', '9B'),
('3850', 'FATIR RIZQY PRABANDANI', 'L', '9B'),
('3852', 'KAVITA QUNTUM SAKNA QOMAIROH', 'P', '9B'),
('3853', 'LUTFI ARDIANSYAH', 'L', '9B'),
('3854', 'MAULANA FAJAR ADITYA', 'L', '9B'),
('3855', 'MUHAMMAD MU\'AMAR SULTONI', 'L', '9B'),
('3856', 'QONIT FIRZA MAIZHURA', 'P', '9B'),
('3857', 'RADITYA PUTRA RAMADANA', 'L', '9B'),
('3858', 'RAMA GILANG PERDANA', 'L', '9B'),
('3859', 'REVAN OKTODEO RAMADHAN', 'L', '9B'),
('3861', 'RIVA DWI KURNIAWAN', 'L', '9B'),
('3862', 'SEPTYASMI DEWI PUSPITA SARI', 'P', '9B'),
('3863', 'SOFIYA NIARA FADIL', 'P', '9B'),
('3864', 'ZULIAN FAIZAL FACHRI', 'L', '9B'),
('3865', 'ADIRA RIZKI HERLAMBANG', 'L', '9C'),
('3866', 'AGUSTINA DYAH AYU WINARTHA', 'P', '9C'),
('3867', 'ALFYNA MEYDHEA PURNAMA', 'P', '9C'),
('3868', 'ALVARA BERLIANNA PUTRI', 'P', '9C'),
('3869', 'BAGAS DESTA KURNIAWAN', 'L', '9C'),
('3870', 'BINTANG RIZKY ADITYA', 'L', '9C'),
('3871', 'EXCEL RIKO SETIAWAN', 'L', '9C'),
('3872', 'FADLY SYAHRY JUNIANTO', 'L', '9C'),
('3873', 'FAUZI FAJAR PUTRA SADEWA', 'L', '9C'),
('3874', 'IFAN RAMADHANI', 'L', '9C'),
('3875', 'ISMAYNI NUR ANJANI', 'P', '9C'),
('3876', 'KURNIA SRI SURYANING TYAS', 'P', '9C'),
('3877', 'MIFSAL YUNIARTA', 'L', '9C'),
('3878', 'MUHAMMAD BASKORO', 'L', '9C'),
('3879', 'MUHAMMAD DAMAR JATI', 'L', '9C'),
('3880', 'NAUFAL ARYA DANUARTA', 'L', '9C'),
('3881', 'NUR AZIZAH MU AMINAH', 'P', '9C'),
('3882', 'RADIT DWI KURNIAWAN', 'L', '9C'),
('3883', 'RAFFEL HERDEN SAPUTRA', 'L', '9C'),
('3884', 'RESTU SAPTO NUGROHO', 'L', '9C'),
('3885', 'RIANI NUR DWI YANTI', 'P', '9C'),
('3886', 'ROSYID DWI MUFAIL HISYAM', 'L', '9C'),
('3887', 'SRI ANDARUWATI', 'P', '9C'),
('3888', 'YAZHIT FEBRIANSAH', 'L', '9C'),
('3890', 'ANNISA ARDIYANTI BERLIANA PUTRI', 'P', '9A'),
('3892', 'MUHAMAD FADLI HAQIQI', 'L', '9B'),
('3893', 'ABIMANYU MAHARDIKA', 'L', '8C'),
('3894', 'AFREIHAN NEAVANUR ROMADHON', 'L', '8B'),
('3895', 'ALMA NUR AMIRA SULISTIANDRI', 'P', '8C'),
('3896', 'AMALINA TAQWIMATUL HASNA ', 'P', '8C'),
('3897', 'ANANDA ADITYA PRATAMA', 'L', '8B'),
('3898', 'ANDHIKA NOVAL SETIAWAN', 'L', '8C'),
('3899', 'ANDRE FAUZAN NUR ROHMAN', 'L', '8C'),
('3900', 'AQELA DIAN NUR KHALIFAH', 'P', '8C'),
('3901', 'BAGAS TERA PRATAMA ALFATAH', 'L', '8C'),
('3902', 'BELLA AVRILIANA PUTRI', 'P', '8A'),
('3903', 'CANNAVARO KUSUMA RAMADHAN', 'L', '8C'),
('3904', 'DEFAN ADITYA HERMAWAN', 'L', '8C'),
('3905', 'DESVIKA KURNIA RADITA', 'P', '8C'),
('3906', 'FATHURROCHMAN AGUNG DWI MARYONO', 'L', '8C'),
('3907', 'FEBRI SURYANTO', 'L', '8C'),
('3908', 'FIFI JENNYTA EKA PUTRI', 'P', '8C'),
('3909', 'FUAD ABDUL HASAN', 'L', '8C'),
('3910', 'HEDI SAKTI PRATAMA', 'L', '8B'),
('3911', 'MAFAZA ARDY SATYA RIZQI', 'L', '8C'),
('3912', 'MAURA FARADINA PUTRI', 'P', '8B'),
('3913', 'MOHAMMAD FADIL NATHAN', 'L', '8A'),
('3914', 'MUHAMMAD ALVIN ANDHIKA PRATAMA', 'L', '8B'),
('3915', 'NATASYA MEVIA PUTRI', 'P', '8B'),
('3916', 'NAZULLA HUAN NATASYA', 'P', '8C'),
('3917', 'PUTRI ANGKIT HERDIANA', 'P', '8C'),
('3918', 'RADITYA PUTRA SUTANTA', 'L', '8A'),
('3919', 'RADITYA SETYA PUTRA', 'L', '8B'),
('3920', 'RAFIKAN ROLANTINO', 'L', '8C'),
('3921', 'RAYIDHA ABDULLAH SETYAWAN', 'L', '8B'),
('3922', 'REVAN PUTRA RIYADINATA', 'L', '8B'),
('3923', 'RHAFFAELYA HAFSAH FATHIN', 'P', '8B'),
('3924', 'SEKAR TRIA MARETA', 'P', '8B'),
('3925', 'SYAHRUL RAMADHAN DWI SAPUTRA', 'L', '8C'),
('3926', 'ZIDNA AULIYATUL MAZIDA', 'P', '8B'),
('3927', 'ADHIIM ILYASA WISNU PUTRA', 'L', '8A'),
('3928', 'ADINDA ERISKA PUTRI', 'P', '8C'),
('3929', 'ALDY YULIANTO', 'L', '8B'),
('3930', 'ALSA VERLITA AFIANI', 'P', '8C'),
('3931', 'ANGEL KAYLA AURELITA', 'P', '8B'),
('3932', 'ANGGER AFIF ANANTO', 'L', '8B'),
('3933', 'DESI MEGA PUSPITASARI', 'P', '8B'),
('3934', 'DEVANDO FACHRY AFRIZAL', 'L', '8A'),
('3935', 'DEVINA', 'P', '8C'),
('3936', 'DIKA NUR HIDAYAT', 'L', '8B'),
('3938', 'FITRI SETIA NINGRUM', 'P', '8A'),
('3939', 'FREDIAN DENIS SAPUTRA', 'L', '8A'),
('3940', 'FRENDZY HAAFIZH MULKIFADA', 'L', '8A'),
('3941', 'GAMA ADITYA PRATAMA', 'L', '8A'),
('3942', 'GILANG RAKA ABDILLAH', 'L', '8A'),
('3943', 'KANZA BELINDA NATANI ELA', 'P', '8A'),
('3944', 'KHAYLA IRAIVA SULFI', 'P', '8C'),
('3945', 'LAYLA NASHITA BRENDA SAFA', 'P', '8B'),
('3946', 'MUHAMMAD ALFIAN NUR RIZAL GUNAWAN', 'L', '8B'),
('3947', 'MUHAMMAD HAFIZ BIN KARIM', 'L', '8A'),
('3948', 'MUHAMMAD ZAIN AFIF ABIYYU NAFIS', 'L', '8C'),
('3949', 'MUTIA SARWAHITA', 'P', '8C'),
('3950', 'NAVISA NUR FEBBYANTI', 'P', '8A'),
('3952', 'RIDWAN FADHIIL AMRULLAH GUNAWAN', 'L', '8A'),
('3953', 'RIKI ADHA DWIYANTO', 'L', '8A'),
('3954', 'RINDO RAISERAN KI\'I', 'L', '8A'),
('3955', 'RIZKY PRIMA SAPUTRA', 'L', '8B'),
('3956', 'ROLAND AQNANTHA', 'L', '8A'),
('3957', 'SATRIO DEVAN WIDIARSO', 'L', '8C'),
('3958', 'SITI NUR KHASANAH ', 'P', '8B'),
('3959', 'SOLAHUDIN AL AYUBI', 'L', '8A'),
('3960', 'YUFAREKA HENI SUSANTI', 'P', '8B'),
('3961', 'ADINTA HANUNG RAMANDANI', 'P', '8A'),
('3962', 'ALDY CAHYO WICAKSONO', 'L', '8B'),
('3963', 'ALFIAN OKTA NUR ROKHIM', 'L', '8B'),
('3964', 'ALIF ANDRI KURNIAWAN', 'L', '8A'),
('3965', 'ANITA RAHMAWATI', 'P', '8B'),
('3967', 'AZRIEL QUEZAL BIYAN', 'L', '8C'),
('3968', 'DAMITA NARASYUA AIRAVISA PUTRI', 'P', '8C'),
('3969', 'DIMAS RESTU ARYADI', 'L', '8C'),
('3970', 'DIMMAS PRAYOGGA', 'L', '8B'),
('3971', 'DRAJAT SATRIYA PUTRA TIAN', 'L', '8C'),
('3972', 'ERVINA YULIA ARTHA', 'P', '8A'),
('3973', 'EVAN SAPUTRA WIBOWO', 'L', '8B'),
('3974', 'EVELYNA SAVITRI', 'P', '8A'),
('3975', 'FARADILA', 'P', '8A'),
('3976', 'FARELL DENY PRASSETYO', 'L', '8B'),
('3977', 'GHASYA SHAFA ADIN', 'L', '8A'),
('3978', 'IRENO MACXILION BLESSENDRA', 'L', '8A'),
('3979', 'KEYSYA FADNI AZALIA', 'P', '8A'),
('3980', 'MOCHAMMAD ARDY FIRMANSYAH', 'L', '8B'),
('3981', 'MUHAMMAD RIZQI', 'L', '8C'),
('3982', 'NUR ASIFA', 'P', '8C'),
('3983', 'RIDHO PRATAMA', 'L', '8C'),
('3984', 'RISTI AISYA AZ-ZAHRA', 'P', '8B'),
('3985', 'RIZKI ALDO PRATAMA', 'L', '8B'),
('3986', 'RIZKY FADLY', 'L', '8A'),
('3987', 'SASI PUTIH ANAK KASI', 'P', '8A'),
('3988', 'SULTHAN ARSYA RIADY', 'L', '8B'),
('3989', 'SYALSABELA NURLINTARI', 'P', '8B'),
('3990', 'SYARIFAH KHAYLA NURIN NAJWA', 'P', '8A'),
('3992', 'SYIFA NUR FAJARINA', 'P', '8B'),
('3993', 'TASYA BAGUS SETIAWAN', 'L', '8A'),
('3994', 'ZANETA PUTRA SYUHADA', 'L', '8C'),
('3996', 'LOVY LAUNUN SAFA', 'P', '9B'),
('3997', 'ALFANO RAMA SYAHPUTRA', 'L', '7A'),
('3998', 'AULIA NOFITASARI RAHMADANI', 'P', '7A'),
('3999', 'BASYSYAR AZRI ALHARITS', 'L', '7A'),
('4000', 'CITRA GITA NIRMALA', 'P', '7A'),
('4001', 'DEO RONI FABIANSYAH', 'L', '7A'),
('4002', 'DESKA BERTHANIYA GUNAWAN', 'P', '7A'),
('4003', 'DESTA PUTRA PRATAMA', 'L', '7A'),
('4004', 'DHANENDRA FIKRA RIZQULLAH', 'L', '7A'),
('4005', 'DWI ANDYKA PRADANA', 'L', '7A'),
('4006', 'ERNINDA NURLITA RAMADHANI', 'P', '7A'),
('4007', 'FARHAN PERMANA ADITYA NUGRAHA', 'L', '7A'),
('4008', 'FIRMAN MUKTIKA AJI', 'L', '7A'),
('4009', 'FITRI FAUZIA', 'P', '7A'),
('4010', 'GHINA PUTRI SANTOSA', 'P', '7A'),
('4011', 'GIAVANA ABHINAYA PUTRA PRATAMA', 'L', '7A'),
('4012', 'HANIF AMIRUDIN', 'L', '7A'),
('4013', 'JANNISA MENTARI AMALINA', 'P', '7A'),
('4014', 'KAYANNA NINDY NURFATICHAH', 'P', '7A'),
('4015', 'MAULIDIA ALIFA CANDRANINGTYAS', 'P', '7A'),
('4016', 'MIFTA AULIA PRADITIA', 'P', '7A'),
('4017', 'MIFTAKHUL HIDAYAH', 'P', '7A'),
('4018', 'MUHAMAD RAMA PRADANA', 'L', '7A'),
('4019', 'MUHAMAD SENDY ARJUANZAH', 'L', '7A'),
('4020', 'MUHAMMAD ARDHITA PURNAMA', 'L', '7A'),
('4021', 'MUHAMMAD SALMAN ALFARIDZI', 'L', '7A'),
('4022', 'NARIMA NUR ISNAINI', 'P', '7A'),
('4023', 'NURI SIFA SINTIA BELA', 'P', '7A'),
('4024', 'PUTRI AMANDA PRATIWI', 'P', '7A'),
('4025', 'RAFA HEGA ALDIAN PUTRA', 'L', '7A'),
('4026', 'RAFA NUR FEBRIANTO', 'L', '7A'),
('4027', 'RAFI MAULANA', 'L', '7A'),
('4028', 'RAKHA YUMNA SATRIA', 'L', '7A'),
('4029', 'RANGGA AFRIZAL', 'L', '7A'),
('4030', 'RIO ADHA SANTOSO', 'L', '7A'),
('4031', 'TEGAR DWI WARDHANA', 'L', '7A'),
('4032', 'YOVANDI FERDIAN', 'L', '7A'),
('4033', 'ADIKA AJI SAPUTRA', 'L', '7B'),
('4034', 'ADITYA KADIM MAHING', 'L', '7B'),
('4035', 'AHMAD MARZUKI', 'L', '7B'),
('4036', 'AKHMAD RIZKY DARUSSALAM', 'L', '7B'),
('4037', 'ARJUN GALANG DWI SAPUTRA', 'L', '7B'),
('4038', 'ARJUNA ADI PAMUNGKAS', 'L', '7B'),
('4039', 'ARYADIKA JULIANSYAH PUTRA', 'L', '7B'),
('4040', 'AULIA RAHMAWATI', 'P', '7B'),
('4041', 'DHIMAS ADITYA NUGROHO', 'L', '7B'),
('4042', 'DIMAS PUTRA PERDANA', 'L', '7B'),
('4043', 'ERVITA EKA AFRILIA', 'P', '7B'),
('4044', 'FEBRYAN ADI PRATAMA', 'L', '7B'),
('4045', 'FISTA KIRANA PUTRI WAHYUDI', 'P', '7B'),
('4046', 'FURI NURIMA WATI', 'P', '7B'),
('4047', 'GENA AMIRA SUCI', 'P', '7B'),
('4048', 'GRENDY SHAWA KUSWOYO', 'L', '7B'),
('4049', 'HENY ANINDITA ZANUARTI', 'P', '7B'),
('4050', 'IHSAAN NURYA ZUHUD', 'L', '7B'),
('4051', 'IKSANUL KAMAL MUKHTAR', 'L', '7B'),
('4052', 'ILHAM SURYA PRATAMA', 'L', '7B'),
('4053', 'KARTIKA PUSPA LARASHINTA', 'P', '7B'),
('4054', 'KRISNA SANJAYA', 'L', '7B'),
('4055', 'KUSMANTO WIBOWO', 'L', '7B'),
('4056', 'LUTHFI NUR ARIFIN', 'L', '7B'),
('4057', 'MUHAMAD SEPTIAN PRASETIA PUTRA', 'L', '7B'),
('4058', 'MUHAMMAD FACHRIZA', 'L', '7B'),
('4059', 'MUHAMMAD KUKUH NOVIANTA', 'L', '7B'),
('4060', 'NAZHA PUTRIANINGRUM', 'P', '7B'),
('4061', 'NAZIHAH AULIA NAJAH', 'P', '7B'),
('4062', 'NIKO RIADI SAPUTRA', 'L', '7B'),
('4063', 'NISFI RAMADANI', 'P', '7B'),
('4064', 'RAHMA SYIFA KURNIASIH', 'P', '7B'),
('4065', 'REVALINA AYU SAPUTRI', 'P', '7B'),
('4066', 'RISKI HARTATI', 'P', '7B'),
('4067', 'SASKIA MARTA SELVIANA', 'P', '7B'),
('4068', 'TIFANO RASYID ERNESTA NIMA', 'L', '7B'),
('4069', 'ADELLIA DWI NUGRAHAINI', 'P', '7C'),
('4070', 'ADINDA RAHMA KUSUMANINGRUM', 'P', '7C'),
('4071', 'AISYAH NUR PUTRI ANDINI', 'P', '7C'),
('4072', 'ASKA DWI SAVIRA', 'P', '7C'),
('4073', 'BAGUS DUWI FANDRA', 'L', '7C'),
('4074', 'BULAN DESTIARA', 'P', '7C'),
('4075', 'DAVA RIZKY PUTRA RAMADHAN', 'L', '7C'),
('4076', 'DESIKA RASTIWI', 'P', '7C'),
('4077', 'DEVI KAYLANA SARI', 'P', '7C'),
('4078', 'DIMAS DWI PAMUNGKAS', 'L', '7C'),
('4079', 'DWI ANDIKA PRASATYA', 'L', '7C'),
('4080', 'FALKHAN ZANU FARAHMAN', 'L', '7C'),
('4081', 'FAUZI ZULKA ARGANA', 'L', '7C'),
('4082', 'GALANG GANUARTA', 'L', '7C'),
('4083', 'IBNU FADLI HANIFAN', 'L', '7C'),
('4084', 'ILFA RIZQINA ROZA', 'P', '7C'),
('4085', 'IRSYAD RINTO WICAKSONO', 'L', '7C'),
('4086', 'KHANSA RIZKY RAMADHANI', 'P', '7C'),
('4087', 'MEI PUJI ASTUTI', 'P', '7C'),
('4088', 'MUHAMAD FAHRI ATPRAJA', 'L', '7C'),
('4089', 'MUHAMMAD AXCEL JATHI PRATAMA', 'L', '7C'),
('4090', 'MUHAMMAD RIZKY PRATAMA', 'L', '7C'),
('4091', 'NICHOLAS KENZIE ALVARO', 'L', '7C'),
('4092', 'RAFI PRATAMA PUTRA', 'L', '7C'),
('4093', 'RAMADHAN DIMAS SAPUTRA', 'L', '7C'),
('4094', 'RENDY TRI KURNIAWAN', 'L', '7C'),
('4095', 'RICKY ADITYA PUTRA PRATAMA', 'L', '7C'),
('4096', 'RONALDHI AGASTA', 'L', '7C'),
('4097', 'RYENATA DWI RAHMAWATI', 'P', '7C'),
('4098', 'SALLWA AQILLA PUTRI SEJATI', 'P', '7C'),
('4099', 'TANIA PUTRI HARTANTO', 'P', '7C'),
('4100', 'VENA MEILANY', 'P', '7C'),
('4101', 'YANUAR AJI SAPUTRA', 'L', '7C'),
('4102', 'ZIDANE ANTORO PRATAMA', 'L', '7C'),
('4103', 'ROSSY NERY SAUSAN', 'P', '7C'),
('4104', 'TRI KUMALASARI', 'P', '7C'),
('4105', 'MUHAMMAD SAFIK', 'L', '7B'),
('4106', 'ARBIYAN MAULANA KURNIAWAN', 'L', '8A'),
('4107', 'FRISKA AMELLYA CAHYANI', 'P', '9A'),
('4108', 'NATASYA BUNGA NABILA', 'P', '9A');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `id_rak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `isbn`, `tahun`, `id_rak`) VALUES
('1', 'asasasa', 'andrian', 'Test', 'Test', '2013', 'bhs');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
('7A', 'VII A'),
('7B', 'VII B'),
('7C', 'VII C'),
('7D', 'VII D'),
('8A', 'VIII A'),
('8B', 'VIII B'),
('8C', 'VIII C'),
('9A', 'IX A'),
('9B', 'IX B'),
('9C', 'IX C');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(225) NOT NULL,
  `id_anggota` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tgl` date NOT NULL,
  `keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_anggota`, `jam`, `tgl`, `keperluan`) VALUES
(19, '0414', '14:58:41', '2023-01-15', 'MEMBACA'),
(20, '0415', '15:00:32', '2023-01-15', 'MEMBACA'),
(21, '0415', '15:00:41', '2023-01-15', 'MEMBACA'),
(22, '0414', '15:03:13', '2023-01-15', 'MEMBACA'),
(23, '0414', '15:03:14', '2023-01-15', 'MEMBACA'),
(24, '0414', '15:03:16', '2023-01-15', 'MEMBACA'),
(25, '0414', '15:03:17', '2023-01-15', 'MEMBACA'),
(26, '0414', '15:03:19', '2023-01-15', 'MEMBACA'),
(27, '0414', '15:03:20', '2023-01-15', 'MEMBACA'),
(28, '0414', '15:03:22', '2023-01-15', 'MEMBACA'),
(29, '0414', '15:03:23', '2023-01-15', 'MEMBACA'),
(30, '0414', '15:07:37', '2023-01-15', 'MEMBACA'),
(31, '0414', '15:07:55', '2023-01-15', 'MEMBACA'),
(32, '1404', '15:08:35', '2023-01-15', 'MEMBACA'),
(33, '0414', '20:11:21', '2023-01-15', 'MEMBACA'),
(34, '14', '11:20:12', '2023-01-16', 'MEMBACA'),
(35, '1', '11:20:31', '2023-01-16', 'MEMBACA'),
(37, '1', '12:54:36', '2023-01-18', 'MEMBACA'),
(38, '28', '12:55:19', '2023-01-18', 'MEMBACA'),
(40, '10', '00:00:00', '2022-12-02', 'TEST'),
(41, '10', '15:06:00', '2022-12-02', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(225) NOT NULL,
  `id_buku` varchar(100) NOT NULL,
  `id_anggota` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('P','K') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, '1', '1', '2023-01-13', '2023-01-15', 'K'),
(2, '1', '1', '2023-01-09', '2023-01-12', 'P'),
(5, '1', '1', '2023-01-16', '2023-01-23', 'K'),
(6, '1', '1', '2023-01-16', '2023-01-23', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(10) NOT NULL,
  `denda` int(100) NOT NULL,
  `keterlambatan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `denda`, `keterlambatan`) VALUES
(1, 3000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` varchar(10) NOT NULL,
  `rak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `rak`) VALUES
('bhs', 'Bahasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
