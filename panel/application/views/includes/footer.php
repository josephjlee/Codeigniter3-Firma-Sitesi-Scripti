<!-- Essential javascripts for application to work-->
<script src="<?php echo base_url('assets');?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets');?>/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url('assets');?>/js/popper.min.js"></script>
<script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="<?php echo base_url('assets');?>/js/plugins/pace.min.js"></script>
<script src="<?php echo base_url('assets');?>/css/summernote-bs4.js"></script>
<script src="<?php echo base_url('assets');?>/css/lang/summernote-tr-TR.js"></script>
<script src="<?php echo base_url('assets');?>/js/switchery.min.js"></script>
<script src="<?php echo base_url('assets');?>/js/dropzone.js"></script>
<script src="<?php echo base_url('assets');?>/js/iziToast.min.js"></script>
<script src="<?php echo base_url('assets');?>/js/datatables.min.js"></script>
<?php $this->load->view("includes/alert"); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script src="<?php echo base_url('assets');?>/js/main.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable(

            {

                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5,
                "bSort": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
            }
        );
    } );


    function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for(var i=0; i < cbs.length; i++) {
            if(cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
            }
        }
    }
</script>

</body>
</html>