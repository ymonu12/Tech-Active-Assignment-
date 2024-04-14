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
										<div class="card">
											<div class="card-body">
												<h5 class="">Upload <?= $type ?> File</h5> <hr>
												<form action="" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<input accept="<?= $allowed ?>"  class="form-control" type="file" name="upload_file" required>
													</div>
													<div class="form-group">
														<button name="file" class="btn btn-primary btn-block" type="submit">Upload</button>
														<a href="<?= base_url($file) ?>" class="btn btn-success btn-block" type="submit">Sample <?= $type ?> File</a>
														<a href="<?= base_url('Import') ?>" class="btn btn-default btn-block" type="submit">Back to Home</a>
													</div>
												</form>
											</div>
										</div>
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
		<!-- SCRIPTS CLOSED -->

	</body>
</html>