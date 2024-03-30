<!--=============== CSS ===============-->
<link rel="stylesheet" href="assets/css/styles.css">
<style>
    .tabHead {
        font-size: small;
        font-weight: bold;
    }

    .tabBot {
        font-size: x-small;
    }

    .tabHeadRow {
        width: 98%;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
        padding: 5px;
        border-radius: 4px;
        cursor: pointer;
        opacity: 0.6;
        margin-top: 5px;
        transition: transform 0.2s;
        /* margin-top: 15px; */
    }

    .tabHeadRow.active {
        background-color: aliceblue;
        opacity: 1;
        transform: scale(1.1);
    }

    .personal_dropdown {
        grid-template-columns: repeat(3, max-content);
    }

    .tabData__values {
        grid-template-columns: repeat(2, max-content);
        column-gap: 1rem;
        row-gap: 0;
        box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.5);
        border-radius: 4px;
        padding-left: 7%;
        margin-left: 5%;
        max-height: 70vh;
        overflow-y: auto;
        margin-top: 25px;
    }

    .styles_talkBtn__y2k1h {
        background: #fdd106;
        width: 169px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        font-size: 14px;
        line-height: 21px;
        color: #001d37;
        border-radius: 0 10px 0 10px;
    }
</style>

<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">

            <div class="nav__toggle" id="nav-toggle" style="margin-right:25px;">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>

            <a href="index.php" class="nav__logo">
                <strong style="font-size:35px;color:black;">Finnac<b style="color:orange;">Biz</b></strong>
            </a>
        </div>

        <!--=============== NAv MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item desktop_view">
                    <div class="nav__link dropdown__button">
                        Business <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container" style="margin-left:25%;">
                        <div class="row" style="margin-left:2%;">
                            <div class="col-md-3" style="overflow-y:auto;max-height: 70vh;display:flex;flex-direction:column;align-items:center;">
                                <div class="row tabHeadRow active" id="tab1" onclick="tabSwitch(1);">
                                    <span class="tabHead">Register a Business</span>
                                    <span class="tabBot">All entity types - India & Abroad</span>
                                </div>
                                <div class="row tabHeadRow" id="tab2" onclick="tabSwitch(2);">
                                    <span class="tabHead">Licenses and Registrations</span>
                                    <span class="tabBot">GST, FSSAI, Startup India & more</span>
                                </div>
                                <div class="row tabHeadRow" id="tab3" onclick="tabSwitch(3);">
                                    <span class="tabHead">Manage Your Business Filings</span>
                                    <span class="tabBot">Accounting, TAX, Compliance & more</span>
                                </div>
                                <div class="row tabHeadRow" id="tab4" onclick="tabSwitch(4);">
                                    <span class="tabHead">Brand Identity Protection & IP</span>
                                    <span class="tabBot">Trademarks, Copyrights & Patents</span>
                                </div>
                                <div class="row tabHeadRow" id="tab5" onclick="tabSwitch(5);">
                                    <span class="tabHead">Document & Agreements</span>
                                    <span class="tabBot">Policies, Contracts, Notices & more</span>
                                </div>
                                <div class="row tabHeadRow" id="tab6" onclick="tabSwitch(6);">
                                    <span class="tabHead">NGO & Non-profit</span>
                                    <span class="tabBot">Registration and Compliance for NGOs</span>
                                </div>
                                <div class="row tabHeadRow" id="tab7" onclick="tabSwitch(7);">
                                    <span class="tabHead">Audit & Attestation</span>
                                    <span class="tabBot">Audit & Attestation</span>
                                </div>
                                <div class="row tabHeadRow" id="tab8" onclick="tabSwitch(8);">
                                    <span class="tabHead">Offshore Services</span>
                                    <span class="tabBot">Offshore Services</span>
                                </div>
                                <div class="row tabHeadRow" id="tab9" onclick="tabSwitch(9);">
                                    <span class="tabHead">Digital Marketing</span>
                                    <span class="tabBot">Digital Marketing</span>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="dropdown__content tabData__values" id="tabData1">
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Business Setup</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=pvt_ltd_com" class="dropdown__link">Private Limited Company</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=limited_liability_partnership" class="dropdown__link">Limited Liability Partnership</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=one_person_company" class="dropdown__link">One Person Company</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=sole-proprietorship-registration-india" class="dropdown__link">Sole Proprietorship</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=nidhi_company" class="dropdown__link">Nidhi Company</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=partnership-firm-deed" class="dropdown__link">Partnership Firm</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=producer-company-registration" class="dropdown__link">Producer Company</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">International Business Setup</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=business-setup-in-dubai" class="dropdown__link">Dubai Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=usa-incorporation" class="dropdown__link">US Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=registered-company-in-singapore" class="dropdown__link">Singapore Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=incorporating-a-company-in-united-kingdom" class="dropdown__link">UK Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=incorporating-a-company-in-hong-kong" class="dropdown__link">Hong Kong Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=incorporating-a-company-in-australia" class="dropdown__link">Australia Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=incorporating-a-company-in-china" class="dropdown__link">China Company Incorporation</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=incorporating-a-company-in-malaysia" class="dropdown__link">Malaysia Company Incorporation</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Name Search</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Company Name Search</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Brand Name Search</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="dropdown__group">
                                        <span class="dropdown__title">Fundraising</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Fundraising</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Pitch Deck</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Business Ideas</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="dropdown__content tabData__values" id="tabData2" style="display:none;">
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=digital-signature-certificate" class="dropdown__link">Digital Signature Certificate</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=udyam" class="dropdown__link">MSME/SSI Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=iso-certification" class="dropdown__link">ISO Certification</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=fssai-online-registration" class="dropdown__link">FSSAI [Food License]</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=import-export-code" class="dropdown__link">IEC [Import/Export Code]</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=psara-license-services" class="dropdown__link">Psara License</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trade-license-registration" class="dropdown__link">Trade License</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=startup-india-scheme" class="dropdown__link">Startup India Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=shop-and-establishment-license" class="dropdown__link">Shops and Establishments License</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=apparel-export-promotion-council" class="dropdown__link">AEPC</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=legal-metrology" class="dropdown__link">Legal Metrology</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=apeda-rcmc-registration" class="dropdown__link">APEDA registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=rcmc-registration" class="dropdown__link">RCMC</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=federation-of-indian-export-organisations" class="dropdown__link">FIEO</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=spice-board-registration" class="dropdown__link">Spice Board Registration</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="dropdown__content tabData__values" id="tabData3" style="display:none;">
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Changes in Pvt Ltd Company</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Add a Director</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Remove a Director</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Increase Authorized Capital</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Close a Pvt Ltd Company</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Change Objective/Activity</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Change Address</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Change Company Name</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Convert Your Business</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Proprietorship to Pvt Ltd Company</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Compliance Check - Secretarial Audit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Due Digilence</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">RBI Compliance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Partnership to LLP</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Private to Public Limited Company</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Private to One Person Company</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Accounting & Tax</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Accounting and Book-keeping</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Company & LLP Income Tax Return Filing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Payroll Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">TDS Return Filing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Income Tax Return Filing Online</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Proprietorship ITR Filing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Professional Tax Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">USA Tax Law</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Accounting & Business Compliance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Corporate Tax</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Labour Compliance</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Labor Law</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Provident Fund (PF) Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=online-esi-registration" class="dropdown__link">ESI Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Employee Stock Option Plan [ESOP]</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">GST</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">GST Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">GST Filing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">GST Advisory</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">GST HSN Finder</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Mandatory Annual Filings</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Private Limited Company / OPC</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=llp-annual-compliance" class="dropdown__link">Limited Liability Partnership</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">CFSS</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Changes In LLP</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Add Designated Partner</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Changes to LLP Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Close the LLP</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="dropdown__content tabData__values" id="tabData4" style="display:none;">
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Trademark</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=trademark-registration" class="dropdown__link">Trademark Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=design-registration" class="dropdown__link">Design Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Search for Trademark Class</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trademark-objection" class="dropdown__link">Respond to TM Objection</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trademark-watch" class="dropdown__link">Trademark Watch</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trademark-renewal" class="dropdown__link">Trademark Renewal</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trademark-assign" class="dropdown__link">Trademark Assignment</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=international-trademark-registration" class="dropdown__link">International Trademark Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trademark-registration-in-usa" class="dropdown__link">USA Trademark</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Copyright</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=copyright-registration" class="dropdown__link">Copyright Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Copyright For Music</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Patent</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=patent-search" class="dropdown__link">Patent Search</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=provisional-patent" class="dropdown__link">Provisonal Application</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=patent-registration" class="dropdown__link">Permanent Patent</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Logo Registration</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Logo Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="dropdown__content tabData__values" id="tabData5" style="display:none;">
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Business Contracts</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Non Disclosure Agreement NDA</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Service Level Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Franchise Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Master Service Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Shareholders Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Joint Venture Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Founders Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Vendor Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Consultancy Agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Memorandum of Understanding</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Website Policies</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Disclaimer</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Terms of Service Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">General Data Protection Regulation (GDPR)</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Scope of Work and Deliverables Agreement</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Notices</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Legal Notice</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Legal Notice for recovery of dues</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Cheque Bounce Notice</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Consumer Court Online Complaint</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">HR Policies</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Employment Agreement</a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Real Estate</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Rent and Lease agreement</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Sale Deed</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="dropdown__content tabData__values" id="tabData6" style="display:none;">
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">Registrations</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=ngo-registration" class="dropdown__link">NGO</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Section 8</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Trust Registration</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Society Registration</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <span class="dropdown__title">NGO Compliance</span>
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">NGO Compliance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Section 8 Compliance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">CSR-1 Filing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Sec.80G & Sec.12A</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Darpan Registration</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="dropdown__content tabData__values" id="tabData7" style="display:none;">
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Statutory Audit</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=udyam" class="dropdown__link">MSME/SSI Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=iso-certification" class="dropdown__link">ISO Certification</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=fssai-online-registration" class="dropdown__link">FSSAI [Food License]</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=import-export-code" class="dropdown__link">IEC [Import/Export Code]</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=psara-license-services" class="dropdown__link">Psara License</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=trade-license-registration" class="dropdown__link">Trade License</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=startup-india-scheme" class="dropdown__link">Startup India Registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=shop-and-establishment-license" class="dropdown__link">Shops and Establishments License</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="index.php?action=apparel-export-promotion-council" class="dropdown__link">AEPC</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=legal-metrology" class="dropdown__link">Legal Metrology</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=apeda-rcmc-registration" class="dropdown__link">APEDA registration</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=rcmc-registration" class="dropdown__link">RCMC</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=federation-of-indian-export-organisations" class="dropdown__link">FIEO</a>
                                            </li>
                                            <li>
                                                <a href="index.php?action=spice-board-registration" class="dropdown__link">Spice Board Registration</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 4 ===============-->
                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Register a Business <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title">Business Setup</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=pvt_ltd_com" class="dropdown__link">Private Limited Company</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=limited_liability_partnership" class="dropdown__link">Limited Liability Partnership</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=one_person_company" class="dropdown__link">One Person Company</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=sole-proprietorship-registration-india" class="dropdown__link">Sole Proprietorship</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=nidhi_company" class="dropdown__link">Nidhi Company</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=partnership-firm-deed" class="dropdown__link">Partnership Firm</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=producer-company-registration" class="dropdown__link">Producer Company</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Name Search</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Company Name Search</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Brand Name Search</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">International Business Setup</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=business-setup-in-dubai" class="dropdown__link">Dubai Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=usa-incorporation" class="dropdown__link">US Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=registered-company-in-singapore" class="dropdown__link">Singapore Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=incorporating-a-company-in-united-kingdom" class="dropdown__link">UK Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=incorporating-a-company-in-hong-kong" class="dropdown__link">Hong Kong Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=incorporating-a-company-in-australia" class="dropdown__link">Australia Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=incorporating-a-company-in-china" class="dropdown__link">China Company Incorporation</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=incorporating-a-company-in-malaysia" class="dropdown__link">Malaysia Company Incorporation</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="dropdown__group">
                                <span class="dropdown__title">Fundraising</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Fundraising</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Pitch Deck</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Business Ideas</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Licenses & Registrations <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=digital-signature-certificate" class="dropdown__link">Digital Signature Certificate</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=udyam" class="dropdown__link">MSME/SSI Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=iso-certification" class="dropdown__link">ISO Certification</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=fssai-online-registration" class="dropdown__link">FSSAI [Food License]</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=import-export-code" class="dropdown__link">IEC [Import/Export Code]</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=psara-license-services" class="dropdown__link">Psara License</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trade-license-registration" class="dropdown__link">Trade License</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=startup-india-scheme" class="dropdown__link">Startup India Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=shop-and-establishment-license" class="dropdown__link">Shops and Establishments License</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=apparel-export-promotion-council" class="dropdown__link">AEPC</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=legal-metrology" class="dropdown__link">Legal Metrology</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=apeda-rcmc-registration" class="dropdown__link">APEDA registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=rcmc-registration" class="dropdown__link">RCMC</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=federation-of-indian-export-organisations" class="dropdown__link">FIEO</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=spice-board-registration" class="dropdown__link">Spice Board Registration</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Manage Your Business Filings <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title">Mandatory Annual Filings</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Private Limited Company / OPC</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=llp-annual-compliance" class="dropdown__link">Limited Liability Partnership</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">CFSS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Changes in Pvt Ltd Company</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Add a Director</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Remove a Director</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Increase Authorized Capital</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Close a Pvt Ltd Company</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Change Objective/Activity</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Change Address</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Change Company Name</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Changes In LLP</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Add Designated Partner</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Changes to LLP Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Close the LLP</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Convert Your Business</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Proprietorship to Pvt Ltd Company</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Compliance Check - Secretarial Audit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Due Digilence</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">RBI Compliance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Partnership to LLP</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Private to Public Limited Company</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Private to One Person Company</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">GST</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">GST Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">GST Filing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">GST Advisory</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">GST HSN Finder</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Accounting & Tax</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Accounting and Book-keeping</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Company & LLP Income Tax Return Filing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Payroll Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">TDS Return Filing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Income Tax Return Filing Online</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Proprietorship ITR Filing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Professional Tax Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">USA Tax Law</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Accounting & Business Compliance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Corporate Tax</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Labour Compliance</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Labor Law</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Provident Fund (PF) Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=online-esi-registration" class="dropdown__link">ESI Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Employee Stock Option Plan [ESOP]</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Brand Identity Protection & IP <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title">Trademark</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=trademark-registration" class="dropdown__link">Trademark Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=design-registration" class="dropdown__link">Design Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Search for Trademark Class</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trademark-objection" class="dropdown__link">Respond to TM Objection</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trademark-watch" class="dropdown__link">Trademark Watch</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trademark-renewal" class="dropdown__link">Trademark Renewal</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trademark-assign" class="dropdown__link">Trademark Assignment</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=international-trademark-registration" class="dropdown__link">International Trademark Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=trademark-registration-in-usa" class="dropdown__link">USA Trademark</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Logo Registration</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Logo Design</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Copyright</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=copyright-registration" class="dropdown__link">Copyright Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Copyright For Music</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Patent</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=patent-search" class="dropdown__link">Patent Search</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=provisional-patent" class="dropdown__link">Provisonal Application</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=patent-registration" class="dropdown__link">Permanent Patent</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Documents & Agreements <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title">Business Contracts</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Non Disclosure Agreement NDA</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Service Level Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Franchise Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Master Service Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Shareholders Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Joint Venture Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Founders Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Vendor Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Consultancy Agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Memorandum of Understanding</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">HR Policies</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Employment Agreement</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">Website Policies</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Disclaimer</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Terms of Service Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">General Data Protection Regulation (GDPR)</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Scope of Work and Deliverables Agreement</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <span class="dropdown__title">Notices</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Legal Notice</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Legal Notice for recovery of dues</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Cheque Bounce Notice</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Consumer Court Online Complaint</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <span class="dropdown__title">Real Estate</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Rent and Lease agreement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Sale Deed</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        NGO & Non-Profit <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title">Registrations</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="index.php?action=ngo-registration" class="dropdown__link">NGO</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Section 8</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Trust Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Society Registration</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title">NGO Compliance</span>
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">NGO Compliance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Section 8 Compliance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">CSR-1 Filing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Sec.80G & Sec.12A</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Darpan Registration</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item desktop_view">
                    <div class="nav__link dropdown__button">
                        Personal <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container" style="margin-left:25%;">
                        <div class="dropdown__content personal_dropdown" style="margin-left:8%;">
                            <div class="dropdown__group">

                                <span class="dropdown__title">Property</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Property Documents Verification</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Property Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">RERA Complaint</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Legal Heir Certificate</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Succession Certificate</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Name Change & Other Conditiions</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Name Change</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Religion Change</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Gender Change</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Marriage</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Marriage Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Court Marriage</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Divorce Consultation</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Alimony Laws</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Immigration</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Corporate Immigration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Family Immigration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">College Immigration</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">

                                <span class="dropdown__title">Consumer Complaints</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Consumer Complaints</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Consumer Court Online Complaint</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">

                                <span class="dropdown__title">Legal Documents</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Will Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Power of Attorney</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item mobile_view">
                    <div class="nav__link dropdown__button">
                        Personal <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">

                                <span class="dropdown__title">Property</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Property Documents Verification</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Property Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">RERA Complaint</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Legal Heir Certificate</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Succession Certificate</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Name Change & Other Conditiions</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Name Change</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Religion Change</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Gender Change</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Marriage</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Marriage Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Court Marriage</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Divorce Consultation</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Alimony Laws</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="dropdown__title">Immigration</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Corporate Immigration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Family Immigration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">College Immigration</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">

                                <span class="dropdown__title">Consumer Complaints</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Consumer Complaints</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Consumer Court Online Complaint</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown__group">

                                <span class="dropdown__title">Legal Documents</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Will Registration</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Power of Attorney</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#" class="nav__link">Blog</a>
                </li>

                <li>
                    <a href="#" target="_blank" class="nav__link"><button class="styles_talkBtn__y2k1h">Get Started</button></a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

<script>
    function tabSwitch(counter) {
        $(".tabHeadRow").removeClass("active");
        $("#tab" + counter).addClass("active");
        $(".tabData__values").css("display", "none");
        $("#tabData" + counter).css("display", "");
    }
</script>