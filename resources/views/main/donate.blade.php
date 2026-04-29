@include('includes.header')
<style>
.donation-page-content-area {
    padding: 72px 0 92px;
    background:
        radial-gradient(circle at top left, rgba(230, 57, 70, 0.08), transparent 32%),
        radial-gradient(circle at top right, rgba(255, 127, 2, 0.08), transparent 28%),
        linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
}

.donation-page-content-area .donate-hero {
    margin-top: -22px;
    margin-bottom: 26px;
    padding: 34px 30px;
    border-radius: 28px;
    background: linear-gradient(135deg, #1D3557 0%, #172945 55%, #191717 100%);
    color: #ffffff;
    box-shadow: 0 20px 44px rgba(29, 53, 87, 0.18);
    position: relative;
    overflow: hidden;
}

.donation-page-content-area .donate-hero:before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(255, 127, 2, 0.12) 0%, transparent 42%, rgba(230, 57, 70, 0.16) 100%);
    pointer-events: none;
}

.donation-page-content-area .donate-hero .section-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 12px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.12);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.donation-page-content-area .donate-hero h1 {
    margin: 14px 0 10px;
    font-size: 42px;
    line-height: 1.12;
    font-weight: 800;
    position: relative;
    z-index: 1;
}

.donation-page-content-area .donate-hero p {
    max-width: 720px;
    margin: 0;
    font-size: 17px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.88);
    position: relative;
    z-index: 1;
}

.donation-page-content-area .donation-grid {
    margin-top: 10px;
}

.donation-page-content-area .donation-card {
    height: 100%;
    padding: 26px 24px;
    border-radius: 24px;
    background: #ffffff;
    border: 1px solid rgba(29, 53, 87, 0.08);
    box-shadow: 0 14px 34px rgba(29, 53, 87, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.donation-page-content-area .donation-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 42px rgba(29, 53, 87, 0.12);
    border-color: rgba(230, 57, 70, 0.24);
}

.donation-page-content-area .donation-card .card-eyebrow {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 999px;
    background: rgba(230, 57, 70, 0.1);
    color: #E63946;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.donation-page-content-area .donation-card h3,
.donation-page-content-area .donation-card h5,
.donation-page-content-area .donation-card .subtitle {
    color: #1D3557 !important;
    margin-bottom: 12px;
    font-weight: 800;
}

.donation-page-content-area .donation-card .subtitle {
    font-size: 24px !important;
    text-align: left !important;
}

.donation-page-content-area .donation-card .about-list {
    margin: 16px 0 0;
    padding-left: 18px;
}

.donation-page-content-area .donation-card .about-list li {
    margin-bottom: 10px;
    color: #44546a;
    line-height: 1.6;
}

.donation-page-content-area .paypal-card {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 260px;
    background:
        radial-gradient(circle at top right, rgba(0, 48, 135, 0.14), transparent 26%),
        radial-gradient(circle at bottom left, rgba(230, 57, 70, 0.10), transparent 30%),
        linear-gradient(180deg, #ffffff 0%, #f6faff 100%);
    position: relative;
    overflow: hidden;
}

.donation-page-content-area .paypal-card:before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(29, 53, 87, 0.03), rgba(255, 127, 2, 0.05));
    pointer-events: none;
}

.donation-page-content-area .paypal-inner {
    position: relative;
    z-index: 1;
    width: 100%;
}

.donation-page-content-area .paypal-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 14px;
    padding: 8px 14px;
    border-radius: 999px;
    background: linear-gradient(135deg, #0d47a1 0%, #1d3557 100%);
    color: #ffffff;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.donation-page-content-area .paypal-badge i {
    font-size: 13px;
}

.donation-page-content-area .paypal-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
}

.donation-page-content-area .paypal-logo img {
    width: 100%;
    max-width: 290px;
    display: block;
    border-radius: 22px;
    box-shadow: 0 18px 36px rgba(29, 53, 87, 0.14);
    border: 1px solid rgba(29, 53, 87, 0.08);
    background: #ffffff;
}

.donation-page-content-area .paypal-note {
    margin: 0 auto;
    max-width: 310px;
    padding: 10px 14px;
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(29, 53, 87, 0.08);
    color: #44546a;
    font-size: 14px;
    line-height: 1.55;
}

.donation-page-content-area .paypal-note strong {
    color: #1D3557;
}

.donation-page-content-area .bank-divider {
    height: 1px;
    margin: 28px 0;
    background: linear-gradient(90deg, transparent, rgba(230, 57, 70, 0.38), transparent);
}

.donation-page-content-area .bank-card {
    position: relative;
}

.donation-page-content-area .bank-card .bank-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 14px;
    border-radius: 999px;
    background: linear-gradient(135deg, #e63946 0%, #ff7f02 100%);
    color: #fff;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.donation-page-content-area .bank-card .bank-badge i {
    font-size: 13px;
}

.donation-page-content-area .bank-card .account-summary {
    margin-top: 12px;
    padding: 14px 16px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(29, 53, 87, 0.06), rgba(230, 57, 70, 0.05));
    border: 1px solid rgba(29, 53, 87, 0.08);
    color: #44546a;
    font-size: 14px;
    line-height: 1.65;
}

