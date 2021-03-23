<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Vue</title>
	<!-- MDB icon -->
	<!--	<link rel="icon" href="--><? //= base_url() ?><!--assets/img/mdb-favicon.ico" type="image/x-icon">-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/vue/vuetify.min.css">


</head>
<body>

<div class="container mt-4 mb-4">
	<div id="app">

		<v-app>
			<v-main>
				<v-card>
					<v-card-title>
						<v-text-field
								v-model="search"
								append-icon="mdi-magnify"
								label="Buscar..."
								single-line
								hide-details
								v-on:keyup="fetchData"
						></v-text-field>
					</v-card-title>
					<v-data-table class="mx-auto mt-5"
								:headers="columnas"
								:items="articulos"
								:footer-props="{
										showFirstLastPage: true,
										firstIcon: 'mdi-arrow-collapse-left',
										lastIcon: 'mdi-arrow-collapse-right',
										prevIcon: 'mdi-minus',
										nextIcon: 'mdi-plus'
								}"
								multi-sort
								  :min="1"

					>
					</v-data-table>
				</v-card>
			</v-main>
		</v-app>
	</div>
</div>


<!-- jQuery -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->


<!-- Vue-->
<script type="text/javascript" src="<?= base_url() ?>assets/vue/vue.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/vue/vuetify.js"></script>

<script type="text/javascript"></script>

<script type="text/javascript">
	const BASE_URL = "<?= base_url() ?>";
	var _app_ = new Vue({
		el: '#app',
		vuetify: new Vuetify(),
		data() {
			return {
				search: '',
				columnas: [
					{text: 'DNI', value: 'dni', class: 'blue darken-4 white--text'},
					{text: 'Nombres', value: 'nombres', class: 'blue darken-4 white--text'},
					{text: 'Apellido Paterno', value: 'ape_pat', class: 'blue darken-4 white--text'},
					{text: 'Apellido Materno', value: 'ape_mat', class: 'blue darken-4 white--text'},
					{text: 'Sexo', value: 'sexo', class: 'blue darken-4 white--text'},
					{text: 'Fecha Nacimiento', value: 'fecha_nacimiento', class: 'blue darken-4 white--text'},
				],
				articulos: []
			}
		},

		created(){
			this.fetchData();
		},
		methods: {
			fetchData(){
				let ths = this;
				// axios.post(BASE_URL + 'welcome/res_data',{
				// 	search: ths.search,
				// }).then(res => {
				// 	ths.articulos = res.data;
				// });
				$.ajax({
					url:BASE_URL + 'welcome/res_data',
					method: 'POST',
					data : {
						search: ths.search,
					},
					success:function (res){
						var res_ = JSON.parse(res);
						ths.articulos = res_;
					}
				});
			},

		},
	})


</script>

</body>
</html>
