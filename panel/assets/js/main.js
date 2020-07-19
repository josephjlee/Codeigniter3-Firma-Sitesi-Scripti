$(".sortable").sortable();
(function () {
    "use strict";

    var treeviewMenu = $('.app-menu');

    // Toggle Sidebar
    $('[data-toggle="sidebar"]').click(function (event) {
        event.preventDefault();
        $('.app').toggleClass('sidenav-toggled');
    });

    // Activate sidebar treeview toggle
    $("[data-toggle='treeview']").click(function (event) {
        event.preventDefault();
        if (!$(this).parent().hasClass('is-expanded')) {
            treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
        }
        $(this).parent().toggleClass('is-expanded');
    });

    // Set initial active toggle
    $("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

    //Activate bootstrip tooltips
    $("[data-toggle='tooltip']").tooltip();

})();

$(document).ready(function () {

    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'video']],
            ['height', ['height']]
        ],
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: true,
        airMode: false,
        lang: 'tr-TR'
    });

    $('.summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'video']],
            ['height', ['height']]
        ],
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: true,
        airMode: false,
        lang: 'tr-TR'
    });

    $('.mizyon').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'video']],
            ['height', ['height']]
        ],
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: true,
        airMode: false,
        lang: 'tr-TR'
    });

    $('.vizyon').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'video']],
            ['height', ['height']]
        ],
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: true,
        airMode: false,
        lang: 'tr-TR'
    });

    $(".content-container, .image_list_container").on('click', '.demoSwal', function () {
        var $data_url = $(this).data("url");
        var id = $(this).data("id");

        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu işlem geri alınamaz!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            if (result.value) {
                $.get($data_url, function (response) {
                    console.log(response);
                    if (response) {
                        $('#ord-' + id).remove();
                        Swal.fire(
                            'Silindi!',
                            'Kayıt başarıyla silindi.',
                            'success',
                            setTimeout(function () {
                                window.location.href = $data_url;
                            }, 1500)
                        )

                    } else {
                        Swal.fire(
                            'Hata!',
                            'Kayıt silinirken bir hata oluştu.',
                            'error',
                            setTimeout(function () {
                                window.location.href = $data_url;
                            }, 1500)
                        )
                    }
                });
            }
        })
    });

    $(".content-container, .image_list_container").on('change', '.isActive', function () {

        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {

            $.post($data_url, {data: $data}, function (response) {

            });

        }

    })

    $(".image_list_container").on('change', '.isCover', function () {

        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {

            $.post($data_url, {data: $data}, function (response) {
                $(".image_list_container").html(response);

                $('[data-switchery]').each(function () {
                    var $this = $(this),
                        color = $this.attr('data-color') || '#000',
                        jackColor = $this.attr('data-jackColor') || '#ffffff',
                        size = $this.attr('data-size') || 'default'

                    new Switchery(this, {
                        color: color,
                        size: size,
                        jackColor: jackColor
                    });
                });
                $(".sortable").sortable();

            });

        }

    })

    $(".content-container, .image_list_container").on("sortupdate", '.sortable', function (event, ui) {

        var $data = $(this).sortable("serialize");
        var $data_url = $(this).data("url");

        $.post($data_url, {data: $data}, function (response) {
        })

    })

    $(".button_usage_btn").change(function(){

        $(".button-information-container").slideToggle();

    })
    var uploadSection = Dropzone.forElement("#dropzone");

    uploadSection.on("complete", function (file) {

        var $data_url = $("#dropzone").data("url");

        $.post($data_url, {}, function (response) {

            $(".image_list_container").html(response);

            $('[data-switchery]').each(function () {
                var $this = $(this),
                    color = $this.attr('data-color') || '#faab43',
                    jackColor = $this.attr('data-jackColor') || '#ffffff',
                    size = $this.attr('data-size') || 'default'

                new Switchery(this, {
                    color: color,
                    size: size,
                    jackColor: jackColor
                });
            });
            $(".sortable").sortable();
        });

    })
});






