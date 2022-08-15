-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 06:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kd_artikel` varchar(5) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`kd_artikel`, `penulis`, `judul`, `abstrak`, `isi`, `gambar`) VALUES
('A0001', 'Nur Rizky Aulia', 'Pentingnya Pengetahuan Kesehatan Reproduksi Wanita', 'Menurut WHO yang dimaksud dengan kesehatan reproduksi bukan hanya terbebas dari penyakit ataupun kecacatan dalam aspek sistem reproduksi melainkan keadaan fisik, mental serta sosial yang sempurna.\n', '\"Menurut WHO yang dimaksud dengan kesehatan reproduksi bukan hanya terbebas dari penyakit ataupun kecacatan dalam aspek sistem reproduksi melainkan keadaan fisik, mental serta sosial yang sempurna. Kesehatan reproduksi wanita merupakan keadaan seorang wanita yang sehat baik secara fisik, mental dan sosial yang berhubungan dengan sistem dan fungsi reproduksi. Permasalahan kesehatan reproduksi pada wanita umumnya sangan dirasakan ketika masa menopause. \r\n\r\nKesadaran untuk menjaga kesehatan sistem reproduksi sebaiknya ditanamkan sejak masih remaja karena pada masa remaja merupakan waktu yang terbaik untuk membangun sebuah kebiasaan. Menjaga kesehatan reproduksi dapat dilakukan dengan menerapkan pola makan yan sehat, olahraga secara teratur serta mengkonsumsi vitamin atau suplemen yang dapat meningkatkan daya tahan tubuh.\r\n\r\nKurangnya pengetahuan terkait kesehatan reproduksi dapat menimbulkan beberapa hal yang tidak diinginkan contohnya pada kaum remaja dapat menimbulkan beberapa permasalahan misalnya penyakit seksual menular, kehamilan di usia muda, hingga aborsi yang berakibat pada hilangnya nyawa. Kurangnya edukasi mengenai macam-macam penyakit dan gejalanyang dapat menyerang juga akan memperlambat penanganan penyakit karena ketidaktahuan masyarakat.\r\n\r\n\r\nSumber :\r\nhttps://daldukkbpppa.bulelengkab.go.id/informasi/detail/artikel/keluarga-dan-kesehatan-reproduksi-perempuan-16\r\nhttps://dp3appkb.kalteng.go.id/artikel/pentingnya-pengetahuan-kesehatan-reproduksibagi-remaja.html\r\nhttps://www.halodoc.com/artikel/pentingnya-pengetahuan-kesehatan-reproduksi-bagi-remaja\r\nhttps://tirto.id/cara-menjaga-kesehatan-reproduksi-bagi-remaja-f1FA\"\r\n', 'GAMBAR ARTIKEL 1.jpg'),
('A0002', 'Nur Rizky Aulia', '10 Cara Menjaga Kesehatan Reproduksi Wanita', 'Menjaga kesehatan sistem reproduksi merupakan salah satu hal yang penting untuk para wanita, perilaku tersebut dapat dilakukan dengan kebiasaan sederhana sehari-hari. Berikut cara menjaganya...', 'Menjaga kesehatan sistem reproduksi merupakan salah satu hal yang penting dilakukan oleh setiap wanita, perilaku tersebut dapat dilakukan melakukan kebiasaan sederhana sehari-hari. Berikut ini 10 cara untuk menjaga kesehatan reproduksi wanita :\r\n\r\n1. Menjaga Kebersihan Organ Reproduksi\r\nCara membersihkan vagina yang benar yaitu dengan cara membasuh dari depan ke belakang (dari arah vagina menuju anus), terutama setelah buang air kecil dan buang air besar. Bila tidak dibersihkan dengan cara yang benar maka kuman dari anus dapat terbawa menuju vagina dan dapat menimbulkan infeksi pada vagina. Membersihkan vagina tidak disarankan menggunakan sabun khusus kewanitaan yang mengandung alkohol, pewangi, atau antiseptik, hal tersebut dapat menyebabkan iritasi dan membunuh bakteri normal di vagina.\r\n\r\n2. Konsumsi Makanan Sehat\r\nKonsumsi makanan sehat dan bergizi seimbang dapat membantu menjaga kesehatan organ reproduksi, sangat disarankan untuk mengkonsumsi makanan yang banyak mengandung protein, lemak sehat, antioksidan, serat, vitamin, dan mineral, seperti selenium, folat, zat besi, dan zinc. Kandungan nutrisi-nutrisi tersebut dapat diperoleh dari buah-buahan, sayuran, kacang-kacangan, susu, telur, daging, dan ikan. Selain menjaga makanan juga disarankan untuk minum 8 gelas air perhari dan membatasi konsumsi kafein.\r\n\r\n3. Menggunakan Minyak Zaitun\r\nKonsumsi makanan dengan minyak zaitu dapat menghindari risiko terjadinya sindrom polikistik ovarium atau polycystic ovarian syndrome (PCOS). PCOS merupakan gangguan yang bisa menyebabkan seorang wanita sulit hamil, gangguan hormon yang bisa menyerang wanita di usia subur. \r\n\r\n4. Hindari Merokok\r\nKebiasaan merokok dapat mengganggu kesehatan reproduksi karena zat-zat yang terdapat pada rokok dapat mengurangi jumlah dan kualitas sel telur dan mengganggu kesehatan rahim.\r\n\r\n5. Hindari Minum Alkohol\r\nKebiasaan minum minuman beralkohol dapat menggangu kesehatan organ reproduksi wanita karena kandungan alkohol dapat meningkatkan risiko terjadinya gangguan ovulasi.\r\n\r\n6. Hindari Seks Berisiko\r\nPerilaku seksual yang berisiko dapat mengganggu sistem reproduksi pada wanita, misalnya kebiasaan bergonta-ganti pasangan dan melakukan hubungan intim tanpa menggunakan pengaman (kondom). Selain memicu gangguan pada sistem reproduksi wanita, hal tersebut juga dapat meningkatkan risiko penyakit menular seksual.\r\n\r\n7. Cukup Istirahat dan Kelola Stres\r\nIstirahat yang cukup dengan tidur selama 7-9 jam setiap malamnya dapat membantu untuk menghindari gangguan pada sistem reproduksi wanita. Hindari stres juga dapat mencegah terjadinya gangguan pada sistem reproduksi wanita. Hal yang dapat mengatasi stres misalnya dengan jalan-jalan, olahraga, mencoba pijatan, atau yoga.\r\n\r\n8. Menjaga Berat Badan\r\nBerat badan berlebih (obesitas) atau berat badan yang terlalu rendah dapat mengganggu ovulasi dan produksi hormon yang mengatur kesuburan seorang wanita, maka disarankan untuk menjaga berat badan tetap ideal atau sesuai dengan indeks massa tubuh (IMT). \r\n\r\n9. Hindari Penggunaan Obat-Obatan\r\nPenggunaan obat-obatan atau suplemen diluar resep dokter menjadi salah satu faktor yang dapat mengganggu kesehatan reproduksi wanita.\r\n\r\n10. Gunakan Alat Kontrasepsi\r\nPenggunaan alat kontrasepsi untuk mencegah kehamilan yang tidak direncanakan dapat mencegah gangguan pada sistem reproduksi wanita.\r\n\r\n\r\nSumber :\r\nhttps://www.halodoc.com/artikel/ini-7-kebiasaan-yang-dilakukan-untuk-kesehatan-reproduksi-wanita\r\nhttps://www.alodokter.com/cara-menjaga-kesehatan-reproduksi-wanita\r\nhttps://ugm.ac.id/id/berita/22168-tetap-sehat-dengan-menjaga-kesehatan-organ-reproduksi', 'GAMBAR ARTIKEL 2.jpg'),
('A0003', 'Nur Rizky Aulia', 'Cara Mendeteksi dan Mencegah Kanker Serviks\r\n', 'Kanker Serviks adalah penyakit berbahaya yang menyerang kaum wanita dan dapat menyebabkan kematian pada wanita. Kanker serviks menjadi salah satu jenis kanker dengan korban jiwa tertinggi ....', 'Kanker Serviks adalah penyakit berbahaya yang menyerang kaum wanita dan dapat menyebabkan kematian pada wanita. Kanker serviks menjadi salah satu jenis kanker dengan korban jiwa tertinggi di Indonesia. Pengetahuan mengenai penyakit ini sangat penting agar dapat mengetahui cara mendeteksi dan mencegah kanker serviks sedini mungkin. Kanker serviks atau kanker leher rahim terjadi akibat infeksi virus HPV (human papillomavirus) yang biasanya disebarkan melalui hubungan seksual. Penyakit ini sering kali tidak menimbulkan gejala pada awalnya, akan tetapi ketika gejala mulai muncul kerap disalahartikan sebagai gejala menstruasi atau infeksi saluran kemih. Pada umumnya, gejala yang dialami oleh penderita kanker serviks yaitu perdarahan saat berhubungan seks atau setelah masa menopause dan menstruasi, keputihan yang mengandung darah dan berbau busuk, nyeri panggul, dan nyeri saat berhubungan intim.\r\nUpaya pencegahan kanker serviks dapat dilakukan dengan melakukan pola hidup sehat dengan CERDIK yaitu C = Cek kesehatan secara teratur, E = Enyahkan asap rokok, R = Rajin aktifitas fisik, D = Diet sehat dengan kalori seimbang, I = Istirahat cukup, K = Kelola stress. Berikut 6 cara yang dilakukan untuk mendeteksi kanker serviks :\r\n\r\n1. Pap Smear\r\nDilakukan untuk melihat keberadaan sel-sel yang mungkin dapat berkembang menjadi kanker, tes ini dilakukan dengan mengambil sampel sel di serviks (leher rahim).\r\n\r\n2. Kolposkopi\r\nDilakukan dengan rekomendasi dokter apabila ada hasil yang dicurigai tidak normal dari tes pap smear.\r\n\r\n3. Tes Schiller\r\nDilakukan dengan mengoleskan larutan yodium pada leher rahim untuk mendeteksi keberadaan jaringan yang tidak normal, jaringan yang sehat akan berwarna cokelat setelah diolesi, sedangkan jaringan yang tidak normal akan berwarna putih atau kuning.\r\n\r\n4. Kuretase Endoserviks (ECC)\r\nDilakukan untuk memeriksa bagian leher rahim yang tidak terjangkau saat tes kolposkopi.\r\n\r\n5. Biopsi Kerucut (Cone Biopsy)\r\nDilakukan jika terdapat hasil yang tidak normal dari hasil pap smear, tetapi juga dapat dilakukan untuk menghilangkan sel prekanker atau kanker serviks derajat ringan.\r\n\r\n6. Biopsi Punch (Punch Biopsy)\r\nDilakukan dengan cara mengangkat sampel jaringan yang dibutuhkan dengan menggunakan pisau berbentuk bundar. Prosedur ini mungkin akan dilakukan beberapa kali pada area sekitar serviks.\r\n\r\nUpaya yang dapat dilakukan untuk mencegah kanker serviks yaitu dengan cara menerima vaksin HPV, menghindari seks berisikom, menghindari kebiasaan merokok, mengonsumsi makanan bergizi seimbang, menjaga berat badan ideal.\r\n\r\n\r\nSumber :\r\nhttps://www.alodokter.com/ini-upaya-mencegah-dan-cara-mendeteksi-kanker-serviks\r\nhttp://p2ptm.kemkes.go.id/artikel-sehat/deteksi-dini-kanker-serviks-dengan-iva\r\nhttps://www.kompas.com/sains/read/2021/04/24/210000923/gejala-dan-cara-mencegah-kanker-serviks?page=all', 'GAMBAR ARTIKEL 3.jpg'),
('A0004', 'Nur Rizky Aulia', '9 Gangguan Kehamilan Yang Perlu Diwaspadai\r\n', 'Gangguan atau keluhan selama masa kehamilan merupakan hal yang umum dirasakan, namun jika gangguan tersebut terus terjadi dan dibiarkan maka dapat menjadi masalah yang serius. Gangguan umum .... ', 'Gangguan atau keluhan selama masa kehamilan merupakan hal yang umum dirasakan, namun jika gangguan tersebut terus terjadi dan dibiarkan maka dapat menjadi masalah yang serius. Gangguan yang umum terjadi berupa mual, nyeri punggung, serta konstipasi. Tapi ada juga gangguan kehamilan yang perlu diwaspadai, diantaranya :\r\n\r\n1. Hiperemesis Gravidarum\r\nHiperemesis Gravidarum merupakan gangguan kehamilan pada trimester pertama yang harus diwaspadai. Kondisi ini akan menyebabkan ibu hamil mengalami mual dan muntah yang tidak wajar dan tidak terkendalikan. Mual dan muntah terjadi terus menerus hingga menyebabkan ibu hamil menjadi lemas, kehilangan nafsu makan, bahkan terkadang menyebabkan tidak bisa makan dan minum sama sekali. Hal tersebut dapat menyebabkan dehidrasi hingga kekurangan nutrisi yang sangan beresiko terhadap ibu hamil dan janin yang dikandung.\r\n\r\n2. Anemia\r\nAnemia adalah kondisi saat tubuh kekurangan zat besi dan sel darah merah, sel darah merah berfungsi untuk menyalurkan oksigen ke seluruh tubuh. Jika kondisi ini terjadi maka suplai oksigen ke seluruh tubuh akan berkurang sehingga menyebabkan ancaman terhadap janin dan ibu hamil akan mengalami gejala mudah lelah. Anemia umumnya terjadi karena saat kehamilan volume darah akan meningkat. Untuk itu ibu hamil perlu diresepkan suplemen penambah darah untuk meminimalisir terjadinya anemia. Pada saat hamil seorang wanita akan lebih berisiko terkena anemia karena kebutuhan jumlah darah untuk membantu memberikan nutrisi bagi bayi. Beberapa jenis anemia dapat berkembang selama kehamilan termasuk pada anemia defisiensi besi, anemia defisiensi folat, dan kekurangan vitamin B12. Anemia defisiensi besi yang parah atau tidak diobati selama kehamilan dapat meningkatkan risiko mengalami bayi prematur atau berat badan lahir rendah, kehilangan banyak darah saat persalinan, depresi pascapersalinan, bayi dengan anemia dan anak dengan keterlambatan perkembangan.\r\n\r\n3. Infeksi Saluran Kemih\r\nInfeksi Saluran Kemih (ISK) dapat menyerang ibu hamil karena selama masa kehamilan frekuensi buang air kecil akan meningkat. Hal ini disebabkan karena janin yang tumbuh dapat memberikan tekanan pada kandung kemih dan saluran kencing, kondisi tersebut menjebak bakteri atau menyebabkan urin bocor. Pada usia kehamilan enam minggu hampir semua wanita hamil mengalami dilatasi ureter. Kondisi ini terjadi ketika uretra mengembang dan terus mengembang sampai melahirkan. Saluran kemih yang lebih besar, seiring dengan peningkatan volume kandung kemih dan penurunan tonus kandung kemih, semuanya menyebabkan urin tertahan di uretra, hal ini memungkinkan bakteri untuk tumbuh. Pada kondisi yang lebih buruk lagi, urin wanita hamil menjadi lebih terkonsentrasi dalam jenis hormon dan gula, hal ini dapat mendorong pertumbuhan bakteri dan menurunkan kemampuan tubuh melawan bakteri jahat yang mencoba masuk. ISK dapat menyebabkan beberapa kondisi seperti pecah ketuban dini, kelahiran prematur, serta infeksi pada janin. Gejala yang akan dirasakan yaitu demam, kelelahan, nyeri saat berkemih, mual, sakit punggung, sering buang air kecil, serta urin yang berwarna kemerahan. Namun harus diwaspadai karena pada beberapa kasus ibu hamil tidak merasakan gejala apapun saat terjangkit ISK. Oleh karena itu, perlu melakukan tes urin di awal kehamilan untuk mengetahui seberapa besar risiko ISK selama masa kehamilan.\r\n\r\n4. Plasenta Previa\r\nPlasenta Previa terjadi ketika plasenta terletak di bagian bawah rahim hingga sebagian atau seluruhnya menutupi serviks dan dapat menyebabkan perdarahan hebat pada ibu hamil. Cara mengatasi kondisi ini, ibu hamil perlu bedrest total dan mendapat pemantauan dari tenaga medis. Jika ibu hamil mengalami plasenta previa total hingga waktu melahirkan tiba, maka operasi caesar akan dilakukan. Plasenta Previa terjadi pada 1 dari 200 persalinan, Wanita yang memiliki plasenta previa harus melahirkan melalui operasi caesar. Pendarahan vagina merah cerah tanpa rasa sakit selama paruh kedua kehamilan adalah tanda utama plasenta previa, beberapa wanita juga mengalami kontraksi. Penyebab pasti dari plasenta previa tidak diketahui namun ada beberapa faktor pemicu misalnya memiliki bekas luka di rahim, kelahiran sesar sebelumnya, pengangkatan fibroid rahim, kuretase, mengandung lebih dari satu janin, berusia 35 tahun atau lebih, merokok, dan menggunakan kokain.\r\n\r\n5. Perdarahan\r\nPerdarahan ringan atau flek di awal kehamilan diderita oleh beberapa ibu hamil, hal ini termasuk normal terjadi dan tidak membutuhkan perawatan medis. Namun ibu hamil harus waspada jika selama kehamilan mengalami perdarahan disertai dengan kram, nyeri perut hebat, hingga pingsan. Kondisi tersebut dapat menjadi pertanda kehamilan ektopik atau hamil di luar kandungan yang mengancam jiwa.\r\n\r\n6. Infeksi\r\nInfeksi ringan seperti batuk pilek tergolong aman untuk ibu hamil, tapi ada beberapa jenis infeksi yang berbahaya bahkan mengancam nyawa ibu dan janin. Beberapa infeksi kehamilan yang perlu diwaspadai misalnya toksoplasmosis yaitu infeksi parasit pada bayi yang ditularkan oleh ibu akibat kontak dengan hewan peliharaan yangg menyebabkan bayi lahir cacat dengan gangguan penglihatan dan pendengaran serta gangguan lain, bacterial vaginosis yaitu infeksi vagina yang menyebabkan bayi lahir prematur dan berat badan bayi rendah, grup B steps yaitu infeksi bakteri pada jalan lahir yang menyebabkan kematian bayi jika melewatinya, cytomegalovirus yaitu infeksi parasit yang menular dari ibu ke bayi dan menyebabkan gangguan penglihatan pada bayi.\r\n\r\n7. Diabetes Gestasional\r\nKondisi saat terjadi peningkatan gula darah pada ibu hamil, umumnya dialami oleh ibu hamil yang memiliki riwayat diabetes dari keluarga. Diabetes Gestasional tidak menimbulkan gejala, sehingga ibu hamil perlu melakukan cek gula darah pada trimester kedua kehamilan. Bila dari hasil pengecekan hasil gula darah tinggi, maka akan dilakukan glucose tolerance test pada kehamilan 24 hingga 28 minggu. Diabetes gestasional perlu segera ditangani karena dapat menyebabkan risiko bayi mengidap diabetes, kelebihan berat badan pada bayi, penyakit kuning, sindrom gangguan pernapasan, kadar mineral rendah dalam darah, dan hipoglikemia serta komplikasi kehamilan. \r\n\r\n8. Preeklamsia\r\nPreeklamsia adalah komplikasi kehamilan yang ditandai dengan gejala tekanan darah tinggi serta protein positif pada urin, preeklamsia dapat menyebabkan pembuluh darah menyempit hingga mengganggu kinerja ginjal, hati, dan otak. Kondisi ini dapat mengancam nyawa ibu dan bayi dan belum diketahui penyebabnya. Dalam kasus yang serius, gejalanya mungkin termasuk sakit kepala parah, kabur atau hilangnya penglihatan sementara, sakit perut bagian atas, mual dan muntah, penurunan output urin, kenaikan berat badan mendadak, dan bengkak di wajah dan tangan. Preeklampsia dapat menyebabkan komplikasi serius pada ibu dan bayi, beberapa komplikasi termasuk pertumbuhan lambat, berat badan lahir rendah, kelahiran prematur, kesulitan bernafas untuk bayi, solusio plasenta, dan eklampsia. Eklampsia terjadi ketika preeklamsia berkembang dan menyerang sistem saraf pusat, menyebabkan kejang. Jika preeklamsia berat terjadi, maka dokter akan melakukan operasi segera untuk menyelamatkan nyawa ibu dan bayi. \r\n\r\n9. Oligohidramnion (Cairan Ketuban Terlalu Sedikit)\r\nKantung ketuban dipenuhi cairan yang melindungi dan mendukung bayi yang sedang berkembang, saat cairan ketuban terlalu sedikit maka kondisi ini disebut oligohidramnion. Komplikasi oligohidramnion meliputi keguguran, pematangan paru yang terlambat atau tidak lengkap, lahir sesar, dan cacat lahir.\r\n\r\n\r\nSumber :\r\nhttps://www.morulaivf.co.id/tanda-dan-gejala-gangguan-kehamilan-yang-perlu-diwaspadai/\r\nhttps://hot.liputan6.com/read/4082168/6-gangguan-kehamilan-yang-bisa-berakibat-fatal-jangan-abaikan', 'GAMBAR ARTIKEL \n4.jpg'),
('A0005', 'Nur Rizky Aulia', 'Penyebab, Jenis dan Pengobatan Kista\r\n', 'Kista merupakan benjolan tertutup, biasanya berisi cairan, udara, nanah, atau zat padat seperti rambut, yang dapat tumbuh hampir di bagian tubuh mana saja atau di bawah kulit. Benjolan tersebut ....', 'Kista merupakan benjolan tertutup, biasanya berisi cairan, udara, nanah, atau zat padat seperti rambut, yang dapat tumbuh hampir di bagian tubuh mana saja atau di bawah kulit. Benjolan tersebut memiliki ukuran yang bervariasi, dari mikroskopis hingga sangat besar, umumnya kista bersifat jinak namun beberapa kista dapat menjadi kanker atau prakanker. Kista umumnya tumbuh di bawah kulit, namun kista juga dapat tumbuh di organ dalam tubuh, seperti indung telur (ovarium). Kista biasanya akan membesar dengan lambat dan umumnya tidak menimbulkan nyeri. Namun, nyeri dapat timbul jika kista membesar dan menekan organ, pecah, terinfeksi, atau tumbuh di daerah yang sensitif.\r\n\r\nPenyebab Kista\r\nKista umumnya disebabkan oleh infeksi, kelenjar sebasea (kelenjar penghasil sebum atau minyak) yang tersumbat, peradangan yang terjadi dalam jangka panjang (kronis), penyakit bawaan lahir atau tindikan. Kista akan menyebabkan rasa sakit jika pecah, terinfeksi, atau meradang. Ada beberapa penyebab kista yaitu tumor, kondisi genetik, cacat pada sel, kondisi peradangan kronis, penyumbatan saluran dalam tubuh yang menyebabkan cairan menumpuk, parasit, cedera yang merusak pembuluh.\r\n\r\nGejala Kista\r\nKista saat berukuran kecil umumnya tidak memiliki gejala, jika kista menjadi besar, memindahkan atau menekan organ lain, atau menghalangi aliran cairan normal di jaringan seperti hati, pankreas, atau organ lain maka rasa sakit atau gejala lain yang terkait dengan organ tersebut dapat berkembang. Kista juga dapat menimbulkan gejala kemerahan di kulit sekitar area kista, keluar darah atau nanah yang berbau tidak sedap dari benjolan, nyeri akibat infeksi pada kista, kaku atau kesemutan, terutama di bagian tubuh yang ditumbuhi kista.\r\n\r\nFaktor Risiko Kista\r\nBeberapa faktor yang dapat meningkatkan risiko tumbuhnya kista, yaitu :\r\n1. Memiliki keluarga yang menderita kista\r\n2. Mengalami cedera atau kelainan pada organ tubuh tertentu\r\n3. Menderita infeksi\r\n4. Menderita tumor atau kanker\r\n5. Mengalami penyumbatan pada saluran dalam tubuh\r\n\r\nJenis Kista\r\nAda ratusan jenis kista yang berbeda, berikut ini beberapa jenis kista yang umum diderita yaitu :\r\n1. Kista Epidermoid, merupakan benjolan kecil jinak yang diisi dengan protein keratin yang berkembang ketika lapisan atas kulit, yang disebut epidermis, tumbuh lebih dalam dari pada bergerak ke luar menuju permukaan untuk akhirnya terlepas.\r\n2. Kista Sebaceous, merupakan benjolan berisi sebum dan sering terbentuk di dalam kelenjar sebasea yang merupakan bagian dari folikel kulit dan rambut yang menghasilkan minyak.\r\n3. Kista Payudara, merupakan kondisi cairan yang terkumpul di dekat kelenjar payudara dan dapat menyebabkan rasa sakit atau nyeri tekan di daerah yang terdampak.\r\n4. Kista Ovarium, merupakan benjolan yang terbentuk ketika folikel yang biasanya melepaskan sel telur tidak terbuka, menyebabkan cairan menumpuk dan membentuk kista.\r\n5. Kista Ganglion, merupakan benjolan yang terbentuk di dekat area sendi pergelangan tangan atau tangan dan juga dapat berkembang di area kaki atau pergelangan kaki.\r\n6. Jerawat Kistik, merupakan jenis jerawat yang paling parah ini adalah hasil dari kombinasi bakteri, minyak, dan kulit mati yang menyumbat pori-pori, biasanya terlihat seperti bisul besar berisi nanah.\r\n7. Kista Pilar, merupakan jenis kista non-kanker yang tidak nyaman ini adalah benjolan jinak berwarna kulit yang terbentuk di permukaan kulit.\r\n8. Kista Pilonidal, merupakan kista yang terbentuk di dekat bagian atas bokong biasanya dipenuhi dengan kotoran kulit, minyak tubuh, dan rambut.\r\n9. Kista Baker, merupakan benjolan berisi cairan yang terbentuk di belakang lutut akibat radang sendi atau cedera lutut, dapat menimbulkan pembengkakan dan nyeri saat menekuk atau meluruskan kaki dan dapat menyebabkan gerakan penderitanya menjadi terbatas.\r\n10. Kista Celah Brankial, merupakan penyakit bawaan lahir yang ditandai dengan kemunculan benjolan pada salah satu atau kedua sisi leher. Benjolan juga dapat tumbuh di bawah tulang selangka. Kondisi ini terjadi pada minggu kelima perkembangan janin.\r\n11. Kista Aterom, merupakan benjolan berisi cairan yang muncul di wajah, leher, dada, atau punggung. Benjolan tumbuh perlahan dan bersifat jinak, tetapi bisa menimbulkan nyeri bila membesar.\r\n12. Kista Epidermoid merupakan benjolan yang dapat tumbuh di kepala, leher, wajah, atau punggung. Kista ini ditandai dengan benjolan kecil, keras, berwarna kuning kecoklatan, dan berisi cairan kental berbau, disebabkan oleh penumpukan protein pembentuk rambut, kulit, dan kuku (keratin), di bawah kulit.\r\n\r\nPengobatan Kista\r\nDala beberapa kasus kista dapat membaik dengan sendirinya, dengan meletakan kompres hangat di atas kista juga dapat mempercepat penyembuhan. Namun kista yang semakin parah memerlukan perawatan medis. Beberapa cara umum perawatan medis yaitu menggunakan jarum untuk mengalirkan cairan dan bahan lain dalam kista, memberikan obat untuk mengurangi peradangan, atau melakukan operasi pengangkatan kista.\r\n\r\nPencegahan Kista\r\nKista umumnya tidak dapat dicegah, namun untuk kaum yang rentan terhadap kista ovarium dapat mencegah pembentukan kista baru dengan menggunakan kontrasepsi hormona, kista pilonidal juga dapat dicegah dari pembentukan dengan menjaga kulit di daerah yang terkena bersih dan kering dan sering berdiri dibanding duduk dalam waktu lama juga dapat membantu mencegah kista ini, kalazion dapat dicegah dengan membersihkan kelopak mata menggunakan pembersih yang lembut, terutama setelah menggunakan kosmetik.\r\n\r\n\r\nSumber :\r\nhttps://health.detik.com/berita-detikhealth/d-6112016/kista-itu-apa-sih-kenali-penyebab-jenis-serta-pengobatannya/2\r\nhttps://www.alodokter.com/kista', 'GAMBAR ARTIKEL 5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pakar`
--

