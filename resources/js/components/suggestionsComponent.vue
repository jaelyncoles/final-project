<template>
	<div>
		<div class="card-group">
			<div class="card">
				<img class="card-img-top" src alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p
						class="card-text"
					>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">
						<!-- route to profile axios call to route -->
						<small class="text-muted">Click to view Profile</small>
					</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "suggestionsComponent",
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

<style lang="scss" scoped>
</style>