<?php
  class Paging{
    // Fungsi untuk mencek halaman dan posisi data
    function cariPosisi($batas){
      if(empty($_GET['hal'])){
        $posisi=0;
        $_GET['hal']=1;
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      }
      else{
        $posisi = ($_GET['hal']-1) * $batas;
      }
      return $posisi;
    }

    // Fungsi untuk menghitung total halaman
    function jumlahHalaman($jmldata, $batas){
      $jmlhalaman = ceil($jmldata/$batas);
      return $jmlhalaman;
    }

    // Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
    function navHalaman($halaman_aktif, $jmlhalaman){
      $link_halaman = "<b>Halaman : </b>";
      // Link halaman 1,2,3, ...
      for ($i=1; $i<=$jmlhalaman; $i++){
        if ($i == $halaman_aktif){
          $link_halaman .= "<span class=halout>$i</span>";
        }
        else{
          $link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&act=$_GET[act]&hal=$i class=hal>$i</a>";
        }
        $link_halaman .= " | ";
      }
      return $link_halaman;
    }
  }
?>