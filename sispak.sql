-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Agu 2015 pada 04.25
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `kd_artikel` varchar(5) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
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
-- Struktur dari tabel `data_pakar`
--

CREATE TABLE IF NOT EXISTS `data_pakar` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pakar`
--

INSERT INTO `data_pakar` (`username`, `password`, `pertanyaan`, `jawaban`) VALUES
('lahargo', 'e10adc3949ba59abbe56e057f20f883e', 'Apa Makanan Favorit Anda?', 'bb9f601ba081ab8d336a14a697048cb0'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Apa Makanan Favorit Anda?', 'd9c84901c7cdbfddbc3b75af86ba1701'),
('jesreel', '3d0d4e13dc0a4d9e5868cf3ed3c5bd65', 'Apa Makanan Favorit Anda?', '5b307381861d9a4c51b0e881eef973d3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
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
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`username`, `password`, `nama_user`, `usia`, `jenis_kelamin`, `alamat`, `pertanyaan`, `jawaban`) VALUES
('Jesss', 'e10adc3949ba59abbe56e057f20f883e', 'jesreel', 123, '#', 'Bogor', 'Apa Makanan Favorit Anda?', '575d7351946e7bd7ded33f4e33f4ad24'),
('Testing', 'e10adc3949ba59abbe56e057f20f883e', 'Pengujian Internal', 99, 'L', 'Gunadarma', 'Apa Makanan Favorit Anda?', '62d08f70f89c457c93d4fd287a6f98e8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G0001', 'Keinginan menggunakan zat'),
('G0002', 'Sulit berhenti menggunakan zat'),
('G0003', 'Peningkatan dosis penggunaan zat'),
('G0004', 'Terus menggunakan zat,muski tau akibatnya'),
('G0005', 'Gangguan psikologis\r\n'),
('G0006', 'Gaduh, gelisah ketika tidak menggunakan zat'),
('G0007', 'Gemetar Ketakutan ketika tidak menggunakan zat'),
('G0008', 'Halusinasi'),
('G0009', 'Merasa dirinya spesial'),
('G0010', 'Perubahan prikau yang aneh\r\n'),
('G0011', 'Pembicaraan aneh'),
('G0012', 'Emosional extrim'),
('G0013', 'Delusi (memiliki kerpercayaan berlebih pada hal tertentu)'),
('G0014', 'Murung'),
('G0015', 'Kehilangan Gairah'),
('G0016', 'Tidak nafsu makan'),
('G0017', 'Perubahan pola tidur'),
('G0018', 'Sulit konsentrasi'),
('G0019', 'Ingin bunuh diri'),
('G0020', 'Sulit membuat Keputusan'),
('G0021', 'Kehilangan ingatan'),
('G0022', 'Memiliki trauma yang mendalam'),
('G0023', 'Membentuk identitas baru'),
('G0024', 'Detak jantung tidak normal ketika bertemu objek tertentu'),
('G0025', 'Keringat Berlebih  ketika bertemu objek tertentu'),
('G0026', 'Gemetaran  ketika bertemu objek tertentu'),
('G0027', 'Panas-dingin  ketika bertemu objek tertentu'),
('G0028', 'Pusing  ketika bertemu objek tertentu'),
('G0029', 'Gangguan perut ketika melihat objek tertentu'),
('G0030', 'Kerongkongan terasa tersekat'),
('G0031', 'Diare ketika melihat objek tertentu'),
('G0032', 'Takut di depan umum'),
('G0041', 'Sebab mencuri yang tidak jelas'),
('G0040', 'Persaan lega setelah melakukan pencurian'),
('G0039', 'Keinginan mencuri'),
('G0038', 'Selalu ingin tidur'),
('G0037', 'Merasa lelah setiap waktu'),
('G0036', 'Kerusakan pada otak'),
('G0035', 'Ketergantungan obat penenang'),
('G0034', 'Berubah-ubah jam kerja'),
('G0033', 'Takut pada objek tertentu seperti angka,tempat,warna,sukut,dll'),
('G0042', 'Pola tidur tidak teratur'),
('G0043', 'Susah Tertidur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE IF NOT EXISTS `hasil_diagnosa` (
  `id_diagnosa` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `tanggal_diagnosa` date NOT NULL,
  `persentase` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id_diagnosa`, `username`, `kode_penyakit`, `tanggal_diagnosa`, `persentase`) VALUES
