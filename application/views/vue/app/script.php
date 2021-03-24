<script type="text/javascript">
	const app = Vue.createApp({
		data() {
			return {
				title: 'Contador App',
				count: 0
			}
		},
		methods: {
			modify(itm = false) {
				if (itm) {
					this.count += 1;
				} else {
					this.count ? this.count -= 1 : 0;
				}
			}
		},
	}).mount('#app');

	console.log(app);
</script>