CREATE TABLE `data_pakar` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pakar`
--

INSERT INTO `data_pakar` (`username`, `password`, `pertanyaan`, `jawaban`) VALUES
('lahargo', 'e10adc3949ba59abbe56e057f20f883e', 'Apa Makanan Favorit Anda?', 'bb9f601ba081ab8d336a14a697048cb0'),
('adminn', 'd638d193eb29ac87c0950ab36b80e0e8', 'Apa Makanan Favorit Anda?', 'd9c84901c7cdbfddbc3b75af86ba1701'),
('jesreel', 'e10adc3949ba59abbe56e057f20f883e', 'Apa Buku Favorit Anda?', 'd638d193eb29ac87c0950ab36b80e0e8');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `usia` int(2) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`username`, `password`, `nama_user`, `usia`, `jenis_kelamin`, `alamat`, `pertanyaan`, `jawaban`, `hak_akses`) VALUES
('Jesss', 'e10adc3949ba59abbe56e057f20f883e', 'jesreel', 123, 'L', 'Bogor', 'Apa Makanan Favorit Anda?', '575d7351946e7bd7ded33f4e33f4ad24', 'user'),
('Testing', 'e10adc3949ba59abbe56e057f20f883e', 'Pengujian Internal', 99, 'L', 'Gunadarma', 'Apa Makanan Favorit Anda?', '62d08f70f89c457c93d4fd287a6f98e8', 'user'),
('daffa', '107daf1e8302be41388bb96c1f17ada2', 'Daffa Reyhan Arsyad', 16, 'L', 'Jakarta Selatan', 'Apa Buku Favorit Anda?', 'd638d193eb29ac87c0950ab36b80e0e8', 'pakar'),
('muhamadhafidz', '5f4dcc3b5aa765d61d8327deb882cf99', 'nur hafidz n', 15, 'L', 'Tangerang Banten', 'Apa Makanan Favorit Anda?', '099b3b060154898840f0ebdfb46ec78f', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G0025', 'Lemas'),
('G0026', 'Sesak'),
('G0027', 'Perdarahan Pervaginam (Diluar Masa Menstruasi, Setelah Berhubungan Seksual Atau Setelah Menopause)'),
('G0024', 'Nyeri Saat Menstruasi, Setelah Berhubungan Seksual Atau Saat Terjadi Penekanan Pada Panggul'),
('G0023', 'Teraba Benjolan Di Vagina'),
('G0022', 'Nyeri Perut'),
('G0021', 'Teraba Benjolan Pada Bagian Perut'),
('G0020', 'Perut Terasa Penuh Dan Membesar'),
('G0019', 'Mual Dan Muntah'),
('G0018', 'Nyeri Ketika Buang Air Kecil'),
('G0017', 'Mudah Merasa Lelah Atau Tidak Enak Badan'),
('G0016', 'Riwayat Berhubungan Seksual'),
('G0015', 'Nyeri Panggul Atau Perut Bagian Bawah'),
('G0014', 'Keputihan Berbau Tidak Sedap'),
('G0012', 'Menstruasi Dalam Jumlah Banyak'),
('G0013', 'Demam'),
('G0011', 'Keluhan Infertilitas Atau Sulit Mendapatkan Keturunan'),
('G0010', 'Dispareunia (Nyeri Sebelum, Selama Atau Sesudah Berhubungan Seksual)'),
('G0009', 'Nyeri Selama Masa Haid Terasa Sangat Menyakitkan'),
('G0008', 'Sering Buang Air Kecil'),
('G0007', 'Sulit Buang Air Besar'),
('G0006', 'Merasa Sangat Kenyang Walau Hanya Makan Sedikit Atau Perut Terasa Kembung'),
('G0005', 'Memiliki Riwayat Keluarga Mengidap Penyakit Kista\r\n'),
('G0003', 'Haid Tidak Teratur'),
('G0004', 'Teraba Benjolan Pada Bagian Perut Bawah\r\n'),
('G0002', 'Nyeri Perut Bagian Kiri Atau Kanan Bawah (Panggul)'),
('G0001', 'Nyeri Secara Tiba-Tiba Pada Area Panggul'),
('G0028', 'Memiliki Riwayat Keluarga Mengidap Kanker Serviks'),
('G0029', 'Kehilangan Nafsu Makan'),
('G0030', 'Sulit Buang Air Kecil'),
('G0031', 'Perdarahan Setelah Melakukan Hubungan Seksual'),
('G0032', 'Perdarahan Pascamenopause'),
('G0033', 'Perdarahan Diantara Waktu Menstruasi'),
('G0034', 'Teraba Benjolan Di Vagina Yang Tidak Terasa Sakit dan Benjolan Semakin Terasa Bila Batuk Atau Mengedan'),
('G0035', 'Terasa Pegal Di Panggul, Perut Dan Punggung Bagian Bawah'),
('G0036', 'Perasaan Berat Atau Tekanan Di Panggul'),
('G0037', 'Merasa Ada Sesuatu Yang Mengganjal Saat Duduk'),
('G0038', 'Benjolan Di Sisi Bibir Vagina, Kemerahan dan Terasa Nyeri'),
('G0039', 'Kemerahan Dan Nyeri Disekitar Vagina'),
('G0040', 'Flek Atau Perdarahan Dari Vagina Setelah Berhubungan Seksual dan Terasa Perih'),
('G0041', 'Gatal Di Area Vagina Atau Disekitarnya'),
('G0042', 'Riwayat Penggunaan Sabun Pembersih Vagina');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id_diagnosa` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `tanggal_diagnosa` date NOT NULL,
  `persentase` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id_diagnosa`, `username`, `kode_penyakit`, `tanggal_diagnosa`, `persentase`) VALUES
(28, 'muhamadhafidz', '', '2022-07-27', 0),
(29, 'muhamadhafidz', 'P0001', '2022-07-28', 90),
(30, 'muhamadhafidz', '', '2022-07-28', 0),
(31, 'muhamadhafidz', 'P0001', '2022-07-28', 80),
(32, 'muhamadhafidz', 'P0001', '2022-07-28', 80),
(33, 'muhamadhafidz', 'P0001', '2022-07-28', 80),
(34, 'muhamadhafidz', 'P0001', '2022-07-28', 80),
(35, 'muhamadhafidz', 'P0001', '2022-07-28', 60),
(36, 'muhamadhafidz', 'P0001', '2022-07-28', 60),
(37, 'muhamadhafidz', 'P0001', '2022-07-28', 30),
(38, 'muhamadhafidz', 'P0001', '2022-07-28', 30),
(39, 'muhamadhafidz', 'P0002', '2022-07-28', 90),
(40, 'muhamadhafidz', '', '2022-07-28', 0),
(41, 'muhamadhafidz', 'P0002', '2022-07-28', 50),
(42, 'muhamadhafidz', '', '2022-07-28', 0),
(43, 'muhamadhafidz', 'P0002', '2022-07-28', 35),
(44, 'daffa', 'P0001', '2022-08-02', 70),
(45, 'muhamadhafidz', '', '2022-08-07', 0),
(46, 'muhamadhafidz', 'P0001', '2022-08-07', 80),
(47, 'muhamadhafidz', 'P0001', '2022-08-07', 80),
(48, 'muhamadhafidz', 'P0001', '2022-08-07', 70),
(49, 'Jesss', '', '2022-08-13', 0),
(50, 'Jesss', '', '2022-08-13', 0),
(51, 'Jesss', 'P0003', '2022-08-13', 78),
(52, 'Jesss', 'P0002', '2022-08-13', 100),
(53, 'Jesss', 'P0010', '2022-08-15', 40),
(54, 'Jesss', 'P0005', '2022-08-15', 30),
(55, 'Jesss', 'P0003', '2022-08-15', 32),
(56, 'Jesss', 'P0003', '2022-08-15', 32),
(57, 'Jesss', '', '2022-08-15', 0),
(58, 'Jesss', 'P0009', '2022-08-15', 40);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(60) NOT NULL,
  `definisi` text NOT NULL,
  `pengobatan` text NOT NULL,
  `pencegahan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `definisi`, `pengobatan`, `pencegahan`) VALUES
