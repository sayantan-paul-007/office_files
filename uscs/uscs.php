<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.educba.com/academy/wp-content/themes/business-pro-theme/assets/styles/bootstrap.min.css" rel="stylesheet">

<!-- swiperjs cdn css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- Animation on scroll cdn css -->
<link rel="stylesheet" href="https://cdn.educba.com/academy/wp-content/themes/business-pro-theme/assets/addons/aos-master/aos.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');

    /* 60-30-10 Rule:
    60% - dominant colour - light - white shades, gradients, black shades, black gradients
    30% - primary colour - brand colour 
    10% - accent colour - CTA- call to action - button, icons, highlight */
    :root {
        --dominant: #faf2f0;
        /* I have added a new variable named 'dominant' */
        --primary: #F68665;
        --dark-primary: #DB2A58;
        --accent: #F14D23;
        /* I have changed the primary color to accent color and vice versa */
        --light-text: #FFFFFF;
        --primary-text: #333333;
        --secondary-text: #aaaaaa;
        /* I have changed the value of secondary text (previous value: #EEEEEE) */
        --divider: #757575;
        --texticons: #E3E3E3;
        /* I have added the fonts variable */
        --head-font: 'Poppins';
        --subhead-font: 'Roboto';
        --body-font: 'Lato';
    }

    /* Rounded Border radius */
    .rounded {
        border-radius: 0.375 !important;
    }

    .rounded-1 {
        border-radius: 0.25rem !important;
    }

    .rounded-2 {
        border-radius: 0.375rem !important;
    }

    .rounded-3 {
        border-radius: 0.5rem !important;
    }

    .rounded-4 {
        border-radius: 1rem !important;
    }

    .rounded-5 {
        border-radius: 2rem !important;
    }

    /* Background Classes */
    .dominant-bg {
        background-color: var(--dominant) !important;
    }

    .primary-bg {
        background-color: var(--primary) !important;
    }

    .dark-primary-bg {
        background-color: var(--dark-primary) !important;
    }

    .accent-bg {
        background-color: var(--accent) !important;
    }

    .light-text-bg {
        background: var(--light-text) !important;
    }

    .primary-text-bg {
        background: var(--primary-text) !important;
    }

    .secondary-text-bg {
        background: var(--secondary-text) !important;
    }
    /* Border classes */
    .dominant-border {
        border-color: #DB2A58 !important;
    }

    .primary-border {
        border-color: #333333 !important;
    }

    .dark-primary-border {
        border-color: #FF85A4  !important;
    }

    .accent-border {
        border-color:  #F14D23 !important;
    }

    .light-text-border {
        border-color: #aaaaaa !important;
    }

    .primary-text-border {
        border-color:  #F68665  !important;
    }

    .secondary-text-border {
        border-color:#757575 !important;
    }
    .extra-border{
        border-color: #E3E3E3  !important;
    }
    /* Font Colours */
    .text-dominant-bg {
        color: var(--dominant);
    }

    .text-primary-bg {
        color: var(--primary);
    }

    .text-dark-primary-bg {
        color: var(--dark-primary);
    }

    .text-accent {
        color: var(--accent);
    }

    .light-text {
        color: var(--light-text);
    }

    .primary-text {
        color: var(--primary-text);
    }

    .secondary-text {
        color: var(--secondary-text);
    }

    /* Fonts */
    .heading-font {
        font-family: var(--head-font);
    }

    .subheading-font {
        font-family: var(--subhead-font);
    }

    .body-font {
        font-family: var(--body-font);
    }

    /* Font Weights */
    .fw-100 {
        font-weight: 100 !important;
    }

    .fw-200 {
        font-weight: 200 !important;
    }

    .fw-300 {
        font-weight: 300 !important;
    }

    .fw-400 {
        font-weight: 400 !important;
    }

    .fw-500 {
        font-weight: 500 !important;
    }

    .fw-600 {
        font-weight: 600 !important;
    }

    .fw-700 {
        font-weight: 700 !important;
    }

    .fw-800 {
        font-weight: 800 !important;
    }

    .fw-900 {
        font-weight: 900 !important;
    }

    /* FONT SIZE CLASSES */
    .fs-large-xxx {
        font-size: 45px;
    }

    .fs-large-xx {
        font-size: 40px;
    }

    .fs-large-x {
        font-size: 35px;
    }

    .fs-large {
        font-size: 30px;
    }

    .fs-medium-2 {
        font-size: 24px;
    }

    .fs-medium {
        font-size: 18px;
    }

    .fs-small {
        font-size: 12px;
    }

    .metabox {
        position: relative;
    }

    .metabox-section {
        position: relative;
        top: 60px;
    }
    .metabox-section-2{
        position: relative;
        top:-80px;
    }
    .accordion-button::after {
        width: 24px;
        height: 24px;
        margin-left: auto;
        content: "";
        background-image: url('data:image/svg+xml,%3Csvg xmlns="http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg" width="24" height="24" viewBox="0 0 24 24"%3E%3Cpath fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"%2F%3E%3C%2Fsvg%3E');
        background-repeat: no-repeat;
        background-size: 24px;
        transition: transform .2s ease-in-out;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url('data:image/svg+xml,%3Csvg xmlns="http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg" width="24" height="24" viewBox="0 0 24 24"%3E%3Cpath fill="currentColor" d="M19 12.998H5v-2h14z"%2F%3E%3C%2Fsvg%3E');
        transition: transform .2s ease-in-out;


    }

    .accordion-button:not(.collapsed) {
        box-shadow: none;
        background: transparent;
    }

    .accordion-button:focus {
        border: none;
        box-shadow: none;
        color:var(--primary-text)
    }
   
    .apexcharts-legend{
        display: none;
    }
    .apexcharts-pie-slice-0{
        fill: #DB2A58 !important;
    }
    .apexcharts-pie-slice-1{
        fill:#333333 !important;
    }
    .apexcharts-pie-slice-2{
        fill: #FF85A4  !important;
    }
    .apexcharts-pie-slice-3{
        fill: #F14D23 !important;
    }
    .apexcharts-pie-slice-4{
        fill:#aaaaaa !important;
    }
    .apexcharts-pie-slice-5{
        fill:#F68665  !important;
    }
    .apexcharts-pie-slice-6{
        fill: #757575 !important;
    }
    .apexcharts-pie-slice-7{
        fill: #E3E3E3 !important;
    }
    .apexcharts-pie-area {
        stroke: none !important;
    }
    .apexcharts-pie-label{
        font-size: large;
        font-family: var(--body-font) !important;
    }
    .apexcharts-tooltip{
    display: none !important;
  
}

