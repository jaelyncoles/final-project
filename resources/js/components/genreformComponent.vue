<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<div v-for="genre in userGenres" class="col-md-3" :key="genre.name">
							<input type="checkbox" :id="genre.id" :name="genre.name" :value="genre.id">
							<label :for="genre.name">{{genre.name}}</label>
						</div>

						<div class="form-group mb-0">
							<div class="col-md-6 offset-md-4">
								<button @click="testing" type="submit" class="btn btn-primary">Next</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "genreformComponent",
		data() {
			return {
				userGenres: [
					{ id: 1, name: "Rock" },
					{ id: 2, name: "Hip-Hop" },
					{ id: 3, name: "Reggae" },
					{ id: 4, name: "Dubstep" },
					{ id: 5, name: "Techno" },
					{ id: 6, name: "Poetry" },
					{ id: 7, name: "Live Music" },
					{ id: 8, name: "Local Artists" },
					{ id: 9, name: "Cover Bands" },
					{ id: 10, name: "Karaoke" },
					{ id: 11, name: "Country" },
					{ id: 12, name: "R &amp; B" },
					{ id: 13, name: "Comedy" },
					{ id: 14, name: "Burlesque" },
					{ id: 15, name: "Revues" }
				]
			};
		},
		methods: {
			testing() {
				console.log("submitted:");
			}
		}
	};
</script>