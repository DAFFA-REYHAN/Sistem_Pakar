-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 03:09 PM
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
('A0001', 'DR.LAHARGO KEMBAREN, SPKJ ', 'Manfaat Puasa Bagi Kesehatan Jiwa', 'Bulan ini adalah bulan Ramadhan di mana seluruh umat muslim melakukan puasa. Puasa yang dilakukan adalah menahan hawa nafsu, serta menahan lapar dan haus. Tidak jarang juga ada mereka yang non muslim ', 'Bulan ini adalah bulan Ramadhan di mana seluruh umat muslim melakukan puasa. Puasa yang dilakukan adalah menahan hawa nafsu, serta menahan lapar dan haus. Tidak jarang juga ada mereka yang non muslim ikut juga berpuasa untuk menghargai mereka yang berpuasa atau karena keadaan.  Bila dikaji lebih mendalam, inti dari puasa adalah pengendalian diri. Orang yang sehat jiwanya adalah orang yang mampu menguasai dan mengendalikan diri terhadap dorongan-dorongan yang datang dari dalam dirinya maupun yang datang dari luar. Jadi sebenarnya dengan melakukan puasa kita sedang melatih diri kita untuk mencapai kesehatan jiwa yang optimal.      \r\n\r\nSetiap orang pasti akan menghadapi keadaan sulit yang tidak diharapkan pada setiap fase kehidupannya. Dengan kesehatan jiwa yang optimal maka orang tersebut akan mampu menghadapi keadaan tersebut dan bisa tetap produktif dan berfungsi dengan baik dalam kehidupannya. Tetapi apabila stres tersebut terlalu berat dan kemampuan mentalnya kurang maka orang tersebut dapat mengalami gangguan jiwa seperti gangguan depresi, gangguan cemas dan gangguan psikotik. Puasa merupakan suatu sarana untuk detoksifikasi jiwa karena dengan dengan melakukan puasa maka orang tersebut memiliki kekuatan ego yang besar untuk mengendalikan dirinya.    Allan Cott, M.D., seorang ahli dari  AS menjelaskan bahwa manfaat  puasa adalah :\r\n1. Membuat tubuh menjadi  lebih baik secara fisik dan mental.\r\n2. Membuat tubuh menjadi  lebih muda dan segar\r\n3. Membersihkan badan.\r\n4. Menurunkan tekanan darah dan kadar lemak.\r\n5. Lebih mampu mengendalikan seks.\r\n6. Membuat badan sehat dengan  sendirinya.\r\n7. Mengendorkan ketegangan jiwa.\r\n8. Menajamkan fungsi indrawi.\r\n9. Memperoleh kemampuan mengendalikan diri sendiri.\r\n10. Memperlambat proses penuaan.\r\n\r\nBeberapa perilaku yang terbentuk pada masa-masa puasa seperti menahan diri untuk tidak marah (anger management), menahan diri untuk tidak merokok, menahan diri untuk tidak melakukan perilaku pornografi, dll adalah suatu hal yang baik.  Seperti kita ketahui bahwa perilaku-perilaku tersebut memberikan dampak negatif bagi kesehatan fisik dan jiwa maka puasa dapat dijadikan suatu momentum untuk benar-benar melakukan perubahan perilaku yang mendasar dan terus menerus.  Diharapkan dengan terjadinya suatu perubahan perilaku negatif menjadi perilaku yang positif maka kesehatan fisik dan jiwa lebih dapat ditingkatkan.\r\n\r\nSelamat menunaikan ibadah puasa. Salam sehat jiwa !\r\n\r\n\r\nDr.Lahargo Kembaren,SpKJ\r\nPsikiater RS.Jiwa Dr.H.Marzoeki Mahdi Bogor', 'Tips-Berpuasa-Sehat_900_768.jpg'),
('A0002', 'DR.LAHARGO KEMBAREN, SPKJ ', 'Adiksi dan Gangguan Jiwa', 'Komisi Perlindungan Anak Indonesia (KPAI) bersama dengan pihak kepolisian mengamankan lima anak di bawah umur sebuah Perumahan di Cibubur, Bekasi, Jawa Barat. Mereka diduga ditelantarkan orangtuanya ', 'Komisi Perlindungan Anak Indonesia (KPAI) bersama dengan pihak kepolisian mengamankan lima anak di bawah umur sebuah Perumahan di Cibubur, Bekasi, Jawa Barat. Mereka diduga ditelantarkan orangtuanya dan ditemukan juga adanya beberapa butir ekstasi di dalam rumah tersebut. Beberapa berita yang dilansir menyebutkan adanya perubahan sikap dan perilaku pada kedua orang tua anak tersebut. Adiksi (ketergantungan narkoba) dan gangguan jiwa memiliki hubungan yang erat. Adiksi sendiri sebenarnya termasuk juga ke dalam gangguan jiwa yang menurut PPDGJ III (Pedoman Penggolongan dan Diagnosis Gangguan Jiwa) termasuk ke dalam F1. Gangguan Mental dan Perilaku Akibat Zat Psikoaktif.  Adiksi narkoba secara langsung merubah otak yang menyebabkannya tidak bisa menentukan prioritas dalam kehidupan dan merubah sikap, perilaku, dan cara berpikir. Di sisi yang lain ditemukan juga bahwa orang memakai obat-obat terlarang seperti narkoba adalah untuk mengatasi kondisi psikisnya yang mengalami gangguan. Orang dengan gangguan psikotik, depresi dan cemas mencoba dengan berbagai cara untuk mengatasi gangguan alam perasaan dan pikirannya, dan sering sekali akhirnya jatuh dalam penggunaan narkoba yang dilarang. Ketidaktahuan bagaimana cara mengatasi masalah kejiwaan yang dialaminya inilah yang membuat banyak orang kemudian mencari cara alternatif sendiri-sendiri yang sebenarnya tidak tepat. \r\nBeberapa adiksi yang bisa menimbulkan masalah/gangguan jiwa antara lain adalah :\r\nGanja/mariyuana/â€™cimenkâ€™/â€™gelekâ€™ : dapat menimbulkan gangguan psikosis yang ditandai dengan gangguan dalam penilaian realitas, ada halusinasi dan delusi.\r\nEkstasi/amfetamin : merupakan obat stimulan yang dapat menyebabkan munculnya kegelisahan, kebingungan, gangguan pada pola makan dan pola tidur, ansietas dan depresi\r\nHeroin/kokain/putaw : dapat menyebabkan perubahan kepribadian, gangguan dalam membuat keputusan, risiko terkena penyakit HIV/AIDS, hepatitis, psikotik, depresi, cemas\r\nAlkohol : mengganggu fungsi otak dan keterampilan motorik, meningkatkan risiko penyakit kanker, stroke dan liver, mengganggu hubungan relasi dengan orang lain dan kemampuan kerja\r\nObat batuk/DMP/dextromethorphan/kodein :  dapat menyebabkan efek euforia (senang yang berlebihan), efek disosiatif (merasa bukan dirinya), dan halusinasi\r\nMereka yang mengalami adiksi perlu mendapatkan bantuan dan rehabilitasi. Melakukan konsultasi yang teratur ke profesional kesehatan jiwa akan sangat membantu mengatasi adiksi yang dialami. Melakukan pencegahan terhadap munculnya adiksi pada berbagai lapisan masyarakat adalah hal terpenting yang dapat dilakukan, antara lain dengan penyuluhan yang berkesinambungan, memperbanyak kegiatan-kegiatan positif di tengah masyarakat dan kegiatan keagamaan. Orang dengan masalah kesehatan jiwa (ODMK) perlu segera mendapatkan penanganan yang cepat dan tepat, hindari terapi terapi alternatif yang tidak berbasis bukti karena hanya akan memperlama gangguan tersebut ditangani. Salam sehat jiwa!\r\n\r\n\r\ndr. Lahargo Kembaren, SpKJ (psikiater)\r\nKepala SMF Psikiatri RS. Dr.H.Marzoeki Mahdi Bogor', 'zat-adiktif.jpg'),
('A0003', 'DR.LAHARGO KEMBAREN, SPKJ (PSI', 'Prostitusi dan Kesehatan Jiwa', 'Beberapa kasus prostitusi yang marak diberitakan sekarang ini membuka mata kita bahwa aktivitas seksual yang ilegal ini tetap menjadi ancaman bagi kehidupan bermasyarakat. Prostitusi online dengan men', 'Beberapa kasus prostitusi yang marak diberitakan sekarang ini membuka mata kita bahwa aktivitas seksual yang ilegal ini tetap menjadi ancaman bagi kehidupan bermasyarakat. Prostitusi online dengan menggunakan berbagai sarana teknologi informasi menjadi suatu tren baru yang memudahkan aktivitas ini berlangsung. Hal ini tentunya menjadi ancaman bagi kehidupan keluarga dan juga bagi masa depan kehidupan anak-anak yang menjadi masa depan bangsa. Prostitusi adalah praktek aktivitas seksual yang dilakukan dengan seseorang yang bukan pasangan resminya dengan meminta bayaran.  Mereka yang menjadi pelaku prostitusi disebabkan oleh berbagai faktor, mulai dari perdagangan manusia, pelecehan seksual sebelumnya, masalah ekonomi, dan yang terakhir ini mulai banyak karena gaya hidup. Menjadi pelaku prostitusi memiliki banyak risiko antara lain risiko penularan penyakit menular seksual seperti sifilis, gonore, dan HIV/AIDS. Risiko untuk terkena berbagai gangguan mental pun bisa terjadi seperti gangguan ansietas, depresi, psikotik dan gangguan stres pasca trauma. Risiko untuk menjadi korban perilaku kekerasan dan pembunuhan juga sudah cukup banyak terjadi.  Menjadi pelanggan prostitusi pun memiliki risiko yang sama untuk terkena berbagai masalah kesehatan fisik dan jiwa seperti di atas.\r\n\r\nSaat ini perhatian diarahkan pada banyaknya pelaku prostitusi dari kalangan anak remaja dan pelajar yang masih di bawah umur. Hal ini merupakan suatu fenomena yang harus dicegah, disikapi dengan cepat dan tepat. Hal â€“ hal yang perlu dilakukan untuk mencegah terjadinya praktek prostitusi dan risiko-risiko yang mengikutinya antara lain adalah :\r\nPendidikan seksual  terhadap anak-anak sesuai dengan usianya agar anak-anak memiliki pemahaman yang benar tentang organ reproduksinya dan kemudian menjaganya dengan baik\r\nPengawasan dan bimbingan terhadap penggunaan gawai dan media sosial pada anak\r\nPenjelasan tentang bahaya pelecehan seksual dan perdagangan manusia dan bagaimana menghadapinya\r\nPola asuh yang baik di setiap keluarga supaya anak merasakan tempat yang nyaman di keluarga sehingga tidak mencari â€˜kenyamananâ€™ lain di luar\r\nHubungan suami istri yang terus menerus ditingkatkan sehingga memperkuat ikatan keluarga dalam menghadapi setiap godaan dari luar\r\nPendidikan keagamaan yang kuat akan menjadi benteng terhadap gangguan seperti di atas\r\nProstitusi sudah ada sejak jaman dahulu dan selalu memberikan ancaman yang jelas terhadap kehidupan bermasyarakat. Mungkin sulit untuk memberantasnya sampai tuntas tetapi tidak lah terlalu sulit untuk mencegahnya dan memulainya dari keluarga kita. Salam sehat jiwa!', '1115339shutterstock-233859322780x390.jpg'),
('A0004', 'DR.LAHARGO KEMBAREN, SPKJ (PSI', 'Stop Stigma terhadap Orang dengan Skizofrenia', 'Orang dengan Skizofrenia (ODS) adalah orang yang memiliki gangguan dalam menilai realitas.  Gejala-gejala dari gangguan ini antara lain adalah adanya halusinasi (mendengar ada suara bisikan, ', 'Orang dengan Skizofrenia (ODS) adalah orang yang memiliki gangguan dalam menilai realitas.  Gejala-gejala dari gangguan ini antara lain adalah adanya halusinasi (mendengar ada suara bisikan, melihat bayangan, merasa di kulitnya ada rasa tertentu, mencium bau bauan, merasa di lidahnya ada rasa tertentu, yang semuanya tidak ada sumbernya), adanya waham (ide/persepsi/keyakinan yang salah yang tidak sesuai dengan kenyataan, seperti merasa ada yang mengejar-ngejar, membunuh, berbuat jahat, seperti ada yang memperhatikan, diomongin, merasa dirinya adalah seseorang yang punya kekuatan tertentu. Gangguan skizofrenia ini disebabkan oleh banyak faktor yang berujung pada ketidakstabilan zat kimia (neurotransmiter) di dalam saraf otak. Faktor penyebabnya adalah berbagai peristiwa dari dalam kandungan sampai usia saat ini yang bisa mempengaruhi saraf otak, seperti : keturunan/genetik, adanya masalah fisik dan psikologis pada ibu yang sedang mengandung bayinya, riwayat trauma kepala, pernah panas tinggi, kejang/gangguan saraf, dan peristiwa kehidupan yang traumatik seperti keinginan yang tidak tercapai, kekecewaan, kesedihan yang mendalam, kehilangan seseorang/sesuatu yang disayang.  Ada perubahan pada saraf itulah yang memicu munculnya perubahan pada sikap, perilaku, perasaan/emosi dan kepribadian. \r\n\r\nSaat ini pengobatan untuk gangguan Skizofrenia ini sudah sangat baik, obat-obatan yang ada secara superior dapat segera mengurangi dan menghilangkan gejala-gejala yang ada. Psikoterapi (terapi bicara) yang diberikan oleh profesional kesehatan jiwa juga dengan bertahap akan dapat merubah cara pandang orang dengan skizofrenia dalam menghadapi masalah kehidupannya. Apabila gangguan jiwanya berat maka modalitas terapi seperti rehabilitasi psikososial akan mengembalikan secara optimal fungsi dan produktivitas dari orang dengan skizofrenia.\r\nSayangnya masyarakat masih melakukan stigma dan diskriminasi terhadap orang dengan skizofrenia. Stigma adalah sikap atau persepsi negatif masyarakat tentang seseorang yang masuk kelompok khusus. Pemberitaan media dan sinetron-sinetron yang menyudutkan orang dengan gangguan jiwa seperti skizofrenia membentuk kerangka pikir negatif dari sebagian besar masyarakat bahwa gangguan ini adalah gangguan yang aneh dan membahayakan. Padahal banyak sekali orang dengan skizofrenia yang dapat pulih (recovery) bisa kembali berfungsi dan produktif di masyarakat, bisa kembali kuliah, bekerja, dan beraktivitas seperti biasa. Tidak satu orang pun dari mereka yang menghendaki untuk mendapatkan gangguan tersebut. Keluarga juga sudah berusaha dengan berbagai upaya, sayangnya stigma dan diskriminasi membuat pemulihan mereka menjadi terhambat.\r\n\r\nMari bersama-sama kita dukung pemulihan orang dengan skizofrenia dengan cara menerima mereka apa adanya dan menyediakan diri untuk saling berbagi karena mereka pun bagian dari komunitas kita. Stop stigma terhadap orang dengan skizofrenia. Salam sehat jiwa! \r\ndr. Lahargo Kembaren, SpKJ (psikiater)\r\nKetua SMF Psikiatri RS Jiwa Dr.H.Marzoeki Mahdi Bogor', 'Skitzho.jpg'),
('A0005', 'DR.LAHARGO KEMBAREN, SPKJ (PSI', 'Kekerasan Pada Anak dan Dampaknya', 'Akhir-akhir ini banyak sekali kita saksikan dan dengarkan kekerasan yang dilakukan oleh seseorang / sekelompok orang pada orang lain. Kekerasan yang dilakukan bisa memiliki banyak alasan dan motivasi ', 'Akhir-akhir ini banyak sekali kita saksikan dan dengarkan kekerasan yang dilakukan oleh seseorang / sekelompok orang pada orang lain. Kekerasan yang dilakukan bisa memiliki banyak alasan dan motivasi tetapi suatu perilaku kekerasan yang dilakukan memiliki suatu dasar pengalaman kekerasan pada masa sebelumnya. Salah satunya adalah pengalaman mengalami perlakuan kekerasan pada masa kecil.    \r\n\r\nKekerasan terhadap anak merupakan semua bentuk tindakan/perlakuan menyakitkan secara fisik ataupun emosional, penyalahgunaan seksual, penelantaran, eksploitasi komersial atau eksploitasi lainnya yang mengakibatkan cidera/kerugian nyata ataupun potensial terhadap kesehatan anak, kelangsungan hidup anak, tumbuh kembang anak atau martabat anak, yang dilakukan dalam konteks hubungan tanggung jawab.\r\nâ–¡       Kekerasan fisik adalah kekerasan yang mengakibatkan cidera fisik nyata ataupun potensial terhadap anak sebagai akibat dari interaksi atau tidak adanya interaksi yang layaknya ada dalam kendali orang tua atau orang dalam hubungan posisi tanggung jawab, kepercayaan atau kekuasaan.\r\nâ–¡       Kekerasan seksual adalah pelibatan anak dalam kegiatan seksual, di mana ia sendiri tidak sepenuhnya memahami, atau tidak mampu memberi persetujuan. Kekerasan seksual ditandai dengan adanya aktivitas seksual antara anak dengan orang dewasa atau anak lain. Aktivitas tersebut ditujukan untuk memberikan kepuasan bagi orang tersebut. Kekerasan seksual meliputi eksploitasi seksual dalam prostitusi atau pornografi, pemaksaan anak untuk melihat kegiatan seksual, memperlihatkan kemaluan kepada anak untuk tujuan kepuasan seksual, stimulasi seksual, perabaan, memaksa anak untuk memegang kemaluan orang lain, hubungan seksual, perkosaan, hubungan seksual yang dilakukan oleh orang yang mempunyai hubungan darah (incest) dan sodomi.\r\nâ–¡       Kekerasan emosional adalah suatu perbuatan terhadap anak yang mengakibatkan atau sangat mungkin akan mengakibatkan gangguan kesehatan atau perkembangan fisik, mental, spiritual, moral dan sosial. Beberapa contoh kekerasan emosional adalah pembatasan gerak, sikap tindak meremehkan anak, mencemarkan, mengkambinghitamkan, mengancam, menakut-nakuti, mendiskriminasi, mengejek, atau menertawakan, atau perlakukan lain yang kasar atau penolakan.\r\nâ–¡       Penelantaran anak adalah kegagalan dalam menyediakan segala sesuatu yang dibutuhkan untuk tumbuh kembangnya seperti kesehatan, pendidikan, perkembangan emosional, nutrisi, rumah  atau tempat bernaung, dan keadaan hidup yang aman yang layaknya dimiliki oleh keluarga atau pengasuh.  \r\n\r\nDAMPAK KEKERASAN TERHADAP ANAK\r\n\r\n            Korban atau kasus anak yang mengalami kekerasan dapat berdampak jangka pendek ataupun jangka panjang.\r\n1.      Jangka pendek. Dampak jangka pendek terutama berhubungan dengan masalah fisik antara lain : lebam, lecet, luka bakar, patah tulang, kerusakan organ, robekan selaput dara, keracunan, gangguan susunan saraf pusat. Di samping itu seringkali terjadi gangguan emosi atau perubahan perilaku seperti pendiam, menangis, dan menyendiri.  \r\n2.      Jangka panjang. Dampak jangka panjang dapat terjadi pada kekerasan fisik, seksual, maupun emosional.\r\na.       Kekerasan fisik. Kecacatan yang dapat mengganggu fungsi tubuh anggota tubuh\r\nb.      Kekerasan seksual. Kehamilan yang tidak diinginkan, infeksi menular seksual termasuk HIV/AIDS, gangguan /kerusakan organ reproduksi.  \r\nc.       Kekerasan emosional. Tidak percaya diri, hiperaktif, sukar bergaul, rasa malu dan bersalah, cemas, depresi, psikosomatik, gangguan pengendalian diri, suka mengompol, kepribadian ganda, gangguan tidur, psikosis, dan penggunaan napza.\r\n\r\n\r\n\r\nPENANGANAN  KEKERASAN PADA ANAK\r\n\r\nPertama :  Pencegahan. Aktivitas pencegahan ini dapat dilakukan secara bersama dalam bentuk sosialisasi hak-hak anak dan sejumlah peraturan ditengah-tengah kehidupan masyarakat dan keluarga.\r\nKedua : Deteksi Dini. bagi anak-anak yang rentan terhadap terjadinya kekerasan serta dalam lingkungan keluarga dan masyarakat perlu dilakukan langkah cepat (quick respons) untuk mengevakuasi sementara anak ke tempat yang aman, serta memberikan peringatan dini kepada lingkungan keluarga yang rentan melakukan kekerasan. Artinnya, bagi anak-anak yang rentan terhadap kekerasan sedini mungkin bisa dihindari.\r\nKetiga :  Intervensi Krisis. Bagi anak-anak yang telah mengalami kekerasan, langkah yang perlu dilakukan melalui pendekatan Intervensi Krisis. Aktivitas ini dilakukan dengan metoda mendampingi korban dan keluarga korban untuk melakukan upaya hukum, dan melakukan terapy terhadap trauma yang diakibatkan oleh tindak kekerasan.\r\n\r\n\r\n\r\nMENGHINDARI KEKERASAN PADA ANAK\r\n\r\n            Ada beberapa upaya yang patut dilakukan agar kita dapat terhindar dari kekerasan terhadap anak diantaranya adalah :  Hargai anak dan bersikap adil : Ciptakanlah suasana hangat dan penuh kasih sayang di lingkungan anak. Berilah penghargaan bila anak melakukan perbuatan terpuji dan beritahu kesalahannya bila melakukan tindakan tidak baik. Dengan demikian anak belajar menghargai orang lain, terutama orang tuanya.\r\n\r\nâ–¡       Dengarkan keluhan anak. Bila anak berperilaku buruk, seperti melawan, suka memukul atau berbohong, maka pahamilah lebih dahulu perasaaanya dan dengarkanlah penolakan dan keluhannya.\r\nâ–¡       Ungkapkan dengan jelas ketidaksetujuan anda ketika anak berperilaku tidak baik.\r\nâ–¡       Hindari ungkapan yang memojokan dan menyalahkan anak. Hindari kata-kata menghardik sepertiâ€œAyo, cepat mandi, mama tidak suka punya anak bau dan pemalas!â€ \r\nâ–¡       Gunakanlah kata-kata mengajak, â€œYuk mandi sayang, supaya wangi dan bersih. Setelah itu, kita jalan-jalanâ€.\r\nâ–¡       Peringatan lebih awal. Ketika anda ingin anak anda melakukan sesuatu, cobalah ingatkan  lebih awal dan berikan pilihan serta penjelasan. Misalnya, â€œNak, sepuluh menit lagi waktunya tidur ya, supaya besok pagi kamu tidak terlambat bangun  dan tidak mengantuk ketika sekolahâ€ .\r\nâ–¡       Menghindar ketika marah (time out). Ketika anda marah karena perilaku anak, maka menghindarlah seketika dari anak-anak kemudian tenangkanlah diri anda, setelah itu dialogkan dengan anak, mengapa anda marah.\r\nâ–¡       Berupaya lebih akrab. Binalah hubungan yang lebih hangat dan akrab dengan anak, sehingga anak  menjadi lebih terbuka pada orang tua.\r\nâ–¡       Jadilah contoh bagi anak dalam menanamkan nilai-nilai moral  dan sosial yang berlaku. Dunia anak adalah dunia yang penuh kegembiraan dan keceriaan, karena itu kekerasan bukanlah cara yang tepat untuk menghadapi  anak-anak. \r\n\r\n\r\n\r\ndr. Lahargo Kembaren, SpKJ (psikiater)\r\nKetua SMF Psikiatri RS.Dr.H.Marzoeki Mahdi Bogor', 'kekerasan pada anak.jpg'),
('A0006', 'DR.LAHARGO KEMBAREN, SPKJ (PSI', 'Lakukan Relaksasi Saat Anda Cemas dan Gelisah', 'Sensasi anxietas / cemas sering dialami oleh hampir semua manusia. Perasaan tersebut ditandai oleh rasa ketakutan yang difius, tidak menyenangkan, seringkali disertai oleh gejala otonomik, seperti nye', 'Sensasi anxietas / cemas sering dialami oleh hampir semua manusia. Perasaan tersebut ditandai oleh rasa ketakutan yang difius, tidak menyenangkan, seringkali disertai oleh gejala otonomik, seperti nyeri kepala, berkeringat, palpitasi, gelisah, dan sebagainya.  Kumpulan gejala tertentu yang ditemui selama kecemasan cenderung bervariasi, pada setiap orang tidak sama.\r\n Gejala dan Tanda :\r\n\r\nGejala psikologik: \r\nKetegangan, kekuatiran, panik, perasaan tak nyata, takut mati , takut â€gilaâ€, takut kehilangan kontrol dan sebagainya.\r\nGejala fisik:\r\nGemetar, berkeringat, jantung berdebar, kepala terasa ringan, pusing, ketegangan otot, mual, sulit bernafas, baal, diare, gelisah, rasa gatal, gangguan di lambung, rasa sesak nafas; rasa sakit dada; kadang-kadang merasa harus menarik nafas dalam; ada sesuatu yang menekan dada; jantung berdebar; mual; vertigo; tremor; kaki dan tangan merasa kesemutan; kaki dan tangan tidak dapat diam ada perasaan harus bergerak terus menerus; kaki merasa lemah, sehingga berjalan dirasakan berat; kadang- kadang ada gagap.\r\n\r\nHal yang dapat dilakukan untuk mengurangi gejala di atas adalah dengan melakukan relaksasi. Relaksasi membuat otot-otot yang sebelumnya tegang menjadi santai, rileks dan nyaman.  Berikut ini urutan-urutan untuk melakukan relaksasi.\r\nSebelum mulai, atur terlebih dahulu pernafasan.\r\nÂ·         Duduk atau berbaringlah dengan tenang dan nyaman\r\nÂ·         Tutuplah mata dan perhatikan proses bernafas anda\r\nÂ·         Pusatkan perhatian, jangan berfikir tentang hal-hal lain selain nafas anda. Biarkan nafas itu masuk dan keluar dari tubuh anda. tarik nafas dalam 3 detik dan buang nafas dalam 3 detik pula.\r\nÂ·         Setelah nafas anda mulai teratur, bayangkan suatu tempat yang pernah anda kunjungi yang menurut anda suasananya sangat nyaman dan membuat anda merasa rileks. Tempat ini harus tenang dan damai seperti pantai, gunung, hutan, pemandangan dll. Jika anda tidak bisa mengingat tempat yang pernah anda kunjungi, ciptakanlah sendiri tempat tersebut dalam bayangan anda\r\nÂ·         Bayangkan diri anda benar-benar berada ditempat tersebut. anda mengalaminya. Anda melihat warnanya, mendengar suara, menghirup bau dari tanaman , bunga....\r\nÂ·         Rasakan kedamaian dan ketenangan yang menyegarkan badan dan pikiran anda\r\nÂ·         Kepalkan kedua tangan anda rasakan ketegangannya. Perlahan-lahan lepaskan.... Rasakan ketegangan itu menghilang. Rasakan bedanya sekarang waktu otot menjadi relaks.\r\nÂ·         Tekuklah kedua lengan kuat-kuat, rasakan kontraksi otot lengan atas bagian depan.... Sekarang kendorkan perlahan-lahan lengan anda\r\nÂ·         Tekuklah jari-jari kaki anda kebawah sampai ketegangannya terasa hingga ke paha.... Sekarang relaks pelan-pelan. Rasakan ketegangannya mereda.\r\nÂ·         Tarik jari-jari kaki anda keatas sampai otot-otot di belakang kaki tegang... Kemudian kendorkan\r\nÂ·         Dorong otot perut anda kedepan dan kencangkan. Sekarang .... Pelan-pelan relakskan\r\nÂ·         Rasakan anda masih berada ditempat yang menyenangkan, lengan anda relaks, kaki anda relaks, dan nafas anda yang teratur memberikan perasaan tenang dan melepaskan stress...\r\nÂ·         Tarik perut anda kedalam sampai terasa menekan kearah dada anda... Kendorkan perlahan-lahan sambil merasakan berkurangnya ketegangan otot\r\nÂ·         Naikkanlah kedua bahu anda keatas sampai ke telinga. Rasakan ketegangan otot ditengkuk dan dada. Sekarang .... Pelan-pelan relakslah. Biarkan lengan anda relaks. Anda merasa nyaman. Anda bernafas dengan teratur dan tenang.\r\nÂ·         Tariklah kepala anda ke belakang sejauh mungkin. Regangkan otot. Rasakan ketegangannya .... Kendorkan perlahan-lahan. Perhatikan ketegangannya pergi.\r\nÂ·         Kerutkan dahi anda pertahankan ... Rasakan ketegangannya. Sekarang relaks. Rasakan ketegangannya menghilang\r\nÂ·         Tutuplah mata anda kuat-kuat. Sekarang  relaks ......\r\nÂ·         Menyeringailah lebar-lebar sampai seluruh otot wajah anda tegang ... Tahan ... Kendorkan pe lahan-lahan. Lengan anda relaks ... Nafas anda tenang .... Anda merasa nyaman diseluruh badan anda\r\nÂ·         Rasakan betapa relaksnya otot-otot anda sambil membayangkan anda masih berada ditempat yang penuh kedamaian. Anda merasa damai, tenang. Pikiran, perasaan dan badan anda merasa segar kembali...\r\nÂ·         Bukalah mata anda perlahan-lahan dan bangkitlah\r\n\r\nSelamat mencoba, dan jauhkan diri dari rasa cemas, takut, panik serta gelisah. Apabila gejala-gejala belum membaik, silahkan konsultasikan ke psikiater untuk mendapatkan terapi lebih lanjut.\r\nDr.Lahargo Kembaren, SpKJ\r\nPsikiater RS Dr.H.Marzoeki Mahdi Bogor\r\n(No Health without Mental Health)', 'relaxsasi.jpg');

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
  `jawaban` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`username`, `password`, `nama_user`, `usia`, `jenis_kelamin`, `alamat`, `pertanyaan`, `jawaban`) VALUES