</style>

<section class="py-5">
    <div class="container-fluid">
        <div class="row flex-lg-row-reverse justify-content-center align-items-center px-4">
            
            <img class="img-fluid rounded-5 shadow rounded-5 col-md-5 p-0 justify-content-center" src="./assets/image-1.jpg" alt="">
            <div class="col-md-7 py-5">
                <div class="py-2"></div>
                <h1 class="fs-large-xxx heading-font fw-800 primary-text pb-2"> Certified Cybersecurity Consultant (CCC™) </h1>
                <p class="fs-medium subheading-font secondary-text fw-400 pb-4">Forge Ahead in Your Cybersecurity Career with The Most Impactful Cybersecurity Certification.</p>
                <button class="btn accent-bg px-4 py-3 fs-medium light-text fw-600 "><a href="#footer" class="light-text" style="text-decoration:none;">Apply Now</a> </button>
                <p class="fs-medium-2 subheading-font secondary-text fw-400 py-3">A certification by <img src="https://cdn.educba.com/academy/wp-content/uploads/2023/04/USCSI.png" height="56px" style="height:56px;"  alt=""></p>
            </div>
            
        </div>
    </div>
</section>
<section class="metabox">
    <div class="container">
        <div data-aos="zoom-in" data-aos-duration="2000" class="metabox-section  p-md-4 accent-bg p-3 rounded">
            <div class="row">
                <div class="col-12 col-sm-6  col-md-3">
                    <div class="row py-sm-0 py-3 align-items-center">
                        <div class="col-4 d-flex light-text justify-content-center"><span class="iconify fs-large-xxx" data-icon="mdi:access-time"></span></div>
                        <div class="col-8 py-2  p-0 flex-column">
                            <h3 class="fs-medium m-0 light-text fw-900">Program Duration</h3>
                            <p class="fs-medium m-0 light-text">4-24 Weeks</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="row py-sm-0 py-3  align-items-center">
                        <div class="col-4 d-flex light-text justify-content-center"><span class="iconify fs-large-xxx" data-icon="mdi:hours-24"></span></div>
                        <div class="col-8 py-2  p-0 flex-column">
                            <h3 class="fs-medium m-0 light-text fw-900">Hours of Learning</h3>
                            <p class="fs-medium m-0 light-text">8–10 Hours per Week</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="row py-sm-0 py-3 align-items-center px-2">
                        <div class="col-4 d-flex light-text justify-content-center"><span class="iconify fs-large-xx" data-icon="fluent-mdl2:join-online-meeting"></span></div>
                        <div class="col-8 py-2  p-0 flex-column">
                            <h3 class="fs-medium m-0 light-text fw-900">Program Format</h3>
                            <p class="fs-medium m-0 light-text">Self-Paced</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="row py-sm-0 py-3 align-items-center px-1 ">
                        <div class="col-4 d-flex light-text justify-content-center"><span class="iconify fs-large-xx" data-icon="bi:calendar-date"></span></div>
                        <div class="col-8 py-2  p-0 flex-column">
                            <h3 class="fs-medium m-0 light-text fw-900">Program Start Date</h3>
                            <p class="fs-medium m-0 light-text">Anytime</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

