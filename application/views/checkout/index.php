<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('home/product_list') ?>">Products</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Start -->
<div class="checkout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-inner">
                    <div class="billing-address">
                        <h2>Shipping Address</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input class="form-control" type="text" value="<?= $member['nama_member']; ?>" name="nama_member">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" value="<?= $member['no_hp']; ?>" name="no_hp">
                            </div>
                            <div class="col-md-12">
                                <label>Address</label>
                                <input class="form-control" type="text" value="<?= $member['alamat']; ?>" name="alamat">
                            </div>
                            <div class="col-md-6">
                                <label>Provinsi</label>
                                <select class="form-control" name="provinsi">
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Kota/Kabupaten</label>
                                <select class="form-control" name="kabupaten">
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Kurir</label>
                                <select class="form-control" name="kurir">
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Paket</label>
                                <select class="form-control" name="paket">
                                </select>
                            </div>
                            <input type="text" name="total_berat" value="250" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $sortuser  = $member['id_member'];
            $querytot = "Select sum(sub_total) FROM cart
            WHERE id_member = $sortuser;
            ";
            $total = $this->db->query($querytot)->row_array();
            $tot = 0;
            ?>
            <?php
            $sortuser  = $member['id_member'];
            $querycart = "SELECT `c`.`id_cart`, `p`.`nama_product`,`m`.`nama_member`, `c`.`qty`, `c`.`sub_total`,  `m`.`alamat`,  `m`.`email_member`,  `m`.`no_hp`, `p`.`id_product`
                FROM `cart` `c`
                JOIN `member` `m` ON `c`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `c`.`id_product` = `p`.`id_product`
                WHERE `c`.`id_member` = $sortuser;
                ";
            $cart = $this->db->query($querycart)->result_array();
            ?>
            <div class="col-lg-4">
                <div class="checkout-inner">
                    <div class="checkout-summary">
                        <h1>Cart Total</h1>
                        <p class="sub-total">Sub Total<span>Rp. <?= number_format($total["sum(sub_total)"], 2, ',', ' '); ?></span></p>
                        <input type="text" id="sub_tot" name="sub_tot" value=" <?= $total["sum(sub_total)"]; ?>" hidden>
                        <p class=" shipcost">Shipping Cost<span id="shipcost"></span></p>
                        <h2>Grand Total<span id="total"></span></h2>
                    </div>
                    <?php foreach ($cart as $c) : ?>
                        <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
                            <input name="id_member" id="id_member" value="<?= $member['id_member'] ?>" hidden>
                            <input name="id_product" id="id_product" value="<?= $c['id_product'] ?>" hidden>
                            <input type="hidden" name="result_type" id="result-type" value="">
                            <input type="hidden" name="result_data" id="result-data" value="">
                            <input type="text" name="total_h" id="total_h" hidden>
                            <input type="text" name="ong" id="ong" hidden>
                            <input type="text" name="nama_p" id="nama_p" value="<?= $c['nama_product'] ?>" hidden>
                            <input type="text" name="qty_p" id="qty_p" value="<?= $c['qty'] ?>" hidden>
                            <input type="text" name="sub_totall" id="sub_totall" value="<?= $c['sub_total'] ?>" hidden>
                            <input type="text" name="nama" id="nama" value="<?= $c['nama_member'] ?>" hidden>
                            <input type="text" name="alamat" id="alamat" value="<?= $c['alamat'] ?>" hidden>
                            <input type="text" name="no_hp" id="no_hp" value="<?= $c['no_hp'] ?>" hidden>
                            <input type="text" name="email" id="email" value="<?= $c['email_member'] ?>" hidden>
                            <input type="text" name="pro" id="pro" hidden>
                            <input type="text" name="kabu" id="kabu" hidden>
                            <input type="text" name="type" id="type" hidden>
                            <input type="text" name="kodepos" id="kodepos" hidden>
                            <input type="text" name="kur" id="kur" hidden>
                            <input type="text" name="pa" id="pa" hidden>
                            <input type="text" name="est" id="est" hidden>
                            <div class="checkout-payment">
                                <div class="checkout-btn">
                                    <button id="pay-button">Place Order</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Checkout End -->