(1, 'Jesss', 'P0006', '2015-07-31', 60),
(2, 'Jesss', 'P0011', '2015-07-31', 15),
(3, 'Jesss', '', '2015-07-31', 0),
(4, 'Jesss', '', '2015-07-31', 0),
(5, 'Jesss', '', '2015-07-31', 0),
(6, 'Jesss', '', '2015-07-31', 0),
(7, 'Jesss', '', '2015-07-31', 0),
(8, 'Jesss', 'P0001', '2015-07-31', 75),
(9, 'Jesss', 'P0001', '2015-07-31', 50),
(10, 'Jesss', '', '2015-07-31', 0),
(11, 'Jesss', '', '2015-07-31', 0),
(12, 'Jesss', 'P0001', '2015-07-31', 50),
(13, 'Jesss', 'P0008', '2015-07-31', 100),
(14, 'Jesss', 'P0009', '2015-07-31', 100),
(15, 'Jesss', 'P0008', '2015-07-31', 100),
(16, 'Jesss', '', '2015-08-05', 0),
(17, 'Jesss', '', '2015-08-05', 0),
(18, 'Jesss', 'P0005', '2015-08-07', 40),
(19, 'Jesss', '', '2015-08-07', 0),
(20, 'Jesss', 'P0008', '2015-08-07', 5),
(21, 'Jesss', '', '2015-08-07', 0),
(22, 'Jesss', 'P0008', '2015-08-07', 5),
(23, 'Jesss', 'P0008', '2015-08-07', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(60) NOT NULL,
  `definisi` text NOT NULL,
  `pengobatan` text NOT NULL,
  `pencegahan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `definisi`, `pengobatan`, `pencegahan`) VALUES
('P0001', 'Ketergantungan Zat', '1.	Sindrom ketergantungan zat psikoaktif adalah suatu kelompok fenomena fisiologis, perilaku, dan kognitif akibat penggunaan suatu zat atau golongan zat tertentu yang mendapat prioritas lebih tinggi bagi individu tertentu ketimbang perilaku yang pernah diunggulkan pada masa lalu. Gambaran utama yang khas dari sindrom ketergantungan ialah keinginan (sering amat kuat dan bahkan terlalu kuat) untuk menggunakan obat psikoaktif (baik yang diresepkan ataupun tidak), alkohol, atau tembakau. Mungkin ada bukti bahwa mereka yang menggunakan kembali zat setelah satu periode abstinesia akan lebih cepet kambuh daripada individu yang sama sekali tidak ketergantungan.', 'Mengkonsultasikan diri ke psikater atau dokter jiwa agar mendapatkan penangan yang sesuai dengan kondisi pasien saat ini.', 'Tidak mencoba untuk mengkonsumsi zat adiktif.\r\nMemahami bahaya dari zat adiktif dengan sering mengikuti seminar atau penyuluhan anti zat adiktif.\r\nMengurangi pergaulan dan membentengi diri dari orang yang mengkonsumsi zat adiktif. \r\nLebih mendekatkan diri ke Tuhan.'),
('P0002', 'Putus zat', 'Keadaan putus zat adalah sekelompok gejala dengan aneka bentuk dan keparahan yang terjadi pada penghentian pemberian zat secara absolut atau relatif sesudah penggunaan zat yang terus-menerus dan dalam jangka panjang atau dosis tinggi. Onset dan perjalanan keadaan putus zat waktunya relatif terbatas dan berkaitan dengan jenis dan dosis zat yang digunakan sebelumnya. ', 'Segera konsultasikan diri anda ke psikiater atau Dokter kejiwaan, karena pengidap penyakit ini perlu penanganan khusus.', 'Tidak menyalahgunakan zat psikoaktif.\r\nTidak menggunakan zat psikoatif diluar resep dokter (untuk pengidap penyakit tertentu).'),
('P0003', 'Psikotik', 'Gangguan psikotik adalah gangguan jiwa yang ditandai dengan ketidakmampuan individu menilai ke.nyataan yang terjadi (realitas).\r\nSecara umum, katanya, penderita psikotik dipicu oleh ketidakmampuan seseorang untuk menyelesaikan masalah yang diterima oleh seorang manusia. Cara mengendalikan, memperlakukan dan merespons   masalah yang dihadapi sangat berbeda antara satu orang dengan orang lain, sehingga tingkatan keparahan psikotik yang diderita sangat beragam meskipun sama-sama ditimpa oleh masalah yang sama.', 'Upaya penyembuhan psikotik dapat ditempuh dengan dua cara, yakni dengan obat-obatan (farmakologi) dan psikoterapi (terapi kejiwaan). Biasanya proses penyembuhan dipadu antara keduanya. Dan yang paling menentukan, keluarga pasien harus memahami kalau kelainan jiwa psikotik memerlukan waktu penyembuhan yang lama. Di samping itu, kata Malawaty, stigma masyarakat terhadap penderita psikotik  sebagai orang gila dan mengucilkannya menyebabkan proses penyembuhan psikotik butuh waktu lama. ', 'Penyebab utama psikotik, kata Malawaty, selain faktor-faktor genetik (keturunan), faktor kamampuan pribadi mempertahankan terhadap gangguan stres dan latar belakang keluarga, pengaruh lingkungan yang  juga menjadi pemicu timbulnya psikotik. Bila seseorang dengan riwayat keluarga yang menderita psikotik, katanya, kemungkinan menderita psikotik lebih besar apa bila disertai dengan faktor-faktor pemicu yang konflit.'),
('P0004', 'Skitzofernia', 'Skizofrenia dalah gangguan mental yang ditandai dengan gangguan proses berpikir dan tanggapan emosi yang lemah. Keadaan ini pada umumnya dimanifestasikan dalam bentukhalusinasi, paranoid, keyakinan atau pikiran yang salah yang tidak sesuai dengan dunia nyata serta dibangun atas unsur yang tidak berdasarkan logika, dan disertai dengan disfungsi sosial dan pekerjaan yang signifikan. ', 'Obat-obatan\r\nObat-obatan merupakan penanganan awal skizofrenia, dan obat yang diresepkan oleh dokter adalah antipsikotik. Antipsikotik memengaruhi kinerja dopamin dan serotonin pada otak. Obat ini mampu mencegah, menurunkan, bahkan menghilangkan halusinasi, delusi, agitasi, serta kecemasan yang dialami penderita skizofrenia.\r\n\r\nPenderita yang menggunakan antipsikotik, perilakunya tidak seagresif penderita lainnya yang tidak menggunakan obat ini. Selain itu, menurut penelitian, mereka yang menggunakan antipsikotik juga jarang mengalami kumat setelah kondisinya membaik.\r\n\r\nAnti psikotik bisa digunakan dalam dua cara, yaitu diminum atau disuntikkan. Bagi penderita skizofrenia yang telah melewati masa akut, pemberian antipsikotik harus tetap diberikan sebagai langkah pencegahan.\r\n\r\nAda dua kategori obat-obatan antipsikotik, yaitu antipsikotik generasi lama (fluphenazine, perphenazine, chlorpromazine, dan haloperidol) dan generasi baru (clozapine, ziprasidone, quetiapine, olanzapine, risperidone, aripiprazole, dan paliperidone)\r\n\r\nEfek samping yang hanya ada pada antipsikotik generasi lama adalah otot terasa berkedut, badan gemetar, dan kejang otot. Sedangkan efek samping yang ada pada kedua jenis antipsikotik adalah peningkatan berat badan, sembelit, mengantuk, pandangan kabur, mulut kering, dan berkurangnya gairah seks.\r\n\r\nSaat ini antipsikotik generasi baru merupakan obat yang paling sering direkomendasikan oleh dokter karena dianggap memiliki efek samping yang lebih sedikit.\r\n\r\nPenanganan psikologis\r\nSetelah gejala skizofrenia reda, disamping harus tetap melanjutkan konsumsi obat, penderita juga membutuhkan pengobatan psikologis. Ada beberapa hal yang termasuk di dalam penanganan psikologis ini.\r\n\r\nPertama adalah terapi individual. Pada terapi ini penderita diajarkan cara mengatasi stres dan mengendalikan skizofrenia melalui identifikasi tanda-tanda kambuh secara dini. Terapi ini juga berguna untuk memulihkan kepercayaan diri mereka. Terapi individual juga bermanfaat untuk kembali mengembangkan kemampuan mereka untuk bekerja dalam mengisi rutinitas kehidupannya.\r\n\r\nSelain itu, dalam terapi individu, penderita skizofrenia juga akan diajarkan cara-cara untuk mengendalikan perasaan dan pola pikirnya. Tujuannya adalah untuk menggantikan pikiran negatif dengan hal-hal yang positif.\r\n\r\nYang kedua adalah terapi kemampuan bersosialisasi. Dalam hal ini penderita diajarkan bagaimana meningkatkan komunikasi dan interaksi dengan orang lain.\r\n\r\nDan yang ketiga adalah penyuluhan yang diperuntukkan bagi keluarga penderita. Guna penyuluhan ini adalah untuk memberikan pendidikan serta wawasan pada keluarga penderita skizofrenia, baik mengenai cara mengatasi masalah yang timbul akibat gejalanya, maupun cara memberikan dukungan bagi penderita skizofrenia. Seseorang yang mengalami gejala skizofrenia sebaiknya segera dibawa ke psikiater dan psikolog.', 'Mencegah mereka yang baru memperlihatkan tanda-tanda fase prodromal tidak menjadi skizofrenia yang nyata, dengan cara memberikan obat antipsikotik dan suasana keluarga yang kondusif.'),
('P0005', 'Depresi', 'Depresi adalah perasaan yang sedih dan kehilangan minat terhadap segala sesuatu. Pasien dapat mengungkapkan bahwa mereka merasa murung, tidak ada harapan, terbuang dan tidak berharga. Penderita akan sering mengaku bahwa perasaannya sakit sekali, dan kadang-kadang sampai tidak bisa menangis bahkan pasian bisa melakukan tindakan bunuh diri. ', 'Berkosultasi dengan psikolog,\r\nMelakukan pendekatan terhadap agama dan berkonsultasi dengan pemuka agama.\r\nMengubah pemikiran dari negative ke arah positive.\r\nMinta dukungan dari orang-orang terdekat.\r\nBanyak berkomunikasi dengan orang terdekat seperti teman, keluarga, dan kerabat.', 'Rutin mengikuti ceramah kerohanian/ ceramah agama.\r\nBerfikir dan bertindak positif atas segala sesuatu.\r\nJangan mengurung/menutup diri.\r\nOlah raga lah secara rutin.\r\nSering melakukan aktifitas outdoor dan terkena sinar matahari.\r\nTidur cukup (+- 6 jam) dan teratur.\r\nBersosialita (Berinteraksi dengan orang lain).\r\nMakan dan minum  yang cukup serta bermanfaat bagi tubuh.'),
('P0006', 'Amnesia', 'Amnesia disosiatif adalah ketidak mampuan individu untuk mengingat detail personal yang penting dan pengalaman yang sering kali berhubungan dengan kejadian traumatis atau sangat menekan. Memori ini hilang tanpa berhubungan dengan disfungsi otak yang berkaitan dengan kerusakan otak atau obat-obatan, juga buka sebuah kondisi lupa yang umumnya terjadi. Orang-orang yang mengalami amnesia disosiatif sangat umum memberikan gambaran tentang sebuah rentang atau rangkaian dalam ingatan mereka mengenai kejadian bermasalah di masa lalu atau bagian-bagian kehidupan mereka. Amnesia disosiatif jarang terjadi, sejauh ini merupakan hal yan sangat umum dalam gangguan disosiatif. Terdapat sebuah kesepakatan yang telah diperhatikan setelah perang dunia II, ketika banyak individu dengan trauma yang berhubungan dengan pertempuran mengalami amnesia.', 'Pengobatan amnesia tergantung dari penyebabnya. Misalnya, seseorang yang telah mengalami peristiwa traumatis akan efektif ditangani dengan sedasi, perawatan dengan kasih sayang, dan mungkin membutuhkan bantuan psikiater. Penderita gegar otak harus beristirahat setelah komplikasinya disembuhkan. Jika alkoholisme adalah penyebabnya, maka penderita harus berhenti mengonsumsi alkohol, dukungan emosional dan mencukupi nutrisi penting bagi tubuhnya. Dalam kasus penyakit Alzheimer, berbagai obat-obatan baru yang akan meningkatkan fungsi kolinergik otak sudah banyak tersedia.', ' '),
('P0007', 'Fugue', '7.	Fugue disosiatif adalah hilangnya memori yang disertai dengan meninggalkan rumah dan menciptakan indentitas baru. Dalam fugue disosiatif, hilangnya memori lebih besar dibandingkan dalam amnesia disosiatif. Orang yang mengalami fugue disosiatif tidak hanya mengalami amnesia total, namun tiba-tiba meninggalkan rumah dan beraktifitas dengan menggunakan identitas baru', 'Terapi kesenian kreatif. Dalam beberapa referensi dikatakan bahwa tipe terapi ini menggunakan proses kreatif untuk membantu pasien yang sulit mengekspresikan pikiran dan perasaan mereka. Seni kreatif dapat membantu meningkatkan kesadaran diri. Terapi seni kreatif meliputi kesenian, tari, drama dan puisi.\r\nTerapi kognitif. Terapi kognitif ini bisa membantu untuk mengidentifikasikan kelakuan yang negative dan tidak sehat dan menggantikannya dengan yang positif dan sehat, dan semua tergantung dari ide dalam pikiran untuk mendeterminasikan apa yang menjadi perilaku pemeriksa.\r\nTerapi obat. Terapi ini sangat baik untuk dijadikan penangan awal, walaupun tidak ada obat yang spesifik dalam menangani gangguan disosiatif ini. Biasanya pasien diberikan resep berupa anti-depresan dan obat anti-cemas untuk membantu mengontrol gejala mental pada gangguan disosiatif ini.', 'Anak- anak yang secara fisik, emosional dan seksual mengalami gangguan, sangat beresiko tinggi mengalami gangguan mental yang dalam hal ini adalah gangguan disosiatif. Jika terjadi hal yang demikian, maka bersegeralah mengobati secara sugesti, agar penangan tidak berupa obat anti depresan ataupun obat anti stress, karena diketahui bahwa jika menanamkan sugesti yang baik terhadap usia belia, maka nantinya akan didapatkan hasil yang maksimal, dengan penangan yang minimal.'),
('P0008', 'Fobia Sosial', 'Fobia Sosial adalah ketakutan menetap dan tidak rasional yang umumnya berkaitan dengan keberadaan orang lain. Fobia ini dapat sangat merusak, sedemikian parah sehingga angka bunuh diri pada orang-orang yang menderita fobia ini jauh lebih tinggi disbanding pada mereka yang menderita gangguan anxietas lain. Fobia sosial di tandai dengan ketakutan akan situasi sosial seperti biaca didepan public, buang air kecil di kamar mandi umum, makan di depan umum, atau menulis di depan umum yang membuat perasaan diawasi dan dievaluasi secara negatif oleh orang lain. Individu yang menderita fobia social biasanya mencoba menghindari situasi dimana ia mungkin dinilai dan menunjukkan tanda-tanda kecemasan atau berprilaku secara memalukan. Ketakutan yang ditunjukan dengan keringat yang berlebihan atau memerahnya waja. Berbicara atau melakukan sesuatu didepan public, makan ditempat umum, menggunakan toilet umum atau hamir semua aktifitas lain yang dilakukan ditempat yang terdapat orang lain dapat menimbulkan kecemasan ekstrim, bahkan serangan panik besar-besaran.', 'Terapi\r\nTerapi perilaku kognitif untuk penderita kecemasan sosial terbukti berhasil mengatasi masalah ini. Hasil penelitian menyebutkan, penderita fobia sosial tak lagi dikontrol oleh ketakutan dan kecemasan setelah menjalani terapi ini. Lebih maksimal lagi jika terapi dilakukan dalam grup.\r\n\r\nObat-obatan\r\nObat tertentu seperti antidepresan juga menolong penderita fobia sosial. Tentu saja pengawasan psikolog dan psikiater tetap diperlukan. Obat yang dikombinasikan dengan terapi akan lebih maksimal dalam menyembuhkan fobia sosial. Jika hanya bergantung pada obat, kecenderungan penanganannya bersifat sementara.\r\n\r\n Perawatan intensif\r\nPenyakit ini sangat bisa disembuhkan. Perawatan yang intensif, paduan dari obat dan terapi dengan pengawasan dari spesialis akan memberikan hasil optimal. Cari spesialis yang mengerti betul gejala dan penyakit ini, berikut perawatan hingga pemulihannya. ', 'Fobia sosial dapat dicegah sehingga tidak sampai berlarut-larut salah satunya adalah pola asuh yang mengajarkan pada anak untuk percaya diri, Memberikan motivasi untuk terus maju dan biarkan anak-anak ntuk berkawan denan siapa saja , asalkan masih dalam batas yang wajar. Dan Orangtua juga harus mengajarkan pada anak pentingnya berinteraksi dengan orang lain dan lingkungan sekitar karena manusia adalah makhluk sosial yang sangat bergantung dengan orang lain.'),
('P0009', 'Fobia Khusus', 'Fobia Khusus, ditandai oleh ketakutan yang tidak rasional akan objek atau situasi tertentu. Gangguan ini termasuk gangguan medik yang paling sering didapati, namun demikian sebagian kasus hanyalah ringan dan tidak perlu mendapatkan pengobatan. Pada fobia terjadi salah-pindah kecemasan pada barang atau keadaan yang mula-mula menimbulkan kecemasan itu. Jadi terdapat dua mekanisme pembelaan, yaitu salah-pindah dan simbolisasi. Ada banyak macam fobia yang dinamakan menurut barang atau keadaan. Apabila berhadapan dengan objek atau situasi tersebut, orang dengan fobia akan mengalami perasaan panik, berkeringat, berusaha menghindar, sulit untuk bernapas dan jantung berdebar. Sebagian besar orang dewasa yang menderita fobia menyadari bahwa ketakutannya tidak rasional dan banyak yang memilih untuk mencoba menahan perasaan anxietas yang hebat daripada mengungkapkan ganguannya.\r\nBeberapa istilah fobia Khusus :\r\n\r\nafrophobia - ketakutan akan orang Afrika atau budaya Afrika.\r\n\r\nagoraphobia - takut pada lapangan.\r\n\r\nantlophobia - takut akan banjir.\r\n\r\narachnophobia - ketakutan pada laba-laba.\r\n\r\narithmophobia - takut akan angka.\r\n\r\nbibliophobia - takut pada buku.\r\n\r\ncaucasophobia - ketakutan akan orang dari ras kaukasus.\r\n\r\ncenophobia - takut akan ruangan yang kosong.\r\n\r\nclaustrophobia - takut akan ruang sempit seperti lift.\r\n\r\ndendrophobia - takut pada pohon.\r\n\r\necclesiophobia - takut pada gereja.\r\n\r\nfelinophobia - takut akan kucing.\r\n\r\ngenuphobia - takut akan lutut.\r\n\r\nhydrophobia - ketakutan akan air.\r\n\r\nhyperphobia - takut akan ketinggian.\r\n\r\niatrophobia - takut akan dokter.\r\n\r\njapanophobia - ketakutan akan orang jepang.\r\n\r\nlachanophobia - ketakutan pada sayur-sayuran.\r\n\r\nlygopobia - ketakutan akan kegelapan.\r\n\r\nnecrophobia - takut akan kematian.\r\n\r\npanophobia - takut akan segalanya.\r\n\r\nphotophobia - ketakutan akan cahaya.\r\n\r\nranidaphobia - takut pada katak.\r\n\r\nschlionophobia - takut pada sekolah.\r\n\r\ntripofobia - ketakutan akan lubang yang banyak.\r\n\r\nuranophobia - ketakutan akan surga.\r\n\r\nxanthophobia - ketakutan pada warna kuning.\r\n\r\n\r\n', 'Terapi\r\nTerapi perilaku kognitif untuk penderita kecemasan sosial terbukti berhasil mengatasi masalah ini. Hasil penelitian menyebutkan, penderita fobia sosial tak lagi dikontrol oleh ketakutan dan kecemasan setelah menjalani terapi ini. Lebih maksimal lagi jika terapi dilakukan dalam grup.\r\n\r\nObat-obatan\r\nObat tertentu seperti antidepresan juga menolong penderita fobia sosial. Tentu saja pengawasan psikolog dan psikiater tetap diperlukan. Obat yang dikombinasikan dengan terapi akan lebih maksimal dalam menyembuhkan fobia sosial. Jika hanya bergantung pada obat, kecenderungan penanganannya bersifat sementara.\r\n\r\n Perawatan intensif\r\nPenyakit ini sangat bisa disembuhkan. Perawatan yang intensif, paduan dari obat dan terapi dengan pengawasan dari spesialis akan memberikan hasil optimal. Cari spesialis yang mengerti betul gejala dan penyakit ini, berikut perawatan hingga pemulihannya. ', 'Fobia sosial dapat dicegah sehingga tidak sampai berlarut-larut salah satunya adalah pola asuh yang mengajarkan pada anak untuk percaya diri, Memberikan motivasi untuk terus maju dan biarkan anak-anak ntuk berkawan denan siapa saja , asalkan masih dalam batas yang wajar. Dan Orangtua juga harus mengajarkan pada anak pentingnya berinteraksi dengan orang lain dan lingkungan sekitar karena manusia adalah makhluk sosial yang sangat bergantung dengan orang lain.'),
('P0010', 'Insomnia ', 'Insomnia adalah gejala kelainan dalam tidur berupa kesulitan berulang untuk tidur atau mempertahankan tidur walaupun ada kesempatan untuk itu. Gejala tersebut biasanya diikuti gangguan fungsional saat bangun. Insomnia sering disebabkan oleh adanya suatu penyakit atau akibat adanya permasalahan psikologis. Dalam hal ini, bantuan medis atau psikologis akan diperlukan. Salah satuterapi psikologis yang efektif menangani insomnia adalah terapi kognitif. Dalam terapi tersebut, seorang pasien diajari untuk memperbaiki kebiasaan tidur dan menghilangkan asumsi yang kontra-produktif mengenai tidur. Banyak penderita insomnia tergantung pada obat tidur dan zat penenang lainnya untuk bisa beristirahat. Semua obat sedatif memiliki potensi untuk menyebabkan ketergantungan psikologis berupa anggapan bahwa mereka tidak dapat tidur tanpa obat tersebut.', 'Pengobatan insomnia tergantung kepada penyebab dan beratnya insomnia.\r\n\r\nOrang tua yang mengalami perubahan tidur karena bertambahnya usia, biasanya tidak memerlukan pengobatan, karena perubahan tersebut adalah normal.\r\n\r\nPenderita insomnia hendaknya tetap tenang dan santai beberapa jam sebelum waktu tidur tiba dan menciptakan suasana yang nyaman di kamar tidur; cahaya yang redup dan tidak berisik.\r\n\r\nJika penyebabnya adalah stres emosional, diberikan obat untuk mengurangi stres. Jika penyebabnya adalah depresi, diberikan obat anti-depresi.\r\n\r\nJika gangguan tidur berhubungan dengan aktivitas normal penderita dan penderita merasa sehat, bisa diberikan obat tidur untuk sementara waktu. Alternatif lain untuk mengatasi insomnia tanpa obat-obatan adalah dengan terapi hipnosis atau hipnoterapi.', 'Ada beberapa langkah pencegahan yang dapat Anda lakukan agar tidak terkena insomnia, di antaranya adalah dengan menjaga kenyamanan kamar tidur dan menerapkan pola hidup sehat.\r\n\r\nHindari mengonsumsi makanan dalam porsi besar, minuman beralkohol, dan nikotin menjelang waktu tidur. Sama halnya dengan kafein, jika Anda gemar minum teh atau kopi, berhentilah mengonsumsi minuman tersebut setidaknya empat jam sebelum waktu tidur. Lakukanlah hal-hal yang dapat membantu menimbulkan rasa kantuk misalnya seperti mandi atau minum susu hangat.\r\n\r\nJika Anda masih belum mengantuk, jangan memaksakan diri untuk tidur. Lebih baik Anda bangun dan melakukan kegiatan lainnya seperti menonton TV, mengobrol bersama keluarga, atau membaca. Setelah Anda mengantuk dan merasa lelah, barulah kembali ke kamar. Hindari untuk berbaring lama-lama di tempat tidur sambil merasa cemas atau memperhatikan jam.\r\n\r\nJagalah kebersihan kamar agar Anda dapat tidur dengan nyaman dan terhindar dari penyakit. Jika suara bising atau cahaya lampu yang berasal dari luar kamar mengganggu tidur Anda, maka pakailah penutup kuping atau mata sebagai solusinya.\r\n\r\nUsahakan untuk bangun di waktu yang sama tiap hari meski kurang tidur. Jika Anda lelah dan mengantuk saat siang, jangan tidur karena itu hanya akan membuat Anda kembali sulit tidur pada malam harinya. Lakukanlah olahraga sekitar tiga puluh menit tiap hari secara rutin, seperti bersepeda atau jalan santai. Selain dapat menjaga tubuh tetap bugar, olahraga juga dapat membuat tidur Anda nyenyak. Namun harus diingat bahwa batas waktu dilakukannya olahraga adalah empat jam sebelum waktu tidur.'),
('P0011', 'Hipersomnia', '11.	Hipersomnia adalah kelainan tidur yang ditandai rasa kantuk yang berlebihan yang menyebabkan pasien sering kali membutuhkan waktu tidur yang jauh lebih lama dari orang normal. Pasien tidur di malam hari dalam jangka waktu yang lama tetapi tidak menyegarkan, sehingga pasien sering kali melakukan tidur siang yang juga lama dan tidak memuaskan. Pasien hipersomnia dapat tidur selama jangka waktu 20 jam sehari. Hipersomnia juga dapat diakibatkan oleh kondisi medis seperti infeksi virus, terutama mononucleosis dan ensefalitism atau hidrosefalus.', 'Konsultasikan diri anda ke psikolog.\r\nBiasakan berprilaku tidur sehat dan mengatur waktu tidur yang benar, yakni mengusahakan tertidur dan bangun pada jam tertentu setiap hari. Pola tidur yang baik pasti akan memberikan kualitas tidur yang baik pula.', 'Dalam banyak kasus, hipersomnia dapat dibantu dengan perubahan gaya hidup, seperti:\r\nMenghindari rokok, alkohol dan minuman berkafein sebelum tidur.\r\nRelaksasi secara rutin untuk mencegah kecemasan atau kekhawatiran di malam hari.\r\nBerolahraga secara teratur dan menjaga berat badan yang normal.\r\nDiet seimbang untuk mencegah kekurangan gizi.\r\nHindari gangguan di ruang tidur, misalnya dengan tidak menempatkan televisi di kamar tidur.\r\nAtur tempat tidur senyaman mungkin, pastikan suhunya tidak terlalu panas atau terlalu dingin.\r\nTerapkan jadwal tidur, dan patuhi. Hal ini akan membuat tubuh Anda terbiasa dan akan merespon ketika saatnya harus tidur.\r\nHanya tidur hanya saat mengantuk.\r\n'),
('P0012', 'Kleptomania', 'Kleptomania adalahdalah gangguan mental yang membuat penderitanya tidak bisa menahan diri untukmencuri. Benda-benda yang dicuri oleh penderita kleptomania umumnya adalah barang-barang yang tidak berharga, seperti mencuri gula, permen, sisir, atau barang-barang lainnya. Sang penderita biasanya merasakan rasa tegang subjektif sebelum mencuri dan merasakan kelegaan atau kenikmatan setelah mereka melakukan tindakan mencuri tersebut. Tindakan ini harus dibedakan dari tindakan mencuri biasa yang biasanya didorong oleh motivasi keuntungan dan telah direncanakan sebelumnya. Penyakit ini umum muncul pada masa puber dan ada sampai dewasa. Pada beberapa kasus, kleptomania diderita seumur hidup. Penderita juga mungkin memiliki kelainan jiwa lainnya, seperti kelainan emosi, bulimia Nervosa, paranoid, schizoid atau borderline personality disorder.\r\n', 'Meskipun akan sangat sulit untuk menyembuhkan kleptomania dengan diri anda sendiri, anda bisa mengikuti langkah-langkah di bawah ini untuk  merawat diri anda dengan cara pengobatan sehat, disaat yang sama saat anda mendapatkan pengobatan profesional :\r\n\r\n1. Bertahan pada rencana pengobatan. Konsumsi obat-obatan seperti yang telah dijadwalkan oleh sesi terapi. Ingatlah bahwa hal ini bisa menjadi sangat berat untuk dijalankan dan anda adakalanya anda mengalami kemunduran dalam menjalankan pengobatan ini.\r\n\r\n2.Mendidik diri anda. Belajar lebih banyak tentang kleptomania jadi anda bisa lebih memahami faktor resiko, pengobatan, dan hal-hal yang dapat memicu kleptomania.\r\n\r\n3.Cari pengobatan untuk penyimpaangan pengunaan zat-zat berbahaya dan msalah kesehatan mental.  Kecanduan, depresi, kegelisahan, tekanan mental bisa mempengaruhi satu sama lain, membuat anda terjebak dalam siklus mental tidak sehat.\r\n\r\n\r\n\r\n\r\n', 'Karena penyebab kleptomania masih belum jelas, tidak diketahu dengan jelas bagaimana mencegah kleptomania dengan jalan tertentu. Mendapatkan pengobatan secepatnya saat keinginan mencuri kambuhan mulai terjadi, bisa membantu mencegah kleptomania menjadi lebih buruk, kondisinya menjadi kronis yang nantinya akan sulit untuk disembuhkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta`
--

CREATE TABLE IF NOT EXISTS `peta` (
  `kd_peta` varchar(5) NOT NULL,
  `nama_rs` varchar(30) NOT NULL,
  `kota` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peta`
--

INSERT INTO `peta` (`kd_peta`, `nama_rs`, `kota`, `link`) VALUES
('L0001', 'RS Marzoeki Mahdi', 'Bogor\r\n', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k2q83a80LPHc'),
('L0002', 'RS Jiwa Ciluar', 'Ciluar, Bandung.', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.kTsOiIdYTxR0'),
('L0003', 'RSJ Grogol', 'Jakarta ', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k33YG7pFQceE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_penyakit_gejala`
--

CREATE TABLE IF NOT EXISTS `relasi_penyakit_gejala` (
  `kode_penyakit` varchar(8) NOT NULL,
  `kode_gejala` varchar(8) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_penyakit_gejala`
--

INSERT INTO `relasi_penyakit_gejala` (`kode_penyakit`, `kode_gejala`, `bobot`) VALUES
('P0001', 'G0001', 25),
('P0001', 'G0002', 25),
('P0001', 'G0003', 25),
('P0001', 'G0004', 25),
('P0002', 'G0005', 30),
('P0002', 'G0006', 35),
('P0002', 'G0007', 35),
('P0003', 'G0008', 25),
('P0003', 'G0009', 25),
('P0003', 'G0010', 15),
('P0003', 'G0011', 10),
('P0003', 'G0012', 25),
('P0004', 'G0008', 15),
('P0004', 'G0009', 30),
('P0004', 'G0011', 15),
('P0004', 'G0013', 30),
('P0004', 'G0018', 10),
('P0005', 'G0014', 30),
('P0005', 'G0015', 20),
('P0005', 'G0016', 10),
('P0005', 'G0017', 10),
('P0005', 'G0018', 10),
('P0005', 'G0019', 5),
('P0005', 'G0020', 15),
('P0006', 'G0021', 60),
('P0006', 'G0022', 40),
('P0007', 'G0021', 40),
('P0007', 'G0023', 60),
('P0008', 'G0032', 25),
('P0008', 'G0024', 15),
('P0008', 'G0031', 5),
('P0008', 'G0030', 10),
('P0008', 'G0029', 5),
('P0008', 'G0028', 10),
('P0008', 'G0027', 10),
('P0008', 'G0026', 10),
('P0008', 'G0025', 10),
('P0010', 'G0042', 30),
('P0010', 'G0036', 15),
('P0009', 'G0033', 25),
('P0009', 'G0024', 15),
('P0009', 'G0031', 5),
('P0009', 'G0030', 10),
('P0009', 'G0029', 5),
('P0009', 'G0028', 10),
('P0009', 'G0027', 10),
('P0009', 'G0026', 10),
('P0009', 'G0025', 10),
('P0010', 'G0035', 15),
('P0010', 'G0034', 20),
('P0011', 'G0036', 20),
('P0012', 'G0039', 20),
('P0012', 'G0040', 40),
('P0012', 'G0041', 40),
('P0010', 'G0043', 20),
('P0011', 'G0042', 20),
('P0011', 'G0038', 30),
('P0011', 'G0037', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_analisa`
--

CREATE TABLE IF NOT EXISTS `tmp_analisa` (
  `username` varchar(50) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE IF NOT EXISTS `tmp_gejala` (
  `username` varchar(50) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_penyakit`
--

CREATE TABLE IF NOT EXISTS `tmp_penyakit` (
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
  MODIFY `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