</section>
<section>
    <div class="container-fluid dominant-bg py-5">
        <div class="row p-sm-5 p-4">
            <div data-aos="fade-right" data-aos-duration="2000" class="col-md-5 d-flex align-items-center justify-content-center mt-5 "><img src="./assets/ccc-logo.png" alt="" class=" h-100 h-75"></div>
            <div data-aos="fade-left" data-aos-duration="2000" class="col-md-7">
                <h3 class="heading-font primary-text fw-800 fs-large-xx pb-2 mt-5">Program Overview</h3>
                <p class="body-font primary-text fs-medium">The Certified Cybersecurity Consultant (CCC™) certification is the most effective program for individuals who are looking to learn the latest, industry-relevant, and trend-setting learning to be aware of the cyber threats and help businesses, enterprises, and governments to assess risks. The program also enables a CCC™ certified professional to develop a secure architecture for internal and external applications. </p>
                <p class="body-font fs-medium">CCC™ is a mid-level certification program that includes various modules such as – Cryptographic Techniques, Applications of Cryptography, Security Architecture, Applying Architecture Models, Machine Learning, Data Science, and a lot more.</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 primary-text-bg p-md-4 px-2 py-2 light-text ">
                <h3 class="heading-font fw-800 fs-large-xxx fw-600 pt-5 py-2 pb-4 text-center">PROGRAM FEE</h3>
                <div class="row align-items-center d-flex pb-3">
                    <div class="col-2 d-flex justify-content-center"><span class="iconify fs-medium" data-icon="mdi:tick"></span></div>
                    <div class="col-10 p-0">
                        <p class="m-0 body-font fw-300 fs-medium-2">CCC™ covers all the latest topics through eBooks and videos with Practice Code</p>
                    </div>

                </div>
                <div class="row align-items-center d-flex pb-3">
                    <div class="col-2 d-flex justify-content-center"><span class="iconify fs-medium" data-icon="mdi:tick"></span></div>
                    <div class="col-10 p-0">
                        <p class="m-0 body-font fw-300 fs-medium-2">Self-paced training module</p>
                    </div>
                </div>
                <div class="row align-items-center d-flex pb-3">
                    <div class="col-2 d-flex justify-content-center"><span class="iconify fs-medium" data-icon="mdi:tick"></span></div>
                    <div class="col-10 p-0">
                        <p class="m-0 body-font fw-300 fs-medium-2">Self-paced training module</p>
                    </div>
                </div>
                <div class="container "></div>
                <div class="row py-3 pb-5 px-5">
                    <div class="col-sm-6 py-3 d-flex justify-content-center"><button class="w-100 btn accent-bg fs-medium light-text fw-600 px-5 py-2 ">PAY IN FULL </button></div>
                    <div class="col-sm-6 py-3 d-flex justify-content-center"><button class=" w-100 btn text-accent fs-medium light-text-bg fw-600 px-5 py-2 ">PAY IN INSTALLMENTS </button></div>
                </div>
            </div>
            <div class="col-md-6 py-5 d-flex light-text flex-column align-items-stretch primary-bg justify-content-center">
                <h3 class="heading-font fw-800  text-center" style="font-size: 108px;">$699 </h3>
                <p class="subheading-font fs-large  text-center">(*ALL-INCLUSIVE)</p>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <h3 class="text-center heading-font fw-800 py-md-4 pb-3 fs-large-xxx">What You Will Learn </h3>

        </div>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                <div id="chart"></div>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="accordion pt-3 px-md-5 px-3" id="accordionExample">
                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button collapsed dominant-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Importance" aria-expanded="true" aria-controls="collapseOne">
                                Securing Data
                            </button>
                        </h2>
                        <div id="Importance" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Protecting Data in Motion or at Rest</li>
                                    <li>The Evolution of Ciphers</li>
                                    <li>Evaluating Network Attacks</li>
                                    <li>Design Principles of a Secure Cloud</li>
                                    <li>Certificate Request or Enrollment Methods</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font">
                            <button class="accordion-button collapsed primary-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Mathematics" aria-expanded="false" aria-controls="collapseTwo">
                                Cryptographic Techniques
                            </button>
                        </h2>
                        <div id="Mathematics" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Introducing Symmetric Encryption</li>
                                    <li>Dissecting Asymmetric Encryption</li>
                                    <li>Examining Hash Algorithms</li>
                                    <li>Public Key Infrastructure</li>
                                    <li>Cryptography</li>
                                    <li>Certification Authority or CA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button collapsed dark-primary-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Hadoop" aria-expanded="false" aria-controls="collapseThree">
                                Applications of Cryptography
                            </button>
                        </h2>
                        <div id="Hadoop" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Adhering to Standards</li>
                                    <li>Using a Public Key Infrastructure</li>
                                    <li>Protecting Cryptographic Techniques</li>
                                    <li>Exploring IPsec and TLS - Optional Reading</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font  fs-large fw-600">
                            <button class="accordion-button  collapsed accent-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Database" aria-expanded="false" aria-controls="collapseThree">
                                Security Architecture
                            </button>
                        </h2>
                        <div id="Database" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2" >
                                <ul>
                                    <li>Understanding Cybersecurity Architecture</li>
                                    <li>Design Principles of a Secure Cloud</li>
                                    <li>Certificate Request or Enrollment Methods</li>
                                    <li>The Core of Solution Building - Optional Reading</li>
                                    <li>Configuring CA Properties - Optional Reading</li>
                                    <li>Migrating Hashing Algorithm from SHA1 to SHA2 on Windows Server 2016 CA - Optional Reading</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button collapsed light-text-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Performing" aria-expanded="false" aria-controls="collapseThree">
                                Building an Architecture
                            </button>
                        </h2>
                        <div id="Performing" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Scope and Requirements</li>
                                    <li>Your Toolbox</li>
                                    <li>Developing Enterprise Blueprints - Optional Reading</li>
                                    <li>Application Blueprints - Optional Reading</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button  collapsed primary-text-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Visualization" aria-expanded="false" aria-controls="collapseThree">
                                Execution
                            </button>
                        </h2>
                        <div id="Visualization" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Applying Architecture Models</li>
                                    <li>Future-Proofing</li>
                                    <li>Web Application Hacking</li>
                                    <li>Securing Your Network and Website</li>
                                    <li>Defending from Social Engineering Attacks</li>
                                    <li>Cloud Platform and Infrastructure Security</li>
                                    <li>Securing Cloud Application Architectures - Optional Reading</li>
                                    <li>Putting It All Together - Optional Reading</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button collapsed secondary-text-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#PowerBI" aria-expanded="false" aria-controls="collapseThree">
                                Data Science and Cybersecurity
                            </button>
                        </h2>
                        <div id="PowerBI" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Catching Impersonators and Hackers</li>
                                    <li>Mitigate Financial Fraud</li>
                                    <li>Efficient Network Anomaly Detection Using k-means</li>
                                    <li>Changing the Game with Tensor Flow - Optional Reading</li>
                                    <li>Decision Tree and Context-Based Malicious Event Detection - Optional Reading</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item my-3 py-3 rounded-3">
                        <h2 class="accordion-header subheading-font fs-large fw-600">
                            <button class="accordion-button collapsed extra-border border-5 border-start fs-medium-2 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#Machine" aria-expanded="false" aria-controls="collapseThree">
                                Data and Machine Learning
                            </button>
                        </h2>
                        <div id="Machine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-500 body-font fs-medium-2">
                                <ul>
                                    <li>Machine Learning and its Applications</li>
                                    <li>Understanding Neural Networks</li>
                                    <li>Artificial Neural Networks (ANNs)</li>
                                    <li>Understanding Deep Learning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="py-5 dominant-bg">
    <div class="container">
        <div class="row py-3">
            <h3 class="heading-font primary-text text-center fw-800 fs-large-xx py-2">Program Benefits</h3>
        </div>
        <div class="row d-flex align-items-start">
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="streamline:interface-content-note-pad-text-content-notes-book-notepad-notebook"></span>
                <p class="subheading-font fw-400 fs-medium text-center">Program Content, vetted by 20+ global SMEs </p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="fa-solid:chalkboard-teacher"></span>
                <p class="subheading-font fw-400 fs-medium text-center">Self-paced Program format and Instructor-led Training </p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="material-symbols:calendar-month-outline-rounded"></span>
                <p class="subheading-font fw-400 fs-medium text-center">Program duration of 4 – 24 weeks only, with just 8-10 hours/week of learning</p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="solar:global-outline"></span>
                <p class="subheading-font fw-400 fs-medium text-center">Global recognition with cross-platform Cybersecurity certification</p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="ant-design:rise-outlined"></span>
                <p class="subheading-font fw-400 fs-medium">Exponential Salary hike </p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="ion:rocket-outline"></span>
                <p class="subheading-font fw-400 fs-medium text-center">10x Knowledge boost in Cybersecurity</p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="icon-park-outline:robot-one"></span>
                <p class="subheading-font fw-400 fs-medium text-center">AI-proctored exam – anytime, anywhere</p>
            </div>
            <div class="col-md-3 col-6 p-3 d-flex flex-column align-items-center justify-content-center"><span class="iconify text-accent my-3" style="font-size: 64px;" data-icon="ant-design:safety-certificate-outlined"></span>
                <p class="subheading-font fw-400 fs-medium text-center">World-class digital badge with lifetime validity</p>
            </div>
        </div>
    </div>
    <div class="py-4">
    <div class="container">

    </div>
