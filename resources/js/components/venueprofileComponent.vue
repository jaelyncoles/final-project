<template>
    <div>
       <div>
        <ul>
            <li v-for="post in venuePosts" :key="post"> </li>
            </ul>
      </div>
      </div>

</template>
<script>

export default {
        name:'venueprofileComponent',
        data(){
            return {
            

            };
        },
        methods: {
            getVenueprofiles(){

                axios
                .get('/venueprofiles')
                .then(Response=> {
                    this.venueprofiles = Response.data;
                    for(let i in this.venueprofiles) {
                        this.venueprofileObject.push(this.venueprofiles[i]);
                    }
                })
                .catch(error=>console.log(error));
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getVenueprofiles();
        }
    }
    </script>