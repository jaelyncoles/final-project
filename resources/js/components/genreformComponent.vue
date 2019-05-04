<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<div class="row" v-for="index in 5" :key="index">
							<div v-for="genre in userGenres" class="col-md-3" :key="genre">
								<input type="checkbox" :id="genre.name" :name="genre.name" value="">
								<label :for="genre.name">{{genre.name}}</label>
							</div>
						</div>
						 <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    
                                </button>
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
				userGenres:[
                {name: 'Rock'},
                {name:'Hip-Hop'},
                {name:'Reggae'},
                {name:'Dubstep'},
                {name:'Techno'},
                {name: 'Poetry'},
                {name:'Live Music'},
                {name:'Local Artists'},
                {name:'Cover Bands'},
                {name:'Karaoke'},
                {name: 'Country'},
                {name:'R &amp; B'},
                {name:'Comedy'},
                {name:'Burlesque'},
                {name:'Revues'},
                ]
				
			};
		}
	};
</script>