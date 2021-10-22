<!DOCTYPE html>
<html>
<head>
	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.0.1/faker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css">
	<title></title>
</head>
<body>
<div id="map"></div>
<style>
#map {
  height: 100vh;
}

.icon-cluster {
  background-color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 100%;
  position: absolute;
  color: white;
}

@supports ((-webkit-backdrop-filter: blur(2px)) or (backdrop-filter: blur(2px))) {
  .icon-cluster {
    background-color: rgba(0, 0, 0, 0.2);
    -webkit-backdrop-filter: blur(2px);
            backdrop-filter: blur(2px);
  }
}
.cluster-count {
  text-align: center;
  display: block;
  position: relative;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  font-size: 14px;
}

.icon, .icon-has-time {
  background-color: #333;
  box-shadow: 0 0 5px 2px white;
  border-radius: 100%;
  width: 10px;
  height: 10px;
  -webkit-animation-name: growIn;
          animation-name: growIn;
  -webkit-animation-duration: 0.5s;
          animation-duration: 0.5s;
  -webkit-animation-fill-mode: forward;
          animation-fill-mode: forward;
}

.icon-has-time {
  background-color: #00e7b2;
}

.leaflet-popup-content .supplier-link {
  margin: 4px 0;
}
.leaflet-popup-content .marker-header {
  font-size: 14px;
  font-weight: bold;
}
.leaflet-popup-content dl {
  width: 300px;
}
.leaflet-popup-content dl lh {
  float: left;
  clear: left;
  width: 100%;
  font-weight: bold;
  margin-top: 12px;
  margin-bottom: 6px;
}
.leaflet-popup-content dl dt {
  float: left;
  clear: left;
  width: 25%;
  color: #666666;
}
.leaflet-popup-content dl dd {
  float: left;
  width: 73%;
  -webkit-margin-start: 0;
  padding-left: 2%;
}
.leaflet-popup-content dl:after {
  display: block;
  clear: both;
  content: "";
}
	
</style>
<script>
	//testing bools
var varySize, withLinks;

varySize = true;

var long, lat, zoom;
long = 40.000;
lat = -100.000;
zoom = 4;

var sizeVariance = 2;
var sizeBasis = 14;

if(varySize == true){
  var minSize = sizeBasis - sizeVariance;
  var maxSize = sizeBasis + sizeVariance;
}

var mbtoken = 'pk.eyJ1IjoiZHJvb2pvaG5zb25tdCIsImEiOiJjaWlydWJkMXQwMndhdjRtNTA4M3RqdHFiIn0.tfp9cNxajpe8JzXoiZrdrQ';

