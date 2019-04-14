@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Services -->
    <header class="service-section mb-3" id="service-section">
        <div class="dark-overlay">
            <div class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    Our Services
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Explore Section -->
    <section id="explore-head-section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-5">
                            WE COMMITED TO HELPING
                        </h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, perspiciatis 
                            dolor blanditiis modi soluta numquam cumque minus odit, excepturi tempore ex 
                            delectus saepe repellat dolorem ullam dolores nisi, non molestias.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-section" class="bg-light">
        <div class="service-section-inner container py-5">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="cord-body text-center">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h1 class="card-title">Bulk SMS</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio minima 
                                dolorum cumque iusto tempore vitae!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="cord-body text-center">
                            <div class="icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h1 class="card-title">Mobile Marketing</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio minima 
                                dolorum cumque iusto tempore vitae!
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="cord-body text-center">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h1 class="card-title">CRM</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio minima 
                                dolorum cumque iusto tempore vitae!
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="cord-body text-center">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h1 class="card-title">Knowledge &amp; Business</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio minima 
                                dolorum cumque iusto tempore vitae!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="explain-section" class="bg-light">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-sm-12 col-md-6">
                    <div class="pl-md-5">
                        <h2 class="display-5">Bulk SMS</h2>
                        <p class="lead">
                            (SALES, MARKETING, CUSTOMER BIRTHDAYS, CUSTOMER CARE & INFORMATION SMS’s)
                        </p>
    
                        <p>
                            Join thousands of businesses and organizations, from all industry sectors, using us 
                            to find new prospects, increase sales and develop exceptional brand loyalty
                        </p>
    
                        <p>
                            Your next SMS campaign could be delivered straight into the hands of your prospects 
                            and customers
                        </p>

                        <p>
                            (Online SMS Program – No Installation required)
                        </p>
                        
                        <ul>
                            <li>Sms short codes</li>
                            <li>Sms long codes</li>
                            <li>Sms competitions</li>
                            <li>Bulk mms</li>
                            <li>Automated voice sms (voice sms)</li>
                        </ul>

                        <a href="{{ route('contact') }}" class="btn btn-outline-secondary">
                            Contact us to find out more.
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="{{ asset('images/services/bulk-sms.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="{{ asset('images/services/bulk-sms.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="pr-md-5">
                        <h2 class="display-5">Mobile Marketing Solution</h2>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Digital Marketing Strategy Services
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                        The fast-paced digital world requires businesses to have a strong online 
                                        marketing presence in order to reach their target consumers. This can be 
                                        achieved through the use of exceptional digital marketing strategy 
                                        services from PDMG team of passionate digital strategy specialists. We 
                                        offer comprehensive digital strategies across all social media platforms, 
                                        we customize our service for every client and place a strong emphasis on 
                                        aligning the strategy with their goals. This is achieved through content 
                                        curation that’s presented in a way that allows for a consistent look and 
                                        feel in the design elements for social media marketing. We manage 
                                        Pay-Per-Click (PPC) campaigns, ensure that your business is easily 
                                        locatable through local SEO and maintain the brand image by providing 
                                        friendly online engagements with your consumers.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Why Your Business Needs Our Digital Marketing Strategy Services
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="card-body">
                                        A digital marketing strategy is important because it facilitates the 
                                        building and maintaining of relationships between a business and its 
                                        consumers. Consumers feel positive about a brand when they are able to 
                                        engage them in real time while being able to view and access offerings 
                                        through a simple click. Our dedicated team of digital strategists take 
                                        care of the online image of the brand by handling the aesthetic 
                                        presentation and the tone that’s used when interacting with consumers. 
                                        Whether you are selling a service or product, increasing your customer 
                                        base or gaining visibility, we strive to use digital tools to ensure that 
                                        your goals are reached.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="btn btn-outline-secondary">
                            Contact us to find out more.
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 pt-5">
                    <div class="pl-md-5 pb-5">
                        <h2 class="display-5">
                            CRM (Customer relations management)
                        </h2>
                        <p class="lead">
                            At PDMG we believe that the real value in mobile marketing lies in its ability to deliver highly 
                            effective and inexpensive customer relationship management, which ultimately results in loyalty 
                            and sales. This is achieved through:
                        </p>
    
                        <p>
                            The ability to quickly and easily capture customer or potential customer details through the 
                            use of a shortcode on above-the-line media.
                        </p>

                        <p>
                            Send an automated response SMS with a relevant call-to-action, which would be a link to a 
                            mobi-site to drive brand interaction.
                        </p>
                        <p>
                            The mobi-site would lead to a registration page where they need to submit profiling 
                            details to receive whatever the campaign is promoting. Examples include competition 
                            entries, register for free content (such as airtime, branded wallpapers or games, 
                            ringtones), register to enter the Club/Community to receive information on events, 
                            specials, register to get a free coupon or discount or such like.
                        </p>
                        <p>
                            Mobi-sites would also contain relevant on-the-go information to engage consumers and 
                            keep them coming back such as store locator details, product customisation, games, 
                            downloads, events, competitions, special promotions, direct purchases and so on.
                        </p>
                        <p>
                            Once a database has been built containing customers' mobile numbers and demographic 
                            details, companies have a direct channel to drive promotional activities and traffic 
                            sales. Targeted SMS and MMS campaigns can be broadcast to promote events, special 
                            days such as Valentines Day, Mothers Day, Christmas, to announce special discounts, 
                            deliver coupons, show new menu items, new branches, opening times - the list is 
                            endless!
                        </p>
                        <p>
                            Our Premium Rate SMS services are fully manageable and trackable through our simple web 
                            facility, which provides full reporting on delivery and other pertinent statistics.
                        </p>

                        <a href="{{ route('contact') }}" class="btn btn-outline-secondary">
                            Contact us to find out more.
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="{{ asset('images/services/bulk-sms.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-sm-12 col-md-6">
                    <img src="{{ asset('images/services/bulk-sms.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="pr-md-5">
                        <h2 class="display-5">Mobile Marketing Solution</h2>

                        <p class="lead">
                            Mobile Payment Solutions
                        </p>

                        <p class="lead">
                            The mobile phone provides companies with a unique and direct means of extracting 
                            payments from customers. There are currently three primary means of mobile 
                            payment, namely:
                        </p>
                        <p>
                            Low value payments can be deducted from consumers' airtime.
                        </p>
                        <p>
                            Higher value payments can be enabled via online purchase made through a company's 
                            mobile internet site.
                        </p>

                        <p class="lead">
                            Secure mobile payments
                        </p>

                        <p>
                            We are able to integrate such payment mechanisms into marketing campaigns and 
                            customer services as relevant.
                        </p>

                        <a href="{{ route('contact') }}" class="btn btn-outline-secondary">
                            Contact us to find out more.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection