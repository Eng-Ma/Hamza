<div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">

                <div class="modal-header">
                    <h6 class="modal-title">1 Item in cart</h6>
                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <!-- الصورة -->
                        <div class="col-md-6">
                            <img id="modalImage" src="" alt="صورة المنتج" class="img-fluid mb-2">
                        </div>

                        <!-- المعلومات -->
                        <div class="col-md-6">
                            <h5 id="modalName"></h5>
                            <p>Price: <span id="price"></span> $</p>

                            <!-- الكمية -->
                            <div class="d-flex align-items-center mb-2">
                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                    onclick="updateQuantity('minus')">-</button>
                                <input type="text" id="productQty" value="1"
                                    class="form-control mx-2 text-center" style="width:60px;" readonly>
                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                    onclick="updateQuantity('plus')">+</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer d-flex flex-column align-items-stretch">
                    <!-- التوتال الجزئي -->
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span id="total">0 $</span>
                    </div>

                    <!-- زر Add To Cart -->
                    <form action="{{ route('cart.add') }}" method="POST" class="mb-2">
                        @csrf
                        <input type="hidden" name="id" id="modalProductId">
                        <input type="hidden" name="name" id="modalProductName">
                        <input type="hidden" name="price" id="modalProductPrice">
                        <input type="hidden" name="quantity" id="modalProductQty">
                        <input type="hidden" name="image" id="modalProductImage">

                        <button type="submit" class="btn btn-dark w-100">Add To Cart</button>
                    </form>

                    <!-- زر Clear Cart -->
                    <button class="btn btn-light w-100" data-bs-dismiss="modal" type="button">Clear Cart</button>
                </div>

            </div>
        </div>
    </div>
