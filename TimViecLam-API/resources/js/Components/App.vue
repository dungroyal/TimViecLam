<template>
    <div class="container">
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>
    export default{
         data(){
        return{
            categories:[],
            alert:'HAHHA'
        }
    },
    created:function(){
        this.showCategory();
    },
    methods:{
        showCategory(){
            this.axios.get('/category')
            .then((res)=>{this.categories=res.data})
            .catch((error)=>{this.alert=error});
        },
        deleteCategory(id){
            if(confirm('Are you sure?')){
                this.axios.delete('/category/'+id)
                .then((res)=>{this.categories=res.data.categories;this.alert=res.data.alert})
                .catch((error)=>{this.alert=error});
            }
        }
    }
    }
</script>