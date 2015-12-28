<?php
$referencie = array(

	array( 
		'title' => 'Hotel Crowne Plaza',
		'desc' => 'Bratislava',
		'url' => 'http://crowne-plaza.sk/'
	),

	array( 
		'title' => 'Hotel Holiday Inn',
		'desc' => 'Bratislava',
		'url' => 'http://www.holidayinn.sk/array( 
	'
	),

	array( 
		'title' => 'Hotel Devín',
		'desc' => 'Bratislava',
		'url' => 'http://www.hoteldevin.sk/skarray( 
	'
	),

	array( 
		'title' => 'Hotel Carlton',
		'desc' => 'Bratislava',
		'url' => 'http://www.carlton.sk/start.htmlarray( 
	'
	),

	array( 
		'title' => 'Hotel Avance',
		'desc' => 'Bratislava',
		'url' => 'http://www.hotelavance.sk/array( 
	'
	),

	array( 
		'title' => 'Hotel Albrecht',
		'desc' => 'Bratislava',
		'url' => 'http://www.hotelalbrecht.com/array( 
	'
	),

	array( 
		'title' => 'Tulip House Boutique Hotel',
		'desc' => 'Bratislava',
		'url' => 'http://www.tuliphouse.sk/hotel_bratislava.htmlarray( 
	'
	),

	array( 
		'title' => 'Health SPA Piešťany',
		'desc' => 'Piešťany',
		'url' => 'http://www.spapiestany.sk/array( 
	'
	),

	array( 
		'title' => 'Borovica Wellness Hotel',
		'desc' => 'Štrbské Pleso',
		'url' => 'http://www.hotelborovica.sk/?id=0&amp;lang=skarray( 
	'
	),

	array( 
		'title' => 'Hotel Tatra',
		'desc' => 'Trenčín',
		'url' => 'http://www.hotel-tatra.sk/array( 
	'
	),

	array( 
		'title' => 'Golem Health Club',
		'desc' => 'Aupark, Eurovea; Bratislava',
		'url' => 'http://www.hotelavance.sk/array( 
	'
	),

	array( 
		'title' => 'Mirage Shopping Center',
		'desc' => 'Žilina',
		'url' => 'http://mirageshopping.sk/array( 
	'
	),

	array( 
		'title' => 'Hotel SERGIO',
		'desc' => 'Piešťany',
		'url' => 'http://www.hotel-sergijo-piestany.com/sk/index.phparray( 
	'
	),

	array( 
		'title' => 'Penzión Tematín',
		'desc' => 'Moravany nad Váhom',
		'url' => 'http://www.tematin.sk/array( 
	'
	),

	array( 
		'title' => 'Hotel DREAM',
		'desc' => 'Trnava',
		'url' => 'http://www.hoteldream.sk/array( 
	'
	),

	array( 
		'title' => 'Hotel Rozsutec',
		'desc' => 'Terchová',
		'url' => 'http://www.hotelrozsutec.sk/array( 
	'
	),

	array( 
		'title' => 'Vila Nečas',
		'desc' => 'Žilina',
		'url' => 'http://villanecas.sk/sk/array( 
	'
	),

	array( 
		'title' => 'Hotel Park Inn Danube',
		'desc' => 'Bratislava',
		'url' => 'http://www.parkinn.com/hotel-bratislavaarray( 
	'
	),

	array( 
		'title' => 'Zimný štadión Ondreja Nepelu',
		'desc' => 'Bratislava',
		'url' => 'http://www.starz.sk/vismo/galerie2.asp?id_org=600167&amp;id_galerie=1075&amp;p1=54array( 
	'
	),

	array( 
		'title' => 'DoubleTree by Hilton',
		'desc' => 'Bratislava',
		'url' => 'http://doubletree1.hilton.com/en_US/dt/hotel/BTSDIDI-DoubleTree-by-Hilton-Hotel-Bratislava/index.doarray( 
	'
	),

	array( 
		'title' => 'DoubleTree by Hilton',
		'desc' => 'Košice',
		'url' => 'http://doubletree1.hilton.com/en_US/dt/hotel/KSCDTDI-DoubleTree-by-Hilton-Hotel-Kosice/index.doarray( 
	'
	)
);

$this->layout->widget('referencie_carousel', array('referencie'=>$referencie));
$this->layout->widget('referencie_modal', array('referencie'=>$referencie));