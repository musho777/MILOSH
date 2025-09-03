
{{--alert library start--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('sweetalert2.all.min.js')}}"></script>
@if(session('success'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: "<?php echo session('success'); ?>",
            showConfirmButton: false,
            timer: 1500
        })

    </script>
@endif
@if(session('error'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: "<?php echo session('error'); ?>",
            showConfirmButton: false,
            timer: 1500
        })

    </script>
@endif
{{--alert library end--}}

<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>
<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- Dashboard Core -->
<script src="{{asset('assets/js/index1.js')}}"></script>
<!--Morris.js Charts Plugin -->
<script src="{{asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<!-- Timepicker js -->
<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>
<!-- Datepicker js -->
<script src="{{asset('assets/plugins/date-picker/spectrum.js')}}"></script>
<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<!-- Inline js -->
<script src="{{asset('assets/js/select2.js')}}"></script>

<!-- Switcher Js-->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/js/custom-dark.js')}}"></script>


<!-- file uploads js -->
<script src="{{asset('assets/plugins/fileuploads/js/dropify.min.js')}}"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag file here or click',
            'replace': 'Drag or click to replace',
            'remove': 'Delete',
            'error': 'Oops, added something wrong.'
        },
        error: {
            'fileSize': 'The file size is too large (maximum 2M).'
        }
    });
</script>



<script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>



{{-- Script for upload many image --}}
<script>


    $(function () {

        $('.input-images-1').imageUploader();
        $('input[multiple="multiple"]').attr('accept','.jpg, .jpeg, .png');
        let preloaded = [

        ];

        $('.input-images-2').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });

        $('form').on('submit', function (event) {

            // Stop propagation
            // event.preventDefault();
            // event.stopPropagation();

            // Get some vars
            let $form = $(this),
                $modal = $('.modal');

            // Set name and description
            $modal.find('#display-name span').text($form.find('input[id^="name"]').val());
            $modal.find('#display-description span').text($form.find('input[id^="description"]').val());

            // Get the input file
            let $inputImages = $form.find('input[name^="images"]');
            if (!$inputImages.length) {
                $inputImages = $form.find('input[name^="photos"]')
            }

            // Get the new files names
            let $fileNames = $('<ul>');
            for (let file of $inputImages.prop('files')) {
                $('<li>', {text: file.name}).appendTo($fileNames);
            }

            // Set the new files names
            $modal.find('#display-new-images').html($fileNames.html());

            // Get the preloaded inputs
            let $inputPreloaded = $form.find('input[name^="old"]');
            if ($inputPreloaded.length) {

                // Get the ids
                let $preloadedIds = $('<ul>');
                for (let iP of $inputPreloaded) {
                    $('<li>', {text: '#' + iP.value}).appendTo($preloadedIds);
                }

                // Show the preloadede info and set the list of ids
                $modal.find('#display-preloaded-images').show().html($preloadedIds.html());

            } else {

                // Hide the preloaded info
                $modal.find('#display-preloaded-images').hide();

            }

            // Show the modal
            $modal.css('visibility', 'visible');
        });

        // Input and label handler
        $('input').on('focus', function () {
            $(this).parent().find('label').addClass('active')
        }).on('blur', function () {
            if ($(this).val() === '') {
                $(this).parent().find('label').removeClass('active');
            }
        });

        // Sticky menu
        let $nav = $('nav'),
            $header = $('header'),
            offset = 4 * parseFloat($('body').css('font-size')),
            scrollTop = $(this).scrollTop();

        // Initial verification
        setNav();

        // Bind scroll
        $(window).on('scroll', function () {
            scrollTop = $(this).scrollTop();
            // Update nav
            setNav();
        });

        function setNav() {
            if (scrollTop > $header.outerHeight()) {
                $nav.css({position: 'fixed', 'top': offset});
            } else {
                $nav.css({position: '', 'top': ''});
            }
        }
    });

    //$('.image-uploader>input').attr('accept','.jpg, .jpeg, .png');
    //console.log($('.image-uploader>input').val());
</script>
