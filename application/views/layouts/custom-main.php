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
		<title> Sparic - Codeigniter Multipurpose Responsive Bootstrap5 Dashboard Template</title>

        <!-- FAVICON -->
        <link rel="icon" href="<?php echo base_url('assets/images/brand/favicon.ico'); ?>" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo base_url('assets/images/brand/favicon.ico'); ?>" type="image/x-icon">
        <?php require_once('admin_layouts/components/custom-styles'); ?>
	</head>

        <?= $this->renderSection('body'); ?>

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="<?php echo base_url('assets/images/svgs/loader.svg'); ?>" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->

            <!-- MAIN-CONTENT -->
            <div class="page h-100">
                <?= $this->renderSection('content'); ?>
            </div>
            <!-- END MAIN-CONTENT -->

        <!-- END PAGE-->

        <!-- SCRIPTS -->
		<?= require_once('admin_layouts/components/custom-scripts'); ?>
		<!-- SCRIPTS CLOSED -->

	</body>
</html>
