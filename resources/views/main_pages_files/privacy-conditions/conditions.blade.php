<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {!! __('messages.title_conditions') !!}</title>
    <!-- favicons Icons -->

    @include('main_pages_files.inc.head')


</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('main_pages_files.inc.header')


        <div class="container conditions">
            <h1 class="text-center">Общи условия за ползване на уеб сайта yulianmollov.bg</h1>
            <p>
                {!! __('messages.terms_site_intro') !!}
                {!! __('messages.terms_site_description') !!}
                {!! __('messages.terms_legal_agreement') !!}
                {!! __('messages.terms_please_read') !!}
                {!! __('messages.terms_acceptance_notice') !!}
                {!! __('messages.terms_general_provisions') !!}
                {!! __('messages.terms_definitions') !!}
                {!! __('messages.terms_user_definition') !!}
                {!! __('messages.terms_services_definition') !!}
                {!! __('messages.terms_donor_definition') !!}
                {!! __('messages.terms_campaign_definition') !!}
                {!! __('messages.terms_beneficiary_definition') !!}
                {!! __('messages.terms_initiator_definition') !!}
                {!! __('messages.terms_website_definition') !!}
                {!! __('messages.terms_payment_operator') !!}
                {!! __('messages.terms_platform_definition') !!}
                {!! __('messages.terms_user_alt_definition') !!}
                {!! __('messages.terms_abuse_definition') !!}
                {!! __('messages.terms_website_use_conditions') !!}
                {!! __('messages.terms_age_restrictions') !!}
                {!! __('messages.terms_profile_registration') !!}
                {!! __('messages.terms_account_responsibility') !!}
                {!! __('messages.terms_data_usage') !!}
                {!! __('messages.terms_please_note') !!}

            <ul>
                <li>{!! __('messages.terms_identity_verification_notice') !!}</li><br>
                <li>{!! __('messages.terms_beneficiary_data_responsibility') !!}</li><br>
                <li>{!! __('messages.terms_user_declaration_heading') !!}
                    <ul>
                        <li>{!! __('messages.terms_campaign_authenticity_statement') !!}</li><br>
                        <li>{!! __('messages.terms_false_declaration_liability') !!}</li><br>
                        <li>{!! __('messages.terms_foundation_verification_right') !!}</li><br>
                        <li>{!! __('messages.terms_foundation_purpose_acknowledgement') !!}</li>
                    </ul>
                </li>
            </ul>

            <b>{!! __('messages.terms_consent_data_publication') !!}</b><br><br>

            {!! __('messages.terms_no_consent_termination_warning') !!}<br><br>

            {!! __('messages.terms_campaign_completion_agreement') !!}<br><br>

            {!! __('messages.terms_photo_consent_notice') !!}<br><br>

            <b>{!! __('messages.terms_donor_usage_rights') !!}</b>
            <ul>
                <li>{!! __('messages.terms_donation_receipt_notice') !!}</li>
                <li>{!! __('messages.terms_campaign_updates_and_newsletter') !!}</li>
            </ul>

            {!! __('messages.terms_payment_providers_clause') !!}<br><br>

            {!! __('messages.terms_facebook_registration_notice') !!}<br><br>

            {!! __('messages.terms_legal_use_agreement') !!}<br><br>

            <b>{!! __('messages.terms_content_control_disclaimer') !!}</b>

            {!! __('messages.terms_no_liability_for_user_content') !!}<br><br>

            {!! __('messages.terms_restricted_access_clause') !!}<br><br>

            {!! __('messages.terms_temporary_downtime_and_limitations') !!}<br><br>



            <b>{!! __('messages.terms_foundation_rights') !!}</b><br>
            <ul>
                <li>{!! __('messages.terms_rights_donor_names_public') !!}</li><br>
                <li>{!! __('messages.terms_rights_donor_data_authorities') !!}</li><br>
                <li>{!! __('messages.terms_rights_user_data_verification') !!}</li><br>
                <li>{!! __('messages.terms_rights_user_access_limit') !!}</li><br>
                <li>{!! __('messages.terms_rights_content_edit') !!}</li><br>
                <li>{!! __('messages.terms_rights_access_termination') !!}</li><br>
                <li>{!! __('messages.terms_rights_user_content_responsibility') !!}</li><br>
                <li>{!! __('messages.terms_rights_campaign_publicity') !!}</li><br>
                <li>{!! __('messages.terms_rights_uncontrollable_events') !!}</li><br>
                <li>{!! __('messages.terms_rights_campaign_fraud') !!}</li>
            </ul>

            <b>{!! __('messages.terms_foundation_obligations') !!}</b><br>
            <ul>
                <li>{!! __('messages.terms_obligation_assist_users') !!}</li><br>
                <li>{!! __('messages.terms_obligation_campaign_support') !!}</li><br>
                <li>{!! __('messages.terms_obligation_disburse_funds') !!}</li><br>
                <li>{!! __('messages.terms_obligation_notify_goal_reached') !!}<br><br>
                    <ul>
                        <li>{!! __('messages.terms_unclaimed_funds_reassignment') !!}</li>
                    </ul>
                </li><br>
                <li>{!! __('messages.terms_obligation_death_notice') !!}<br><br>
                    <ul>
                        <li>{!! __('messages.terms_death_funds_usage') !!}</li><br>
                        <li>{!! __('messages.terms_death_initiator_responsibility') !!}</li><br>
                        <li>{!! __('messages.terms_death_unreported_funds') !!}</li>
                    </ul>
                </li>
            </ul>

            <b>{!! __('messages.terms_accepting_conditions_disclaimer') !!}</b><br><br>
            <b>{!! __('messages.terms_important_notice') !!}</b><br><br>

            <ul>
                <li>{!! __('messages.terms_donors_no_right_refund') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_donor_rights_title') !!}</b><br><br>
            <ul>
                <li>1. {!! __('messages.terms_donor_rights_receipt') !!}</li><br>
                <li>2. {!! __('messages.terms_donor_rights_anonymous_label') !!}</li><br>
                <li>3. {!! __('messages.terms_donor_rights_anonymity_scope') !!}</li><br>
                <li>4. {!! __('messages.terms_donor_rights_campaign_fail') !!}</li><br>
                <li>5. {!! __('messages.terms_donor_rights_beneficiary_inactive') !!}</li><br>
                <li>6. {!! __('messages.terms_donor_rights_no_refund') !!}</li><br>
                <li>7. {!! __('messages.terms_donor_rights_recurring') !!}</li><br>
                <li>8. {!! __('messages.terms_donor_rights_promote') !!}</li><br>
                <li>9. {!! __('messages.terms_donor_rights_tax_contract') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_campaign_start_title') !!}</b><br><br>
            <ul>
                <li>1. {!! __('messages.terms_campaign_start_age_and_goal') !!}</li><br>
                <li>2. {!! __('messages.terms_campaign_start_accept_terms') !!}</li><br>
                <li>3. {!! __('messages.terms_campaign_start_provide_info') !!}</li><br>
                <li>4. {!! __('messages.terms_campaign_start_update_and_respond') !!}</li><br>
                <li>5. {!! __('messages.terms_campaign_start_review_assist') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_accountability_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_accountability_donations_allocation') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_payments_fees_title') !!}</b><br><br>
            <ul>
                <li>1. {!! __('messages.terms_payments_card_info') !!}</li><br>
                <li>2. {!! __('messages.terms_payments_no_refund') !!}</li><br>
                <li>3. {!! __('messages.terms_payments_recurring') !!}</li><br>
            </ul>
            <b>{!! __('messages.terms_donation_distribution_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_donation_distribution_intro') !!}</li><br>
                <li>{!! __('messages.terms_donation_distribution_point_1') !!}</li><br>
                <li>{!! __('messages.terms_donation_distribution_point_2') !!}</li><br>
                <li>{!! __('messages.terms_donation_distribution_point_3') !!}</li><br>
                <li>{!! __('messages.terms_donation_distribution_note') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_donation_usage_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_donation_usage_point_1') !!}</li><br>
                <li>{!! __('messages.terms_donation_usage_point_2') !!}</li><br>
                <li>{!! __('messages.terms_donation_usage_point_3') !!}</li><br>
                <li>{!! __('messages.terms_donation_usage_point_4') !!}</li><br>
                <li>{!! __('messages.terms_donation_usage_point_5') !!}</li><br>
            </ul>
            <b>{!! __('messages.terms_tax_matters_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_tax_matters_note') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_fund_disbursement_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_fund_disbursement_intro') !!}</li><br>
                <li>{!! __('messages.terms_fund_disbursement_point_1') !!}</li><br>
                <li>{!! __('messages.terms_fund_disbursement_point_2') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_category_campaigns') !!}</b><br><br>

            <b>{!! __('messages.terms_general_provisions_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_general_provisions_1') !!}</li><br>
                <li>{!! __('messages.terms_general_provisions_2') !!}</li><br>
                <li>{!! __('messages.terms_general_provisions_3') !!}</li><br>
                <li>{!! __('messages.terms_general_provisions_4') !!}</li><br>
                <li>{!! __('messages.terms_general_provisions_5') !!}</li><br>
                <li>{!! __('messages.terms_general_provisions_6') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_cookies_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_cookies_text') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_data_protection_title') !!}</b><br><br>
            <ul>
                <li>{!! __('messages.terms_data_protection_text') !!}</li><br>
            </ul>

            <b>{!! __('messages.terms_last_update_date') !!}</b> 12.09.2024 г.


            </p>


        </div>


        @include('main_pages_files.inc.footer')


    </div><!-- /.page-wrapper -->






</body>

</html>
