<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    /**
     * Display Legal information for the Forum sites.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLegal()
    {
        return view('legal.legal');
    }

    /**
     * Display the Terms of Use for .Expert sites
     *
     * @return \Illuminate\Http\Response
     */
    public function getTermsOfUse()
    {
        return view('legal.terms_of_use');
    }

    /**
     * Display the Privacy Policy for .Expert sites
     *
     * @return \Illuminate\Http\Response
     */
    public function getPrivacyPolicy()
    {
        return view('legal.privacy_policy');
    }
}