('P0010', 'Vaginitis', 'Vaginitis adalah peradangan pada vagina yang ditandai dengan gatal di vagina dan keputihan. Berbeda dengan keputihan normal yang tidak berbau, keputihan yang dialami penderita vaginitis berbau tidak sedap. Vagina secara alami terus memproduksi cairan, yang jumlah dan teksturnya bisa berubah-ubah sepanjang siklus menstruasi. Pada kondisi tertentu, cairan vagina akan lebih kental dan banyak, lalu muncul sebagai keputihan. Namun, perlu diketahui bahwa tidak semua keputihan merupakan gejala vaginitis.\r\n', 'Pemberian obat antibiotik, Pemberian obat antijamur, Terapi pengganti hormon\r\n', 'Bersihkan vagina dengan air tanpa menggunakan sabun, dan hindari membasuh bagian dalam vagina. Selalu bersihkan vagina dari arah depan ke belakang setiap kali selesai buang air, dan pastikan menyeka vagina hingga benar-benar kering. Seka area kemaluan hingga benar-benar kering sebelum mengenakan celana dalam agar celana tidak lembap. Hindari penggunaan benda yang bisa menyebabkan iritasi atau alergi pada vagina, seperti pembalut yang mengandung pewangi atau sabun pembersih vagina. Lakukan hubungan seks yang aman, misalnya dengan menggunakan kondom atau tidak bergonta-ganti pasangan. Gunakan air hangat bila ingin berendam. Pilih celana dalam yang tidak ketat dan berbahan katun. Kontrol kadar gula darah bila menderita diabetes.\r\n'),
('P0006', 'Polip Serviks', 'Polip serviks adalah pertumbuhan sel tumor jinak yang muncul di serviks atau leher rahim. Polip biasanya berwarna merah seperti ceri, keunguan, atau putih cenderung abu-abu. Wujud dan ukurannya bervariasi, terkadang seperti umbi-umbian yang menempel pada batang pohon tipis. Ukuran dari tumor jinak ini sekitar 1-2 cm atau tidak lebih besar dari biji wijen. Polip pada leher rahim biasanya bersifat nonkanker. Meski begitu, ada kemungkinan tumor jinak ini bisa berubah menjadi kanker atau polip prakanker.', 'Prosedur pengangkatan tanpa pereda nyeri, Operasi pembedahan dengan bius total', 'Melakukan pemeriksaan panggul di dokter kandungan secara teratur. Memakai celana dalam bahan katun agar mencegah panas berlebih yang bisa menjadi sumber infeksi. Gunakan kondom saat berhubungan seksual. Lakukan pap smear secara teratur.'),
('P0007', 'Cervicitis / Servisitis', 'Servisitis adalah peradangan pada serviks atau leher rahim. Peradangan ini dapat ditandai dengan perdarahan dari vagina di luar masa menstruasi, nyeri saat berhubungan seksual, atau keluarnya cairan abnormal dari vagina. Serviks merupakan bagian paling bawah dari rahim yang terhubung dengan vagina. Layaknya jaringan lain, serviks juga dapat mengalami peradangan karena berbagai penyebab. Penyebabnya bisa berupa infeksi, misalnya infeksi menular seksual, maupun noninfeksi, seperti iritasi atau alergi.', 'Antibiotik, Antivirus, Antijamur\r\n', 'Melakukan hubungan seksual yang aman, yaitu dengan memakai pengaman dan tidak berganti-ganti pasangan. Menghindari produk-produk kewanitaan yang mengandung pewangi, karena bisa menyebabkan iritasi pada vagina dan serviks. Menjaga kebersihan vagina untuk mengurangi risiko infeksi.\r\n'),
('P0008', 'Prolaps Uteri', 'Prolaps uterus adalah Kelainan organ rahim yang terjadi ketika rahim turun ke atau ke dalam vagina. Kondisi terjadi ketika otot-otot dasar panggul dan ligamen menjadi lemah dan tidak lagi mampu menopang rahim.\r\n', 'Vaginal pessary, Bedah\r\n', 'Senam kegel. Cegah sembelit. Hindari beban berat. Mengendalikan batuk. Cegah obesitas.\r\n'),
('P0009', 'Kista Bartholin/Bartholinitis', 'Kista bartolin merupakan kantung berisi cairan jernih yang terbentuk akibat tersumbatnya kelenjar bartolin. Kelenjar bartolin itu sendiri terletak di bibir vagina (labia). Kelenjar tersebut menghasilkan cairan yang bermanfaat untuk mencegah iritasi akibat gesekan saat hubungan intim. Jika kelenjar bartolin tersumbat, cairan akan menumpuk dan memicu terjadinya kista.', 'Mengonsumsi obat anti-nyeri dan mengompres kista dengan air hangat, Memasukkan selang kateter kecil ke dalam kista selama 2–4 minggu untuk mengalirkan cairan dari dalam kista keluar,  Marsupialisasi, Aspirasi jarum, Pengangkatan kelenjar bartolin (eksisi)\r\n', 'Menjaga diri sendiri agar terhindar dari penyakit menular seksual. Melakukan hubungan seks yang aman. Berhubungan intim hanya dengan satu pasangan seksual (suami/ istri) dan menggunakan kondom saat berhubungan intim bila diperlukan.\r\n'),
('P0004', 'Mioma Uteri\r\n', 'Mioma adalah pertumbuhan massa di dalam rahim atau di luar rahim yang tidak bersifat ganas. Mioma berasal dari sel otot polos rahim, dan pada beberapa kasus juga berasal dari otot polos pembuluh darah rahim. Jumlah dan ukuran mioma bervariasi, terkadang ditemukan satu atau lebih dari satu. Biasanya mioma tersebut berlokasi di dinding rahim, dan bentuknya menonjol ke rongga endometrium atau permukaan rahim.', 'USG, Terapi Hormonal, Miektomi, Histerektomi.\r\n', 'Olahraga/aktivitas fisik. Tubuh akan membakar kalori lebih sedikit ketika Anda malas bergerak. Pola makan sehat. Pola makan yang tinggi kalori, sedikit sayur dan buah, sering melewatkan sarapan, dan minum minuman tinggi gula dapat menyebabkan terjadinya obesitas. Hindari merokok. Kebiasaan ini dapat meningkatkan risiko mioma.'),
('P0005', 'Kanker Serviks', 'Kanker serviks adalah kanker yang tumbuh pada sel-sel di leher rahim. Kanker ini umumnya berkembang perlahan dan baru menunjukkan gejala ketika sudah memasuki stadium lanjut. Oleh sebab itu, penting untuk mendeteksi kanker serviks sejak dini sebelum timbul masalah serius. Serviks atau leher rahim adalah bagian rahim yang terhubung ke vagina. Fungsinya adalah untuk memproduksi lendir yang membantu menyalurkan sperma dari vagina ke rahim saat berhubungan seksual. Serviks juga berfungsi melindungi rahim dari bakteri dan benda asing dari luar.', 'Bedah, Radioterapi, Kemoterapi, Terapi Target.', 'Vaksin HPV. Berhubungan seks secara aman, yaitu dengan menggunakan kondom dan menghindari berhubungan seksual dengan lebih dari satu pasangan. Menjalani pap smear atau pemeriksaan IVA secara berkala agar kondisi serviks selalu terpantau dan agar penanganan bisa lebih cepat dilakukan bila ada kanker. Tidak merokok.'),
('P0001', 'Kista Ovarium Terpuntir', 'Kista ovarium adalah kantong berisi cairan yang tumbuh pada indung telur (ovarium) wanita. Kista ini biasanya muncul selama masa subur atau selama wanita  mengalami menstruasi. Tiap wanita memiliki dua indung telur (ovarium), satu di bagian kanan dan satu lagi di sebelah kiri rahim. Ovarium yang berukuran sebesar biji kenari ini merupakan bagian dari sistem reproduksi wanita. Ovarium berfungsi untuk menghasilkan sel telur tiap bulan (mulai dari masa pubertas hingga menopause), serta memproduksi hormon estrogen dan progesteron. Fungsi ovarium terkadang dapat terganggu, kista termasuk jenis gangguan yang sering terjadi.', 'Pemantauan Rutin, Konsumsi Pil KB, Prosedur Operasi.', 'Melakukan pemeriksaan panggul secara rutin. Waspada terhadap perubahan dalam siklus menstruasi, termasuk gejala menstruasi yang tidak biasa, terutama yang terjadi lebih dari beberapa siklus. Segera berkonsultasi dengan dokter bila mengalami gejala yang mengkhawatirkan.'),
('P0002', 'Endometriosis', 'Kista endometriosis adalah kista yang terbentuk saat jaringan endometrium tumbuh di ovarium atau indung telur. Isinya berupa cairan berukuran besar pada indung telur, bahkan bisa membungkusnya. Pada kebanyakan kasus, keadaan ini muncul akibat endometriosis yang tidak mendapat penanganan tepat. Dikenal sebagai endometrioma atau \"chocolate cyst\" (karena berisi cairan berwarna cokelat tua yang terdiri dari darah dan jaringan menstruasi lama).', 'Konsumsi Obat-obatan, Terapi Hormon, Operasi', 'Berolahraga secara rutin, minimal 30 menit setiap hari. Menjaga berat badan agar tetap ideal. Menurunkan berat badan bila mengalami obesitas. Mengurangi konsumsi alkohol secara berlebihan. Mengurangi konsumsi kafein yang berlebihan. Berkonsultasi dengan dokter mengenai penggunaan alat kontrasepsi yang tepat.'),
('P0003', 'PID (Pelvic Inflammation Disease) / Penyakit Radang Panggul', 'Radang panggul atau pelvic inflammatory disease (PID) adalah infeksi pada organ reproduksi wanita, seperti serviks, rahim, dan ovarium. Salah satu penyebab paling sering dari radang panggul adalah infeksi menular seksual. Radang panggul umumnya dialami oleh wanita usia 15–25 tahun yang aktif berhubungan seksual. Radang panggul bisa ditandai dengan nyeri di panggul atau perut bagian bawah. Kondisi ini perlu mendapat penanganan untuk mencegah terjadinya komplikasi, seperti kehamilan di luar kandungan (ektopik) atau kemandulan (infertilitas).', 'Konsumsi Obat-obatan, Operasi', 'Jangan berganti-ganti pasangan. Gunakan kondom saat berhubungan seksual. Periksa kesehatan secara rutin jika memiliki risiko tertular infeksi menular seksual. Konsultasikan pilihan dan rencana penggunaan alat kontrasepsi dengan dokter. Bersihkan area kemaluan dari depan ke belakang dan jangan sebaliknya.');

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `kd_peta` varchar(5) NOT NULL,
  `nama_rs` varchar(30) NOT NULL,
  `kota` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`kd_peta`, `nama_rs`, `kota`, `link`) VALUES
