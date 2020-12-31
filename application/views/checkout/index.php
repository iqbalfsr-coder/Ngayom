<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
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
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name"</label>
                                <input class="form-control" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="E-mail">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="Mobile No">
                            </div>
                            <div class="col-md-12">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="Address">
                            </div>
                            <div class="col-md-6">
                                <label>Country</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="City">
                            </div>
                            <div class="col-md-6">
                                <label>State</label>
                                <input class="form-control" type="text" placeholder="State">
                            </div>
                            <div class="col-md-6">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="ZIP Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-inner">
                    <div class="checkout-summary">
                        <h1>Cart Total</h1>
                        <p>Product Name<span>$99</span></p>
                        <p class="sub-total">Sub Total<span>$99</span></p>
                        <p class="ship-cost">Shipping Cost<span>$1</span></p>
                        <h2>Grand Total<span>$100</span></h2>
                    </div>
                    <div class="checkout-payment">
                        <div class="checkout-btn">
                            <button id="pay-button">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Checkout End -->
<script type="text/javascript">
    $('#pay-button').click(function(event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        $.ajax({
            url: '<?= base_url() ?>/snap/token',
            cache: false,

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
                        <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
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
            $("input[name=est]").val(est);
        })
    });
</script>
</body>

</html>