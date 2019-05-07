<template>
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<!-- <form method="POST" action="{{ route('') }}"> -->
							<!-- @csrf -->
							<!-- <div class="row" v-for="index in 5" :key="index"> -->
								<div v-for="genre in userGenres" class="col-md-3" :key="genre">
									<input type="checkbox" :id="genre.name" :name="genre.name" value>
									<label :for="genre.name">{{genre.name}}</label>
								</div>
							<!-- </div> -->
							<div class="form-group mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary"></button>
								</div>
							</div>
						<!-- </form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
    export default {
        name:'venuesComponent',
        data(){
            return {
            

            };
        },
        methods: {
            getVenues(){

                axios
                .get('/venues')
                .then(Response=> {
                    this.venues = Response.data;
                    for(let i in this.venues) {
                        this.venueObject.push(this.venues[i]);
                    }
                })
                .catch(error=>console.log(error));
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getVenues();
        }
    }
</script>