</div>
</section>
<section class="metabox">
    <div class="container">
        <div data-aos="zoom-in" data-aos-duration="2000" class="metabox-section-2  p-md-4 primary-text-bg p-3 rounded">
            <div class="row">
                <h3 class="heading-font light-text text-center fw-700">GET YOUR LATEST PROGRAM SELF-STUDY KIT WORTH UP TO <br> US $625 for <strong class="fs-large-xx text-primary-bg">FREE</strong> </h3>
            </div>
            <div class="row px-md-4 pt-md-3 p-3 ">
                <div class="col-md-6">
                    <div class="row p-3 d-flex align-items-center">
                        <div class="col-3 col-md-2 d-flex justify-content-center"><span class="iconify fs-large-x text-primary-bg" data-icon="streamline:interface-content-book-open-content-books-book-open"></span></div>
                         <div class="col-md-10 col-9 subheading-font fs-medium-2 light-text">Personalized Study-Books</div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row p-3 d-flex align-items-center">
                        <div class="col-3 col-md-2 d-flex justify-content-center"><span class="iconify  text-primary-bg fs-large-xx" data-icon="ant-design:safety-certificate-outlined"></span></div>
                        <div class="col-md-10 col-9 subheading-font fs-medium-2 light-text">Sharable digital badge</div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row p-3 d-flex align-items-center">
                        <div class="col-3 col-md-2 d-flex justify-content-center"><span class="iconify  text-primary-bg fs-large-xxx" data-icon="fluent:learning-app-20-filled"></span></div>
                        <div class="col-md-10 col-9 subheading-font fs-medium-2 light-text">Real-world workshop-based eLearning</div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row p-3 d-flex align-items-center">
                        <div class="col-3 col-md-2 d-flex justify-content-center"><span class="iconify text-primary-bg  fs-large-xx" data-icon="teenyicons:hd-screen-outline"></span></div>
                        <div class="col-md-10 col-9 subheading-font fs-medium-2 light-text">HD quality self-paced videos, vetted by the world's best SMEs
