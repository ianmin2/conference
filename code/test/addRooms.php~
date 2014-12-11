<script src="../assets/js/jquery.min.js"></script>
<script>

var rooms = [

	{ _name : 'Amphi-theatre' },
	{ _name : 'R.109' },
	{ _name : 'R.16' },
	{ _name : 'R.15' },
	{ _name : 'R.347' },
	{ _name : 'R.101' },
	{ _name : 'R.102' },
	{ _name : 'R.204' },
	{ _name : 'R.202' },
	{ _name : 'R.201' },
	{ _name : 'R.206' },
	{ _name : 'R.207' },
	{ _name : 'Conference Room' },
	{ _name : 'Chapel' },
	{ _name : 'Auditorium' }

];

for( room in rooms ){

	$.post(
		'../proc.php',
		{ action: "addRoom", _name: rooms[room]._name },
		function( data, result){
			console.log( JSON.parse(data).data.message );
		}
	);

}

</script>

