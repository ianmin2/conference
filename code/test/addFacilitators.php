
<script src="../assets/js/jquery.min.js"></script>
<script>
	

var tutors = [
{ _name : "Prof. Moses L. Golola		", _capacity : " Director of  HIGHER EDUCATION CONSULT ( Private Education Consulting Firm) Kampala, Uganda "},

{ _name : "Pr. Jean-Pierre Mulumba Tshimanga	", _capacity : " General Field Secretary, Assistant to ECD President cum Youth, Chaplaincy & Music Director, East-Central Africa Division of Seventh-day Adventists "},

{  _name : "Pr. Steve Bina			", _capacity : "Communication & Satellite Evangelism Director, East-Central Africa Division of Seventh-day Adventists" },

{ _name : "Pr. Kigundu Ndwiga			", _capacity : "Kenyatta University,Adventist Chaplain"},

{ _name : "Dr. Nathaniel Walemba		", _capacity : " Dr. Nathaniel Walemba, Executive Secretary, East-Central Africa Division of Seventh-day Adventists (Dickson Kateeti-Associate Pastor; New Life Seventh-day Adventist Church, Nairobi)"},

{ _name : "Dr. Rei Towett kesis		", _capacity : " Ordained Pastor of the Seventh-day Adventist Church, Dean of Men & Lecturer, University of Eastern Africa-Baraton, Kapsabet" },

{  _name : "Dr. Paul O. Wahonya		", _capacity : "Deputy Vice-Chancellor; Student Affairs and Services, University of Eastern Africa-Baraton, Kapsabet"},

{ _name : "Nixon Mageka			", _capacity : "In Reach / Outreach Secretary, Association of Adventist Young Professionals, Kenya Chapter"},

{ _name : "Elizabeth A. Otieno		", _capacity : " Consultant, Humbled Heights International "},

{ _name : "Dr. Hilario delaTorre		", _capacity : "University of Eastern Africa-Baraton, Kapsabet "},

{ _name : "Pr. Lumwe Samuel			", _capacity : "Director for: Sabbath School Department, Personal Ministries, Office of Adventist Mission, Office of Evangelism-Mission to the Cities, Co-coordinator Office of Adventist Muslim Relations, Communication/AWR/AMC/Hope Channel Kenya – East Kenya Union Conference of the Seventh-day Adventist Church"},

{ _name : "Sylviah K. Oyugi			", _capacity : "Resource Mobilizer, Plan International cum Director, Association of Adventist Young Professionals, Kenya Chapter"},

{ _name : "Pr. Ceasar Wamalika		", _capacity : "Lecturer, University of Eastern Africa-Baraton, Kapsabet"},

{ _name : "Pr. Emmanuel Sumwa David		", _capacity : "Youth Director, Eastern Tanzania Conference of the Seventh-day Adventist Church, Morogoro-Tanzania "},

{ _name : "Pr. Steven Kisama			", _capacity : "Youth Director, East Congo Union Mission of the Seventh-day Adventist Church "},

{ _name : "Mrs. Esther Waiswa			", _capacity : "Youth and Chaplaincy Director, Uganda Union Mission of the Seventh-day Adventist Church "},

{ _name : "Pr. Elie Nyandwi			", _capacity : "Youth and Chaplaincy Director, Burundi Union Mission of Seventh-day Adventists "},

{ _name : "Pr. Paul Chepkwony			", _capacity : " Youth Director, Chaplaincy & Family Ministries, East Kenya Union Conference of the Seventh-day Adventist Church "},

{ _name : "Pr. Daniel MarachYel		", _capacity : " Youth Director, Greater Bahr El Ghazal Field of the Seventh-day Adventist Church; South Sudan "},

{ _name : "Pr. Daniel Abidan M’masi		", _capacity : " Adventist Chaplain, Moi University and University of Eldoret and Eldoret Polytechnic, Western Kenya Conference of Seventh-day Adventists" },

{ _name: "Pr. kasongo Katembo 			", _capacity : " Youth Director, North East Congo Union Mission of Seventh-day Adventist Church" },

{ _name : "Prof. Moses L. Golola		", _capacity : "Director of  HIGHER EDUCATION CONSULT ( Private Education Consulting Firm) Kampala, Uganda"},

{ _name : "Nixon Mageka			", _capacity : " In Reach / Outreach Secretary, Association of Adventist Young Professionals, Kenya Chapter"},

{ _name : "Prof. Gershom Amayo		", _capacity : " Retired Educationist, Kenya Lake Conference of The Seventh-day Adventist Church"},

{ _name : "Celia Asila Mwanga			", _capacity : " Campus Director, Athletes in Action, Kenya"},

{ _name : "Pr. Elijah Makhanu			", _capacity : " District Leader, Lwandeti District, Western Kenya Conference, West Kenya Union Conference of Seventh-day Adventists"},

{ _name : "Pr. Japheth Ochorokodi		", _capacity : "Executive Secretary, West Kenya Union Conference of Seventh-day Adventists "},

{ _name : "Hon. Tom. J. Kajwang		", _capacity : " Member of Parliament,Ruaraka Constituency, Nairobi, Kenya"},

{ _name : "Pr. Tom Mwombo			", _capacity : " County Chaplain, Homa Bay County; Kenya Lake Conference of the Seventh-day Adventist Church"},

{ _name : "Mrs. Sarah Jepkemboi Chumo Serem	", _capacity : "Chairperson, Salaries & Remuneration Commission, Kenya"},

{ _name : "Pr. Mahlon Juma			", _capacity : " University Chaplain, University of Eastern Africa-Baraton, Kapsabet"},

{ _name : "Pr. Lagu Charles Darius		", _capacity : "Youth / Education / Sabbath School and Chaplaincy Director, Greater Equatorial Field, South Sudan Attached Territory (SSAT) "},

{ _name : "Pr. Daudi Ndekeja			", _capacity : " District Leader, Sirari District, Mara Conference, Northern Tanzania Union Mission of The Seventh-day Adventist Church"},

{ _name : "Salome Chebitok			", _capacity : " Western Kenya Conference of The Seventh-day Adventist Church"},

{ _name : "Pr. John Mafaabi			", _capacity : "Education/Music/Chaplaincy Director,  Central Uganda Conference of the Seventh-day Adventist Church"},

{ _name : "Elder Elkana Kerosi,		", _capacity : "General Field Secretary, Public RELATIONS, Religious Liberty & Adventist Mission Director, East-Central Africa Division of Seventh-day Adventists"},

{ _name : "Pr. Daudi Ndekeja			", _capacity : "District Leader, Sirari District, Mara Conference, Northern Tanzania Union Conference of The Seventh-day Adventist Church"},

{ _name : "Christine Bonareri Oyugi		", _capacity : " Christine Bonareri Oyugi, Treasurer / Education & Seminars / and Recruitment Director, Association of Adventist Young Professionals, Kenya Chapter and CPA."},

{ _name : "Jared Okello Otieno		", _capacity : "Audit Manager, P.J.J. and Associates Kisumu"},

{ _name : "Pr. Francis Njau			", _capacity : "Retired Pastor and Author, Central Kenya Conference of Seventh-day Adventist Church"},

{ _name : "Pr. Joseph Dzombe			", _capacity : "Youth / Chaplaincy and Music Director, Southern Tanzania Union Mission of The Seventh-day Adventist Church"},

{ _name : "Prof. Mary N. Getui		", _capacity : "Chairperson – National AIDS Control Council Kenya, cum Senior Lecturer, Catholic University of Eastern Africa; Nairobi"},

{ _name : "Eng. Meshack Kidenda		", _capacity : "Director General, Kenya National Highways Authority (KeNHA)"},

{ _name : "Pr. Igin Soka			", _capacity : "The Adventist Mission Co-ordinator, North East Tanzania Conference of The Seventh-day Adventist Church"},

{ _name : "Pr. Philip Gai			", _capacity : "Publishing & Spirit of Prophecy Director, East-Central Africa Division of Seventh-day Adventists"},

{ _name : "Prof. Rose Aoko Ogwang’ Odhiambo 	", _capacity : "Chief Executive Officer/Commission Secretary, National Gender and Equality Commission"},

{ _name : "Pr. Elias Kasika 			", _capacity : "Youth and Chaplaincy Director, Northern Tanzania Union Conference of Seventh-day Adventists "},

{ _name : "Pr. Gregoire Mbaya 		", _capacity : "Youth and Chaplaincy Director, West Congo Union Mission of Seventh-day Adventists"},

{ _name : "Dr. Israel Kafeero 		", _capacity : "Pastor and Credentialed Hospital Chaplain, Executive Secretary, Uganda Union Mission of Seventh-day Adventists "},

{ _name : "Mrs. Sarah Mokeira Nyong’ora 	", _capacity : "Administrator, Lay Institute for Global Health Training (LIGHT)-Kenya"},

{ _name : "Dr. Fesaha Tsegaye 		", _capacity : "Health Ministries Director, East-Central Africa Division of The Seventh-day Adventist Church"},

{ _name : "Kira Mishael 			", _capacity : "Businessman cum  Deputy Director, Association of Adventist Young Professionals, Kenya Chapter"},

{ _name : "Mr. Jeremia Maluila 		", _capacity : "Science Teacher,  Eastern Tanzania Conference, Kibaha,  Southern Tanzania Union Mission of Seventh-day Adventists "},

{ _name : "Janina Iaving 			", _capacity : " General Conference of Seventh-day Adventists,  United States of America"},

{ _name : "Pr. Daudi Ndekeja 			", _capacity : "Sirari District, Mara Conference, Northern Tanzania Union Mission of The Seventh-day Adventist Church"},

{ _name : "Dr. Missah Israil Hiskia 		", _capacity : " Associate Youth Director, General Conference of Seventh-day Adventists; United States of America"},

{ _name : "Mrs. Sarah Maiywa 			", _capacity : ""},

{ _name : "Mrs. Betty Mahlon 			", _capacity : ""}
]

  
for( tutor in tutors ){

	//console.log ( tutors[tutor]._capacity + "\n" );
	$.post(
		'../proc.php', 
		{action: "addFacilitator", _name : tutors[tutor]._name, _capacity : tutors[tutor]._capacity },
		function(data, response){
			console.log(JSON.parse(data).data.message);
		}
	);

}


	
</script>







