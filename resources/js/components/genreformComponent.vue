<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Choose Your Genres of Music</div>
					<div class="card-body">
						<div class="row" v-for="index in 5" :key="index">
							<div v-for="genre in userGenres" class="col-md-3" :key="genre">
								<input type="checkbox" :id="name" :name="name" value="{{ old('name') }}">
								<label :for="name">{{name}}</label>
							</div>
						</div>
						 <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('NEXT') }}
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
				
			};
		}
	};
</script>