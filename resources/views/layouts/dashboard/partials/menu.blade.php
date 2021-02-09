<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo"></span>
                        <h2 class="brand-text mb-0">{{ setting('site_title', 'Laravel') }}</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="nav-link d-flex align-items-center" href="{{route('home')}}"><i data-feather="home"></i><span data-i18n="Home">Home</span></a></li>
                <li class="nav-item @if($name = Route::currentRouteName() === 'settings.index') active @endif"><a class="nav-link d-flex align-items-center" href="{{route('settings.index')}}"><i data-feather="settings"></i><span data-i18n="settings">Settings</span></a></li>
                <li class="nav-item @if($name = Route::currentRouteName() === 'verification.index') active @endif"><a class="nav-link d-flex align-items-center" href="{{route('verification.index')}}"><i data-feather="lock"></i><span data-i18n="verification">Verification</span></a></li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="{{route('login')}}" data-toggle="dropdown"><i data-feather="layout"></i><span data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-boxed.html" data-toggle="dropdown" data-i18n="Layout Boxed"><span data-i18n="Layout Boxed">Layout Boxed</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-without-menu.html" data-toggle="dropdown" data-i18n="Without Menu"><span data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-empty.html" data-toggle="dropdown" data-i18n="Layout Empty"><span data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-blank.html" data-toggle="dropdown" data-i18n="Layout Blank"><span data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Form Elements"><i data-feather="copy"></i><span data-i18n="Form Elements">Form Elements</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input.html" data-toggle="dropdown" data-i18n="Input"><i data-feather="circle"></i><span data-i18n="Input">Input</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-groups.html" data-toggle="dropdown" data-i18n="Input Groups"><i data-feather="circle"></i><span data-i18n="Input Groups">Input Groups</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-mask.html" data-toggle="dropdown" data-i18n="Input Mask"><i data-feather="circle"></i><span data-i18n="Input Mask">Input Mask</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-textarea.html" data-toggle="dropdown" data-i18n="Textarea"><i data-feather="circle"></i><span data-i18n="Textarea">Textarea</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-checkbox.html" data-toggle="dropdown" data-i18n="Checkbox"><i data-feather="circle"></i><span data-i18n="Checkbox">Checkbox</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-radio.html" data-toggle="dropdown" data-i18n="Radio"><i data-feather="circle"></i><span data-i18n="Radio">Radio</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-switch.html" data-toggle="dropdown" data-i18n="Switch"><i data-feather="circle"></i><span data-i18n="Switch">Switch</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-select.html" data-toggle="dropdown" data-i18n="Select"><i data-feather="circle"></i><span data-i18n="Select">Select</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-number-input.html" data-toggle="dropdown" data-i18n="Number Input"><i data-feather="circle"></i><span data-i18n="Number Input">Number Input</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-file-uploader.html" data-toggle="dropdown" data-i18n="File Uploader"><i data-feather="circle"></i><span data-i18n="File Uploader">File Uploader</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-quill-editor.html" data-toggle="dropdown" data-i18n="Quill Editor"><i data-feather="circle"></i><span data-i18n="Quill Editor">Quill Editor</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-date-time-picker.html" data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i data-feather="circle"></i><span data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-layout.html" data-toggle="dropdown" data-i18n="Form Layout"><i data-feather="box"></i><span data-i18n="Form Layout">Form Layout</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-wizard.html" data-toggle="dropdown" data-i18n="Form Wizard"><i data-feather="package"></i><span data-i18n="Form Wizard">Form Wizard</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-validation.html" data-toggle="dropdown" data-i18n="Form Validation"><i data-feather="check-circle"></i><span data-i18n="Form Validation">Form Validation</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-repeater.html" data-toggle="dropdown" data-i18n="Form Repeater"><i data-feather="rotate-cw"></i><span data-i18n="Form Repeater">Form Repeater</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-bootstrap.html" data-toggle="dropdown" data-i18n="Table"><i data-feather="server"></i><span data-i18n="Table">Table</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Datatable"><i data-feather="grid"></i><span data-i18n="Datatable">Datatable</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-basic.html" data-toggle="dropdown" data-i18n="Basic"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-advanced.html" data-toggle="dropdown" data-i18n="Advanced"><i data-feather="circle"></i><span data-i18n="Advanced">Advanced</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-ag-grid.html" data-toggle="dropdown" data-i18n="agGrid Table"><i data-feather="grid"></i><span data-i18n="agGrid Table">agGrid Table</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->