/* WORKSHOPS */
	_name, _topic, _day, _time, _facilitator, _room, _descripiton
















<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<4
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

_atendee = $("#_atendee").val();
_w1a = $("#_w1a").val();
_w1b = $("#_w1b").val();
_w2a = $("#_w2a").val();
_w2b = $("#_w2b").val();
_w3a = $("#_w3a").val();
_w3b = $("#_w3b").val();
_w4a = $("#_w4a").val();
_w4b = $("#_w4b").val();
_w5a = $("#_w5a").val();
_w5b = $("#_w5b").val();
_w6a = $("#_w6a").val();
_w6b = $("#_w6b").val();
_w7a = $("#_w7a").val();
_w7b = $("#_w7b").val();
_p1 = $("#_p1").val();
_p2 = $("#_p2").val();
_p3 = $("#_p3").val();
_p4 = $("#_p4").val();
_p5 = $("#_p5").val();


if( _atendee.length < 1 ){
$('#_atendee').focus();
} else if ( _w1a.length < 1 ){
$('#_w1a').focus();
} else if ( _w1b.length < 1 ){
$('#_w1b').focus();
} else if ( _w2a.length < 1 ){
$('#_w2a').focus();
} else if ( _w2b.length < 1 ){
$('#_w2b').focus();
} else if ( _w3a.length < 1 ){
$('#_w3a').focus();
} else if ( _w3b.length < 1 ){
$('#_w3b').focus();
} else if ( _w4a.length < 1 ){
$('#_w4a').focus();
} else if ( _w4b.length < 1 ){
$('#_w4b').focus();
} else if ( _w5a.length < 1 ){
$('#_w5a').focus();
} else if ( _w5b.length < 1 ){
$('#_w5b').focus();
} else if ( _w6a.length < 1 ){
$('#_w6a').focus();
} else if ( _w6b.length < 1 ){
$('#_w6b').focus();
} else if ( _w7a.length < 1 ){
$('#_w7a').focus();
} else if ( _w7b.length < 1 ){
$('#_w7b').focus();
} else if ( _p1.length < 1 ){
$('#_p1').focus();
} else if ( _p2.length < 1 ){
$('#_p2').focus();
} else if ( _p3.length < 1 ){
$('#_p3').focus();
} else if ( _p4.length < 1 ){
$('#_p4').focus();
} else if ( _p5.length < 1 ){
$('#_p5').focus();
}


{ action: "", _atendee : _atendee, _w1a : _w1a, _w1b : _w1b, _w2a : _w2a, _w2b : _w2b, _w3a : _w3a, _w3b : _w3b, _w4a : _w4a, _w4b : _w4b, _w5a : _w5a, _w5b : _w5b, _w6a : _w6a, _w6b : _w6b, _w7a : _w7a, _w7b : _w7b, _p1 : _p1, _p2 : _p2, _p3 : _p3, _p4 : _p4, _p5 : _p5, }