<script type="text/javascript">
    $('#pay-button').click(function(event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");
        var ong = $("#ong").val();
        var total_h = $("#total_h").val();
        var nama_p = $("#nama_p").val();
        var qty_p = $("#qty_p").val();
        var sub_totall = $("#sub_totall").val();
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var no_hp = $("#no_hp").val();
        var email = $("#email").val();
        $.ajax({
            type: 'POST',
            url: '<?= site_url() ?>/snap/token',
            cache: false,
            data: {
                total_h: total_h,
                nama_p: nama_p,
                qty_p: qty_p,
                sub_totall: sub_totall,
                nama: nama,
                alamat: alamat,
                no_hp: no_hp,
                email: email,
                ong: ong,
            },

            success: function(data) {
                //location = data;

                console.log('token = ' + data);

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
</script>
<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>Tangerang, Tangerang City, Banten</p>
                        <p><i class="fa fa-envelope"></i>ngayomfulfillmentcenter@gmail.com</p>
                        <p><i class="fa fa-phone"></i>+123-456-7890</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Payment Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <img src="<?= base_url('assets/') ?>img/logo.png" alt="Logo" width="100px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">
                <center>
                    <p>Copyright &copy; 2020 Ngayom. All Rights Reserved.</p>
            </div>
            </center>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/eshop/') ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets/eshop/') ?>lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/eshop/') ?>js/main.js"></script>

<script>
    $(document).ready(function() {
        $.ajax({
            type: 'post',
            url: 'http://localhost/Ngayom/checkout/datap',
            success: function(hasil_pro) {
                $("select[name=provinsi]").html(hasil_pro);
            }
        });

        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: 'post',
                url: 'http://localhost/Ngayom/checkout/datak',
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kabupaten]").html(hasil_kota);
                }
            })
        });

        $.ajax({
            type: 'post',
            url: 'http://localhost/Ngayom/checkout/datae',
            success: function(hasil_kurir) {
                $("select[name=kurir]").html(hasil_kurir);
            }
        })

        $("select[name=kurir]").on("change", function() {
            var kurir_terpilih = $("select[name=kurir]").val();
            var kab_terpilih = $("option:selected", "select[name=kabupaten]").attr("id_kab");
            var total_berat = $("input[name=total_berat]").val();
            $.ajax({
                type: 'post',
                url: 'http://localhost/Ngayom/checkout/datapa',
                data: 'kurir=' + kurir_terpilih + '&kabupaten=' + kab_terpilih + '&berat=' + total_berat,
                success: function(hasil_paket) {
                    $("select[name=paket]").html(hasil_paket);

                    $("input[name=kur]").val(kurir_terpilih);
                }
            })
        });

        $("select[name=kabupaten]").on("change", function() {
            var prov = $("option:selected", this).attr("nama_provinsi");
            var kot = $("option:selected", this).attr("nama_kota");
            var tip = $("option:selected", this).attr("tipe");
            var kopos = $("option:selected", this).attr("kodepos");

            $("input[name=pro]").val(prov);
            $("input[name=kabu]").val(kot);
            $("input[name=type]").val(tip);
            $("input[name=kodepos]").val(kopos);
        })

        $("select[name=paket]").on("change", function() {
            var pa = $("option:selected", this).attr("paket");
            var ong = $("option:selected", this).attr("ongkir");
            var est = $("option:selected", this).attr("etd");

            $("input[name=pa]").val(pa);
            $("input[name=ong]").val(ong);
            document.getElementById("shipcost").innerHTML = (new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            }).format(ong));
            $("input[name=est]").val(est);

            var sub_tot = document.getElementById("sub_tot").value;
            var ongkirr = document.getElementById("ong").value;
            var sub_num = parseInt(sub_tot);
            var ong_num = parseInt(ongkirr);
            var total = sub_num + ong_num;
            document.getElementById("total").innerHTML = (new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            }).format(total));
            $("input[name=total_h]").val(total);

        })
    });
</script>
</body>

</html>