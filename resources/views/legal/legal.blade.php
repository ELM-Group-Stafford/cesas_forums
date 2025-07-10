@extends('layouts.app')

@section('title', 'Legal')

@section('header')
    @include('layouts.partials.header')
@endsection

@section('content')
<section class="bg-plain">
    <div class="container">
        <h1 class="m-b-xxs">Privacy Policy</h1>

        <div class="content content-style-links">
            <!--Terms Of Use page introduction PLACEHOLDER-->
        </div>
    </div>
</section>

<section class="bg-gradient-primary pad-t-m">
    <div class="container">
		<section class="card m-b-m">

		<h3>Contents</h3>
		<div class="content content-style-links">
    <ul class="m-b-m">
        <li><a href="#privacystatement">Privacy Statement</a></li>
        <li><a href="#infocollected">Information we may collect from you</a></li>
        <li><a href="#wheredata">Where we store your personal data</li>
        <li><a href="#whatfor">What the information we collect is used for </a></li>
        <li><a href="#disclosure">Disclosure of information</a></li>
        <li><a href="#cookies">Use of Cookies</a></li>
        <li><a href="#externalinks">External Links</a></li>
        <li><a href="#communication">Contact & Communication</a></li>
        <li><a href="#socialmedia">Social Media Platforms</a></li>
        <li><a href="#socialmedialinks">Shortened Links in Social Media</a></li>
        <li><a href="#changes">Changes to our privacy policy</a></li>
        <li><a href="#comments">Comments</a></li>
    </ul>


    <span class="anchor" id="privacystatement"></span>
    <h3>Privacy Statement</h3>
    <article>
        <p>
            The {{ trans('general.site_name') }} are committed to protecting and respecting your privacy and personal
            information.
            This policy sets out the basis on which any personal data we collect from you, or that you provide to us, is
            used and kept secure by the {{ trans('general.site_name') }}. Please read the following carefully to understand our
            views and practices regarding your personal data and how we will treat it. The policy applies whenever we
            collect your personal data, including when you use our website or other digital platforms.
        </p>
    </article>


    <span class="anchor" id="infocollected"></span>
    <h3>Information we may collect from you</h3>
    <article>
        <p>
            We may collect and process the following data about you: information that you provide by filling in forms on
            our
            site, including registering to use our site and subscribing to our service, if you contact us, we keep a
            record
            of that correspondence, details of transactions you carry out through our site, details of your visits to
            our
            site and the resources that you access.
        </p>
    </article>


    <span class="anchor" id="wheredata"></span>
    <h3>Where we store your personal data</h3>
    <article>
        <p>
            The data that we collect from you may be transferred to, and stored at, a destination outside the European
            Economic Area ("EEA"). It may also be processed by staff operating outside the EEA who work for us or for
            one of
            our suppliers. Such staff may be engaged in, among other things, the provision of support services. By
            submitting your personal data, you agree to this transfer, storing or processing. All personal information
            that
            you provide to us, is protected by us in accordance with the applicable data protection legislation and this
            privacy policy.
        </p>
        <p>
            All information you provide to us is stored on our secure servers. Where we have given you (or where you
            have
            chosen) a password which enables you to access certain parts of our site, you are responsible for keeping
            this
            password confidential. We ask you not to share a password with anyone.
        </p>
        <p>
            Unfortunately, the transmission of information via the internet is not completely secure. Although we will
            do
            our best to protect your personal data, we cannot guarantee the security of your data transmitted to our
            site;
            any transmission is at your own risk. Once we have received your information, we will use strict procedures
            and
            security features to try to prevent unauthorised access.
        </p>
    </article>


    <span class="anchor" id="whatfor"></span>
    <h3>We use information held about you in the following ways:</h3>
    <article>
        <ol>
            <li>To ensure that content from our site is presented in the most effective manner for you and for your
                computer
            </li>
            <li>To provide you with information, products or services that you request from us or which we feel may
                interest
                you, where you have consented to be contacted for such purposes</li>
            <li>To carry out our obligations arising from any contracts entered into between you and us</li>
            <li>To allow you to participate in interactive features of our service, when you choose to do so</li>
            <li>To notify you about changes to our service</li>
            <li>To communicate with you, in the event that the services you have requested are unavailable</li>
            <li>For record keeping purposes</li>
            <li>To track your activity on our digital platforms</li>
        </ol>
        <p>
            When you interact with our digital platforms we may also automatically collect the following information
            about
            your visit. This is to primarily help us better understand how our clients use our platforms and enable us
            to
            create better content and more relevant communications:
        </p>
        <ul>
            <li>How you reached our digital platform</li>
            <li>Your journey through our digital platform including which links you click on in our website, any
                searches
                you have made, how long you stay on each page and other page interaction information</li>
            <li>Which videos you have watched and for how long</li>
        </ul>
        <p>
            All personal information that we collect about you will be recorded, used, and protected by us in accordance
            with the applicable data protection legislation and this privacy policy. We may supplement the information
            that
            you provide with other information that we obtain from our dealings with you or which we receive from other
            organisations.
        </p>
    </article>


    <span class="anchor" id="disclosure"></span>
    <h3>Disclosure of information</h3>
    <article>
        <p>
            In order to provide our services to you we may need to appoint other organisations to carry out data
            processing
            on our behalf. These may include for example, payment processing, fraud prevention and screening.
        </p>
        <p>
            We may share your data with third parties:
            <br>
            (a) if we are under a legal or regulatory duty to do so
            <br>
            (b) if it is necessary to do so to enforce our terms of use or other contractual rights,
            <br>
            (c) to lawfully assist the police or security services with prevention and detection of crime or terrorist
            activity
            <br>
            (d) where such disclosure is necessary to protect the safety or security of any persons and /or
            <br>
            (e) otherwise permitted under applicable law
        </p>
        <p>
            Some of the organisations to which we may disclose your personal information are situated outside the United
            Kingdom and European Union, in countries which may not have laws the protect privacy as extensively as in
            the
            United Kingdom. If we do share your personal information with other territories we will take proper steps to
            ensure that your information is protected in accordance with this privacy policy.
        </p>
        <p>
            We will not sell, share, or rent your personal information to any third party or use your e-mail address for
            unsolicited mail.
        </p>
    </article>


    <span class="anchor" id="cookies"></span>
    <h3>Use of Cookies</h3>
    <article>
        <p>
            We may also collect information about your computer including where available your IP address, operating
            system
            and browser type, to assist us in analysing the profile of our visitors. This is statistical data about our
            visitors’ browsing actions and patterns and does not identify any individual. We may use cookies on our site
            in
            the following ways:
        </p>
        <ol>
            <li>To help us recognise you as a unique visitor (in the form of a number) when you return to our site and
                allow
                us to tailor content or advertisements to match your preferred interests or to avoid showing you the
                same
                adverts repeatedly.</li>
            <li>To compile anonymous, aggregated statistics that allow us to understand how users use our site to help
                us
                improve the structure of our website.</li>
        </ol>
        <p>
            You have the ability to accept or decline cookies by modifying the settings in your browser.
            <br>
            This website uses cookies to better the users experience while visiting the website. Where applicable, this
            website uses a cookie control system allowing the user on their first visit to the website to allow or
            disallow
            the use of cookies on their computer / device. This complies with recent legislation requirements for
            websites
            to obtain explicit consent from users before leaving behind or reading files such as cookies on a user's
            computer / device.
        </p>
        <p>
            Cookies are small files saved to the user's computer’s hard drive, that track, save and store information
            about
            the user's interactions and usage of the website. This allows the website, through its server to provide the
            users with a tailored experience within this website.
        </p>
        <p>
            Users are advised that if they wish to deny the use and saving of cookies from this website on to their
            computers hard drive, they should take the necessary steps within their web browsers security settings to
            block
            all cookies from this website and its external serving vendors. Users are advised, however, that by
            disabling
            the cookies for this website, they may not be able to use all the interactive features of our site. To find
            out
            more about cookies and how they can be disabled please visit the Interactive Advertising Bureau at <a
                target="_blank" href='http://www.allaboutcookies.org'>www.allaboutcookies.org</a>
        </p>
        <p>
            This website uses tracking software to monitor its visitors to better understand how they use it. This
            software
            is provided by Google Analytics which uses cookies to track visitor usage. The software will save a cookie
            to
            your computer’s hard drive in order to track and monitor your engagement and usage of the website, but will
            not
            store, save or collect personal information.
        </p>
        <p>
            You can read Google's privacy policy <a target="_blank" href='http://www.google.com/privacy.html'>here</a>
            for
            further information
        </p>
        <p>
            Other cookies may be stored to your computer’s hard drive by external vendors when this website uses
            referral
            programs, sponsored links or adverts. Such cookies are used for conversion and referral tracking and
            typically
            expire after 30 days, though some may take longer. No personal information is stored, saved or collected.
        </p>
    </article>


    <span class="anchor" id="externalinks"></span>
    <h3>External Links</h3>
    <article>
        <p>
            Our site may, from time to time, contain links to and from the websites of our partner networks, advertisers
            and
            affiliates. Users are advised to adapt a policy of caution before clicking any external web link mentioned
            throughout this website, (External links are clickable text / banner / image links to other websites).
        </p>
        <p>
            The owners of the website cannot guarantee or verify the contents of any externally linked website despite
            their
            best efforts. Users should therefore note that they click on external links at their own risk, and this
            website
            and its owners cannot be held liable for any damages or implications caused by visiting any external links
            mentioned. Users are advised to check the policies of these external websites before submitting any personal
            data.
        </p>
    </article>


    <span class="anchor" id="communication"></span>
    <h3>Contact & Communication</h3>
    <article>
        <p>
            Users contacting this website and / or its owners, do so at their own discretion and provide any such
            personal
            details requested at their own risk. Your personal information is kept private and stored securely until a
            time
            it is no longer required or has no use, as detailed in the relevant data protection legislation. Every
            effort
            has been made to ensure a safe and secure form to email submission process, but users using such form to
            email
            processes are advised that they do so at their own risk.
        </p>
        <p>
            This website and its owners use any information submitted, to provide you with further information about the
            products / services they offer or to assist you in answering any questions or queries you may have
            submitted.
            This includes, using your details to subscribe you to any email newsletter program the website operates but
            only
            if this was made clear to you and your express permission was granted when submitting any form to email
            process.
            Or, whereby you the consumer, have previously purchased from or enquired about purchasing from the company,
            a
            product or service that the email newsletter relates to. This is by no means an entire list of your user
            rights,
            in regard to receiving email marketing material. Your details are not passed on to any third parties.
        </p>
        <p>
            If at any point you no longer wish to receive information from us, you may <a
                href='/contact'>unsubscribe</a>.
        </p>
    </article>


    <span class="anchor" id="socialmedia"></span>
    <h3>Social Media Platforms</h3>
    <article>
        <p>
            Communication, engagement and actions taken through external social media platforms that this website and
            its
            owners participate on, are custom to the terms and conditions as well as the privacy policies held with each
            social media platform respectively.
        </p>
        <p>
            Users are advised to use social media platforms wisely and communicate / engage upon them with due care and
            caution, in regard to their own privacy and personal details. This website nor its owners will ever ask for
            personal or sensitive information through social media platforms and encourage users wishing to discuss
            sensitive details to contact them through primary communication channels such as by telephone or email.
        </p>
        <p>
            This website may use social sharing buttons which help share web content directly from web pages to the
            social
            media platform in question. Users are advised before using such social sharing buttons that they do so at
            their
            own discretion and note that the social media platform may track and save your request to share a web page
            respectively through your social media platform account.
        </p>
    </article>


    <span class="anchor" id="socialmedialinks"></span>
    <h3>Shortened Links in Social Media</h3>
    <article>
        <p>
            This website and its owners through their social media platform accounts may share web links to relevant web
            pages. By default, some social media platforms shorten lengthy URLs
        </p>
        <p>
            Users are advised to take caution and good judgement before clicking any shortened URLs published on social
            media platforms by this website and its owners. Despite the best efforts to ensure only genuine URLs are
            published, many social media platforms are prone to spam and hacking and therefore this website and its
            owners
            cannot be held liable for any damages or implications caused by visiting any shortened links.
        </p>
    </article>


    <span class="anchor" id="changes"></span>
    <h3>Changes to our privacy policy</h3>
    <article>
        <p>
            This privacy policy was updated in May 2018 in accordance with the General Data Protection Legislation 2018.
        </p>
        <p>
            Edited and customized by: The {{ trans('general.site_name') }}
        </p>
    </article>


    <span class="anchor" id="comments"></span>
    <h3>Changes to our privacy policy</h3>
    <article>
        <p>
            If you have any requests concerning your personal information or have any questions or comments about
            privacy,
            please <a href='/contact'>get in touch</a>.
        </p>
    </article>
</div>
        </section>
</section>
@endsection
