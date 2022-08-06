<?php
session_start();
unset($_SESSION['SESS_USERNAME']);

include "tanggal.php";

if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = '1';
}
?>
<?php
include("koneksi_db.php"); ?>


<?php include('partials/header.php') ?>
<?php include('partials/navbar.php') ?>
<?php include('partials/login_modal.php') ?>
<?php include('partials/daftar_modal.php') ?>


<div class="container my-5 py-5">
	<h4 class="text-center mb-5">Tentang Kami</h4>
	<div class="row">
		<div class="col-12 ">
			<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vel nisi expedita at quae quas architecto obcaecati provident, veniam voluptatum corporis neque repellendus atque nam ex modi dolorum pariatur rem nemo, adipisci explicabo debitis minima tenetur. Quis consectetur cum error magni dolorum dolor. Laboriosam error iusto enim obcaecati aut quisquam molestiae quae possimus repellat. Facilis, perferendis deleniti? Expedita magnam perspiciatis corporis? Magnam facilis porro repudiandae omnis veritatis ab incidunt aspernatur, facere, eos saepe sed eligendi voluptatibus pariatur enim dignissimos doloremque repellendus voluptate illum vitae? Nemo quam quia rem velit at amet consequatur id tempora ipsam praesentium repellendus quas, dolorem inventore culpa error debitis dolor ducimus dolorum reprehenderit, modi expedita? Dolores minima vitae qui fugit temporibus pariatur voluptas rem quis commodi cum iusto quasi recusandae odio, vel possimus repellendus atque. Illo quisquam eveniet ut modi quo distinctio minima veniam possimus veritatis placeat, culpa, aut soluta reprehenderit quam voluptate, iusto explicabo provident. Molestias, quod. Nihil, mollitia blanditiis. Debitis porro ea similique, corporis officia labore impedit consequuntur. Itaque reprehenderit beatae nostrum provident quaerat modi consequatur quam sequi animi, iusto possimus enim. Suscipit, laborum nostrum recusandae delectus vel, quaerat eligendi veritatis provident, vero magni aspernatur veniam voluptas sed molestiae est? Quis at quibusdam praesentium.</p>
		</div>
	</div>


</div>

<?php include('partials/footer.php') ?>