var map = L.map('map').setView([long,lat], zoom);
L.tileLayer('https://api.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://mapbox.com">Mapbox</a>',
    maxZoom: 10,
    id: 'mapbox.light',
    accessToken: 'sk.eyJ1IjoiZHJvb2pvaG5zb25tdCIsImEiOiJjaWlydW5iMGYwMnZvdWNrcHFzdWVtaDNvIn0.qqMAymW2hPv2bU4KUj7k0Q'
}).addTo(map);
var suppliers =[
  {
    "id":1130,
    "name":"Raise3D",
    "latitude":34.1493938,
    "longitude":-118.1123103
  },
  {
    "id":69,
    "name":"Ted's Machine Stuff Inc.",
    "latitude":38.285418,
    "longitude":-85.637071
  },
  {
    "id":70,
    "name":"Seller-TestCompany",
    "latitude":31.8962405,
    "longitude":-90.07214290000002
  },
  {
    "id":1126,
    "name":"Yakima Terrasport",
    "latitude":46.571181,
    "longitude":-120.541234
  },
  {
    "id":1127,
    "name":"Droponic",
    "latitude":37.793353,
    "longitude":-122.41926
  },
  {
    "id":1128,
    "name":"A-Z MFG",
    "latitude":36.0422154,
    "longitude":-95.77510869999999
  },
  {
    "id":1131,
    "name":"Breakfast Box",
    "latitude":37.527744,
    "longitude":-122.291639
  },
  {
    "id":85,
    "name":"Dynamic CNC Machining, LLC",
    "latitude":36.015284,
    "longitude":-86.49194
  },
  {
    "id":76,
    "name":"Elite Machining",
    "latitude":38.0516666,
    "longitude":-84.4569839
  },
  {
    "id":80,
    "name":"Knapp Machine LLC",
    "latitude":45.738318,
    "longitude":-122.732725
  },
  {
    "id":81,
    "name":"Erie Industrial Products LLC",
    "latitude":41.284605,
    "longitude":-82.06701699999999
  },
  {
    "id":1133,
    "name":"IED Holding",
    "latitude":40.7038704,
    "longitude":-74.0138541
  },
  {
    "id":101,
    "name":"Swiss Metrology, LLC",
    "latitude":38.0516666,
    "longitude":-84.4569839
  },
  {
    "id":100,
    "name":"Ben Mitchell",
    "latitude":37.796563,
    "longitude":-122.43437
  },
  {
    "id":102,
    "name":"Phobos Kinetic Group",
    "latitude":45.6501189,
    "longitude":-122.51141
  },
  {
    "id":103,
    "name":"PowerTech Water",
    "latitude":38.02455700000001,
    "longitude":-84.44297999999999
  },
  {
    "id":104,
    "name":"Bossard Enterprises",
    "latitude":41.640745,
    "longitude":-93.45743999999999
  },
  {
    "id":106,
    "name":"Additive Manufacturing Solutions, LLC.",
    "latitude":42.4634091,
    "longitude":-83.83723230000001
  },
  {
    "id":112,
    "name":"CPM Engineering Solutions",
    "latitude":33.6196338,
    "longitude":-112.4285989
  },
  {
    "id":1125,
    "name":"Richard Howell",
    "latitude":32.686333,
    "longitude":-96.988195
  },
  {
    "id":1129,
    "name":"Swope Design Solutions",
    "latitude":37.7787495,
    "longitude":-122.4043414
  },
  {
    "id":1132,
    "name":"Specialty Manufacturing",
    "latitude":38.178095,
    "longitude":-85.70282999999999
  },
  {
    "id":294,
    "name":"OXO",
    "latitude":40.7515355,
    "longitude":-74.0064204
  },
  {
    "id":1135,
    "name":"Valve Boss",
    "latitude":30.260755,
    "longitude":-90.9291159
  },
  {
    "id":1139,
    "name":"Jet Products LLC",
    "latitude":38.0516666,
    "longitude":-84.4569839
  },
  {
    "id":98,
    "name":"Scott Mfg. LLC",
    "latitude":37.4183929,
    "longitude":37.4183929
  },
  {
    "id":1136,
    "name":"Multicopterdesign",
    "latitude":31.9981323,
    "longitude":-101.9577005
  },
  {
    "id":1140,
    "name":"S&S Tool and Machine Co., Inc.",
    "latitude":38.2568853,
    "longitude":-85.5155242
  },
  {
    "id":1142,
    "name":"ACME Engineering",
    "latitude":45.534524,
    "longitude":-122.641899
  },
  {
    "id":1143,
    "name":"Clinimed USA",
    "latitude":40.5294058,
    "longitude":-75.3936935
  },
  {
    "id":188,
    "name":"Full Circle 4x4",
    "latitude":40.22434399999999,
    "longitude":-75.626598
  },
  {
    "id":1144,
    "name":"Mach 1 Machine",
    "latitude":39.119963,
    "longitude":-84.60838100000001
  },
  {
    "id":1145,
    "name":"Spray-Rite, Inc.",
    "latitude":35.2770426,
    "longitude":-94.4412825
  },
  {
    "id":1146,
    "name":"UPS",
    "latitude":33.9433474,
    "longitude":-84.3601667
  },
  {
    "id":1141,
    "name":"Mezco Fabrication LLC",
    "latitude":30.308916,
    "longitude":-92.026296
  },
  {
    "id":129,
    "name":"Abe-Tec Manufacturing",
    "latitude":39.057478,
    "longitude":-84.06591499999999
  },
  {
    "id":470,
    "name":"FORTIUS ARMS",
    "latitude":42.077695,
    "longitude":-80.109347
  },
  {
    "id":1134,
    "name":"Hochbaum Machine Services, Inc.",
    "latitude":41.3237683,
    "longitude":-87.1941396
  },
  {
    "id":207,
    "name":"Interactive Design Inc",
    "latitude":38.986527,
    "longitude":-94.717142
  },
  {
    "id":1147,
    "name":"Sigma Six Engineering",
    "latitude":39.3920728,
    "longitude":-84.2207699
  },
  {
    "id":1149,
    "name":"One of a Kind Designs & Manufacturing",
    "latitude":30.797108,
    "longitude":-97.40861699999999
  },
  {
    "id":423,
    "name":"CNC Performance Engineering",
    "latitude":35.35564,
    "longitude":-80.833862
  },
  {
    "id":1151,
    "name":"Proto Tree LLC",
    "latitude":37.788638,
    "longitude":-122.206722
  },
  {
    "id":263,
    "name":"Alpine Machine Service",
    "latitude":45.5228939,
    "longitude":-122.989827
  },
  {
    "id":1148,
    "name":"AY Domesticparts LLC",
    "latitude":42.02126,
    "longitude":-87.968729
  },
  {
    "id":861,
    "name":"TMX Engineering",
    "latitude":33.7181775,
    "longitude":-117.8561657
  },
  {
    "id":1150,
    "name":"Micro EDM Co. LLC",
    "latitude":43.5984242,
    "longitude":-83.18438789999999
  },
  {
    "id":530,
    "name":"Aztalan Engineering",
    "latitude":43.075959,
    "longitude":-88.88717199999999
  },
  {
    "id":728,
    "name":"Liberty Advance Machine Inc.",
    "latitude":39.2273953,
    "longitude":-85.9387757
  },
  {
    "id":1066,
    "name":"Marathon Machine Technologies, LLC",
    "latitude":45.094885,
    "longitude":-90.098654
  },
  {
    "id":758,
    "name":"Gresham Millwork & Supply Company",
    "latitude":38.2121145,
    "longitude":-84.24769409999999
  },
  {
    "id":324,
    "name":"Technox Machine and Manufacturing",
    "latitude":41.9283781,
    "longitude":-87.791544
  },
  {
    "id":567,
    "name":"Enlow Machine Company",
    "latitude":38.5993767,
    "longitude":-121.260377
  },
  {
    "id":810,
    "name":"Ultra-Met CO",
    "latitude":40.1157037,
    "longitude":-83.7520673
  },
  {
    "id":888,
    "name":"McCormick Industries Inc.",
    "latitude":44.251893,
    "longitude":-88.441315
  },
  {
    "id":1012,
    "name":"Practix Manufacturing, LLC",
    "latitude":34.0608213,
    "longitude":-84.65366689999999
  },
  {
    "id":808,
    "name":"Cyclone Machine",
    "latitude":40.970767,
    "longitude":-82.21488099999999
  },
  {
    "id":645,
    "name":"DPP Manufacturing",
    "latitude":38.414326,
    "longitude":-96.288006
  },
  {
    "id":779,
    "name":"Contract Machining",
    "latitude":38.077435,
    "longitude":-84.54705
  },
  {
    "id":835,
    "name":"Evicient, LLC",
    "latitude":33.7743922,
    "longitude":-84.4136296
  },
  {
    "id":109,
    "name":"Moscow Mills",
    "latitude":44.440926,
    "longitude":-72.71579
  },
  {
    "id":638,
    "name":"Schuler Manufacturing",
    "latitude":38.2268275,
    "longitude":-85.7704809
  },
  {
    "id":322,
    "name":"Integrated Sign & Graphic, Inc.",
    "latitude":37.9621182,
    "longitude":-84.3727897
  },
  {
    "id":323,
    "name":"Thomasnet",
    "latitude":40.7519783,
    "longitude":-73.9940672
  },
  {
    "id":948,
    "name":"Rit Tek LLC",
    "latitude":37.75209359999999,
    "longitude":-84.3407117
  },
  {
    "id":979,
    "name":"Proto Plastics, Inc.",
    "latitude":39.965943,
    "longitude":-84.178153
  },
  {
    "id":996,
    "name":"OCO Manufacturing LLC",
    "latitude":28.230552,
    "longitude":-82.7381599
  },
  {
    "id":1153,
    "name":"Affiliated Metals",
    "latitude":40.7787129,
    "longitude":-112.0132095
  },
  {
    "id":1155,
    "name":"Cale Lackey",
    "latitude":33.591771,
    "longitude":-117.091806
  },
  {
    "id":498,
    "name":"LJ Technology",
    "latitude":25.844751,
    "longitude":-80.26119299999999
  },
  {
    "id":549,
    "name":"Métier Vélo",
    "latitude":40.769051,
    "longitude":-111.756259
  },
  {
    "id":602,
    "name":"Wabco",
    "latitude":32.8475341,
    "longitude":-80.02310539999999
  },
  {
    "id":956,
    "name":"Hogan Mfg Inc.",
    "latitude":37.79569499999999,
    "longitude":-120.993598
  },
  {
    "id":1043,
    "name":"U-Tek CNC",
    "latitude":40.9600921,
    "longitude":-95.2798311
  },
  {
    "id":689,
    "name":"WSI",
    "latitude":38.865198,
    "longitude":-94.839591
  },
  {
    "id":731,
    "name":"Nam Wah",
    "latitude":38.0431696,
    "longitude":-84.7057787
  },
  {
    "id":732,
    "name":"The Crocker Company",
    "latitude":38.0468188,
    "longitude":-84.4946871
  },
  {
    "id":1037,
    "name":"Parker-Hannifin Corporation (Pneumatic Division)",
    "latitude":42.3898181,
    "longitude":-85.46117269999999
  },
  {
    "id":523,
    "name":"JC Machine Services",
    "latitude":34.1774508,
    "longitude":-80.6992633
  },
  {
    "id":77,
    "name":"Integral Machining and Engineering",
    "latitude":27.925453,
    "longitude":-82.724665
  },
  {
    "id":1108,
    "name":"test",
    "latitude":42.8140012,
    "longitude":-73.9814578
  },
  {
    "id":1110,
    "name":"Test",
    "latitude":50.3739788,
    "longitude":-95.84172219999999
  },
  {
    "id":1104,
    "name":"-",
    "latitude":50.1006825,
    "longitude":18.9928064
  },
  {
    "id":13,
    "name":"T.V. Geist Mfg. Inc.",
    "latitude":39.3348512,
    "longitude":-81.4276742
  },
  {
    "id":1115,
    "name":"Xuare, LLC",
    "latitude":41.5345706,
    "longitude":-72.05468870000001
  },
  {
    "id":1114,
    "name":"Singleton Equipment, LLC",
    "latitude":30.4960687,
    "longitude":-90.7831432
  },
  {
    "id":1116,
    "name":"Fastener Tool and Supply",
    "latitude":41.376875,
    "longitude":-81.465092
  },
  {
    "id":1117,
    "name":"Generic Materials Supplier",
    "latitude":38.03846600000001,
    "longitude":-84.494027
  },
  {
    "id":1118,
    "name":"Generic Shipping Supplier",
    "latitude":38.03846600000001,
    "longitude":-84.494027
  },
  {
    "id":1119,
    "name":"P & W Machine",
    "latitude":37.4737368,
    "longitude":-80.7795764
  },
  {
    "id":6,
    "name":"Merton Tech LLC",
    "latitude":40.900334,
    "longitude":-74.07184
  },
  {
    "id":329,
    "name":"Gray",
    "latitude":38.0436309,
    "longitude":-84.4945243
  },
  {
    "id":72,
    "name":"Machine 13",
    "latitude":36.066671,
    "longitude":-86.75357400000001
  },
  {
    "id":74,
    "name":"Alt-32",
    "latitude":38.04152699999999,
    "longitude":-84.49392499999999
  },
  {
    "id":75,
    "name":"Mezzo Technologies",
    "latitude":30.4768871,
    "longitude":-91.07310199999999
  },
  {
    "id":71,
    "name":"Counsyl, Inc.",
    "latitude":37.6508613,
    "longitude":-122.3925918
  },
  {
    "id":272,
    "name":"Viper CNC LLC",
    "latitude":39.523773,
    "longitude":-84.319868
  },
  {
    "id":66,
    "name":"ITAMCO",
    "latitude":41.3886121,
    "longitude":-86.31271699999999
  },
  {
    "id":73,
    "name":"Mosman Machinery Company - Triminator",
    "latitude":39.220676,
    "longitude":-121.013655
  },
  {
    "id":82,
    "name":"Metals Depot",
    "latitude":38.0108823,
    "longitude":-84.2035425
  },
  {
    "id":83,
    "name":"Metal Supermarket",
    "latitude":45.5582104,
    "longitude":-122.5251385
  },
  {
    "id":84,
    "name":"McMaster-Carr",
    "latitude":41.2879866,
    "longitude":-81.3444414
  },
  {
    "id":91,
    "name":"Plasma-Tec, Inc.",
    "latitude":42.72816150000001,
    "longitude":-85.6556434
  },
  {
    "id":86,
    "name":"Nike",
    "latitude":45.4923824,
    "longitude":-122.8029665
  },
  {
    "id":87,
    "name":"Britley Industrial Equipment Corporation",
    "latitude":38.09929959999999,
    "longitude":-84.5201902
  },
  {
    "id":88,
    "name":"Hybrid Racing",
    "latitude":30.3840176,
    "longitude":-91.044353
  },
  {
    "id":105,
    "name":"Easy Wood Tools",
    "latitude":38.05739,
    "longitude":-84.53030009999999
  },
  {
    "id":107,
    "name":"United Machining LLC",
    "latitude":42.139349,
    "longitude":-71.78922899999999
  },
  {
    "id":123,
    "name":"TS CNC LTD",
    "latitude":52.5849971,
    "longitude":52.5849971
  },
  {
    "id":89,
    "name":"Peterson International",
    "latitude":42.13017749999999,
    "longitude":-87.9184107
  },
  {
    "id":93,
    "name":"RKDS Engineering",
    "latitude":39.566634,
    "longitude":-105.120498
  },
  {
    "id":110,
    "name":"The Kinetic Co., Inc.",
    "latitude":42.9405711,
    "longitude":-87.9959191
  },
  {
    "id":92,
    "name":"MT QA",
    "latitude":42.8140012,
    "longitude":-73.9814578
  },
  {
    "id":113,
    "name":"Clicker Plus",
    "latitude":39.742443,
    "longitude":-121.841316
  },
  {
    "id":114,
    "name":"Clark Machine Tool & Die",
    "latitude":37.8712015,
    "longitude":-84.59079249999999
  },
  {
    "id":115,
    "name":"Foxworth Architecture, PLLC",
    "latitude":38.226543,
    "longitude":-85.740391
  },
  {
    "id":117,
    "name":"Twin Rivers Machine & Tool",
    "latitude":36.515383,
    "longitude":-79.785591
  },
  {
    "id":118,
    "name":"Coaster, LLC",
    "latitude":38.0468188,
    "longitude":-84.4946871
  },
  {
    "id":119,
    "name":"Oxford Garden",
    "latitude":38.2198346,
    "longitude":-85.55615
  },
  {
    "id":120,
    "name":"Cooper Standard",
    "latitude":38.1007449,
    "longitude":-83.89837399999999
  },
  {
    "id":122,
    "name":"RC Mechanical Solutions",
    "latitude":43.158027,
    "longitude":-80.216875
  },
  {
    "id":116,
    "name":"Machine Craft Northwest INC.",
    "latitude":44.5365119,
    "longitude":44.5365119
  },
  {
    "id":121,
    "name":"JT Precision",
    "latitude":43.3373942,
    "longitude":-78.55162779999999
  },
  {
    "id":111,
    "name":"Rocket Manufacturing",
    "latitude":42.35099599999999,
    "longitude":-83.453541
  },
  {
    "id":124,
    "name":"Solid Rock Enterprises",
    "latitude":30.7851923,
    "longitude":-96.7213641
  },
  {
    "id":127,
    "name":"Hot Shot Delivery",
    "latitude":36.1474036,
    "longitude":-86.74039859999999
  },
  {
    "id":125,
    "name":"Lindel Engineering",
    "latitude":32.126497,
    "longitude":-110.919973
  },
  {
    "id":128,
    "name":"TK Machining Specialties",
    "latitude":39.3083622,
    "longitude":-84.6532069
  },
  {
    "id":12,
    "name":"Compass Automation",
    "latitude":42.0674229,
    "longitude":-88.3443441
  },
  {
    "id":151,
    "name":"The Innovation Machine",
    "latitude":41.88118559999999,
    "longitude":-87.6374404
  },
  {
    "id":163,
    "name":"Karve Machine Inc.",
    "latitude":53.529386,
    "longitude":-113.302465
  },
  {
    "id":169,
    "name":"Volume Gallery",
    "latitude":41.8829561,
    "longitude":-87.649289
  },
  {
    "id":159,
    "name":"Dynamic CNC Machining LLC",
    "latitude":36.015284,
    "longitude":-86.49194
  },
  {
    "id":176,
    "name":"BrightSpace Technologies",
    "latitude":40.01781880000001,
    "longitude":-105.2796102
  },
  {
    "id":198,
    "name":"TLS Tool & Precision Inc.",
    "latitude":40.48678210000001,
    "longitude":-74.45243599999999
  },
  {
    "id":448,
    "name":"Roland Snooks",
    "latitude":29.7799559,
    "longitude":-95.5613638
  },
  {
    "id":209,
    "name":"Mcdonco Machine Ltd",
    "latitude":42.9017764,
    "longitude":42.9017764
  },
  {
    "id":210,
    "name":"Mechanical Construction Company",
    "latitude":30.0094606,
    "longitude":-90.1524788
  },
  {
    "id":212,
    "name":"Basic Group, LLC",
    "latitude":34.042259,
    "longitude":-118.226516
  },
  {
    "id":214,
    "name":"Cylinder Systems, Inc",
    "latitude":40.7760126,
    "longitude":-73.98508939999999
  },
  {
    "id":224,
    "name":"Ethus",
    "latitude":51.165691,
    "longitude":51.165691
  },
  {
    "id":449,
    "name":"Hirobel",
    "latitude":41.5233346,
    "longitude":-81.5322149
  },
  {
    "id":242,
    "name":"SDA",
    "latitude":34.0438172,
    "longitude":-118.2525965
  },
  {
    "id":246,
    "name":"E-W Metal Works",
    "latitude":42.3149367,
    "longitude":42.3149367
  },
  {
    "id":248,
    "name":"Lippes Mathias Wexler Friedman LLP",
    "latitude":42.8916329,
    "longitude":-78.87157839999999
  },
  {
    "id":254,
    "name":"TEST",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":262,
    "name":"SHoP Architects",
    "latitude":40.7089457,
    "longitude":-73.9594252
  },
  {
    "id":264,
    "name":"T & D Machine Works",
    "latitude":32.508612,
    "longitude":-96.350128
  },
  {
    "id":276,
    "name":"bp Concepts LLC",
    "latitude":38.2249772,
    "longitude":-85.5326395
  },
  {
    "id":282,
    "name":"VIP Tooling",
    "latitude":39.525217,
    "longitude":-85.762553
  },
  {
    "id":287,
    "name":"Top Service",
    "latitude":37.9335052,
    "longitude":-84.5420929
  },
  {
    "id":290,
    "name":"The Metal Shop LLC",
    "latitude":42.521406,
    "longitude":-87.90874199999999
  },
  {
    "id":306,
    "name":"DEK Machine, Inc.",
    "latitude":40.3694291,
    "longitude":-75.0498427
  },
  {
    "id":307,
    "name":"Jose Mero",
    "latitude":35.2959663,
    "longitude":-120.6531793
  },
  {
    "id":318,
    "name":"Alex Pincus",
    "latitude":40.7767763,
    "longitude":-73.9433737
  },
  {
    "id":319,
    "name":"MB Controls",
    "latitude":38.0843735,
    "longitude":-84.5354576
  },
  {
    "id":321,
    "name":"SD Performance",
    "latitude":40.5804112,
    "longitude":-111.9970298
  },
  {
    "id":331,
    "name":"Turning Inc.",
    "latitude":34.422348,
    "longitude":-84.418649
  },
  {
    "id":390,
    "name":"D'Oro Workroom",
    "latitude":33.7401261,
    "longitude":-84.3640348
  },
  {
    "id":344,
    "name":"Global Gear",
    "latitude":37.04644830000001,
    "longitude":-88.5606411
  },
  {
    "id":444,
    "name":"Gadgeteer",
    "latitude":42.3548561,
    "longitude":-71.0661193
  },
  {
    "id":445,
    "name":"Satan's Capitalistic Workshop",
    "latitude":38.2097967,
    "longitude":-84.55883109999999
  },
  {
    "id":446,
    "name":"HZG Manufacturing Corp.",
    "latitude":38.013986,
    "longitude":-121.887927
  },
  {
    "id":371,
    "name":"Brillio",
    "latitude":37.4063095,
    "longitude":-121.976564
  },
  {
    "id":372,
    "name":"Tric Pick Industries",
    "latitude":34.5879535,
    "longitude":-118.0971372
  },
  {
    "id":376,
    "name":"+Mfg, LLC",
    "latitude":39.0833029,
    "longitude":-84.5130616
  },
  {
    "id":378,
    "name":"Precision Wire Edm Service Inc.",
    "latitude":43.01491499999999,
    "longitude":-85.747919
  },
  {
    "id":452,
    "name":"eCat",
    "latitude":39.7774501,
    "longitude":-86.1090119
  },
  {
    "id":413,
    "name":"Smith Manus Agency Inc",
    "latitude":38.2739568,
    "longitude":-85.7080076
  },
  {
    "id":414,
    "name":"N/A",
    "latitude":37.975356,
    "longitude":-84.540385
  },
  {
    "id":422,
    "name":"Aslan Production Studios",
    "latitude":38.22447289999999,
    "longitude":-84.48279939999999
  },
  {
    "id":428,
    "name":"Laspar LLC",
    "latitude":39.0996445,
    "longitude":-84.5122554
  },
  {
    "id":429,
    "name":"G&S Foundry",
    "latitude":38.1986607,
    "longitude":-89.9954499
  },
  {
    "id":434,
    "name":"Traxda LLC",
    "latitude":32.166268,
    "longitude":-110.964212
  },
  {
    "id":435,
    "name":"Rad Wang",
    "latitude":33.4495511,
    "longitude":33.4495511
  },
  {
    "id":439,
    "name":"Hermes Sport",
    "latitude":32.746723,
    "longitude":-117.150263
  },
  {
    "id":441,
    "name":"Coffey Technologies, LLC",
    "latitude":38.0813433,
    "longitude":-83.95754029999999
  },
  {
    "id":454,
    "name":"1st. Choice Interiors",
    "latitude":27.431661,
    "longitude":-82.523049
  },
  {
    "id":457,
    "name":"Elite Outfitting Solutions",
    "latitude":41.544648,
    "longitude":-74.2082159
  },
  {
    "id":458,
    "name":"Plan-B Innovations",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":461,
    "name":"PTC Seamless Tube Corp.",
    "latitude":40.63501540000001,
    "longitude":-80.0657331
  },
  {
    "id":467,
    "name":"Sandvik",
    "latitude":40.9477802,
    "longitude":-74.1288115
  },
  {
    "id":468,
    "name":"Killstress Designs",
    "latitude":33.8618226,
    "longitude":-117.8524237
  },
  {
    "id":469,
    "name":"Wimpee's Welding, Inc.",
    "latitude":36.9259997,
    "longitude":-86.55018710000002
  },
  {
    "id":497,
    "name":"TCI Precision Metals",
    "latitude":33.9011617,
    "longitude":-118.2712752
  },
  {
    "id":500,
    "name":"Triangle CNC Machining",
    "latitude":35.578944,
    "longitude":-78.79715
  },
  {
    "id":482,
    "name":"ANDERSON CRANE CO.",
    "latitude":44.97325499999999,
    "longitude":-93.28008899999999
  },
  {
    "id":484,
    "name":"Johnson Industries",
    "latitude":37.2996363,
    "longitude":-82.539715
  },
  {
    "id":486,
    "name":"Jacob McGown",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":487,
    "name":"Alex Meade Bikeworks, LLC",
    "latitude":38.03207,
    "longitude":-84.482298
  },
  {
    "id":492,
    "name":"Perry Precision Products",
    "latitude":28.3897325,
    "longitude":-82.6609077
  },
  {
    "id":493,
    "name":"Predator Tactical LLC",
    "latitude":33.411573,
    "longitude":-111.895952
  },
  {
    "id":494,
    "name":"Alchemist",
    "latitude":25.7907342,
    "longitude":-80.1291178
  },
  {
    "id":495,
    "name":"Blue Ocean Engineering",
    "latitude":27.816415,
    "longitude":27.816415
  },
  {
    "id":508,
    "name":"Harley Ellis Devereaux",
    "latitude":41.8865189,
    "longitude":-87.6275344
  },
  {
    "id":511,
    "name":"PF Woodworking",
    "latitude":50.9522631,
    "longitude":-113.8959503
  },
  {
    "id":518,
    "name":"Harrington Machine & Tool Inc.",
    "latitude":41.3929968,
    "longitude":-79.8282606
  },
  {
    "id":522,
    "name":"Class 3 Components",
    "latitude":39.29894609999999,
    "longitude":-76.51521869999999
  },
  {
    "id":528,
    "name":"Redfish Machine, LLC",
    "latitude":30.1992,
    "longitude":-91.9995818
  },
  {
    "id":534,
    "name":"Volkswagen AG",
    "latitude":39.399872,
    "longitude":39.399872
  },
  {
    "id":536,
    "name":"Michael Lomtevas",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":537,
    "name":"Made Things",
    "latitude":51.5073509,
    "longitude":51.5073509
  },
  {
    "id":538,
    "name":"National Tooling & Machining Association",
    "latitude":41.405272,
    "longitude":-81.68839969999999
  },
  {
    "id":542,
    "name":"Aeromind LLC /Silca",
    "latitude":39.7591259,
    "longitude":-86.26987199999999
  },
  {
    "id":547,
    "name":"Seikowave Inc",
    "latitude":38.01961379999999,
    "longitude":-84.4994488
  },
  {
    "id":551,
    "name":"Boo Inc.",
    "latitude":38.03846600000001,
    "longitude":-84.494027
  },
  {
    "id":556,
    "name":"Cascade Crystal",
    "latitude":43.6696655,
    "longitude":-79.4343911
  },
  {
    "id":565,
    "name":"Joel Dodich",
    "latitude":43.0389025,
    "longitude":43.0389025
  },
  {
    "id":566,
    "name":"Blue Dot",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":569,
    "name":"Makercast",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":570,
    "name":"Buchheit Precision",
    "latitude":42.3186165,
    "longitude":-103.0742954
  },
  {
    "id":580,
    "name":"David Ruy",
    "latitude":40.739279,
    "longitude":-73.9888
  },
  {
    "id":582,
    "name":"Toyota",
    "latitude":40.7584385,
    "longitude":-73.9702732
  },
  {
    "id":584,
    "name":"Anchak Machine Works",
    "latitude":33.7826633,
    "longitude":-116.4604197
  },
  {
    "id":587,
    "name":"TubeMaster, Inc.",
    "latitude":38.1727275,
    "longitude":-85.5721378
  },
  {
    "id":589,
    "name":"Madelynn Ringo",
    "latitude":41.30875140000001,
    "longitude":-72.93187730000001
  },
  {
    "id":592,
    "name":"FARM",
    "latitude":38.050254,
    "longitude":-84.506912
  },
  {
    "id":576,
    "name":"Mezco Fabrication",
    "latitude":30.308916,
    "longitude":-92.026296
  },
  {
    "id":590,
    "name":"LeanWerks",
    "latitude":41.2153169,
    "longitude":-112.0155009
  },
  {
    "id":593,
    "name":"Diamond Technology Innovations",
    "latitude":47.038483,
    "longitude":-122.9610391
  },
  {
    "id":595,
    "name":"Cluck Design",
    "latitude":35.214165,
    "longitude":-80.826742
  },
  {
    "id":597,
    "name":"Hadady Corporation",
    "latitude":41.4983812,
    "longitude":-87.52557
  },
  {
    "id":598,
    "name":"Lee Weitzman Furniture",
    "latitude":41.8607356,
    "longitude":-87.6869143
  },
  {
    "id":606,
    "name":"Hackerspace Charlotte",
    "latitude":35.2247839,
    "longitude":-80.8176067
  },
  {
    "id":609,
    "name":"Staub Manufacturing Solutions",
    "latitude":39.834946,
    "longitude":-84.182191
  },
  {
    "id":611,
    "name":"Tried & True Machine",
    "latitude":46.3981456,
    "longitude":-94.53915239999999
  },
  {
    "id":612,
    "name":"Mixer Direct",
    "latitude":38.2750997,
    "longitude":-85.7074028
  },
  {
    "id":615,
    "name":"Molded Components and Machine Inc",
    "latitude":39.733292,
    "longitude":-75.644558
  },
  {
    "id":618,
    "name":"Tempercraft LLC",
    "latitude":40.3337075,
    "longitude":-75.63740829999999
  },
  {
    "id":684,
    "name":"Socal Inc",
    "latitude":33.0542634,
    "longitude":-117.2618148
  },
  {
    "id":619,
    "name":"Kinemetrix",
    "latitude":38.074775,
    "longitude":-84.547063
  },
  {
    "id":627,
    "name":"Matec Instrument Companies, Inc.",
    "latitude":42.323016,
    "longitude":-71.63861
  },
  {
    "id":629,
    "name":"UCLA",
    "latitude":34.0733489,
    "longitude":-118.4402005
  },
  {
    "id":630,
    "name":"Precision Aircraft Group",
    "latitude":33.6267366,
    "longitude":-84.40364489999999
  },
  {
    "id":631,
    "name":"Connectronics, Inc.",
    "latitude":39.3446284,
    "longitude":-85.965542
  },
  {
    "id":634,
    "name":"Daniel R Small",
    "latitude":34.1330024,
    "longitude":-117.8979407
  },
  {
    "id":637,
    "name":"Highline Tool Inc.",
    "latitude":45.49327299999999,
    "longitude":-122.590858
  },
  {
    "id":639,
    "name":"CAT Equipment Co.",
    "latitude":39.37000099999999,
    "longitude":-84.471204
  },
  {
    "id":640,
    "name":"SU11 architecture + design",
    "latitude":40.7232525,
    "longitude":-74.00883449999999
  },
  {
    "id":641,
    "name":"Vioski",
    "latitude":34.1341628,
    "longitude":-118.0057625
  },
  {
    "id":643,
    "name":"Baker Custom Manufacturing",
    "latitude":43.0118771,
    "longitude":-81.15657809999999
  },
  {
    "id":662,
    "name":"Motorcity Metal Fab.",
    "latitude":42.218232,
    "longitude":-83.27282199999999
  },
  {
    "id":663,
    "name":"Torbide Tooling",
    "latitude":43.5030496,
    "longitude":-80.5276804
  },
  {
    "id":661,
    "name":"Bomar Metal Works",
    "latitude":35.31726099999999,
    "longitude":-91.99651399999999
  },
  {
    "id":651,
    "name":"Detrick Design & Fabrication, LLC",
    "latitude":40.0394982,
    "longitude":-84.20327669999999
  },
  {
    "id":653,
    "name":"Williams Foam, Inc.",
    "latitude":34.305791,
    "longitude":-118.4683079
  },
  {
    "id":654,
    "name":"TRP Brakes",
    "latitude":41.2584406,
    "longitude":-111.9938748
  },
  {
    "id":656,
    "name":"Potter USA",
    "latitude":32.203679,
    "longitude":-110.779585
  },
  {
    "id":657,
    "name":"Vioski",
    "latitude":34.1442616,
    "longitude":-118.0019482
  },
  {
    "id":665,
    "name":"Visions By Design",
    "latitude":40.69394459999999,
    "longitude":-73.618657
  },
  {
    "id":666,
    "name":"GSquared Enterprises, LLC",
    "latitude":39.0509255,
    "longitude":-84.5109256
  },
  {
    "id":658,
    "name":"KLT Group, Inc.",
    "latitude":40.25070830000001,
    "longitude":-75.6499979
  },
  {
    "id":670,
    "name":"Princeton University",
    "latitude":40.3467174,
    "longitude":-74.6568772
  },
  {
    "id":672,
    "name":"Unifire",
    "latitude":49.7196576,
    "longitude":-123.1494822
  },
  {
    "id":673,
    "name":"Mystique Brand Communications",
    "latitude":43.7249754,
    "longitude":-79.3391044
  },
  {
    "id":674,
    "name":"S & A Engineering",
    "latitude":43.4784763,
    "longitude":-86.4362263
  },
  {
    "id":675,
    "name":"Kentucky Science and Technology Corporation",
    "latitude":38.0464468,
    "longitude":-84.49953889999999
  },
  {
    "id":676,
    "name":"Meyer Natural Foods",
    "latitude":40.4120218,
    "longitude":-105.0077732
  },
  {
    "id":678,
    "name":"Fast 3d LLC",
    "latitude":39.002507,
    "longitude":-76.92071
  },
  {
    "id":679,
    "name":"Cusp Consulting",
    "latitude":38.25569280000001,
    "longitude":-85.751283
  },
  {
    "id":680,
    "name":"J & E Machine",
    "latitude":43.6501773,
    "longitude":-70.74279039999999
  },
  {
    "id":681,
    "name":"Disher Design and Development",
    "latitude":42.8141412,
    "longitude":-86.0235526
  },
  {
    "id":686,
    "name":"Polymet",
    "latitude":39.304419,
    "longitude":-84.455118
  },
  {
    "id":687,
    "name":"Conifer Creations",
    "latitude":40.3616989,
    "longitude":-75.31425329999999
  },
  {
    "id":692,
    "name":"PLUS-SUM studio",
    "latitude":38.032666,
    "longitude":-84.480205
  },
  {
    "id":690,
    "name":"TMK Machine",
    "latitude":33.9000366,
    "longitude":-98.478759
  },
  {
    "id":671,
    "name":"A & D Tool Co.",
    "latitude":42.1603997,
    "longitude":-72.5060776
  },
  {
    "id":694,
    "name":"Precision Research",
    "latitude":33.3821757,
    "longitude":-111.8205015
  },
  {
    "id":696,
    "name":"ID4A",
    "latitude":37.7794198,
    "longitude":-122.3959518
  },
  {
    "id":698,
    "name":"Maker Pipe",
    "latitude":34.6787629,
    "longitude":-82.6517889
  },
  {
    "id":699,
    "name":"B&D Appliance Repair",
    "latitude":41.9456439,
    "longitude":-71.63769690000001
  },
  {
    "id":702,
    "name":"General Tool Specialties, Inc.",
    "latitude":40.5164497,
    "longitude":-74.61281919999999
  },
  {
    "id":708,
    "name":"Bob Coyne - Coyne Associates",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":711,
    "name":"LMN Architects",
    "latitude":47.6036982,
    "longitude":-122.3345987
  },
  {
    "id":695,
    "name":"Salley Tool & Die Co.",
    "latitude":39.7434917,
    "longitude":-84.0854432
  },
  {
    "id":709,
    "name":"Crosby Machine Company",
    "latitude":42.3439357,
    "longitude":-72.0723199
  },
  {
    "id":713,
    "name":"Kennametal Extrude Hone",
    "latitude":40.3177668,
    "longitude":-79.67696509999999
  },
  {
    "id":718,
    "name":"Student at Ecole de Technologie supérieure",
    "latitude":45.4159003,
    "longitude":45.4159003
  },
  {
    "id":720,
    "name":"Wanes Custom Woodworks Inc",
    "latitude":49.25951999999999,
    "longitude":-122.981764
  },
  {
    "id":725,
    "name":"Clever AMSB",
    "latitude":40.7655457,
    "longitude":-82.57512369999999
  },
  {
    "id":727,
    "name":"Parrish Holdings",
    "latitude":38.03309400000001,
    "longitude":-84.48923599999999
  },
  {
    "id":768,
    "name":"U.S. Growth Partners Corp.",
    "latitude":29.5431103,
    "longitude":-95.0638146
  },
  {
    "id":733,
    "name":"Rightech Fabrications",
    "latitude":42.146978,
    "longitude":-87.85594999999999
  },
  {
    "id":735,
    "name":"Beckhoff",
    "latitude":32.893957,
    "longitude":-117.194081
  },
  {
    "id":736,
    "name":"Aftech Engineering",
    "latitude":51.165691,
    "longitude":51.165691
  },
  {
    "id":737,
    "name":"Nicks Machine Co.",
    "latitude":40.4489116,
    "longitude":-74.3798327
  },
  {
    "id":738,
    "name":"Southern Linac, LLC",
    "latitude":30.5136076,
    "longitude":-90.112083
  },
  {
    "id":740,
    "name":"Maha USA",
    "latitude":31.3085482,
    "longitude":-85.5284284
  },
  {
    "id":714,
    "name":"Dayton-Phoenix Group",
    "latitude":39.7902277,
    "longitude":-84.1732561
  },
  {
    "id":741,
    "name":"Metric Arms",
    "latitude":53.63353660000001,
    "longitude":-113.5362838
  },
  {
    "id":742,
    "name":"RC & Design Company",
    "latitude":40.5391054,
    "longitude":-75.3307049
  },
  {
    "id":743,
    "name":"ConnectDER",
    "latitude":38.88057999999999,
    "longitude":-77.21225299999999
  },
  {
    "id":746,
    "name":"System Insights",
    "latitude":37.8596672,
    "longitude":-122.2918154
  },
  {
    "id":753,
    "name":"SwiFt Precision Machine Shop",
    "latitude":27.1535338,
    "longitude":-80.2148283
  },
  {
    "id":754,
    "name":"Goodson Clothing & Supply Co.",
    "latitude":38.2092078,
    "longitude":-85.5613754
  },
  {
    "id":756,
    "name":"Jetpack Danceoff LLC",
    "latitude":38.051801,
    "longitude":-84.47344199999999
  },
  {
    "id":757,
    "name":"Steam Exchange",
    "latitude":38.2421125,
    "longitude":-85.7482658
  },
  {
    "id":760,
    "name":"Alta Precision Inc.",
    "latitude":45.6165094,
    "longitude":-73.58888390000001
  },
  {
    "id":749,
    "name":"White Industries",
    "latitude":38.270637,
    "longitude":-122.663326
  },
  {
    "id":762,
    "name":"Associated Manufacturing",
    "latitude":30.699444,
    "longitude":-97.750226
  },
  {
    "id":763,
    "name":"Pantheon",
    "latitude":40.12,
    "longitude":-75.00999999999999
  },
  {
    "id":765,
    "name":"Cutting Edge CNC",
    "latitude":41.2446264,
    "longitude":-111.9511313
  },
  {
    "id":769,
    "name":"Crosley Sports Group",
    "latitude":38.2345751,
    "longitude":-85.729548
  },
  {
    "id":771,
    "name":"Morehead State University (Department of Applied Engineering and Technology)",
    "latitude":38.1840803,
    "longitude":-83.4359479
  },
  {
    "id":773,
    "name":"Houlihan Lokey",
    "latitude":40.7612429,
    "longitude":-73.972861
  },
  {
    "id":775,
    "name":"Acme Industrial Thinking",
    "latitude":36.1617377,
    "longitude":-85.5077642
  },
  {
    "id":777,
    "name":"HALE-ID",
    "latitude":39.2085373,
    "longitude":-85.9200604
  },
  {
    "id":778,
    "name":"Cerberus Technology",
    "latitude":38.0455154,
    "longitude":-84.4956012
  },
  {
    "id":780,
    "name":"Four Scorned, LLC",
    "latitude":38.1132964,
    "longitude":-84.13947329999999
  },
  {
    "id":781,
    "name":"TM Technology Services, Corp.",
    "latitude":33.6419939,
    "longitude":-117.694246
  },
  {
    "id":782,
    "name":"Committed Tool de Mexico SA de CV",
    "latitude":23.634501,
    "longitude":23.634501
  },
  {
    "id":783,
    "name":"Space Tango Inc.",
    "latitude":38.0434829,
    "longitude":-84.49154829999999
  },
  {
    "id":784,
    "name":"Wopata Consulting",
    "latitude":39.1041725,
    "longitude":-94.5998517
  },
  {
    "id":785,
    "name":"TMW Inc.",
    "latitude":33.557412,
    "longitude":-117.729153
  },
  {
    "id":774,
    "name":"CARDONE Industries ",
    "latitude":40.0340599,
    "longitude":-75.0961485
  },
  {
    "id":786,
    "name":"Gurley Precision Instruments",
    "latitude":42.732432,
    "longitude":-73.68652999999999
  },
  {
    "id":790,
    "name":"ies Power Systems",
    "latitude":38.216402,
    "longitude":-85.63853
  },
  {
    "id":791,
    "name":"Rokcon Limited",
    "latitude":40.5569121,
    "longitude":-80.0199562
  },
  {
    "id":792,
    "name":"Sunny Mok",
    "latitude":32.0563741,
    "longitude":-81.0478643
  },
  {
    "id":795,
    "name":"Engineer3d Printing",
    "latitude":42.7978061,
    "longitude":-83.7049498
  },
  {
    "id":796,
    "name":"Authentise",
    "latitude":37.4106186,
    "longitude":-122.0583322
  },
  {
    "id":797,
    "name":"Emerald Ironworks",
    "latitude":38.6295577,
    "longitude":-77.2528469
  },
  {
    "id":800,
    "name":"Canon Virginia Inc.",
    "latitude":37.1007301,
    "longitude":-76.4727635
  },
  {
    "id":804,
    "name":"The G&G Manufacturing Co.",
    "latitude":39.148903,
    "longitude":-84.4052449
  },
  {
    "id":805,
    "name":"Boston Device Development",
    "latitude":42.3626399,
    "longitude":-71.2012957
  },
  {
    "id":806,
    "name":"Wasatch Powder Monkeys",
    "latitude":40.6460622,
    "longitude":-111.4979729
  },
  {
    "id":798,
    "name":"J&H Machine, Inc.",
    "latitude":40.9432103,
    "longitude":-88.03554129999999
  },
  {
    "id":827,
    "name":"DCG Precision Mfg. (Danbury Centerless Grinding)",
    "latitude":41.351408,
    "longitude":-73.421779
  },
  {
    "id":809,
    "name":"Illinois Institute of Technology",
    "latitude":41.8342863,
    "longitude":-87.6238036
  },
  {
    "id":811,
    "name":"Cornett",
    "latitude":38.0439649,
    "longitude":-84.4937786
  },
  {
    "id":814,
    "name":"MARs arsenal",
    "latitude":30.42007079999999,
    "longitude":-86.6170308
  },
  {
    "id":816,
    "name":"Solid Light, Inc.",
    "latitude":38.251433,
    "longitude":-85.75595799999999
  },
  {
    "id":817,
    "name":"LoveBaum Bicycles",
    "latitude":39.7324276,
    "longitude":-105.013382
  },
  {
    "id":818,
    "name":"Peter Liu",
    "latitude":37.7595484,
    "longitude":-122.4208172
  },
  {
    "id":820,
    "name":"Trae Greenlee",
    "latitude":32.9678449,
    "longitude":-96.8887202
  },
  {
    "id":823,
    "name":"Lathrop",
    "latitude":44.9482875,
    "longitude":7.5133531
  },
  {
    "id":828,
    "name":"Opportunity for Work and Learning",
    "latitude":38.072239,
    "longitude":-84.498645
  },
  {
    "id":829,
    "name":"Stock",
    "latitude":38.0468188,
    "longitude":-84.4946871
  },
  {
    "id":830,
    "name":"MTConnect",
    "latitude":38.9236672,
    "longitude":-77.2185351
  },
  {
    "id":832,
    "name":"Malerba Architects",
    "latitude":40.75368539999999,
    "longitude":-73.9991637
  },
  {
    "id":826,
    "name":"Shamrock Bolt and Screw Ltd",
    "latitude":32.9519971,
    "longitude":-96.85848329999999
  },
  {
    "id":833,
    "name":"Span Tech, LLC",
    "latitude":36.9892995,
    "longitude":-85.93597919999999
  },
  {
    "id":834,
    "name":"Framebuilder Supply",
    "latitude":45.505603,
    "longitude":-122.6882145
  },
  {
    "id":836,
    "name":"KLC Machining",
    "latitude":27.632154,
    "longitude":-80.41868699999999
  },
  {
    "id":837,
    "name":"Associated Fabrication",
    "latitude":40.7234477,
    "longitude":-73.9552606
  },
  {
    "id":838,
    "name":"Garrett Hansen Photography",
    "latitude":38.019104,
    "longitude":-84.5172709
  },
  {
    "id":839,
    "name":"UK/CoD",
    "latitude":38.0365809,
    "longitude":-84.50406819999999
  },
  {
    "id":840,
    "name":"Sprightlii",
    "latitude":40.7205559,
    "longitude":-74.0014182
  },
  {
    "id":842,
    "name":"Rieck Services",
    "latitude":39.8245479,
    "longitude":-84.1867289
  },
  {
    "id":843,
    "name":"Poage Engineers & Associates, Inc.",
    "latitude":38.03846600000001,
    "longitude":-84.494027
  },
  {
    "id":844,
    "name":"Upscaling Operations Ltd.",
    "latitude":22.396428,
    "longitude":22.396428
  },
  {
    "id":845,
    "name":"Spir Bikes",
    "latitude":39.874339,
    "longitude":-86.110745
  },
  {
    "id":847,
    "name":"Aurora Boom Box",
    "latitude":38.0488113,
    "longitude":-84.5091102
  },
  {
    "id":850,
    "name":"James Diewald",
    "latitude":41.8781136,
    "longitude":41.8781136
  },
  {
    "id":851,
    "name":"Local Motors",
    "latitude":33.2770739,
    "longitude":-111.9620643
  },
  {
    "id":866,
    "name":"KEwert",
    "latitude":38.9143473,
    "longitude":-94.42849849999999
  },
  {
    "id":857,
    "name":"MOAG Glass & Mirror",
    "latitude":38.2887502,
    "longitude":-85.7361425
  },
  {
    "id":864,
    "name":"Cranbury Machine",
    "latitude":40.3199643,
    "longitude":-74.5081178
  },
  {
    "id":865,
    "name":"Paradise Machine Corp",
    "latitude":50.3168808,
    "longitude":-122.7592466
  },
  {
    "id":867,
    "name":"Law Offices of E. Lambert Farmer Jr.",
    "latitude":38.0476142,
    "longitude":-84.499128
  },
  {
    "id":870,
    "name":"Robert DeCosmo Architecture",
    "latitude":34.0380793,
    "longitude":-118.2341765
  },
  {
    "id":871,
    "name":"G & G Manufacturing Co.",
    "latitude":39.148903,
    "longitude":-84.4052449
  },
  {
    "id":872,
    "name":"Florey Enterprise Inc",
    "latitude":34.387961,
    "longitude":-77.648501
  },
  {
    "id":863,
    "name":"Mills Products",
    "latitude":36.0309348,
    "longitude":-86.7888013
  },
  {
    "id":874,
    "name":"Abhay Industries",
    "latitude":16.7489809,
    "longitude":16.7489809
  },
  {
    "id":880,
    "name":"Collective Machining Solutions Ltd",
    "latitude":53.544389,
    "longitude":53.544389
  },
  {
    "id":881,
    "name":"Plan For Tomorrow Today",
    "latitude":37.9581469,
    "longitude":-84.519457
  },
  {
    "id":882,
    "name":"United Metal Design",
    "latitude":30.387596,
    "longitude":-81.507053
  },
  {
    "id":885,
    "name":"Strecker Studio",
    "latitude":38.039131,
    "longitude":-84.491462
  },
  {
    "id":913,
    "name":"Jonny Cycles",
    "latitude":43.0883721,
    "longitude":-89.3084575
  },
  {
    "id":891,
    "name":"Okluma",
    "latitude":35.47,
    "longitude":-97.52
  },
  {
    "id":892,
    "name":"McMaster University",
    "latitude":43.2633674,
    "longitude":-79.9174744
  },
  {
    "id":895,
    "name":"Horticulture Equipment & Services LLC",
    "latitude":35.309918,
    "longitude":-86.123891
  },
  {
    "id":896,
    "name":"BroCoLoco",
    "latitude":38.0572283,
    "longitude":-84.48100389999999
  },
  {
    "id":894,
    "name":"Premier Production Service Industries Inc",
    "latitude":41.274749,
    "longitude":-81.10414
  },
  {
    "id":897,
    "name":"orange22 design lab llc",
    "latitude":33.9763399,
    "longitude":-118.4285608
  },
  {
    "id":899,
    "name":"None",
    "latitude":38.0488113,
    "longitude":-84.5091102
  },
  {
    "id":900,
    "name":"Solidwave",
    "latitude":42.4025879,
    "longitude":-71.1268455
  },
  {
    "id":901,
    "name":"Videre Licet",
    "latitude":34.0758731,
    "longitude":-118.3530096
  },
  {
    "id":903,
    "name":"SHINE",
    "latitude":38.054526,
    "longitude":-84.496595
  },
  {
    "id":905,
    "name":"Mathew Baasch",
    "latitude":46.841759,
    "longitude":-96.80224100000001
  },
  {
    "id":906,
    "name":"Sketch to SKU",
    "latitude":25.0447913,
    "longitude":25.0447913
  },
  {
    "id":907,
    "name":"Altruiste Bicycle Company (NuFocus)",
    "latitude":46.3244986,
    "longitude":-64.6981634
  },
  {
    "id":908,
    "name":"Kearney Machinery",
    "latitude":33.44,
    "longitude":-86.78999999999999
  },
  {
    "id":909,
    "name":"Matter Cycles",
    "latitude":40.0647171,
    "longitude":-105.2820042
  },
  {
    "id":911,
    "name":"Self Made Self, LLC",
    "latitude":40.000959,
    "longitude":-105.226758
  },
  {
    "id":912,
    "name":"None",
    "latitude":40.7311732,
    "longitude":-74.3466971
  },
  {
    "id":938,
    "name":"Laruna Health, Inc. // soma system®",
    "latitude":42.3548561,
    "longitude":-71.0661193
  },
  {
    "id":904,
    "name":"Jared Hamilton Consulting",
    "latitude":40.569844,
    "longitude":-122.433246
  },
  {
    "id":917,
    "name":"Jade Precision Medical Components",
    "latitude":40.124001,
    "longitude":-75.03756299999999
  },
  {
    "id":918,
    "name":"Mp Tools",
    "latitude":37.6955849,
    "longitude":-77.61072
  },
  {
    "id":919,
    "name":"GWC",
    "latitude":40.680776,
    "longitude":-73.997492
  },
  {
    "id":920,
    "name":"Bug Robotics LLC",
    "latitude":39.65296499999999,
    "longitude":-104.976319
  },
  {
    "id":922,
    "name":"Kentucky for Kentucky LLC",
    "latitude":38.0572712,
    "longitude":-84.481242
  },
  {
    "id":923,
    "name":"SBB Design, LLC",
    "latitude":36.0215258,
    "longitude":-80.3819984
  },
  {
    "id":910,
    "name":"The duMont Company LLC",
    "latitude":42.600656,
    "longitude":-72.6062929
  },
  {
    "id":921,
    "name":"Metal Flow Corp.",
    "latitude":42.8110006,
    "longitude":-86.0688916
  },
  {
    "id":924,
    "name":"Kohler Company",
    "latitude":43.7400273,
    "longitude":-87.77925979999999
  },
  {
    "id":925,
    "name":"Klawiter LLC",
    "latitude":42.788651,
    "longitude":-86.116207
  },
  {
    "id":926,
    "name":"Aquatic Access, Inc",
    "latitude":38.2201826,
    "longitude":-85.5639999
  },
  {
    "id":929,
    "name":"Schott Cycles LLC",
    "latitude":29.791403,
    "longitude":-95.378812
  },
  {
    "id":933,
    "name":"Haldean Brown",
    "latitude":37.7193786,
    "longitude":-122.4205106
  },
  {
    "id":934,
    "name":"Rachel Dietrich",
    "latitude":42.0864643,
    "longitude":-87.86892040000001
  },
  {
    "id":935,
    "name":"WidgetWorks Unlimited, LLC",
    "latitude":41.2055572,
    "longitude":-73.7697823
  },
  {
    "id":936,
    "name":"hornrim.com",
    "latitude":39.86504499999999,
    "longitude":-86.145039
  },
  {
    "id":939,
    "name":"Atelier Ace Hotel",
    "latitude":45.5235329,
    "longitude":-122.6757179
  },
  {
    "id":942,
    "name":"Herring Engineering",
    "latitude":35.0258899,
    "longitude":-81.2342226
  },
  {
    "id":944,
    "name":"Affinity Manufacturing Ltd",
    "latitude":49.1559818,
    "longitude":-122.8894967
  },
  {
    "id":945,
    "name":"Metallo Gasket Co.",
    "latitude":40.4920152,
    "longitude":-74.4562902
  },
  {
    "id":946,
    "name":"Femar Machine Inc.",
    "latitude":43.8111655,
    "longitude":-79.4934093
  },
  {
    "id":949,
    "name":"Marty Santalucia",
    "latitude":40.2584515,
    "longitude":-76.88650849999999
  },
  {
    "id":950,
    "name":"Marco Global",
    "latitude":47.659449,
    "longitude":-122.385091
  },
  {
    "id":951,
    "name":"Blue Star Plastics",
    "latitude":38.079952,
    "longitude":-84.493713
  },
  {
    "id":953,
    "name":"treDCAL",
    "latitude":38.02,
    "longitude":-84.49
  },
  {
    "id":954,
    "name":"Flow XO",
    "latitude":51.4502135,
    "longitude":51.4502135
  },
  {
    "id":955,
    "name":"Machine Sciences Corporation",
    "latitude":45.3353434,
    "longitude":-122.7745468
  },
  {
    "id":978,
    "name":"Optibike",
    "latitude":40.0334172,
    "longitude":-105.2573608
  },
  {
    "id":957,
    "name":"Adapting Designs",
    "latitude":45.8239473,
    "longitude":-108.4713673
  },
  {
    "id":959,
    "name":"Alexandre De Bie",
    "latitude":50.75861,
    "longitude":4.768333
  },
  {
    "id":960,
    "name":"Georgetown Trading Co.",
    "latitude":38.832374,
    "longitude":-77.0560519
  },
  {
    "id":962,
    "name":"The Siros Group, LLC",
    "latitude":34.2039638,
    "longitude":-118.3878868
  },
  {
    "id":963,
    "name":"The Brandery",
    "latitude":39.1108908,
    "longitude":-84.51573330000001
  },
  {
    "id":965,
    "name":"Esterline & Son Mfg",
    "latitude":39.828017,
    "longitude":-83.802829
  },
  {
    "id":966,
    "name":"Cape Fear Catalyst",
    "latitude":34.292411,
    "longitude":-77.900989
  },
  {
    "id":977,
    "name":"Loudon Machine Inc.",
    "latitude":39.112189,
    "longitude":-88.55118000000002
  },
  {
    "id":968,
    "name":"David Higdon",
    "latitude":35.961314,
    "longitude":-86.803962
  },
  {
    "id":969,
    "name":"Talus Innovations",
    "latitude":34.6125971,
    "longitude":-83.5248933
  },
  {
    "id":971,
    "name":"Rose Displays",
    "latitude":42.5181926,
    "longitude":-70.8880745
  },
  {
    "id":972,
    "name":"CarArtWork, Inc",
    "latitude":38.2476205,
    "longitude":-85.52759400000001
  },
  {
    "id":974,
    "name":"inFORM studio",
    "latitude":42.4320529,
    "longitude":-83.47831649999999
  },
  {
    "id":975,
    "name":"SW Services, LLC",
    "latitude":33.689253,
    "longitude":-112.047776
  },
  {
    "id":976,
    "name":"Mastro Company",
    "latitude":33.7906259,
    "longitude":-84.3975408
  },
  {
    "id":994,
    "name":"Hexaware Technologies",
    "latitude":19.1045894,
    "longitude":19.1045894
  },
  {
    "id":980,
    "name":"Whip Mix Corporation",
    "latitude":38.2003962,
    "longitude":-85.7539948
  },
  {
    "id":981,
    "name":"Glendo LLC.",
    "latitude":38.4099243,
    "longitude":-96.2350424
  },
  {
    "id":983,
    "name":"Machine Tech Inc",
    "latitude":29.5954524,
    "longitude":-90.74896269999999
  },
  {
    "id":985,
    "name":"Clippard Instrument Laboratory, Inc.",
    "latitude":39.213313,
    "longitude":-84.58404879999999
  },
  {
    "id":986,
    "name":"Pegasus Design, Inc.",
    "latitude":37.7067475,
    "longitude":-121.8138887
  },
  {
    "id":967,
    "name":"CARDONE Industries",
    "latitude":40.0340599,
    "longitude":-75.0961485
  },
  {
    "id":970,
    "name":"Macs Machine Shop",
    "latitude":39.114326,
    "longitude":-94.98210399999999
  },
  {
    "id":988,
    "name":"Yamazen",
    "latitude":42.052373,
    "longitude":-88.0606959
  },
  {
    "id":989,
    "name":"JT Machine Ltd.",
    "latitude":43.38422509999999,
    "longitude":-80.40739669999999
  },
  {
    "id":990,
    "name":"Kliegel Machine Co.",
    "latitude":42.147986,
    "longitude":-76.923129
  },
  {
    "id":991,
    "name":"TEKFAB",
    "latitude":44.845438,
    "longitude":-123.017216
  },
  {
    "id":993,
    "name":"Polymet",
    "latitude":39.304419,
    "longitude":-84.455118
  },
  {
    "id":995,
    "name":"Mac Tool & Die Corp",
    "latitude":41.6356909,
    "longitude":-80.1624416
  },
  {
    "id":997,
    "name":"EM Fabrication, LLC",
    "latitude":34.997655,
    "longitude":-80.597236
  },
  {
    "id":998,
    "name":"Elite Machining LLC",
    "latitude":38.0516666,
    "longitude":-84.4569839
  },
  {
    "id":999,
    "name":"Boca Bearings",
    "latitude":26.4891027,
    "longitude":-80.0879612
  },
  {
    "id":1000,
    "name":"Crutchfield Machine",
    "latitude":35.8350255,
    "longitude":-79.57950989999999
  },
  {
    "id":1002,
    "name":"TNT Custom Equipment Inc.",
    "latitude":41.1909599,
    "longitude":-81.475709
  },
  {
    "id":1004,
    "name":"Master Machining Inc.",
    "latitude":42.6808223,
    "longitude":-83.28719869999999
  },
  {
    "id":1006,
    "name":"New-Tech Tooling",
    "latitude":44.2949636,
    "longitude":-93.268827
  },
  {
    "id":1007,
    "name":"Hartville Machine & Mfg., Inc.",
    "latitude":37.3267801,
    "longitude":-92.9454963
  },
  {
    "id":1008,
    "name":"University of Kansas",
    "latitude":38.9587995,
    "longitude":-95.2502205
  },
  {
    "id":1009,
    "name":"Kevin Gough",
    "latitude":37.7890183,
    "longitude":-122.3915063
  },
  {
    "id":1013,
    "name":"G&S Foundry",
    "latitude":38.1986607,
    "longitude":-89.9954499
  },
  {
    "id":1014,
    "name":"University of Michigan",
    "latitude":42.2895167,
    "longitude":-83.7175962
  },
  {
    "id":1015,
    "name":"Gray & White",
    "latitude":38.2535695,
    "longitude":-85.7394868
  },
  {
    "id":1016,
    "name":"DESIGNERicstep",
    "latitude":38.058543,
    "longitude":-84.478563
  },
  {
    "id":1017,
    "name":"Swider Brass Fittings Inc.",
    "latitude":41.4806839,
    "longitude":-87.84382900000001
  },
  {
    "id":1018,
    "name":"Trademark Machine",
    "latitude":39.10197,
    "longitude":-84.28950499999999
  },
  {
    "id":1058,
    "name":"H.F.M. LLC",
    "latitude":38.959996,
    "longitude":-90.7955253
  },
  {
    "id":1011,
    "name":"Elliott Tool Technologies",
    "latitude":39.75227599999999,
    "longitude":-84.135167
  },
  {
    "id":1019,
    "name":"Davlan Engineering Inc.",
    "latitude":38.561748,
    "longitude":-90.454376
  },
  {
    "id":1020,
    "name":"Tammcor Industries",
    "latitude":37.8540909,
    "longitude":-84.56860549999999
  },
  {
    "id":1023,
    "name":"Fast Times Rods Inc.",
    "latitude":42.4826749,
    "longitude":-79.35191730000001
  },
  {
    "id":1024,
    "name":"Diller Scofidio + Renfro",
    "latitude":40.7515355,
    "longitude":-74.0064204
  },
  {
    "id":1026,
    "name":"Berkbinder & Brown",
    "latitude":42.2727198,
    "longitude":-87.8715617
  },
  {
    "id":1027,
    "name":"Bravo Sports USA",
    "latitude":33.91528,
    "longitude":-118.0484444
  },
  {
    "id":1028,
    "name":"Udemy",
    "latitude":37.7826875,
    "longitude":-122.3983425
  },
  {
    "id":1029,
    "name":"ID4A",
    "latitude":37.7794198,
    "longitude":-122.3959518
  },
  {
    "id":1030,
    "name":"Fuller Precision, Inc.",
    "latitude":34.2572205,
    "longitude":-86.8541195
  },
  {
    "id":1031,
    "name":"Parrish Productions",
    "latitude":38.05,
    "longitude":-84.5
  },
  {
    "id":1032,
    "name":"700bike",
    "latitude":39.92835300000001,
    "longitude":116.416357
  },
  {
    "id":1033,
    "name":"Canadian Bank Note Ltd.",
    "latitude":45.395781,
    "longitude":-75.7454831
  },
  {
    "id":1035,
    "name":"Seth Gover",
    "latitude":38.0488113,
    "longitude":-84.5091102
  },
  {
    "id":1036,
    "name":"Gray & White",
    "latitude":38.2535695,
    "longitude":-85.7394868
  },
  {
    "id":1038,
    "name":"Charlie C Campbell",
    "latitude":37.5697774,
    "longitude":-84.2970662
  },
  {
    "id":1060,
    "name":"DSI",
    "latitude":23.634501,
    "longitude":23.634501
  },
  {
    "id":1061,
    "name":"ConeXus World Global LLC",
    "latitude":38.2108167,
    "longitude":-85.54396849999999
  },
  {
    "id":1039,
    "name":"RMP Industrial Supply",
    "latitude":32.7035657,
    "longitude":-97.3239081
  },
  {
    "id":1040,
    "name":"Circle Precision Tool",
    "latitude":41.6423507,
    "longitude":-70.6276279
  },
  {
    "id":1041,
    "name":"John Martinez",
    "latitude":38.2142969,
    "longitude":-85.7717907
  },
  {
    "id":1042,
    "name":"Sassy n Classy Fashion",
    "latitude":33.9484676,
    "longitude":-118.2740368
  },
  {
    "id":1045,
    "name":"Skyview Customs",
    "latitude":37.9817391,
    "longitude":-84.485507
  },
  {
    "id":1046,
    "name":"Design Office Takebayashi Scroggin [DOTS]",
    "latitude":38.051816,
    "longitude":-84.49688599999999
  },
  {
    "id":1047,
    "name":"Paul Preissner",
    "latitude":41.914115,
    "longitude":-87.67771599999999
  },
  {
    "id":1048,
    "name":"Point Six Wireless, LLC",
    "latitude":38.003153,
    "longitude":-84.4416339
  },
  {
    "id":1049,
    "name":"ARKU",
    "latitude":39.273958,
    "longitude":-84.3687559
  },
  {
    "id":1051,
    "name":"JL CNC Programming",
    "latitude":29.5550062,
    "longitude":-98.595843
  },
  {
    "id":1054,
    "name":"Emerson Troop Inc",
    "latitude":34.0763221,
    "longitude":-118.3666181
  },
  {
    "id":1062,
    "name":"Thor Erickson",
    "latitude":-13.4382822,
    "longitude":-76.085444
  },
  {
    "id":1063,
    "name":"M Cubed Machine Werks",
    "latitude":39.79963,
    "longitude":-105.09472
  },
  {
    "id":1065,
    "name":"DC Rho, LLC",
    "latitude":36.099748,
    "longitude":-95.980346
  },
  {
    "id":1068,
    "name":"CirrusMio",
    "latitude":38.047396,
    "longitude":-84.492587
  },
  {
    "id":1069,
    "name":"Mechtronix LLC",
    "latitude":34.9587455,
    "longitude":-89.82063169999999
  },
  {
    "id":1070,
    "name":"B-Tech Precision Mfg. Inc.",
    "latitude":43.6486374,
    "longitude":-79.6536899
  },
  {
    "id":1071,
    "name":"Performance Innovation Engineering",
    "latitude":61.147716,
    "longitude":-149.878523
  },
  {
    "id":1057,
    "name":"Hymark",
    "latitude":37.787945,
    "longitude":-87.062755
  },
  {
    "id":1073,
    "name":"TMF Machining Inc.",
    "latitude":47.798915,
    "longitude":-122.657872
  },
  {
    "id":1072,
    "name":"Precision Products Group",
    "latitude":32.8910857,
    "longitude":-96.6677824
  },
  {
    "id":1074,
    "name":"Cape Fear Catalyst",
    "latitude":34.292411,
    "longitude":-77.900989
  },
  {
    "id":1095,
    "name":"E2 Fabrication",
    "latitude":35.81404630000001,
    "longitude":-90.6766634
  },
  {
    "id":1096,
    "name":"Skolkovo",
    "latitude":37.7922161,
    "longitude":-122.3920021
  },
  {
    "id":1099,
    "name":"Elite Machining LLC",
    "latitude":38.0516666,
    "longitude":-84.4569839
  },
  {
    "id":1100,
    "name":"SHADE",
    "latitude":40.80672879999999,
    "longitude":-73.9525773
  },
  {
    "id":1102,
    "name":"Victory Pieces",
    "latitude":37.9591461,
    "longitude":-91.7802251
  },
  {
    "id":1103,
    "name":"Rokcon Limited",
    "latitude":40.652348,
    "longitude":-79.821597
  },
  {
    "id":78,
    "name":"Mubea",
    "latitude":38.9704679,
    "longitude":-84.617806
  },
  {
    "id":1107,
    "name":"TruTech Engineering",
    "latitude":38.307215,
    "longitude":-121.158169
  },
  {
    "id":1112,
    "name":"Bosch Automotive Steering",
    "latitude":39.0183965,
    "longitude":-84.64305209999999
  },
  {
    "id":1101,
    "name":"Production Manufacturing, Inc.",
    "latitude":31.7471047,
    "longitude":-106.3107181
  },
  {
    "id":108,
    "name":"Ballard Machine Works",
    "latitude":47.6641886,
    "longitude":-122.3679805
  },
  {
    "id":298,
    "name":"Wauseon Machine and Manufacturing, Inc.",
    "latitude":41.5492182,
    "longitude":-84.14161469999999
  },
  {
    "id":1105,
    "name":"Allis Tool & Machine",
    "latitude":43.024625,
    "longitude":-88.031021
  },
  {
    "id":1106,
    "name":"Cole Manufacturing Corporation",
    "latitude":43.4311222,
    "longitude":-88.1577483
  },
  {
    "id":1111,
    "name":"JJR",
    "latitude":40.400453,
    "longitude":-75.58563699999999
  },
  {
    "id":1113,
    "name":"alpha machine shop",
    "latitude":37.7040397,
    "longitude":-122.4792337
  },
  {
    "id":440,
    "name":"East Coast Fabricators",
    "latitude":37.3439104,
    "longitude":-79.4989322
  },
  {
    "id":889,
    "name":"Lindon Precision Co., Inc.",
    "latitude":40.346611,
    "longitude":-111.743035
  },
  {
    "id":303,
    "name":"R&B Precision Inc.",
    "latitude":39.92233,
    "longitude":-84.275408
  },
  {
    "id":928,
    "name":"502 Fabrication and Manufacturing, Inc.",
    "latitude":38.3913757,
    "longitude":-85.4031406
  },
  {
    "id":152,
    "name":"Stearns Tool Company",
    "latitude":41.8096433,
    "longitude":-71.4271315
  },
  {
    "id":170,
    "name":"TRI-CITY TOOL & DIE",
    "latitude":41.445376,
    "longitude":-79.69990899999999
  },
  {
    "id":193,
    "name":"MRS Machining",
    "latitude":44.68298,
    "longitude":-91.1365129
  },
  {
    "id":443,
    "name":"Sunco Systems",
    "latitude":40.7863237,
    "longitude":-101.531696
  },
  {
    "id":739,
    "name":"Hafendorfer Machine",
    "latitude":38.2482544,
    "longitude":-85.5148507
  },
  {
    "id":153,
    "name":"laCrosse Enterprises, Inc.",
    "latitude":38.157957,
    "longitude":-85.649248
  },
  {
    "id":1156,
    "name":"Blue Grass Manufacturing Co.",
    "latitude":38.0382634,
    "longitude":-84.4511346
  },
  {
    "id":219,
    "name":"FirstBuild",
    "latitude":38.2185929,
    "longitude":-85.75425059999999
  },
  {
    "id":275,
    "name":"Swiss Precision Machining",
    "latitude":42.01859899999999,
    "longitude":-87.79461300000001
  },
  {
    "id":346,
    "name":"Skylon Inc.",
    "latitude":41.967253,
    "longitude":-79.33187199999999
  },
  {
    "id":427,
    "name":"Freeman Outdoor Gear LLC",
    "latitude":45.439246,
    "longitude":-122.772383
  },
  {
    "id":520,
    "name":"Winston Industries LLC",
    "latitude":38.211202,
    "longitude":-85.56151
  },
  {
    "id":527,
    "name":"Neufell Machining",
    "latitude":43.5647708,
    "longitude":-72.0205859
  },
  {
    "id":459,
    "name":"RBK Lathe, LLC",
    "latitude":41.71557809999999,
    "longitude":-72.86217959999999
  },
  {
    "id":485,
    "name":"CARDONE Industries ",
    "latitude":40.0340599,
    "longitude":-75.0961485
  },
  {
    "id":550,
    "name":"Coastal Milling Works",
    "latitude":42.415297,
    "longitude":-71.10880879999999
  },
  {
    "id":610,
    "name":"Steen & Sons Machine Shop, LLC",
    "latitude":43.4801197,
    "longitude":-112.0456732
  },
  {
    "id":616,
    "name":"Scott Custom Woodworks",
    "latitude":41.7094842,
    "longitude":-112.1652381
  },
  {
    "id":562,
    "name":"Integral Machining & Engineering",
    "latitude":27.925453,
    "longitude":-82.724665
  },
  {
    "id":575,
    "name":"LaserThing",
    "latitude":38.911866,
    "longitude":-77.194452
  },
  {
    "id":596,
    "name":"Paradigm Industrial",
    "latitude":39.782205,
    "longitude":-84.196691
  },
  {
    "id":621,
    "name":"Applied Engineering Inc.",
    "latitude":42.8808656,
    "longitude":-97.360153
  },
  {
    "id":648,
    "name":"Winston Industries LLC",
    "latitude":38.211202,
    "longitude":-85.56151
  },
  {
    "id":669,
    "name":"KETCO",
    "latitude":39.730035,
    "longitude":-84.06829700000002
  },
  {
    "id":688,
    "name":"US Millworks",
    "latitude":38.176328,
    "longitude":-85.754885
  },
  {
    "id":693,
    "name":"Bossard",
    "latitude":42.479093,
    "longitude":-92.48009599999999
  },
  {
    "id":854,
    "name":"PicoPascal Co.",
    "latitude":40.5127752,
    "longitude":-79.8329349
  },
  {
    "id":873,
    "name":"Marks Metal Technologies",
    "latitude":45.4026582,
    "longitude":-122.556903
  },
  {
    "id":932,
    "name":"Lakeside Machine, LLC",
    "latitude":35.7097234,
    "longitude":-81.9726441
  },
  {
    "id":1001,
    "name":"Concentric Turn",
    "latitude":42.6081423,
    "longitude":-83.0510596
  },
  {
    "id":1010,
    "name":"PDQ Machine, Inc.",
    "latitude":42.3748069,
    "longitude":-89.018366
  },
  {
    "id":1021,
    "name":"Boneal Custom Molding",
    "latitude":38.3794451,
    "longitude":-85.4384022
  },
  {
    "id":79,
    "name":"Thomas Engineering",
    "latitude":42.0663131,
    "longitude":-88.09323359999999
  },
  {
    "id":748,
    "name":"WBM, Inc.",
    "latitude":42.0307081,
    "longitude":-87.9831047
  },
  {
    "id":801,
    "name":"Richland, LLC",
    "latitude":35.2262341,
    "longitude":-87.07179500000001
  },
  {
    "id":812,
    "name":"Kelly Fabricators",
    "latitude":38.178413,
    "longitude":-85.6990934
  },
  {
    "id":856,
    "name":"Action Group Inc.",
    "latitude":39.990998,
    "longitude":-82.81670199999999
  },
  {
    "id":964,
    "name":"BIC Precision Machine",
    "latitude":39.300059,
    "longitude":-83.9574708
  },
  {
    "id":1003,
    "name":"Dakota Automation",
    "latitude":44.8946568,
    "longitude":-97.05115339999999
  },
  {
    "id":1050,
    "name":"Concord Manufacturing Co.",
    "latitude":42.171626,
    "longitude":-84.638153
  },
  {
    "id":1067,
    "name":"Jessen Manufacturing, Inc.",
    "latitude":41.692322,
    "longitude":-85.996377
  },
  {
    "id":1158,
    "name":"CrushList",
    "latitude":44.1077371,
    "longitude":-70.19899989999999
  },
  {
    "id":1159,
    "name":"Detekt Design Limited",
    "latitude":38.2214782,
    "longitude":-85.67944340000001
  },
  {
    "id":1160,
    "name":"Test User's Brwser Info",
    "latitude":50.9303889,
    "longitude":-1.4743022
  },
  {
    "id":1161,
    "name":"Test User's Brwser Info",
    "latitude":42.8140012,
    "longitude":-73.9814578
  },
  {
    "id":1162,
    "name":"Alro Steel",
    "latitude":41.8005876,
    "longitude":-86.3191056
  },
  {
    "id":1163,
    "name":"D&R Machine Company",
    "latitude":40.179209,
    "longitude":-75.0435916
  }
];
var markers = L.markerClusterGroup({iconCreateFunction: function(cluster) {
        var clusterSize = (parseInt(cluster.getChildCount())/5)+20;
        console.log(clusterSize);
        return L.divIcon({iconSize:[clusterSize,clusterSize],className:markerClass+"-cluster", html: '<span class="cluster-count">' + cluster.getChildCount() + '</span>' });
    }, polygonOptions:{color:'#000',weight:1,opacity:0.7,fillColor:'#000',fillOpacity:0.6}});
