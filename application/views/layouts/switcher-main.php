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
        <?= $this->include('layouts/components/switcher-styles'); ?>
	</head>

	<body class="app sidebar-mini ltr">

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="<?php echo base_url('assets/images/svgs/loader.svg'); ?>" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">
            <div class="page-main">

                <!-- APP-HEADER -->
                <?= $this->include('layouts/components/app-header'); ?>

                <!-- END APP-HEADER -->

                <!-- NEWS-TICKER -->
                <?= $this->include('layouts/components/news-ticker'); ?>

                <!-- END NEWS-TICKER -->

                <!-- APP-SIDEBAR -->
                <?= $this->include('layouts/components/app-sidebar'); ?>

                <!-- END APP-SIDEBAR -->

                <!-- MAIN-CONTENT -->
                <div class="main-content app-content">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                            <?= $this->renderSection('content'); ?>
                        </div>
                    </div>
                </div>
                <!-- END MAIN-CONTENT -->
            </div>
            
            <!-- RIGHT-SIDEBAR -->
            <?= $this->include('layouts/components/right-sidebar'); ?>

            <!-- END RIGHT-SIDEBAR -->

            <!-- FOOTER -->
            <?= $this->include('layouts/components/footer'); ?>

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
		<?= $this->include('layouts/components/switcher-scripts'); ?>
        <!-- SCRIPTS CLOSED -->
	</body>
</html>
