<?php 

use Illuminate\Support\Facades\Auth;

function county_list(){

return $counties = array(
		'England' => array(
		array(
			'value' =>'Avon'),
		array(
			'value' =>'Bedfordshire'),		
		array(
			'value' =>'Berkshire'),
		array(
			'value' =>'Buckinghamshire'),		
		array(
			'value' =>
			'Cambridgeshire'),		
		array(
			'value' =>
			'Cheshire'),		
		array(
			'value' =>
			'Cleveland'),		
		array(
			'value' =>
			'Cornwall'),		
		array(
			'value' =>
			'Cumbria'),		
		array(
			'value' =>
			'Derbyshire'),		
		array(
			'value' =>
			'Devon'),		
		array(
			'value' =>
			'Dorset'),		
		array(
			'value' =>
			'Durham'),		
		array(
			'value' =>
			'East Sussex'),		
		array(
			'value' =>
			'Essex'),		
		array(
			'value' =>
			'Gloucestershire'),		
		array(
			'value' =>
			'Hampshire'),		
		array(
			'value' =>
			'Herefordshire'),		
		array(
			'value' =>
			'Hertfordshire'),		
		array(
			'value' =>
			'Isle of Wight'),		
		array(
			'value' =>
			'Kent'),		
		array(
			'value' =>
			'Lancashire'),		
		array(
			'value' =>
			'Leicestershire'),		
		array(
			'value' =>
			'Lincolnshire'),		
		array(
			'value' =>
			'London'),		
		array(
			'value' =>
			'Merseyside'),		
		array(
			'value' =>
			'Middlesex'),		
		array(
			'value' =>
			'Norfolk'),		
		array(
			'value' =>
			'Northamptonshire'),		
		array(
			'value' =>
			'Northumberland'),		
		array(
			'value' =>
			'North Humberside'),		
		array(
			'value' =>
			'North Yorkshire'),		
		array(
			'value' =>
			'Nottinghamshire'),		
		array(
			'value' =>
			'Oxfordshire'),		
		array(
			'value' =>
			'Rutland'),		
		array(
			'value' =>
			'Shropshire'),		
		array(
			'value' =>
			'Somerset'),		
		array(
			'value' =>
			'South Humberside'),		
		array(
			'value' =>
			'South Yorkshire'),		
		array(
			'value' =>
			'Staffordshire'),		
		array(
			'value' =>
			'Suffolk'),		
		array(
			'value' =>
			'Surrey'),		
		array(
			'value' =>
			'Tyne and Wear'),		
		array(
			'value' =>
			'Warwickshire'),		
		array(
			'value' =>
			'West Midlands'),		
		array(
			'value' =>
			'West Sussex'),		
		array(
			'value' =>
			'West Yorkshire'),		
		array(
			'value' =>
			'Wiltshire'),		
		array(
			'value' =>
			'Worcestershire'		
			)),
		'Wales' => array(
		array(
			'value' =>'Clwyd'),
		array(
			'value' =>	'Dyfed'),
		array(
			'value' =>'Gwent'),
		array(
			'value' =>'Gwynedd'),
		array(
			'value' =>'Mid Glamorgan'),
		array(
			'value' =>'Powys'),
		array(
			'value' =>'South Glamorgan'),
		array(
			'value' =>'West Glamorgan'),
		),
		'Scotland' => array(
		array(
			'value' =>'Aberdeenshire'),
		array(
			'value' =>'Angus'),
		array(
			'value' =>'Argyll'),
		array(
			'value' =>'Ayrshire'),
		array(
			'value' =>'Banffshire'),
		array(
			'value' =>'Berwickshire'),
		array(
			'value' =>'Bute'),
		array(
			'value' =>'Caithness'),
		array(
			'value' =>'Clackmannanshire'),
		array(
			'value' =>'Dumfriesshire'),
		array(
			'value' =>'Dunbartonshire'),
		array(
			'value' =>'East Lothian'),
		array(
			'value' =>'Fife'),
		array(
			'value' =>'Inverness-shire'),    
		array(
			'value' =>'Kincardineshire'),
		array(
			'value' =>'Kinross-shire'),
		array(
			'value' =>'Kirkcudbrightshire'),
		array(
			'value' =>'Lanarkshire'),
		array(
			'value' =>'Midlothian'),
		array(
			'value' =>'Moray'),
		array(
			'value' =>'Nairnshire'),
		array(
			'value' =>'Orkney'),
		array(
			'value' =>'Peeblesshire'),
		array(
			'value' =>'Perthshire'),
		array(
			'value' =>'Renfrewshire'),
		array(
			'value' =>'Ross-shire'),
		array(
			'value' =>'Roxburghshire'),
		array(
			'value' =>'Selkirkshire'),
		array(
			'value' =>'Shetland'),
		array(
			'value' =>'Stirlingshire',
			'Sutherland'),
		array(
			'value' =>'West Lothian'),
		array(
			'value' =>'Wigtownshire'
		)),
		'Northern Ireland' => array(
			array(
			'value' =>'Antrim'),
			array(
			'value' =>'Armagh'),
			array(
			'value' =>'Down'),
			array(
			'value' =>'Fermanagh'),
			array(
			'value' =>'Londonderry'),
			array(
			'value' =>'Tyrone')
		)
);
}

function getCountry()
{
	return $countries =array(
		"AF" => "Afghanistan",
		"AL" => "Albania",
		"DZ" => "Algeria",
		"AS" => "American Samoa",
		"AD" => "Andorra",
		"AO" => "Angola",
		"AI" => "Anguilla",
		"AQ" => "Antarctica",
		"AG" => "Antigua and Barbuda",
		"AR" => "Argentina",
		"AM" => "Armenia",
		"AW" => "Aruba",
		"AU" => "Australia",
		"AT" => "Austria",
		"AZ" => "Azerbaijan",
		"BS" => "Bahamas",
		"BH" => "Bahrain",
		"BD" => "Bangladesh",
		"BB" => "Barbados",
		"BY" => "Belarus",
		"BE" => "Belgium",
		"BZ" => "Belize",
		"BJ" => "Benin",
		"BM" => "Bermuda",
		"BT" => "Bhutan",
		"BO" => "Bolivia",
		"BA" => "Bosnia and Herzegovina",
		"BW" => "Botswana",
		"BV" => "Bouvet Island",
		"BR" => "Brazil",
		"IO" => "British Indian Ocean Territory",
		"BN" => "Brunei Darussalam",
		"BG" => "Bulgaria",
		"BF" => "Burkina Faso",
		"BI" => "Burundi",
		"KH" => "Cambodia",
		"CM" => "Cameroon",
		"CA" => "Canada",
		"CV" => "Cape Verde",
		"KY" => "Cayman Islands",
		"CF" => "Central African Republic",
		"TD" => "Chad",
		"CL" => "Chile",
		"CN" => "China",
		"CX" => "Christmas Island",
		"CC" => "Cocos (Keeling) Islands",
		"CO" => "Colombia",
		"KM" => "Comoros",
		"CG" => "Congo",
		"CD" => "Congo, the Democratic Republic of the",
		"CK" => "Cook Islands",
		"CR" => "Costa Rica",
		"CI" => "Cote D'Ivoire",
		"HR" => "Croatia",
		"CU" => "Cuba",
		"CY" => "Cyprus",
		"CZ" => "Czech Republic",
		"DK" => "Denmark",
		"DJ" => "Djibouti",
		"DM" => "Dominica",
		"DO" => "Dominican Republic",
		"EC" => "Ecuador",
		"EG" => "Egypt",
		"SV" => "El Salvador",
		"GQ" => "Equatorial Guinea",
		"ER" => "Eritrea",
		"EE" => "Estonia",
		"ET" => "Ethiopia",
		"FK" => "Falkland Islands (Malvinas)",
		"FO" => "Faroe Islands",
		"FJ" => "Fiji",
		"FI" => "Finland",
		"FR" => "France",
		"GF" => "French Guiana",
		"PF" => "French Polynesia",
		"TF" => "French Southern Territories",
		"GA" => "Gabon",
		"GM" => "Gambia",
		"GE" => "Georgia",
		"DE" => "Germany",
		"GH" => "Ghana",
		"GI" => "Gibraltar",
		"GR" => "Greece",
		"GL" => "Greenland",
		"GD" => "Grenada",
		"GP" => "Guadeloupe",
		"GU" => "Guam",
		"GT" => "Guatemala",
		"GN" => "Guinea",
		"GW" => "Guinea-Bissau",
		"GY" => "Guyana",
		"HT" => "Haiti",
		"HM" => "Heard Island and Mcdonald Islands",
		"VA" => "Holy See (Vatican City State)",
		"HN" => "Honduras",
		"HK" => "Hong Kong",
		"HU" => "Hungary",
		"IS" => "Iceland",
		"IN" => "India",
		"ID" => "Indonesia",
		"IR" => "Iran, Islamic Republic of",
		"IQ" => "Iraq",
		"IE" => "Ireland",
		"IL" => "Israel",
		"IT" => "Italy",
		"JM" => "Jamaica",
		"JP" => "Japan",
		"JO" => "Jordan",
		"KZ" => "Kazakhstan",
		"KE" => "Kenya",
		"KI" => "Kiribati",
		"KP" => "Korea, Democratic People's Republic of",
		"KR" => "Korea, Republic of",
		"KW" => "Kuwait",
		"KG" => "Kyrgyzstan",
		"LA" => "Lao People's Democratic Republic",
		"LV" => "Latvia",
		"LB" => "Lebanon",
		"LS" => "Lesotho",
		"LR" => "Liberia",
		"LY" => "Libyan Arab Jamahiriya",
		"LI" => "Liechtenstein",
		"LT" => "Lithuania",
		"LU" => "Luxembourg",
		"MO" => "Macao",
		"MK" => "Macedonia, the Former Yugoslav Republic of",
		"MG" => "Madagascar",
		"MW" => "Malawi",
		"MY" => "Malaysia",
		"MV" => "Maldives",
		"ML" => "Mali",
		"MT" => "Malta",
		"MH" => "Marshall Islands",
		"MQ" => "Martinique",
		"MR" => "Mauritania",
		"MU" => "Mauritius",
		"YT" => "Mayotte",
		"MX" => "Mexico",
		"FM" => "Micronesia, Federated States of",
		"MD" => "Moldova, Republic of",
		"MC" => "Monaco",
		"MN" => "Mongolia",
		"MS" => "Montserrat",
		"MA" => "Morocco",
		"MZ" => "Mozambique",
		"MM" => "Myanmar",
		"NA" => "Namibia",
		"NR" => "Nauru",
		"NP" => "Nepal",
		"NL" => "Netherlands",
		"AN" => "Netherlands Antilles",
		"NC" => "New Caledonia",
		"NZ" => "New Zealand",
		"NI" => "Nicaragua",
		"NE" => "Niger",
		"NG" => "Nigeria",
		"NU" => "Niue",
		"NF" => "Norfolk Island",
		"MP" => "Northern Mariana Islands",
		"NO" => "Norway",
		"OM" => "Oman",
		"PK" => "Pakistan",
		"PW" => "Palau",
		"PS" => "Palestinian Territory, Occupied",
		"PA" => "Panama",
		"PG" => "Papua New Guinea",
		"PY" => "Paraguay",
		"PE" => "Peru",
		"PH" => "Philippines",
		"PN" => "Pitcairn",
		"PL" => "Poland",
		"PT" => "Portugal",
		"PR" => "Puerto Rico",
		"QA" => "Qatar",
		"RE" => "Reunion",
		"RO" => "Romania",
		"RU" => "Russian Federation",
		"RW" => "Rwanda",
		"SH" => "Saint Helena",
		"KN" => "Saint Kitts and Nevis",
		"LC" => "Saint Lucia",
		"PM" => "Saint Pierre and Miquelon",
		"VC" => "Saint Vincent and the Grenadines",
		"WS" => "Samoa",
		"SM" => "San Marino",
		"ST" => "Sao Tome and Principe",
		"SA" => "Saudi Arabia",
		"SN" => "Senegal",
		"CS" => "Serbia and Montenegro",
		"SC" => "Seychelles",
		"SL" => "Sierra Leone",
		"SG" => "Singapore",
		"SK" => "Slovakia",
		"SI" => "Slovenia",
		"SB" => "Solomon Islands",
		"SO" => "Somalia",
		"ZA" => "South Africa",
		"GS" => "South Georgia and the South Sandwich Islands",
		"ES" => "Spain",
		"LK" => "Sri Lanka",
		"SD" => "Sudan",
		"SR" => "Suriname",
		"SJ" => "Svalbard and Jan Mayen",
		"SZ" => "Swaziland",
		"SE" => "Sweden",
		"CH" => "Switzerland",
		"SY" => "Syrian Arab Republic",
		"TW" => "Taiwan, Province of China",
		"TJ" => "Tajikistan",
		"TZ" => "Tanzania, United Republic of",
		"TH" => "Thailand",
		"TL" => "Timor-Leste",
		"TG" => "Togo",
		"TK" => "Tokelau",
		"TO" => "Tonga",
		"TT" => "Trinidad and Tobago",
		"TN" => "Tunisia",
		"TR" => "Turkey",
		"TM" => "Turkmenistan",
		"TC" => "Turks and Caicos Islands",
		"TV" => "Tuvalu",
		"UG" => "Uganda",
		"UA" => "Ukraine",
		"AE" => "United Arab Emirates",
		"GB" => "United Kingdom",
		"US" => "United States",
		"UM" => "United States Minor Outlying Islands",
		"UY" => "Uruguay",
		"UZ" => "Uzbekistan",
		"VU" => "Vanuatu",
		"VE" => "Venezuela",
		"VN" => "Viet Nam",
		"VG" => "Virgin Islands, British",
		"VI" => "Virgin Islands, U.s.",
		"WF" => "Wallis and Futuna",
		"EH" => "Western Sahara",
		"YE" => "Yemen",
		"ZM" => "Zambia",
		"ZW" => "Zimbabwe"
	);

}