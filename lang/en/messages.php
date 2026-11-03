<?php

return [

  // GLobal variables (They are used everywhere in all of the files)
  // Login and register
  'global_login' => 'Login',
  'global_register' => 'Register',
  'global_success' => 'Success',
  'global_profile' => 'Profile',
  'global_causes' => 'Causes',
  'global_close' => 'Close',


  // Page titles
  'title_welcome_page' =>  'Dr. "Yulian Mollov" Foundation',
  'title_discover_page' => 'Support the platform',
  'title_news_page' => 'News',
  'title_support' => 'Subscription plans',
  'title_about_us' => 'About us',
  'title_login' => 'Login',
  'title_register' => 'Register',
  'title_create_campaign' => 'Create campaign',
  'title_conditions' => 'Terms and conditions',


  // Success and fail 
  'sucess_payment' => 'Your payment was successful!',
  'success_go_to_account' => 'Go to account',
  'fail_payment' => 'Failure',
  'fail_payment2' => 'Your payment was UNSUCCESSFUL!',
  'fail_payment3' => 'Please contact us for more information!',
  'fail_go_to_contacts' => 'Go to contacts',


  //404
  '404_page_not_found' => 'Oops... Page not found',
  '404_go_to_home_page' => 'Go to main page',

  //login.blade.php
  'login_placeholder_email' => 'Enter email address',
  'login_placeholder_password' => 'Enter password',
  'login_forgot_password' => 'Forgot password?',

  //register.blade.php
  'register_already_have_account' => 'Already have an account?',
  'register_placeholder_names' => 'Enter full name',
  'register_placeholder_email' => 'Email',
  'register_placeholder_password' => 'Enter password',
  'register_placeholder_password_repeat' => 'Repeat password',


  //discover.blade.php and discover-single.blade.php
  'discover_make_donation' => 'Make a donation',
  'discover_donated' => 'Donated',
  'discover_desired_amount' => 'Goal',
  'discover_choose_payment' => 'Choose payment option',
  'discover_pay_with_card' => 'Pay with card',
  'discover_reload' => 'Reload',
  'discover_processing' => 'Your donation is being processed...',
  'discover_seconds' => 'This will take a few seconds',
  'discover_success1' => 'Your donation was successful!',
  'discover_success2' => 'Thank you!',


  'discover_bank' => 'Bank',
  'discover_receiver' => 'Recipient',
  'discover_foundation' => 'Dr. Yulian Mollov Foundation',
  'discover_reason' => 'Dr. Yulian Mollov Foundation',
  'discover_accept_terms' => 'By donating, you agree to the <a href="/obshti-usloviq" target="_blank">terms and conditions</a>. Please read them.',

  'discover_label_names' => 'Enter your full name',
  'discover_label_email' => 'Enter email',
  'discover_label_amount' => 'Enter your donation in euros.',

  'discover_placeholder_names' => 'Full name',
  'discover_placeholder_email' => 'Email',
  'discover_placeholder_amount' => 'Enter donation here',

  'discover_support_the_platform' => 'Support the platform',
  'discover_support_tax_message' => 'YulianMollov.BG takes 0% fee from your donation.
Only the transaction fee applies. We exist thanks to the people who support us. Thank you!',
  'discover_your_donation' => 'Your donation',
  'discover_for_the_campaign' => 'For the campaign',
  'discover_for_the_platform' => 'For the platform',
  'discover_you_will_pay' => 'You will pay in total',
  'discover_anonoymous_donation' => 'I want to make the donation anonymously.',
  'discover_make_donation' => 'Make a donation',
  'discover_share' => 'Share',
  'discover_pay' => 'Pay',
  'discover_top_donators' => 'Top Donors',
  'discover_top_donators_donated_amount' => 'Donated Amount',
  'discover_total_donators' => 'Total Donors',
  'discover_list_of_all_donators' => 'List of All Donors',
  'discover_help_by_sharing' => 'Help by sharing',
  'discover_direct_link' => 'Direct Link',
  'discover_copy_link' => 'Copy Link',
  'discover_go_back' => 'Go back',

  //campaign.blade.php
  'campaign_choose_type' => "Choose the type of campaign you'd like to apply for",
  'campaign_medical_purposes' => 'For medical purposes',
  'campaign_non_medical_purpose' => 'For non-medical purposes',
  'campaign_info_about_you' => 'Information about you',

  'campaign_placeholder_names' => 'Enter full name',
  'campaign_placeholder_email' => 'Email',
  'campaign_placeholder_phone_number' => 'Phone number',
  'campaign_placeholder_description' => 'Please explain with a short text what you need',
  'campaign_option1' => 'Medical treatment',
  'campaign_option2' => 'Animal support',
  'campaign_option3' => 'Education and training',
  'campaign_option4' => 'Cultural and sports initiatives',

  'campaign_send_request' => 'Send request',
  'campaign_upload_file' => 'Upload file',

  'campaign_more_info' => 'Information about different types of causes',
  'campaign_please_read' => 'Please read this information before applying!',

  'campaign_part1_header' => 'Medical treatment, which includes:',
  'campaign_part2_header' => 'Social initiatives:',
  'campaign_part3_header' => 'Education and training:',
  'campaign_part4_header' => 'Cultural and sports initiatives:',

  'campaign_part1_content1' => '<b>Treatment in Turkey and abroad:</b> 
    we provide financial support for patients who require treatment in Turkey and other countries 
    (depending on the specifics of the illness), where medical care can offer 
    the best chances for recovery.',

  'campaign_part1_content2' => '<b>Emergency medical cases:</b> 
    the foundation supports patients who require urgent medical intervention and do not have time to raise funds on their own. 
    Additionally, we provide immediate emergency medical transport, ambulance service, and an accompanying doctor, 
    who will stay with the patient if they are unable to travel alone to the treatment location due to their medical condition.',


  'campaign_part2_content1' => '<b>Support for vulnerable groups:</b> 
    we fund projects and initiatives aimed at improving the quality of life for vulnerable groups, 
    including children, the elderly, and people with disabilities.',

  'campaign_part2_content2' => '<b>Social integration programs:</b> 
    the foundation supports programs that help disadvantaged individuals integrate into society 
    and improve their living conditions.',

  'campaign_part3_content1' => '<b>Scholarships and educational grants:</b> 
    we provide scholarships and grants to students and pupils who demonstrate outstanding academic achievements, 
    but need additional financial support to continue their education.',

  'campaign_part3_content2' => '<b>Educational programs and courses:</b> 
    the foundation funds various educational programs and courses aimed at developing the skills and knowledge 
    of young people and giving them better opportunities for future realization.',

  'campaign_part4_content1' => '<b>Support for cultural projects:</b> 
    we fund cultural projects and initiatives that promote the arts, culture, and education, 
    as well as support the creation of new cultural events and activities.',

  'campaign_part4_content2' => '<b>Sports programs and events:</b> 
    the foundation also supports sports programs and events aimed at promoting a healthy lifestyle 
    and encouraging young people to actively participate in sports.',


  // about.blade.php
  'about_us' => 'About us',
  'about_who_are_we' => 'Who are we?',
  'about_description' => 'Welcome to the official website of the Dr. Yulian Mollov Foundation. Our organization was created with a charitable purpose and with the important mission of helping people in need, providing them with financial resources for medical treatment and other important causes.',
  'about_financial_support' => 'Financial Support',
  'about_treatment_turkey' => 'Treatment in Turkey',
  'about_how_we_help' => 'How we help?',
  'about_our_mission' => 'Our Mission?',
  'about_become_part' => 'Become part of our big family',
  'about_become_monthly_member' => 'Donate to a cause or support the platform with a modest monthly subscription',
  'about_about_the_platform' => 'About the platform',

  'about_dr_mollov' => 'About Dr. Yuliyan Mollov',
  'about_dr_mollov2' => 'Dr. Yuliyan Mollov is a distinguished doctor, musician, and philanthropist. He is originally from the town of Silistra, where he graduated from high school with top honors.',
  'about_dr_mollov3' => 'He then began studying General Medicine and earned an excellent diploma from one of the most prestigious, challenging, and recognized universities in Istanbul, namely “Cerrahpasa”.',
  'about_dr_mollov4' => 'Longing for his homeland, he returned to Bulgaria in 2011, where he continued his medical education, and in 2018 obtained a specialization in anesthesiology, resuscitation, and intensive care.',
  'about_dr_mollov5' => 'Currently, Dr. Mollov is a respected medical specialist, working as an anesthesiologist and consultant in several hospitals in the United Kingdom.',

  'about_multilingualism' => 'Multilingualism and international contacts',
  'about_known_languages' => 'Dr. Mollov is fluent in several languages: Turkish, English and German, which allows him to freely communicate and collaborate with medical specialists and patients from different countries.',
  'about_known_languages2' => 'Thanks to his international contacts built over the years, Dr. Mollov successfully mediates in sending patients for specialized treatment, mainly to Turkey.',

  'about_personal_interests' => 'Personal interests and hobbies',
  'about_personal_interests2' => 'In addition to medicine, Dr. Yulian Mollov is also actively involved in music. <br>  He is a talented musician and singer who performs opera and jazz compositions. <br> He plays the piano virtuously and often participates in musical events. <br> In the past, he has held joint concerts with the world-famous jazz singer Yildiz Ibrahimova in Bulgaria and Turkey. <br> He currently sings in the church choir "Ave".',


  'about_experience' => 'Professional experience',
  'about_experience1' => 'Dr. Yuliyan Mollov has extensive professional experience in a number of international medical institutions, as follows:',
  'about_experience2' => 'Turkey: he has worked as an anesthesiologist and intensivist, maintaining contacts with world-renowned leading Turkish specialists in some of the most advanced and modern hospitals in Turkey.',
  'about_experience3' => 'United Kingdom: since 2016, Dr. Yuliyan Mollov has been working in England, where he continues to practice in various hospitals in London, Nottingham, Leeds, and Wales. He is currently based in London, where he has established himself as a respected specialist and consultant.',
  'about_experience4' => 'Bulgaria: from 2012 to 2015, Dr. Yuliyan Mollov practiced as an anesthesiologist and intensivist in several of the largest and busiest hospitals in Sofia, namely: Specialized Hospital for Active Treatment in Oncology, UMHAT "St. Anna", and "Acibadem City Clinic" Tokuda Hospital.',


  'about_education' => 'Education and specialization',
  'about_education1' => 'Secondary education: Graduated with full honors from Nikola Yonkov Vaptsarov High School in Silistra.',
  'about_education2' => 'Medicine: In 2011, graduated from the Cerrahpaşa Medical Faculty in Istanbul.',
  'about_education3' => 'Specialization: In 2018, obtained a specialization in Anesthesiology, Resuscitation, and Intensive Care in Bulgaria.',
  'about_education4' => 'Additional qualification: In 2024, earned a Master’s degree in Health Management from UNWE.',



  'about_how_we_help' => 'How we help?',
  'about_how_we_help_desc1' => 'Dr. Yulian Mollov Foundation assists patients who need treatment in Turkey and abroad by providing them with the necessary financial resources and logistical support.',
  'about_how_we_help_desc2' => 'In addition, we support other causes that require funding, such as educational initiatives and other social programs and projects that aim to improve the quality of life of those in need.',

  'about_our_mission_desc1' => "The Dr. Yulian Mollov Foundation was established to support those in need by providing them with funds for necessary and life-saving expensive treatments, both in Bulgaria and abroad, and at the same time can help finance various initiatives that require people's financial support.",
  'about_our_mission_desc2' => 'We believe that every person deserves a chance at a better life and health and we are here to help make that a reality. Each of you can create your own campaign in our foundation and we can immediately start raising funds for your cause.',



  // support.blade.php
  'support_plans' => 'Plans',
  'support_by_subscribing' => 'By subscribing to the platform',
  'support_you_make_it_possible' => 'you make our existence possible',
  'buy_subscription' => 'Buy subscription',

  'plan_basic' => 'Supportive',
  'plan_basic_price' => '10BGN/month',

  'plan_average' => 'Step forward',
  'plan_average_price' => '20BGN/month',

  'plan_advanced' => 'Inspirator',
  'plan_advanced_price' => '50BGN/month',

  'support_faq_question1' => 'What are monthly donations used for?',
  'support_faq_answer1' => 'Monthly donations are used to ensure the sustainability of the platform and to allow it to continue fulfilling its mission. Part of these donations is allocated to supporting causes related to culture, education, gifted children, and other socially significant initiatives.',

  'support_faq_question2' => 'How does the foundation ensure transparency in the use of donations?',
  'support_faq_answer2' => 'The “Dr. Yuliyan Mollov” Foundation adheres to strict principles of transparency and accountability. Every donated lev is traceable and used purposefully for medical and social causes. We will regularly publish our financial reports and activity updates on our website.',

  'support_faq_question3' => 'How do monthly donations work?',
  'support_faq_answer3' => 'Monthly donations operate through a subscription system that allows users to support the platform with a chosen amount each month. Once subscribed, the donated amount will be automatically deducted from the specified payment method on a monthly basis.',

  'support_faq_question4' => 'Can I cancel my subscription at any time?',
  'support_faq_answer4' => 'Yes! You have full control over your subscription – you can cancel it or delete your account at any time without additional complications. This flexibility ensures convenience and transparency in supporting the causes we stand for.',

  // news.blade.php
  'news' => 'News',
  'news_related_to_mollov' => 'News Related to Dr. Yulian Mollov',
  'who_is_dr_mollov' => 'Who is Dr. Yulian Mollov?',
  'who_is_dr_mollov2' => 'Dr. Yulian Mollov is a professional who combines high-quality medical care with humanity and dedication to people.',
  'who_is_dr_mollov3' => 'His mission is to provide the best treatment to his patients, regardless of their location. Through the Dr. Yulian Mollov Foundation, he continues to help people in need, providing them with financial support and access to quality medical care.',

  // Modals and sessions
  'newsletter_subscribe_success' => 'You have successfully subscribed to our newsletter!',

  'no_file_uploaded1' => 'You have not uploaded a file!',
  'no_file_uploaded2' => 'Please attach a file and complete the form again.',

  'campaign_success1' => 'Your application was successful!',
  'campaign_success2' => 'We will contact you as soon as possible',

  'session_failed' => 'You already have an active subscription on our platform.',
'session_failed1' => 'If you want to change your subscription, please go to the "Profile" section.',

'session_error_noSubscription' => 'You do not have an active subscription.',
'session_success_cancelation' => 'Your subscription has been canceled.',
'session_need_registration' => 'You need to register in our system to subscribe.',
'session_need_registration2' => 'If you do not have an account, please register.',
'session_need_registration3' => 'If you already have an account, please click the "Login" button.',



  // menuList.blade.php
  'sidebar_welcome' => 'Home',
  'sidebar_campaign' => 'Campaigns',
  'sidebar_about_the_platform' => 'About the Platform',
  'sidebar_news' => 'News',
  'sidebar_support_the_platform' => 'Support the Platform',
  'sidebar_about_us' => 'About Us',


  // footer.blade.php
  'every_person_matters' => 'Every Person Matters',
  'donate_from_here' => 'Donate from here',
  'newsletter' => 'Newsletter',
  'subscribe_to_newsletter' => 'Subscibe to our newsletter',
  'create_campaign' => 'Create campaign',
  'enter_your_email' => 'Enter your email',
  'we_help_people' => 'We help people who need our help.',
  'about_the_platform' => 'About the platform',
  'footer_causes' => 'Causes',
  'footer_support_causes' => 'Support the platform',
  'footer_helpful_links' => 'Helpful Links',
  'footer_about_us' => 'About us',
  'footer_contact_us' => 'Contacts',
  'footer_terms_and_conditions' => 'Terms and conditions',
  'footer_work_time' => 'Working hours',
  'footer_workweek' => 'Monday - Friday: 8.00. - 18.00.',
  'footer_city' => 'Sofia, Bulgaria',
  'footer_all_rights_reserved' => 'All rights reserved',


  // disvocer.blade.php
  'charity_for_good_causes' => 'Fundraising for charity causes',
  'title_discover_page' => 'Support the platform',



  // 1. welcome.blade.php START
  //General terms
  'donate_now' => 'Donate now',
  'subscribe_now' => 'Subscribe now',
  'go_to_profile' => 'Go to profile',
  'donate_to_a_cause' => 'Donate to a cause',
  'financial_support' => 'Financial support',
  'turkey_treatment' => 'Treatment in Turkey',
  'we_change_lifes' => 'We change people`s lifes',
  'learn_more' => 'Learn more',
  'go_to_website' => 'Go to website',
  'every_donation_counts' => 'Every donation counts',
  'our_moto' => 'Нашето мото',
  'our_moto_message' => '"Little by little, we make a difference"',


  'info_turkey' => 'Information about Turkey',
  'info_turkey2' => 'If you would like to receive more information about the process of leaving for Turkey, the conditions for applying for treatment, as well as details about the necessary documentation and organization, you can visit our specialized website. 
     There you will find everything you need to inform yourself and prepare. Click the "Go to Website" button to learn more.',


  'welcome1' =>  'Fundraising',
  'welcome2' => 'for those in need',
  'welcome3' => 'Welcome to the official website of the Dr. Yulian Mollov Foundation.
                   Our organization was created with a charitable purpose and it is 
                   important for us to help people in need by providing them 
                   with financial means for medical treatment in Turkey.',
  'donate_to_cause' => 'Donate to a cause',
  'support_the_platform' => 'Support the platform',
  'change_peoples_lives' => "Choose a cause to donate to in a few easy steps and become part of changing people's lives.",
  'donate_monthly' => 'You can support the platform through a one-time donation or with a modest monthly subscription.',
  'more_about_us' => 'More about us',
  'about_fondation' => 'The Dr. Yulian Mollov Foundation was established to support those in need by providing them with funds for necessary and life-saving expensive treatments, both in Bulgaria and abroad, and at the same time can help finance various initiatives that require people`s financial support.',
  'donators' => 'donators',
  'donated' => 'donated',
  'active_subs' => 'active subscriptions',
  'process' => 'Process',
  'how_the_process_works' => 'How does the process work?',
  'starting_a_campaign' => 'Starting a campaign',
  'starting_a_campaign_info' => 'If you need funds for treatment, click the "Start Campaign" button and fill out the application forms.',
  'overview' => 'Selection',
  'overview_info' => 'Our team will review the form and contact you as soon as possible to obtain more information about your case.',
  'start' => 'Start',
  'start_info' => 'If you are approved, your campaign becomes visible on our website and you can now receive donations.',
  'faq' => 'Frequently Asked questions',

  'faq_question1' => 'What is the main mission of the Dr. Yulian Mollov Foundation?',
  'faq_answer1' => 'Dr. Yulian Mollov Foundation aims to provide financial resources for patients who need treatment in Turkey and     abroad. In addition, we support various social and educational causes that require funding.',

  'faq_question2' => 'Who can apply for financial assistance from the foundation?',
  'faq_answer2' => 'Anyone who needs treatment in Turkey and abroad or has a cause that needs funding can apply for help from the foundation. We also support other social projects that you can also apply for.',

  'faq_question3' => 'How can I apply for help?',
  'faq_answer3' => 'You can apply for assistance by visiting the "Create campaign" section and filling out the online application form. After submitting your application, our team will review it and contact you for additional information. Each case is approached individually and with attention, and in an emergency situation we act immediately.',

  'faq_question4' => 'What kind of documents do you need to apply?',
  'faq_answer4' => 'Required documents include: medical documentation proving the need for treatment, financial documents showing the impossibility of self-financing, as well as other supporting documentation that will be specified during the application process.',

  'faq_question5' => 'How does the foundation ensure transparency in the use of donations?',
  'faq_answer5' => 'The Dr. Yulian Mollov Foundation follows strict principles of transparency and accountability. Every donated euro is traceable and used purposefully for medical and social causes. We will regularly publish our financial reports and updates on our activities on our website.',

  'faq_question6' => 'How can I donate?',
  'faq_answer6' => 'You can make a donation in the DONATIONS section, where you will find various donation options - via bank transfer, online payment or other methods. Every donation, regardless of its size, is a valuable contribution to achieving our mission.',


  'faq_question7' => 'What other causes does the foundation support?',
  'faq_answer7' => 'In addition to treating patients in need, we also support a variety of social, educational and charitable projects. This includes funding educational programs, as well as social initiatives and projects aimed at improving the quality of life of vulnerable groups.',


  'faq_question8' => 'How can I become a volunteer in the foundation?',
  'faq_answer8' => 'If you would like to volunteer, please visit our website and fill out the volunteer form. We will contact you to discuss together how you can most effectively help the foundation, according to your capabilities and interests.',

  'faq_question9' => 'Where can I find more information about the foundation?',
  'faq_answer9' => 'Detailed information about our activities, projects and support opportunities can be found on our website: yulianmollov.bg There we will regularly publish various news, videos and stories of the people we have managed to help.',


  'faq_question10' => 'How can you contact Dr Yulian Mollov`s foundation in case you have any questions?',
  'faq_answer10' => 'You can contact us via the contact form on our website, send us an email at dr.yulian.mollov@gmail.com or call us at the phone numbers listed. Our team is always available to answer your questions and help you.',
  // 1. welcome.blade.php END

  'terms_site_intro' => 'www.yulianmollov.bg is the official website of <b>“Dr. Yulian Mollov Foundation”</b>, registered in
the Commercial Register and the Register of Non-Profit Legal Entities with the Registry Agency
under <b>UIC: 207803651</b>, with headquarters and registered address: <b>Sofia, Dragalevtsi district,
15 Ilinden St.</b>, hereinafter referred to as <b>“the Foundation,” “the platform,” “us,”</b> or <b>“we”</b>.',

  'terms_site_description' => 'The website is an online platform for collecting donations for charitable campaigns.',

  'terms_legal_agreement' => '<b>The Terms and Conditions</b> are a legally binding agreement regarding the provision of services
by the website of the Dr. Yulian Mollov Foundation and their use by every user, also referred to as
<b>“Beneficiary,” “Donor,” “You,” “Your”</b> or <b>“Initiator.”</b>',

  'terms_please_read' => '<b>Please read these Terms and Conditions carefully before using the platform.</b>',

  'terms_acceptance_notice' => 'By accessing <b>www.yulianmollov.bg</b>, you agree to be bound by these Terms and Conditions and to comply with them.
If you do not agree with all the terms below, please do not use this platform.',

  'terms_general_provisions' => '<b>GENERAL PROVISIONS</b>',

  'terms_definitions' => '<b>DEFINITIONS</b>',

  'terms_user_definition' => '<b>“User”</b> means any natural person who uses this platform (website) and creates a campaign and/or makes a donation to a campaign.',

  'terms_services_definition' => '<b>“Service/Services”</b> of the website include:<br>
• Access to information/data provided via the website browser;<br>
• Creation of a charitable campaign to raise funds;<br>
• Creation of a profile with the ability to donate monthly to campaigns/charity organizations;<br>
• Creation and customization of user profiles via registration, enabling site services;<br>
• Receiving emails with messages and newsletters related to the foundation and/or its campaigns.',

  'terms_donor_definition' => '<b>“Donor”</b>, for the purposes of these Terms and Conditions, is any natural or legal person who enters
into a donation agreement with the Foundation – one-time or recurring – or who donates to a campaign,
regardless of the donation amount.',

  'terms_campaign_definition' => '<b>“Campaign”</b> – a project or cause created with the help of this website for the purpose of collecting
donations for charitable purposes.',

  'terms_beneficiary_definition' => '<b>“Beneficiary”</b>, as defined in these Terms and Conditions, is a natural or legal person for whose benefit the Foundation provides a specific amount, in accordance with the donor’s will stated in their individual agreement with the Foundation. The beneficiary of a donation may be a natural or legal person. If the beneficiary is also the initiator of the campaign/cause, they may update or stop the campaign at any time and request payouts from the funds already raised.',

  'terms_initiator_definition' => '<b>“Initiator of the campaign/cause”</b> – a natural or legal person who starts the campaign(s). The initiator may edit or stop the campaign at any time and request payouts from the funds already raised. The approval of the initiator by the beneficiary to launch a campaign on their behalf is entirely the responsibility of the initiator. The Dr. Yulian Mollov Foundation bears no liability.',

  'terms_website_definition' => '<b>“Website”</b> – a collection of linked web pages, images, video content, texts, and/or other digital resources accessible under a unified URL address in an IP-based network. For the purposes of these Terms, our website <b>www.yulianmollov.bg</b> will be referred to as the Website/platform.',

  'terms_payment_operator' => '<b>“Payment Operator”</b> – the legal entity that facilitates payment processing through this platform.',

  'terms_platform_definition' => '<b>“Platform”</b> – the website <b>www.yulianmollov.bg</b> and its associated communication interfaces, databases, functional modules, and mobile applications.',

  'terms_user_alt_definition' => '<b>“User”</b> – any Bulgarian or foreign natural person who uses the Website, creates a Campaign, or makes a donation to a Campaign.',

  'terms_abuse_definition' => '<b>Abuse</b> is defined as using funds for misleadingly described purposes and/or false content, unrelated to the Campaign, or in contradiction to these Terms.',

  'terms_website_use_conditions' => '<b>Terms of Use of the Website</b>',

  'terms_age_restrictions' => 'The Website may be used by individuals over the age of 14. To create a campaign, users must be at least 18 years old. If necessary, we reserve the right to request proof of age. Access to certain features of the site may be restricted until such proof is provided.',

  'terms_profile_registration' => 'As an <b>Initiator</b> or <b>Beneficiary</b>, you may use the site with or without registration. When registering, you must provide your name, email address, and phone number. You are also required to specify your age and gender. The Website is fully integrated with Facebook and allows login through your Facebook profile.',

  'terms_account_responsibility' => 'You are fully responsible for all activity under your account and for keeping your password confidential. If you detect any unauthorized use of your account, please notify us immediately at <b>info@yulianmollov.bg</b>.',

  'terms_data_usage' => 'The Website may use the personal data you provide only if it is voluntarily submitted and in accordance with our <b>Privacy Policy</b>.',

  'terms_please_note' => '<b>Please note that:</b>',

  'terms_identity_verification_notice' => 'If necessary, you may be asked to provide photos of personal documents to verify your identity or upon request from a competent authority. By using the website, you consent to the removal of any personal data that should not be published, if required.',
  'terms_beneficiary_data_responsibility' => 'You are responsible for the personal data provided about the Beneficiary (if the person organizing the campaign is not the actual Beneficiary).',
  'terms_user_declaration_heading' => 'By using the website, you declare and accept responsibility that:',
  'terms_campaign_authenticity_statement' => 'The cause/campaign you wish to initiate is genuine, and the intended Beneficiary agrees to the campaign being launched on their behalf. All documents, photos, and other evidence you provide are authentic and verify the legitimacy and necessity of the campaign.',
  'terms_false_declaration_liability' => 'You understand that any false declarations and/or attempts to abuse the trust of donors and the website, including misuse of funds collected for a campaign, are punishable by law, and the Foundation has the right to notify the competent authorities.',
  'terms_foundation_verification_right' => 'You understand that the Foundation must verify the authenticity of the campaign to prevent abuse of financial and other resources. Additional documentation may be requested for this purpose.',
  'terms_foundation_purpose_acknowledgement' => 'You are aware of the Foundation’s mission and understand that its activities are solely and exclusively charitable in nature.',

  'terms_consent_data_publication' => '4. By using the website, we assume that the data you provide is submitted voluntarily and that you consent to its publication on the website, as well as on social networks, for the purpose of dissemination, publicity, and achieving the campaign\'s ultimate goal.',
  'terms_no_consent_termination_warning' => 'If you do not wish to provide your data as described in the previous sentence, please do not use the website. Please note that refusal or withdrawal of the consent mentioned above will result in the termination of the campaign, as the platform cannot operate it without this condition. Therefore, we consider your registration and activity on the website as implicit voluntary and informed consent under this point and the Privacy Policy.',
  'terms_campaign_completion_agreement' => 'By continuing to use this website, you agree that after the campaign ends (due to funds being raised and/or another event requiring its conclusion), we may publish evidence of the campaign’s completion and how the funds were spent.',
  'terms_photo_consent_notice' => 'We assume that by submitting any photographic material to the website, you give your voluntary and informed consent for the photos and information you provide to be published on the website and on social media for the purpose of dissemination, publicity, and fulfilling the campaign\'s goal. Please explicitly inform us if any of the photographic material should not be published.',
  'terms_donor_usage_rights' => 'As a Donor, you can use the website with or without registration – entirely at your discretion. The only required data are your name and email address. By entering your email address when donating, you agree to receive:',
  'terms_donation_receipt_notice' => 'a receipt for the donation made',
  'terms_campaign_updates_and_newsletter' => 'periodic updates regarding the campaign you supported, and, if you have explicitly consented, the foundation\'s email newsletter. You can unsubscribe from this information at any time.',
  'terms_payment_providers_clause' => 'Our website uses the following payment systems: Stripe; PayPal; GooglePay; ApplePay; and the terms of Bank B and Revolut. By using our website and any of these systems, you agree to their respective terms, available on their official websites.',
  'terms_facebook_registration_notice' => 'By registering on our website via the Facebook platform, you agree to their terms of service, available on their website.',
  'terms_legal_use_agreement' => 'By using the website, you agree to use it only for purposes permitted by these terms and conditions, applicable laws, and the regulations of the Republic of Bulgaria. You agree not to use the website in a manner that could damage, overload, or disrupt systems and networks, and not to take any action that infringes on our or others\' legal rights.',
  'terms_content_control_disclaimer' => 'The website serves as a connection between all individuals using our site. Neither the platform nor we, the foundation, control or are responsible for the accuracy of the content uploaded by users.',
  'terms_no_liability_for_user_content' => 'The "Dr. Yuliyan Mollov" Foundation will not be involved in any disputes arising between users of the website. Users use the website at their own risk and agree that the foundation is not liable for damages or lost profits resulting from its use.',
  'terms_restricted_access_clause' => 'Access to the website is prohibited from countries where its content is illegal. You are responsible for complying with applicable laws regarding your use of the website in the jurisdiction from which you access it. By accepting these Terms, you agree to comply with all relevant laws regarding e-commerce, donations, and the transfer of personal data from the EU to third countries or your country of residence.',
  'terms_temporary_downtime_and_limitations' => 'In the event of failure, updates, preventive or necessary maintenance, we may temporarily suspend partial or full access to the website. We are not obligated to maintain, modify, or add specific functionalities requested by users, but we may consider them upon request. If the website is unavailable at a given time due to such events, the foundation is not responsible for any material or non-material damages, or lost profits of Initiators or Beneficiaries. We reserve the right, at our discretion, to deny access to the website to any User without being required to justify the reasons, by notifying the email address provided during registration.',

  'terms_foundation_rights' => 'Rights of the Foundation:',
  'terms_rights_donor_names_public' => 'To publicly announce the names of its donors, except when a donor does not wish their name to be made public.',
  'terms_rights_donor_data_authorities' => 'To provide access to donor names and email addresses to state institutions that have such legal authority. In all other cases, the name and personal data of donors who choose anonymity will not be made public.',
  'terms_rights_user_data_verification' => 'To verify your identity and the data you declared during registration, in accordance with applicable laws.',
  'terms_rights_user_access_limit' => 'To restrict the rights or access of a user who publishes false or misleading information or acts in contradiction to these terms and conditions.',
  'terms_rights_content_edit' => 'To edit the content and formatting you provided for a campaign, with the purpose of ensuring more accessible and understandable information, but only after consultation with the campaign initiator.',
  'terms_rights_access_termination' => 'To permanently or temporarily terminate, suspend, or otherwise deny your access to the website, or remove any campaign if...',
  'terms_rights_user_content_responsibility' => 'The responsibility for ensuring published content is original lies with the uploader. Third-party claims are directed solely at the content creator. The foundation will review each complaint or claim and decide on appropriate measures.',
  'terms_rights_campaign_publicity' => 'By uploading campaign content—texts, photos, videos, etc.—users/beneficiaries agree that it becomes public and may be distributed by third parties, whether for campaign promotion or for malicious reasons. The foundation is not liable in such cases.',
  'terms_rights_uncontrollable_events' => 'The foundation is not liable for lack of access to the website or its services due to events beyond its control, such as force majeure.',
  'terms_rights_campaign_fraud' => 'In case of suspicion of fraud or false information in a campaign, the foundation reserves the right to terminate it and redirect the collected funds to another campaign in the same category.',

  'terms_foundation_obligations' => 'Obligations of the Foundation:',
  'terms_obligation_assist_users' => 'To assist users with registration or donations on the website.',
  'terms_obligation_campaign_support' => 'To support users in creating campaigns by advising them on content and offering guidance when requested.',
  'terms_obligation_disburse_funds' => 'To disburse collected donations accurately to the beneficiaries/initiators of each campaign. The foundation is not liable if misuse occurs after disbursement.',
  'terms_obligation_notify_goal_reached' => 'When a campaign goal is reached, to notify the initiator/contact person via email or phone and allow 30 days to provide a bank account for the transfer.',
  'terms_unclaimed_funds_reassignment' => 'If funds are not claimed within 30 days, the foundation reserves the right to redirect the funds to another campaign or for administrative costs.',
  'terms_obligation_death_notice' => 'In case of a beneficiary’s death, the initiator or heirs must notify the foundation within 48 hours. In such cases:',
  'terms_death_funds_usage' => 'Remaining funds may be used for medical debts, funeral costs, or body transport, with proof of expenses. Surplus funds are redirected to other campaigns or administrative costs.',
  'terms_death_initiator_responsibility' => 'The initiator/heirs must specify within 30 days which campaigns on the foundation\'s site should receive the remaining funds. If they choose a campaign outside the site, it must first be created on the foundation’s platform.',
  'terms_death_unreported_funds' => 'If the foundation learns of the death from another source and was not notified in time, it may reallocate the funds without seeking initiator/heir consent.',

  'terms_accepting_conditions_disclaimer' => 'By accepting the Terms, you agree that the foundation is not obligated to monitor uploaded content and is not liable for its accuracy or for disputes between website users. You are responsible for the content you provide and protecting it from misuse.',
  'terms_important_notice' => 'IMPORTANT!!!',

 'terms_donors_no_right_refund' => 'Donors are not entitled to a refund of their donated funds when the funds are donated under the condition to be used in their own campaign; the funds are transferred to a bank account with a holder different from "Dr. Yuliyan Mollov" Foundation; for any reason you decide to stop supporting a campaign you previously supported; personal disagreements arise between them and the campaign initiator or beneficiary.',

    'terms_donor_rights_title' => 'Donor Rights:',
    'terms_donor_rights_receipt' => 'For each donation made on our website, the donor receives a receipt at the email address provided...',
    'terms_donor_rights_anonymous_label' => 'For anonymous donations, the label "Anonymous Donor" will appear in the donor list of the campaign...',
    'terms_donor_rights_anonymity_scope' => 'Anonymity applies only to third parties external to the foundation...',
    'terms_donor_rights_campaign_fail' => 'Donors agree that if a campaign fails for any reason, the collected funds will be redirected...',
    'terms_donor_rights_beneficiary_inactive' => 'Donors agree that if the initiator/beneficiary does not claim the collected funds...',
    'terms_donor_rights_no_refund' => 'In any donation case, the Donor cannot request a refund of their donation.',
    'terms_donor_rights_recurring' => 'Donors can donate long-term according to their chosen subscription option.',
    'terms_donor_rights_promote' => 'Donors have the right to promote the campaign they support via social networks.',
    'terms_donor_rights_tax_contract' => 'If the donor wishes to use tax benefits under the Corporate Income Tax Act, they must provide additional data...',

    'terms_campaign_start_title' => 'Starting a Campaign – Conditions',
    'terms_campaign_start_age_and_goal' => 'To create a campaign, you must be at least 18 years old...',
    'terms_campaign_start_accept_terms' => 'Registration is only possible after reviewing and accepting these Terms and Conditions...',
    'terms_campaign_start_provide_info' => 'When creating a campaign, you must provide accurate, clear and complete information...',
    'terms_campaign_start_update_and_respond' => 'As a campaign creator, you must respond to inquiries and keep your campaign information up to date...',
    'terms_campaign_start_review_assist' => 'Each created campaign will be reviewed by the foundation’s team and assistance may be provided...',

    'terms_accountability_title' => 'Accountability',
    'terms_accountability_donations_allocation' => 'All donations are received into a single account of the Foundation...',

    'terms_payments_fees_title' => 'Payments and Fees',
    'terms_payments_card_info' => 'When making a donation, the Donor must provide their bank card details or other required information...',
    'terms_payments_no_refund' => 'As a Donor, you agree that all payments made are non-refundable.',
    'terms_payments_recurring' => 'The foundation’s website allows you to support a campaign via recurring donations...',

     'terms_donation_distribution_title' => 'Donation Distribution',
    'terms_donation_distribution_intro' => 'Guided by the principles of transparency and accountability, we distribute donations to your selected Campaigns as follows:',
    'terms_donation_distribution_point_1' => '1. …………% of each donation is retained by the Foundation to cover payment processing fees charged by payment institutions, card processors, and online payment platforms we work with, according to their terms.',
    'terms_donation_distribution_point_2' => '2. Between 0% and a maximum of 5% of each donation may be retained as a donation to the Dr. Yuliyan Mollov Foundation to cover website maintenance and operation costs.',
    'terms_donation_distribution_point_3' => '3. The remaining amount is transferred to the bank account specified by the Campaign Creator, minus any applicable bank transaction fees.',
    'terms_donation_distribution_note' => 'If Donors wish to allocate an amount to cover the Foundation’s administrative costs, it can be specified as a percentage or fixed value and transferred to the Foundation’s account with a clear purpose noted in the payment reference.',

    'terms_donation_usage_title' => 'Donation Usage',
    'terms_donation_usage_point_1' => 'Campaign Creators/Beneficiaries can request partial withdrawals from the total campaign funds by submitting a detailed request and documentation of how the funds will be used.',
    'terms_donation_usage_point_2' => 'If the campaign goal is reached, the website will automatically disable further donations. Donors with subscriptions will be notified and may choose a different campaign. If not selected, donations go to the campaign needing the smallest amount.',
    'terms_donation_usage_point_3' => 'Transaction fees for withdrawing campaign funds are borne by the Campaign Creator/Beneficiary and deducted from the total campaign amount.',
    'terms_donation_usage_point_4' => 'The Foundation reviews submitted documents and keeps records, including donation date, amount, and purpose, along with documentation of the payment.',
    'terms_donation_usage_point_5' => 'The website will indicate when verification is completed. In case of doubt about fund use, the Foundation may request additional documents and cooperation from the Beneficiary.',

    'terms_tax_matters_title' => 'Tax Matters',
    'terms_tax_matters_note' => 'It is your responsibility to check whether and what taxes are due upon receiving donated funds. The Foundation does not assess or report taxes to the relevant authorities. This is entirely your responsibility. In case of uncertainty about whether a tax is due, the basis, or the applicable amount, please consult a qualified attorney. The Foundation does not provide such services.',

    // Fund disbursement
    'terms_fund_disbursement_title' => 'Disbursement of Collected Funds',
    'terms_fund_disbursement_intro' => 'For campaigns in the "Medical Treatment, Healthcare, and Rehabilitation" category:',
    'terms_fund_disbursement_point_1' => '1. Via proforma invoice to a third party, clearly describing the expenses, such as: treatment and rehabilitation, tests and medication, transportation from residence to the city where the treatment is conducted – bus or plane tickets for the beneficiary and one companion, or ambulance transport, hotel for the beneficiary and companion, translation services.',
    'terms_fund_disbursement_point_2' => '2. To a donor account in the name of the Beneficiary (available only for campaigns in Bulgaria) – upon submission of a contract for opening a donor account. The account, beneficiary’s name, signatures, and stamps must be clearly visible on the document issued by the bank. The contract must be valid and not expired. If expired, an annex from the bank must be attached.',

      'terms_category_campaigns' => 'For campaigns in the category',

    // General provisions
    'terms_general_provisions_title' => 'General Provisions',
    'terms_general_provisions_1' => 'By using the Platform, Users confirm that they have read and agree with these Terms and Conditions in their entirety. We reserve the right to change these Terms at any time and an unlimited number of times, and Users agree to this. If a User disagrees with the amended Terms, they have 15 days from the date of publication of the updated Terms on the Platform to rely on the previous version. The most recently published Terms are considered binding.',
    'terms_general_provisions_2' => 'The invalidity of any provision of these Terms shall not affect the validity of any other provision or the Terms as a whole.',
    'terms_general_provisions_3' => 'For all matters not covered by these Terms and Conditions, applicable Bulgarian legislation shall apply.',
    'terms_general_provisions_4' => 'In the event of disputes that cannot be resolved amicably between the parties, the applicable Bulgarian legislation will apply, and the dispute will be referred to the competent court.',
    'terms_general_provisions_5' => 'The Platform is entitled to compensation for all damages, costs, and claims from Users, Beneficiaries, or third parties resulting from violations of these Terms, unauthorized use of the website and/or abuse of Campaigns or misuse of donated funds, including, but not limited to, compensation for legal costs, attorney fees, and other expenses incurred in defending rights and legal interests due to unlawful or contrary actions by Users.',
    'terms_general_provisions_6' => 'The content (or parts of it) of the website may not be copied, modified, redistributed, licensed, sublicensed, or transferred in any form without prior explicit written consent from the Foundation.',

    // Cookies
    'terms_cookies_title' => 'COOKIES',
    'terms_cookies_text' => 'The website uses cookies to collect data. The information collected is only that necessary for reporting activity on the platform. No other data is collected or shared with third parties. For more information, visit the specially designated page.',

    // Data Protection
    'terms_data_protection_title' => 'SECURITY AND DATA PROTECTION',
    'terms_data_protection_text' => 'Detailed information regarding the collection and processing of Users’ and Beneficiaries’ personal data is provided in the Privacy Policy, which is an integral part of these Terms.',

    // Last update
    'terms_last_update_date' => 'Last updated on:',


];
