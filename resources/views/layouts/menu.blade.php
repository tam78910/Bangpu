<link rel="stylesheet" href="{{ asset("assets/css/component.css") }}" type="text/css" media="all" />
<script src="{{ asset("assets/js/modernizr.custom.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/js/classie.js") }}" type="text/javascript"></script>

<section class="menu">
    <div class="menu-area">

        <!-- Mobile Version -->
        <div class="menu-left visible-sm visible-xs">Menu Bangpu</div>
        <div id="showLeft" class="menu-mobile visible-sm visible-xs">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </div>
        <div class="cbp-spmenu-push visible-sm visible-xs">
            <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <h3>Menu Bangpu</h3>
                <a href="/">หน้าหลัก</a>
                <a href="/history">ประวัติความเป็นมา</a>
                <a href="/vision">วิสัยทัศน์</a>
                <a href="/manager">ผู้บังคับบัญชา</a>
                <a href="/organization">โครงสร้างหน่วยงาน</a>
                <a href="/sukjai">ร้านอาหารศาลาสุขใจ</a>
                <a href="/bangalo">อาคารที่พัก / บังกะโล</a>
                <a href="/nature">ศูนย์ศึกษาธรรมชาติ</a>
                <a href="contact">ติดต่อเรา</a>
                <a href="/assets/pdf/bangpu.pdf" target="_blank">Brochure</a>
                <a href="https://www.facebook.com/bangpurta/" target="_blank">Facebook</a>
            </div>
        </div>

        <!-- PC Version -->
        <nav class="navbar visible-lg visible-md">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/">หน้าหลัก</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">สถานตากอากาศบางปู <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/history">ประวัติความเป็นมา</a>
                            </li>
                            <li>
                                <a href="/vision">วิสัยทัศน์</a>
                            </li>
                            <li>
                                <a href="/manager">ผู้บังคับบัญชา</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="/organization">โครงสร้างหน่วยงาน</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">ร้านอาหาร / อาคารที่พัก <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/sukjai">ร้านอาหารศาลาสุขใจ</a></li>
                            <li><a href="/bangalo">อาคารที่พัก / บังกะโล</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="/nature">ศูนย์ศึกษาธรรมชาติ</a>
                    </li>
                    <li class="">
                        <a href="/contact">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="/assets/pdf/bangpu.pdf" target="_blank">Brochure</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/bangpurta/" target="_blank">Facebook</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</section>

<div id="closeDrop" class="menu-backdrop"></div>

<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeft = document.getElementById( 'showLeft' ),
        body = document.body;

    showLeft.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeft' );
    };


    function disableOther( button ) {
        if( button !== 'showLeft' ) {
            classie.toggle( showLeft, 'disabled' );
        }
    }

</script>
