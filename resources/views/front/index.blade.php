@extends('front.layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="py-5 py-lg-6 text-center position-relative overflow-hidden" style="padding-top: 6rem !important; padding-bottom: 6rem !important;">
        <div class="container-lg position-relative" style="z-index: 1;">
            <h1 class="display-2 fw-bold mb-4 text-gradient-primary">Welcome to the Future</h1>
            <p class="lead fs-4 text-white-50 mb-5 mx-auto" style="max-width: 600px;">Enterprise-grade solutions for modern businesses</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <button class="btn btn-gradient btn-lg px-5 py-3 fw-semibold rounded-pill">
                    Get Started
                </button>
                <button class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold rounded-pill">
                    Learn More
                </button>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div class="position-absolute top-0 end-0 opacity-25 float-animation" style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(240, 147, 251, 0.3) 0%, transparent 70%); border-radius: 50%; margin-top: -100px; margin-right: -100px;"></div>
        <div class="position-absolute bottom-0 start-0 opacity-25" style="width: 400px; height: 400px; background: radial-gradient(circle, rgba(102, 126, 234, 0.3) 0%, transparent 70%); border-radius: 50%; margin-bottom: -200px; margin-left: -100px;"></div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 py-lg-6">
        <div class="container-lg">
            <div class="text-center mb-5 pb-4">
                <h2 class="display-5 fw-bold mb-3">Powerful Features</h2>
                <p class="lead text-white-50 fs-5">Everything you need to succeed</p>
            </div>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">speed</span>
                        <h3 class="h5 fw-bold mb-3">Lightning Fast</h3>
                        <p class="text-white-50 mb-0 lh-base">Optimized performance for the modern web, delivering results in milliseconds.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">shield</span>
                        <h3 class="h5 fw-bold mb-3">Security First</h3>
                        <p class="text-white-50 mb-0 lh-base">Enterprise-grade security with end-to-end encryption and compliance standards.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">analytics</span>
                        <h3 class="h5 fw-bold mb-3">Data Insights</h3>
                        <p class="text-white-50 mb-0 lh-base">Real-time analytics and intelligent dashboards for data-driven decisions.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">cloud_sync</span>
                        <h3 class="h5 fw-bold mb-3">Cloud Native</h3>
                        <p class="text-white-50 mb-0 lh-base">Seamlessly integrated with major cloud providers for maximum flexibility.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">integration_instructions</span>
                        <h3 class="h5 fw-bold mb-3">Easy Integration</h3>
                        <p class="text-white-50 mb-0 lh-base">Simple APIs and webhooks to integrate with your existing tools and systems.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass glass-hover rounded-4 p-4 h-100 position-relative overflow-hidden card-animated transition-all">
                        <span class="material-symbols-rounded text-gradient-primary d-block mb-3" style="font-size: 2.5rem;">support_agent</span>
                        <h3 class="h5 fw-bold mb-3">24/7 Support</h3>
                        <p class="text-white-50 mb-0 lh-base">Round-the-clock customer support from our dedicated enterprise team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 border-top border-bottom border-secondary border-opacity-25 bg-black bg-opacity-10">
        <div class="container-lg">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="display-4 fw-bold text-gradient-secondary mb-2">99.9%</div>
                    <div class="text-white-50">Uptime</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-4 fw-bold text-gradient-secondary mb-2">50k+</div>
                    <div class="text-white-50">Active Users</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-4 fw-bold text-gradient-secondary mb-2">150+</div>
                    <div class="text-white-50">Countries</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-4 fw-bold text-gradient-secondary mb-2">$2B+</div>
                    <div class="text-white-50">Processed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 py-lg-6 text-center">
        <div class="container-lg">
            <div class="glass rounded-5 p-5 mx-auto" style="max-width: 800px;">
                <h2 class="display-5 fw-bold mb-4">Ready to get started?</h2>
                <p class="lead text-white-50 mb-4">Join thousands of companies already using our platform</p>
                <button class="btn btn-gradient btn-lg px-5 py-3 fw-semibold rounded-pill">
                    Start Free Trial
                    <span class="material-symbols-rounded ms-2">arrow_forward</span>
                </button>
            </div>
        </div>
    </section>
@endsection