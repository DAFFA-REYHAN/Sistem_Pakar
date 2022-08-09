<?php
session_start();

include "tanggal.php";

if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = '1';
}
?>

<?php include('partials/header.php') ?>
<?php include('partials/navbar.php') ?>
	<div class="container my-5 py-5">
		<h4 class="text-center mb-5">Tentang Kami</h4>
		<div class="col-md-12">
			<p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quod delectus ipsam necessitatibus nesciunt eos commodi enim quam deleniti, porro illo earum id dolorum dolor deserunt. Placeat dolor animi sequi nobis quidem deleniti laboriosam molestias distinctio a fuga cupiditate neque praesentium id laborum at eligendi reprehenderit doloremque exercitationem, in eaque sit? Esse, labore? Fuga dolorem natus deleniti vel voluptatem doloribus, optio eos adipisci repudiandae perferendis id, provident pariatur, doloremque vitae officia ullam obcaecati laborum quasi magni sapiente nemo ipsam quis ipsum. Aspernatur quo, quae dolorum esse recusandae quasi, ratione veritatis sapiente deleniti impedit laborum, assumenda numquam odio repudiandae et aperiam. Vero dolores alias a labore suscipit libero, id nihil quia minima earum voluptate distinctio incidunt ullam hic deserunt iusto tempora voluptatibus officiis, sunt adipisci aspernatur! Illo, tempore aliquam dicta labore repellat perspiciatis sunt esse dolorem doloremque laborum laboriosam est soluta magnam quam ex nulla eius fugiat facilis? In, omnis laborum?</p>
		</div>
	</div>
	<?php include("partials/footer.php") ?>