<!-- payment -->

<div id="payment">
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage2">
                        <h2>Please pay the premium price to continue</h2>
                        <h3 class="text-white">Ethereum's secure payment</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="text-center">
                <div>
                    <figure><img src="images/metamask.png" alt="#" style="width:80px;height:80px;" /></figure>
                </div>

                <div class="col-md-12 text-danger h4">
                                        <label for="showPremiumprice" class="phones m-5">The amount to pay is:
                                            
                                            </label>
                                        <span type="text" id="showPremiumprice" name="showPremiumprice"></span> €
                                    </div>

                                    <div class="col-md-12 text-danger h4">
                                        <label for="etherPrice" class="phones m-5">The equivalent amount in Ether:
                                            
                                            </label>
                                        <span type="text" id="etherPrice" name="etherPrice">0.0074716508325147</span> Ether
                                    </div>
                
                    <br>
                    <button onclick="paymentToReview()" class="read_more btn btn-default mb-5">Back</button>
                    <button onclick="fiatToEth()" class="read_more btn btn-default mb-5">Pay now</button>
                    <button style="display: none" onclick="" class="read_more btn btn-default mb-5">Continue</button>
                

                </div>
            </div>
        </div>
        
        <?php include "includes/footer.php" ?>
    </div>
   

<!-- end payment -->