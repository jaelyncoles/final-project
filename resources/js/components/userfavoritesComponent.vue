<template>
	<div class="container">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">Your Favorites</div>

						<div class="card-body">
							<ul>
								<li v-for="fav in userfavs" v-bind:key="fav">{{ }}</li>

								<li v-for="venue in uservenues" v-bind:key="venue">{{users.venuename}}</li>
							</ul>
						</div>
						<!-- route to user genre form -->
						<button>Edit Favorites</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "userfavoritesComponent",
		data() {
			return {};
		},
		methods: {
			getGenres() {
				axios
					.get("/favs")
					.then(Response => {
						this.favs = Response.data;
						for (let i in this.favs) {
							this.favObject.push(this.favs[i]);
						}
					})
					.catch(error => console.log(error));
			}
		},
		mounted() {
			console.log("Component mounted.");
			this.getGenres();
		}
	};
</script>
