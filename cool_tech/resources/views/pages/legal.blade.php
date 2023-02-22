<!-- -----------------------------------------------------------------------------------------------------------------------------
    Legal view page:  
        -   Displays generic website Terms of Use and Privacy Policy content.
        -   Note: I used the TermsFeed 'Terms and Conditions' and 'Privacy Policy' Generators to generate the 
            legal content (https://www.termsfeed.com).

---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Get basic html from main.blade.php -->
@extends('main')

<!-- Add legal page's title section. -->
@section('title', '| Legal')

<!-- Add legal page's 'heading' section. -->
@section('heading')
    <div class="container-fluid pb-4 pt-2 pageHeadingSection">
        <div class="row gx-5 mx-4 my-3 text-center">
            <div class="col-sm">
                <h1  id="topOfPage" class="my-3 headerTitle">
                    Legal Information
                </h1>
            </div>
        </div>
    </div>
@endsection

<!-- Add legal page's 'content' section. -->
@section('content')
    <!-- Terms Of Use Section  -->
    <div class="row gx-4 gx-lg-5 my-4 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <h2 id="termsOfUse">Terms of Use</h2>
            <p>Last updated: October 14, 2022</p>
            <p>Please read these terms and conditions carefully before using Our Service.</p>
            <br>
            <h3>Acknowledgment</h3>
            <p>
                These are the Terms of Use governing the use of this Service and the agreement that operates between you and Cool Tech. 
                These Terms set out the rights and obligations of all users regarding the use of the Service.
            </p>
            <p>
                Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. 
                These Terms apply to all visitors, users and others who access or use the Service. By accessing or using the 
                Service you agree to be bound by these Terms and Conditions. If you disagree with any part of these Terms then you 
                may not access the Service.
            </p>
            <p>
                You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.
            </p>
            <p>
                Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy 
                Policy of the company. Our Privacy Policy describes our policies and procedures on the collection, use and 
                disclosure of your personal information when You use the application or the website and tells you about your 
                privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using our service.
            </p>
            <br>
            <h3>Links to Other Websites</h3>
            <p>
                Our Service may contain links to third-party web sites or services that are not owned or controlled by Cool Tech.
            </p>
            <p>
                Cool Tech has no control over, and assumes no responsibility for, the content, privacy policies, or practices of 
                any third party web sites or services. You further acknowledge and agree that Cool Tech shall not be responsible 
                or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with 
                the use of or reliance on any such content, goods or services available on or through any such web sites or services. 
                We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services 
                that you visit.
            </p>
            <br>
            <h3>Termination</h3>
            <p>
                We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, 
                including without limitation if You breach these Terms. Upon termination, Your right to use the Service will cease 
                immediately.
            </p>
            <br>
            <h3>Governing Law</h3>
            <p>
                The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and your use of the Service. 
                Your use of the Application may also be subject to other local, state, national, or international laws.
            </p>
            <br>
            <h3>Disputes Resolution</h3>
            <p>If you have any concern or dispute about the Service, you agree to first try to resolve the dispute informally by 
                contacting the Company.
            </p>
            <br>
            <h3>Severability and Waiver</h3>
            <h4>Severability</h4>
            <p>
                If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted 
                to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining 
                provisions will continue in full force and effect.
            </p>
            <h4>Waiver</h4>
            <p>
                Except as provided herein, the failure to exercise a right or to require performance of an obligation under these 
                Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter 
                nor shall the waiver of a breach constitute a waiver of any subsequent breach.
            </p>
            <br>
            <h3>Changes to These Terms of Use</h3>
            <p>
                We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is 
                material we will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. 
                What constitutes a material change will be determined at our sole discretion.
            </p>
            <p>
                By continuing to access or use our Service after those revisions become effective, you agree to be bound by the 
                revised terms. If you do not agree to the new terms, in whole or in part, please stop using the website and the 
                Service.
            </p>
            <br>
            <h3>Contact Us</h3>
            <p>If you have any questions about these Terms of Use, You can contact us at cooltech@email.com</p>
            <hr class="my-4">
        </div>
    </div>

    <!-- Privacy Policy Section  -->
    <div class="row gx-4 gx-lg-5 my-4 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <h2 id="privacyPolicy">Privacy Policy</h2>
            <p>Last updated: October 14, 2022</p>
            <p>
                This Privacy Policy describes our policies and procedures on the collection, use and disclosure of your information 
                when you use the Service and tells you about your privacy rights and how the law protects you.
            </p>
            <p> We use your personal data to provide and improve the Service. By using the Service, you agree to the collection and 
                use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of 
                the <a href="https://www.termsfeed.com/privacy-policy-generator/" target="_blank">TermsFeed Privacy Policy Generator</a>.
            </p>
            <br>
            <h3>Interpretation and Definitions</h3>
            <h4>Interpretation</h4>
            <p>
                The words of which the initial letter is capitalized have meanings defined under the following conditions. 
                The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
            </p>
            <h4>Definitions</h4>
            <p>For the purposes of this Privacy Policy:</p>
            <ul>
                <li>
                    <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
                </li>
                <li>
                    <p><strong>Company </strong>
                        (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Cool Tech.
                    </p>
                </li>
                <li>
                    <p><strong>Cookies</strong> 
                        are small files that are placed on your computer, mobile device or any other device by a website, containing 
                        the details of your browsing history on that website among its many uses.
                    </p>
                </li>
                <li>
                    <p><strong>Device</strong> 
                        means any device that can access the Service such as a computer, a cellphone or a digital tablet.
                    </p>
                </li>
                <li>
                    <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
                </li>
                <li>
                    <p><strong>Service</strong> refers to the Website.</p>
                </li>
                <li>
                    <p><strong>Service Provider</strong> 
                        means any natural or legal person who processes the data on behalf of the Company. It refers to third-party 
                        companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf 
                        of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service 
                        is used.
                    </p>
                </li>
                <li>
                    <p><strong>Usage Data</strong> 
                        refers to data collected automatically, either generated by the use of the Service or from the Service 
                        infrastructure itself (for example, the duration of a page visit).
                    </p>
                </li>
                <li>
                    <p><strong>Website</strong> refers to Cool Tech, accessible from <a href="/">cooltech.com</a></p>
                </li>
            </ul>
            <br>
            <h3>Collecting and Using Your Personal Data</h3>
            <h4>Types of Data Collected</h4>
            <h5>Personal Data</h5>
            <p>
                While using Our Service, We may ask you to provide Us with certain personally identifiable information that can 
                be used to contact or identify You. Personally identifiable information may include, but is not limited to:
            </p>
            <ul>
                <li>
                    <p>Email address</p>
                </li>
                <li>
                    <p>First name and last name</p>
                </li>
                <li>
                    <p>Usage Data</p>
                </li>
            </ul>
            <h5>Usage Data</h5>
            <p>Usage Data is collected automatically when using the Service.</p>
            <p>
                Usage Data may include information such as your Device's Internet Protocol address (e.g. IP address), browser type, 
                browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those 
                pages, unique device identifiers and other diagnostic data.
            </p>
            <p>
                When you access the Service by or through a mobile device, We may collect certain information automatically, including, 
                but not limited to, the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, 
                your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic 
                data.
            </p>
            <p>
                We may also collect information that your browser sends whenever you visit our Service or when you access the Service by 
                or through a mobile device.
            </p>
            <h5>Tracking Technologies and Cookies</h5>
            <p>
                We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. 
                Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze 
                Our Service. The technologies We use may include:
            </p>
            <ul>
                <li><strong>Cookies or Browser Cookies.</strong> 
                    A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate 
                    when a Cookie is being sent. However, if you do not accept Cookies, you may not be able to use some parts of our 
                    Service. Unless you have adjusted your browser setting so that it will refuse Cookies, our Service may use Cookies.
                </li>
                <li><strong>Web Beacons.</strong> 
                    Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred 
                    to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have 
                    visited those pages or opened an email and for other related website statistics (for example, recording the popularity 
                    of a certain section and verifying system and server integrity).
                </li>
            </ul>
            <p>
                Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device 
                when you go offline, while Session Cookies are deleted as soon as you close your web browser. You can learn more about 
                cookies on this <a href="https://www.termsfeed.com/blog/cookies/#What_Are_Cookies" target="_blank">TermsFeed website</a> 
                article.
            </p>
            <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
            <ul>
                <li>
                    <p><strong>Necessary / Essential Cookies</strong></p>
                    <p>Type: Session Cookies</p>
                    <p>Administered by: Us</p>
                    <p>
                        Purpose: These Cookies are essential to provide you with services available through the Website and to enable 
                        you to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. 
                        Without these Cookies, the services that you have asked for cannot be provided, and We only use these Cookies to 
                        provide you with those services.
                    </p>
                </li>
                <li>
                    <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
                    <p>Type: Persistent Cookies</p>
                    <p>Administered by: Us</p>
                    <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
                </li>
                <li>
                    <p><strong>Functionality Cookies</strong></p>
                    <p>Type: Persistent Cookies</p>
                    <p>Administered by: Us</p>
                    <p>
                        Purpose: These Cookies allow us to remember choices you make when you use the Website, such as remembering 
                        your login details or language preference. The purpose of these Cookies is to provide you with a more personal 
                        experience and to avoid you having to re-enter your preferences every time you use the Website.
                    </p>
                </li>
            </ul>
            <br>
            <h3>Use of Your Personal Data</h3>
            <p>The Company may use Personal Data for the following purposes:</p>
            <ul>
                <li>
                    <p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
                </li>
                <li>
                    <p><strong>To manage Your requests:</strong> To attend and manage your requests to Us.</p>
                </li>
                <li>
                    <p><strong>For business transfers:</strong> 
                        We may use your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, 
                        dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of 
                        bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is 
                        among the assets transferred.
                    </p>
                </li>
                <li>
                    <p><strong>For other purposes</strong>: We may use your information for other purposes, such as data analysis, 
                        identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and 
                        improve our Service, products, services, marketing and your experience.
                    </p>
                </li>
            </ul>
            <p>We may share your personal information in the following situations:</p>
            <ul>
                <li><strong>With Service Providers:</strong> 
                    We may share your personal information with Service Providers to monitor and analyze the use of our Service, to contact you.
                </li>
                <li><strong>For business transfers:</strong> 
                    We may share or transfer your personal information in connection with, or during negotiations of, any merger, sale of 
                    Company assets, financing, or acquisition of all or a portion of Our business to another company.
                </li>
                <li><strong>With other users:</strong> 
                    when you share personal information or otherwise interact in the public areas with other users, such information 
                    may be viewed by all users and may be publicly distributed outside.
                </li>
            </ul>
            <br>
            <h3>Retention of Your Personal Data</h3>
            <p>
                The Company will retain your Personal Data only for as long as is necessary for the purposes set out in this 
                Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal 
                obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, 
                and enforce our legal agreements and policies.
            </p>
            <p>
                The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter 
                period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, 
                or We are legally obligated to retain this data for longer time periods.
            </p>
            <br>
            <h3>Transfer of Your Personal Data</h3>
            <p>
                Your information, including Personal Data, is processed at the Company's operating offices and in any other places where 
                the parties involved in the processing are located. It means that this information may be transferred to — and maintained 
                on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection 
                laws may differ than those from your jurisdiction.
            </p>
            <p>
                Your consent to this Privacy Policy followed by your submission of such information represents your agreement to 
                that transfer.
            </p>
            <p>
                The Company will take all steps reasonably necessary to ensure that your data is treated securely and in accordance 
                with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless 
                there are adequate controls in place including the security of your data and other personal information.
            </p>
            <br>
            <h3>Delete Your Personal Data</h3>
            <p>
                You have the right to delete or request that We assist in deleting the Personal Data that We have collected about you.
            </p>
            <br>
            <h3>Disclosure of Your Personal Data</h3>
            <h4>Business Transactions</h4>
            <p>
                If the Company is involved in a merger, acquisition or asset sale, your Personal Data may be transferred. We will 
                provide notice before your Personal Data is transferred and becomes subject to a different Privacy Policy.
            </p>
            <br>
            <h3>Law enforcement</h3>
            <p>
                Under certain circumstances, the Company may be required to disclose your Personal Data if required to do so by 
                law or in response to valid requests by public authorities (e.g. a court or a government agency).
            </p>
            <br>
            <h3>Other legal requirements</h3>
            <p>The Company may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
            <ul>
                <li>Comply with a legal obligation</li>
                <li>Protect and defend the rights or property of the Company</li>
                <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
                <li>Protect the personal safety of Users of the Service or the public</li>
                <li>Protect against legal liability</li>
            </ul>
            <br>
            <h3>Security of Your Personal Data</h3>
            <p>
                The security of your Personal Data is important to Us, but remember that no method of transmission over the 
                Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means 
                to protect your Personal Data, We cannot guarantee its absolute security.
            </p>
            <br>
            <h3>Children's Privacy</h3>
            <p>
                Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable 
                information from anyone under the age of 13. If you are a parent or guardian and you are aware that your child has 
                provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from 
                anyone under the age of 13 without verification of parental consent, We take steps to remove that information 
                from Our servers.
            </p>
            <p>
                If We need to rely on consent as a legal basis for processing your information and your country requires consent 
                from a parent, We may require your parent's consent before ye collect and use that information.
            </p>
            <br>
            <h3>Links to Other Websites</h3>
            <p>Our Service may contain links to other websites that are not operated by Us. If you click on a third party link, 
                you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every 
                site you visit. We have no control over and assume no responsibility for the content, privacy policies or practices 
                of any third party sites or services.
            </p>
            <br>
            <h3>Changes to this Privacy Policy</h3>
            <p>
                We may update Our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy 
                Policy on this page.
            </p>
            <p>
                We will let you know via email and/or a prominent notice on Our Service, prior to the change becoming effective 
                and update the "Last updated"; date at the top of this Privacy Policy.
            </p>
            <p>
                You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are 
                effective when they are posted on this page. If you have any questions about this Privacy Policy, You can contact us 
                at cooltech@email.com
            </p>
            <hr class="my-4">
        </div>
    </div>
@endsection