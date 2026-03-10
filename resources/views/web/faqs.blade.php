@extends('web.include.content')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="fw-semibold tx-15 text-dark">Faqs</h2>
                    <hr style="background: #000;height: 1px !important;">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h2 class="text-dark mb-2">General</h2>
                        <div class="panel-group1" id="accordion11">

                            <!-- Panel 1 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse1" aria-expanded="false">
                                            What is Basalt?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Basalt is a skincare brand offering a range of products for face and body care.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 2 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse2" aria-expanded="false">
                                            How do I use Basalt products?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Please refer to the product packaging or individual product pages for specific
                                            application notes and tips.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 3 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse3" aria-expanded="false">
                                            Are Basalt products cruelty-free?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Check our About page for more information on our brand values and policies.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 4 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse4" aria-expanded="false">
                                            How do I stay updated on new Basalt products and promotions?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Follow us on social media or sign up for our newsletter to stay informed about
                                            new products, promotions, and more.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 5 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse5" aria-expanded="false">
                                            How can I contact Basalt customer service?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>You can reach us through our contact form or email us directly. We're happy to
                                            help with any questions or concerns</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 6 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse6" aria-expanded="false">
                                            Where can I find more information about your ingredients?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>You can find ingredient lists and more information on individual product pages.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 7 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse7" aria-expanded="false">
                                            What makes Basalt unique?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Check out our About page to learn more about our brand story, values, and
                                            mission.</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="text-dark mb-2">Shipping</h2>
                        <div class="panel-group1" id="accordion11">

                            <!-- Panel 1 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse8" aria-expanded="false">
                                            What shipping options do you offer?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>We offer [list shipping options, e.g., standard, expedited, overnight] shipping to ensure you receive your products in a timely manner.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 2 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse9" aria-expanded="false">
                                            How long does shipping take?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Shipping times vary depending on your location and the shipping option chosen. Estimated delivery times are provided during checkout.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 3 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse17" aria-expanded="false">
                                            Do you ship internationally?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>We ship [to specific countries or worldwide]. Check our shipping policy for more information.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 4 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse10" aria-expanded="false">
                                            What happens if my order is lost or damaged during shipping?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>We take great care in packaging and shipping our products. If your order arrives damaged or lost, please contact us and we'll work to resolve the issue promptly.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 5 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse11" aria-expanded="false">
                                            Can I track my order?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Yes, once your order ships, you will receive an email with tracking information so you can stay up-to-date on the status of your order.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="text-dark mb-2">Returns</h2>
                        <div class="panel-group1" id="accordion11">

                            <!-- Panel 1 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse12" aria-expanded="false">
                                            Can I return or exchange a product?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Yes, you can return or exchange a product within [time frame, e.g., 30 days] of delivery. Please see our full return policy for details.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 2 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse13" aria-expanded="false">
                                           How do I initiate a return or exchange?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>To start the return or exchange process, please contact our customer service team via email or phone, and we'll guide you through the next steps.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 3 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse14" aria-expanded="false">
                                            What is the condition of the product for returns?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Products must be in their original packaging and in unused condition to be eligible for returns or exchanges.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 4 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse15" aria-expanded="false">
                                            Do I get a full refund?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p>Yes, you'll receive a full refund of the purchase price, minus any shipping costs, once we receive and process your returned product.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel 5 -->
                            <div class="panel panel-default mb-1">
                                <div class="panel-heading1 bg-white">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            style="color: #7987a1  !important" data-bs-parent="#accordion11"
                                            href="#collapse16" aria-expanded="false">
                                           How long does it take to process a return or exchange?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                    <div class="panel-body ">
                                        <p> Once we receive your returned product, we'll process your return or exchange within [time frame, e.g., 5-7 business days]. You'll receive an update via email once it's complete.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
