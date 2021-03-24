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
