/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : sispak

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 12/10/2022 04:54:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel`  (
  `kd_artikel` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penulis` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `abstrak` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kd_artikel`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('A0001', 'Nur Rizky Aulia', 'Pentingnya Pengetahuan Kesehatan Reproduksi Wanita', 'Menurut WHO yang dimaksud dengan kesehatan reproduksi bukan hanya terbebas dari penyakit ataupun kecacatan dalam aspek sistem reproduksi melainkan keadaan fisik, mental serta sosial yang sempurna.', 'Menurut WHO yang dimaksud dengan kesehatan reproduksi bukan hanya terbebas dari penyakit ataupun kecacatan dalam aspek sistem reproduksi melainkan keadaan fisik, mental serta sosial yang sempurna. Kesehatan reproduksi wanita merupakan keadaan seorang wanita yang sehat baik secara fisik, mental dan sosial yang berhubungan dengan sistem dan fungsi reproduksi. Permasalahan kesehatan reproduksi pada wanita umumnya sangan dirasakan ketika masa menopause.\r\n<br>\r\n<br>\r\nKesadaran untuk menjaga kesehatan sistem reproduksi sebaiknya ditanamkan sejak masih remaja karena pada masa remaja merupakan waktu yang terbaik untuk membangun sebuah kebiasaan. Menjaga kesehatan reproduksi dapat dilakukan dengan menerapkan pola makan yan sehat, olahraga secara teratur serta mengkonsumsi vitamin atau suplemen yang dapat meningkatkan daya tahan tubuh.\r\n<br>\r\n<br>\r\nKurangnya pengetahuan terkait kesehatan reproduksi dapat menimbulkan beberapa hal yang tidak diinginkan contohnya pada kaum remaja dapat menimbulkan beberapa permasalahan misalnya penyakit seksual menular, kehamilan di usia muda, hingga aborsi yang berakibat pada hilangnya nyawa. Kurangnya edukasi mengenai macam-macam penyakit dan gejalanyang dapat menyerang juga akan memperlambat penanganan penyakit karena ketidaktahuan masyarakat.\r\n<br>\r\n<br>\r\nSumber :\r\n<br>\r\nhttps://daldukkbpppa.bulelengkab.go.id/informasi/detail/artikel/keluarga-dan-kesehatan-reproduksi-perempuan-16\r\n<br>\r\nhttps://dp3appkb.kalteng.go.id/artikel/pentingnya-pengetahuan-kesehatan-reproduksibagi-remaja.html\r\n<br>\r\nhttps://www.halodoc.com/artikel/pentingnya-pengetahuan-kesehatan-reproduksi-bagi-remaja\r\n<br>\r\nhttps://tirto.id/cara-menjaga-kesehatan-reproduksi-bagi-remaja-f1FA', 'GAMBAR ARTIKEL 1.jpg');
INSERT INTO `artikel` VALUES ('A0002', 'Nur Rizky Aulia', '10 Cara Menjaga Kesehatan Reproduksi Wanita', 'Menjaga kesehatan sistem reproduksi merupakan salah satu hal yang penting dilakukan oleh setiap wanita, perilaku tersebut dapat dilakukan melakukan kebiasaan sederhana sehari-hari.', 'Menjaga kesehatan sistem reproduksi merupakan salah satu hal yang penting dilakukan oleh setiap wanita, perilaku tersebut dapat dilakukan melakukan kebiasaan sederhana sehari-hari. Berikut ini 10 cara untuk menjaga kesehatan reproduksi wanita :\r\n<br>\r\n<br>\r\n1. Menjaga Kebersihan Organ Reproduksi\r\n<br>\r\nCara membersihkan vagina yang benar yaitu dengan cara membasuh dari depan ke belakang (dari arah vagina menuju anus), terutama setelah buang air kecil dan buang air besar. Bila tidak dibersihkan dengan cara yang benar maka kuman dari anus dapat terbawa menuju vagina dan dapat menimbulkan infeksi pada vagina. Membersihkan vagina tidak disarankan menggunakan sabun khusus kewanitaan yang mengandung alkohol, pewangi, atau antiseptik, hal tersebut dapat menyebabkan iritasi dan membunuh bakteri normal di vagina.\r\n<br>\r\n<br>\r\n2. Konsumsi Makanan Sehat\r\n<br>\r\nKonsumsi makanan sehat dan bergizi seimbang dapat membantu menjaga kesehatan organ reproduksi, sangat disarankan untuk mengkonsumsi makanan yang banyak mengandung protein, lemak sehat, antioksidan, serat, vitamin, dan mineral, seperti selenium, folat, zat besi, dan zinc. Kandungan nutrisi-nutrisi tersebut dapat diperoleh dari buah-buahan, sayuran, kacang-kacangan, susu, telur, daging, dan ikan. Selain menjaga makanan juga disarankan untuk minum 8 gelas air perhari dan membatasi konsumsi kafein.\r\n<br>\r\n<br>\r\n3. Menggunakan Minyak Zaitun\r\n<br>\r\nKonsumsi makanan dengan minyak zaitu dapat menghindari risiko terjadinya sindrom polikistik ovarium atau polycystic ovarian syndrome (PCOS). PCOS merupakan gangguan yang bisa menyebabkan seorang wanita sulit hamil, gangguan hormon yang bisa menyerang wanita di usia subur. \r\n<br>\r\n<br>\r\n4. Hindari Merokok\r\n<br>\r\nKebiasaan merokok dapat mengganggu kesehatan reproduksi karena zat-zat yang terdapat pada rokok dapat mengurangi jumlah dan kualitas sel telur dan mengganggu kesehatan rahim.\r\n<br>\r\n<br>\r\n5. Hindari Minum Alkohol\r\n<br>\r\nKebiasaan minum minuman beralkohol dapat menggangu kesehatan organ reproduksi wanita karena kandungan alkohol dapat meningkatkan risiko terjadinya gangguan ovulasi.\r\n<br>\r\n<br>\r\n6. Hindari Seks Berisiko\r\n<br>\r\nPerilaku seksual yang berisiko dapat mengganggu sistem reproduksi pada wanita, misalnya kebiasaan bergonta-ganti pasangan dan melakukan hubungan intim tanpa menggunakan pengaman (kondom). Selain memicu gangguan pada sistem reproduksi wanita, hal tersebut juga dapat meningkatkan risiko penyakit menular seksual.\r\n<br>\r\n<br>\r\n7. Cukup Istirahat dan Kelola Stres\r\n<br>\r\nIstirahat yang cukup dengan tidur selama 7-9 jam setiap malamnya dapat membantu untuk menghindari gangguan pada sistem reproduksi wanita. Hindari stres juga dapat mencegah terjadinya gangguan pada sistem reproduksi wanita. Hal yang dapat mengatasi stres misalnya dengan jalan-jalan, olahraga, mencoba pijatan, atau yoga.\r\n<br>\r\n<br>\r\n8. Menjaga Berat Badan\r\n<br>\r\nBerat badan berlebih (obesitas) atau berat badan yang terlalu rendah dapat mengganggu ovulasi dan produksi hormon yang mengatur kesuburan seorang wanita, maka disarankan untuk menjaga berat badan tetap ideal atau sesuai dengan indeks massa tubuh (IMT). \r\n<br>\r\n<br>\r\n9. Hindari Penggunaan Obat-Obatan\r\n<br>\r\nPenggunaan obat-obatan atau suplemen diluar resep dokter menjadi salah satu faktor yang dapat mengganggu kesehatan reproduksi wanita.\r\n<br>\r\n<br>\r\n10. Gunakan Alat Kontrasepsi\r\n<br>\r\nPenggunaan alat kontrasepsi untuk mencegah kehamilan yang tidak direncanakan dapat mencegah gangguan pada sistem reproduksi wanita.\r\n<br>\r\n<br>\r\nSumber :\r\n<br>\r\nhttps://www.halodoc.com/artikel/ini-7-kebiasaan-yang-dilakukan-untuk-kesehatan-reproduksi-wanita\r\n<br>\r\nhttps://www.alodokter.com/cara-menjaga-kesehatan-reproduksi-wanita\r\n<br>\r\nhttps://ugm.ac.id/id/berita/22168-tetap-sehat-dengan-menjaga-kesehatan-organ-reproduksi', 'GAMBAR ARTIKEL 2.jpg');
INSERT INTO `artikel` VALUES ('A0003', 'Nur Rizky Aulia', 'Cara Mendeteksi dan Mencegah Kanker Serviks', 'Kanker Serviks adalah penyakit berbahaya yang menyerang kaum wanita dan dapat menyebabkan kematian pada wanita. Pengetahuan mengenai penyakit ini sangat penting diketahui sedini mungkin. ', 'Kanker Serviks adalah penyakit berbahaya yang menyerang kaum wanita dan dapat menyebabkan kematian pada wanita. Kanker serviks menjadi salah satu jenis kanker dengan korban jiwa tertinggi di Indonesia. Pengetahuan mengenai penyakit ini sangat penting agar dapat mengetahui cara mendeteksi dan mencegah kanker serviks sedini mungkin. Kanker serviks atau kanker leher rahim terjadi akibat infeksi virus HPV (human papillomavirus) yang biasanya disebarkan melalui hubungan seksual. Penyakit ini sering kali tidak menimbulkan gejala pada awalnya, akan tetapi ketika gejala mulai muncul kerap disalahartikan sebagai gejala menstruasi atau infeksi saluran kemih. Pada umumnya, gejala yang dialami oleh penderita kanker serviks yaitu perdarahan saat berhubungan seks atau setelah masa menopause dan menstruasi, keputihan yang mengandung darah dan berbau busuk, nyeri panggul, dan nyeri saat berhubungan intim.\r\n<br>\r\n<br>\r\nUpaya pencegahan kanker serviks dapat dilakukan dengan melakukan pola hidup sehat dengan CERDIK yaitu C = Cek kesehatan secara teratur, E = Enyahkan asap rokok, R = Rajin aktifitas fisik, D = Diet sehat dengan kalori seimbang, I = Istirahat cukup, K = Kelola stress. Berikut 6 cara yang dilakukan untuk mendeteksi kanker serviks :\r\n<br>\r\n<br>\r\n1. Pap Smear\r\n<br>\r\nDilakukan untuk melihat keberadaan sel-sel yang mungkin dapat berkembang menjadi kanker, tes ini dilakukan dengan mengambil sampel sel di serviks (leher rahim).\r\n<br>\r\n<br>\r\n2. Kolposkopi\r\n<br>\r\nDilakukan dengan rekomendasi dokter apabila ada hasil yang dicurigai tidak normal dari tes pap smear.\r\n<br>\r\n<br>\r\n3. Tes Schiller\r\n<br>\r\nDilakukan dengan mengoleskan larutan yodium pada leher rahim untuk mendeteksi keberadaan jaringan yang tidak normal, jaringan yang sehat akan berwarna cokelat setelah diolesi, sedangkan jaringan yang tidak normal akan berwarna putih atau kuning.\r\n<br>\r\n<br>\r\n4. Kuretase Endoserviks (ECC)\r\n<br>\r\nDilakukan untuk memeriksa bagian leher rahim yang tidak terjangkau saat tes kolposkopi.\r\n<br>\r\n<br>\r\n5. Biopsi Kerucut (Cone Biopsy)\r\n<br>\r\nDilakukan jika terdapat hasil yang tidak normal dari hasil pap smear, tetapi juga dapat dilakukan untuk menghilangkan sel prekanker atau kanker serviks derajat ringan.\r\n<br>\r\n<br>\r\n6. Biopsi Punch (Punch Biopsy)\r\n<br>\r\nDilakukan dengan cara mengangkat sampel jaringan yang dibutuhkan dengan menggunakan pisau berbentuk bundar. Prosedur ini mungkin akan dilakukan beberapa kali pada area sekitar serviks.\r\n<br>\r\n<br>\r\nUpaya yang dapat dilakukan untuk mencegah kanker serviks yaitu dengan cara menerima vaksin HPV, menghindari seks berisikom, menghindari kebiasaan merokok, mengonsumsi makanan bergizi seimbang, menjaga berat badan ideal.\r\n<br>\r\n<br>\r\nSumber :\r\n<br>\r\nhttps://www.alodokter.com/ini-upaya-mencegah-dan-cara-mendeteksi-kanker-serviks\r\n<br>\r\nhttp://p2ptm.kemkes.go.id/artikel-sehat/deteksi-dini-kanker-serviks-dengan-iva\r\n<br>\r\nhttps://www.kompas.com/sains/read/2021/04/24/210000923/gejala-dan-cara-mencegah-kanker-serviks?page=all', 'GAMBAR ARTIKEL 3.jpg');
INSERT INTO `artikel` VALUES ('A0004', 'Nur Rizky Aulia', '9 Gangguan Kehamilan Yang Perlu Diwaspadai', 'Gangguan atau keluhan selama masa kehamilan merupakan hal yang umum dirasakan, tapi ada juga gangguan kehamilan yang perlu diwaspadai.', 'Gangguan atau keluhan selama masa kehamilan merupakan hal yang umum dirasakan, namun jika gangguan tersebut terus terjadi dan dibiarkan maka dapat menjadi masalah yang serius. Gangguan yang umum terjadi berupa mual, nyeri punggung, serta konstipasi. Tapi ada juga gangguan kehamilan yang perlu diwaspadai, diantaranya :\r\n<br>\r\n<br>\r\n1. Hiperemesis Gravidarum\r\n<br>\r\nHiperemesis Gravidarum merupakan gangguan kehamilan pada trimester pertama yang harus diwaspadai. Kondisi ini akan menyebabkan ibu hamil mengalami mual dan muntah yang tidak wajar dan tidak terkendalikan. Mual dan muntah terjadi terus menerus hingga menyebabkan ibu hamil menjadi lemas, kehilangan nafsu makan, bahkan terkadang menyebabkan tidak bisa makan dan minum sama sekali. Hal tersebut dapat menyebabkan dehidrasi hingga kekurangan nutrisi yang sangan beresiko terhadap ibu hamil dan janin yang dikandung.\r\n<br>\r\n<br>\r\n2. Anemia\r\n<br>\r\nAnemia adalah kondisi saat tubuh kekurangan zat besi dan sel darah merah, sel darah merah berfungsi untuk menyalurkan oksigen ke seluruh tubuh. Jika kondisi ini terjadi maka suplai oksigen ke seluruh tubuh akan berkurang sehingga menyebabkan ancaman terhadap janin dan ibu hamil akan mengalami gejala mudah lelah. Anemia umumnya terjadi karena saat kehamilan volume darah akan meningkat. Untuk itu ibu hamil perlu diresepkan suplemen penambah darah untuk meminimalisir terjadinya anemia. Pada saat hamil seorang wanita akan lebih berisiko terkena anemia karena kebutuhan jumlah darah untuk membantu memberikan nutrisi bagi bayi. Beberapa jenis anemia dapat berkembang selama kehamilan termasuk pada anemia defisiensi besi, anemia defisiensi folat, dan kekurangan vitamin B12. Anemia defisiensi besi yang parah atau tidak diobati selama kehamilan dapat meningkatkan risiko mengalami bayi prematur atau berat badan lahir rendah, kehilangan banyak darah saat persalinan, depresi pascapersalinan, bayi dengan anemia dan anak dengan keterlambatan perkembangan.\r\n<br>\r\n<br>\r\n3. Infeksi Saluran Kemih\r\n<br>\r\nInfeksi Saluran Kemih (ISK) dapat menyerang ibu hamil karena selama masa kehamilan frekuensi buang air kecil akan meningkat. Hal ini disebabkan karena janin yang tumbuh dapat memberikan tekanan pada kandung kemih dan saluran kencing, kondisi tersebut menjebak bakteri atau menyebabkan urin bocor. Pada usia kehamilan enam minggu hampir semua wanita hamil mengalami dilatasi ureter. Kondisi ini terjadi ketika uretra mengembang dan terus mengembang sampai melahirkan. Saluran kemih yang lebih besar, seiring dengan peningkatan volume kandung kemih dan penurunan tonus kandung kemih, semuanya menyebabkan urin tertahan di uretra, hal ini memungkinkan bakteri untuk tumbuh. Pada kondisi yang lebih buruk lagi, urin wanita hamil menjadi lebih terkonsentrasi dalam jenis hormon dan gula, hal ini dapat mendorong pertumbuhan bakteri dan menurunkan kemampuan tubuh melawan bakteri jahat yang mencoba masuk. ISK dapat menyebabkan beberapa kondisi seperti pecah ketuban dini, kelahiran prematur, serta infeksi pada janin. Gejala yang akan dirasakan yaitu demam, kelelahan, nyeri saat berkemih, mual, sakit punggung, sering buang air kecil, serta urin yang berwarna kemerahan. Namun harus diwaspadai karena pada beberapa kasus ibu hamil tidak merasakan gejala apapun saat terjangkit ISK. Oleh karena itu, perlu melakukan tes urin di awal kehamilan untuk mengetahui seberapa besar risiko ISK selama masa kehamilan.\r\n<br>\r\n<br>\r\n4. Plasenta Previa\r\n<br>\r\nPlasenta Previa terjadi ketika plasenta terletak di bagian bawah rahim hingga sebagian atau seluruhnya menutupi serviks dan dapat menyebabkan perdarahan hebat pada ibu hamil. Cara mengatasi kondisi ini, ibu hamil perlu bedrest total dan mendapat pemantauan dari tenaga medis. Jika ibu hamil mengalami plasenta previa total hingga waktu melahirkan tiba, maka operasi caesar akan dilakukan. Plasenta Previa terjadi pada 1 dari 200 persalinan, Wanita yang memiliki plasenta previa harus melahirkan melalui operasi caesar. Pendarahan vagina merah cerah tanpa rasa sakit selama paruh kedua kehamilan adalah tanda utama plasenta previa, beberapa wanita juga mengalami kontraksi. Penyebab pasti dari plasenta previa tidak diketahui namun ada beberapa faktor pemicu misalnya memiliki bekas luka di rahim, kelahiran sesar sebelumnya, pengangkatan fibroid rahim, kuretase, mengandung lebih dari satu janin, berusia 35 tahun atau lebih, merokok, dan menggunakan kokain.\r\n<br>\r\n<br>\r\n5. Perdarahan\r\n<br>\r\nPerdarahan ringan atau flek di awal kehamilan diderita oleh beberapa ibu hamil, hal ini termasuk normal terjadi dan tidak membutuhkan perawatan medis. Namun ibu hamil harus waspada jika selama kehamilan mengalami perdarahan disertai dengan kram, nyeri perut hebat, hingga pingsan. Kondisi tersebut dapat menjadi pertanda kehamilan ektopik atau hamil di luar kandungan yang mengancam jiwa.\r\n<br>\r\n<br>\r\n6. Infeksi\r\n<br>\r\nInfeksi ringan seperti batuk pilek tergolong aman untuk ibu hamil, tapi ada beberapa jenis infeksi yang berbahaya bahkan mengancam nyawa ibu dan janin. Beberapa infeksi kehamilan yang perlu diwaspadai misalnya toksoplasmosis yaitu infeksi parasit pada bayi yang ditularkan oleh ibu akibat kontak dengan hewan peliharaan yangg menyebabkan bayi lahir cacat dengan gangguan penglihatan dan pendengaran serta gangguan lain, bacterial vaginosis yaitu infeksi vagina yang menyebabkan bayi lahir prematur dan berat badan bayi rendah, grup B steps yaitu infeksi bakteri pada jalan lahir yang menyebabkan kematian bayi jika melewatinya, cytomegalovirus yaitu infeksi parasit yang menular dari ibu ke bayi dan menyebabkan gangguan penglihatan pada bayi.\r\n<br>\r\n<br>\r\n7. Diabetes Gestasional\r\n<br>\r\nKondisi saat terjadi peningkatan gula darah pada ibu hamil, umumnya dialami oleh ibu hamil yang memiliki riwayat diabetes dari keluarga. Diabetes Gestasional tidak menimbulkan gejala, sehingga ibu hamil perlu melakukan cek gula darah pada trimester kedua kehamilan. Bila dari hasil pengecekan hasil gula darah tinggi, maka akan dilakukan glucose tolerance test pada kehamilan 24 hingga 28 minggu. Diabetes gestasional perlu segera ditangani karena dapat menyebabkan risiko bayi mengidap diabetes, kelebihan berat badan pada bayi, penyakit kuning, sindrom gangguan pernapasan, kadar mineral rendah dalam darah, dan hipoglikemia serta komplikasi kehamilan. \r\n<br>\r\n<br>\r\n8. Preeklamsia\r\n<br>\r\nPreeklamsia adalah komplikasi kehamilan yang ditandai dengan gejala tekanan darah tinggi serta protein positif pada urin, preeklamsia dapat menyebabkan pembuluh darah menyempit hingga mengganggu kinerja ginjal, hati, dan otak. Kondisi ini dapat mengancam nyawa ibu dan bayi dan belum diketahui penyebabnya. Dalam kasus yang serius, gejalanya mungkin termasuk sakit kepala parah, kabur atau hilangnya penglihatan sementara, sakit perut bagian atas, mual dan muntah, penurunan output urin, kenaikan berat badan mendadak, dan bengkak di wajah dan tangan. Preeklampsia dapat menyebabkan komplikasi serius pada ibu dan bayi, beberapa komplikasi termasuk pertumbuhan lambat, berat badan lahir rendah, kelahiran prematur, kesulitan bernafas untuk bayi, solusio plasenta, dan eklampsia. Eklampsia terjadi ketika preeklamsia berkembang dan menyerang sistem saraf pusat, menyebabkan kejang. Jika preeklamsia berat terjadi, maka dokter akan melakukan operasi segera untuk menyelamatkan nyawa ibu dan bayi. \r\n<br>\r\n<br>\r\n9. Oligohidramnion (Cairan Ketuban Terlalu Sedikit)\r\n<br>\r\nKantung ketuban dipenuhi cairan yang melindungi dan mendukung bayi yang sedang berkembang, saat cairan ketuban terlalu sedikit maka kondisi ini disebut oligohidramnion. Komplikasi oligohidramnion meliputi keguguran, pematangan paru yang terlambat atau tidak lengkap, lahir sesar, dan cacat lahir.\r\n<br>\r\n<br>\r\nSumber :\r\n<br>\r\nhttps://www.morulaivf.co.id/tanda-dan-gejala-gangguan-kehamilan-yang-perlu-diwaspadai/\r\n<br>\r\nhttps://hot.liputan6.com/read/4082168/6-gangguan-kehamilan-yang-bisa-berakibat-fatal-jangan-abaikan', 'GAMBAR ARTIKEL \n4.jpg');
INSERT INTO `artikel` VALUES ('A0005', 'Nur Rizky Aulia', 'Penyebab, Jenis dan Pengobatan Kista', 'Kista merupakan benjolan tertutup, biasanya berisi cairan, udara, nanah, atau zat padat seperti rambut, yang dapat tumbuh hampir di bagian tubuh mana saja atau di bawah kulit.', 'Kista merupakan benjolan tertutup, biasanya berisi cairan, udara, nanah, atau zat padat seperti rambut, yang dapat tumbuh hampir di bagian tubuh mana saja atau di bawah kulit. Benjolan tersebut memiliki ukuran yang bervariasi, dari mikroskopis hingga sangat besar, umumnya kista bersifat jinak namun beberapa kista dapat menjadi kanker atau prakanker. Kista umumnya tumbuh di bawah kulit, namun kista juga dapat tumbuh di organ dalam tubuh, seperti indung telur (ovarium). Kista biasanya akan membesar dengan lambat dan umumnya tidak menimbulkan nyeri. Namun, nyeri dapat timbul jika kista membesar dan menekan organ, pecah, terinfeksi, atau tumbuh di daerah yang sensitif.\r\n<br>\r\n<br>\r\nPenyebab Kista\r\n<br>\r\nKista umumnya disebabkan oleh infeksi, kelenjar sebasea (kelenjar penghasil sebum atau minyak) yang tersumbat, peradangan yang terjadi dalam jangka panjang (kronis), penyakit bawaan lahir atau tindikan. Kista akan menyebabkan rasa sakit jika pecah, terinfeksi, atau meradang. Ada beberapa penyebab kista yaitu tumor, kondisi genetik, cacat pada sel, kondisi peradangan kronis, penyumbatan saluran dalam tubuh yang menyebabkan cairan menumpuk, parasit, cedera yang merusak pembuluh.\r\n<br>\r\n<br>\r\nGejala Kista\r\n<br>\r\nKista saat berukuran kecil umumnya tidak memiliki gejala, jika kista menjadi besar, memindahkan atau menekan organ lain, atau menghalangi aliran cairan normal di jaringan seperti hati, pankreas, atau organ lain maka rasa sakit atau gejala lain yang terkait dengan organ tersebut dapat berkembang. Kista juga dapat menimbulkan gejala kemerahan di kulit sekitar area kista, keluar darah atau nanah yang berbau tidak sedap dari benjolan, nyeri akibat infeksi pada kista, kaku atau kesemutan, terutama di bagian tubuh yang ditumbuhi kista.\r\n<br>\r\n<br>\r\nFaktor Risiko Kista\r\n<br>\r\nBeberapa faktor yang dapat meningkatkan risiko tumbuhnya kista, yaitu :\r\n<br>\r\n1. Memiliki keluarga yang menderita kista\r\n<br>\r\n2. Mengalami cedera atau kelainan pada organ tubuh tertentu\r\n<br>\r\n3. Menderita infeksi\r\n<br>\r\n4. Menderita tumor atau kanker\r\n<br>\r\n5. Mengalami penyumbatan pada saluran dalam tubuh\r\n<br>\r\n<br>\r\nJenis Kista\r\n<br>\r\nAda ratusan jenis kista yang berbeda, berikut ini beberapa jenis kista yang umum diderita yaitu :\r\n<br>\r\n1. Kista Epidermoid, merupakan benjolan kecil jinak yang diisi dengan protein keratin yang berkembang ketika lapisan atas kulit, yang disebut epidermis, tumbuh lebih dalam dari pada bergerak ke luar menuju permukaan untuk akhirnya terlepas.\r\n<br>\r\n2. Kista Sebaceous, merupakan benjolan berisi sebum dan sering terbentuk di dalam kelenjar sebasea yang merupakan bagian dari folikel kulit dan rambut yang menghasilkan minyak.\r\n<br>\r\n3. Kista Payudara, merupakan kondisi cairan yang terkumpul di dekat kelenjar payudara dan dapat menyebabkan rasa sakit atau nyeri tekan di daerah yang terdampak.\r\n<br>\r\n4. Kista Ovarium, merupakan benjolan yang terbentuk ketika folikel yang biasanya melepaskan sel telur tidak terbuka, menyebabkan cairan menumpuk dan membentuk kista.\r\n<br>\r\n5. Kista Ganglion, merupakan benjolan yang terbentuk di dekat area sendi pergelangan tangan atau tangan dan juga dapat berkembang di area kaki atau pergelangan kaki.\r\n<br>\r\n6. Jerawat Kistik, merupakan jenis jerawat yang paling parah ini adalah hasil dari kombinasi bakteri, minyak, dan kulit mati yang menyumbat pori-pori, biasanya terlihat seperti bisul besar berisi nanah.\r\n<br>\r\n7. Kista Pilar, merupakan jenis kista non-kanker yang tidak nyaman ini adalah benjolan jinak berwarna kulit yang terbentuk di permukaan kulit.\r\n<br>\r\n8. Kista Pilonidal, merupakan kista yang terbentuk di dekat bagian atas bokong biasanya dipenuhi dengan kotoran kulit, minyak tubuh, dan rambut.\r\n<br>\r\n9. Kista Baker, merupakan benjolan berisi cairan yang terbentuk di belakang lutut akibat radang sendi atau cedera lutut, dapat menimbulkan pembengkakan dan nyeri saat menekuk atau meluruskan kaki dan dapat menyebabkan gerakan penderitanya menjadi terbatas.\r\n<br>\r\n10. Kista Celah Brankial, merupakan penyakit bawaan lahir yang ditandai dengan kemunculan benjolan pada salah satu atau kedua sisi leher. Benjolan juga dapat tumbuh di bawah tulang selangka. Kondisi ini terjadi pada minggu kelima perkembangan janin.\r\n<br>\r\n11. Kista Aterom, merupakan benjolan berisi cairan yang muncul di wajah, leher, dada, atau punggung. Benjolan tumbuh perlahan dan bersifat jinak, tetapi bisa menimbulkan nyeri bila membesar.\r\n<br>\r\n12. Kista Epidermoid merupakan benjolan yang dapat tumbuh di kepala, leher, wajah, atau punggung. Kista ini ditandai dengan benjolan kecil, keras, berwarna kuning kecoklatan, dan berisi cairan kental berbau, disebabkan oleh penumpukan protein pembentuk rambut, kulit, dan kuku (keratin), di bawah kulit.\r\n<br>\r\n<br>\r\nPengobatan Kista\r\n<br>\r\nDala beberapa kasus kista dapat membaik dengan sendirinya, dengan meletakan kompres hangat di atas kista juga dapat mempercepat penyembuhan. Namun kista yang semakin parah memerlukan perawatan medis. Beberapa cara umum perawatan medis yaitu menggunakan jarum untuk mengalirkan cairan dan bahan lain dalam kista, memberikan obat untuk mengurangi peradangan, atau melakukan operasi pengangkatan kista.\r\n<br>\r\n<br>\r\nPencegahan Kista\r\n<br>\r\nKista umumnya tidak dapat dicegah, namun untuk kaum yang rentan terhadap kista ovarium dapat mencegah pembentukan kista baru dengan menggunakan kontrasepsi hormona, kista pilonidal juga dapat dicegah dari pembentukan dengan menjaga kulit di daerah yang terkena bersih dan kering dan sering berdiri dibanding duduk dalam waktu lama juga dapat membantu mencegah kista ini, kalazion dapat dicegah dengan membersihkan kelopak mata menggunakan pembersih yang lembut, terutama setelah menggunakan kosmetik.\r\n<br>\r\n<br>\r\nSumber :\r\n<br>\r\nhttps://health.detik.com/berita-detikhealth/d-6112016/kista-itu-apa-sih-kenali-penyebab-jenis-serta-pengobatannya/2\r\n<br>\r\nhttps://www.alodokter.com/kista', 'GAMBAR ARTIKEL 5.jpeg');

-- ----------------------------
-- Table structure for data_pakar
-- ----------------------------
DROP TABLE IF EXISTS `data_pakar`;
CREATE TABLE `data_pakar`  (
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pertanyaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jawaban` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_pakar
-- ----------------------------
INSERT INTO `data_pakar` VALUES ('lahargo', 'e10adc3949ba59abbe56e057f20f883e', 'Apa Makanan Favorit Anda?', 'bb9f601ba081ab8d336a14a697048cb0');
INSERT INTO `data_pakar` VALUES ('adminn', 'd638d193eb29ac87c0950ab36b80e0e8', 'Apa Makanan Favorit Anda?', 'd9c84901c7cdbfddbc3b75af86ba1701');
INSERT INTO `data_pakar` VALUES ('jesreel', 'e10adc3949ba59abbe56e057f20f883e', 'Apa Buku Favorit Anda?', 'd638d193eb29ac87c0950ab36b80e0e8');

