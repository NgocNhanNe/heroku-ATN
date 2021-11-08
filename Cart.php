<?php
    if(!isset($_SESSION['us'])){
        echo '<script>alert("You must login to access cart");</script>';
        echo '<meta http-equiv="Refresh" content="0;URL=?page=login">';
    }
    else
    {
?>
<section class="jumbotron text-center" style="background-color: rgb(224, 236, 181)">
    <div class="container">
        <h1 class="jumbotron-heading">VIEW CART</h1>
        <div class="container" align="right">
            <form class="form-inline my-2 my-lg-0">
                    <i class="fa fa-shopping-cart"></i><img class="img" src="images/Shopping-Cart-icon.png"> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
    </div>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="images/rug1.jpg" width="100px" height="100px"/></td>
                            <td>Luxury Hand Tufted Rugs</td>
                            <td>Stocking</td>
                            <td><input class="form-control" type="text" value="2"/></td>
                            <td class="text-right">$100x2</td>
                            <td class="text-right"><button class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="images/mirror.jpg" width="100px" height="100px"/></td>
                            <td>Mirror Silver</td>
                            <td>Stocking</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$500</td>
                            <td class="text-right"><button class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="images/furniture1.jpg" width="100px" height="100px" /> </td>
                            <td>Classic withe chair Luxury fur</td>
                            <td>Stocking</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$120</td>
                            <td class="text-right"><button class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">$820,00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">$80</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>VAT(%)</td>
                            <td class="text-right">$8.2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>$908,20</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
