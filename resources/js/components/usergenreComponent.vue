<template>
    <div class="container">
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Favorites</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="genre in genres">
                            {{ genreName }}
                            </li>
        
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
