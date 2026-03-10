<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Title -->
    <title> Luma </title>

    <!--- Favicon -->
    <link rel="icon" href="{{ asset('webassets/assets/img/brand/Luma.jpg') }}" type="image/x-icon">

    <!--- Icons css -->
    <link href="{{ asset('webassets/assets/css/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link id="style" href="{{ asset('webassets/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('webassets/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        .scroll-btn.scrolled {
            color: #ad9587;
            background-color: #E5D4CD;
            border-color: #E5D4CD;
            transition: all 0.3s ease;
        }

        .scroll-btn.scrolled:hover {
            background-color: #E5D4CD;
            border-color: #E5D4CD;
            color: #fff;
        }

        .ul_footer {
            display: flex;
            justify-content: space-evenly;
        }

        .custom-link {
            display: block;
            padding: 10px 15px;
        }

        .demo-footer .row {
            width: 100%;
        }

        .row {
            margin-left: 0;
            /* إزالة أي margin سالب افتراضي */
            margin-right: 0;
            overflow-x: hidden;
            /* يمنع السكرول الأفقي */
        }
    </style>

    @yield('style')
</head>

<body class="app sidebar-mini ltr landing-page horizontalmenu">



    <!-- Page -->
    <div class="page">
        <div class="page-main">

            <!-- Main Header-->
            @include('web.include.header')
            <!-- End Main Header-->


             @include('admin.alert.success')
                    @include('admin.alert.error')
            <!--app-content open-->
            @yield('content')
            <!--app-content closed-->
        </div>
        <!-- FOOTER OPEN -->
        @include('web.include.footer')
        <!-- FOOTER CLOSED -->
    </div>

    @include('web.include.models')
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('webassets/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('webassets/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('webassets/assets/plugins/moment/moment.js') }}"></script>

    <!--- Perfect-scrollbar js -->
    <script src="{{ asset('webassets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Owl-carousel JS-->
    <script src="{{ asset('webassets/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('webassets/assets/landing/lib/company-slider/slider.js') }}"></script>

    <!-- COUNTERS JS-->
    <script src="{{ asset('webassets/assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/counters/counters-1.js') }}"></script>

    <!--- TABS JS -->
    <script src="{{ asset('webassets/assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/tabs/tab-content.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('webassets/assets/plugins/rating/jquery-rate-picker.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/rating/rating-picker.js') }}"></script>

    <!-- Star Rating-1 Js-->
    <script src="{{ asset('webassets/assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('webassets/assets/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('webassets/assets/landing/js/sidemenu.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('webassets/assets/js/sticky.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('webassets/assets/js/themecolor.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('webassets/assets/landing/js/landing.js') }}"></script>
    @yield('script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.querySelector('.your-button-class'); // استبدل بالكلاس الصحيح
            if (!btn) return; // إذا لم يوجد العنصر، نوقف الكود

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    btn.classList.add('scrolled');
                } else {
                    btn.classList.remove('scrolled');
                }
            });
        });
    </script>

    <script>
        let currentPrice = 0;

        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById('modaldemo8');

            modal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;

                var id = button.getAttribute('data-id');
                var name = button.getAttribute('data-name');
                var price = parseFloat(button.getAttribute('data-price'));
                currentPrice = price;

                document.getElementById('modalName').innerText = name;
                document.getElementById('price').innerText = price;

                // بناء رابط الصورة بشكل صحيح
                // احصل على اسم الصورة من data-image
                var image = button.getAttribute('data-image'); // مثلا "product1.jpg"

                // أنشئ الرابط الكامل باستخدام asset
                var baseUrl = "{{ url('uploads/image/products') }}"; // هذا يعطي رابط كامل للمجلد
                var imagePath = baseUrl + '/' + image;

                document.getElementById('modalImage').src = imagePath;

                document.getElementById('productQty').value = 1;
                document.getElementById('total').innerText = price + " $";

                // تحديث hidden inputs
                document.getElementById('modalProductId').value = id;
                document.getElementById('modalProductName').value = name;
                document.getElementById('modalProductPrice').value = price;
                document.getElementById('modalProductQty').value = 1;
                document.getElementById('modalProductImage').value = imagePath;
            });
        });

        // تحديث الكمية والتوتال
        function updateQuantity(action) {
            var qtyInput = document.getElementById('productQty');
            var qty = parseInt(qtyInput.value);

            if (action === 'plus') qty++;
            if (action === 'minus' && qty > 1) qty--;

            qtyInput.value = qty;
            document.getElementById('total').innerText = (qty * currentPrice) + " $";

            document.getElementById('modalProductQty').value = qty;
        }
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    AOS.init({
        duration: 800, // سرعة الحركة
        once: true     // تظهر مرة واحدة فقط
    });
</script>
</body>

</html>
