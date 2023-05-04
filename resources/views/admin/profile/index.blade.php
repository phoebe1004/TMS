@extends('layouts.admin')

@section('content')

   <script>
     (function(w, d, s, l, i) {
       w[l] = w[l] || [];
       w[l].push({
         'gtm.start': new Date().getTime(),
         event: 'gtm.js'
       });
       var f = d.getElementsByTagName(s)[0],
         j = d.createElement(s),
         dl = l != 'dataLayer' ? '&l=' + l : '';
       j.async = true;
       j.src =
         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
       f.parentNode.insertBefore(j, f);
     })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
   </script>
   <!-- End Google Tag Manager -->
   <!-- Style Just for persian demo purpose, don't include it in your project -->
   <style>
     body,
     h1,
     h2,
     h3,
     h4,
     h5,
     h6,
     .h1,
     .h2,
     .h3,
     .h4 {
       font-family: "Cairo";
     }
   </style>
 </head>

         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-stats">
                 <div class="card-header card-header-warning card-header-icon">
                   <div class="card-icon">
                     <i class="material-icons">content_copy</i>
                   </div>
                   <p class="card-category">فضا مصرف شده</p>
                   <h3 class="card-title">49/50
                     <small>GB</small>
                   </h3>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons text-danger">warning</i>
                     <a href="#pablo">فضای بیشتری داشته باشید...</a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-stats">
                 <div class="card-header card-header-success card-header-icon">
                   <div class="card-icon">
                     <i class="material-icons">store</i>
                   </div>
                   <p class="card-category">سود</p>
                   <h3 class="card-title">$34,245</h3>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">date_range</i>۲۴ ساعت اخیر
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-stats">
                 <div class="card-header card-header-danger card-header-icon">
                   <div class="card-icon">
                     <i class="material-icons">info_outline</i>
                   </div>
                   <p class="card-category">مشکلات حل شده</p>
                   <h3 class="card-title">75</h3>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">local_offer</i> توسط گیت‌هاب
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-stats">
                 <div class="card-header card-header-info card-header-icon">
                   <div class="card-icon">
                     <i class="fa fa-twitter"></i>
                   </div>
                   <p class="card-category">دنبال‌کننده</p>
                   <h3 class="card-title">+245</h3>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">update</i> هم‌اکنون
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="card card-chart">
                 <div class="card-header card-header-success">
                   <div class="ct-chart" id="dailySalesChart"></div>
                 </div>
                 <div class="card-body">
                   <h4 class="card-title">فروش روزانه</h4>
                   <p class="card-category">
                     <span class="text-success">
                       <i class="fa fa-long-arrow-up"></i> 55% </span> رشد در فروش امروز.</p>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">access_time</i> ۴ دقیقه پیش
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card card-chart">
                 <div class="card-header card-header-warning">
                   <div class="ct-chart" id="websiteViewsChart"></div>
                 </div>
                 <div class="card-body">
                   <h4 class="card-title">دنبال کننده‌های ایمیلی</h4>
                   <p class="card-category">کارایی آخرین کمپین</p>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">access_time</i> کمپین دو روز پیش ارسال شد
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card card-chart">
                 <div class="card-header card-header-danger">
                   <div class="ct-chart" id="completedTasksChart"></div>
                 </div>
                 <div class="card-body">
                   <h4 class="card-title">وظایف انجام شده</h4>
                   <p class="card-category">کارایی آخرین کمپین</p>
                 </div>
                 <div class="card-footer">
                   <div class="stats">
                     <i class="material-icons">access_time</i> کمپین دو روز پیش ارسال شد
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6 col-md-12">
               <div class="card">
                 <div class="card-header card-header-tabs card-header-primary">
                   <div class="nav-tabs-navigation">
                     <div class="nav-tabs-wrapper">
                       <span class="nav-tabs-title">وظایف:</span>
                       <ul class="nav nav-tabs" data-tabs="tabs">
                         <li class="nav-item">
                           <a class="nav-link active" href="#profile" data-toggle="tab">
                             <i class="material-icons">bug_report</i> باگ‌ها
                             <div class="ripple-container"></div>
                           </a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#messages" data-toggle="tab">
                             <i class="material-icons">code</i> وبسایت
                             <div class="ripple-container"></div>
                           </a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#settings" data-toggle="tab">
                             <i class="material-icons">cloud</i> سرور
                             <div class="ripple-container"></div>
                           </a>
                         </li>
                       </ul>
                     </div>
                   </div>
                 </div>
                 <div class="card-body">
                   <div class="tab-content">
                     <div class="tab-pane active" id="profile">
                       <table class="table">
                         <tbody>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="" checked>
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن؟</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="">
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند؟</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="">
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>همان حال کار آنها به نوعی وابسته به متن می‌باشد
                             </td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="" checked>
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                     <div class="tab-pane" id="messages">
                       <table class="table">
                         <tbody>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="" checked>
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                             </td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="">
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید؟</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                     <div class="tab-pane" id="settings">
                       <table class="table">
                         <tbody>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="">
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی؟</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="" checked>
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td> از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی ؟
                             </td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                           <tr>
                             <td>
                               <div class="form-check">
                                 <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" value="" checked>
                                   <span class="form-check-sign">
                                     <span class="check"></span>
                                   </span>
                                 </label>
                               </div>
                             </td>
                             <td>از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند؟</td>
                             <td class="td-actions text-right">
                               <button type="button" rel="tooltip" title="ویرایش وظیفه" class="btn btn-primary btn-link btn-sm">
                                 <i class="material-icons">edit</i>
                               </button>
                               <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                 <i class="material-icons">close</i>
                               </button>
                             </td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-6 col-md-12">
               <div class="card">
                 <div class="card-header card-header-warning">
                   <h4 class="card-title">آمار کارکنان</h4>
                   <p class="card-category">کارکنان جدید از ۱۵ آبان ۱۳۹۶</p>
                 </div>
                 <div class="card-body table-responsive">
                   <table class="table table-hover">
                     <thead class="text-warning">
                       <th>کد</th>
                       <th>نام</th>
                       <th>حقوق</th>
                       <th>استان</th>
                     </thead>
                     <tbody>
                       <tr>
                         <td>1</td>
                         <td>احمد حسینی</td>
                         <td>$36,738</td>
                         <td>مازندران</td>
                       </tr>
                       <tr>
                         <td>2</td>
                         <td>مینا رضایی</td>
                         <td>$23,789</td>
                         <td>گلستان</td>
                       </tr>
                       <tr>
                         <td>3</td>
                         <td>مبینا احمدپور</td>
                         <td>$56,142</td>
                         <td>تهران</td>
                       </tr>
                       <tr>
                         <td>4</td>
                         <td>جلال آقایی</td>
                         <td>$38,735</td>
                         <td>شهرکرد</td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6 col-md-12">
               <div class="card">
                 <div class="card-header card-header-primary">
                   <h3 class="card-title">اعلان ها</h3>
                   <p class="card-category">ایجاد شده توسط دوست ما
                     <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. لطفا
                     <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">مستندات کامل </a> را مشاهده بکنید.
                   </p>
                 </div>
                 <div class="card-body">
                   <div class="alert alert-warning">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <i class="material-icons">close</i>
                     </button>
                     <span>
                       این یک اعلان است که با کلاس "alert-warning" ایجاد شده است.</span>
                   </div>
                   <div class="alert alert-primary">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <i class="material-icons">close</i>
                     </button>
                     <span>
                       این یک اعلان است که با کلاس "alert-primary" ایجاد شده است.</span>
                   </div>
                   <div class="alert alert-info alert-with-icon" data-notify="container">
                     <i class="material-icons" data-notify="icon">add_alert</i>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <i class="material-icons">close</i>
                     </button>
                     <span data-notify="پیام">این یک اعلان با دکمه بستن و آیکن است</span>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-6 col-md-12">
               <div class="card card-profile">
                 <div class="card-avatar">
                   <a href="#pablo">
                     <img class="img" src="../assets/img/faces/marc.jpg" />
                   </a>
                 </div>
                 <div class="card-body">
                   <h6 class="card-category text-gray">مدیرعامل / مدیرفنی</h6>
                   <h4 class="card-title">خداداد عزیزی</h4>
                   <p class="card-description">
                     طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند ...
                   </p>
                   <a href="#pablo" class="btn btn-primary btn-round">دنبال‌کردن</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <footer class="footer">
           <div class="container-fluid">
             <nav class="float-left">
               <ul>
                 <li>
                   <a href="https://www.creative-tim.com">
                     تیم خلاق
                   </a>
                 </li>
                 <li>
                   <a href="https://creative-tim.com/presentation">
                     درباره ما
                   </a>
                 </li>
                 <li>
                   <a href="http://blog.creative-tim.com">
                     بلاگ
                   </a>
                 </li>
                 <li>
                   <a href="https://www.creative-tim.com/license">
                     اجازه نامه
                   </a>
                 </li>
               </ul>
             </nav>
             <div class="copyright float-right">
               &copy;
               <script>
                 document.write(new Date().getFullYear())
               </script>, ساخته شده با
               <i class="material-icons">favorite</i> توسط
               <a href="https://www.creative-tim.com" target="_blank">تیم خلاق</a> برای وب بهتر.
             </div>
           </div>
         </footer>
       </div>
     </div>
     <div class="fixed-plugin">
       <div class="dropdown show-dropdown">
         <a href="#" data-toggle="dropdown">
           <i class="fa fa-cog fa-2x"> </i>
         </a>
         <ul class="dropdown-menu">
           <li class="header-title"> Sidebar Filters</li>
           <li class="adjustments-line">
             <a href="javascript:void(0)" class="switch-trigger background-color">
               <div class="badge-colors ml-auto mr-auto">
                 <span class="badge filter badge-purple" data-color="purple"></span>
                 <span class="badge filter badge-azure" data-color="azure"></span>
                 <span class="badge filter badge-green" data-color="green"></span>
                 <span class="badge filter badge-orange" data-color="orange"></span>
                 <span class="badge filter badge-danger" data-color="danger"></span>
                 <span class="badge filter badge-rose active" data-color="rose"></span>
               </div>
               <div class="clearfix"></div>
             </a>
           </li>
           <li class="header-title">Images</li>
           <li class="active">
             <a class="img-holder switch-trigger" href="javascript:void(0)">
               <img src="../assets/img/sidebar-1.jpg" alt="">
             </a>
           </li>
           <li>
             <a class="img-holder switch-trigger" href="javascript:void(0)">
               <img src="../assets/img/sidebar-2.jpg" alt="">
             </a>
           </li>
           <li>
             <a class="img-holder switch-trigger" href="javascript:void(0)">
               <img src="../assets/img/sidebar-3.jpg" alt="">
             </a>
           </li>
           <li>
             <a class="img-holder switch-trigger" href="javascript:void(0)">
               <img src="../assets/img/sidebar-4.jpg" alt="">
             </a>
           </li>
           <li class="button-container">
             <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
           </li>
           <li class="header-title">Want more components?</li>
           <li class="button-container">
             <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
               Get the pro version
             </a>
           </li>
           <li class="button-container">
             <a href="http://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
               View Documentation
             </a>
           </li>
           <li class="button-container github-star ml-auto text-center">
             <iframe src="https://yvoschaap.com/producthunt/counter.html#href=https://demos.creative-tim.com/material-dashboard/presentation.html?ref=producthunt&layout=wide" width="84" height="21" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
             <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="small" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
           </li>
           <li class="header-title">Thank you for 95 shares!</li>
           <li class="button-container text-center">
             <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
             <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
             <br>
             <br>
           </li>
         </ul>
       </div>
     </div>
     <script>
       $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         md.initDashboardPageCharts();

       });
     </script>
     <!-- Sharrre libray -->
     <script src="../assets/demo/jquery.sharrre.js"></script>
     <script>
       $(document).ready(function() {

         $('#facebook').sharrre({
           share: {
             facebook: true
           },
           enableHover: false,
           enableTracking: false,
           enableCounter: false,
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('facebook');
           },
           template: '<i class="fab fa-facebook-f"></i> Facebook',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
         });

         $('#google').sharrre({
           share: {
             googlePlus: true
           },
           enableCounter: false,
           enableHover: false,
           enableTracking: true,
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('googlePlus');
           },
           template: '<i class="fab fa-google-plus"></i> Google',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
         });

         $('#twitter').sharrre({
           share: {
             twitter: true
           },
           enableHover: false,
           enableTracking: false,
           enableCounter: false,
           buttons: {
             twitter: {
               via: 'CreativeTim'
             }
           },
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('twitter');
           },
           template: '<i class="fab fa-twitter"></i> Twitter',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
         });

         // Facebook Pixel Code Don't Delete
         ! function(f, b, e, v, n, t, s) {
           if (f.fbq) return;
           n = f.fbq = function() {
             n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
           };
           if (!f._fbq) f._fbq = n;
           n.push = n;
           n.loaded = !0;
           n.version = '2.0';
           n.queue = [];
           t = b.createElement(e);
           t.async = !0;
           t.src = v;
           s = b.getElementsByTagName(e)[0];
           s.parentNode.insertBefore(t, s)
         }(window,
           document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

         try {
           fbq('init', '111649226022273');
           fbq('track', "PageView");

         } catch (err) {
           console.log('Facebook Track Error:', err);
         }

       });
     </script>
     <noscript>
       <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
     </noscript>
     <script>
       $(document).ready(function() {
         $().ready(function() {
           $sidebar = $('.sidebar');
           $sidebar_img_container = $sidebar.find('.sidebar-background');

           $full_page = $('.full-page');

           $sidebar_responsive = $('body > .navbar-collapse');
           sidebar_mini_active = true;

           window_width = $(window).width();

           fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

           // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
           //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
           //         $('.fixed-plugin .dropdown').addClass('show');
           //     }
           //
           // }

           $('.fixed-plugin a').click(function(event) {
             // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
             if ($(this).hasClass('switch-trigger')) {
               if (event.stopPropagation) {
                 event.stopPropagation();
               } else if (window.event) {
                 window.event.cancelBubble = true;
               }
             }
           });

           $('.fixed-plugin .background-color span').click(function() {
             $(this).siblings().removeClass('active');
             $(this).addClass('active');

             var new_color = $(this).data('color');

             if ($sidebar.length != 0) {
               $sidebar.attr('data-color', new_color);
             }

             if ($full_page.length != 0) {
               $full_page.attr('filter-color', new_color);
             }

             if ($sidebar_responsive.length != 0) {
               $sidebar_responsive.attr('data-color', new_color);
             }
           });

           $('.fixed-plugin .img-holder').click(function() {
             $full_page_background = $('.full-page-background');

             $(this).parent('li').siblings().removeClass('active');
             $(this).parent('li').addClass('active');


             var new_image = $(this).find("img").attr('src');

             if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
               $sidebar_img_container.fadeOut('fast', function() {
                 $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                 $sidebar_img_container.fadeIn('fast');
               });
             }

             if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
               var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

               $full_page_background.fadeOut('fast', function() {
                 $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                 $full_page_background.fadeIn('fast');
               });
             }

             if ($('.switch-sidebar-image input:checked').length == 0) {
               var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
               var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

               $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
               $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
             }

             if ($sidebar_responsive.length != 0) {
               $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
             }
           });

           $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
             $full_page_background = $('.full-page-background');

             $input = $(this);

             if ($input.is(':checked')) {
               if ($sidebar_img_container.length != 0) {
                 $sidebar_img_container.fadeIn('fast');
                 $sidebar.attr('data-image', '#');
               }

               if ($full_page_background.length != 0) {
                 $full_page_background.fadeIn('fast');
                 $full_page.attr('data-image', '#');
               }

               background_image = true;
             } else {
               if ($sidebar_img_container.length != 0) {
                 $sidebar.removeAttr('data-image');
                 $sidebar_img_container.fadeOut('fast');
               }

               if ($full_page_background.length != 0) {
                 $full_page.removeAttr('data-image', '#');
                 $full_page_background.fadeOut('fast');
               }

               background_image = false;
             }
           });

           $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
             var $btn = $(this);

             if (sidebar_mini_active == true) {
               $('body').removeClass('sidebar-mini');
               sidebar_mini_active = false;
               materialDashboard.showSidebarMessage('Sidebar mini deactivated...');
             } else {
               $('body').addClass('sidebar-mini');
               sidebar_mini_active = true;
               materialDashboard.showSidebarMessage('Sidebar mini activated...');
             }

             // we simulate the window Resize so the charts will get updated in realtime.
             var simulateWindowResize = setInterval(function() {
               window.dispatchEvent(new Event('resize'));
             }, 180);

             // we stop the simulation of Window Resize after the animations are completed
             setTimeout(function() {
               clearInterval(simulateWindowResize);
             }, 1000);
           });
         });
         if (window_width > 767) {
           if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
             $('.fixed-plugin .dropdown').addClass('show');
             $('.fixed-plugin .dropdown-menu').addClass('show');
           }
         }
       });
     </script>
 </body>

 </html>

@endsection
