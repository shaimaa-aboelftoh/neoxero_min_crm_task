/**
 * Theme: Zircos Admin Template
 * Author: Coderthemes
 * SweetAlert
 */

!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    SweetAlert.prototype.init = function () {

        function forceDelete(url) {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "نعم إحذف البيانات !",
                cancelButtonText: "إلغاء ؟",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        method: 'get',
                        url: url,
                        dataType: 'json',
                        success: function (data) {
                            if (data != "false") {
                                swal(
                                    "تم الحذف !"
                                    , "تم حذف البيانات بنجاح ",
                                    "success"
                                )
                                $('#row_' + data).fadeOut();
                                $('#row_' + data).remove();
                            } else {
                                swal(
                                    "لم يتم الحذف !"
                                    , "عذراً يوجد خطأ ما لم تتم عملية الحذف بنجاح ",
                                    "error"
                                )
                            }
                        }
                    });
                } else {
                    swal(
                        "تم الإلغاء !"
                        , "لم يتم حذف الملفات :) "
                        , "error"
                    );
                }
            });
        }

        function softDelete(url) {
            swal({
                title: "هل أنت متأكد ؟",
                text: "سيتم حذف هذه البيانات بصوره مؤقته يمكنك إستعاده البيانات متي شئت :)",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "نعم إحذف البيانات !",
                cancelButtonText: "إلغاء ؟",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        method: 'get',
                        url: url,
                        dataType: 'json',
                        success: function (data) {
                            if (data != "false") {
                                swal(
                                    "تم الحذف !"
                                    , "تم حذف البيانات بنجاح ",
                                    "success"
                                )
                                $('#row_' + data).fadeOut();
                                $('#row_' + data).remove();
                            } else {
                                swal(
                                    "لم يتم الحذف !"
                                    , "عذراً يوجد خطأ ما لم تتم عملية الحذف بنجاح ",
                                    "error"
                                )
                            }
                        }
                    });
                } else {
                    swal(
                        "تم الإلغاء !"
                        , "لم يتم حذف الملفات :) "
                        , "error"
                    );
                }
            });
        }

        //Basic
        $('#sa-basic').click(function () {
            swal("مرحباً للعالم !");
        });

        //A title with a text under
        $('#sa-title').click(function () {
            swal(
                "مرحباً !"
                , "لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. "
            )
        });

        //Success Message
        $('#sa-success').click(function () {
            swal(
                "جيد !"
                , "لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. "
                , "success"
            )
        });

        //Warning Message
        $('#sa-warning').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "نعم إحذف البيانات !",
                closeOnConfirm: false
            }, function () {
                swal(
                    "تم !"
                    , "تم حذف البيانات بنجاح ",
                    "success");
            });
        });

        //Parameter

        $('#sa-params').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "نعم إحذف البيانات !",
                cancelButtonText: "إلغاء ؟",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    swal(
                        "تم الحذف !"
                        , "تم حذف البيانات بنجاح ",
                        "success"
                    );
                } else {
                    swal(
                        "تم الإلغاء !"
                        , "لم يتم حذف الملفات :) "
                        , "error"
                    );
                }
            });
        });

        //Custom Image
        $('#sa-image').click(function () {
            swal({
                title: "جيد !",
                text: "صوره مرفقه بعنوان ....",
                imageUrl: "plugins/bootstrap-sweetalert/thumbs-up.jpg"
            });
        });

        //Auto Close Timer
        $('#sa-close').click(function () {
            swal({
                title: "تنبيه يغلق تلقائياً !",
                text: "سيتم الإغلاق خلال 2 ثواني",
                timer: 2000,
                showConfirmButton: false
            });
        });

        //Primary
        $('#primary-alert').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
                confirmButtonText: 'الإستمرار !'
            });
        });

        //Info
        $('#info-alert').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-info btn-md waves-effect waves-light',
                confirmButtonText: 'الإستمرار !'
            });
        });

        //Success
        $('#success-alert').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "success",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-success btn-md waves-effect waves-light',
                confirmButtonText: 'الإستمرار !'
            });
        });

        //Warning
        $('#warning-alert').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-warning btn-md waves-effect waves-light',
                confirmButtonText: 'الإستمرار !'
            });
        });

        //Danger
        $('#danger-alert').click(function () {
            swal({
                title: "هل أنت متأكد ؟",
                text: "لن تستطيع إستعاده تلك البيانات أو أي بيانات مرتبطه بيها مره أخري",
                type: "error",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'الإستمرار !'
            });
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);
