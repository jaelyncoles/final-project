<template>
<div>
     <ul>
            <li v-for="post in venuePosts" :key="post" id='newsFeed'> </li>
            </ul>
            
    </div>
</template>

<script>
    export default {
        name:'userprofileComponent',
        data(){
            return {
            

            };
        },
        props: ['username'],
   
   methods:{
   getuserprofiles(){

                axios
                .get('/userprofile')
                .then(Response=> {
                    this.userprofile = Response.data;
                    for(let i in this.venueprofile) {
                        this.venueprofileObject.push(this.userprofile[i]);
                    }
                })
                .catch(error=>console.log(error));
            },
        getposts(){

                axios
                .get('/favposts')
                .then(Response=> {
                    this.uservenuefavs = Response.data;
                    for(let i in this.uservenuefavs) {
                        this.venueprofileObject.push(this.userprofiles[i]);
                    }
                })
                .catch(error=>console.log(error));
            },

        mounted() {
            console.log('Component mounted.')
            this.getuserprofiles();
        }
    }
    }

</script>

<style lang="scss" scoped>

</style>