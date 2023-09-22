<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <?php $menu = App\Models\Menu\Menu::listado_menu();?>
            <li><a href="{{url('index')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-home-1"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <?php
               /* foreach ($menu as $key => $rowMenu) {
                    if($rowMenu->Opciones == '*'){
                        echo '
                            <li>
                                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span class="nav-text">' . $rowMenu->Texto . ' </span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="."><i class="flaticon-381-user-9"></i> Empleados</a></li>
                                    <li><a href="."><i class="flaticon-381-user-9"></i> Pacientes</a></li>
                                </ul>
                            </li>
                        ';
                    }
                }*/
            ?>
            <hr>
            <hr>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Mantenimiento</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('empleados')}}"><i class="flaticon-381-user-9"></i> Empleados</a></li>
                    <li><a href="{{url('pacientes')}}"><i class="flaticon-381-user-9"></i> Pacientes</a></li>
                </ul>
            </li>

            <hr>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Mantenimiento</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('empleados')}}"><i class="flaticon-381-user-9"></i> Empleados</a></li>
                    <li><a href="{{url('pacientes')}}"><i class="flaticon-381-user-9"></i> Pacientes</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Configuración</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('tipos_documentos_identidad')}}"><i class="flaticon-381-user-9"></i> T. Doc. Identidad</a></li>
                    <li><a href="{{url('tipos_empleados')}}"><i class="flaticon-381-user-9"></i> T. Empleados</a></li>
                    <li><a href="{{url('tipos_condiciones_trabajo')}}"><i class="flaticon-381-user-9"></i> T. Cond. Trabajo</a></li>
                    <li><a href="{{url('tipos_cargo')}}"><i class="flaticon-381-user-9"></i> T. Cargo</a></li>
                    <li><a href="{{url('tipos_destacados')}}"><i class="flaticon-381-user-9"></i> T. Destacado</a></li>
                    <li><a href="{{url('tipos_sexo')}}"><i class="flaticon-381-user-9"></i> T. Sexo</a></li>
                    <li><a href="{{url('tipos_turnos')}}"><i class="flaticon-381-user-9"></i> Turnos</a></li>
                    <li><a href="{{url('tipos_cama')}}"><i class="flaticon-381-user-9"></i> T. Cama</a></li>
                    <li><a href="{{url('his_colegio')}}"><i class="flaticon-381-user-9"></i> HIS Colegio</a></li>
                    <li><a href="{{url('roles')}}"><i class="flaticon-381-user-9"></i> Roles</a></li>

                </ul>
            </li>
            <hr>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">

                    <li><a href="{{url('index-2')}}">Dashboard Dark</a></li>
                    <li><a href="{{url('patient-list')}}">Patient</a></li>
                    <li><a href="{{url('patient-details')}}">Patient Details</a></li>
                    <li><a href="{{url('doctor-list')}}">Doctor</a></li>
                    <li><a href="{{url('doctor-detail')}}">Doctor Detail</a></li>
                    <li><a href="{{url('page-review')}}">Review</a></li>
                </ul>
            </li>
            <li><a href="{{url('appointment')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-menu"></i>
                    <span class="nav-text">Appointment</span>
                </a>
            </li>
            <li><a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">Staff</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('staff')}}">Staff</a></li>
                    <li><a href="{{url('staff-profile')}}">Staff Profie</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('app-profile')}}">Profile</a></li>
                    <li><a href="{{url('post-details')}}">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('email-compose')}}">Compose</a></li>
                            <li><a href="{{url('email-inbox')}}">Inbox</a></li>
                            <li><a href="{{url('email-read')}}">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('app-calender')}}">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('ecom-product-grid')}}">Product Grid</a></li>
                            <li><a href="{{url('ecom-product-list')}}">Product List</a></li>
                            <li><a href="{{url('ecom-product-detail')}}">Product Details</a></li>
                            <li><a href="{{url('ecom-product-order')}}">Order</a></li>
                            <li><a href="{{url('ecom-checkout')}}">Checkout</a></li>
                            <li><a href="{{url('ecom-invoice')}}">Invoice</a></li>
                            <li><a href="{{url('ecom-customers')}}">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('chart-flot')}}">Flot</a></li>
                    <li><a href="{{url('chart-morris')}}">Morris</a></li>
                    <li><a href="{{url('chart-chartjs')}}">Chartjs</a></li>
                    <li><a href="{{url('chart-chartist')}}">Chartist</a></li>
                    <li><a href="{{url('chart-sparkline')}}">Sparkline</a></li>
                    <li><a href="{{url('chart-peity')}}">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('ui-accordion')}}">Accordion</a></li>
                    <li><a href="{{url('ui-alert')}}">Alert</a></li>
                    <li><a href="{{url('ui-badge')}}">Badge</a></li>
                    <li><a href="{{url('ui-button')}}">Button</a></li>
                    <li><a href="{{url('ui-modal')}}">Modal</a></li>
                    <li><a href="{{url('ui-button-group')}}">Button Group</a></li>
                    <li><a href="{{url('ui-list-group')}}">List Group</a></li>
                    <li><a href="{{url('ui-media-object')}}">Media Object</a></li>
                    <li><a href="{{url('ui-card')}}">Cards</a></li>
                    <li><a href="{{url('ui-carousel')}}">Carousel</a></li>
                    <li><a href="{{url('ui-dropdown')}}">Dropdown</a></li>
                    <li><a href="{{url('ui-popover')}}">Popover</a></li>
                    <li><a href="{{url('ui-progressbar')}}">Progressbar</a></li>
                    <li><a href="{{url('ui-tab')}}">Tab</a></li>
                    <li><a href="{{url('ui-typography')}}">Typography</a></li>
                    <li><a href="{{url('ui-pagination')}}">Pagination</a></li>
                    <li><a href="{{url('ui-grid')}}">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('uc-select2')}}">Select 2</a></li>
                    <li><a href="{{url('uc-nestable')}}">Nestedable</a></li>
                    <li><a href="{{url('uc-noui-slider')}}">Noui Slider</a></li>
                    <li><a href="{{url('uc-sweetalert')}}">Sweet Alert</a></li>
                    <li><a href="{{url('uc-toastr')}}">Toastr</a></li>
                    <li><a href="{{url('map-jqvmap')}}">Jqv Map</a></li>
                    <li><a href="{{url('uc-lightgallery')}}">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{url('widget-basic')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('form-element')}}">Form Elements</a></li>
                    <li><a href="{{url('form-wizard')}}">Wizard</a></li>
                   <li><a href="{{url('form-ckeditor')}}">CkEditor</a></li>
                    <li><a href="{{url('form-pickers')}}">Pickers</a></li>
                    <li><a href="{{url('form-validation-jquery')}}">Jquery Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('table-bootstrap-basic')}}">Bootstrap</a></li>
                    <li><a href="{{url('table-datatable-basic')}}">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('page-register')}}">Register</a></li>
                    <li><a href="{{url('page-login')}}">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('page-error-400')}}">Error 400</a></li>
                            <li><a href="{{url('page-error-403')}}">Error 403</a></li>
                            <li><a href="{{url('page-error-404')}}">Error 404</a></li>
                            <li><a href="{{url('page-error-500')}}">Error 500</a></li>
                            <li><a href="{{url('page-error-503')}}">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('page-lock-screen')}}">Lock Screen</a></li>
                </ul>
            </li>
        </ul>

        <div class="plus-box">
            <p class="fs-16 font-w500 mb-1">Check your job schedule</p>
            <a class="text-white fs-26" href="javascript:;"><i class="las la-long-arrow-alt-right"></i></a>
        </div>
        <div class="copyright">
            <p class="fs-14 font-w200"><strong class="font-w400">Eres Hospital Admin Dashboard</strong> © 2023 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>
