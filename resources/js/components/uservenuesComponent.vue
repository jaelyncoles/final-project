<template>
	<div class="container">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">Your Favorites</div>

						<div class="card-body">
							<ul>
								<li v-for="venue in uservenues" v-bind:key="venue">{{users.venuename}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name:'uservenueComponent',
        data(){
            return {
            

            };
        },
        methods: {
            getuserVenues(){

                axios
                .get('/uservenues')
                .then(Response=> {
                    this.uservenues = Response.data;
                    for(let i in this.uservenues) {
                        this.venueObject.push(this.favs[i]);
                    }
                })
                .catch(error=>console.log(error));
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getuserVenues();
        }
    }
</script>