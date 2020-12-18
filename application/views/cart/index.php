<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Items</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/one.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/two.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/three.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area ">
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Provinsi:</label>
                            <select name="provinsi">

                            </select>

                        </li>
                        <li class="single_field">
                            <label>Kota/Kabupaten</label>
                            <select name="kabupaten">

                            </select>

                        </li>
                        <li class="single_field">
                            <label>Kurir</label>
                            <select name="kurir">

                            </select>

                        </li>
                        <li class="single_field">
                            <label>Paket</label>
                            <select name="paket">

                            </select>

                        </li>
                        <input type="text" name="total_berat" value="1200" hidden>
                        <input type="text" name="pro" hidden>
                        <input type="text" name="kabu" hidden>
                        <input type="text" name="type" hidden>
                        <input type="text" name="kodepos" hidden>
                        <input type="text" name="kur" hidden>
                        <input type="text" name="pa" hidden>
                        <input type="text" name="est" hidden>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul class="user info">
                        <li>Cart Sub Total <span> <input type="text" name="sub" disabled></span></li>
                        <li>Shipping Cost <span><input type="text" name="ong" disabled></span></li>
                        <li>Total <span><input type="text" name="total" disabled></span></li>
                    </ul>
                    <a class="btn btn-default update" href="">Update</a>
                    <a class="btn btn-default check_out" href="">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#do_action-->

<footer id="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Online Help</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Order Status</a></li>
                            <li><a href="">Change Location</a></li>
                            <li><a href="">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">T-Shirt</a></li>
                            <li><a href="">Mens</a></li>
                            <li><a href="">Womens</a></li>
                            <li><a href="">Gift Cards</a></li>
                            <li><a href="">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Terms of Use</a></li>
                            <li><a href="">Privecy Policy</a></li>
                            <li><a href="">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Ngayom</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Company Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 col-sm-offset-2">
                    <div class="single-widget">
                        <br>
                        <img src="<?= base_url('assets/img/') ?>logo.png" alt="logo" width="200">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p>
                    <center>Copyright © 2020 Ngayom Inc. All rights reserved.</center>
                </p>
            </div>
        </div>
    </div>

</footer>
<!--/Footer-->



<script src="<?= base_url('assets/eshop/'); ?>js/jquery.js"></script>
<script src="<?= base_url('assets/eshop/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/eshop/'); ?>js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url('assets/eshop/'); ?>js/jquery.prettyPhoto.js"></script>
<script src="<?= base_url('assets/eshop/'); ?>js/main.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: 'post',
            url: 'http://localhost/Ngayom/cart/datap',
            success: function(hasil_pro) {
                $("select[name=provinsi]").html(hasil_pro);
            }
        });

        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: 'post',
                url: 'http://localhost/Ngayom/cart/datak',
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kabupaten]").html(hasil_kota);
                }
            })
        });

        $.ajax({
            type: 'post',
            url: 'http://localhost/Ngayom/cart/datae',
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
                url: 'http://localhost/Ngayom/cart/datapa',
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