<div class="container mt-4 mb-4 bg-info">
	<div id="app" class="text-center">
		<h1>{{ title }}</h1>
		<hr>
		<h2 class="">
			<label for="count">{{ count }}</label>
		</h2>
		<hr>
		<button @click="modify()" class="btn btn-grey btn-sm">-</button>
		<button @click="modify(true)" class="btn btn-grey btn-sm">+</button>
	</div>
</div>
