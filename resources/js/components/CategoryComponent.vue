<template>

<div>
    <div class="col-md-4">
                <label class="form-label">دسته والد</label>
                <select id="parent_id" class="form-control" name="parent_id" v-model="selected" @change="onChoose()">
                    <option id="root" value="" :selected="true">ریشه</option>
                    <option id="unRoot" v-for="category in categories" :value="category.id">{{category.name}}</option>
                </select>
            </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              categories:[],
              selected:[],
          }
        },
        mounted() {
            axios.get('/api/categories').then(
                res=>{
                    this.categories=res.data.categories;
                }
            ).catch(err=>{
                console.log(err)
            })
        },
        methods:{
            onChoose:function (){
                axios.post('/api/categories/value',this.selected).then(res=>{
                    if (this.selected>0) {
                        document.getElementById('hide').classList.add('d-none');
                    }else {
                        document.getElementById('hide').classList.remove('d-none');
                    }
                }).catch(err=>{
                    console.log(err)
                })
            }
        }
    }
</script>
