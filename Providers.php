<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

/**
 * Providers names
 */
if (!isset($GLOBALS['Piwik_ProviderNames'])) {
    $GLOBALS['Piwik_ProviderNames'] = array(
        // France
        "wanadoo"                 => "Orange",
        "proxad"                  => "Free",
        "bbox"                    => "Bouygues Telecom",
        "bouyguestelecom"         => "Bouygues Telecom",
        "coucou-networks"         => "Free Mobile",
        "sfr"                     => "SFR", //Acronym, keep in uppercase
        "univ-metz"               => "Université de Lorraine",
        "unilim"                  => "Université de Limoges",
        "univ-paris5"             => "Université Paris Descartes",

        // US
        "rr"                      => "Time Warner Cable Internet", // Not sure
        "uu"                      => "Verizon",

        // UK
        'zen.net'                 => 'Zen Internet',

        // DE
        't-ipconnect'             => 'Deutsche Telekom',
        't-dialin'                => 'Deutsche Telekom',
        'dtag'                    => 'Deutsche Telekom',
        't-ipnet'                 => 'Deutsche Telekom',
        'd1-online'               => 'Deutsche Telekom (Mobile)',
        'superkabel'              => 'Kabel Deutschland',
        'unitymediagroup'         => 'Unitymedia',
        'arcor-ip'                => 'Vodafone',
        'kabel-badenwuerttemberg' => 'Kabel BW',
        'alicedsl'                => 'O2',
        'komdsl'                  => 'komDSL - Thüga MeteringService',
        'mediaways'               => 'mediaWays - Telefonica',
        'citeq'                   => 'Citeq - Stadt Münster',
        
        // VIETNAM
        //!! All characters of the keys need to be in lower case
        'viettel corporation - electric telecommunication company' => 'Viettel Corporation', 
        'viettel corporation - vietel corporation' => 'Viettel Corporation', 
        'vdc - vietnam posts and telecommunications(vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vdc' => '(VNPT) Vietnam Posts and Telecommunications', 
        'dai ip dong su dung cho ket noi xdsl - fpt telecom company' => 'FPT Telecom Company', 
        'fpt telecom - fpt telecom company' => 'FPT Telecom Company', 
        'corporation for financing and promoting technology - fpt telecom company' => 'FPT Telecom Company', 
        'layer 2 -customer nework of vtdc - vietel - cht compamy' => 'Viettel Corporation', 
        'viettel - cht company ltd - vietel - cht compamy' => 'Viettel Corporation', 
        'vietnam posts and telecommunications corp (vnpt) - vietnam posts and telecommunications(vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications (vnpt) - ho chi minh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vdc - vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel (cambodia) pte., ltd - viettel (cambodia) pte., ltd.' => 'Viettel Corporation', 
        'viettel-cht company ltd - vietel - cht compamy' => 'Viettel Corporation', 
        'fpt telecom - vung dia chi ip cap cho dich vu iptv tai hai phong' => 'FPT Telecom Company', 
        'the corporation for financing and promoting techno - fpt telecom company' => 'FPT Telecom Company', 
        'viettel corporation - ip range assign for the internet cable service in' => 'Viettel Corporation', 
        'fpt telecom - vung dia chi ip cap cho dich vu iptv tai ha noi' => 'FPT Telecom Company', 
        'vietnam posts and telecommunications (vnpt) - vietnam posts and telecommunications(vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications corp (vnpt) - vietnam telecom national' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vdc - ftth static + ip adsl static + cable tv, voip' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - dai ip cho vietel' => 'Viettel Corporation', 
        'vietnam posts and telecommunications (vnpt) - vietnam telecom national' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - ip range assign for internet cable service in hcmc' => 'Viettel Corporation', 
        'vietnam posts and telecommunications corp (vnpt) - vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications corp (vnpt) - ho chi minh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications (vnpt) - vietnam data communication company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications corp (vnpt) - vietnam data communication company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - ip range for leased line service in hanoi' => 'Viettel Corporation', 
        'vietnam posts and telecommunications corp (vnpt) - hochiminh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - dai ip cho server cua khach hang' => 'Viettel Corporation', 
        'vdc - cuc buu dien tw' => '(VNPT) Vietnam Posts and Telecommunications', 
        'kyiv optic networks ltd - isp kievnet' => 'Viettel Corporation', 
        'viettel cameroun sarl - telkom sa limited' => 'Viettel Corporation', 
        'viettel-tanzania' => 'Viettel Corporation', 
        'viettel corporation - xdsl services of hanoi' => 'Viettel Corporation', 
        'viettel-burundi' => 'Viettel Corporation', 
        'viettel corporation - dai ip cho vietel mobile' => 'Viettel Corporation', 
        'viettel corporation - ip range for dialupservice in hcm city' => 'Viettel Corporation', 
        'vietnam posts and telecommunications (vnpt) - unilever company' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - dai ip cho saigontel' => 'Viettel Corporation', 
        'fpt online jsc' => 'FPT Telecom Company', 
        'viettel corporation - ip range allocate for leasedline customer of elect' => 'Viettel Corporation', 
        'viettel corporation - dai ip cho cong ty pungkook' => 'Viettel Corporation', 
        'viettel (cambodia) pte., ltd - #15e2, preah norodom blvd' => 'Viettel Corporation', 
        'viettel corporation - ip range for haiduongcommitee' => 'Viettel Corporation', 
        'vietnam posts and telecommunications (vnpt) - bao tuoi tre ho chi minh' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel perú s.a.c. - perÚ s.a.c.' => 'Viettel Corporation', 
        'vietnam posts and telecommunications (vnpt) - phu my 3 bot power company ltd' => '(VNPT) Vietnam Posts and Telecommunications', 
        'vietnam posts and telecommunications (vnpt) - cty lien doanh nha may bia ha tay' => '(VNPT) Vietnam Posts and Telecommunications', 
        'viettel corporation - vung dia chi cap cho trung tam cntt tap doan dien' => 'Viettel Corporation', 
        
        
        //what missing
        'fpt telecom' => 'FPT Telecom Company',
    );
}