('Jesss', 'fcea920f7412b5da7be0cf42b8c93759', 'jesreel', 123, '#', 'Bogor', 'Apa Makanan Favorit Anda?', '575d7351946e7bd7ded33f4e33f4ad24'),
('Testing', 'e10adc3949ba59abbe56e057f20f883e', 'Pengujian Internal', 99, 'L', 'Gunadarma', 'Apa Makanan Favorit Anda?', '62d08f70f89c457c93d4fd287a6f98e8'),
('daffa', '7b1e852330575c92c8d918377b30726a', 'Daffa Reyhan', 17, 'L', 'Jakarta Selatan', 'Apa Buku Favorit Anda?', 'd638d193eb29ac87c0950ab36b80e0e8');

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
('G0024', 'Perdarahan Setelah Melakukan Hubungan Seksual'),
('G0023', 'Nyeri Perut'),
('G0022', 'Kehilangan Nafsu Makan'),
('G0021', 'Perdarahan Tidak Normal (Diluar Masa Menstruasi, Setelah Berhubungan Seksual Atau Setelah Menopause)'),
('G0020', 'Nyeri Saat Menstruasi, Setelah Berhubungan Seksual Atau Saat Terjadi Penekanan Pada Panggul'),
('G0019', 'Perut Terasa Penuh Dan Membesar'),
('G0018', 'Menstruasi Dalam Jumlah Banyak\r\n'),
('G0017', 'Mudah Merasa Lelah Atau Tidak Enak Badan'),
('G0016', 'Perdarahan Diluar Waktu Menstruasi Atau Setelah Berhubungan Seksual'),
('G0015', 'Nyeri Panggul Atau Perut Bagian Bawah'),
('G0014', 'Keputihan Berbau Tidak Sedap'),
('G0013', 'Demam'),
('G0012', 'Mual Dan Muntah'),
('G0011', 'Nyeri Ketika Buang Air Kecil'),
('G0010', 'Gangguan Buang Air Besar'),
('G0009', 'Dispareunia (Nyeri Sebelum, Selama, atau Sesudah Berhubungan Seksual)'),
('G0008', 'Nyeri Setelah Berhubungan Seksual'),
('G0007', 'Nyeri Haid Terasa Sangat Menyakitkan'),
('G0006', 'Sering Buang Air Kecil'),
('G0005', 'Sulit Buang Air Besar'),
('G0004', 'Merasa Sangat Kenyang Walau Hanya Makan Sedikit Atau Perut Terasa Kembung'),
('G0003', 'Haid Tidak Teratur'),
('G0002', 'Nyeri Secara Tiba-Tiba Pada Area Panggul'),
('G0001', 'Nyeri Perut Bagian Kiri Atau Kanan Bawah (Panggul)'),
('G0025', 'Perdarahan Pascamenopause Atau Diantara Waktu Menstruasi'),
('G0026', 'Keluar Cairan Yang Tidak Biasa Dengan Jumlah Banyak Dari Vagina Disertai Rasa Perih'),
('G0027', 'Perdarahan Setelah Melakukan Hubungan Seksual'),
('G0028', 'Nyeri Di Panggul, Perut Dan Punggung Bagian Bawah'),
('G0029', 'Jaringan Rahim Menonjol Ke Vagina'),
('G0030', 'Perasaan Berat Atau Tekanan Di Panggul'),
('G0031', 'Merasa Ada Sesuatu Yang Mengganjal Saat Duduk'),
('G0032', 'Kemerahan Dan Pembengkakan Di Sisi Bibir Vagina'),
('G0033', 'Kemerahan Dan Nyeri Disekitar Vagina'),
('G0034', 'Flek Atau Perdarahan Dari Vagina Setelah Berhubungan Seksual dan Terasa Perih'),
('G0035', 'Keputihan Yang Kental, Berwarna Putih Atau Kuning Kehijauan Dan Berbau Tidak Sedap'),
('G0036', 'Gatal Di Area Vagina Atau Disekitarnya');

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
('P0002', 'Kista Endometriosis', 'Kista endometriosis adalah kista yang terbentuk saat jaringan endometrium tumbuh di ovarium atau indung telur. Isinya berupa cairan berukuran besar pada indung telur, bahkan bisa membungkusnya. Pada kebanyakan kasus, keadaan ini muncul akibat endometriosis yang tidak mendapat penanganan tepat. Dikenal sebagai endometrioma atau \"chocolate cyst\" (karena berisi cairan berwarna cokelat tua yang terdiri dari darah dan jaringan menstruasi lama).', 'Konsumsi Obat-obatan, Terapi Hormon, Operasi', 'Berolahraga secara rutin, minimal 30 menit setiap hari. Menjaga berat badan agar tetap ideal. Menurunkan berat badan bila mengalami obesitas. Mengurangi konsumsi alkohol secara berlebihan. Mengurangi konsumsi kafein yang berlebihan. Berkonsultasi dengan dokter mengenai penggunaan alat kontrasepsi yang tepat.'),
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
('P0001', 'G0003', 10),
('P0001', 'G0001', 30),
('P0001', 'G0002', 30),
('P0002', 'G0008', 25),
('P0002', 'G0007', 30),
('P0002', 'G0003', 10),
('P0003', 'G0014', 0),
('P0003', 'G0013', 0),
('P0003', 'G0012', 0),
('P0003', 'G0011', 0),
('P0004', 'G0020', 0),
('P0004', 'G0019', 0),
('P0004', 'G0018', 0),
('P0007', 'G0027', 0),
('P0005', 'G0023', 0),
('P0005', 'G0022', 0),
('P0005', 'G0021', 0),
('P0005', 'G0014', 0),
('P0006', 'G0025', 0),
('P0006', 'G0024', 0),
('P0007', 'G0026', 0),
('P0007', 'G0009', 0),
('P0010', 'G0036', 0),
('P0008', 'G0031', 0),
('P0008', 'G0028', 0),
('P0008', 'G0030', 0),
('P0008', 'G0029', 0),
('P0010', 'G0035', 0),
('P0010', 'G0034', 0),
('', 'G0036', 0),
('', 'G0035', 0),
('', 'G0034', 0),
('', 'G0033', 0),
('', 'G0011', 0),
('', 'G0009', 0),
('P0009', 'G0032', 0),
('P0009', 'G0013', 0),
('P0009', 'G0009', 0),
('P0010', 'G0033', 0),
('P0010', 'G0011', 0),
('P0011', 'G0036', 20),
('P0012', 'G0039', 20),
('P0012', 'G0040', 40),
('P0012', 'G0041', 40),
('P0010', 'G0009', 0),
('P0011', 'G0042', 20),
('P0011', 'G0038', 30),
('P0011', 'G0037', 30),
('P0001', 'G0004', 10),
('P0001', 'G0005', 10),
('P0001', 'G0006', 10),
('P0002', 'G0009', 25),
('P0002', 'G0010', 10),
('P0003', 'G0015', 0),
('P0003', 'G0016', 0),
('P0003', 'G0017', 0);

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
  MODIFY `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
