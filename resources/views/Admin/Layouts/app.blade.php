<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="WRAPCODERS" />
    <title>@yield('title', 'Dashboard')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/daterangepicker.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tagify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tagify-data.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/quill.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/jquery.time-to.min.css')}}">
</head>

</head>
<style>
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered{
        font-size: 14px !important;
    }
    .select2-container--bootstrap-5 .select2-dropdown .select2-results__options .select2-results__option{
        font-size: 14px !important;
    }
    .confirm-modal {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Modal Content */
.confirm-modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

/* Modal Buttons */
.confirm-modal-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.btn-cancel,
.btn-delete {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-cancel {
    background-color: #ccc;
    color: white;
}

.btn-delete {
    background-color: #d33;
    color: white;
}

.btn-cancel:hover,
.btn-delete:hover {
    opacity: 0.8;
}
</style>
<body>

    @include('Admin.Layouts.partials.sidebar')

    @include('Admin.Layouts.partials.header')
    <main class="nxl-container">
        <div class="nxl-content">
               @yield('content')
        </div>
        @include('Admin.Layouts.partials.footer')
    </main>
<div id="confirmModal" class="confirm-modal">
        <div class="confirm-modal-content">
            <h3>Are you sure you want to delete?</h3>
            <div class="confirm-modal-buttons">
                <button id="cancelBtn" class="btn-cancel">Cancel</button>
                <button id="deleteBtn" class="btn-delete">Delete</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script>
        function ConfirmDelete(button) {
            document.getElementById("confirmModal").style.display = "flex";

            const deleteBtn = document.getElementById("deleteBtn");
            const cancelBtn = document.getElementById("cancelBtn");

            const form = button.closest("form");

            deleteBtn.onclick = function() {
                form.submit();
                document.getElementById("confirmModal").style.display = "none";
            };

            cancelBtn.onclick = function() {
                document.getElementById("confirmModal").style.display = "none";
            };
        }
        window.onclick = function(event) {
            if (event.target === document.getElementById("confirmModal")) {
                document.getElementById("confirmModal").style.display = "none";
            }
        };
    </script>

    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/circle-progress.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('assets/js/theme-customizer-init.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tagify.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/tagify-data.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/quill.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/select2-active.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/datepicker.min.js')}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('assets/js/common-init.min.js')}}"></script>
    <script src="{{ asset('assets/js/proposal-create-init.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <!--! END: Theme Customizer !-->

    <script src="{{ asset('assets/vendors/js/lslstrength.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/js/widgets-tables-init.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/lslstrength.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_row").click(function() {
                b = i - 1;
                $("#addr" + i)
                    .html($("#addr" + b).html())
                    .find("td:first-child")
                    .html(i + 1);
                $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
                i++;
            });
            $("#delete_row").click(function() {
                if (i > 1) {
                    $("#addr" + (i - 1)).html("");
                    i--;
                }
                calc();
            });
            $("#tab_logic tbody").on("keyup change", function() {
                calc();
            });
            $("#tax").on("keyup change", function() {
                calc_total();
            });
        });

        function calc() {
            $("#tab_logic tbody tr").each(function(i, element) {
                var html = $(this).html();
                if (html != "") {
                    var qty = $(this).find(".qty").val();
                    var price = $(this).find(".price").val();
                    $(this)
                        .find(".total")
                        .val(qty * price);
                    calc_total();
                }
            });
        }

        function calc_total() {
            total = 0;
            $(".total").each(function() {
                total += parseInt($(this).val());
            });
            $("#sub_total").val(total.toFixed(2));
            tax_sum = (total / 100) * $("#tax").val();
            $("#tax_amount").val(tax_sum.toFixed(2));
            $("#total_amount").val((tax_sum + total).toFixed(2));
        }
    </script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>
</body>

</html>
