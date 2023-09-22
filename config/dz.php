<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'Eres Laravel'),


	'public' => [
		'global' => [
			'css' => [
				'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				'css/style.css',
			],

			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'EresAdminController_dashboard' => [
					'vendor/owl-carousel/owl.carousel.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'EresAdminController_dashboard_2' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
				'EresAdminController_patient_list' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/datatables/css/jquery.dataTables.min.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
                'EresAdminController_patient_details' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
                'EresAdminController_doctor_list' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/datatables/css/jquery.dataTables.min.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
                'EresAdminController_doctor_detail' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/chartist/css/chartist.min.css',
				],
                'EresAdminController_page_review' => [
                    'vendor/owl-carousel/owl.carousel.css',
				],
				'EresAdminController_appointment' => [
                    'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
                    'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
                    'vendor/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css',
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/datatables/css/jquery.dataTables.min.css',
                    'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
                'EresAdminController_staff' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
                    'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
                    'vendor/datatables/css/jquery.dataTables.min.css',
				],
                'EresAdminController_staff_profile' => [
                    'vendor/owl-carousel/owl.carousel.css',
                    'vendor/datatables/css/jquery.dataTables.min.css',
                    'https://cdn.lineicons.com/2.0/LineIcons.css',
				],
                'EresAdminController_app_profile' => [
                    'vendor/lightgallery/dist/css/lightgallery.css',
                    'vendor/lightgallery/dist/css/lg-thumbnail.css',
                    'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				'EresAdminController_post_details' => [
                    'vendor/lightgallery/dist/css/lightgallery.css',
                    'vendor/lightgallery/dist/css/lg-thumbnail.css',
                    'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				'EresAdminController_email_compose' => [
                    'vendor/dropzone/dist/dropzone.css',
				],
				'EresAdminController_email_read' => [
				],
				'EresAdminController_email_inbox' => [
				 ],
				'EresAdminController_app_calender' => [
                    'vendor/fullcalendar/css/main.min.css',
				 ],
				'EresAdminController_ecom_product_grid' => [
				],
				'EresAdminController_ecom_product_list' => [
                    'vendor/star-rating/star-rating-svg.css',
				],
				'EresAdminController_ecom_product_detail' => [
                    'vendor/star-rating/star-rating-svg.css',
                    'vendor/owl-carousel/owl.carousel.css',
				],
				'EresAdminController_ecom_product_order' => [
				],
				'EresAdminController_ecom_checkout' => [
				],
				'EresAdminController_ecom_invoice' => [
				],
				'EresAdminController_ecom_customers' => [
				],

				'EresAdminController_chart_flot' => [
				],
				'EresAdminController_chart_morris' => [
                    'vendor/morris/morris.css',
				],
				'EresAdminController_chart_chartjs' => [
				],
				'EresAdminController_chart_chartist' => [
                    'vendor/chartist/css/chartist.min.css',
				],
				'EresAdminController_chart_sparkline' => [
				],
				'EresAdminController_chart_peity' => [
				],

				'EresAdminController_ui_accordion' => [
				],
				'EresAdminController_ui_alert' => [
				],
				'EresAdminController_ui_badge' => [
				],
				'EresAdminController_ui_button' => [
				],
				'EresAdminController_ui_button_group' => [
				],
				'EresAdminController_ui_card' => [

				],
				'EresAdminController_ui_carousel' => [
				],
				'EresAdminController_ui_dropdown' => [
				],

				'EresAdminController_ui_list_group' => [
				],
				'EresAdminController_ui_media_object' => [
				],
				'EresAdminController_ui_modal' => [
				],
				'EresAdminController_ui_pagination' => [
				],
				'EresAdminController_ui_popover' => [
				],
				'EresAdminController_ui_progressbar' => [
				],
				'EresAdminController_ui_tab' => [
				],
				'EresAdminController_ui_typography' => [
				],
				'EresAdminController_ui_grid' => [
				],
				'EresAdminController_uc_select2' => [
                    'vendor/select2/css/select2.min.css',
				],
				'EresAdminController_uc_nestable' => [
                    'vendor/nestable2/css/jquery.nestable.min.css',
				],
				'EresAdminController_uc_noui_slider' => [
                    'vendor/nouislider/nouislider.min.css',
				],
				'EresAdminController_uc_sweetalert' => [
                    'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'EresAdminController_uc_toastr' => [
                    'vendor/toastr/css/toastr.min.css',
				],

				'EresAdminController_map_jqvmap' => [
                    'vendor/jqvmap/css/jqvmap.min.css',
				],
				'EresAdminController_uc_lightgallery' => [
                    'vendor/sweetalert2/dist/sweetalert2.min.css',
                    'vendor/lightgallery/dist/css/lightgallery.css',
                    'vendor/lightgallery/dist/css/lg-thumbnail.css',
                    'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				'EresAdminController_widget_basic' => [
                    'vendor/chartist/css/chartist.min.css',
				],
				'EresAdminController_form_element' => [
				],
				'EresAdminController_form_wizard' => [
                    'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
				],
				'EresAdminController_form_ckeditor' => [
				],
				'EresAdminController_form_pickers' => [
                    'vendor/bootstrap-daterangepicker/daterangepicker.css',
                    'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
                    'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
                    'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
                    'vendor/pickadate/themes/default.css',
                    'vendor/pickadate/themes/default.date.css',
                    'https://fonts.googleapis.com/icon?family=Material+Icons',
				],
				'EresAdminController_form_validation' => [
				],
				'EresAdminController_table_bootstrap_basic' => [
				],
				'EresAdminController_table_datatable_basic' => [
                    'vendor/datatables/css/jquery.dataTables.min.css',
				],

				'EresAdminController_page_login' => [
				],
				'EresAdminController_page_register' => [
				],
				'EresAdminController_page_error_400' => [
				],
				'EresAdminController_page_error_403' => [
				],
				'EresAdminController_page_error_404' => [
				],
				'EresAdminController_page_error_500' => [
				],
				'EresAdminController_page_error_503' => [
				],

				'EresAdminController_page_lock_screen' => [
				],
                'EresAdminController_page_forgot_password' => [
				],



			],
			'js' => [
				'EresAdminController_dashboard' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/owl-carousel/owl.carousel.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'EresAdminController_dashboard_2' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/apexchart/apexchart.js',
                    'js/dashboard/dashboard-1.js',
				],
				'EresAdminController_appointment' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
                    'js/plugins-init/clock-picker-init.js',
                    'vendor/bootstrap-datetimepicker/js/moment.js',
                    'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
                    'vendor/datatables/js/jquery.dataTables.min.js',
                    'vendor/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js',
				],
				'EresAdminController_patient_list' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/datatables/js/jquery.dataTables.min.js',
				],
                'EresAdminController_patient_details' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/peity/jquery.peity.min.js',
                    'js/plugins-init/piety-init.js',

				],
                'EresAdminController_doctor_list' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/datatables/js/jquery.dataTables.min.js',
				],
                'EresAdminController_doctor_detail' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/chartist/js/chartist.min.js',
                    'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
				],
                'EresAdminController_staff' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
                    'js/plugins-init/clock-picker-init.js',
                    'vendor/bootstrap-datetimepicker/js/moment.js',
                    'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
                    'vendor/datatables/js/jquery.dataTables.min.js',
				],

                'EresAdminController_staff_profile' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/datatables/js/jquery.dataTables.min.js',
				],

                'EresAdminController_page_review' => [
				],

                'EresAdminController_app_profile' => [
                    'vendor/lightgallery/dist/lightgallery.min.js',
                    'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
                    'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'EresAdminController_post_details' => [
                    'vendor/lightgallery/dist/lightgallery.min.js',
                    'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
                    'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'EresAdminController_email_compose' => [
                    'vendor/dropzone/dist/dropzone.js',
				],
				'EresAdminController_email_read' => [
				],
				'EresAdminController_email_inbox' => [
				 ],
				'EresAdminController_app_calender' => [
                    'vendor/jqueryui/js/jquery-ui.min.js',
                    'vendor/moment/moment.min.js',
                    'vendor/fullcalendar/js/main.min.js',
                    'js/plugins-init/fullcalendar-init.js',
				 ],

				 'EresAdminController_ecom_product_grid' => [
                    'vendor/highlightjs/highlight.pack.min.js',
				],
				'EresAdminController_ecom_product_list' => [
                    'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'EresAdminController_ecom_product_detail' => [
                    'vendor/owl-carousel/owl.carousel.js',
                    'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'EresAdminController_ecom_product_order' => [
                    'vendor/highlightjs/highlight.pack.min.js',
				],
				'EresAdminController_ecom_checkout' => [
                    'vendor/highlightjs/highlight.pack.min.js',
				],
				'EresAdminController_ecom_invoice' => [
                    'vendor/highlightjs/highlight.pack.min.js',
				],
				'EresAdminController_ecom_customers' => [
                    'vendor/highlightjs/highlight.pack.min.js',
				],


				'EresAdminController_chart_flot' => [
                    'vendor/flot/jquery.flot.js',
                    'vendor/flot/jquery.flot.pie.js',
                    'vendor/flot/jquery.flot.resize.js',
                    'vendor/flot-spline/jquery.flot.spline.min.js',
                    'js/plugins-init/flot-init.js',
				],
				'EresAdminController_chart_morris' => [
                    'vendor/morris/raphael-min.js',
                    'vendor/morris/morris.min.js',
                    'js/plugins-init/morris-init.js',
				],
				'EresAdminController_chart_chartjs' => [
                    'vendor/chart.js/Chart.bundle.min.js',
                    'js/plugins-init/chartjs-init.js',
				],
				'EresAdminController_chart_chartist' => [
                    'vendor/chartist/js/chartist.min.js',
                    'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
                    'js/plugins-init/chartist-init.js',
				],
				'EresAdminController_chart_sparkline' => [
                    'vendor/jquery-sparkline/jquery.sparkline.min.js',
                    'js/plugins-init/sparkline-init.js',
				],
				'EresAdminController_chart_peity' => [
                    'vendor/peity/jquery.peity.min.js',
                    'js/plugins-init/piety-init.js',
				],

				'EresAdminController_ui_accordion' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_alert' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_badge' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_button' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_button_group' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_card' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_carousel' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_dropdown' => [
                    'js/highlight.min.js',
				],

				'EresAdminController_ui_list_group' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_media_object' => [
				],
				'EresAdminController_ui_modal' => [
				],
				'EresAdminController_ui_pagination' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_popover' => [
				],
				'EresAdminController_ui_progressbar' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_tab' => [
                    'js/highlight.min.js',
				],
				'EresAdminController_ui_typography' => [
				],
				'EresAdminController_ui_grid' => [
				],
				'EresAdminController_uc_select2' => [
                    'vendor/select2/js/select2.full.min.js',
                    'js/plugins-init/select2-init.js',
				],
				'EresAdminController_uc_nestable' => [
                    'vendor/nestable2/js/jquery.nestable.min.js',
                    'js/plugins-init/nestable-init.js',
				],
				'EresAdminController_uc_noui_slider' => [
                    'vendor/nouislider/nouislider.min.js',
                    'vendor/wnumb/wNumb.js',
                    'js/plugins-init/nouislider-init.js'
				],
				'EresAdminController_uc_sweetalert' => [
                    'vendor/sweetalert2/dist/sweetalert2.min.js',
                    'js/plugins-init/sweetalert.init.js',
				],
				'EresAdminController_uc_toastr' => [
                    'vendor/toastr/js/toastr.min.js',
                    'js/plugins-init/toastr-init.js',
				],

				'EresAdminController_map_jqvmap' => [
                    'vendor/jqvmap/js/jquery.vmap.min.js',
                    'vendor/jqvmap/js/jquery.vmap.world.js',
                    'vendor/jqvmap/js/jquery.vmap.usa.js',
                    'js/plugins-init/jqvmap-init.js',
				],
				'EresAdminController_uc_lightgallery' => [
                    'vendor/lightgallery/dist/lightgallery.min.js',
                    'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
                    'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'EresAdminController_widget_basic' => [
                    'vendor/chartist/js/chartist.min.js',
                    'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
                    'vendor/flot/jquery.flot.js',
                    'vendor/flot/jquery.flot.pie.js',
                    'vendor/flot/jquery.flot.resize.js',
                    'vendor/flot-spline/jquery.flot.spline.min.js',
                    'vendor/jquery-sparkline/jquery.sparkline.min.js',
                    'js/plugins-init/sparkline-init.js',
                    'vendor/peity/jquery.peity.min.js',
                    'js/plugins-init/piety-init.js',
                    'vendor/chart.js/Chart.bundle.min.js',
                    'js/plugins-init/widgets-script-init.js',
				],
				'EresAdminController_form_element' => [
				],
				'EresAdminController_form_wizard' => [
                    'vendor/jquery-steps/build/jquery.steps.min.js',
                    'vendor/jquery-validation/jquery.validate.min.js',
                    'js/plugins-init/jquery.validate-init.js',
                    'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
				],
				'EresAdminController_form_ckeditor' => [
                    'vendor/ckeditor/ckeditor.js',
				],
				'EresAdminController_form_pickers' => [
                    'vendor/moment/moment.min.js',
                    'vendor/bootstrap-daterangepicker/daterangepicker.js',
                    'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
                    'vendor/jquery-asColor/jquery-asColor.min.js',
                    'vendor/jquery-asGradient/jquery-asGradient.min.js',
                    'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
                    'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
                    'vendor/pickadate/picker.js',
                    'vendor/pickadate/picker.time.js',
                    'vendor/pickadate/picker.date.js',
                    'js/plugins-init/bs-daterange-picker-init.js',
                    'js/plugins-init/clock-picker-init.js',
                    'js/plugins-init/jquery-asColorPicker.init.js',
                    'js/plugins-init/material-date-picker-init.js',
                    'js/plugins-init/pickadate-init.js',
				],
				'EresAdminController_form_validation' => [
                    'vendor/jquery-validation/jquery.validate.min.js',
                    'js/plugins-init/jquery.validate-init.js',
				],
				'EresAdminController_table_bootstrap_basic' => [
				],
				'EresAdminController_table_datatable_basic' => [
                    'vendor/datatables/js/jquery.dataTables.min.js',
                    'js/plugins-init/datatables.init.js',
				],

				'EresAdminController_page_login' => [
				],
				'EresAdminController_page_register' => [
				],
				'EresAdminController_page_error_400' => [
				],
				'EresAdminController_page_error_403' => [
				],
				'EresAdminController_page_error_404' => [
				],
				'EresAdminController_page_error_500' => [
				],
				'EresAdminController_page_error_503' => [
				],

				'EresAdminController_page_lock_screen' => [
				],
                'EresAdminController_page_forgot_password' => [
                ],
			]
		],
	]
];
