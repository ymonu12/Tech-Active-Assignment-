
<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
					<div class="app-sidebar">
						<div class="side-header">
							<a class="header-brand1" href="<?php echo base_url('index'); ?>">
								<img src="<?php echo base_url('assets/images/brand/logo.png'); ?>" class="header-brand-img main-logo"
									alt="Sparic logo">
								<img src="<?php echo base_url('assets/images/brand/logo-light.png'); ?>" class="header-brand-img darklogo"
									alt="Sparic logo">
								<img src="<?php echo base_url('assets/images/brand/icon.png'); ?>" class="header-brand-img icon-logo"
									alt="Sparic logo">
								<img src="<?php echo base_url('assets/images/brand/icon2.png'); ?>" class="header-brand-img icon-logo2"
									alt="Sparic logo">
							</a>
						</div>
						<!-- logo-->
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">
								<li class="sub-category">
									<h3>Main</h3>
								</li>
								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-home-4-line"></i><span
											class="side-menu__label">Dashboard</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side2" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side4" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side1">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Dashboards</a></li>
															<li><a class="slide-item" href="<?php echo base_url('index'); ?>">Sales</a></li>
															<li><a class="slide-item" href="<?php echo base_url('index2'); ?>">E-Commerce</a></li>
															<li><a class="slide-item" href="<?php echo base_url('index3'); ?>">Analytics</a></li>
															<li><a class="slide-item" href="<?php echo base_url('index4'); ?>">Medical</a></li>
															<li><a class="slide-item" href="<?php echo base_url('index5'); ?>">Crypto</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side2">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch1" class="onoffswitch2-checkbox">
																		<label for="onoffswitch1" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch2" class="onoffswitch2-checkbox">
																		<label for="onoffswitch2" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch3" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch3" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch4" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch4" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch5" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch5" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch6" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch6" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch7" class="onoffswitch2-checkbox">
																		<label for="onoffswitch7" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side3">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side4">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="sub-category">
									<h3>UI Kit</h3>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-bubble-chart-line"></i><span
											class="side-menu__label">Apps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side5" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side6" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side7" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side8" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side5">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
															<li><a href="<?php echo base_url('cards'); ?>" class="slide-item"> Cards design</a></li>
															<li><a href="<?php echo base_url('calendar'); ?>" class="slide-item"> Default calendar</a></li>
															<li><a href="<?php echo base_url('calendar2'); ?>" class="slide-item"> Full calendar</a></li>
															<li><a href="<?php echo base_url('chat'); ?>" class="slide-item"> Chat</a></li>
															<li><a href="<?php echo base_url('notify'); ?>" class="slide-item"> Notifications</a></li>
															<li><a href="<?php echo base_url('sweetalert'); ?>" class="slide-item"> Sweet alerts</a></li>
															<li><a href="<?php echo base_url('rangeslider'); ?>" class="slide-item"> Range slider</a></li>
															<li><a href="<?php echo base_url('scroll'); ?>" class="slide-item"> Content Scroll bar</a></li>
															<li><a href="<?php echo base_url('loaders'); ?>" class="slide-item"> Loaders</a></li>
															<li><a href="<?php echo base_url('counters'); ?>" class="slide-item"> Counters</a></li>
															<li><a href="<?php echo base_url('rating'); ?>" class="slide-item"> Rating</a></li>
															<li><a href="<?php echo base_url('treeview'); ?>" class="slide-item"> Treeview</a></li>
															<li><a href="<?php echo base_url('footers'); ?>" class="slide-item"> Footers</a></li>
															<li><a href="<?php echo base_url('users-list'); ?>" class="slide-item"> User List</a></li>
															<li><a href="<?php echo base_url('search'); ?>" class="slide-item">Search</a></li>
															<li><a href="<?php echo base_url('crypto-currencies'); ?>" class="slide-item"> Crypto-currencies</a></li>
															<li><a href="<?php echo base_url('widgets'); ?>" class="slide-item"> Widgets</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side6">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch8" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch8" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch9" class="onoffswitch2-checkbox">
																		<label for="onoffswitch9" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch10" class="onoffswitch2-checkbox">
																		<label for="onoffswitch10" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch11" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch11" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch12" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch12" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch13" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch13" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch14" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch14" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch15" class="onoffswitch2-checkbox">
																		<label for="onoffswitch15" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side7">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side8">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-virus-line"></i><span
											class="side-menu__label">Bootstrap</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu mega-slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side9" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side10" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side11" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side12" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side9">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
															<li class="mega-menu">
																<div class="">
																	<ul>
																		<li><a href="<?php echo base_url('alerts'); ?>" class="slide-item"> Alerts</a></li>
																		<li><a href="<?php echo base_url('buttons'); ?>" class="slide-item"> Buttons</a></li>
																		<li><a href="<?php echo base_url('colors'); ?>" class="slide-item"> Colors</a></li>
																		<li><a href="<?php echo base_url('avatar-square'); ?>" class="slide-item"> Avatar Square</a></li>
																		<li><a href="<?php echo base_url('avatar-radius'); ?>" class="slide-item"> Avatar Radius</a></li>
																		<li><a href="<?php echo base_url('avatar-round'); ?>" class="slide-item"> Avatar Rounded</a></li>
																		<li><a href="<?php echo base_url('dropdown'); ?>" class="slide-item"> Dropdowns</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="<?php echo base_url('listgroup'); ?>" class="slide-item"> List Group</a></li>
																		<li><a href="<?php echo base_url('tags'); ?>" class="slide-item"> Tags</a></li>
																		<li><a href="<?php echo base_url('pagination'); ?>" class="slide-item"> Pagination</a></li>
																		<li><a href="<?php echo base_url('navigation'); ?>" class="slide-item"> Navigation</a></li>
																		<li><a href="<?php echo base_url('typography'); ?>" class="slide-item"> Typography</a></li>
																		<li><a href="<?php echo base_url('breadcrumbs'); ?>" class="slide-item"> Breadcrumbs</a></li>
																		<li><a href="<?php echo base_url('badge'); ?>" class="slide-item"> Badges / Pills</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="<?php echo base_url('thumbnails'); ?>" class="slide-item"> Thumbnails</a></li>
																		<li><a href="<?php echo base_url('offcanvas'); ?>" class="slide-item"> Offcanvas</a></li>
																		<li><a href="<?php echo base_url('toast'); ?>" class="slide-item"> Toast</a></li>
																		<li><a href="<?php echo base_url('scrollspy'); ?>" class="slide-item"> Scrollspy</a></li>
																		<li><a href="<?php echo base_url('mediaobject'); ?>" class="slide-item"> Media Object</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="<?php echo base_url('accordion'); ?>" class="slide-item"> Accordions </a></li>
																		<li><a href="<?php echo base_url('tabs'); ?>" class="slide-item"> Tabs</a></li>
																		<li><a href="<?php echo base_url('modal'); ?>" class="slide-item"> Modal</a></li>
																		<li><a href="<?php echo base_url('tooltipandpopover'); ?>" class="slide-item"> Tooltip and popover</a></li>
																		<li><a href="<?php echo base_url('progress'); ?>" class="slide-item"> Progress</a></li>
																		<li><a href="<?php echo base_url('carousel'); ?>" class="slide-item"> Carousels</a></li>
																	</ul>
																</div>
															</li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side10">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch16" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch16" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch17" class="onoffswitch2-checkbox">
																		<label for="onoffswitch17" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch18" class="onoffswitch2-checkbox">
																		<label for="onoffswitch18" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch19" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch19" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch20" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch20" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch21" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch21" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch22" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch22" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch23" class="onoffswitch2-checkbox">
																		<label for="onoffswitch23" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side11">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side12">
														<h5 class="my-3">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-database-2-line"></i><span
											class="side-menu__label">Components</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side13" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side14" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side15" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side16" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side13">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Components</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span class="sub-side-menu__label">Forms</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="<?php echo base_url('form-elements'); ?>" class="sub-slide-item"> Form Elements</a></li>
																	<li><a href="<?php echo base_url('form-layouts'); ?>" class="sub-slide-item"> Form Layouts</a></li>
																	<li><a href="<?php echo base_url('form-advanced'); ?>" class="sub-slide-item"> Form Advanced</a></li>
																	<li><a href="<?php echo base_url('form-editor'); ?>" class="sub-slide-item"> Form Editor</a></li>
																	<li><a href="<?php echo base_url('form-wizard'); ?>" class="sub-slide-item"> Form Wizard</a></li>
																	<li><a href="<?php echo base_url('form-validation'); ?>" class="sub-slide-item"> Form Validation</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span class="sub-side-menu__label">Tables</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="<?php echo base_url('tables'); ?>" class="sub-slide-item">Default table</a></li>
																	<li><a href="<?php echo base_url('datatable'); ?>" class="sub-slide-item"> Data Tables</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span class="sub-side-menu__label">Filemanager</span><i class="sub-angle fe fe-chevron-right"></i>
																</a>
																<ul class="sub-slide-menu">
																	<li><a href="<?php echo base_url('filemanager'); ?>" class="sub-slide-item"> Filemanager</a></li>
																	<li><a href="<?php echo base_url('filemanager-list'); ?>" class="sub-slide-item"> Filemanager List</a></li>
																	<li><a href="<?php echo base_url('filemanager-details'); ?>" class="sub-slide-item"> File Details</a></li>
																	<li><a href="<?php echo base_url('file-attachments'); ?>" class="sub-slide-item"> File Attachments</a></li>
																</ul>
															</li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side14">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch24" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch24" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch25" class="onoffswitch2-checkbox">
																		<label for="onoffswitch25" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch26" class="onoffswitch2-checkbox">
																		<label for="onoffswitch26" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch27" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch27" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch28" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch28" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch29" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch29" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch30" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch30" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch31" class="onoffswitch2-checkbox">
																		<label for="onoffswitch31" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side15">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side16">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="sub-category">
									<h3>Pre-build Pages</h3>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-pages-line"></i><span
											class="side-menu__label">Pages</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side17" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side18" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side19" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side20" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side17">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
															<li><a href="<?php echo base_url('profile'); ?>" class="slide-item"> Profile</a></li>
															<li><a href="<?php echo base_url('notify-list'); ?>" class="slide-item"> Notifications List</a></li>
															<li><a href="<?php echo base_url('time-line'); ?>" class="slide-item"> Timeline </a></li>
															<li><a href="<?php echo base_url('email-compose'); ?>" class="slide-item"> Mail-Compose</a></li>
															<li><a href="<?php echo base_url('email-inbox'); ?>" class="slide-item"> Mail-Inbox</a></li>
															<li><a href="<?php echo base_url('email-read'); ?>" class="slide-item"> Mail-Read</a></li>
															<li><a href="<?php echo base_url('gallery'); ?>" class="slide-item"> Gallery</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span
																		class="sub-side-menu__label">Extension</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="<?php echo base_url('about'); ?>" class="sub-slide-item"> About Company</a></li>
																	<li><a href="<?php echo base_url('services'); ?>" class="sub-slide-item"> Services</a></li>
																	<li><a href="<?php echo base_url('faq'); ?>" class="sub-slide-item"> FAQS</a></li>
																	<li><a href="<?php echo base_url('terms'); ?>" class="sub-slide-item"> Terms</a></li>
																	<li><a href="<?php echo base_url('invoice'); ?>" class="sub-slide-item"> Invoice</a></li>
																	<li><a href="<?php echo base_url('pricing'); ?>" class="sub-slide-item"> Pricing Tables</a></li>
																	<li><a href="<?php echo base_url('settings'); ?>" class="sub-slide-item"> Settings</a></li>
																	<li><a href="<?php echo base_url('blog'); ?>" class="sub-slide-item"> Blog</a></li>
																	<li><a href="<?php echo base_url('blog-details'); ?>" class="sub-slide-item"> Blog Details</a></li>
																	<li><a href="<?php echo base_url('blog-post'); ?>" class="sub-slide-item"> Blog Post</a></li>
																	<li><a href="<?php echo base_url('empty-page'); ?>" class="sub-slide-item"> Empty Page</a></li>
																	<li><a href="<?php echo base_url('construction'); ?>" class="sub-slide-item"> Under Construction</a></li>
																</ul>
															</li>
															<li><a href="<?php echo base_url('switcher'); ?>" class="slide-item"> Switcher</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side18">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch32" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch32" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch33" class="onoffswitch2-checkbox">
																		<label for="onoffswitch33" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch34" class="onoffswitch2-checkbox">
																		<label for="onoffswitch34" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch35" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch35" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch36" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch36" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch37" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch37" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch38" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch38" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch39" class="onoffswitch2-checkbox">
																		<label for="onoffswitch39" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side19">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side20">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-git-repository-private-line"></i><span
											class="side-menu__label">E-Commerce</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side21" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side22" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side23" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side24" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side21">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
															<li><a href="<?php echo base_url('shop'); ?>" class="slide-item"> Shop</a></li>
															<li><a href="<?php echo base_url('product-details'); ?>" class="slide-item"> Product Details</a></li>
															<li><a href="<?php echo base_url('cart'); ?>" class="slide-item"> Shopping Cart</a></li>
															<li><a href="<?php echo base_url('add-product'); ?>" class="slide-item"> Add Product</a></li>
															<li><a href="<?php echo base_url('wishlist'); ?>" class="slide-item"> Wishlist</a></li>
															<li><a href="<?php echo base_url('checkout'); ?>" class="slide-item"> Checkout</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side22">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch40" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch40" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch41" class="onoffswitch2-checkbox">
																		<label for="onoffswitch41" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch42" class="onoffswitch2-checkbox">
																		<label for="onoffswitch42" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch43" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch43" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch44" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch44" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch45" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch45" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch46" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch46" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch47" class="onoffswitch2-checkbox">
																		<label for="onoffswitch47" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side23">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side24">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="sub-category">
									<h3>Misc Pages</h3>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-bug-line"></i><span
											class="side-menu__label">Authentication</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side25" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side26" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side27" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side28" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side25">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
															<li><a href="<?php echo base_url('login'); ?>" class="slide-item"> Login</a></li>
															<li><a href="<?php echo base_url('register'); ?>" class="slide-item"> Register</a></li>
															<li><a href="<?php echo base_url('forgot-password'); ?>" class="slide-item"> Forgot Password</a></li>
															<li><a href="<?php echo base_url('lockscreen'); ?>" class="slide-item"> Lock screen</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span class="sub-side-menu__label">Error
																		Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="<?php echo base_url('error400'); ?>" class="sub-slide-item"> 400</a></li>
																	<li><a href="<?php echo base_url('error401'); ?>" class="sub-slide-item"> 401</a></li>
																	<li><a href="<?php echo base_url('error403'); ?>" class="sub-slide-item"> 403</a></li>
																	<li><a href="<?php echo base_url('error404'); ?>" class="sub-slide-item"> 404</a></li>
																	<li><a href="<?php echo base_url('error500'); ?>" class="sub-slide-item"> 500</a></li>
																	<li><a href="<?php echo base_url('error503'); ?>" class="sub-slide-item"> 503</a></li>
																</ul>
															</li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side26">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch48" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch48" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch49" class="onoffswitch2-checkbox">
																		<label for="onoffswitch49" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch50" class="onoffswitch2-checkbox">
																		<label for="onoffswitch50" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch51" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch51" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch52" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch52" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch53" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch53" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch54" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch54" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch55" class="onoffswitch2-checkbox">
																		<label for="onoffswitch55" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side27">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side28">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
										<i class="side-menu__icon ri-menu-unfold-fill"></i>
										<span class="side-menu__label">Submenu items</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side29" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side30" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side31" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side32" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side29">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
															<li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0)"><span
																		class="sub-side-menu__label">Submenu-2</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
																	<li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
																	<li class="sub-slide2">
																		<a class="sub-side-menu__item2" href="javascript:void(0)"
																			data-bs-toggle="sub-slide2"><span
																				class="sub-side-menu__label2">Submenu-2.3</span><i
																				class="sub-angle2 fe fe-chevron-right"></i></a>
																		<ul class="sub-slide-menu2">
																			<li><a href="javascript:void(0)"
																					class="sub-slide-item2">Submenu-2.3.1</a></li>
																			<li><a href="javascript:void(0)"
																					class="sub-slide-item2">Submenu-2.3.2</a></li>
																			<li><a href="javascript:void(0)"
																					class="sub-slide-item2">Submenu-2.3.3</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side30">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch56" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch56" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch57" class="onoffswitch2-checkbox">
																		<label for="onoffswitch57" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch58" class="onoffswitch2-checkbox">
																		<label for="onoffswitch58" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch59" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch59" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch60" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch60" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch61" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch61" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch62" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch62" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch63" class="onoffswitch2-checkbox">
																		<label for="onoffswitch63" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side31">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side32">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="sub-category">
									<h3>General</h3>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-map-pin-line"></i><span
											class="side-menu__label">Maps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side33" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side34" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side35" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side36" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side33">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
															<li><a href="<?php echo base_url('maps1'); ?>" class="slide-item">Leaflet Maps</a></li>
															<li><a href="<?php echo base_url('maps2'); ?>" class="slide-item">Mapel Maps</a></li>
															<li><a href="<?php echo base_url('maps'); ?>" class="slide-item">Vector Maps</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side34">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch64" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch64" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch65" class="onoffswitch2-checkbox">
																		<label for="onoffswitch65" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch66" class="onoffswitch2-checkbox">
																		<label for="onoffswitch66" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch67" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch67" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch68" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch68" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch69" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch69" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch70" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch70" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch71" class="onoffswitch2-checkbox">
																		<label for="onoffswitch71" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side35">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side36">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-bar-chart-2-line"></i><span
											class="side-menu__label">Charts</span><span
											class="badge bg-secondary side-badge">5</span><i
											class="angle fe fe-chevron-right hor-angle"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side37" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side38" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side39" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side40" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side37">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
															<li><a href="<?php echo base_url('chart-chartist'); ?>" class="slide-item">Chart Js</a></li>
															<li><a href="<?php echo base_url('chart-flot'); ?>" class="slide-item"> Flot Charts</a></li>
															<li><a href="<?php echo base_url('chart-echart'); ?>" class="slide-item"> ECharts</a></li>
															<li><a href="<?php echo base_url('chart-morris'); ?>" class="slide-item"> Morris Charts</a></li>
															<li><a href="<?php echo base_url('chart-nvd3'); ?>" class="slide-item"> Nvd3 Charts</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side38">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch72" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch72" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch73" class="onoffswitch2-checkbox">
																		<label for="onoffswitch73" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch74" class="onoffswitch2-checkbox">
																		<label for="onoffswitch74" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch75" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch75" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch76" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch76" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch77" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch77" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch78" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch78" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch79" class="onoffswitch2-checkbox">
																		<label for="onoffswitch79" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side39">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side40">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
										class="side-menu__icon ri-remixicon-line"></i><span
										class="side-menu__label">Icons</span><i
										class="angle fe fe-chevron-right"></i>
									</a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side41" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side42" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side43" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side44" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side41">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
															<li><a href="<?php echo base_url('icons'); ?>" class="slide-item"> Font Awesome</a></li>
															<li><a href="<?php echo base_url('icons2'); ?>" class="slide-item"> Material Design Icons</a></li>
															<li><a href="<?php echo base_url('icons3'); ?>" class="slide-item"> Simple Line Icons</a></li>
															<li><a href="<?php echo base_url('icons4'); ?>" class="slide-item"> Feather Icons</a></li>
															<li><a href="<?php echo base_url('icons5'); ?>" class="slide-item"> Ionic Icons</a></li>
															<li><a href="<?php echo base_url('icons6'); ?>" class="slide-item"> Flag Icons</a></li>
															<li><a href="<?php echo base_url('icons7'); ?>" class="slide-item"> pe7 Icons</a></li>
															<li><a href="<?php echo base_url('icons8'); ?>" class="slide-item"> Themify Icons</a></li>
															<li><a href="<?php echo base_url('icons9'); ?>" class="slide-item">Typicons Icons</a></li>
															<li><a href="<?php echo base_url('icons10'); ?>" class="slide-item">Weather Icons</a></li>
															<li><a href="<?php echo base_url('icons11'); ?>" class="slide-item">Bootstrap Icons</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side42">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch80" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch80" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch81" class="onoffswitch2-checkbox">
																		<label for="onoffswitch81" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch82" class="onoffswitch2-checkbox">
																		<label for="onoffswitch82" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch83" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch83" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch84" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch84" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch85" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch85" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch86" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch86" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch87" class="onoffswitch2-checkbox">
																		<label for="onoffswitch87" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side43">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side44">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/5.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/6.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/6.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/4.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/5.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/male/2.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/male/2.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url('assets/images/users/female/3.jpg'); ?>" style="background: url(&quot;<?php echo base_url('assets/images/users/female/3.jpg&quot;'); ?>) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</li>
							</ul>
							<div class="slide-right" id="slide-right">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg>
							</div>
						</div>
					</div>
				</div>