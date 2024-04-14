<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Codeigniter Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard template, admin template, bootstrap 5 codeigniter, codeigniter, codeigniter bootstrap admin, codeigniter template, codeigniter bootstrap template, codeigniter admin, codeigniter admin dashboard, codeigniter admin dashboard template, codeigniter admin panel, codeigniter admin template, codeigniter dashboard, dashboard template">
        <!-- TITLE -->
		<title> <?= $title ?> | <?= APPNAME ?> </title>
        <!-- FAVICON -->
        <link rel="icon" href="<?php echo base_url('assets/images/logo/favicon.png'); ?>" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/favicon.png'); ?>" type="image/x-icon">
        <?php require_once('layouts/components/custom-styles.php'); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .header-brand-img{
                line-height: 2rem !important;
                vertical-align: middle !important;
                width: auto !important;
                height: 3.5rem !important;
            }
        </style>
	</head>

    <body>

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="<?php echo base_url('assets/images/svgs/loader.svg'); ?>" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->

            <!-- MAIN-CONTENT -->
            <div class="page h-100">
            <div class="page-content">
					<div class="container text-center text-dark">
						<div class="row">
							<div class="col-lg-4 d-block mx-auto">
								<div class="row">
									<div class="col-xl-12 col-md-12 col-md-12">
										<!-- <div class="card">
											<div class="card-body"> -->
												<a href="<?= base_url('Import/importData') ?>" class="btn btn-primary">Import Data - CSV</a> <br><br>
												<a href="<?= base_url('Import/importDataExcel') ?>" class="btn btn-primary">Import Data - Excel</a> <br><br>
												<a href="<?= base_url('Import/viewData') ?>" class="btn btn-secondary">View Uploaded</a>
											<!-- </div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- END MAIN-CONTENT -->

        <!-- END PAGE-->

        <!-- SCRIPTS -->
		<?= require_once('layouts/components/custom-scripts.php'); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- SCRIPTS CLOSED -->
		<?php if ($this->session->flashdata('success')): ?>
			<script>
				$(document).ready(function(){
					iziToast.success({
						title: 'Success',
						message: '<?php echo $this->session->flashdata('success'); ?>',
						position: 'topRight'
					});
				});
			</script>
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')): ?>
			<script>
				$(document).ready(function(){
					iziToast.error({
						title: 'Error',
						message: '<?php echo $this->session->flashdata('error'); ?>',
						position: 'topRight'
					});
				});
			</script>
		<?php endif; ?>

	</body>
</html>