('L0001', 'RS Marzoeki Mahdi', 'Bogor\r\n', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k2q83a80LPHc'),
('L0002', 'RS Jiwa Ciluar', 'Ciluar, Bandung.', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.kTsOiIdYTxR0'),
('L0003', 'RSJ Grogol', 'Jakarta ', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k33YG7pFQceE');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_penyakit_gejala`
--

CREATE TABLE `relasi_penyakit_gejala` (
  `kode_penyakit` varchar(8) NOT NULL,
  `kode_gejala` varchar(8) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_penyakit_gejala`
--

INSERT INTO `relasi_penyakit_gejala` (`kode_penyakit`, `kode_gejala`, `bobot`) VALUES
('P0003', 'G0018', 5),
('P0001', 'G0006', 5),
('P0001', 'G0005', 7),
('P0002', 'G0011', 16),
('P0002', 'G0010', 18),
('P0002', 'G0009', 22),
('P0003', 'G0017', 5),
('P0003', 'G0016', 10),
('P0003', 'G0015', 13),
('P0003', 'G0014', 17),
('P0004', 'G0020', 14),
('P0004', 'G0012', 16),
('P0003', 'G0019', 5),
('P0005', 'G0025', 5),
('P0005', 'G0022', 5),
('P0005', 'G0016', 15),
('P0005', 'G0014', 20),
('P0006', 'G0031', 35),
('P0006', 'G0023', 15),
('P0007', 'G0027', 30),
('P0007', 'G0014', 20),
('P0002', 'G0012', 14),
('P0008', 'G0037', 5),
('P0008', 'G0036', 5),
('P0008', 'G0035', 40),
('P0008', 'G0034', 50),
('P0001', 'G0008', 5),
('P0001', 'G0007', 5),
('P0009', 'G0038', 40),
('P0009', 'G0013', 25),
('P0009', 'G0010', 35),
('P0010', 'G0042', 10),
('P0010', 'G0041', 12),
('P0010', 'G0040', 18),
('P0001', 'G0004', 12),
('P0001', 'G0003', 17),
('P0001', 'G0002', 22),
('P0002', 'G0007', 10),
('P0002', 'G0003', 20),
('P0003', 'G0013', 19),
('P0003', 'G0011', 11),
('P0003', 'G0010', 15),
('P0010', 'G0039', 24),
('P0010', 'G0014', 15),
('P0010', 'G0010', 21),
('P0007', 'G0010', 15),
('P0004', 'G0011', 9),
('P0001', 'G0001', 27),
('P0004', 'G0021', 13),
('P0004', 'G0022', 12),
('P0004', 'G0023', 11),
('P0004', 'G0024', 10),
('P0004', 'G0025', 8),
('P0004', 'G0026', 7),
('P0005', 'G0026', 5),
('P0005', 'G0027', 30),
('P0005', 'G0028', 10),
('P0005', 'G0029', 5),
('P0005', 'G0030', 5),
('P0006', 'G0032', 30),
('P0006', 'G0033', 20),
('P0007', 'G0031', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `username` varchar(50) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `username` varchar(50) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_penyakit`
--

CREATE TABLE `tmp_penyakit` (
  `username` varchar(50) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kd_artikel`);

--
-- Indexes for table `data_pakar`
--
ALTER TABLE `data_pakar`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`kd_peta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