-- ----------------------------
-- Table structure for data_user
-- ----------------------------
DROP TABLE IF EXISTS `data_user`;
CREATE TABLE `data_user`  (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usia` int(2) NOT NULL,
  `jenis_kelamin` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pertanyaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jawaban` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hak_akses` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_user
-- ----------------------------
INSERT INTO `data_user` VALUES ('Jesss', 'e10adc3949ba59abbe56e057f20f883e', 'jesreel', 123, 'L', 'Bogor', 'Apa Makanan Favorit Anda?', '575d7351946e7bd7ded33f4e33f4ad24', 'user');
INSERT INTO `data_user` VALUES ('Testing', 'e10adc3949ba59abbe56e057f20f883e', 'Pengujian Internal', 99, 'L', 'Gunadarma', 'Apa Makanan Favorit Anda?', '62d08f70f89c457c93d4fd287a6f98e8', 'pakar');
INSERT INTO `data_user` VALUES ('daffa', '107daf1e8302be41388bb96c1f17ada2', 'Daffa Reyhan Arsyad', 16, 'L', 'Jakarta Selatan', 'Apa Buku Favorit Anda?', 'd638d193eb29ac87c0950ab36b80e0e8', 'pakar');
INSERT INTO `data_user` VALUES ('muhamadhafidz', '5f4dcc3b5aa765d61d8327deb882cf99', 'nur hafidz n', 15, 'L', 'Tangerang Banten', 'Apa Makanan Favorit Anda?', '099b3b060154898840f0ebdfb46ec78f', 'user');
INSERT INTO `data_user` VALUES ('aulia_user', '202bf71a9abe9735235a85009175387c', 'Aulia User', 26, 'P', 'Bekasi', 'Apa Makanan Favorit Anda?', '4fd7a491448a4a85c6ba39ef8afbb42f', 'user');
INSERT INTO `data_user` VALUES ('aulia_pakar', '00487a6dacf727a74263153272eec9a0', 'Aulia Pakar', 25, 'P', 'Jakarta', 'Apa Makanan Favorit Anda?', '4fd7a491448a4a85c6ba39ef8afbb42f', 'pakar');
INSERT INTO `data_user` VALUES ('aulia', '28a15217d3d4cc056c14ec07d59c9fe3', 'Aulia', 26, 'P', 'Bekasi', 'Apa Makanan Favorit Anda?', '4fd7a491448a4a85c6ba39ef8afbb42f', 'user');
INSERT INTO `data_user` VALUES ('aulia_testing', '1209ee57c53e6e5f4c76772b4a441afd', 'Aulia Testing', 26, 'P', 'Bekasi', 'Apa Makanan Favorit Anda?', '4fd7a491448a4a85c6ba39ef8afbb42f', 'user');
INSERT INTO `data_user` VALUES ('admin', 'd829b843a6550a947e82f2f38ed6b7a7', 'Admin', 26, 'P', 'Jakarta', 'Apa Makanan Favorit Anda?', '4fd7a491448a4a85c6ba39ef8afbb42f', 'admin');

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `kode_gejala` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_gejala` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode_gejala`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES ('G0025', 'Lemas');
INSERT INTO `gejala` VALUES ('G0026', 'Sesak');
INSERT INTO `gejala` VALUES ('G0027', 'Perdarahan Pervaginam (Diluar Masa Haid, Setelah Berhubungan Seksual Atau Setelah Menopause)');
INSERT INTO `gejala` VALUES ('G0024', 'Nyeri Saat Haid, Setelah Berhubungan Seksual Atau Saat Terjadi Penekanan Pada Panggul');
INSERT INTO `gejala` VALUES ('G0023', 'Teraba Benjolan Di Vagina');
INSERT INTO `gejala` VALUES ('G0022', 'Nyeri Perut Dengan Intensitas Ringan-Sedang');
INSERT INTO `gejala` VALUES ('G0021', 'Teraba Benjolan Pada Bagian Perut');
INSERT INTO `gejala` VALUES ('G0020', 'Perut Terasa Penuh Dan Membesar');
INSERT INTO `gejala` VALUES ('G0019', 'Mual Dan Muntah');
INSERT INTO `gejala` VALUES ('G0018', 'Nyeri Ketika Buang Air Kecil');
INSERT INTO `gejala` VALUES ('G0017', 'Mudah Merasa Lelah Atau Tidak Enak Badan');
INSERT INTO `gejala` VALUES ('G0016', 'Riwayat Berhubungan Seksual');
INSERT INTO `gejala` VALUES ('G0015', 'Nyeri Panggul Atau Perut Bagian Bawah');
INSERT INTO `gejala` VALUES ('G0014', 'Keputihan Berbau Tidak Sedap');
INSERT INTO `gejala` VALUES ('G0012', 'Haid Dalam Jumlah Banyak');
INSERT INTO `gejala` VALUES ('G0013', 'Demam');
INSERT INTO `gejala` VALUES ('G0011', 'Keluhan Infertilitas Atau Sulit Mendapatkan Keturunan');
INSERT INTO `gejala` VALUES ('G0010', 'Dispareunia (Nyeri Sebelum, Selama Atau Sesudah Berhubungan Seksual)');
INSERT INTO `gejala` VALUES ('G0009', 'Nyeri Selama Masa Haid Terasa Sangat Menyakitkan');
INSERT INTO `gejala` VALUES ('G0008', 'Sering Buang Air Kecil');
INSERT INTO `gejala` VALUES ('G0007', 'Sulit Buang Air Besar');
INSERT INTO `gejala` VALUES ('G0006', 'Merasa Sangat Kenyang Walau Hanya Makan Sedikit Atau Perut Terasa Kembung');
INSERT INTO `gejala` VALUES ('G0005', 'Memiliki Riwayat Keluarga Mengidap Penyakit Kista');
INSERT INTO `gejala` VALUES ('G0003', 'Haid Tidak Teratur');
INSERT INTO `gejala` VALUES ('G0004', 'Teraba Benjolan Pada Bagian Perut Bawah');
INSERT INTO `gejala` VALUES ('G0002', 'Nyeri Perut Bagian Kiri Atau Kanan Bawah (Panggul)');
INSERT INTO `gejala` VALUES ('G0001', 'Nyeri Secara Tiba-Tiba Pada Area Panggul');
INSERT INTO `gejala` VALUES ('G0028', 'Memiliki Riwayat Keluarga Mengidap Kanker Serviks');
INSERT INTO `gejala` VALUES ('G0029', 'Kehilangan Nafsu Makan');
INSERT INTO `gejala` VALUES ('G0030', 'Sulit Buang Air Kecil');
INSERT INTO `gejala` VALUES ('G0031', 'Perdarahan Setelah Melakukan Hubungan Seksual');
INSERT INTO `gejala` VALUES ('G0032', 'Perdarahan Pascamenopause');
INSERT INTO `gejala` VALUES ('G0033', 'Perdarahan Diantara Waktu Haid');
INSERT INTO `gejala` VALUES ('G0034', 'Teraba Benjolan Di Vagina Yang Tidak Terasa Sakit Dan Benjolan Semakin Terasa Bila Batuk Atau Mengedan');
INSERT INTO `gejala` VALUES ('G0035', 'Terasa Pegal Di Panggul, Perut Dan Punggung Bagian Bawah');
INSERT INTO `gejala` VALUES ('G0036', 'Perasaan Berat Atau Tekanan Di Panggul');
INSERT INTO `gejala` VALUES ('G0037', 'Merasa Ada Sesuatu Yang Mengganjal Saat Duduk');
INSERT INTO `gejala` VALUES ('G0038', 'Benjolan Di Sisi Bibir Vagina, Kemerahan Dan Terasa Nyeri');
INSERT INTO `gejala` VALUES ('G0039', 'Kemerahan Dan Nyeri Disekitar Vagina');
INSERT INTO `gejala` VALUES ('G0040', 'Flek Atau Perdarahan Dari Vagina Setelah Berhubungan Seksual Dan Terasa Perih');
INSERT INTO `gejala` VALUES ('G0041', 'Gatal Di Area Vagina Atau Disekitarnya');
INSERT INTO `gejala` VALUES ('G0042', 'Riwayat Penggunaan Sabun Pembersih Vagina');
INSERT INTO `gejala` VALUES ('G0043', 'Telat Haid');
INSERT INTO `gejala` VALUES ('G0044', 'Flek Atau Perdarahan Dari Vagina');
INSERT INTO `gejala` VALUES ('G0045', 'Mual Dan Muntah Berlebihan');
INSERT INTO `gejala` VALUES ('G0046', 'Terkadang Keluar Jaringan Berbentuk Bulat-Bulat Kecil Seperti Anggur');
INSERT INTO `gejala` VALUES ('G0047', 'Nyeri Perut Hebat Atau Dengan Intensitas Berat');
INSERT INTO `gejala` VALUES ('G0048', 'Hubungan Seksual Dengan Nyeri Berlebihan');
INSERT INTO `gejala` VALUES ('G0049', 'Kesulitan Atau Bahkan Tidak Bisa Melakukan Penetrasi');
INSERT INTO `gejala` VALUES ('G0050', 'Ketakutan Melakukan Hubungan Seksual');
INSERT INTO `gejala` VALUES ('G0051', 'Penurunan Hasrat Seksual Terkait Penetrasi');
INSERT INTO `gejala` VALUES ('G0052', 'Perut Terasa Membesar');
INSERT INTO `gejala` VALUES ('G0053', 'Penurunan Berat Badan Drastis');
INSERT INTO `gejala` VALUES ('G0054', 'Memiliki Riwayat Keluarga Mengidap Penyakit Kanker Ovarium/Payudara');
INSERT INTO `gejala` VALUES ('G0055', 'Jarang Haid');
INSERT INTO `gejala` VALUES ('G0056', 'Pertumbuhan Bulu Berlebih Di Punggung, Pundak, Perut, Kaki, Kumis');
INSERT INTO `gejala` VALUES ('G0057', 'Jerawat Berlebihan');
INSERT INTO `gejala` VALUES ('G0058', 'Kebotakan');
INSERT INTO `gejala` VALUES ('G0059', 'Tampak Garis-Garis Kehitaman Di Belakang Leher');
INSERT INTO `gejala` VALUES ('G0060', 'Nyeri Perut Bagian Bawah Dengan Intensitas Sedang-Berat');
INSERT INTO `gejala` VALUES ('G0061', 'Keputihan Berlangsung Lama Dan Berbau');

-- ----------------------------
-- Table structure for hasil_diagnosa
-- ----------------------------
DROP TABLE IF EXISTS `hasil_diagnosa`;
CREATE TABLE `hasil_diagnosa`  (
  `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_penyakit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_diagnosa` date NOT NULL,
  `persentase` float NOT NULL,
  PRIMARY KEY (`id_diagnosa`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 175 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil_diagnosa
-- ----------------------------
INSERT INTO `hasil_diagnosa` VALUES (28, 'muhamadhafidz', '', '2022-07-27', 0);
INSERT INTO `hasil_diagnosa` VALUES (29, 'muhamadhafidz', 'P0001', '2022-07-28', 90);
INSERT INTO `hasil_diagnosa` VALUES (30, 'muhamadhafidz', '', '2022-07-28', 0);
INSERT INTO `hasil_diagnosa` VALUES (31, 'muhamadhafidz', 'P0001', '2022-07-28', 80);
INSERT INTO `hasil_diagnosa` VALUES (32, 'muhamadhafidz', 'P0001', '2022-07-28', 80);
INSERT INTO `hasil_diagnosa` VALUES (33, 'muhamadhafidz', 'P0001', '2022-07-28', 80);
INSERT INTO `hasil_diagnosa` VALUES (34, 'muhamadhafidz', 'P0001', '2022-07-28', 80);
INSERT INTO `hasil_diagnosa` VALUES (35, 'muhamadhafidz', 'P0001', '2022-07-28', 60);
INSERT INTO `hasil_diagnosa` VALUES (36, 'muhamadhafidz', 'P0001', '2022-07-28', 60);
INSERT INTO `hasil_diagnosa` VALUES (37, 'muhamadhafidz', 'P0001', '2022-07-28', 30);
INSERT INTO `hasil_diagnosa` VALUES (38, 'muhamadhafidz', 'P0001', '2022-07-28', 30);
INSERT INTO `hasil_diagnosa` VALUES (39, 'muhamadhafidz', 'P0002', '2022-07-28', 90);
INSERT INTO `hasil_diagnosa` VALUES (40, 'muhamadhafidz', '', '2022-07-28', 0);
INSERT INTO `hasil_diagnosa` VALUES (41, 'muhamadhafidz', 'P0002', '2022-07-28', 50);
INSERT INTO `hasil_diagnosa` VALUES (42, 'muhamadhafidz', '', '2022-07-28', 0);
INSERT INTO `hasil_diagnosa` VALUES (43, 'muhamadhafidz', 'P0002', '2022-07-28', 35);
INSERT INTO `hasil_diagnosa` VALUES (44, 'daffa', 'P0001', '2022-08-02', 70);
INSERT INTO `hasil_diagnosa` VALUES (45, 'muhamadhafidz', '', '2022-08-07', 0);
INSERT INTO `hasil_diagnosa` VALUES (46, 'muhamadhafidz', 'P0001', '2022-08-07', 80);
INSERT INTO `hasil_diagnosa` VALUES (47, 'muhamadhafidz', 'P0001', '2022-08-07', 80);
INSERT INTO `hasil_diagnosa` VALUES (48, 'muhamadhafidz', 'P0001', '2022-08-07', 70);
INSERT INTO `hasil_diagnosa` VALUES (49, 'Jesss', '', '2022-08-13', 0);
INSERT INTO `hasil_diagnosa` VALUES (50, 'Jesss', '', '2022-08-13', 0);
INSERT INTO `hasil_diagnosa` VALUES (51, 'Jesss', 'P0003', '2022-08-13', 78);
INSERT INTO `hasil_diagnosa` VALUES (52, 'Jesss', 'P0002', '2022-08-13', 100);
INSERT INTO `hasil_diagnosa` VALUES (53, 'Jesss', 'P0010', '2022-08-15', 40);
INSERT INTO `hasil_diagnosa` VALUES (54, 'Jesss', 'P0005', '2022-08-15', 30);
INSERT INTO `hasil_diagnosa` VALUES (55, 'Jesss', 'P0003', '2022-08-15', 32);
INSERT INTO `hasil_diagnosa` VALUES (56, 'Jesss', 'P0003', '2022-08-15', 32);
INSERT INTO `hasil_diagnosa` VALUES (57, 'Jesss', '', '2022-08-15', 0);
INSERT INTO `hasil_diagnosa` VALUES (58, 'Jesss', 'P0009', '2022-08-15', 40);
INSERT INTO `hasil_diagnosa` VALUES (59, 'aulia_user', '', '2022-08-16', 0);
INSERT INTO `hasil_diagnosa` VALUES (60, 'aulia_user', 'P0001', '2022-08-16', 78);
INSERT INTO `hasil_diagnosa` VALUES (61, 'aulia_user', 'P0001', '2022-08-16', 59);
INSERT INTO `hasil_diagnosa` VALUES (62, 'aulia_user', 'P0002', '2022-08-16', 50);
INSERT INTO `hasil_diagnosa` VALUES (63, 'aulia_user', '', '2022-08-16', 0);
INSERT INTO `hasil_diagnosa` VALUES (64, 'aulia_user', 'P0001', '2022-08-29', 78);
INSERT INTO `hasil_diagnosa` VALUES (65, 'aulia_user', 'P0001', '2022-08-29', 27);
INSERT INTO `hasil_diagnosa` VALUES (66, 'aulia_user', 'P0001', '2022-08-29', 39);
INSERT INTO `hasil_diagnosa` VALUES (67, 'aulia_user', 'P0001', '2022-08-29', 49);
INSERT INTO `hasil_diagnosa` VALUES (68, 'aulia_user', 'P0001', '2022-08-29', 49);
INSERT INTO `hasil_diagnosa` VALUES (69, 'aulia_user', 'P0001', '2022-08-29', 17);
INSERT INTO `hasil_diagnosa` VALUES (70, 'aulia_user', '', '2022-08-29', 0);
INSERT INTO `hasil_diagnosa` VALUES (71, 'aulia_user', 'P0001', '2022-08-29', 49);
INSERT INTO `hasil_diagnosa` VALUES (72, 'aulia_user', '', '2022-08-29', 0);
INSERT INTO `hasil_diagnosa` VALUES (73, 'aulia_user', 'P0001', '2022-09-01', 66);
INSERT INTO `hasil_diagnosa` VALUES (74, 'aulia_user', 'P0003', '2022-09-01', 36);
INSERT INTO `hasil_diagnosa` VALUES (75, 'aulia_user', 'P0002', '2022-09-01', 60);
INSERT INTO `hasil_diagnosa` VALUES (76, 'aulia_user', 'P0003', '2022-09-01', 15);
INSERT INTO `hasil_diagnosa` VALUES (77, 'aulia_user', '', '2022-09-01', 0);
INSERT INTO `hasil_diagnosa` VALUES (78, 'aulia_user', 'P0002', '2022-09-01', 60);
INSERT INTO `hasil_diagnosa` VALUES (79, 'aulia_user', 'P0003', '2022-09-01', 19);
INSERT INTO `hasil_diagnosa` VALUES (80, 'aulia_user', 'P0003', '2022-09-01', 19);
INSERT INTO `hasil_diagnosa` VALUES (81, 'aulia_user', '', '2022-09-01', 0);
INSERT INTO `hasil_diagnosa` VALUES (82, 'aulia_user', 'P0003', '2022-09-01', 19);
INSERT INTO `hasil_diagnosa` VALUES (83, 'aulia_user', 'P0003', '2022-09-01', 19);
INSERT INTO `hasil_diagnosa` VALUES (84, 'aulia_user', '', '2022-09-01', 0);
INSERT INTO `hasil_diagnosa` VALUES (85, 'aulia_user', 'P0001', '2022-09-01', 44);
INSERT INTO `hasil_diagnosa` VALUES (86, 'aulia_user', 'P0003', '2022-09-01', 19);
INSERT INTO `hasil_diagnosa` VALUES (87, 'aulia_user', '', '2022-09-01', 0);
INSERT INTO `hasil_diagnosa` VALUES (88, 'aulia_user', 'P0001', '2022-09-01', 66);
INSERT INTO `hasil_diagnosa` VALUES (89, 'aulia_user', 'P0001', '2022-09-01', 17);
INSERT INTO `hasil_diagnosa` VALUES (90, 'aulia_user', '', '2022-09-04', 0);
INSERT INTO `hasil_diagnosa` VALUES (91, 'aulia_user', '', '2022-09-04', 0);
INSERT INTO `hasil_diagnosa` VALUES (92, 'aulia_user', '', '2022-09-04', 0);
INSERT INTO `hasil_diagnosa` VALUES (93, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (95, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (94, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (96, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (97, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (98, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (99, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (100, 'aulia_user', 'P0001', '2022-09-04', 44);
INSERT INTO `hasil_diagnosa` VALUES (101, 'aulia_user', 'P0001', '2022-09-05', 44);
INSERT INTO `hasil_diagnosa` VALUES (102, 'aulia_user', 'P0001', '2022-09-05', 44);
INSERT INTO `hasil_diagnosa` VALUES (103, 'aulia_user', 'P0001', '2022-09-05', 49);
INSERT INTO `hasil_diagnosa` VALUES (104, 'aulia_user', 'P0010', '2022-09-05', 22);
INSERT INTO `hasil_diagnosa` VALUES (105, 'aulia_user', 'P0001', '2022-09-05', 32);
INSERT INTO `hasil_diagnosa` VALUES (106, 'aulia_user', 'P0001', '2022-09-05', 17);
INSERT INTO `hasil_diagnosa` VALUES (107, 'aulia_user', 'P0001', '2022-09-05', 44);
INSERT INTO `hasil_diagnosa` VALUES (108, 'aulia_user', 'P0001', '2022-09-10', 49);
INSERT INTO `hasil_diagnosa` VALUES (109, 'aulia_user', 'P0001', '2022-09-10', 54);
INSERT INTO `hasil_diagnosa` VALUES (110, 'aulia_user', 'P0001', '2022-09-11', 0);
INSERT INTO `hasil_diagnosa` VALUES (111, 'aulia_user', 'P0003', '2022-09-12', 11);
INSERT INTO `hasil_diagnosa` VALUES (112, 'aulia_user', 'P0003', '2022-09-12', 11.1111);
INSERT INTO `hasil_diagnosa` VALUES (113, 'aulia_user', 'P0003', '2022-09-12', 11.1111);
INSERT INTO `hasil_diagnosa` VALUES (114, 'aulia_user', 'P0003', '2022-09-12', 11.1111);
INSERT INTO `hasil_diagnosa` VALUES (115, 'aulia_user', 'P0002', '2022-09-12', 16.6667);
INSERT INTO `hasil_diagnosa` VALUES (119, 'aulia_user', '', '2022-09-18', 0);
INSERT INTO `hasil_diagnosa` VALUES (118, 'aulia_user', 'P0002', '2022-09-15', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (116, 'aulia_user', 'P0019', '2022-09-14', 16.6667);
INSERT INTO `hasil_diagnosa` VALUES (117, 'aulia_user', 'P0009', '2022-09-14', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (120, 'aulia_user', 'P0001', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (121, 'aulia_user', 'P0002', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (122, 'aulia_user', 'P0003', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (123, 'aulia_user', 'P0004', '2022-09-18', 88.8889);
INSERT INTO `hasil_diagnosa` VALUES (124, 'aulia_user', 'P0004', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (125, 'aulia_user', 'P0005', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (126, 'aulia_user', 'P0006', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (127, 'aulia_user', 'P0007', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (128, 'aulia_user', 'P0008', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (129, 'aulia_user', 'P0009', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (130, 'aulia_user', 'P0010', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (131, 'aulia_user', 'P0011', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (132, 'aulia_user', 'P0012', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (133, 'aulia_user', 'P0013', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (134, 'aulia_user', 'P0014', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (135, 'aulia_user', 'P0015', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (136, 'aulia_user', 'P0016', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (137, 'aulia_user', 'P0017', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (138, 'aulia_user', 'P0001', '2022-09-18', 37.5);
INSERT INTO `hasil_diagnosa` VALUES (139, 'aulia_user', 'P0002', '2022-09-18', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (140, 'aulia_user', 'P0003', '2022-09-18', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (141, 'aulia_user', 'P0004', '2022-09-18', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (142, 'aulia_user', 'P0005', '2022-09-18', 44.4444);
INSERT INTO `hasil_diagnosa` VALUES (143, 'aulia_user', 'P0006', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (144, 'aulia_user', 'P0007', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (145, 'aulia_user', 'P0008', '2022-09-18', 50);
INSERT INTO `hasil_diagnosa` VALUES (146, 'aulia_user', 'P0003', '2022-09-18', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (147, 'aulia_user', 'P0009', '2022-09-18', 66.6667);
INSERT INTO `hasil_diagnosa` VALUES (148, 'aulia_user', 'P0010', '2022-09-18', 66.6667);
INSERT INTO `hasil_diagnosa` VALUES (149, 'aulia_user', 'P0011', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (150, 'aulia_user', 'P0013', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (151, 'aulia_user', 'P0012', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (152, 'aulia_user', 'P0013', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (153, 'aulia_user', 'P0014', '2022-09-18', 50);
INSERT INTO `hasil_diagnosa` VALUES (154, 'aulia_user', 'P0015', '2022-09-18', 33.3333);
INSERT INTO `hasil_diagnosa` VALUES (155, 'aulia_user', 'P0016', '2022-09-18', 50);
INSERT INTO `hasil_diagnosa` VALUES (156, 'aulia_user', 'P0017', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (157, 'aulia_user', 'P0002', '2022-09-18', 66.6667);
INSERT INTO `hasil_diagnosa` VALUES (158, 'aulia_user', 'P0004', '2022-09-18', 44.4444);
INSERT INTO `hasil_diagnosa` VALUES (159, 'aulia_user', 'P0006', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (160, 'aulia_user', 'P0008', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (161, 'aulia_user', 'P0010', '2022-09-18', 83.3333);
INSERT INTO `hasil_diagnosa` VALUES (162, 'aulia_user', 'P0012', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (163, 'aulia_user', 'P0014', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (164, 'aulia_user', 'P0016', '2022-09-18', 66.6667);
INSERT INTO `hasil_diagnosa` VALUES (165, 'aulia_user', 'P0001', '2022-09-18', 62.5);
INSERT INTO `hasil_diagnosa` VALUES (166, 'aulia_user', 'P0003', '2022-09-18', 55.5556);
INSERT INTO `hasil_diagnosa` VALUES (167, 'aulia_user', 'P0005', '2022-09-18', 77.7778);
INSERT INTO `hasil_diagnosa` VALUES (168, 'aulia_user', 'P0007', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (169, 'aulia_user', 'P0009', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (170, 'aulia_user', 'P0009', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (171, 'aulia_user', 'P0011', '2022-09-18', 75);
INSERT INTO `hasil_diagnosa` VALUES (172, 'aulia_user', 'P0015', '2022-09-18', 55.5556);
INSERT INTO `hasil_diagnosa` VALUES (173, 'aulia_user', 'P0017', '2022-09-18', 100);
INSERT INTO `hasil_diagnosa` VALUES (174, 'aulia_user', 'P0001', '2022-10-01', 37.5);

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `kode_penyakit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_penyakit` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `definisi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengobatan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pencegahan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode_penyakit`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES ('P0010', 'Vaginitis', 'Vaginitis adalah peradangan pada vagina yang ditandai dengan gatal di vagina dan keputihan. Berbeda dengan keputihan normal yang tidak berbau, keputihan yang dialami penderita vaginitis berbau tidak sedap. Vagina secara alami terus memproduksi cairan, yang jumlah dan teksturnya bisa berubah-ubah sepanjang siklus menstruasi. Pada kondisi tertentu, cairan vagina akan lebih kental dan banyak, lalu muncul sebagai keputihan. Namun, perlu diketahui bahwa tidak semua keputihan merupakan gejala vaginitis.\r\n<a href=\"https://www.alodokter.com/vaginitis#:~:text=Vaginitis%20adalah%20peradangan%\r\n20pada%20vagina,penderita%20vaginitis%20berbau%20tidak%20sedap.\">Sumber</a>', 'Pemberian obat antibiotik. Pemberian obat antijamur. Terapi pengganti hormon.\r\n<a href=\"https://www.alodokter.com/vaginitis#:~:text=Vaginitis%20adalah%20peradangan%\r\n20pada%20vagina,penderita%20vaginitis%20berbau%20tidak%20sedap.\">Sumber</a>', 'Bersihkan vagina dengan air tanpa menggunakan sabun, dan hindari membasuh bagian dalam vagina. Selalu bersihkan vagina dari arah depan ke belakang setiap kali selesai buang air, dan pastikan menyeka vagina hingga benar-benar kering. Seka area kemaluan hingga benar-benar kering sebelum mengenakan celana dalam agar celana tidak lembap. Hindari penggunaan benda yang bisa menyebabkan iritasi atau alergi pada vagina, seperti pembalut yang mengandung pewangi atau sabun pembersih vagina. Lakukan hubungan seks yang aman, misalnya dengan menggunakan kondom atau tidak bergonta-ganti pasangan. Gunakan air hangat bila ingin berendam. Pilih celana dalam yang tidak ketat dan berbahan katun. Kontrol kadar gula darah bila menderita diabetes.\r\n<a href=\"https://www.alodokter.com/vaginitis#:~:text=Vaginitis%20adalah%20peradangan%\r\n20pada%20vagina,penderita%20vaginitis%20berbau%20tidak%20sedap.\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0006', 'Polip Serviks', 'Polip Serviks adalah pertumbuhan sel tumor jinak yang muncul di serviks atau leher rahim. Polip biasanya berwarna merah seperti ceri, keunguan, atau putih cenderung abu-abu. Wujud dan ukurannya bervariasi, terkadang seperti umbi-umbian yang menempel pada batang pohon tipis. Ukuran dari tumor jinak ini sekitar 1-2 cm atau tidak lebih besar dari biji wijen. Polip pada leher rahim biasanya bersifat nonkanker. Meski begitu, ada kemungkinan tumor jinak ini bisa berubah menjadi kanker atau polip prakanker.\r\n<a href=\"https://hellosehat.com/wanita/penyakit-wanita/polip-serviks/\">Sumber</a>', 'Prosedur pengangkatan tanpa pereda nyeri. Operasi pembedahan dengan bius total.\r\n<a href=\"https://hellosehat.com/wanita/penyakit-wanita/polip-serviks/\">Sumber</a>', 'Melakukan pemeriksaan panggul di dokter kandungan secara teratur. Memakai celana dalam bahan katun agar mencegah panas berlebih yang bisa menjadi sumber infeksi. Gunakan kondom saat berhubungan seksual. Lakukan pap smear secara teratur.\r\n<a href=\"https://hellosehat.com/wanita/penyakit-wanita/polip-serviks/\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0007', 'Servisitis / Cervicitis', 'Servisitis adalah peradangan pada serviks atau leher rahim. Peradangan ini dapat ditandai dengan perdarahan dari vagina di luar masa menstruasi, nyeri saat berhubungan seksual, atau keluarnya cairan abnormal dari vagina. Serviks merupakan bagian paling bawah dari rahim yang terhubung dengan vagina. Layaknya jaringan lain, serviks juga dapat mengalami peradangan karena berbagai penyebab. Penyebabnya bisa berupa infeksi, misalnya infeksi menular seksual, maupun noninfeksi, seperti iritasi atau alergi.\r\n<a href=\"https://www.alodokter.com/servisitis\">Sumber</a>', 'Antibiotik. Antivirus. Antijamur.\r\n<a href=\"https://www.alodokter.com/servisitis\">Sumber</a>', 'Melakukan hubungan seksual yang aman, yaitu dengan memakai pengaman dan tidak berganti-ganti pasangan. Menghindari produk-produk kewanitaan yang mengandung pewangi, karena bisa menyebabkan iritasi pada vagina dan serviks. Menjaga kebersihan vagina untuk mengurangi risiko infeksi.\r\n<a href=\"https://www.alodokter.com/servisitis\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0008', 'Prolaps Uteri', 'Prolaps Uteri adalah kelainan organ rahim yang terjadi ketika rahim turun ke atau ke dalam vagina. Kondisi terjadi ketika otot-otot dasar panggul dan ligamen menjadi lemah dan tidak lagi mampu menopang rahim.\r\n<a href=\"https://www.alodokter.com/turun-peranakan\">Sumber</a>', 'Vaginal pessary. Bedah.\r\n<a href=\"https://www.honestdocs.id/prolaps-uteri\">Sumber</a>', 'Senam kegel.  Cegah sembelit. Hindari beban berat. Mengendalikan batuk. Cegah obesitas.\r\n<a href=\"https://www.honestdocs.id/prolaps-uteri\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0009', 'Kista Bartholin / Bartholinitis', 'Kista Bartholin merupakan kantung berisi cairan jernih yang terbentuk akibat tersumbatnya kelenjar bartholin. Kelenjar bartholin itu sendiri terletak di bibir vagina (labia). Kelenjar tersebut menghasilkan cairan yang bermanfaat untuk mencegah iritasi akibat gesekan saat hubungan intim. Jika kelenjar bartholin tersumbat, cairan akan menumpuk dan memicu terjadinya kista.\r\n<a href=\" https://www.klikdokter.com/info-sehat/read/3627011/apa-bedanya-kista-bartholin-kista-nabothi-dan-kista-gartner#:~:text=Kista%20Bartholin%20adalah%20kantong%20berisi,wanita%20berusia%2020%2D30%20tahun.\">Sumber</a>', 'Berendam di air hangat atau sitz bath. Obat-obatan. Operasi insisi dan drainase. Pemasangan kateter. Marsupialisasi kista. Pengangkatan kelenjar Bartholin\r\n<a href=\"https://www.alodokter.com/kista-bartholin\">Sumber</a>', 'Jaga kebersihan organ intim, dan biasakan untuk membersihkan organ intim dari arah depan ke belakang. Hindari memakai pakaian dalam dan celana yang terlalu ketat atau berbahan kasar. Gunakan kondom saat berhubungan intim untuk mencegah infeksi menular seksual.\r\n<a href=\"https://www.alodokter.com/kista-bartholin#:~:text=Pencegahan%20Kista%20Bartholin&text=Hindari%20memakai%\r\n20pakaian%20dalam%20dan,untuk%20mencegah%20infeksi%20menular%20seksual.\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0004', 'Mioma Uteri (Rahim)', 'Mioma Uteri adalah pertumbuhan massa di dalam rahim atau di luar rahim yang tidak bersifat ganas. Mioma berasal dari sel otot polos rahim, dan pada beberapa kasus juga berasal dari otot polos pembuluh darah rahim. Jumlah dan ukuran mioma bervariasi, terkadang ditemukan satu atau lebih dari satu. Biasanya mioma tersebut berlokasi di dinding rahim, dan bentuknya menonjol ke rongga endometrium atau permukaan rahim.\r\n<a href=\"https://www.klikdokter.com/penyakit/mioma-uteri\">Sumber</a>', 'USG. Terapi Hormonal. Miektomi. Histerektomi.\r\n<a href=\"https://www.klikdokter.com/penyakit/mioma-uteri\">Sumber</a>', 'Olahraga/aktivitas fisik. Tubuh akan membakar kalori lebih sedikit ketika Anda malas bergerak. Pola makan sehat. Pola makan yang tinggi kalori, sedikit sayur dan buah, sering melewatkan sarapan, dan minum minuman tinggi gula dapat menyebabkan terjadinya obesitas. Hindari merokok. Kebiasaan ini dapat meningkatkan risiko mioma.\r\n<a href=\"https://www.klikdokter.com/penyakit/mioma-uteri\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0005', 'Kanker Serviks', 'Kanker Serviks adalah kanker yang tumbuh pada sel-sel di leher rahim. Kanker ini umumnya berkembang perlahan dan baru menunjukkan gejala ketika sudah memasuki stadium lanjut. Oleh sebab itu, penting untuk mendeteksi kanker serviks sejak dini sebelum timbul masalah serius. Serviks atau leher rahim adalah bagian rahim yang terhubung ke vagina. Fungsinya adalah untuk memproduksi lendir yang membantu menyalurkan sperma dari vagina ke rahim saat berhubungan seksual. Serviks juga berfungsi melindungi rahim dari bakteri dan benda asing dari luar.\r\n<a href=\"Sumber : https://www.alodokter.com/kanker-serviks\">Sumber</a>', 'Bedah. Radioterapi. Kemoterapi. Terapi Target.\r\n<a href=\"https://www.alodokter.com/kanker-serviks/pengobatan\">Sumber</a>', 'Vaksin HPV. Berhubungan seks secara aman, yaitu dengan menggunakan kondom dan menghindari berhubungan seksual dengan lebih dari satu pasangan. Menjalani pap smear atau pemeriksaan IVA secara berkala agar kondisi serviks selalu terpantau dan agar penanganan bisa lebih cepat dilakukan bila ada kanker. Tidak merokok.\r\n<a href=\"https://www.alodokter.com/kanker-serviks/pencegahan\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0001', 'Kista Ovarium Terpuntir', 'Kista Ovarium adalah kantong berisi cairan yang tumbuh pada indung telur (ovarium) wanita. Kista umumnya muncul selama masa subur atau selama wanita  mengalami menstruasi. Setiap wanita memiliki dua indung telur (ovarium), satu di bagian kanan dan satu lagi di bagian kiri rahim. Ovarium yang berukuran sebesar biji kenari merupakan bagian dari sistem reproduksi wanita. Ovarium berfungsi untuk menghasilkan sel telur tiap bulan (mulai dari masa pubertas hingga menopause), serta memproduksi hormon estrogen dan progesteron, namun fungsi ovarium terkadang dapat terganggu, kista termasuk jenis gangguan yang sering terjadi pada ovarium.\r\n<a href=\"https://www.alodokter.com/kista-ovarium\">Sumber</a>', 'Pemantauan Rutin. Konsumsi Pil KB. Prosedur Operasi.\r\n<a href=\"https://www.alodokter.com/kista-ovarium/pengobatan\">Sumber</a>', 'Melakukan pemeriksaan panggul secara rutin. Waspada terhadap perubahan dalam siklus menstruasi, termasuk gejala menstruasi yang tidak biasa, terutama yang terjadi lebih dari beberapa siklus. Segera berkonsultasi dengan dokter bila mengalami gejala yang mengkhawatirkan.\r\n<a href=\"https://www.halodoc.com/kesehatan/kista-ovarium\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0002', 'Endometriosis', 'Endometriosis adalah kondisi ketika endometrium tumbuh di luar dinding rahim. Pada kondisi ini, endometrium dapat tumbuh di indung telur (ovarium), lapisan dalam perut (peritoneum), usus, vagina, atau saluran kemih.\r\n<a href=\"https://www.alodokter.com/endometriosis\">Sumber</a>', 'Obat-Obatan. Terapi Hormon. Operasi.\r\n<a href=\"https://www.alodokter.com/endometriosis/pengobatan\">Sumber</a>', 'Berolahraga secara rutin, minimal 30 menit setiap hari. Menjaga berat badan agar tetap ideal. Menurunkan berat badan bila mengalami obesitas. Mengurangi konsumsi alkohol secara berlebihan. Mengurangi konsumsi kafein yang berlebihan. Berkonsultasi dengan dokter mengenai penggunaan alat kontrasepsi yang tepat.\r\n<a href=\"https://www.alodokter.com/endometriosis/pencegahan\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0003', 'Penyakit Radang Panggul / Pelvic Inflammation Disease (PID)', 'Pelvic Inflammation Disease (PID) atau Penyakit Radang Panggul adalah infeksi pada organ reproduksi wanita, seperti serviks, rahim, dan ovarium. Salah satu penyebab paling sering dari radang panggul adalah infeksi menular seksual. Radang panggul umumnya dialami oleh wanita usia 15–25 tahun yang aktif berhubungan seksual. Radang panggul bisa ditandai dengan nyeri di panggul atau perut bagian bawah. Kondisi ini perlu mendapat penanganan untuk mencegah terjadinya komplikasi, seperti kehamilan di luar kandungan (ektopik) atau kemandulan (infertilitas).\r\n\r\n<a href=\"https://www.alodokter.com/radang-panggul#:~:text=Radang%20panggul%20atau%20pelvic%20inflammatory,tahun%20yang%20aktif%20berhubungan%20seksual.\">Sumber</a>', 'Obat-Obatan. Operasi.\r\n\r\n<a href=\"https://www.alodokter.com/radang-panggul#:~:text=Radang%20panggul%20atau%20pelvic%20inflammatory,tahun%20yang%20aktif%20berhubungan%20seksual.\">Sumber</a>', 'Jangan berganti-ganti pasangan. Gunakan kondom saat berhubungan seksual. Periksa kesehatan secara rutin jika memiliki risiko tertular infeksi menular seksual. Konsultasikan pilihan dan rencana penggunaan alat kontrasepsi dengan dokter. Bersihkan area kemaluan dari depan ke belakang dan jangan sebaliknya.\r\n\r\n<a href=\"https://www.alodokter.com/radang-panggul#:~:text=Radang%20panggul%20atau%20pelvic%20inflammatory,tahun%20yang%20aktif%20berhubungan%20seksual.\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0011', 'Kehamilan Mola / Hamil Anggur', 'Hamil anggur atau yang dikenal juga sebagai mola hidatidosa adalah kelainan kehamilan yang jarang terjadi. Kondisi ini terjadi ketika sel telur yang sudah dibuahi dan plasenta tidak berkembang secara normal. Akibatnya, sel-sel abnormal tersebut membentuk sekumpulan kista yang bentuknya menyerupai anggur putih.\r\n<a href=\"https://www.halodoc.com/kesehatan/hamil-anggur\">Sumber</a>', 'Kuret. Histerektomi atau pengangkatan rahim. Pemantauan HCG.\r\n<a href=\"https://www.halodoc.com/kesehatan/hamil-anggur\">Sumber</a>', 'Menghindari kehamilan selama satu tahun. Melakukan pemeriksaan rutin agar dokter memantau kadar HCG dalam tubuh, tujuan prosedur tersebut adalah membantu memastikan tidak ada jejak kehamilan anggur yang tersisa di dalam rahim.\r\n<a href=\"https://www.halodoc.com/kesehatan/hamil-anggur\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0012', 'Keguguran / Abortus', 'Abortus atau keguguran merupakan kondisi keluarnya produk konsepsi sebelum janin dapat hidup di luar kandungan, yakni pada usia kehamilan 22 minggu atau jika berat janin kurang dari 500 gram. Ada 4 macam abortus yaitu :\r\n<br>\r\n<b>Abortus Imminens / Ancaman Keguguran</b>, pada pemeriksaan dalam tidak ada pembukaan mulut rahim dan tidak ada jaringan keluar dari vagina.\r\n<br>\r\n<b>Abortus Insipien / Keguguran Yang Sedang Berlangsung</b>, pada pemeriksaan dalam sudah ada pembukaan mulut rahim dan tanpa ada jaringan keluar dari vagina.\r\n<br>\r\n<b>Abortus Inkomplit / Keguguran Dengan Sisa Jaringan Didalam</b>, pada pemeriksaan dalam sudah ada pembukaan mulut rahim dan tampak jaringan keluar dari vagina.\r\n<br>\r\n<b>Abortus Komplit / Keguguran Dengan Semua Jaringan Sudah Keluar</b>, pada pemeriksaan dalam tidak ada pembukaan mulut rahim dan ada jaringan keluar dari vagina.\r\n<a href=\"https://www.alomedika.com/penyakit/obstetrik-dan-ginekologi/abortus\">Sumber</a>', 'Penatalaksanaan abortus dapat dibedakan menjadi expectant management atau explore management. Expectant management dilakukan dengan membiarkan hasil konsepsi meluruh sendiri, sedangkan explore management dilakukan dengan tindakan invasif terutama jika ada tanda infeksi dan perdarahan masif.\r\n<a href=\"https://www.alomedika.com/penyakit/obstetrik-dan-ginekologi/abortus\">Sumber</a>', 'Rajin konsultasi ke dokter. Perhatikan asupan makanan. Istirahat yang cukup. Melakukan vaksinasi.\r\n<a href=\"https://hellosehat.com/kehamilan/kandungan/abortus-imminens-adalah-keguguran/\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0013', 'Kehamilan Ektopik / Kehamilan Diluar Kandungan', 'Kehamilan ektopik adalah kelainan implantasi dari pembuahan sel telur. Sel telur yang telah dibuahi oleh sperma secara alami seharusnya akan menempel pada dinding rahim. Namun, pada jenis kehamilan ini hasil pembuahan menempel pada tempat lain selain di dinding rahim.\r\n<a href=\"https://www.halodoc.com/kesehatan/kehamilan-ektopik\">Sumber</a>', 'Penggunaan metotreksat. Pengangkatan sebagian atau seluruh jaringan untuk menghentikan perdarahan. Bedah laparaskopi.\r\n<a href=\"https://www.halodoc.com/kesehatan/kehamilan-ektopik\">Sumber</a>', 'Beberapa cara yang dilakukan untuk mengurangi risiko terjadinya kehamilan ektopik misalnya dengan membatasi jumlah pasangan seksual untuk mengurangi risiko terjadinya infeksi menular seksual, menggunakan kondom pada saat melakukan hubungan seks berisiko untuk menghindari infeksi menular seksual dan mengurangi risiko penyakit radang panggul, tidak merokok atau berhenti merokok saat sedang hamil.\r\n<a href=\"https://www.halodoc.com/kesehatan/kehamilan-ektopik\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0014', 'Vaginismus', 'Vaginismus adalah kondisi medis yang ditandai dengan pengencangan otot-otot di sekitar vagina secara tidak sadar. Kondisi ini terjadi ketika adanya penetrasi seksual pada vagina. Hal ini merupakan reaksi otomatis tubuh terhadap rasa takut dari beberapa atau semua jenis penetrasi pada vagina yang mungkin setiap kali terjadi. Gangguan ini dapat menyebabkan kejang otot, nyeri, hingga penghentian pernapasan sementara.\r\n<a href=\"https://www.halodoc.com/kesehatan/vaginismus\">Sumber</a>', 'Latihan kontrol dasar panggul. Pendidikan dan konseling. Latihan emosional. Mengurangi sensitifitas terhadap penetrasi. Latihan penetrasi.\r\n<a href=\"https://www.halodoc.com/kesehatan/vaginismus\">Sumber</a>', 'Pencegahan vaginismus secara khusus belum ditemukan, tetapi bagi yang memiliki faktor risiko vaginismus dianjurkan untuk melakukan konseling pra-nikah. \r\n<a href=\"https://www.halodoc.com/kesehatan/vaginismus\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0015', 'Kanker Ovarium', 'Kanker ovarium adalah kanker yang tumbuh dan berkembang pada ovarium atau indung telur, yaitu dua organ yang berada di sisi kanan dan kiri rahim.\r\n<a href=\"https://www.halodoc.com/kesehatan/kanker-ovarium\">Sumber</a>', 'Operasi. Kemoterapi. Radioterapi.\r\n<a href=\"https://www.halodoc.com/kesehatan/kanker-ovarium\">Sumber</a>', 'Memiliki anak lebih dari 1, penggunaan kontrasepsi pil minimal 1, pengikatan saluran tuba, dan histerektomi (pengangkatan rahim). Konsumsi sayuran, vitamin A, dan vitamin C dalam jumlah yang cukup. Melakukan pemeriksaan berkala. Pemeriksaan panggul rutin per tahun dapat digunakan untuk mendeteksi dini kanker ovarium yang tidak memiliki sensitivitas yang tinggi.\r\n<a href=\"https://www.halodoc.com/kesehatan/kanker-ovarium\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0016', 'Polycystic Ovarian Syndrome (PCOS)', 'Sindrom polikistik ovarium atau polycystic ovarian syndrome (PCOS) adalah gangguan hormon yang terjadi pada wanita di usia subur. PCOS ditandai dengan gangguan menstruasi dan kadar hormon maskulin (hormon androgen) yang berlebihan.\r\n<a href=\"https://www.alodokter.com/pcos\">Sumber</a>', 'Perubahan gaya hidup. Obat-obatan. Prosedur medis khusus.\r\n<a href=\"https://www.alodokter.com/pcos\">Sumber</a>', 'PCOS sulit dicegah, tetapi dengan menjaga berat badan ideal, gejala dan risiko komplikasinya dapat dikurangi. Beberapa cara yang dapat dilakukan untuk menjaga berat badan ideal yaitu membatasi konsumsi makanan manis, perbanyak konsumsi serat, olahraga secara teratur.\r\n<a href=\"https://www.alodokter.com/pcos\">Sumber</a>');
INSERT INTO `penyakit` VALUES ('P0017', 'Abses Tubo Ovarial', 'Abses Tubo Ovarial (ATO) atau Tubo-Ovarium Abcess (TOA) merupakan radang bernanah yang terjadi pada ovarium dan atau tuba fallopii (salurang yang menghubungkan ovarium dan rahim/uterus) pada satu sisi atau kedua sisi adneksa.\r\n<a href=\"https://www.alodokter.com/komunitas/topic/apakah-toa-penyebab-kanker-rahim#:~:text=Abses%20Tubo%20Ovarial%20(ATO)%20atau,sisi%20atau%20kedua%20sisi%20adneksa.\">Sumber</a>', 'Pemberian antibiotik. Tindakan pembedahan.\r\n<a href=\"https://www.alodokter.com/komunitas/topic/apakah-toa-penyebab-kanker-rahim#:~:text=Abses%20Tubo%20Ovarial%20(ATO)%20atau,sisi%20atau%20kedua%20sisi%20adneksa.\">Sumber</a>', 'Melakukan penanganan yang baik bila menderita penyakit radang panggul.\r\n<a href=\"https://www.alodokter.com/komunitas/topic/apakah-toa-penyebab-kanker-rahim#:~:text=Abses%20Tubo%20Ovarial%20(ATO)%20atau,sisi%20atau%20kedua%20sisi%20adneksa.\">Sumber</a>');

-- ----------------------------
-- Table structure for peta
-- ----------------------------
DROP TABLE IF EXISTS `peta`;
CREATE TABLE `peta`  (
  `kd_peta` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_rs` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kd_peta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peta
-- ----------------------------
INSERT INTO `peta` VALUES ('L0001', 'RS Marzoeki Mahdi', 'Bogor\r\n', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k2q83a80LPHc');
INSERT INTO `peta` VALUES ('L0002', 'RS Jiwa Ciluar', 'Ciluar, Bandung.', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.kTsOiIdYTxR0');
INSERT INTO `peta` VALUES ('L0003', 'RSJ Grogol', 'Jakarta ', 'https://mapsengine.google.com/map/u/0/embed?mid=zDwZjQWSfAaE.k33YG7pFQceE');

-- ----------------------------
-- Table structure for relasi_penyakit_gejala
-- ----------------------------
DROP TABLE IF EXISTS `relasi_penyakit_gejala`;
CREATE TABLE `relasi_penyakit_gejala`  (
  `kode_penyakit` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_gejala` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bobot` float NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of relasi_penyakit_gejala
-- ----------------------------
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0019', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0008', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0007', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0012', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0011', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0010', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0018', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0017', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0016', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0015', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0026', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0025', 0.6);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0014', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0030', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0029', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0028', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0027', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0006', 'G0033', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0006', 'G0032', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0007', 'G0031', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0007', 'G0027', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0009', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0008', 'G0037', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0008', 'G0036', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0008', 'G0035', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0008', 'G0034', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0006', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0005', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0009', 'G0038', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0009', 'G0013', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0009', 'G0010', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0042', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0041', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0040', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0004', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0003', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0002', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0007', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0002', 'G0003', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0013', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0011', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0003', 'G0010', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0039', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0014', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0010', 'G0010', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0007', 'G0014', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0024', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0001', 'G0001', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0023', 0.7);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0022', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0021', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0020', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0012', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0004', 'G0011', 0.6);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0026', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0025', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0022', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0016', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0005', 'G0014', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0006', 'G0031', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0006', 'G0023', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0007', 'G0010', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0011', 'G0046', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0011', 'G0045', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0011', 'G0044', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0011', 'G0043', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0030', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0012', 'G0044', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0012', 'G0043', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0012', 'G0022', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0029', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0013', 'G0047', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0013', 'G0044', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0013', 'G0043', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0014', 'G0051', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0014', 'G0050', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0014', 'G0049', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0014', 'G0048', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0026', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0025', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0022', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0007', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0056', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0055', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0011', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0017', 'G0061', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0017', 'G0060', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0017', 'G0013', 0.9);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0017', 'G0004', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0059', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0058', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0016', 'G0057', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0054', 0.5);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0053', 0.8);
INSERT INTO `relasi_penyakit_gejala` VALUES ('P0015', 'G0052', 0.9);