for (var key in suppliers) {
  var size;
  if(varySize == true){
    size = (Math.random()*(maxSize-minSize))+minSize;
  } else {
    size = sizeBasis
  }
  var markerClass, zOffset;
  if((Math.random()*5)<=1){
    markerClass = "icon-has-time";
    zOffset = 1000;
  } else {
    markerClass = "icon";
    zOffset = 0;
  }
  var divIcon = L.divIcon({iconSize:[size,size],className:markerClass});
  var supplier = suppliers[key];
  var sLat = supplier.latitude;
  var sLong = supplier.longitude;
  var sContent =  "<span class='marker-header'>"+supplier.name+"</span>";
      sContent += "<dl><dt>Address</dt>";
      sContent += "<dd>"+faker.fake('{{address.streetAddress}} St<br>{{address.city}}, {{address.stateAbbr}} {{address.zipCode}}')+"</dd>"
      sContent += "<lh>Machines</lh><dt>Types</dt><dd>Lathe, Mill, EDM</dd>";
      sContent += "<dt>Rates</dt><dd>30, 40, 50</dd></dl>";
      sContent += "<p class='supplier-link'><a href='#'>Details»</a></p>";
  var loopMarker = L.marker([sLat,sLong], {icon: divIcon,zIndexOffset:zOffset}).bindPopup(sContent).openPopup();
  markers.addLayer(loopMarker);
}
map.addLayer(markers);
</script>
</body>
</html>

