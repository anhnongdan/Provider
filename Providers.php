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
		'sai gon postel corporation - saigon postel corporation' => 'Saigon Postel JSC', 
		'corporation for financing and promoting technology - fpt telecom company' => 'FPT Telecom Company', 
		'layer 2 -customer nework of vtdc - vietel - cht compamy' => 'Viettel Corporation', 
		'netnam corporation - branch of netnam company in ho chi minh city' => 'NetNam', 
		'saigon tourist cable television - saigon tourist cable televition company' => 'SaiGon Tourist Cable Television', 
		'viettel - cht company ltd - vietel - cht compamy' => 'Viettel Corporation', 
		'vietnam posts and telecommunications corp (vnpt) - vietnam posts and telecommunications(vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications (vnpt) - ho chi minh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vdc - vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
		'lo vp1, phuong yen hoa, cau giay, hanoi' => 'Mobifone', 
		'cmc telecom infrastructure company' => 'CMC Telecommunications Services Company', 
		'viettel (cambodia) pte., ltd - viettel (cambodia) pte., ltd.' => 'Viettel Cambodia Pte.', 
		'viettel-cht company ltd - vietel - cht compamy' => 'Viettel Corporation', 
		'cty co phan ha tang vien thong cmc - cmc telecom infrastructure company' => 'CMC Telecommunications Services Company', 
		'branch of cmc telecommunications services company' => 'CMC Telecommunications Services Company', 
		'fpt telecom - vung dia chi ip cap cho dich vu iptv tai hai phong' => 'FPT Telecom Company', 
		'the corporation for financing and promoting techno - fpt telecom company' => 'FPT Telecom Company', 
		'viettel corporation - ip range assign for the internet cable service in' => 'Viettel Corporation', 
		'branch of hanoi telecom jsc in hcmc - hanoi telecom joint stock company - hcmc branch' => 'Hanoi Telecom JSC', 
		'fpt telecom - vung dia chi ip cap cho dich vu iptv tai ha noi' => 'FPT Telecom Company', 
		'cmc telecom service company' => 'CMC Telecommunications Services Company', 
		'vietnam posts and telecommunications (vnpt) - vietnam posts and telecommunications(vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications corp (vnpt) - vietnam telecom national' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vdc - ftth static + ip adsl static + cable tv, voip' => '(VNPT) Vietnam Posts and Telecommunications', 
		'viettel corporation - dai ip cho vietel' => 'Viettel Corporation', 
		'telecommunication service - telecommunication service' => 'Telecommunication Service - Isp in Lao', 
		'vietnam posts and telecommunications (vnpt) - vietnam telecom national' => '(VNPT) Vietnam Posts and Telecommunications', 
		'viettel corporation - ip range assign for internet cable service in hcmc' => 'Viettel Corporation', 
		'cong ty co phan tap doan vi na - trung tam vnnic' => 'VNNIC - Vietnam Internet Network Information Center', 
		'hanoi telecom corporation' => 'Hanoi Telecom JSC', 
		'vietnam posts and telecommunications corp (vnpt) - vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications corp (vnpt) - ho chi minh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications (vnpt) - vietnam data communication company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications corp (vnpt) - vietnam data communication company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'viettel corporation - ip range for leased line service in hanoi' => 'Viettel Corporation', 
		'beeline home - beeline' => 'BeeLine', 
		'vietnam posts and telecommunications corp (vnpt) - hochiminh city post and telecom company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vtc wireless broadband company' => 'VTC', 
		'netnam - branch of netnam company in ho chi minh city' => 'NetNam', 
		'vietnam posts and telecommunications (vnpt)' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vimpelcom - beeline-moscow gprs firewall' => 'BeeLine', 
		'netnam corporation - ip range assign for bras in distrist 7 hcmc' => 'NetNam', 
		'quang trung software city development company' => 'Quang Trung Software City (QTSC)', 
		'viettel corporation - dai ip cho server cua khach hang' => 'Viettel Corporation', 
		'vdc - cuc buu dien tw' => '(VNPT) Vietnam Posts and Telecommunications', 
		'netnam corporation - netnam company' => 'NetNam', 
		'viettel cameroun sarl - telkom sa limited' => 'Viettel Corporation', 
		'viettel-tanzania' => 'Viettel Corporation', 
		'quang trung software city (qtsc). - ip range allocate for dedicate server service of q' => 'Quang Trung Software City (QTSC)', 
		'viettel corporation - xdsl services of hanoi' => 'Viettel Corporation', 
		'viettel-burundi' => 'Viettel Corporation', 
		'viettel corporation - dai ip cho vietel mobile' => 'Viettel Corporation', 
		'vtc- multimedia corporation' => 'VTC', 
		'quang trung software city (qtsc). - quang trung software city development company' => 'Quang Trung Software City (QTSC)', 
		'digital communications company' => 'VTC DIGICOM', 
		'viettel corporation - ip range for dialupservice in hcm city' => 'Viettel Corporation', 
		'netnam corporation - cong ty co phan tu van va phat trien nguon nhan lu' => 'NetNam', 
		'vimpelcom - beeline' => 'BeeLine', 
		'beeline home - vimpelcom' => 'BeeLine', 
		'vietnam posts and telecommunications (vnpt) - unilever company' => '(VNPT) Vietnam Posts and Telecommunications', 
		'viettel corporation - dai ip cho saigontel' => 'Viettel Corporation', 
		'branch of hanoi telecom jsc in hcmc' => 'Hanoi Telecom JSC', 
		'fpt online jsc' => 'FPT Telecom Company', 
		'viettel corporation - ip range allocate for leasedline customer of elect' => 'Viettel Corporation', 
		'vtc- multimedia corporation - vtc multimedia corporation' => 'VTC', 
		'viettel corporation - dai ip cho cong ty pungkook' => 'Viettel Corporation', 
		'viettel (cambodia) pte., ltd - #15e2, preah norodom blvd' => 'Viettel Cambodia Pte.', 
		'netnam corporation - broadband ethernet service' => 'NetNam', 
		'viettel corporation - ip range for haiduongcommitee' => 'Viettel Corporation', 
		'netnam - netnam company' => 'NetNam', 
		'vietnam posts and telecommunications (vnpt) - bao tuoi tre ho chi minh' => '(VNPT) Vietnam Posts and Telecommunications', 
		'cmc telecom service company - cmc telecommunications services company' => 'CMC Telecommunications Services Company', 
		'netnam corporation - fttx service' => 'NetNam', 
		'viettel perú s.a.c. - perÚ s.a.c.' => 'Viettel Corporation', 
		'netnam corporation - hosting service' => 'NetNam', 
		'netnam corporation - saigon postel corporation' => 'NetNam', 
		'vietnam internet network information center (vnnic - vietnam internet network information center' => 'VNNIC - Vietnam Internet Network Information Center', 
		'vietnam posts and telecommunications (vnpt) - phu my 3 bot power company ltd' => '(VNPT) Vietnam Posts and Telecommunications', 
		'vietnam posts and telecommunications (vnpt) - cty lien doanh nha may bia ha tay' => '(VNPT) Vietnam Posts and Telecommunications', 
		'hanoi telecom corporation - hanoi telecom joint stock company - hcmc branch' => 'Hanoi Telecom JSC', 
		'vietnam internet network information center - vietnam internet network information center (vnnic' => 'VNNIC - Vietnam Internet Network Information Center', 
		'viettel corporation - vung dia chi cap cho trung tam cntt tap doan dien' => 'Viettel Corporation', 

    );
}
