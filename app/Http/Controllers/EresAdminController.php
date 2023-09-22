<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EresAdminController extends Controller
{

    public function dashboard(){
		$page_title = 'Dashboard';
        $page_description = 'Some description for the page';
		return view('eres.dashboard.index', compact('page_title', 'page_description'));
	}

    public function dashboard_2(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('eres.dashboard.index_2', compact('page_title', 'page_description'));
    }

    public function patient_list  (){
        $page_title = 'Patient';
        $page_description = 'Some description for the page';
        return view('eres.patient.list  ', compact('page_title', 'page_description'));
    }

    public function patient_details (){
        $page_title = 'Patient';
        $page_description = 'Some description for the page';
        return view('eres.patient.details ', compact('page_title', 'page_description'));
    }

    public function doctor_list  (){
        $page_title = 'Doctor';
        $page_description = 'Some description for the page';
        return view('eres.doctor.list  ', compact('page_title', 'page_description'));
    }

    public function doctor_detail (){
        $page_title = 'Doctor';
        $page_description = 'Some description for the page';
        return view('eres.doctor.detail ', compact('page_title', 'page_description'));
    }

    public function page_review(){
        $page_title = 'Review';
        $page_description = 'Some description for the page';
        return view('eres.page.review', compact('page_title', 'page_description'));
    }

    public function appointment(){
        $page_title = 'Appointment ';
        $page_description = 'Some description for the page';
        return view('eres.app.appointment ', compact('page_title', 'page_description'));
    }
    public function staff (){
        $page_title = 'Staff  ';
        $page_description = 'Some description for the page';
        return view('eres.staff.staff', compact('page_title', 'page_description'));
    }

    public function staff_profile (){
        $page_title = 'Profile  ';
        $page_description = 'Some description for the page';
        return view('eres.staff.staff_profile', compact('page_title', 'page_description'));
    }

    public function app_profile(){
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
        return view('eres.app.profile', compact('page_title', 'page_description'));
    }
    public function post_details(){
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
        return view('eres.app.post_details', compact('page_title', 'page_description'));
    }

    public function email_compose(){
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
        return view('eres.message.compose', compact('page_title', 'page_description'));
    }
    public function email_read(){
        $page_title = 'Read';
        $page_description = 'Some description for the page';
        return view('eres.message.read', compact('page_title', 'page_description'));
    }
    public function email_inbox(){
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
        return view('eres.message.inbox', compact('page_title', 'page_description'));
    }
    public function app_calender(){
        $page_title = 'Calendar';
        $page_description = 'Some description for the page';
        return view('eres.app.calender', compact('page_title', 'page_description'));
    }


    public function ecom_product_grid(){
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
        return view('eres.ecom.product_grid', compact('page_title', 'page_description'));
    }
    public function ecom_product_list(){
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
        return view('eres.ecom.product_list', compact('page_title', 'page_description'));
    }
    public function ecom_product_detail(){
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
        return view('eres.ecom.product_detail', compact('page_title', 'page_description'));
    }
    public function ecom_product_order(){
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
        return view('eres.ecom.product_order', compact('page_title', 'page_description'));
    }
    public function ecom_checkout(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('eres.ecom.checkout', compact('page_title', 'page_description'));
    }
    public function ecom_invoice(){
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
        return view('eres.ecom.invoice', compact('page_title', 'page_description'));
    }
    public function ecom_customers(){
        $page_title = 'Customers';
        $page_description = 'Some description for the page';
        return view('eres.ecom.customers', compact('page_title', 'page_description'));
    }
    public function chart_flot(){
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';
        return view('eres.chart.flot', compact('page_title', 'page_description'));
    }
    public function chart_morris(){
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';
        return view('eres.chart.morris', compact('page_title', 'page_description'));
    }
    public function chart_chartjs(){
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';
        return view('eres.chart.chartjs', compact('page_title', 'page_description'));
    }
    public function chart_chartist(){
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';
        return view('eres.chart.chartist', compact('page_title', 'page_description'));
    }
    public function chart_sparkline(){
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';
        return view('eres.chart.sparkline', compact('page_title', 'page_description'));
    }
    public function chart_peity(){
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';
        return view('eres.chart.peity', compact('page_title', 'page_description'));
    }
    public function ui_accordion(){
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
        return view('eres.ui.accordion', compact('page_title', 'page_description'));
    }
    public function ui_alert(){
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
        return view('eres.ui.alert', compact('page_title', 'page_description'));
    }
    public function ui_badge(){
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
        return view('eres.ui.badge', compact('page_title', 'page_description'));
    }
    public function ui_button(){
        $page_title = 'Button';
        $page_description = 'Some description for the page';
        return view('eres.ui.button', compact('page_title', 'page_description'));
    }
    public function ui_modal(){
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
        return view('eres.ui.modal', compact('page_title', 'page_description'));
    }
    public function ui_button_group(){
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
        return view('eres.ui.button_group', compact('page_title', 'page_description'));
    }
    public function ui_list_group(){
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
        return view('eres.ui.list_group', compact('page_title', 'page_description'));
    }
    public function ui_media_object (){
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
        return view('eres.ui.media_object ', compact('page_title', 'page_description'));
    }

    public function ui_card(){
        $page_title = 'Card';
        $page_description = 'Some description for the page';
        return view('eres.ui.card', compact('page_title', 'page_description'));
    }
    public function ui_carousel(){
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
        return view('eres.ui.carousel', compact('page_title', 'page_description'));
    }
    public function ui_dropdown(){
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
        return view('eres.ui.dropdown', compact('page_title', 'page_description'));
    }
    public function ui_popover(){
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
        return view('eres.ui.popover', compact('page_title', 'page_description'));
    }
    public function ui_progressbar(){
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
        return view('eres.ui.progressbar', compact('page_title', 'page_description'));
    }
    public function ui_tab(){
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
        return view('eres.ui.tab', compact('page_title', 'page_description'));
    }
    public function ui_typography(){
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
        return view('eres.ui.typography', compact('page_title', 'page_description'));
    }
    public function ui_pagination(){
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
        return view('eres.ui.pagination', compact('page_title', 'page_description'));
    }
    public function ui_grid(){
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
        return view('eres.ui.grid', compact('page_title', 'page_description'));
    }
    public function uc_select2(){
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
        return view('eres.uc.select2', compact('page_title', 'page_description'));
    }
    public function uc_nestable(){
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
        return view('eres.uc.nestable', compact('page_title', 'page_description'));
    }
    public function uc_noui_slider(){
        $page_title = 'Noui  Slider';
        $page_description = 'Some description for the page';
        return view('eres.uc.noui_slider', compact('page_title', 'page_description'));
    }
    public function uc_sweetalert(){
        $page_title = 'Sweet Alert';
        $page_description = 'Some description for the page';
        return view('eres.uc.sweetalert', compact('page_title', 'page_description'));
    }
    public function uc_toastr(){
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
        return view('eres.uc.toastr', compact('page_title', 'page_description'));
    }
    public function map_jqvmap(){
        $page_title = 'Jqvmap';
        $page_description = 'Some description for the page';
        return view('eres.map.jqvmap', compact('page_title', 'page_description'));
    }
    public function uc_lightgallery(){
        $page_title = 'Light Gallery';
        $page_description = 'Some description for the page';
        return view('eres.uc.lightgallery', compact('page_title', 'page_description'));
    }
    public function widget_basic(){
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
        return view('eres.widget_basic.widget_basic', compact('page_title', 'page_description'));
    }
    public function form_element(){
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
        return view('eres.form.element', compact('page_title', 'page_description'));
    }
    public function form_wizard(){
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
        return view('eres.form.wizard', compact('page_title', 'page_description'));
    }
    public function form_ckeditor(){
        $page_title = 'CkEditor';
        $page_description = 'Some description for the page';
        return view('eres.form.ckeditor', compact('page_title', 'page_description'));
    }
    public function form_pickers(){
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
        return view('eres.form.pickers', compact('page_title', 'page_description'));
    }
    public function form_validation_jquery (){
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
        return view('eres.form.validation', compact('page_title', 'page_description'));
    }
    public function table_bootstrap_basic(){
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        return view('eres.table.bootstrap_basic', compact('page_title', 'page_description'));
    }
    public function table_datatable_basic(){
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
        return view('eres.table.datatable_basic', compact('page_title', 'page_description'));
    }
    public function page_login (){
        $page_title = 'Login';
        $page_description = 'Some description for the page';
        return view('eres.page.login', compact('page_title', 'page_description'));
    }
    public function page_register(){
        $page_title = 'Register';
        $page_description = 'Some description for the page';
        return view('eres.page.register', compact('page_title', 'page_description'));
    }
    public function page_forgot_password(){
        $page_title = 'Forgot Password';
        $page_description = 'Some description for the page';
        return view('eres.page.forgot_password', compact('page_title', 'page_description'));
    }

    public function page_error_400(){
        $page_title = 'Error 400';
        $page_description = 'Some description for the page';
        return view('eres.page.error_400', compact('page_title', 'page_description'));
    }
    public function page_error_403(){
        $page_title = 'Error 403';
        $page_description = 'Some description for the page';
        return view('eres.page.error_403', compact('page_title', 'page_description'));
    }
    public function page_error_404(){
        $page_title = 'Error 404';
        $page_description = 'Some description for the page';
        return view('eres.page.error_404', compact('page_title', 'page_description'));
    }
    public function page_error_500(){
        $page_title = 'Error 500';
        $page_description = 'Some description for the page';
        return view('eres.page.error_500', compact('page_title', 'page_description'));
    }
    public function page_error_503(){
        $page_title = 'Error 503';
        $page_description = 'Some description for the page';
        return view('eres.page.error_503', compact('page_title', 'page_description'));
    }

    public function page_lock_screen(){
        $page_title = 'Lock Screen';
        $page_description = 'Some description for the page';
        return view('eres.page.lock_screen', compact('page_title', 'page_description'));
    }


}