.donation-page-content-area .bank-card .account-summary strong {
    color: #1D3557;
}

@media (max-width: 991px) {
    .donation-page-content-area {
        padding: 54px 0 76px;
    }

    .donation-page-content-area .donate-hero h1 {
        font-size: 34px;
    }

    .donation-page-content-area .donate-hero p {
        font-size: 16px;
    }
}

@media (max-width: 575px) {
    .donation-page-content-area {
        padding: 38px 0 64px;
    }

    .donation-page-content-area .donate-hero {
        padding: 24px 18px;
        border-radius: 20px;
    }

    .donation-page-content-area .donate-hero h1 {
        font-size: 28px;
    }

    .donation-page-content-area .donate-hero p {
        font-size: 15px;
    }

    .donation-page-content-area .donation-card {
        padding: 20px 16px;
        border-radius: 18px;
    }

    .donation-page-content-area .donation-card .subtitle {
        font-size: 20px !important;
    }

    .donation-page-content-area .paypal-card {
        min-height: 230px;
    }

    .donation-page-content-area .paypal-logo img {
        max-width: 250px;
    }
}
</style>
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg activist-page">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Donation</h2>
                    <ul class="page-list">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Donation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="donation-page-content-area">
    <div class="container">
        <div class="donate-hero">
            <span class="section-label"><i class="fas fa-heart"></i> Support our mission</span>
            <h1>Donate with trust and make a real impact</h1>
            <p>Your contribution helps Red Brigade Lucknow continue self-defence training, survivor support, and women empowerment work across communities.</p>
        </div>

        <div class="row donation-grid justify-content-center">
            <div class="col-lg-6 col-md-8 mb-4">
                <div class="donation-card paypal-card text-center">
                    <div class="paypal-inner">
                        <span class="paypal-badge"><i class="fab fa-paypal"></i> Secure Online Donation</span>
                        <div class="paypal-logo">
                            <a href="https://www.paypal.me/MissVishwakarma" target="_blank" rel="noopener noreferrer" aria-label="Donate via PayPal">
                                <img src="<?php echo URL::asset('uploads/gallery/paypal.png');?>" class="pypl-box" alt="PayPal donation">
                            </a>
                        </div>
                        <div class="paypal-note"><strong>Fast & simple:</strong> Tap the PayPal card to donate instantly from anywhere.</div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="bank-divider"></div>
            </div>

            <div class="col-lg-12 about-box pt-2 pb-2 text-center">
                <h3 class="subtitle" style="font-size:32px !important;">BANK TRANSFER</h3>
                <p style="text-align:center; max-width: 760px; margin: 0 auto; color:#5f6d7e;">For Indian citizens, you can donate by direct transfer to the RB bank account or to Usha Vishwakarma’s account.</p>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="donation-card bank-card">
                    <span class="bank-badge"><i class="fas fa-university"></i> For Indian Citizens</span>
                    <h5 class="subtitle">Red Brigade Lucknow</h5>
                    <?php
                        $rbQrText = "Red Brigade Lucknow\nTrust Name: Red Brigade Lucknow\nBank Name: Panjab & Sind Bank\nAccount Number: 08021000012625\nIFSC: PSIB0000802\nPAN: AACTR9516J";
                        $rbQrUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=220x220&margin=12&data=' . rawurlencode($rbQrText);
                    ?>
                    <ul class="about-list">
                       <li>Trust Name : Red Brigade Lucknow</li>
                       <li>Bank Name : Panjab & Sind Bank.</li>
                       <li>Bank Account Name : Red Brigade Lucknow</li>
                       <li>Account Number : 08021000012625</li>
                       <li>Account Type : Saving</li>
                       <li>Branch Address : Indira Nagar, Lucknow, INDIA.</li>
                       <li>Branch Code : 000802</li>
                       <li>IFSC Code : PSIB0000802</li>
                       <li>PAN Number : AACTR9516J</li>
                    </ul>
                    <div class="account-summary">
                        <strong>Tip:</strong> Use the account number exactly as listed and mention “Donation” in your transfer note when possible.
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="donation-card bank-card">
                    <span class="bank-badge"><i class="fas fa-hands-helping"></i> Usha's Account</span>
                    <h5 class="subtitle">You can donate on Usha's bank account</h5>
                    <ul class="about-list">
                       <li>Account holder's Name : Usha Vishwakarma</li>
                       <li>Account Number : 30261158308</li>
                       <li>Account holder's Address: Near Ramlila Ground, Naubasta Khurd, Madiyav, District Lucknow, Uttar Pradesh (India)</li>
                       <li>Bank Name : State bank of india</li>
                       <li>Branch Address : MAHANAGAR,M-5, GOLE MARKET, MAHANAGAR</li>
                       <li>Pin Code : 226006.</li>
                       <li>City : Lucknow, State : Uttar-Pradesh</li>
                       <li>Branch Code : 691000</li>
                       <li>Branch IFSC Code : SBIN0008189</li>
                    </ul>
                    <div class="account-summary">
                        <strong>Note:</strong> This account is available for supporters who prefer a direct individual transfer route.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- donation page content area end -->

<!-- footer area start -->
@include('includes.footer')