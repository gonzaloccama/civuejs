<script type="text/javascript">

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