</div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row p-3 d-flex align-items-center">
                        <div class="col-3 col-md-2 d-flex justify-content-center"><span class="iconify text-primary-bg  fs-large-xx" data-icon="mdi:code-json"></span></div>
                        <div class="col-md-10 col-9 subheading-font fs-medium-2 light-text">State-of-the-art lab-based eLearning with Practice Code</div>
                    </div>
                </div>
    
                
            </div>
        </div>
    </div>

</section>
<section class="py-3">
    <div class="container">
        <div class="row py-3">
            <h3 class="heading-font primary-text text-center fw-800 fs-large-xx pb-2">Who Should Apply?</h3>
        </div>
        <div class="row px-md-5 px-2">
            <div class="col-md-6 pb-3">
                <div class="card rounded-4 shadow">
                    <img src="./assets/managers.jpg" class="rounded-4" alt="">
                    <h4 class="heading-font primary-text text-center fw-800 fs-medium-2 p-3">Directors / Senior Managers / Consultants</h4>
                    <p class="body-font fs-medium px-4  ">Project Managers, Delivery Managers, Project Head, Functional Directors, Consultants and any senior professional with an interest in Cybersecurity</p>
                </div>
            </div>
            <div class="col-md-6 pb-3">
                <div class="card rounded-4 shadow">
                    <img src="./assets/managers.jpg" class="rounded-4" alt="">
                    <h4 class="heading-font primary-text text-center fw-800 fs-medium-2 p-3">Engineers / Team Leads / <br> Marketers</h4>
                    <p class="body-font fs-medium px-4  ">Software Engineers/Developers, Team Leads, Quality Engineers, Network Engineers, Marketing Managers, and any professional with an interest in Cybersecurity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 dominant-bg">
    <div class="container">
    <div class="row py-3">
            <h3 class="heading-font primary-text text-center fw-800 fs-large-xx pb-2">Contact Us</h3>
        </div>
        <div class="row flex-lg-row-reverse justify-content-center align-items-center">
            <div class="col-md-6 ">
               <form class="light-text-bg p-3 px-5  rounded-4" action="" method="post">
               <h3 class="heading-font primary-text text-center py-3 fw-800">Fill your details</h3>
               <div class="row px-5 pb-3">
                   <input style="height:40px;" type="text" class="w-100" placeholder="Your name*" name="name" id="name" required>
               </div>
               <div class="row px-5 pb-3">
                   <input style="height:40px;" type="email" class="w-100" placeholder="Your email*" name="email" id="email" required>
               </div>
               <div class="row px-5 pb-3">
                   <input style="height:40px;" type="tel" class="w-100" placeholder="Phone number*" name="phone" id="phone" required>
               </div>  
               <div class="row px-5 pb-3">
                   <input style="height:40px;" type="text" class="w-100" placeholder="Your Enterprise / University" name="uni" id="uni">
               </div>  
               <div class="row px-5 pb-3">
                <button type="submit" class="btn accent-bg p-3 rounded-3 fs-medium light-text fw-600">Submit</button>
               </div>  
               </form>
            </div>
            <div class="col-md-6 text-center d-flex flex-column "><h3 class="heading-font primary-text text-center py-4 fw-800">Get in Touch with us</h3>
            <a class="primary-text fs-medium-2 px-4 mb-3 " style="text-decoration:none;" href="tel:919930081408"> <span class="iconify text-accent fs-large-x me-3 " data-icon="ph:phone"></span>+91 9930081408</a>
            <a class="primary-text fs-medium-2 px-4 " style="text-decoration:none;" href="mailto:info@educba.com"> <span class="iconify text-accent fs-large-x me-1" data-icon="ic:outline-email"></span> info@educba.com</a>
        </div>
        </div>
    </div>
</section>
<!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.educba.com/academy/wp-content/themes/business-pro-theme/assets/scripts/bootstrap.min.js" defer>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Swiper cdn js -->
    <script src="https://cdn.educba.com/academy/wp-content/themes/business-pro-theme/assets/addons/swiper-9.1.1/package/swiper-bundle.js">
    </script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <!-- Animation on scroll cdn js -->
    <script src="https://cdn.educba.com/academy/wp-content/themes/business-pro-theme/assets/addons/aos-master/aos.js">
    </script>
    <script>
        AOS.init();
    </script>
<script>
         var options = {
          series: [13, 15, 11, 16, 8, 22, 8, 7],
          chart: {
          width: 500,
          type: 'pie',
        },
        labels: ['Securing Data ', 'Cryptographic Techniques', 'Applications of Cryptography', 'Security Architecture', 'Building an Architecture','Execution','Machine Learning and Cybersecurity	','Data Science and Cybersecurity'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 500
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>