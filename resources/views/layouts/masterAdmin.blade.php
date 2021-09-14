<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
  @include('inc/admin/head')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
  <!--begin::Main-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

      @include('inc/admin/sidebar')

      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid pt-0" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" style="" class="header align-items-stretch">
          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Aside mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n3 me-1" data-bs-toggle="tooltip" title="Show aside menu">
              <div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/stockholm/Text/Menu.svg-->
                <span class="svg-icon svg-icon-2x mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                      <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                    </g>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </div>
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
              <a href="index.html" class="d-lg-none">
                <img alt="Logo" src={{asset("assets/media/logos/logo-1-dark.svg")}} class="h-15px" />
              </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
              <!--begin::Navbar-->
              <div class='col'>
                
              </div>
              <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                  <!--begin::Menu-->
               
                  <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
              </div>
              <!--end::Navbar-->
              <!--begin::Topbar-->
              <a class='p-5' href="{{ url('admin/logout') }}">Logout</a>
              <!--end::Topbar-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
        @yield('content')
        <!--begin::Footer-->
        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
          <!--begin::Container-->
          <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
              <span class="text-muted fw-bold me-1">2021©</span>
              <a href="" target="_blank" class="text-gray-800 text-hover-primary">Pegalogics</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
              <li class="menu-item">
              </li>
              <li class="menu-item">
                <a href="https://Pegalogics.com/" target="_blank" class="menu-link px-2">Support</a>
              </li>
              
            </ul>
            <!--end::Menu-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Root-->
  <!--begin::Drawers-->
  <!--begin::Activities drawer-->
  <div id="kt_activities" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none">
      <!--begin::Header-->
      <div class="card-header" id="kt_activities_header">
        <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
        <div class="card-toolbar">
          <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-1">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                  <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                  <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body position-relative" id="kt_activities_body">
        <!--begin::Content-->
        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
          <!--begin::Timeline items-->
          <div class="timeline">
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Communication/Chat2.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
                      <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp” project:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src={{asset("assets/media/avatars/150-11.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                    <!--begin::Title-->
                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px pe-2">
                      <span class="badge badge-light text-muted">Application Design</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src={{asset("assets/media/avatars/150-3.jpg")}} alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src={{asset("assets/media/avatars/150-11.jpg")}} alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px pe-2">
                      <span class="badge badge-light-primary">In Progress</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                    <!--begin::Title-->
                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px">
                      <span class="badge badge-light text-muted">CRM System Development</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src={{asset("assets/media/avatars/150-5.jpg")}} alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px">
                      <span class="badge badge-light-success">Completed</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Communication/Thumbtack.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <path d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z" fill="#000000" />
                      <polygon fill="#000000" opacity="0.3" transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)" points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n2">
                <!--begin::Timeline heading-->
                <div class="overflow-auto pe-3">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                      <img src={{asset("assets/media/avatars/150-2.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/General/Attachment2.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                        <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                        <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                        <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="mb-5 pe-3">
                  <!--begin::Title-->
                  <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                      <img src={{asset("assets/media/avatars/150-6.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="" class="w-30px me-3" src={{asset("assets/media/svg/files/pdf.svg")}} />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-bold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-400">1.9mb</div>
                        <!--end::Number-->
                      </div>
                      <!--begin::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="" class="w-30px me-3" src={{asset("assets/media/svg/files/doc.svg")}} />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-bold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-400">18kb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center">
                      <!--begin::Icon-->
                      <img alt="" class="w-30px me-3" src={{asset("assets/media/svg/files/css.svg")}} />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-bold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-400">20mb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Icon-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Home/Library.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">Task
                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src={{asset("assets/media/avatars/150-11.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                      <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                      <img src={{asset("assets/media/avatars/150-3.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-200px" src={{asset("assets/media/demos/demo1.png")}} />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-200px" src={{asset("assets/media/demos/demo2.png")}} />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-200px" src={{asset("assets/media/demos/demo3.png")}} />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Communication/Urgent-mail.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                      <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">New case
                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                      <!--end::User-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                      <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                      <img src={{asset("assets/media/avatars/150-14.jpg")}} alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Notice-->
                  <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/stockholm/Code/Git4.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z" fill="#000000" fill-rule="nonzero" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                      <!--begin::Content-->
                      <div class="mb-3 mb-md-0 fw-bold">
                        <h4 class="text-gray-800 fw-bolder">Database Backup Process Completed!</h4>
                        <div class="fs-6 text-gray-600 pe-7">Login into Metronic Admin Dashboard to make sure the data integrity is OK</div>
                      </div>
                      <!--end::Content-->
                      <!--begin::Action-->
                      <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                      <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Notice-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line w-40px"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                  <!--begin::Svg Icon | path: icons/stockholm/Shopping/Cart4.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.25" d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z" fill="#7E8299" />
                      <path d="M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z" fill="#7E8299" />
                      <path d="M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z" fill="#7E8299" />
                      <path d="M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z" fill="#7E8299" />
                      <g opacity="0.25">
                        <path d="M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z" fill="#7E8299" />
                        <path d="M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z" fill="#7E8299" />
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-bold mb-2">New order
                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
          </div>
          <!--end::Timeline items-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer py-5 text-center" id="kt_activities_footer">
        <a href="pages/profile/activity.html" class="btn btn-bg-white text-primary">View All Activities
          <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
          <span class="svg-icon svg-icon-3 svg-icon-primary">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
              </g>
            </svg>
          </span>
          <!--end::Svg Icon-->
        </a>
      </div>
      <!--end::Footer-->
    </div>
  </div>
  <!--end::Activities drawer-->
  <!--begin::Exolore drawer toggle-->

  <!--end::Exolore drawer-->
  <!--end::Drawers-->
  <!--begin::Modals-->
  <!--begin::Modal - Invite Friends-->
  <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                  <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                  <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Heading-->
          <div class="text-center mb-13">
            <!--begin::Title-->
            <h1 class="mb-3">Invite a Friend</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-gray-400 fw-bold fs-5">If you need more info, please check out
              <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Google Contacts Invite-->
          <div class="btn btn-light-primary fw-bolder w-100 mb-8">
            <img alt="Logo" src={{asset("assets/media/svg/social-icons/google.svg")}} class="h-20px me-3" />Invite Gmail Contacts
          </div>
          <!--end::Google Contacts Invite-->
          <!--begin::Separator-->
          <div class="separator d-flex flex-center mb-8">
            <span class="text-uppercase bg-white fs-7 fw-bold text-gray-400 px-3">or</span>
          </div>
          <!--end::Separator-->
          <!--begin::Textarea-->
          <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
          <!--end::Textarea-->
          <!--begin::Users-->
          <div class="mb-10">
            <!--begin::Heading-->
            <div class="fs-6 fw-bold mb-2">Your Invitations</div>
            <!--end::Heading-->
            <!--begin::List-->
            <div class="mh-300px scroll-y me-n7 pe-7">
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-1.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                    <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                    <div class="fw-bold text-gray-400">melody@altbox.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-4.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                    <div class="fw-bold text-gray-400">sean@dellito.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-12.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                    <div class="fw-bold text-gray-400">brian@exchange.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                    <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-8.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                    <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                    <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                    <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-6.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                    <div class="fw-bold text-gray-400">dam@consilting.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-7.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                    <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                    <div class="fw-bold text-gray-400">robert@benko.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-17.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                    <div class="fw-bold text-gray-400">miller@mapple.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                    <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src={{asset("assets/media/avatars/150-10.jpg")}} />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                    <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                    <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
            </div>
            <!--end::List-->
          </div>
          <!--end::Users-->
          <!--begin::Notice-->
          <div class="d-flex flex-stack">
            <!--begin::Label-->
            <div class="me-5 fw-bold">
              <label class="fs-6">Adding Users by Team Members</label>
              <div class="fs-7 text-gray-400">If you need more info, please check budget planning</div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" checked="checked" />
              <span class="form-check-label fw-bold text-gray-400">Allowed</span>
            </label>
            <!--end::Switch-->
          </div>
          <!--end::Notice-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Invite Friend-->
  <!--begin::Modal - Create account-->
  <div class="modal fade" id="kt_modal_create_account" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-1000px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Title-->
          <h2 class="mb-0">Create Account</h2>
          <!--end::Title-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                  <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                  <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y m-5">
          <!--begin::Stepper-->
          <div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
            <!--begin::Nav-->
            <div class="stepper-nav py-5">
              <!--begin::Step 1-->
              <div class="stepper-item current" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Account Type</h3>
              </div>
              <!--end::Step 1-->
              <!--begin::Step 2-->
              <div class="stepper-item" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Account Info</h3>
              </div>
              <!--end::Step 2-->
              <!--begin::Step 3-->
              <div class="stepper-item" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Business Details</h3>
              </div>
              <!--end::Step 3-->
              <!--begin::Step 4-->
              <div class="stepper-item" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Billing Details</h3>
              </div>
              <!--end::Step 4-->
              <!--begin::Step 5-->
              <div class="stepper-item" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Completed</h3>
              </div>
              <!--end::Step 5-->
            </div>
            <!--end::Nav-->
            <!--begin::Form-->
            <form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
              <!--begin::Step 1-->
              <div class="current" data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                  <!--begin::Heading-->
                  <div class="pb-10 pb-lg-15">
                    <!--begin::Title-->
                    <h2 class="fw-bolder d-flex align-items-center text-dark">Choose Account Type
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i>
                    </h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                      <a href="#" class="link-primary fw-bolder">Help Page</a>.
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div class="fv-row">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                          <!--begin::Svg Icon | path: icons/duotone/Contacts/User.svg-->
                          <span class="svg-icon svg-icon-3x me-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M17 6C17 8.76142 14.7614 11 12 11C9.23858 11 7 8.76142 7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6Z" fill="#121319" />
                              <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M18.818 14.1248C18.2016 13.4101 17.1428 13.4469 16.3149 13.9001C15.0338 14.6013 13.5635 15 12 15C10.4365 15 8.96618 14.6013 7.68505 13.9001C6.85717 13.4469 5.79841 13.4101 5.182 14.1248C3.82222 15.7014 3 17.7547 3 20V21C3 22.1045 3.89543 23 5 23H19C20.1046 23 21 22.1045 21 21V20C21 17.7547 20.1778 15.7014 18.818 14.1248Z" fill="#191213" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                          <!--begin::Info-->
                          <span class="d-block fw-bold text-start">
                            <span class="text-dark fw-bolder d-block fs-4 mb-2">Personal Account</span>
                            <span class="text-gray-400 fw-bold fs-6">If you need more info, please check it out</span>
                          </span>
                          <!--end::Info-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-lg-6">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                          <!--begin::Svg Icon | path: icons/duotone/Business/Briefcase.svg-->
                          <span class="svg-icon svg-icon-3x me-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path opacity="0.25" d="M2 10C2 8.34315 3.34315 7 5 7H19C20.6569 7 22 8.34315 22 10V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V10Z" fill="#12131A" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M9 4C8.44772 4 8 4.44772 8 5V8C8 8.55228 7.55228 9 7 9C6.44772 9 6 8.55228 6 8V5C6 3.34315 7.34315 2 9 2H15C16.6569 2 18 3.34315 18 5V8C18 8.55228 17.5523 9 17 9C16.4477 9 16 8.55228 16 8V5C16 4.44772 15.5523 4 15 4H9Z" fill="#12131A" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                          <!--begin::Info-->
                          <span class="d-block fw-bold text-start">
                            <span class="text-dark fw-bolder d-block fs-4 mb-2">Corporate Account</span>
                            <span class="text-gray-400 fw-bold fs-6">Create corporate account to mane users</span>
                          </span>
                          <!--end::Info-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Step 1-->
              <!--begin::Step 2-->
              <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                  <!--begin::Heading-->
                  <div class="pb-10 pb-lg-15">
                    <!--begin::Title-->
                    <h2 class="fw-bolder text-dark">Account Info</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                      <a href="#" class="link-primary fw-bolder">Help Page</a>.
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center form-label mb-3">Specify Team Size
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i></label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="row mb-2" data-kt-buttons="true">
                      <!--begin::Col-->
                      <div class="col">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                          <input type="radio" class="btn-check" name="account_team_size" value="1-1" />
                          <span class="fw-bolder fs-3">1-1</span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                          <input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10" />
                          <span class="fw-bolder fs-3">2-10</span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                          <input type="radio" class="btn-check" name="account_team_size" value="10-50" />
                          <span class="fw-bolder fs-3">10-50</span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                          <input type="radio" class="btn-check" name="account_team_size" value="50+" />
                          <span class="fw-bolder fs-3">50+</span>
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Hint-->
                    <div class="form-text">Customers will see this shortened version of your statement descriptor</div>
                    <!--end::Hint-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label mb-3">Team Account Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="" />
                    <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="mb-0 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center form-label mb-5">Select Account Plan
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                    <!--end::Label-->
                    <!--begin::Options-->
                    <div class="mb-0">
                      <!--begin:Option-->
                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label">
                              <!--begin::Svg Icon | path: icons/duotone/Business/Bank.svg-->
                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path opacity="0.25" d="M4 10H8V17H10V10H14V17H16V10H20V17C21.1046 17 22 17.8954 22 19V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V19C2 17.8954 2.89543 17 4 17V10Z" fill="#12131A" />
                                  <path d="M2 7.35405C2 6.53624 2.4979 5.80083 3.25722 5.4971L11.2572 2.2971C11.734 2.10637 12.266 2.10637 12.7428 2.2971L20.7428 5.4971C21.5021 5.80083 22 6.53624 22 7.35405V7.99999C22 9.10456 21.1046 9.99999 20 9.99999H4C2.89543 9.99999 2 9.10456 2 7.99999V7.35405Z" fill="#12131A" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Description-->
                          <span class="d-flex flex-column">
                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Company Account</span>
                            <span class="fs-6 fw-bold text-gray-400">Use images to enhance your post flow</span>
                          </span>
                          <!--end:Description-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="account_plan" value="1" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label">
                              <!--begin::Svg Icon | path: icons/duotone/Charts/Doughnut.svg-->
                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Description-->
                          <span class="d-flex flex-column">
                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Developer Account</span>
                            <span class="fs-6 fw-bold text-gray-400">Use images to your post time</span>
                          </span>
                          <!--end:Description-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label">
                              <!--begin::Svg Icon | path: icons/duotone/Charts/Line-03-Down.svg-->
                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Description-->
                          <span class="d-flex flex-column">
                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Testing Account</span>
                            <span class="fs-6 fw-bold text-gray-400">Use images to enhance time travel rivers</span>
                          </span>
                          <!--end:Description-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="account_plan" value="3" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Options-->
                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Step 2-->
              <!--begin::Step 3-->
              <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                  <!--begin::Heading-->
                  <div class="pb-10 pb-lg-12">
                    <!--begin::Title-->
                    <h2 class="fw-bolder text-dark">Business Details</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                      <a href="#" class="link-primary fw-bolder">Help Page</a>.
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Business Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input name="business_name" class="form-control form-control-lg form-control-solid" value="Pegalogics Inc." />
                    <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center form-label">
                      <span class="required">Shortened Descriptor</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;Pegalogics*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input--> 
                    <input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="Pegalogics" />
                    <!--end::Input-->
                    <!--begin::Hint-->
                    <div class="form-text">Customers will see this shortened version of your statement descriptor</div>
                    <!--end::Hint-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Corporation Type</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                      <option></option>
                      <option value="1">S Corporation</option>
                      <option value="1">C Corporation</option>
                      <option value="2">Sole Proprietorship</option>
                      <option value="3">Non-profit</option>
                      <option value="4">Limited Liability</option>
                      <option value="5">General Partnership</option>
                    </select>
                    <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-10">
                    <!--end::Label-->
                    <label class="form-label">Business Description</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                    <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-0">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label required">Contact Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com" />
                    <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Step 3-->
              <!--begin::Step 4-->
              <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                  <!--begin::Heading-->
                  <div class="pb-10 pb-lg-15">
                    <!--begin::Title-->
                    <h2 class="fw-bolder text-dark">Billing Details</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                      <a href="#" class="text-primary fw-bolder">Help Page</a>.
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-column mb-7 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                      <span class="required">Name On Card</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-column mb-7 fv-row">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative">
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                      <!--end::Input-->
                      <!--begin::Card logos-->
                      <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                        <img src={{asset("assets/media/svg/card-logos/visa.svg")}} alt="" class="h-25px" />
                        <img src={{asset("assets/media/svg/card-logos/mastercard.svg")}} alt="" class="h-25px" />
                        <img src={{asset("assets/media/svg/card-logos/american-express.svg")}} alt="" class="h-25px" />
                      </div>
                      <!--end::Card logos-->
                    </div>
                    <!--end::Input wrapper-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row mb-10">
                    <!--begin::Col-->
                    <div class="col-md-8 fv-row">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                      <!--end::Label-->
                      <!--begin::Row-->
                      <div class="row fv-row">
                        <!--begin::Col-->
                        <div class="col-6">
                          <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                            <option></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                          <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                            <option></option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                          </select>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">CVV</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input wrapper-->
                      <div class="position-relative">
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                        <!--end::Input-->
                        <!--begin::CVV icon-->
                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                          <!--begin::Svg Icon | path: icons/stockholm/Shopping/Credit-card.svg-->
                          <span class="svg-icon svg-icon-2hx">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
                                <rect fill="#000000" x="2" y="8" width="20" height="3" />
                                <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
                              </g>
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::CVV icon-->
                      </div>
                      <!--end::Input wrapper-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5">
                      <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                      <div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                      <span class="form-check-label fw-bold text-gray-400">Save Card</span>
                    </label>
                    <!--end::Switch-->
                  </div>
                  <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Step 4-->
              <!--begin::Step 5-->
              <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                  <!--begin::Heading-->
                  <div class="pb-8 pb-lg-10">
                    <!--begin::Title-->
                    <h2 class="fw-bolder text-dark">Your Are Done!</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-gray-400 fw-bold fs-6">If you need more info, please
                      <a href="authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Body-->
                  <div class="mb-0">
                    <!--begin::Text-->
                    <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great &amp; amazing audience.</div>
                    <!--end::Text-->
                    <!--begin::Alert-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                      <!--begin::Icon-->
                      <!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
                      <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                          <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                          <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <!--end::Icon-->
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                          <h4 class="text-gray-800 fw-bolder">We need your attention!</h4>
                          <div class="fs-6 text-gray-600">To start using great tools, please, please
                            <a href="#" class="fw-bolder">Create Team Platform</a>
                          </div>
                        </div>
                        <!--end::Content-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Alert-->
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Step 5-->
              <!--begin::Actions-->
              <div class="d-flex flex-stack pt-15">
                <!--begin::Wrapper-->
                <div class="mr-2">
                  <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Left-2.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                          <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->Back
                  </button>
                </div>
                <!--end::Wrapper-->
                <!--begin::Wrapper-->
                <div>
                  <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                    <span class="indicator-label">Submit
                      <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                      <span class="svg-icon svg-icon-3 ms-2 me-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                          </g>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="indicator-progress">Please wait...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </button>
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Stepper-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Create project-->
  <!--begin::Modal - Upgrade plan-->
  <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
      <!--begin::Modal content-->
      <div class="modal-content rounded">
        <!--begin::Modal header-->
        <div class="modal-header justify-content-end border-0 pb-0">
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                  <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                  <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
          <!--begin::Heading-->
          <div class="mb-13 text-center">
            <h1 class="mb-3">Upgrade a Plan</h1>
            <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
              <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
            </div>
          </div>
          <!--end::Heading-->
          <!--begin::Plans-->
          <div class="d-flex flex-column">
            <!--begin::Nav group-->
            <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
              <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
              <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a>
            </div>
            <!--end::Nav group-->
            <!--begin::Row-->
            <div class="row mt-10">
              <!--begin::Col-->
              <div class="col-lg-6 mb-10 mb-lg-0">
                <!--begin::Tabs-->
                <div class="nav flex-column">
                  <!--begin::Tab link-->
                  <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                        <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
                        <div class="fw-bold opacity-50">Best for startups</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </div>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                        <input class="form-check-input" type="radio" name="plan" value="advanced" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
                        <div class="fw-bold opacity-50">Best for 100+ team size</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </div>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                        <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
                          <span class="badge badge-light-success ms-2 fs-7">Most popular</span>
                        </h2>
                        <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </div>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                        <input class="form-check-input" type="radio" name="plan" value="custom" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
                        <div class="fw-bold opacity-50">Requet a custom license</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                    </div>
                    <!--end::Price-->
                  </div>
                  <!--end::Tab link-->
                </div>
                <!--end::Tabs-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-lg-6">
                <!--begin::Tab content-->
                <div class="tab-content rounded h-100 bg-light p-10">
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                      <div class="text-gray-400 fw-bold">Optimal for 10+ team size and new startup</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Finance Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Accounting Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                      <div class="text-gray-400 fw-bold">Optimal for 100+ team size and grown company</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                        <span class="svg-icon svg-icon-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                      <div class="text-gray-400 fw-bold">Optimal for 1000+ team and enterpise</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                        <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                </div>
                <!--end::Tab content-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Plans-->
          <!--begin::Actions-->
          <div class="d-flex flex-center flex-row-fluid pt-12">
            <button type="reset" class="btn btn-white me-3" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Upgrade Plan</button>
          </div>
          <!--end::Actions-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Upgrade plan-->
  <!--end::Modals-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
    <span class="svg-icon">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" />
          <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
          <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
        </g>
      </svg>
    </span>
    <!--end::Svg Icon-->
  </div>
  <!--end::Scrolltop-->
  <!--end::Main-->
  <!--begin::Javascript-->
  @include('inc/admin/jsGlobal')

</body>
<!--end::Body-->

</html>