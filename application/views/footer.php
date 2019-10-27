<!-- Footer -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url(); ?>css/bootstrap-datepicker.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>



<script>
    CKEDITOR.replace("editor");





    function cari_nama() {
        var input, filter, table, tr, td, i, txtValue;
        kategori = document.getElementById("kategori").value;
        input = document.getElementById("posSearch");
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            nama = tr[i].getElementsByTagName("td")[kategori];
            if (nama) {
                txtValue = nama.textContent || nama.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }




    function cari_tgl() {

        var input, filter, table, tr, td, i, txtValue;
        hari = document.getElementById("hari").value;
        bulan = document.getElementById("bulan").value;
        tahun = document.getElementById("tahun").value;

        if (hari == '' || bulan == '' || tahun == '') {
            alert('Lengkapi Form Tanggal!   ');
        } else {
            input = hari + ' ' + bulan + ' ' + tahun;
            filter = input.toUpperCase();
            table = document.getElementById("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tgl = tr[i].getElementsByTagName("td")[5];
                if (tgl) {
                    txtValue = tgl.textContent || tgl.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }


    var i = 8;
    for (let i = 0; i <= 8; i++) {
        $("#flip_" + i).click(function() {
            var rotasi = $("#rotasi_" + i + " option:selected").val();
            var flip = $("#flip_" + i + " option:selected").val();
            $("#char_" + i).css({
                'transform': rotasi + " " + flip
            });
            $("#option_" + i).val('transform :' + rotasi + " " + flip);
        });


    }



    // $("#rotasi_1", "#flip_1").on("change", function() {

    //     $("#option_1").removeClass();
    //     $("#option_1").addClass(css);
    //     $("#option_1").css('transform', css);
    // })
    // $("flip_1").on("change", function() {

    //     $("#option_1").removeAttr();
    //     $("#option_1").css('transform', css);
    // })

    
</script>

</body>

</html>