-- ----------------------------
-- Table structure for tmp_analisa
-- ----------------------------
DROP TABLE IF EXISTS `tmp_analisa`;
CREATE TABLE `tmp_analisa`  (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_penyakit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_gejala` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bobot` float NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_analisa
-- ----------------------------
INSERT INTO `tmp_analisa` VALUES ('aulia_user', 'P0001', 'G0001', 0.9);
INSERT INTO `tmp_analisa` VALUES ('aulia_user', 'P0001', 'G0002', 0.9);
INSERT INTO `tmp_analisa` VALUES ('aulia_user', 'P0001', 'G0003', 0.8);
INSERT INTO `tmp_analisa` VALUES ('aulia_user', 'P0002', 'G0003', 0.9);

-- ----------------------------
-- Table structure for tmp_analisa_fuzzy
-- ----------------------------
DROP TABLE IF EXISTS `tmp_analisa_fuzzy`;
CREATE TABLE `tmp_analisa_fuzzy`  (
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_penyakit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` float NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_analisa_fuzzy
-- ----------------------------
INSERT INTO `tmp_analisa_fuzzy` VALUES ('aulia_user', 'P0001', 1.61538);
INSERT INTO `tmp_analisa_fuzzy` VALUES ('aulia_user', 'P0002', 0.888889);

-- ----------------------------
-- Table structure for tmp_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tmp_gejala`;
CREATE TABLE `tmp_gejala`  (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_gejala` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tmp_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tmp_penyakit`;
CREATE TABLE `tmp_penyakit`  (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_penyakit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_penyakit
-- ----------------------------
INSERT INTO `tmp_penyakit` VALUES ('aulia_user', 'P0001');
INSERT INTO `tmp_penyakit` VALUES ('aulia_user', 'P0002');

SET FOREIGN_KEY_CHECKS = 1;
