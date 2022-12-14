<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>AdminCP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace("ckeditor_mota")
</script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{URL::to('/admincp/login')}}" class="logo">
        AdminCP
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
   <span style="margin-left:30%; font-size:30px;font-weight:bold; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color:blue">Welcome to AdminCP</span>
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
       
        <!-- user login dropdown start-->
       
                        <!-- Authentication Links -->
        <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="username">
        <?php
            $id_admin = Session()->get('admin_name');
            if(isset($id_admin))
            {
                echo 'Admin: '.$id_admin;
            }
            
        ?>
        </span>
                <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
                <li><a href="{{ route('admincp.logout') }}"><i class="fa fa-key"></i>????ng xu???t</a></li>
        </ul>
    
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh m???c s???n ph???m</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('danhmuc.create')}}">Th??m danh m???c</a></li>
						<li><a href="{{route('danhmuc.index')}}">Li???t k?? danh m???c</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>S???n ph???m</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('sanpham.create')}}">Th??m s???n ph???m</a></li>
						<li><a href="{{route('sanpham.index')}}">Li???t k?? s???n ph???m</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>????n h??ng</span>
                    </a>
                    <ul class="sub">
						
						<li><a href="{{URL::to('/admincp/donhang')}}">Qu???n l?? ????n h??ng</a></li>
                        
                    </ul>
                </li>
                     </ul> 
           </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
       @yield('content')
    </section>
<!--main content end-->
</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('public/backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	
<script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace("ckeditor_motathem")
    CKEDITOR.replace("ckeditor_motasua")
</script>
	<!-- //calendar -->
</body>
</html>
<script type="text/javascript">
 
 function ChangeToSlug()
     {
         var slug;
      
         //L???y text t??? th??? input title 
         slug = document.getElementById("slug").value;
         slug = slug.toLowerCase();
         //?????i k?? t??? c?? d???u th??nh kh??ng d???u
             slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
             slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
             slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
             slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
             slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
             slug = slug.replace(/??|???|???|???|???/gi, 'y');
             slug = slug.replace(/??/gi, 'd');
             //X??a c??c k?? t??? ?????t bi???t
             slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
             //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
             slug = slug.replace(/ /gi, "-");
             //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
             //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
             slug = slug.replace(/\-\-\-\-\-/gi, '-');
             slug = slug.replace(/\-\-\-\-/gi, '-');
             slug = slug.replace(/\-\-\-/gi, '-');
             slug = slug.replace(/\-\-/gi, '-');
             //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
             slug = '@' + slug + '@';
             slug = slug.replace(/\@\-|\-\@|\@/gi, '');
             //In slug ra textbox c?? id ???slug???
         document.getElementById('convert_slug').value = slug;
     }
      



</script>